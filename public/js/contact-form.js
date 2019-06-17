/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 617);
/******/ })
/************************************************************************/
/******/ ({

/***/ 5:
/***/ (function(module, exports) {

/* globals __VUE_SSR_CONTEXT__ */

// IMPORTANT: Do NOT use ES2015 features in this file.
// This module is a runtime utility for cleaner component module output and will
// be included in the final webpack user bundle.

module.exports = function normalizeComponent (
  rawScriptExports,
  compiledTemplate,
  functionalTemplate,
  injectStyles,
  scopeId,
  moduleIdentifier /* server only */
) {
  var esModule
  var scriptExports = rawScriptExports = rawScriptExports || {}

  // ES6 modules interop
  var type = typeof rawScriptExports.default
  if (type === 'object' || type === 'function') {
    esModule = rawScriptExports
    scriptExports = rawScriptExports.default
  }

  // Vue.extend constructor export interop
  var options = typeof scriptExports === 'function'
    ? scriptExports.options
    : scriptExports

  // render functions
  if (compiledTemplate) {
    options.render = compiledTemplate.render
    options.staticRenderFns = compiledTemplate.staticRenderFns
    options._compiled = true
  }

  // functional template
  if (functionalTemplate) {
    options.functional = true
  }

  // scopedId
  if (scopeId) {
    options._scopeId = scopeId
  }

  var hook
  if (moduleIdentifier) { // server build
    hook = function (context) {
      // 2.3 injection
      context =
        context || // cached call
        (this.$vnode && this.$vnode.ssrContext) || // stateful
        (this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext) // functional
      // 2.2 with runInNewContext: true
      if (!context && typeof __VUE_SSR_CONTEXT__ !== 'undefined') {
        context = __VUE_SSR_CONTEXT__
      }
      // inject component styles
      if (injectStyles) {
        injectStyles.call(this, context)
      }
      // register component module identifier for async chunk inferrence
      if (context && context._registeredComponents) {
        context._registeredComponents.add(moduleIdentifier)
      }
    }
    // used by ssr in case component is cached and beforeCreate
    // never gets called
    options._ssrRegister = hook
  } else if (injectStyles) {
    hook = injectStyles
  }

  if (hook) {
    var functional = options.functional
    var existing = functional
      ? options.render
      : options.beforeCreate

    if (!functional) {
      // inject component registration as beforeCreate hook
      options.beforeCreate = existing
        ? [].concat(existing, hook)
        : [hook]
    } else {
      // for template-only hot-reload because in that case the render fn doesn't
      // go through the normalizer
      options._injectStyles = hook
      // register for functioal component in vue file
      options.render = function renderWithStyleInjection (h, context) {
        hook.call(context)
        return existing(h, context)
      }
    }
  }

  return {
    esModule: esModule,
    exports: scriptExports,
    options: options
  }
}


/***/ }),

/***/ 617:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(618);


/***/ }),

/***/ 618:
/***/ (function(module, exports, __webpack_require__) {

Vue.component('contact-form', __webpack_require__(619));

var app = new Vue({
    el: '#contact-form'
});

/***/ }),

