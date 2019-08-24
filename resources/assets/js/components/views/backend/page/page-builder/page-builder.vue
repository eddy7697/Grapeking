<template>
    <div class="row" v-if="isLoaded">
        <div class="col-md-9">
            <input type="text" class="form-control ch-product-title" name="title" value="" placeholder="最新消息標題" v-model="pageContent.title">
        </div>
        <div class="col-md-3">
            <button class="btn btn-primary btn-block" @click="testAC">儲存頁面</button>
        </div>
        <div class="col-md-12">
            
            <!-- <ckeditor
                class="ch-product-description"
                :config="ckConfig"
                v-model="pageContent.content">
            </ckeditor> -->
            <div class="panel__top">
                <div class="panel__basic-actions"></div>
                <div class="panel__devices"></div>
                <div class="panel__switcher"></div>
            </div>
            <div class="editor-row" :style="`height: ${containerHeight}`">
                <div class="editor-canvas">
                    <div id="gjs">

                    </div>
                    <!-- <div id="gjs" v-html="pageContent.content">

                    </div> -->
                </div>
                <div class="panel__right">
                    <div class="layers-container"></div>
                    <div class="styles-container"></div>
                    <div class="traits-container"></div>
                    <div class="blocks-container">
                        <div id="blocks"></div>
                    </div>
                </div>
            </div>
            


            <!-- <div id="gjs" style="height:0px; overflow:hidden">

            </div> -->
        </div>

        <div class="col-md-3">
            <!-- <div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title">
    					代表圖片
    				</h3>
    			</div>
    			<div class="panel-body">
                    <a v-if="pageContent.featureImage === null" @click="selectFeatureImg()">設定代表圖片</a>
                    <div v-else class="">
                        <img v-bind:src="pageContent.featureImage" id="featurePreview" style="width: 100%" @click="selectFeatureImg()">
                        <p>點選圖片以編輯或更新</p>
                        <a @click="deleteFeatureImg()">刪除代表圖片</a>
                    </div>
    			</div>
    		</div> -->
            <!-- <div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title">
    					儲存頁面區塊
    				</h3>
    			</div>
                <div class="panel-footer">
                    <button class="btn btn-success" type="button" name="button" @click="savePage">儲存頁面</button>
                </div>
    		</div> -->
        </div>

    </div>
</template>

<script>
    import Ckeditor from 'vue-ckeditor2';
    import grapeMethods from './grapeMethods.js'
    // import grapesjs from 'grapesjs'
    // import 'grapesjs/dist/css/grapes.min.css';

    export default {
        components: {
            Ckeditor
        },
        mounted() {
            localStorage.clear()
        },
        mixins: [grapeMethods],
        data() {
            return {
                isLoaded: false,
                isEdit: false,
                guid: $('#row-guid').val(),
                pageContent: {
                    title: null,
                    content: null,
                    css: null,
                    locale: 'en',
                    featureImage: null
                },
                containerHeight: '700px',
                ckConfig: {
                    height: 300,
                    allowedContent: true,
                    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=' + $('meta[name="csrf-token"]').attr('content'),
                    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=' + $('meta[name="csrf-token"]').attr('content')
                },
                token: $('meta[name="csrf-token"]').attr('content'),
            }
        },
        created: function () {
            if (this.guid) {
                this.getPage(this.guid);
                this.isEdit = true;
            } else {
                this.isLoaded = true;
            }
            this.builderInitial()
            $('.loading-bar').fadeOut('100')
        },
        computed: {
        },
        methods: {
            savePage: function () {
                var self = this;
                var token = this.token;
                var pageContent = {
                    title: this.pageContent.title,
                    content: JSON.stringify({
                        locale: this.pageContent.locale,
                        content: this.pageContent.content
                    }),
                    featureImage: this.pageContent.featureImage
                };

                axios.post(self.isEdit ? '/admin/page/update/' + self.guid : '/admin/page/add', pageContent)
                    .then(res => {
                        // window.location = '/cyberholic-system/page/list';
                    })
                // $.ajax({
                //     url: self.isEdit ? '/admin/page/update/' + self.guid : '/admin/page/add',
                //     type: 'POST',
                //     dataType: 'json',
                //     data: pageContent,
                //     beforeSend: function(xhr) {
                //         xhr.setRequestHeader('X-CSRF-TOKEN', token);
                //     }
                // })
                // .done(function() {
                //     // window.location = '/cyberholic-system/page/list';
                //     console.log("success");
                // })
                // .fail(function() {
                //     console.log("error");
                // })
                // .always(function() {
                //     console.log("complete");
                // });

            },
            selectFeatureImg: function () {
                var self = this;

                window.open('/laravel-filemanager' + '?type=Images', 'FileManager', 'width=900,height=600');
                window.SetUrl = function (url, file_path) {
                    self.pageContent.featureImage = file_path;
                };
            },
            getPage: function (guid) {
                var self = this;

                axios.get(`/admin/page/get/${guid}`)
                    .then(res => {
                        self.pageContent.title = res.data.title;
                        self.pageContent.content = JSON.parse(res.data.content).content;
                        self.pageContent.locale = JSON.parse(res.data.content).locale;
                        self.pageContent.featureImage = res.data.featureImage;

                        localStorage[`${this.guid}-html`] = JSON.parse(res.data.content).content ? JSON.parse(res.data.content).content : ""
                        localStorage[`${this.guid}-css`] = JSON.parse(res.data.content).css ? JSON.parse(res.data.content).css : ""

                        self.isLoaded = true;

                        this.$nextTick(() => {
                            this.builderInitial()
                        })
                    }).catch(err => {
                        console.log(err)
                        console.log('error')
                    })

            },
            deleteFeatureImg: function () {
                this.pageContent.featureImage = null;
            },
            thumb: function (url) {
                var urlArray = url.split('/');
                var newUrl = urlArray[0];

                for (var i = 1; i < (urlArray.length - 1); i++) {
                    newUrl = newUrl + '/' + urlArray[i];
                }

                newUrl = newUrl + '/thumbs/' + urlArray[urlArray.length - 1];

                return newUrl;
            },
            showMessage: function (type, string) {
                toastr[type](string);
            }
        }
    }
</script>

<style lang="scss">
    /* Let's highlight canvas boundaries */
#gjs {
  border: 3px solid #444;
}

/* Reset some default styling */
.gjs-cv-canvas {
  top: 0;
  width: 100%;
  height: 100%;
}

// .gjs-block {
//     width: auto;
//     height: auto;
//     min-height: auto;
// }

.panel__top {
  padding: 0;
  width: 100%;
  display: flex;
  position: initial;
  justify-content: center;
  justify-content: space-between;
}
.panel__basic-actions {
  position: initial;
}
.editor-row {
  display: flex;
  justify-content: flex-start;
  align-items: stretch;
  flex-wrap: nowrap;
//   height: 300px;
}

.editor-canvas {
  flex-grow: 1;
}

.panel__right {
  flex-basis: 230px;
  position: relative;
  overflow-y: auto;
  background-color: #444;
}

.gjs-two-color {
    color: #ddd;
}
.gjs-one-bg {
    background-color: #444;
}
.panel__switcher {
  position: initial;
}
.panel__devices {
  position: initial;
}

</style>