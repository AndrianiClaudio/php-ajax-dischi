const app = new Vue({
  el: '#app',
  data: {
  },
  created() {
    axios.get('http://localhost/php-ajax-dischi/server/controller.php').then((result) => {
      console.log('ok');
      console.log(result);

    }).catch((err) => {
      console.error(err);
    });
  }
})
