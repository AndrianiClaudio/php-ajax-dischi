<main class="main">
  <div class="container">
    <section class="card" 
    v-for='(a,index) in album'
    :key='`album-${index}`'>
      <img :src="a['img_path']">
      <h2>
        {{a['title']}}
      </h2>
      <span>
        {{a['author']}}
      </span>
      <span>
        {{a['year']}}
      </span>
    </section>
  </div>
</main>