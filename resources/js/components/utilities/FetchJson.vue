<script>
export default {
  props: ["url"],
  data() {
    return {
      response: null,
      loading: true
    };
  },
  created() {
    axios
      .get(this.url)
      .then(response => response.data)
      .then(response => {
        this.response = response;
        this.loading = false;
      });
  },
  render() {
    return this.$scopedSlots.default({
      response: this.response,
      loading: this.loading
    });
  }
};
</script>