/***/ 619:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(5)
/* script */
var __vue_script__ = __webpack_require__(620)
/* template */
var __vue_template__ = __webpack_require__(621)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources\\assets\\js\\components\\views\\frontend\\contact-form\\contact-form.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-8f3d2992", Component.options)
  } else {
    hotAPI.reload("data-v-8f3d2992", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 620:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    mounted: function mounted() {
        console.log('Component mounted.');
    },
    data: function data() {
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
        };
    },
    created: function created() {
        this.refreshCaptcha();
    },

    computed: {
        hasOther: function hasOther() {
            return _.includes(this.contact.concern, 'OTHER');
        },
        parsedContact: function parsedContact() {
            var form = JSON.parse(JSON.stringify(this.contact));
            if (form.concern.includes('OTHER')) {
                form.concern.splice(form.concern.indexOf('OTHER'), 1);
            }
            var concernStr = JSON.stringify(form.concern).replace(/\[|]/g, '').replace(/","/g, ', ').replace(/"/g, '');

            if (this.theOther) {
                concernStr += ', ' + this.theOther;
            }

            form.concern = concernStr;
            return form;
        }
    },
    methods: {
        refreshCaptcha: function refreshCaptcha() {
            var _this = this;

            axios.get('/cap_str').then(function (res) {
                _this.captchaUrl = '/captcha?q=' + res.data;
            });
        },
        sendForm: function sendForm() {
            var _this2 = this;

            $('.loading-bar').show();
            axios.post('/send-form', this.parsedContact).then(function (res) {
                _this2.formSended = true;
            }).catch(function (err) {
                var result = err.response;

                if (result.status == 481) {
                    alert('验证码错误');
                }
            }).then(function () {
                $('.loading-bar').hide();
            });
        }
    }
});

/***/ }),

