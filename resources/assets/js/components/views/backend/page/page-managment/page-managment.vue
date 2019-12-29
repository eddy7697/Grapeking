<template>
    <div class="row">
        <div class="col-md-8">
            <el-tabs tab-position="top" v-model="activeTab">
                <el-tab-pane label="網站資訊" name="first">
                    <table class="table field-table">
                        <tr>
                            <td><label>網站標題</label></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" v-model="siteMeta.title"></td>
                        </tr>
                        <tr>
                            <td><label>網站關鍵字</label></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" v-model="siteMeta.keyword"></td>
                        </tr>
                        <tr>
                            <td>網站描述</td>
                        </tr>
                        <tr>
                            <td><textarea class="form-control" v-model="siteMeta.description" style="resize: vertical;"></textarea></td>
                        </tr>
                        <tr>
                            <td><label>網站縮圖</label></td>
                        </tr>
                        <tr>
                            <td>
                                <button class="btn btn-primary" type="button" v-if="(siteMeta.shortcut === null) || (siteMeta.shortcut === '')" @click="addShortCut()">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </button>
                                <img width="50%" @click="addShortCut()" v-bind:src="siteMeta.shortcut" v-else>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div v-if="isDirty" class="pull-left">
                                    <button type="button" class="btn btn-primary" v-if="isEdit" @click="editMeta()">儲存設定</button>
                                    <button type="button" class="btn btn-primary" v-else @click="newMeta()">新增設定</button>
                                </div>
                                <div v-else class="pull-left">
                                    <button type="button" class="btn btn-primary" v-if="isEdit" disabled>儲存設定</button>
                                    <button type="button" class="btn btn-primary" v-else disabled>新增設定</button>
                                </div>
                            </td>
                        </tr>
                    </table>
                </el-tab-pane>
                <el-tab-pane label="歷史沿革管理" name="second">
                    <el-button type="success" @click="editMeta" size="small" style="margin-bottom: 15px;">儲存排序</el-button>
                    <draggable :list="siteMeta.timeline" tag="el-collapse">
                        <el-collapse-item v-for="(item, index) in siteMeta.timeline" :key="index" :title="`標題 : ${item.year}`" :name="index">
                            <table class="padding-table">
                                <tr>
                                    <td>簡中</td>
                                    <td v-html="nl2br(item.content['zh-CN'])"></td>
                                </tr>
                                <tr>
                                    <td>英</td>
                                    <td v-html="nl2br(item.content['en'])"></td>
                                </tr>

                            </table>
                            
                            <div style="width: 100%; text-align: right; margin-top: 15px;">
                                <el-button size="small" type="success" @click="editContent(item, index)">編輯</el-button>
                                <el-button size="small" type="danger" @click="removeTimeline(index)">刪除</el-button>
                            </div>
                        </el-collapse-item>
                    </draggable>
                    <el-button type="primary" icon="el-icon-plus" plain style="color: #fff; width: 100%; margin-top: 10px;" @click="addContent">新增內容</el-button>
                </el-tab-pane>
                <el-tab-pane label="首頁記數管理" name="third">
                    <el-form :model="siteMeta" ref="siteMeta" label-width="100px" class="demo-siteMeta">
                        <el-form-item label="集团创立" prop="founded">
                            <el-input v-model="siteMeta.counting.founded"></el-input>
                        </el-form-item>
                        <el-form-item label="认证肯定" prop="certificate">
                            <el-input v-model="siteMeta.counting.certificate"></el-input>
                        </el-form-item>
                        <el-form-item label="发明奖牌" prop="award">
                            <el-input v-model="siteMeta.counting.award"></el-input>
                        </el-form-item>
                        <el-form-item label="跨国专利" prop="patent">
                            <el-input v-model="siteMeta.counting.patent"></el-input>
                        </el-form-item>
                        <el-form-item>
                            <el-button type="primary" @click="saveMeta">儲存</el-button>
                        </el-form-item>
                    </el-form>
                </el-tab-pane>
            </el-tabs>
            <el-dialog
                :title="timelineContentEditStatus ? '編輯內容' : '新增內容'"
                :visible.sync="dialogVisible"
                width="500px"
                :close-on-click-modal="false"
                :close-on-press-escape="false"
                :show-close="false"
                :before-close="handleClose">
                <el-form label-position="top" label-width="80px" :model="timelineContent">
                    <el-form-item label="年份">
                        <el-input v-model="timelineContent.year"></el-input>
                    </el-form-item>
                    <el-tabs v-model="activedContentTab">
                        <el-tab-pane label="簡體中文" name="first">
                            <el-form-item label="內容(簡中)">
                                <el-input v-model="timelineContent.content['zh-CN']" type="textarea"></el-input>
                            </el-form-item>
                            <el-form-item label="圖片(簡中)">
                                <el-input v-model="timelineContent.featureImage['zh-CN']" type="hidden" style="display: none"></el-input>
                                <img :src="timelineContent.featureImage['zh-CN']" style="max-width: 100%; margin-bottom: 15px;" alt="">
                                <el-button @click="setTimelineFeatureImage('zh-CN')">設置圖片</el-button>
                            </el-form-item>
                        </el-tab-pane>
                        <el-tab-pane label="英文" name="second">
                            <el-form-item label="內容(英)">
                                <el-input v-model="timelineContent.content['en']" type="textarea"></el-input>
                            </el-form-item>
                            <el-form-item label="圖片(英)">
                                <el-input v-model="timelineContent.featureImage['en']" type="hidden" style="display: none"></el-input>
                                <img :src="timelineContent.featureImage['en']" style="max-width: 100%; margin-bottom: 15px;" alt="">
                                <el-button @click="setTimelineFeatureImage('en')">設置圖片</el-button>
                            </el-form-item>
                        </el-tab-pane>
                    </el-tabs>
                </el-form>
                <span slot="footer" class="dialog-footer">
                    <el-button @click="handleClose()">取 消</el-button>
                    <el-button type="primary" @click="saveContent()">確 定</el-button>
                </span>
            </el-dialog>
        </div>

    </div>
