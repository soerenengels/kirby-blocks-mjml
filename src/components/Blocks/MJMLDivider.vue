<template>
	<div class="k-block-type-mjml-divider" :style="align">
		<hr :style="styleObject"   />
	</div>
</template>

<script>
/**
 * @displayName BlockTypeLine
 * @internal
 */
export default {
  computed: {
    align() {
      return {
        textAlign: this.content.align,
      }
    },
    styleObject() {
        return {
          border: 0,
          borderTop: `${this.content.border_width} ${this.content.border_style} ${this.content.color}`,
          padding: this.content.padding,
          width: this.content.width,
        };
    }
  }
};
</script>

<style>
.k-block-type-mjml-divider hr {
	display: inline-block;
}
</style>
