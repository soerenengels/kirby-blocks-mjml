<template>
  <section class="k-mail-preview-section">
    <header class="k-section-header">
      <h2 class="k-headline">{{ label }}</h2>
    </header>
    <k-box theme="info">
      <div>
        <p>
          <strong>{{ subject }}</strong> — {{ preview }} |
          <em>{{ abstract }}</em>
        </p>
      </div>
    </k-box>
    <k-text theme="help">
      <a class="k-link" target="_blank" :href="url">&rarr; Show email preview in Browser</a>
    </k-text>
  </section>
</template>

<script>
export default {
  data() {
    return {
      label: null,
      subject: 'Subject of E-Mail',
      preview: 'Preview text first line',
      abstract: null,
      url: null
    }
  },
  created() {
    this.load().then(response => {
      this.label  = response.label;
      this.subject = response.subject;
      this.preview  = response.preview;
      this.abstract  = response.abstract;
      this.url  = response.url;
    });
  }
};
</script>

<style>
  .k-link {
    text-decoration: none !important;
    padding-block: 1em !important;
  }
</style>
