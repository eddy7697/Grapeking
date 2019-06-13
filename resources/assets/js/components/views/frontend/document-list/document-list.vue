<template>
    <div class="row">
        <div class="col-md-12">
            {{type}}
        </div>
        <div>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item" v-if="pageData.current_page !== 1"><a class="page-link hidden-xs" @click="gotoPage(1)" >第一頁</a></li>
                    <li class="page-item" v-if="pageData.current_page !== 1"><a class="page-link hidden-xs" @click="gotoPage(pageData.current_page - 1)" >上一頁</a></li>
                    <li class="page-item" v-if="breakPoint < this.pageData.current_page">
                        <a class="page-link" 
                        @click="gotoPage(1)" >
                        1
                        </a>
                    </li>
                    <li class="page-item" v-if="breakPoint < this.pageData.current_page">
                        <a class="page-link" 
                        @click="gotoPage(pageData.current_page - breakPoint)">
                        ...
                        </a>
                    </li>
                    <li class="page-item" v-for="(item, index) in eachPage" 
                        :key="index" 
                        :class="{'hidden': !pageNumVisible(item)}">
                        <a class="page-link" 
                        @click="gotoPage(item)"
                        :class="{active: item == pageData.current_page}">
                        {{item}}
                        </a>
                    </li>
                    <li class="page-item" v-if="pageData.last_page > this.pageData.current_page + (breakPoint - 1)">
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
                    <li class="page-item" v-if="pageData.current_page !== pageData.last_page"><a class="page-link hidden-xs" @click="gotoPage(pageData.current_page + 1)" >下一頁</a></li>
                    <li class="page-item" v-if="pageData.current_page !== pageData.last_page"><a class="page-link hidden-xs" @click="gotoPage(pageData.last_page)" >最後一頁</a></li>
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
            return {
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
                $('.loading-bar').show()
                axios.post(this.urlPath, this.listVo)
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
        }
    }
</script>

<style lang="scss">
    .hidden {
        display: none;
    }
</style>