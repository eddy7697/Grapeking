<template>
    <div class="row">
        <div class="col-md-8">
            <el-form :model="ruleForm" :rules="rules" ref="ruleForm" label-width="100px" class="demo-ruleForm">
                <el-form-item label="文件名稱" prop="locale">
                    <el-input v-model="ruleForm.locale"></el-input>
                </el-form-item>
                <el-form-item label="取得日期" prop="customField1">
                    <el-date-picker
                        v-model="ruleForm.customField1"
                        type="date"
                        placeholder="選擇日期">
                    </el-date-picker>
                </el-form-item>
                <el-form-item label="地區" prop="customField2">
                    <el-input v-model="ruleForm.customField2"></el-input>
                </el-form-item>
                <el-form-item label="文件編號" prop="customField3">
                    <el-input v-model="ruleForm.customField3"></el-input>
                </el-form-item>
                <el-form-item>
                    <el-button type="primary" @click="submitForm('ruleForm')">
                        <span v-if="mode == 'edit'">儲存</span>
                        <span v-else>立即建立</span>
                    </el-button>
                    <el-button v-if="mode == 'edit'" type="warning" @click="deleteData(id)">刪除文章</el-button>
                    <el-button @click="goList">回列表</el-button>
                    <el-button @click="resetForm('ruleForm')">重置</el-button>
                </el-form-item>
            </el-form>
        </div>
    </div>
</template>

<script>
    import Ckeditor from 'vue-ckeditor2';
    import ElementUI from 'element-ui';
    import 'element-ui/lib/theme-chalk/index.css';
    import lang from 'element-ui/lib/locale/lang/zh-TW'
    import locale from 'element-ui/lib/locale'    

    Vue.use(ElementUI);
    locale.use(lang)
    
    export default {
        mounted () {
            $('.loading-bar').hide()
            console.log('Component mounted.')
        },
        props: ['mode', 'id', 'type'],
        components: {
            Ckeditor,
        },
        data () {
            return {
                ruleForm: {
                    type: this.type,
                    locale: null,
                    customField1: null,
                    customField2: null,
                    customField3: null,
                },
                rules: {
                    locale: [
                        { required: true, message: '請輸入文件名稱', trigger: 'blur' }
                    ],
                    customField1: [
                        { required: true, message: '請輸入取得日期', trigger: 'blur' }
                    ],
                    customField2: [
                        { required: true, message: '請填寫地區', trigger: 'blur' }
                    ],
                    customField3: [
                        { required: true, message: '請輸入文件編號', trigger: 'blur' }
                    ],
                },
                ckConfig: {
                    height: 300,
                    allowedContent: true,
                    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=' + $('meta[name="csrf-token"]').attr('content'),
                    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=' + $('meta[name="csrf-token"]').attr('content')
                },
            }
        },
        created() {
            if (this.mode == 'edit') {
                this.getData()
            }
        },
        methods: {
            submitForm(formName) {
                this.$refs[formName].validate((valid) => {
                if (valid) {
                    this.saveCustomField()
                } else {
                    console.log('error submit!!');
                    return false;
                }
                });
            },
            saveCustomField() {
                let url = this.mode == 'edit' ? `/admin/custom/update/${this.id}` : '/admin/custom/add'

                axios.post(url, this.ruleForm)
                    .then(res => {
                        this.$message.success('儲存成功')
                        setTimeout(() => {
                            // window.location.href = '/cyberholic-system/patent/list'
                        }, 1000);
                    })
            },
            getData() {
                axios.get(`/admin/custom/getByid/${this.id}`)
                    .then(res => {
                        delete res.data.id
                        delete res.data.updated_at
                        delete res.data.created_at

                        this.ruleForm = res.data
                    })
            },
            addImage() {
                let self = this

                window.open('/laravel-filemanager' + '?type=Files', 'FileManager', 'width=900,height=600');
                window.SetUrl = function (url, file_path) {
                    self.ruleForm.customField4 = file_path
                };
            },
            goList() {
                window.location.href = '/cyberholic-system/patent/list'
            },
            deleteData(id) {
                this.$confirm('此操作將永久刪除該筆資料, 是否繼續?', '提示', {
                    confirmButtonText: '確定',
                    cancelButtonText: '取消',
                    type: 'warning'
                }).then(() => {
                    axios.post(`/admin/custom/delete/${id}`)
                        .then(res => {
                            this.$message({
                                type: 'success',
                                message: '刪除成功!'
                            });

                            window.location.href = '/cyberholic-system/patent/list'
                        })
                }).catch(() => {
                    this.$message({
                        type: 'info',
                        message: '已取消刪除'
                    });          
                });
            },
            resetForm(formName) {
                this.$refs[formName].resetFields();
            }
        }
    }
</script>

<style lang="scss">
.el-form-item__error {
    position: relative;
}
.submit-trigger {
    position: absolute;
    right: 21px;
    top: 7px;
}
.el-form-item {
    padding-bottom: 5px;
}
</style>
