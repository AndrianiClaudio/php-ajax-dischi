const app = new Vue({
  el: '#app',
  data: {
  },
  created() {
    axios.get('https://flynn.boolean.careers/exercises/api/array/music').then((result) => {
      console.log(result.data);
    }).catch((err) => {
      console.error(err);
    });
  }
})
