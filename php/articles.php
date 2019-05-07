
<?php

$id = $_GET['id'];
require './connexion/connexion.php';
$database = Database::connect();
$query2 = $database->query('SELECT * FROM works WHERE id=' .$id);
$query3 = $database->query('SELECT * FROM text_pics_articles');
while($item = $query2->fetch()) { ?>

<section id="articles-show">
    <div class="article-header">
        <div id="cross"><a class="cross" href="index.php?page=3">X</a></div>
        <h1><?php echo $item['title_work']?></h1>
        <p><?php echo $item['content_work']?></p>
        <p><?php echo $item['content_work2']?></p>
        <div id="masthead">
            <div class="pics-article-presentation">
                <img src="./img/img-article/<?php echo $item['pics_article_presentation'] ?>" 
                 alt="mes images de présentation" /> 
            </div>
            <div class="bg-color-masthead" style="background-color:<?php echo $item['bg-color'] ?>"></div>
        </div>
    </div>
<?php } ?>

<?php while($item = $query3->fetch()) { ?>
    <script>
            console.log(<?php echo $item['position']?>);
    </script>
    <?php if ($item['position'] === '1') { ?>
        <article class="container-article">
            <div class="text-article">
                <h2><?php echo $item['title_article']?></h2>
                <p><?php echo $item['content_article1'] ?></p>
                <p><?php echo $item['content_article2'] ?></p>
                <p><?php echo $item['content_article3'] ?></p>
            </div>
            <?php if ($item['pics_articles'] !== null ) { ?>
            <div class="img-article">
                <img src="./img/img-article/<?php echo $item['pics_articles'] ?>" 
                alt="image article A1"/>
                <br/>
                <img src="./img/img-article/<?php echo $item['pics_articles_2'] ?>" 
                alt="image article A2"/>
            <?php } ?>
            <?php if ($item['video_article'] !== null ) { ?>
                <video class="video-espacece" controls width="500">
                    <source src="./video/<?php echo $item['video_article'] ?> " type="video/mp4" />
                </video> 
            <?php } ?>
            </div>
            
        </article>
    <?php } 
    if ($item['position'] === '2'){ ?>
        <script>
            console.log('titi');
        </script>
        <article class="container-article">
            <?php if ($item['pics_articles'] !== null ) { ?>
            <div class="img-article">
                <img src="./img/img-article/<?php echo $item['pics_articles'] ?>" 
                alt="image article B1"/>
                <br/>
                <img src="./img/img-article/<?php echo $item['pics_articles_2'] ?>" 
                alt="image article B2"/>
            </div>
            <?php } ?>
            <div class="text-article">
                <h2><?php echo $item['title_article']?></h2>
                <p><?php echo $item['content_article1'] ?></p>
                <p><?php echo $item['content_article2'] ?></p>
                <p><?php echo $item['content_article3'] ?></p>
            </div>
        </article>
    <?php } ?>           
<?php } ?>
</section>


    