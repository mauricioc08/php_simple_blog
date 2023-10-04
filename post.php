<?php
    include_once("./templates/header.php");
    if(isset($_GET['id'])){
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post){
            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }
    }

?>
    <main class="postContainer">
        <div class="contentContainer">
            <h1 class="mainTitle"><?= $currentPost['title'] ?></h1>
            <p class="postDescription"><?= $currentPost['description'] ?></p>
            <div class="imgContainer">
              <img src="./img/<?= $currentPost['img']?>" alt="<?= $currentPost['title']?>"/>  
            </div>
            <p class="postContent">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam delectus nobis consequatur, molestiae explicabo eius tenetur enim voluptate sint libero 
            Lorem ipsum, dolor sit amet A officia in perferendis, voluptas quia adipisci tempore at laboriosam eos. Incidunt tempora corrupti dignissimos animi quia aperiam at veniam, amet voluptatum sunt odio cupiditate quas molestias magnam culpa! Qui?
            Recusandae totam enim explicabo, iure esse quibusdam distinctio blanditiis fuga excepturi, et accusamus delectus animi cum minima non error consequatur. Enim laudantium iste numquam explicabo adipisci, molestias iure deserunt itaque!
            Qui aut magni quasi eius corporis! A distinctio molestiae delectus adipisci voluptatibus libero saepe commodi quae sint esse perspiciatis sapiente, quam laborum, necessitatibus possimus fuga, repellendus mollitia laudantium consequatur ratione.
            Molestiae cum, qui temporibus necessitatibus laborum corrupti, esse rem nisi soluta repellendus aliquam quaerat? Ea, sunt maiores in ut aliquid nobis optio autem repellendus corporis enim saepe fuga rerum sequi!
            A officia in perferendis, voluptas quia adipisci tempore at laboriosam eos. Incidunt tempora corrupti dignissimos animi quia aperiam at veniam, amet voluptatum sunt odio cupiditate quas molestias magnam culpa! Qui?
            Recusandae totam enim explicabo, iure esse quibusdam distinctio blanditiis fuga excepturi, et accusamus delectus animi cum minima non error consequatur. Enim laudantium iste numquam explicabo adipisci, molestias iure deserunt itaque!
            Qui aut magni quasi eius corporis! A distinctio molestiae delectus adipisci voluptatibus libero saepe commodi quae sint esse perspiciatis sapiente, quam laborum, necessitatibus possimus fuga, repellendus mollitia laudantium consequatur ratione.
            Molestiae cum, qui temporibus necessitatibus laborum corrupti, esse rem nisi soluta repellendus aliquam quaerat? Ea, sunt maiores in ut aliquid nobis optio autem repellendus corporis enim saepe fuga rerum sequi!
            </p>
        </div>

        <aside class="navContainer">
       <h3 class="tagsTitle">Tags</h3> 
       <ul class="tagList">
         <?php foreach($currentPost['tags'] as $tag): ?>
            <li><a href="#"><?= $tag ?></a></li>
         <?php endforeach; ?> 
       </ul>
       <h3 class="categoriesTitle">Categorias</h3>
       <ul class="categoriesList">
         <?php foreach($categories as $category): ?>
            <li><a href="#"><?= $category ?></a></li>
         <?php endforeach; ?> 
       </ul> 
    </aside>
    </main>

<?php
    include_once("./templates/footer.php");
?>