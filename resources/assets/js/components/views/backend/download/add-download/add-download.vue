<template>
    <div class="row">
        <div class="col-md-8">
            <el-form :model="ruleForm" :rules="rules" ref="ruleForm" label-width="100px" class="demo-ruleForm">
                <el-form-item label="報告書名稱" prop="locale">
                    <el-input v-model="ruleForm.locale"></el-input>
                </el-form-item>
                <el-form-item label="報告書語系" prop="customField3">
                    <el-radio-group v-model="ruleForm.customField3" size="small">
                        <el-radio label="zh-CN" border>簡體中文</el-radio>
                        <el-radio label="en" border >英文</el-radio>
                    </el-radio-group>
                </el-form-item>
                <el-form-item label="報告書檔案" prop="customField1">
                    <el-button type="primary" @click="addFile('customField1', 'Files')">選擇檔案</el-button>
                    <span>{{ruleForm.customField1}}</span>
                </el-form-item>
                <el-form-item label="報告書封面" prop="customField2">
                    <el-button type="primary" @click="addFile('customField2', 'images')">選擇圖片</el-button>
                    <br>
                    <img :src="ruleForm.customField2">
                </el-form-item>
                <el-form-item>
                    <el-button type="primary" @click="submitForm('ruleForm')">
                        <span v-if="mode == 'edit'">儲存</span>
                        <span v-else>立即建立</span>
                    </el-button>
                    <el-button v-if="mode == 'edit'" type="warning" @click="deleteData(id)">刪除報告書</el-button>
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
                        { required: true, message: '請輸入報告書名稱', trigger: 'blur' }
                    ],
                    customField1: [
                        { required: true, message: '請設定報告書檔案來源', trigger: 'blur' }
                    ],
                    customField2: [
                        { required: true, message: '請填寫地區', trigger: 'blur' }
                    ],
                    customField3: [
                        { required: true, message: '請設定報告書語系', trigger: 'blur' }
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
                            window.location.href = `/cyberholic-system/${this.type}/list`
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
            addFile(field, type) {
                let self = this

                
                window.open('/laravel-filemanager' + `?type=${type}`, 'FileManager', 'width=900,height=600');
                window.SetUrl = function (url, file_path) {
                    self.ruleForm[field] = file_path
                };
            },
            goList() {
                window.location.href = `/cyberholic-system/${this.type}/list`
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
