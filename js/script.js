const app = new Vue({
  el: '#app',
  data: {
    album: [],
  },
  created() {
    axios.get('http://localhost/php-ajax-dischi/server/controller.php').
    then((result) => {
      this.album = result.data;
    }).catch((err) => {
      console.error(err);
    });
  }
})
