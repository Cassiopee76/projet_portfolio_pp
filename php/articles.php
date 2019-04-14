

<?php
$id = $_GET['id'];
require '../connexion/connexion.php';
$database = Database::connect();
$query2 = $database->query('SELECT * FROM works WHERE id=' .$id);
while($item = $query2->fetch()) { ?>

<section id="articles-show">
    <div class="article-header">
        <div id="cross">X</div>

        <h1><?php echo $item['title_work']?></h1>
        
        <p><?php echo $item['content_work']?></p>
        
        <img src="../img/image-work/<?php echo $item['pics_presentation'] ?>" 
            alt="mes images de présentation" /> 
    </div>
    <article class="container-article">
        <div>
            <h2><?php echo $item['title_article']?></h2>
            <p><?php echo $item['content_article'] ?></p>
        </div>
        <div>
            <img src="../img/img-article/<?php echo $item['pics_article'] ?>" 
            alt="mes images articles"/> 
        </div>
    </article>
</section>

<?php 
    }
?>