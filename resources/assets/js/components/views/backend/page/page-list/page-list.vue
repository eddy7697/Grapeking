<template>
    <div class="row">
        <div class="col-md-3">
            <el-tabs v-model="activeName" type="card">
                <el-tab-pane label="簡體中文" name="first">
                    <el-tree
                        :setCurrentKey="10"
                        :data="pageTree"
                        :props="defaultProps"
                        default-expand-all
                        :highlight-current="true"
                        :expand-on-click-node="false"
                        @node-click="getPageData" />
                </el-tab-pane>
                <el-tab-pane label="英文" name="second">
                    <el-tree
                        :data="pageTreeEn"
                        :props="defaultProps"
                        default-expand-all
                        :highlight-current="true"
                        :expand-on-click-node="false"
                        @node-click="getPageData" />
                </el-tab-pane>
            </el-tabs>
            
        </div>
        <div class="col-md-9">
            <!-- <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">繁體中文</a></li>
                <li><a data-toggle="tab" href="#menu1">英文</a></li>
            </ul> -->
            <div v-if="pageData.id">
                <h2>{{pageData.title}}</h2>
                <ckeditor
                    class="ch-product-description"
                    :config="ckConfig"
                    v-model="pageData.content">
                </ckeditor>
                <div style="text-align: center">
                    <el-button type="primary" @click="savePage">儲存頁面</el-button>
                    <el-button type="info" @click="initPageBuilder(editLink(pageData))">使用頁面編輯器</el-button>
                </div>
            </div>
            <div v-else style="text-align: center; padding-top:50px;">
                <h1>請選擇頁面</h1>
            </div>
            <div class="tab-content" v-if="false">
                <div id="home" class="tab-pane fade in active">
                    <table class="table field-table">
                        <thead>
                            <tr>
                                <th>區塊名稱</th>
                                <th width="70" align="center" style="text-align: center;">識別ID</th>
                                <!-- <th width="70" align="center" style="text-align: center;">語系</th> -->
                                <th width="40" align="center" style="text-align: center;">編輯</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(item, index) in pageContent" v-bind:key="index">
                                <td><a v-bind:href="editLink(item)">{{item.title}}</a></td>
                                <td align="center">{{item.id}}</td>
                                <!-- <td align="center" style="text-align: center;">
                                    <span v-if="item.locale == 'en'"><strong>英文</strong></span>
                                    <span v-if="item.locale == 'zh-TW'"><strong>繁體中文</strong></span>
                                </td> -->
                                <td align="center" style="text-align: center;"><a v-bind:href="editLink(item)"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Ckeditor from 'vue-ckeditor2'
    import ElementUI from 'element-ui'
    import 'element-ui/lib/theme-chalk/index.css'
    import lang from 'element-ui/lib/locale/lang/zh-TW'
    import locale from 'element-ui/lib/locale'    

    Vue.use(ElementUI)
    locale.use(lang)
    $('.loading-bar').fadeOut('100');
    export default {
        data() {
            return {
                activeName: 'first',
                pageContent: [],
                pageData: {
                    title: null,
                    content: null,
                    locale: 'en',
                    featureImage: null,
                    id: null
                },
                ckConfig: {
                    height: 400,
                    allowedContent: true,
                    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=' + $('meta[name="csrf-token"]').attr('content'),
                    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=' + $('meta[name="csrf-token"]').attr('content')
                },
                token: $('meta[name="csrf-token"]').attr('content'),
                pageTree: [
                    {
                        label: '关于上海葡萄王',
                        children: [
                            {
                                label: '关于我们',
                                id: 11
                            // },{
                            //     label: '发展历程',
                            //     id: 13
                            },{
                                label: '关于创办人',
                                id: 15
                            },{
                                label: '国际级安心认证',
                                id: 17
                            },
                        ]
                    },
                    // {
                    //     label: '业务体系',
                    //     children: [
                    //         {
                    //             label: '生产服务',
                    //             id: 19
                    //         },{
                    //             label: '统包服务',
                    //             id: 21
                    //         },
                    //     ]
                    // },
                    {
                        label: '专业研发',
                        children: [
                            {
                                label: '食品安全中心',
                                id: 23
                            },{
                                label: '生物科技研究所',
                                id: 2
                            },{
                                label: '创新研发中心',
                                id: 25
                            },{
                                label: '世界级工厂',
                                url: '/cyberholic-system/page/factory'
                            }
                        ]
                    },
                    {
                        label: '社会责任',
                        children: [
                            {
                                label: '员工关系',
                                
                                id: 3
                            },{
                                label: '食品安全',
                                id: 5
                            },{
                                label: '研发创新',
                                id: 7
                            },{
                                label: '绿色环境',
                                id: 9
                            },
                        ]
                    },
                    // {
                    //     label: '人才招聘',
                    //     id: 29
                    // },
                ],
                pageTreeEn: [
                    {
                        label: 'About Shanghai Grape King',
                        children: [
                            {
                                label: 'Introduction',
                                id: 12
                            // },{
                            //     label: '發展歷程',
                            //     id: 14
                            },{
                                label: 'Founder',
                                id: 16
                            },{
                                label: 'Certification',
                                id: 18
                            },
                        ]
                    },
                    // {
                    //     label: '業務體系',
                    //     children: [
                    //         {
                    //             label: '生產服務',
                    //             id: 20
                    //         },{
                    //             label: '統包服務',
                    //             id: 22
                    //         },
                    //     ]
                    // },
                    {
                        label: 'Professional R&D',
                        children: [
                            {
                                label: 'Centre for Food Safety',
                                id: 24
                            },{
                                label: 'Biotech Research Institute',
                                id: 1
                            },{
                                label: 'Innovative R&D Center',
                                id: 26
                            },{
                                label: 'World Class Factory',
                                url: '/cyberholic-system/page/factory'
                            }
                        ]
                    },
                    {
                        label: 'CSR',
                        children: [
                            {
                                label: 'Happy Workplace',
                                id: 4
                            },{
                                label: 'Food Safety',
                                id: 6
                            },{
                                label: 'R&D and Innovation',
                                id: 8
                            },{
                                label: 'Green Environment',
                                id: 10
                            },
                        ]
                    }
                ],
                defaultProps: {
                    children: 'children',
                    label: 'label'
                }
            }
        },
        components: {
            Ckeditor
        },
        props: ['type'],
        created: function () {
            this.getPages();
        },
        methods: {
            initPageBuilder(url) {
                // ${this.pageData.id}
                window.location.href = url
            },
            getPages: function () {
                var self = this;

                $.ajax({
                    url: '/admin/page/get',
                    type: 'GET',
                    dataType: 'json'
                })
                .done(function(response) {
                    response.data.forEach(function (item) {
                        if (item.type == self.type) {
                            self.pageContent.push({
                                title: item.title,
                                guid: item.guid,
                                id: item.id,
                                locale: item.locale
                            });
                        }                        
                    });
                })
                .fail(function() {
                    console.log("error");
                })
                .always(function() {
                    console.log("complete");
                });

            },
            getPageData(node) {
                let id = node.id
                let isPage = typeof(id) != 'undefined'

                if (node.url) {
                    window.location.href = node.url
                }
                
                if (!isPage) {
                    this.pageData.title = null;
                    this.pageData.content = null;
                    this.pageData.locale = 'en';
                    this.pageData.featureImage = null;
                    this.pageData.id = null
                    return
                }

                $('.loading-bar').show()
                axios.get(`/admin/page/get/${id}`)
                    .then(res => {
                        this.pageData.title = res.data.title;
                        this.pageData.content = JSON.parse(res.data.content).content;
                        this.pageData.locale = JSON.parse(res.data.content).locale;
                        this.pageData.featureImage = res.data.featureImage;
                        this.pageData.id = res.data.id
                    }).catch(err => {
                    }).then(() => {
                        $('.loading-bar').hide()
                    })
            },
            savePage() {
                let vo = {
                    title: this.pageData.title,
                    content: JSON.stringify({
                        locale: this.pageData.locale,
                        content: this.pageData.content
                    }),
                    featureImage: this.pageData.featureImage
                }

                $('.loading-bar').show()

                axios.post(`/admin/page/update/${this.pageData.id}`, vo)
                    .then(res => {
                        this.$message.success('儲存頁面成功')
                    }).catch(err => {
                        this.$message.error('儲存頁面失敗')
                    }).then(() => {
                        $('.loading-bar').hide()
                    })
            },
            localeFilter(locale) {
                return _.compact(this.pageContent.map(elm => {
                    return elm.locale == locale ? elm : null
                }))
            },
            editLink: function (item) {
                return "/cyberholic-system/page/edit/" + item.id;
            }
        }
    }
</script>
