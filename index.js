(function() {
  "use strict";
  const MJMLPreview_vue_vue_type_style_index_0_lang = "";
  function normalizeComponent(scriptExports, render, staticRenderFns, functionalTemplate, injectStyles, scopeId, moduleIdentifier, shadowMode) {
    var options = typeof scriptExports === "function" ? scriptExports.options : scriptExports;
    if (render) {
      options.render = render;
      options.staticRenderFns = staticRenderFns;
      options._compiled = true;
    }
    if (functionalTemplate) {
      options.functional = true;
    }
    if (scopeId) {
      options._scopeId = "data-v-" + scopeId;
    }
    var hook;
    if (moduleIdentifier) {
      hook = function(context) {
        context = context || this.$vnode && this.$vnode.ssrContext || this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext;
        if (!context && typeof __VUE_SSR_CONTEXT__ !== "undefined") {
          context = __VUE_SSR_CONTEXT__;
        }
        if (injectStyles) {
          injectStyles.call(this, context);
        }
        if (context && context._registeredComponents) {
          context._registeredComponents.add(moduleIdentifier);
        }
      };
      options._ssrRegister = hook;
    } else if (injectStyles) {
      hook = shadowMode ? function() {
        injectStyles.call(
          this,
          (options.functional ? this.parent : this).$root.$options.shadowRoot
        );
      } : injectStyles;
    }
    if (hook) {
      if (options.functional) {
        options._injectStyles = hook;
        var originalRender = options.render;
        options.render = function renderWithStyleInjection(h, context) {
          hook.call(context);
          return originalRender(h, context);
        };
      } else {
        var existing = options.beforeCreate;
        options.beforeCreate = existing ? [].concat(existing, hook) : [hook];
      }
    }
    return {
      exports: scriptExports,
      options
    };
  }
  const _sfc_main$4 = {
    data() {
      return {
        label: null,
        subject: "Subject of E-Mail",
        preview: "Preview text first line",
        abstract: null,
        url: null
      };
    },
    created() {
      this.load().then((response) => {
        this.label = response.label;
        this.subject = response.subject;
        this.preview = response.preview;
        this.abstract = response.abstract;
        this.url = response.url;
      });
    }
  };
  var _sfc_render$4 = function render() {
    var _vm = this, _c = _vm._self._c;
    return _c("section", { staticClass: "k-mail-preview-section" }, [_c("header", { staticClass: "k-section-header" }, [_c("h2", { staticClass: "k-headline" }, [_vm._v(_vm._s(_vm.label))])]), _c("k-box", { attrs: { "theme": "info" } }, [_c("div", [_c("p", [_c("strong", [_vm._v(_vm._s(_vm.subject))]), _vm._v(" \u2014 " + _vm._s(_vm.preview) + " | "), _c("em", [_vm._v(_vm._s(_vm.abstract))])])])]), _c("k-text", { attrs: { "theme": "help" } }, [_c("a", { staticClass: "k-link", attrs: { "target": "_blank", "href": _vm.url } }, [_vm._v("\u2192 Show email preview in Browser")])])], 1);
  };
  var _sfc_staticRenderFns$4 = [];
  _sfc_render$4._withStripped = true;
  var __component__$4 = /* @__PURE__ */ normalizeComponent(
    _sfc_main$4,
    _sfc_render$4,
    _sfc_staticRenderFns$4,
    false,
    null,
    null,
    null,
    null
  );
  __component__$4.options.__file = "/Users/sorenengels/Documents/2022/kirby.upstream-newsletter.de/kirby-blocks-mjml/kirby-blocks-mjml/site/plugins/kirby-blocks-mjml/src/components/Sections/MJMLPreview.vue";
  const MJMLPreview = __component__$4.exports;
  const MJMLText_vue_vue_type_style_index_0_lang = "";
  const _sfc_main$3 = {
    computed: {
      component() {
        const component = "k-" + this.textField.type + "-input";
        if (this.$helper.isComponent(component)) {
          return component;
        }
        return "k-writer";
      },
      textField() {
        return this.field("text", {});
      },
      styleObject() {
        return {
          color: this.content.color,
          fontFamily: this.content.font_family,
          fontSize: this.content.font_size,
          fontWeight: this.content.font_weight,
          lineHeight: this.content.line_height,
          letterSpacing: this.content.letter_spacing,
          height: this.content.height,
          textDecoration: this.content.text_decoration,
          textTransform: this.content.text_transform,
          textAlign: this.content.align,
          backgroundColor: this.content.background_color,
          padding: this.content.padding
        };
      }
    },
    methods: {
      focus() {
        this.$refs.input.focus();
      }
    }
  };
  var _sfc_render$3 = function render() {
    var _vm = this, _c = _vm._self._c;
    return _c(_vm.component, _vm._b({ ref: "input", tag: "component", staticClass: "k-block-type-text-input", style: _vm.styleObject, attrs: { "value": _vm.content.text }, on: { "input": function($event) {
      return _vm.update({ text: $event });
    } } }, "component", _vm.textField, false));
  };
  var _sfc_staticRenderFns$3 = [];
  _sfc_render$3._withStripped = true;
  var __component__$3 = /* @__PURE__ */ normalizeComponent(
    _sfc_main$3,
    _sfc_render$3,
    _sfc_staticRenderFns$3,
    false,
    null,
    null,
    null,
    null
  );
  __component__$3.options.__file = "/Users/sorenengels/Documents/2022/kirby.upstream-newsletter.de/kirby-blocks-mjml/kirby-blocks-mjml/site/plugins/kirby-blocks-mjml/src/components/Blocks/MJMLText.vue";
  const MJMLText = __component__$3.exports;
  const MJMLHeading_vue_vue_type_style_index_0_lang = "";
  const _sfc_main$2 = {
    computed: {
      textField() {
        return this.field("text", {
          marks: true
        });
      },
      styleObject() {
        return {
          color: this.content.color,
          fontFamily: this.content.font_family,
          fontSize: this.content.font_size,
          fontWeight: this.content.font_weight,
          lineHeight: this.content.line_height,
          letterSpacing: this.content.letter_spacing,
          height: this.content.height,
          textDecoration: this.content.text_decoration,
          textTransform: this.content.text_transform,
          textAlign: this.content.align,
          backgroundColor: this.content.background_color,
          padding: this.content.padding
        };
      }
    },
    methods: {
      focus() {
        this.$refs.input.focus();
      }
    }
  };
  var _sfc_render$2 = function render() {
    var _vm = this, _c = _vm._self._c;
    return _c("div", { staticClass: "k-block-type-heading-input", attrs: { "data-level": _vm.content.level } }, [_c("k-writer", { ref: "input", style: _vm.styleObject, attrs: { "inline": true, "marks": _vm.textField.marks, "placeholder": _vm.textField.placeholder, "value": _vm.content.text }, on: { "input": function($event) {
      return _vm.update({ text: $event });
    } } })], 1);
  };
  var _sfc_staticRenderFns$2 = [];
  _sfc_render$2._withStripped = true;
  var __component__$2 = /* @__PURE__ */ normalizeComponent(
    _sfc_main$2,
    _sfc_render$2,
    _sfc_staticRenderFns$2,
    false,
    null,
    null,
    null,
    null
  );
  __component__$2.options.__file = "/Users/sorenengels/Documents/2022/kirby.upstream-newsletter.de/kirby-blocks-mjml/kirby-blocks-mjml/site/plugins/kirby-blocks-mjml/src/components/Blocks/MJMLHeading.vue";
  const MJMLHeading = __component__$2.exports;
  const MJMLDivider_vue_vue_type_style_index_0_lang = "";
  const _sfc_main$1 = {
    computed: {
      align() {
        return {
          textAlign: this.content.align
        };
      },
      styleObject() {
        return {
          border: 0,
          borderTop: `${this.content.border_width} ${this.content.border_style} ${this.content.color}`,
          padding: this.content.padding,
          width: this.content.width
        };
      }
    }
  };
  var _sfc_render$1 = function render() {
    var _vm = this, _c = _vm._self._c;
    return _c("div", { staticClass: "k-block-type-mjml-divider", style: _vm.align }, [_c("hr", { style: _vm.styleObject })]);
  };
  var _sfc_staticRenderFns$1 = [];
  _sfc_render$1._withStripped = true;
  var __component__$1 = /* @__PURE__ */ normalizeComponent(
    _sfc_main$1,
    _sfc_render$1,
    _sfc_staticRenderFns$1,
    false,
    null,
    null,
    null,
    null
  );
  __component__$1.options.__file = "/Users/sorenengels/Documents/2022/kirby.upstream-newsletter.de/kirby-blocks-mjml/kirby-blocks-mjml/site/plugins/kirby-blocks-mjml/src/components/Blocks/MJMLDivider.vue";
  const MJMLDivider = __component__$1.exports;
  const MJMLImage_vue_vue_type_style_index_0_lang = "";
  const _sfc_main = {
    computed: {
      captionMarks() {
        return this.field("caption", { marks: true }).marks;
      },
      crop() {
        return this.content.crop || false;
      },
      src() {
        var _a;
        if (this.content.location === "web") {
          return this.content.src;
        }
        if ((_a = this.content.image[0]) == null ? void 0 : _a.url) {
          return this.content.image[0].url;
        }
        return false;
      },
      ratio() {
        return this.content.ratio || false;
      }
    }
  };
  var _sfc_render = function render() {
    var _vm = this, _c = _vm._self._c;
    return _c("k-block-figure", { attrs: { "caption": _vm.content.caption, "caption-marks": _vm.captionMarks, "empty-text": _vm.$t("field.blocks.image.placeholder") + " \u2026", "empty-icon": "image", "is-empty": !_vm.src }, on: { "open": _vm.open, "update": _vm.update } }, [_vm.src ? [_vm.ratio ? _c("k-aspect-ratio", { attrs: { "ratio": _vm.ratio, "cover": _vm.crop } }, [_c("img", { attrs: { "alt": _vm.content.alt, "src": _vm.src } })]) : _c("img", { staticClass: "k-block-type-image-auto", attrs: { "alt": _vm.content.alt, "src": _vm.src } })] : _vm._e()], 2);
  };
  var _sfc_staticRenderFns = [];
  _sfc_render._withStripped = true;
  var __component__ = /* @__PURE__ */ normalizeComponent(
    _sfc_main,
    _sfc_render,
    _sfc_staticRenderFns,
    false,
    null,
    null,
    null,
    null
  );
  __component__.options.__file = "/Users/sorenengels/Documents/2022/kirby.upstream-newsletter.de/kirby-blocks-mjml/kirby-blocks-mjml/site/plugins/kirby-blocks-mjml/src/components/Blocks/MJMLImage.vue";
  const MJMLImage = __component__.exports;
  window.panel.plugin("soerenengels/blocks-mjml", {
    sections: {
      "mjml_preview": MJMLPreview
    },
    blocks: {
      "mj-text": MJMLText,
      "mj-heading": MJMLHeading,
      "mj-divider": MJMLDivider,
      "mj-image": MJMLImage
    }
  });
})();
