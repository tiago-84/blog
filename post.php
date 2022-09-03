<?php
  include_once("<templates/header.php");

  if(isset($_GET['id'])){

       
    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post){

      if($post['id']== $postId){
        $currentPost = $post;
        
      }
      
    }
    
 
  }

  

?>

  <main id="container-post">
    <div class="content-container">
      <h1 id="main-title"><?= $currentPost['title']; ?></h1>
      <p id="description-post"><?= $currentPost['description']; ?></p>
      <div class="img-container">
        <img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="<?= $currentPost['title']; ?>">
      </div>
      <p class="content-post">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti totam culpa consequuntur consectetur enim nisi consequatur. Hic sint quas eligendi explicabo, aliquam quisquam amet incidunt ullam atque tempore laborum temporibus.
      Eveniet corporis autem exercitationem libero doloribus aut nemo sint tempore cum porro necessitatibus alias, minus, voluptate ullam eaque laudantium perspiciatis totam hic saepe quaerat laborum laboriosam? Placeat eum aliquid quam.
      Incidunt iusto repudiandae modi atque blanditiis ex, in consectetur! Tempora necessitatibus ullam explicabo non, ex, dolor quasi beatae numquam ipsa earum libero totam eum fuga temporibus! Dolor numquam eius assumenda.
      Sit culpa dolorum distinctio libero, quibusdam ipsum iusto maiores reprehenderit cumque. Facere a amet, error similique adipisci voluptas vel, porro voluptatibus quisquam velit iure voluptatum aliquam accusamus labore commodi odio?
      Excepturi neque deserunt necessitatibus, reiciendis fuga, ipsam natus odio at asperiores ad ratione molestias quibusdam. Velit iste incidunt culpa eligendi totam eius soluta et. Nam quisquam nesciunt atque quam voluptatum.</p> 
      <p class="content-post">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti totam culpa consequuntur consectetur enim nisi consequatur. Hic sint quas eligendi explicabo, aliquam quisquam amet incidunt ullam atque tempore laborum temporibus.
      Eveniet corporis autem exercitationem libero doloribus aut nemo sint tempore cum porro necessitatibus alias, minus, voluptate ullam eaque laudantium perspiciatis totam hic saepe quaerat laborum laboriosam? Placeat eum aliquid quam.
      Incidunt iusto repudiandae modi atque blanditiis ex, in consectetur! Tempora necessitatibus ullam explicabo non, ex, dolor quasi beatae numquam ipsa earum libero totam eum fuga temporibus! Dolor numquam eius assumenda.
      Sit culpa dolorum distinctio libero, quibusdam ipsum iusto maiores reprehenderit cumque. Facere a amet, error similique adipisci voluptas vel, porro voluptatibus quisquam velit iure voluptatum aliquam accusamus labore commodi odio?
      Excepturi neque deserunt necessitatibus, reiciendis fuga, ipsam natus odio at asperiores ad ratione molestias quibusdam. Velit iste incidunt culpa eligendi totam eius soluta et. Nam quisquam nesciunt atque quam voluptatum.</p>     
   </div>
    <aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
      <?php foreach($currentPost['tags'] as $tag): ?>
        <li><a href=""><?= $tag?></a></li>
      <?php endforeach; ?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
    <?php foreach($categories as $category): ?>
      <li><a href=""><?= $category ?></a></li>
      <?php endforeach; ?>
    </ul>
</aside>
  </main>

<?php
  include_once("templates/footer.php");
?>