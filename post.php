<?php
    include_once('templates/header.php');
    
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
    
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"> <?= $currentPost['title']?></h1>
            <p id="post-description"><?= $currentPost['description']?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL?>/img/<?= $currentPost['img']?>" alt="<?=$currentPost['title']?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error suscipit quidem vero quam eligendi officiis inventore libero? Harum rerum esse voluptatem nam accusamus iure molestiae totam eaque sit. Est, necessitatibus!
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
            </p>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error suscipit quidem vero quam eligendi officiis inventore libero? Harum rerum esse voluptatem nam accusamus iure molestiae totam eaque sit. Est, necessitatibus!
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
            </p>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag ):?>
                    <li><a href="#"><?=$tag?> </a></li>
                <?php endforeach; ?>
            </ul>

        <h3 id="categories-title">categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category ):?>
                <li><a href="#"><?=$category?> </a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
    </main>

<?php 
    include_once('templates/footer.php');
?>