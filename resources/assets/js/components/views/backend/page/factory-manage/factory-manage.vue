<template>
    <div class="row" v-if="isLoaded">
        <div class="col-md-9">
            <el-tabs v-model="activeName" type="card">
                <el-tab-pane :label="`實驗室設備 (${selectedLocale})`" name="first">
                    <draggable class="row" v-model="pageContent[selectedLocale].lab">
                        <div class="col-md-3 fac-pic" v-for="(item, index) in pageContent[selectedLocale].lab" :key="index">
                            <el-card :body-style="{ padding: '0px' }">
                            <div class="thumb" :style="`background-image: url('${item.url}')`"></div>
                            <div style="padding: 14px;">
                                <!-- <span style="font-size: 18px">{{item.label}}</span> -->
                                <el-input v-model="item.label" />
                                <div class="bottom clearfix">
                                <el-button type="danger" icon="el-icon-delete" class="button" @click="removePic('lab', index)" circle></el-button>
                                </div>
                            </div>
                            </el-card>
                        </div>
                        <div class="col-md-3 add-pic-btn">
                            <div class="btn-box" @click="addImage('lab')">
                                <span><i class="el-icon-picture-outline"></i><br>新增圖片</span>                                
                            </div>
                        </div>
                    </draggable>
                </el-tab-pane>
                <el-tab-pane :label="`生產設備 (${selectedLocale})`" name="second">
                    <draggable class="row" v-model="pageContent[selectedLocale].production">
                        <div class="col-md-3 fac-pic" v-for="(item, index) in pageContent[selectedLocale].production" :key="index">
                            <el-card :body-style="{ padding: '0px' }">
                            <div class="thumb" :style="`background-image: url('${item.url}')`"></div>
                            <div style="padding: 14px;">
                                <!-- <span style="font-size: 18px">{{item.label}}</span> -->
                                <el-input v-model="item.label" />
                                <div class="bottom clearfix">
                                <el-button type="danger" icon="el-icon-delete" class="button" @click="removePic('production', index)" circle></el-button>
                                </div>
                            </div>
                            </el-card>
                        </div>
                        <div class="col-md-3 add-pic-btn">
                            <div class="btn-box" @click="addImage('production')">
                                <span><i class="el-icon-picture-outline"></i><br>新增圖片</span>                                
                            </div>
                        </div>
                    </draggable>
                </el-tab-pane>
            </el-tabs>
        </div>

        <div class="col-md-3">
            <div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title">
    					儲存照片
    				</h3>
    			</div>
    			<div class="panel-body">
                    <el-radio-group v-model="selectedLocale" size="medium">
                        <el-radio-button label="zh-CN" >簡體中文</el-radio-button>
                        <el-radio-button label="en">英文</el-radio-button>
                    </el-radio-group>
                    <!-- <select class="form-control" v-model="selectedLocale">
                        <option value="zh-CN">簡體中文</option>
                        <option value="en">英文</option>
                    </select> -->
    			</div>
                <div class="panel-footer">
                    <button class="btn btn-success" type="button" name="button" @click="saveAlbum">儲存</button>
                </div>
    		</div>
        </div>

    </div>
</template>

<script>
    import Ckeditor from 'vue-ckeditor2';
    import ElementUI from 'element-ui'
    import 'element-ui/lib/theme-chalk/index.css'
    import lang from 'element-ui/lib/locale/lang/zh-TW'
    import locale from 'element-ui/lib/locale'    
    import draggable from 'vuedraggable'

    Vue.use(ElementUI)
    locale.use(lang)

    export default {
        components: {
            Ckeditor,
            draggable
        },
        data() {
            return {
                activeName: 'first',
                isLoaded: true,
                isEdit: false,
                pageContent: {
                    'zh-CN': {
                        lab: [],
                        production: []
                    },
                    en: {
                        lab: [],
                        production: []
                    }
                },
                selectedLocale: 'zh-CN',
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
            this.getPage();
            $('.loading-bar').fadeOut('100')
        },
        computed: {
        },
        methods: {
            saveAlbum: function () {
                var self = this;
                let vo = {
                    type: 'FACTORY',
                    content: JSON.stringify(this.pageContent)
                }

                axios.post('/admin/custom/update/191', vo)
                    .then(res => {
                        this.$message.success('儲存成功')
                        // setTimeout(() => {
                        //     window.location.href = `/cyberholic-system/${this.type}/list`
                        // }, 1000);
                    })
            },
            selectFeatureImg: function () {
                var self = this;

                window.open('/laravel-filemanager' + '?type=Images', 'FileManager', 'width=900,height=600');
                window.SetUrl = function (url, file_path) {
                    self.pageContent.featureImage = file_path;
                };
            },
            addImage(type) {
                var self = this;

                window.open('/laravel-filemanager' + '?type=Images', 'FileManager', 'width=900,height=600');
                window.SetUrl = function (url, file_path) {
                    self.pageContent[self.selectedLocale][type].push({
                        url: file_path,
                        label: ''
                    })
                    // self.pageContent[self.selectedLocale][type] = file_path;
                };
            },
            getPage: function (guid) {
                axios.get(`/admin/custom/getByid/191`)
                    .then(res => {
                        let pageContent = JSON.parse(res.data.content)

                        // console.log(pageContent)
                        this.pageContent = pageContent
                        // delete res.data.id
                        // delete res.data.updated_at
                        // delete res.data.created_at

                        // this.ruleForm = res.data
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
            removePic(type, index) {
                let confirmRemove = confirm('確認是否要移除此張圖片？')

                if (!confirmRemove) {
                    return 
                }
                
                this.pageContent[this.selectedLocale][type].splice(index, 1)
            },
            showMessage: function (type, string) {
                toastr[type](string);
            }
        }
    }
</script>
<style lang="scss">
.fac-pic {
    margin-bottom: 10px;
}
.time {
    font-size: 13px;
    color: #999;
}

.thumb {
    background-position: center;
    background-size: cover; 
    width: 100%; 
    padding-bottom: 80%; 
}
.bottom {
    margin-top: 13px;
    line-height: 12px;
}

.button {
    padding: 0;
    float: right;
}

.image {
    width: 100%;
    display: block;
}

.clearfix:before,
.clearfix:after {
    display: table;
    content: "";
}

.clearfix:after {
    clear: both
}

.add-pic-btn {
    margin-bottom: 10px;

    .btn-box {
        text-align: center;
        width: 100%;
        padding-bottom: 80%;
        border: dashed 3px #aaa;
        position: relative;
        cursor: pointer;

        span {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 18px;
            i {
                font-size: 28px;
            }
        }
    }
}
</style>
 