<template>
    <div class="row">
        <div class="col-md-12">
            <form v-on:submit.prevent="searchDoc">
                <div class="search-input-group">
                    <input type="text" v-model="listVo.keyword" :placeholder="i18n.search_keyword">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </div>
            </form>
        </div>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped doc-table">
                    <thead>
                        <tr>
                            <th v-if="type == 'paper'">{{i18n.col_1}}</th>
                            <th v-else>{{i18n.col_2}}</th>
                            <th v-if="type == 'paper'" style="text-align: center">{{i18n.col_3}}</th>
                            <!-- <th v-else style="text-align: center">{{i18n.col_4}}</th> -->
                            <th v-if="type == 'paper'" style="text-align: center">{{i18n.col_5}}</th>
                            <th v-else style="text-align: center">{{i18n.col_6}}</th>
                            <th v-if="type == 'paper'" width="80" style="text-align: center">{{i18n.col_7}}</th>
                            <th v-else style="text-align: center">{{i18n.col_8}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(item, index) in pageData.data" :key="index">
                            <td>{{item.locale}}</td>
                            <td style="text-align: center" v-if="type == 'paper'">{{item.customField2}}</td>
                            <td style="text-align: center">{{item.customField3}}</td>
                            <td v-if="type == 'paper'" style="text-align: center">
                                <a target="_blank" :href="item.customField4">{{i18n.document_file_check}}</a>
                            </td>
                            <td v-else style="text-align: center">{{parseDateTime(item.customField1)}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-12">
            <nav aria-label="Page navigation example">
                <ul class="pagination doc-pagination">
                    <li class="page-item" v-if="pageData.current_page !== 1"><a class="page-link hidden-xs" @click="gotoPage(1)" >{{i18n.first_page}}</a></li>
                    <li class="page-item" v-if="pageData.current_page !== 1"><a class="page-link hidden-xs" @click="gotoPage(pageData.current_page - 1)" >{{i18n.prev_page}}</a></li>
                    <li class="page-item" v-if="breakPoint < this.pageData.current_page">
                        <a class="page-link" 
                        @click="gotoPage(1)" >
                        1
                        </a>
                    </li>
                    <li class="page-item" v-if="breakPoint < this.pageData.current_page && (this.pageData.current_page - breakPoint != 1)">
                        <a class="page-link" 
                        @click="gotoPage(pageData.current_page - breakPoint)">
                        ...
                        </a>
                    </li>
                    <li class="page-item" v-for="(item, index) in eachPage" 
                        :key="index" 
                        :class="{'hidden': !pageNumVisible(item), active: item == pageData.current_page}">
                        <a class="page-link" 
                        @click="gotoPage(item)"
                        :class="{active: item == pageData.current_page}">
                        {{item}}
                        </a>
                    </li>
                    <li class="page-item" v-if="pageData.last_page > this.pageData.current_page + (breakPoint - 1) && (this.pageData.current_page + breakPoint != this.pageData.last_page)">
                        <a class="page-link" 
                        @click="gotoPage(pageData.current_page + breakPoint)">
                        ...
                        </a>
                    </li>
                    <li class="page-item" v-if="pageData.last_page > this.pageData.current_page + (breakPoint - 1)">
                        <a class="page-link" 
                        @click="gotoPage(pageData.last_page)" >
                        {{pageData.last_page}}
                        </a>
                    </li>
                    <li class="page-item" v-if="pageData.current_page !== pageData.last_page"><a class="page-link hidden-xs" @click="gotoPage(pageData.current_page + 1)" >{{i18n.next_page}}</a></li>
                    <li class="page-item" v-if="pageData.current_page !== pageData.last_page"><a class="page-link hidden-xs" @click="gotoPage(pageData.last_page)" >{{i18n.last_page}}</a></li>
                </ul>
            </nav>
            
        </div>
    </div>
</template>

<script>
    export default {
        mounted () {
            console.log('Component mounted.')
        },
        props: ['type'],
        data () {
            let i18n = JSON.parse(document.getElementById('i18n-text').value)
            return {
                i18n: i18n,
                listVo: {
                    keyword: null
                },
                breakPoint: 3,
                urlPath: `/custom/get/${this.type}`,
                pageData: {},
                eachPage: []
            }
        },
        created() {
            this.getData()
        },
        watch: {
            urlPath() {
                this.getData()
            }
        },
        methods: {
            getData() {
                let vo = {
                    flag: 'id',
                    order: 'desc'
                }

                if (this.type == 'patent') {
                    vo = {
                        flag: 'customField1',
                        order: 'desc'
                    }
                }

                vo.keyword = this.listVo.keyword
                
                $('.loading-bar').show()
                axios.post(this.urlPath, vo)
                    .then(res => {
                        this.eachPage = []

                        for (let index = 0; index < res.data.last_page; index++) {
                          this.eachPage.push(index + 1)
                        }

                        this.$nextTick(() => {
                            this.pageData = res.data
                            $('.loading-bar').hide()
                        })

                    })
            },
            gotoPage(page) {
                let checkPage = this.urlPath.match('page=')

                if (checkPage) {
                    let pathArray = this.urlPath.split('?')
                    let pageStrIndex

                    pathArray.forEach(elm => {
                        if (elm.match('page=')) {
                            pageStrIndex = pathArray.indexOf(elm)
                        }
                    })

                    pathArray[pageStrIndex] = `page=${page}`
                    
                    this.urlPath = pathArray.join('?')
                } else {
                    const url = `${this.urlPath}?page=${page}`

                    this.urlPath = url
                }
            },
            pageNumVisible(item) {	
				if (item > this.pageData.current_page + (this.breakPoint - 1)) {
					return false
				}
				if (item + (this.breakPoint - 1) < this.pageData.current_page) {
					return false
				}
				return true
			},
            searchDoc() {
                this.getData()
            },
            parseDateTime(str) {
                return moment(str).format('YYYY-MM-DD')
            },
        }
    }
</script>

<style lang="scss">
.hidden {
    display: none;
}
table.doc-table {
    margin: 50px 0;
    font-size: 15px;

    thead {
        background-color: #E70034;
        color: #FFF;
    }
}
.search-input-group {
    font-size: 15px;
    width: fit-content;

    input {
        padding: 5px 10px 5px 30px;
        border-radius: 50px;
        border: #E70034 solid thin;
    }
    i.fa {
        color: #E70034;
        position: absolute;
        top: 50%;
        left: 10px;
        transform: translateY(-50%);
    }
}
ul.doc-pagination {
    width: fit-content;
    margin: 0 auto;

    li.page-item {

        a.page-link {
            border: none;
        }
        &.active {
            a.page-link {
                background: none;
                font-weight: 700;
                color: #E70034;
            }
        }
    }
}
</style>