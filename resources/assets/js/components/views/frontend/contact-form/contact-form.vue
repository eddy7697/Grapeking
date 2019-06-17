<template>
    <div v-if="formSended">
        <h2 style="text-align: center">非常感谢您的来信，我们会尽快联系您。</h2>
    </div>
    <form v-else v-on:submit.prevent="sendForm">
        <div class="col-md-11 pull-right contact-form-body">
            <div class="row">
                <div class="col-md-4 column important">
                    <p>姓名</p>
                </div>
                <div class="col-md-8 column">
                    <input class="form-control" type="text" name="name" v-model="contact.name" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 column important">
                    <p>性别</p>
                </div>
                <div class="col-md-8 column">
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" v-model="contact.gender" value="男" required>男
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" v-model="contact.gender" value="女" required>女
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 column">
                    <p>地址</p>
                </div>
                <div class="col-md-8 column">
                    <input class="form-control" type="text" name="address" v-model="contact.address">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 column important">
                    <p>电子邮箱</p>
                </div>
                <div class="col-md-8 column">
                    <input class="form-control" type="email" name="email" v-model="contact.email" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 column important">
                    <p>连络电话</p>
                </div>
                <div class="col-md-8 column">
                    <input class="form-control" type="phone" name="phone" v-model="contact.phone" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 column important">
                    <p>公司名称</p>
                </div>
                <div class="col-md-8 column">
                    <input class="form-control" type="text" name="company" v-model="contact.company" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 column important">
                    <p>关注产品</p>
                </div>
                <div class="col-md-8 column">
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="" value="胶原蛋白" v-model="contact.concern">胶原蛋白
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="" value="益生菌" v-model="contact.concern">益生菌
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="" value="角豆" v-model="contact.concern">角豆
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="" value="体重管理" v-model="contact.concern">体重管理
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="" value="保健食品" v-model="contact.concern">保健食品
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="" value="机能饮品" v-model="contact.concern">机能饮品
                        </label>
                    </div>
                    
                    <div class="form-check-inline">
                        <label class="form-check-label" style="width: 240px;">
                            <input type="checkbox" class="form-check-input" name="" value="OTHER" v-model="contact.concern">其他
                            <input type="text" style="width: 180px; display: inline-block;" class="form-control" v-model="theOther" :disabled="!hasOther">
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 column important">
                    <p>询问内容</p>
                    <p class="text">提醒您，若您填写得越精准，越有利我们及时回复给您信息。</p>
                </div>
                <div class="col-md-8 column">
                    <textarea name="content" class="form-control content" v-model="contact.content" required></textarea>
                </div>
            </div>
        </div>
        <div style="clear: both"></div>
        <div class="col-md-10 mx-auto contact-form-footer">
            <p class="info">我们不会将您输入的任何个人信息用于回答查找以外的目的，您亦可<a href="">点击这里</a>查看更多关于天壬提供的隐私权保护政策。</p>
            <p class="info">* 请您务必将天壬的电子邮箱地址或域名设置为可接收的电子邮箱，以免错过我们的回复，您亦可直接与我们联系，<a href="">(点击这里查看联系信息)</a>。</p>
            <div class="captcha-section">
                <strong>确认码</strong>
                <img :src="captchaUrl" id="captcha" alt="">
                <a style="cursor: pointer" id="refresh-captcha" @click="refreshCaptcha">更新确认码</a>
                <input type="text" class="form-control captcha" v-model="contact.captcha" name="captcha" placeholder="请输入上方的确认码..." required title="请输入验证码">
                <button class="submit-btn" type="submit">提交信息</button>
            </div>
        </div>
    </form>
</template>

<script>
    export default {
        mounted () {
            console.log('Component mounted.')
        },
        data () {
            return {
                captchaUrl: null,
                formSended: false,
                contact: {
                    concern: [],
                    address: null,
                    company: null,
                    content: null,
                    email: null,
                    gender: null,
                    name: null,
                    phone: null,
                    captcha: null
                },
                theOther: null
            }
        },
        created() {
            this.refreshCaptcha()
        },
        computed: {
            hasOther() {
                return _.includes(this.contact.concern, 'OTHER')
            },
            parsedContact() {
                let form = JSON.parse(JSON.stringify(this.contact))
                if (form.concern.includes('OTHER')) {
                    form.concern.splice(form.concern.indexOf('OTHER'), 1)
                }
                let concernStr = JSON.stringify(form.concern).replace(/\[|]/g,'').replace(/","/g, ', ').replace(/"/g, '')

                if (this.theOther) {
                    concernStr += `, ${this.theOther}`
                }

                form.concern = concernStr
                return form
            }
        },
        methods: {
            refreshCaptcha() {
                axios.get('/cap_str')
                    .then(res => {
                        this.captchaUrl = `/captcha?q=${res.data}`
                    });
            },
            sendForm() {
                $('.loading-bar').show()
                axios.post('/send-form', this.parsedContact)
                    .then(res => {
                        this.formSended = true
                    }).catch(err => {
                        let result = err.response

                        if (result.status == 481) {
                            alert('验证码错误')
                        }
                    }).then(() => {
                        $('.loading-bar').hide()
                    })

            }
        }
    }
</script>
