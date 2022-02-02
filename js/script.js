const app = new Vue({
  el: '#app',
  data: {
    album: [],
  },
  created() {
    axios.get('http://localhost/php-ajax-dischi/server/controller.php').then((result) => {
      this.album = result.data;
      // console.log(this.album);
    }).catch((err) => {
      console.error(err);
    });
  }
})
