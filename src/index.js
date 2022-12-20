import MJMLPreview from "./components/Sections/MJMLPreview.vue";
import MJMLText from "./components/Blocks/MJMLText.vue";
import MJMLHeading from "./components/Blocks/MJMLHeading.vue";
import MJMLDivider from "./components/Blocks/MJMLDivider.vue";
import MJMLImage from "./components/Blocks/MJMLImage.vue";
/* import MJMLRaw from "./components/Blocks/MJMLRaw.vue";
import MJMLList from "./components/Blocks/MJMLList.vue"; */

window.panel.plugin("soerenengels/blocks-mjml", {
  sections: {
    "mjml_preview": MJMLPreview, // TODO: rename to email_preview
  },
  blocks: {
    "mj-text": MJMLText,
    "mj-heading": MJMLHeading,
    "mj-divider": MJMLDivider,
    /* "mj-raw": MJMLRaw,
    "mj-list": MJMLList, */
    "mj-image": MJMLImage,
  },
});