</template>

<script>
    import ElementUI from 'element-ui';
    import 'element-ui/lib/theme-chalk/index.css';
    import lang from 'element-ui/lib/locale/lang/zh-TW'
    import locale from 'element-ui/lib/locale'    
    import draggable from 'vuedraggable'

    Vue.use(ElementUI)
    locale.use(lang)

    export default {
        components: {
            draggable
        },
        data() {
            return {
                activedContentTab: 'first',
                editIndex: 1,
                activeTab: 'first',
                timelineContentEditStatus: false,
                dialogVisible: false,
                siteMeta: {
                    title: null,
                    keyword: null,
                    description: null,
                    shortcut: null,
                    pageTopContent: null,
                    pageTopLink: null,
                    pageTopButton: null,
                    index_album: [],
                    timeline: [],
                    counting: {
                        founded: '',
                        certificate: '',
                        award: '',
                        patent: ''
                    }
                },
                timelineContent: {
                    year: null,
                    content: {
                        'zh-CN': null,
                        en: null
                    },
                    featureImage: {
                        'zh-CN': null,
                        en: null
                    },
                },
                picTitle: null,
                picUrl: null,
                picLink: null,
                isEdit: false,
                isDirty: false,
                token: $('meta[name="csrf-token"]').attr('content'),
            }
        },
        created: function () {
            this.getMeta();
            $('.loading-bar').fadeOut('100');
        },
        watch: {
            siteMeta: {
                handler: function (siteMeta, oldVal) {
                    this.isDirty = true;
                },
                deep: true
            }
        },
        methods: {
            getMeta: function () {
                var self = this;
                $.ajax({
                    url: '/admin/page/meta/get',
                    type: 'GET',
                    cache: false,
                    dataType: 'json'
                })
                .done(function(result) {
                    let timeline = result.data.timeline ? JSON.parse(result.data.timeline) : [];
                    let counting = result.data.counting ? JSON.parse(result.data.counting) : {};

                    timeline.forEach(elm => {
                        if (!elm.featureImage) {
                            elm.featureImage = {
                                'zh-CN': null,
                                en: null
                            }
                        }
                    });

                    self.$nextTick(() => {
                        self.siteMeta.title = result.data.title;
                        self.siteMeta.keyword = result.data.keyword;
                        self.siteMeta.description = result.data.description;
                        self.siteMeta.shortcut = result.data.shortcut;
                        self.siteMeta.pageTopContent = result.data.pageTopContent;
                        self.siteMeta.pageTopButton = result.data.pageTopButton;
                        self.siteMeta.pageTopLink = result.data.pageTopLink;
                        self.siteMeta.index_album = JSON.parse(result.data.index_album);
                        self.siteMeta.timeline = timeline,
                        self.siteMeta.counting = counting,

                        self.isEdit = true;
                        self.isDirty = false;
                    })
                    
                })
                .fail(function() {
                    self.isEdit = false;
                });

            },
            addShortCut: function () {
                var self = this;

                window.open('/laravel-filemanager' + '?type=Images', 'FileManager', 'width=900,height=600');
                window.SetUrl = function (url, file_path) {
                    self.siteMeta.shortcut = file_path;
                };
            },
            addImage: function () {
                var self = this;

                window.open('/laravel-filemanager' + '?type=Images', 'FileManager', 'width=900,height=600');
                window.SetUrl = function (url, file_path) {
                    self.picUrl = file_path;
                };
            },
            setTimelineFeatureImage(elm) {
                var self = this;
                window.open('/laravel-filemanager' + '?type=Images', 'FileManager', 'width=900,height=600');
                window.SetUrl = function (url, file_path) {
                    self.timelineContent.featureImage[elm] = file_path;
                };
            },
            addBanner: function () {
                var self = this;

                if (this.picUrl) {
                    this.siteMeta.index_album.push({
                        title: this.picTitle,
                        url: this.picUrl,
                        link: this.picLink
                    });

                    this.picTitle = null;
                    this.picUrl = null;
                    this.picLink = null;
                } else {
                    alert('請選擇圖片');
                }

            },
            removeTimeline(index) {
                let check = confirm('請問是否要刪除此時間軸紀錄?')

                if (!check) {
                    return
                }

                this.siteMeta.timeline.splice(index, 1)
                this.saveMeta()
            },
            addContent() {                
                this.timelineContentEditStatus = false
                this.dialogVisible = true
            },
            editContent(item, index) {
                this.editIndex = index
                this.timelineContent = JSON.parse(JSON.stringify(item))
                this.timelineContentEditStatus = true
                this.dialogVisible = true
            },
            saveContent() {
                let content = JSON.parse(JSON.stringify(this.timelineContent))

                if (this.timelineContentEditStatus) {
                    this.siteMeta.timeline[this.editIndex] = content
                } else {
                    this.siteMeta.timeline.push(content)
                }

                this.$nextTick(() => {
                    this.saveMeta()
                    this.handleClose()
                })
            },
            handleClose() {
                this.clearTimelineObj()
                this.dialogVisible = false
                this.activedContentTab = 'first'
            },
            clearTimelineObj() {
                this.timelineContent.year = null
                this.timelineContent.content['en'] = null
                this.timelineContent.content['zh-CN'] = null
            },
            saveMeta() {
                if (this.isEdit) {
                    this.editMeta()
                } else {
                    this.newMeta()
                }
            },
            editMeta: function () {
                var self = this;
                var token = this.token;

                $('.loading-bar').fadeIn('fast');

                $.ajax({
                    url: '/admin/page/meta/edit',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        title: self.siteMeta.title,
                        keyword: self.siteMeta.keyword,
                        description: self.siteMeta.description,
                        shortcut: self.siteMeta.shortcut,
                        pageTopLink: self.siteMeta.pageTopLink,
                        pageTopButton: self.siteMeta.pageTopButton,
                        pageTopContent: self.siteMeta.pageTopContent,
                        index_album: JSON.stringify(self.siteMeta.index_album),
                        timeline: JSON.stringify(self.siteMeta.timeline),
                        counting: JSON.stringify(self.siteMeta.counting)
                    },
                    beforeSend: function(xhr) {
                        xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                })
                .done(function() {
                    toastr.success('編輯網站資訊成功')
                    self.getMeta();
                })
                .fail(function() {
                    // console.log("error");
                })
                .always(function() {
                    $('.loading-bar').fadeOut('fast');
                    // console.log("complete");
                });
            },
            newMeta: function () {
                var self = this;
                var token = this.token;

                $('.loading-bar').fadeIn('fast');

                $.ajax({
                    url: '/admin/page/meta/set',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        title: self.siteMeta.title,
                        keyword: self.siteMeta.keyword,
                        description: self.siteMeta.description,
                        shortcut: self.siteMeta.shortcut,
                        pageTopLink: self.siteMeta.pageTopLink,
                        pageTopButton: self.siteMeta.pageTopButton,
                        pageTopContent: self.siteMeta.pageTopContent,
                        index_album: JSON.stringify(self.siteMeta.index_album),
                        timeline: JSON.stringify(self.siteMeta.timeline),
                        counting: JSON.stringify(self.siteMeta.counting)
                    },
                    beforeSend: function(xhr) {
                        xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                })
                .done(function() {
                    toastr.success('編輯網站資訊成功')
                    self.getMeta();
                })
                .fail(function() {
                    // console.log("error");
                })
                .always(function() {
                    $('.loading-bar').fadeOut('fast');
                    // console.log("complete");
                });

            },
            resetForm(formName) {
                this.$refs[formName].resetFields();
            },
            nl2br( str ) {
                return str.replace(/([^>])\n/g, '$1<br/>\n');
            }
        }
    }
</script>

<style lang="scss">
    .el-collapse-item__header {
        padding-left: 10px;
    }
    .el-collapse-item__content {
        padding: 10px;
    }
    .padding-table {
        width: 100%;

        tr {
            
            td {
                border: #ccc solid thin;
                padding: 10px;
            }
        }
    }
</style>