/***/ 621:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _vm.formSended
    ? _c("div", [
        _c("h2", { staticStyle: { "text-align": "center" } }, [
          _vm._v("非常感谢您的来信，我们会尽快联系您。")
        ])
      ])
    : _c(
        "form",
        {
          on: {
            submit: function($event) {
              $event.preventDefault()
              return _vm.sendForm($event)
            }
          }
        },
        [
          _c("div", { staticClass: "col-md-11 pull-right contact-form-body" }, [
            _c("div", { staticClass: "row" }, [
              _vm._m(0),
              _vm._v(" "),
              _c("div", { staticClass: "col-md-8 column" }, [
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.contact.name,
                      expression: "contact.name"
                    }
                  ],
                  staticClass: "form-control",
                  attrs: { type: "text", name: "name", required: "" },
                  domProps: { value: _vm.contact.name },
                  on: {
                    input: function($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.$set(_vm.contact, "name", $event.target.value)
                    }
                  }
                })
              ])
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "row" }, [
              _vm._m(1),
              _vm._v(" "),
              _c("div", { staticClass: "col-md-8 column" }, [
                _c("div", { staticClass: "form-check-inline" }, [
                  _c("label", { staticClass: "form-check-label" }, [
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.contact.gender,
                          expression: "contact.gender"
                        }
                      ],
                      staticClass: "form-check-input",
                      attrs: {
                        type: "radio",
                        name: "gender",
                        value: "男",
                        required: ""
                      },
                      domProps: { checked: _vm._q(_vm.contact.gender, "男") },
                      on: {
                        change: function($event) {
                          _vm.$set(_vm.contact, "gender", "男")
                        }
                      }
                    }),
                    _vm._v("男\n                    ")
                  ])
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "form-check-inline" }, [
                  _c("label", { staticClass: "form-check-label" }, [
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.contact.gender,
                          expression: "contact.gender"
                        }
                      ],
                      staticClass: "form-check-input",
                      attrs: {
                        type: "radio",
                        name: "gender",
                        value: "女",
                        required: ""
                      },
                      domProps: { checked: _vm._q(_vm.contact.gender, "女") },
                      on: {
                        change: function($event) {
                          _vm.$set(_vm.contact, "gender", "女")
                        }
                      }
                    }),
                    _vm._v("女\n                    ")
                  ])
                ])
              ])
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "row" }, [
              _vm._m(2),
              _vm._v(" "),
              _c("div", { staticClass: "col-md-8 column" }, [
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.contact.address,
                      expression: "contact.address"
                    }
                  ],
                  staticClass: "form-control",
                  attrs: { type: "text", name: "address" },
                  domProps: { value: _vm.contact.address },
                  on: {
                    input: function($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.$set(_vm.contact, "address", $event.target.value)
                    }
                  }
                })
              ])
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "row" }, [
              _vm._m(3),
              _vm._v(" "),
              _c("div", { staticClass: "col-md-8 column" }, [
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.contact.email,
                      expression: "contact.email"
                    }
                  ],
                  staticClass: "form-control",
                  attrs: { type: "email", name: "email", required: "" },
                  domProps: { value: _vm.contact.email },
                  on: {
                    input: function($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.$set(_vm.contact, "email", $event.target.value)
                    }
                  }
                })
              ])
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "row" }, [
              _vm._m(4),
              _vm._v(" "),
              _c("div", { staticClass: "col-md-8 column" }, [
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.contact.phone,
                      expression: "contact.phone"
                    }
                  ],
                  staticClass: "form-control",
                  attrs: { type: "phone", name: "phone", required: "" },
                  domProps: { value: _vm.contact.phone },
                  on: {
                    input: function($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.$set(_vm.contact, "phone", $event.target.value)
                    }
                  }
                })
              ])
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "row" }, [
              _vm._m(5),
              _vm._v(" "),
              _c("div", { staticClass: "col-md-8 column" }, [
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.contact.company,
                      expression: "contact.company"
                    }
                  ],
                  staticClass: "form-control",
                  attrs: { type: "text", name: "company", required: "" },
                  domProps: { value: _vm.contact.company },
                  on: {
                    input: function($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.$set(_vm.contact, "company", $event.target.value)
                    }
                  }
                })
              ])
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "row" }, [
              _vm._m(6),
              _vm._v(" "),
              _c("div", { staticClass: "col-md-8 column" }, [
                _c("div", { staticClass: "form-check-inline" }, [
                  _c("label", { staticClass: "form-check-label" }, [
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.contact.concern,
                          expression: "contact.concern"
                        }
                      ],
                      staticClass: "form-check-input",
                      attrs: { type: "checkbox", name: "", value: "胶原蛋白" },
                      domProps: {
                        checked: Array.isArray(_vm.contact.concern)
                          ? _vm._i(_vm.contact.concern, "胶原蛋白") > -1
                          : _vm.contact.concern
                      },
                      on: {
                        change: function($event) {
                          var $$a = _vm.contact.concern,
                            $$el = $event.target,
                            $$c = $$el.checked ? true : false
                          if (Array.isArray($$a)) {
                            var $$v = "胶原蛋白",
                              $$i = _vm._i($$a, $$v)
                            if ($$el.checked) {
                              $$i < 0 &&
                                _vm.$set(
                                  _vm.contact,
                                  "concern",
                                  $$a.concat([$$v])
                                )
                            } else {
                              $$i > -1 &&
                                _vm.$set(
                                  _vm.contact,
                                  "concern",
                                  $$a.slice(0, $$i).concat($$a.slice($$i + 1))
                                )
                            }
                          } else {
                            _vm.$set(_vm.contact, "concern", $$c)
                          }
                        }
                      }
                    }),
                    _vm._v("胶原蛋白\n                    ")
                  ])
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "form-check-inline" }, [
                  _c("label", { staticClass: "form-check-label" }, [
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.contact.concern,
                          expression: "contact.concern"
                        }
                      ],
                      staticClass: "form-check-input",
                      attrs: { type: "checkbox", name: "", value: "益生菌" },
                      domProps: {
                        checked: Array.isArray(_vm.contact.concern)
                          ? _vm._i(_vm.contact.concern, "益生菌") > -1
                          : _vm.contact.concern
                      },
                      on: {
                        change: function($event) {
                          var $$a = _vm.contact.concern,
                            $$el = $event.target,
                            $$c = $$el.checked ? true : false
                          if (Array.isArray($$a)) {
                            var $$v = "益生菌",
                              $$i = _vm._i($$a, $$v)
                            if ($$el.checked) {
                              $$i < 0 &&
                                _vm.$set(
                                  _vm.contact,
                                  "concern",
                                  $$a.concat([$$v])
                                )
                            } else {
                              $$i > -1 &&
                                _vm.$set(
                                  _vm.contact,
                                  "concern",
                                  $$a.slice(0, $$i).concat($$a.slice($$i + 1))
                                )
                            }
                          } else {
                            _vm.$set(_vm.contact, "concern", $$c)
                          }
                        }
                      }
                    }),
                    _vm._v("益生菌\n                    ")
                  ])
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "form-check-inline" }, [
                  _c("label", { staticClass: "form-check-label" }, [
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.contact.concern,
                          expression: "contact.concern"
                        }
                      ],
                      staticClass: "form-check-input",
                      attrs: { type: "checkbox", name: "", value: "角豆" },
                      domProps: {
                        checked: Array.isArray(_vm.contact.concern)
                          ? _vm._i(_vm.contact.concern, "角豆") > -1
                          : _vm.contact.concern
                      },
                      on: {
                        change: function($event) {
                          var $$a = _vm.contact.concern,
                            $$el = $event.target,
                            $$c = $$el.checked ? true : false
                          if (Array.isArray($$a)) {
                            var $$v = "角豆",
                              $$i = _vm._i($$a, $$v)
                            if ($$el.checked) {
                              $$i < 0 &&
                                _vm.$set(
                                  _vm.contact,
                                  "concern",
                                  $$a.concat([$$v])
                                )
                            } else {
                              $$i > -1 &&
                                _vm.$set(
                                  _vm.contact,
                                  "concern",
                                  $$a.slice(0, $$i).concat($$a.slice($$i + 1))
                                )
                            }
                          } else {
                            _vm.$set(_vm.contact, "concern", $$c)
                          }
                        }
                      }
                    }),
                    _vm._v("角豆\n                    ")
                  ])
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "form-check-inline" }, [
                  _c("label", { staticClass: "form-check-label" }, [
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.contact.concern,
                          expression: "contact.concern"
                        }
                      ],
                      staticClass: "form-check-input",
                      attrs: { type: "checkbox", name: "", value: "体重管理" },
                      domProps: {
                        checked: Array.isArray(_vm.contact.concern)
                          ? _vm._i(_vm.contact.concern, "体重管理") > -1
                          : _vm.contact.concern
                      },
                      on: {
                        change: function($event) {
                          var $$a = _vm.contact.concern,
                            $$el = $event.target,
                            $$c = $$el.checked ? true : false
                          if (Array.isArray($$a)) {
                            var $$v = "体重管理",
                              $$i = _vm._i($$a, $$v)
                            if ($$el.checked) {
                              $$i < 0 &&
                                _vm.$set(
                                  _vm.contact,
                                  "concern",
                                  $$a.concat([$$v])
                                )
                            } else {
                              $$i > -1 &&
                                _vm.$set(
                                  _vm.contact,
                                  "concern",
                                  $$a.slice(0, $$i).concat($$a.slice($$i + 1))
                                )
                            }
                          } else {
                            _vm.$set(_vm.contact, "concern", $$c)
                          }
                        }
                      }
                    }),
                    _vm._v("体重管理\n                    ")
                  ])
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "form-check-inline" }, [
                  _c("label", { staticClass: "form-check-label" }, [
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.contact.concern,
                          expression: "contact.concern"
                        }
                      ],
                      staticClass: "form-check-input",
                      attrs: { type: "checkbox", name: "", value: "保健食品" },
                      domProps: {
                        checked: Array.isArray(_vm.contact.concern)
                          ? _vm._i(_vm.contact.concern, "保健食品") > -1
                          : _vm.contact.concern
                      },
                      on: {
                        change: function($event) {
                          var $$a = _vm.contact.concern,
                            $$el = $event.target,
                            $$c = $$el.checked ? true : false
                          if (Array.isArray($$a)) {
                            var $$v = "保健食品",
                              $$i = _vm._i($$a, $$v)
                            if ($$el.checked) {
                              $$i < 0 &&
                                _vm.$set(
                                  _vm.contact,
                                  "concern",
                                  $$a.concat([$$v])
                                )
                            } else {
                              $$i > -1 &&
                                _vm.$set(
                                  _vm.contact,
                                  "concern",
                                  $$a.slice(0, $$i).concat($$a.slice($$i + 1))
                                )
                            }
                          } else {
                            _vm.$set(_vm.contact, "concern", $$c)
                          }
                        }
                      }
                    }),
                    _vm._v("保健食品\n                    ")
                  ])
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "form-check-inline" }, [
                  _c("label", { staticClass: "form-check-label" }, [
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.contact.concern,
                          expression: "contact.concern"
                        }
                      ],
                      staticClass: "form-check-input",
                      attrs: { type: "checkbox", name: "", value: "机能饮品" },
                      domProps: {
                        checked: Array.isArray(_vm.contact.concern)
                          ? _vm._i(_vm.contact.concern, "机能饮品") > -1
                          : _vm.contact.concern
                      },
                      on: {
                        change: function($event) {
                          var $$a = _vm.contact.concern,
                            $$el = $event.target,
                            $$c = $$el.checked ? true : false
                          if (Array.isArray($$a)) {
                            var $$v = "机能饮品",
                              $$i = _vm._i($$a, $$v)
                            if ($$el.checked) {
                              $$i < 0 &&
                                _vm.$set(
                                  _vm.contact,
                                  "concern",
                                  $$a.concat([$$v])
                                )
                            } else {
                              $$i > -1 &&
                                _vm.$set(
                                  _vm.contact,
                                  "concern",
                                  $$a.slice(0, $$i).concat($$a.slice($$i + 1))
                                )
                            }
                          } else {
                            _vm.$set(_vm.contact, "concern", $$c)
                          }
                        }
                      }
                    }),
                    _vm._v("机能饮品\n                    ")
                  ])
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "form-check-inline" }, [
                  _c(
                    "label",
                    {
                      staticClass: "form-check-label",
                      staticStyle: { width: "240px" }
                    },
                    [
                      _c("input", {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.contact.concern,
                            expression: "contact.concern"
                          }
                        ],
                        staticClass: "form-check-input",
                        attrs: { type: "checkbox", name: "", value: "OTHER" },
                        domProps: {
                          checked: Array.isArray(_vm.contact.concern)
                            ? _vm._i(_vm.contact.concern, "OTHER") > -1
                            : _vm.contact.concern
                        },
                        on: {
                          change: function($event) {
                            var $$a = _vm.contact.concern,
                              $$el = $event.target,
                              $$c = $$el.checked ? true : false
                            if (Array.isArray($$a)) {
                              var $$v = "OTHER",
                                $$i = _vm._i($$a, $$v)
                              if ($$el.checked) {
                                $$i < 0 &&
                                  _vm.$set(
                                    _vm.contact,
                                    "concern",
                                    $$a.concat([$$v])
                                  )
                              } else {
                                $$i > -1 &&
                                  _vm.$set(
                                    _vm.contact,
                                    "concern",
                                    $$a.slice(0, $$i).concat($$a.slice($$i + 1))
                                  )
                              }
                            } else {
                              _vm.$set(_vm.contact, "concern", $$c)
                            }
                          }
                        }
                      }),
                      _vm._v("其他\n                        "),
                      _c("input", {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.theOther,
                            expression: "theOther"
                          }
                        ],
                        staticClass: "form-control",
                        staticStyle: {
                          width: "180px",
                          display: "inline-block"
                        },
                        attrs: { type: "text", disabled: !_vm.hasOther },
                        domProps: { value: _vm.theOther },
                        on: {
                          input: function($event) {
                            if ($event.target.composing) {
                              return
                            }
                            _vm.theOther = $event.target.value
                          }
                        }
                      })
                    ]
                  )
                ])
              ])
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "row" }, [
              _vm._m(7),
              _vm._v(" "),
              _c("div", { staticClass: "col-md-8 column" }, [
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.contact.content,
                      expression: "contact.content"
                    }
                  ],
                  staticClass: "form-control content",
                  attrs: { name: "content", required: "" },
                  domProps: { value: _vm.contact.content },
                  on: {
                    input: function($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.$set(_vm.contact, "content", $event.target.value)
                    }
                  }
                })
              ])
            ])
          ]),
          _vm._v(" "),
          _c("div", { staticStyle: { clear: "both" } }),
          _vm._v(" "),
          _c("div", { staticClass: "col-md-10 mx-auto contact-form-footer" }, [
            _vm._m(8),
            _vm._v(" "),
            _vm._m(9),
            _vm._v(" "),
            _c("div", { staticClass: "captcha-section" }, [
              _c("strong", [_vm._v("确认码")]),
              _vm._v(" "),
              _c("img", {
                attrs: { src: _vm.captchaUrl, id: "captcha", alt: "" }
              }),
              _vm._v(" "),
              _c(
                "a",
                {
                  staticStyle: { cursor: "pointer" },
                  attrs: { id: "refresh-captcha" },
                  on: { click: _vm.refreshCaptcha }
                },
                [_vm._v("更新确认码")]
              ),
              _vm._v(" "),
              _c("input", {
                directives: [
                  {
                    name: "model",
                    rawName: "v-model",
                    value: _vm.contact.captcha,
                    expression: "contact.captcha"
                  }
                ],
                staticClass: "form-control captcha",
                attrs: {
                  type: "text",
                  name: "captcha",
                  placeholder: "请输入上方的确认码...",
                  required: "",
                  title: "请输入验证码"
                },
                domProps: { value: _vm.contact.captcha },
                on: {
                  input: function($event) {
                    if ($event.target.composing) {
                      return
                    }
                    _vm.$set(_vm.contact, "captcha", $event.target.value)
                  }
                }
              }),
              _vm._v(" "),
              _c(
                "button",
                { staticClass: "submit-btn", attrs: { type: "submit" } },
                [_vm._v("提交信息")]
              )
            ])
          ])
        ]
      )
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "col-md-4 column important" }, [
      _c("p", [_vm._v("姓名")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "col-md-4 column important" }, [
      _c("p", [_vm._v("性别")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "col-md-4 column" }, [
      _c("p", [_vm._v("地址")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "col-md-4 column important" }, [
      _c("p", [_vm._v("电子邮箱")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "col-md-4 column important" }, [
      _c("p", [_vm._v("连络电话")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "col-md-4 column important" }, [
      _c("p", [_vm._v("公司名称")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "col-md-4 column important" }, [
      _c("p", [_vm._v("关注产品")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "col-md-4 column important" }, [
      _c("p", [_vm._v("询问内容")]),
      _vm._v(" "),
      _c("p", { staticClass: "text" }, [
        _vm._v("提醒您，若您填写得越精准，越有利我们及时回复给您信息。")
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("p", { staticClass: "info" }, [
      _vm._v("我们不会将您输入的任何个人信息用于回答查找以外的目的，您亦可"),
      _c("a", { attrs: { href: "" } }, [_vm._v("点击这里")]),
      _vm._v("查看更多关于天壬提供的隐私权保护政策。")
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("p", { staticClass: "info" }, [
      _vm._v(
        "* 请您务必将天壬的电子邮箱地址或域名设置为可接收的电子邮箱，以免错过我们的回复，您亦可直接与我们联系，"
      ),
      _c("a", { attrs: { href: "" } }, [_vm._v("(点击这里查看联系信息)")]),
      _vm._v("。")
    ])
  }
]
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-8f3d2992", module.exports)
  }
}

/***/ })

/******/ });