<template>
    <div v-if="formSended">
        <h2 style="text-align: center">{{i18n.thanke_content}}</h2>
    </div>
    <form v-else v-on:submit.prevent="sendForm">
        <div class="col-md-12 contact-form-body">
            <div class="row">
                <div class="col-md-3 column important" :require-label="i18n.form_required">
                    <p>{{i18n.contact1}}</p>
                </div>
                <div class="col-md-9 column">
                    <input class="form-control width-limit" type="text" name="name" v-model="contact.name" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 column important" :require-label="i18n.form_required">
                    <p>{{i18n.contact2}}</p>
                </div>
                <div class="col-md-9 column">
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" v-model="contact.gender" value="男" required>{{i18n.male}}
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" v-model="contact.gender" value="女" required>{{i18n.female}}
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 column">
                    <p>{{i18n.address}}</p>
                </div>
                <div class="col-md-9 column">
                    <input class="form-control width-limit" type="text" name="address" v-model="contact.address">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 column important" :require-label="i18n.form_required">
                    <p>{{i18n.email}}</p>
                </div>
                <div class="col-md-9 column">
                    <input class="form-control width-limit" type="email" name="email" v-model="contact.email" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 column important" :require-label="i18n.form_required">
                    <p>{{i18n.phone}}</p>
                </div>
                <div class="col-md-9 column">
                    <input class="form-control width-limit" type="phone" name="phone" v-model="contact.phone" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 column important" :require-label="i18n.form_required">
                    <p>{{i18n.company_title}}</p>
                </div>
                <div class="col-md-9 column">
                    <input class="form-control width-limit" type="text" name="company" v-model="contact.company" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 column important" :require-label="i18n.form_required">
                    <p>{{i18n.follow_prod}}</p>
                </div>
                <div class="col-md-9 column">
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="" value="胶原蛋白" v-model="contact.concern">{{i18n.catalog_d_2}}
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="" value="益生菌" v-model="contact.concern">{{i18n.catalog_d_3}}
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="" value="角豆" v-model="contact.concern">{{i18n.catalog_d_4}}
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="" value="体重管理" v-model="contact.concern">{{i18n.weight_management}}
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="" value="保健食品" v-model="contact.concern">{{i18n.healthy_food}}
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="" value="机能饮品" v-model="contact.concern">{{i18n.functional_drinks}}
                        </label>
                    </div>
                    
                    <div class="form-check-inline">
                        <label class="form-check-label" style="width: 240px;">
                            <input type="checkbox" class="form-check-input" name="" value="OTHER" v-model="contact.concern">{{i18n.others}}
                            <input type="text" style="width: 180px; display: inline-block;" class="form-control" v-model="theOther" :disabled="!hasOther">
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 column important" :require-label="i18n.form_required">
                    <p>{{i18n.inquiry_content}}</p>
                    <p class="text">{{i18n.inquiry_notice}}</p>
                </div>
                <div class="col-md-9 column">
                    <textarea name="content" class="form-control content" v-model="contact.content" required></textarea>
                </div>
            </div>
        </div>
        <div style="clear: both"></div>
        <div class="col-md-10 mx-auto contact-form-footer">
            <p class="info" style="text-align: center" v-html="i18n.contact_form_notice"></p>
            <p class="info" style="text-align: center" v-html="i18n.contact_submit_notice"></p>
            <div class="captcha-section">
                <strong>{{i18n.captcha}}</strong>
                <img :src="captchaUrl" id="captcha" alt="">
                <a style="cursor: pointer" id="refresh-captcha" @click="refreshCaptcha">{{i18n.captcha_refresh}}</a>
                <input type="text" class="form-control captcha" v-model="contact.captcha" name="captcha" :placeholder="i18n.captcha_enter" required :title="i18n.captcha">
                <button class="submit-btn" type="submit">{{i18n.contact_submit}}</button>
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
            let i18n = JSON.parse(document.getElementById('i18n-text').value)
            return {
                i18n: i18n,
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
<style lang="scss">
.width-limit {
    max-width: 350px;
}
</style>
