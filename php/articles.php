<?php

$id = $_GET['id'];
require './connexion/connexion.php';
$database = Database::connect();
$query2 = $database->query('SELECT * FROM works WHERE id='.$id);
$query3 = $database->query('SELECT * FROM text_pics_articles WHERE works_id='.$id);
while($item = $query2->fetch()) { ?>


<section id="articles-show">
    <div class="article-header">
        <div class="outer-cross">
            <a class="inner-back" href="index.php?page=3">
                <label>Back</label>
            </a>
        </div>
        <h1><?php echo nl2br($item['title_work'])?></h1>
        <p><?php echo nl2br($item['content_work'])?></p>
        <p><?php echo nl2br($item['content_work2'])?></p>
        <div id="masthead">
            <div class="pics-article-presentation">
                <?php if ($item['lien_url'] !== null ) { ?>
                <a href="<?php echo $item['lien_url'] ?>" target="_blank" ><?php } ?>
                    <img class="img-fluid" src="./img/img-article/<?php echo $item['pics_article_presentation'] ?>" 
                    alt="photo de présentation IMac" />
                </a> 
            </div>
            <div class="bg-color-masthead" style="background-color:<?php echo $item['bg-color'] ?>"></div>
        </div>
    </div>
<?php } ?>

<?php while($item = $query3->fetch()) { ?>
    <?php if ($item['position'] === '1') { ?>
        <article class="container-article">
                <div class="text-article">
                    <h2><?php echo nl2br($item['title_article'])?></h2>
                    <p><?php echo nl2br($item['content_article1']) ?></p>
                    <p><?php echo nl2br($item['content_article2']) ?></p>
                    <p><?php echo nl2br($item['content_article3']) ?></p>
                </div>
                <?php if ($item['pics_articles'] !== null ) { ?>
                <div class="img-article">
                    <img class="img-fluid" src="./img/img-article/<?php echo $item['pics_articles'] ?>" 
                    alt="photos de mes travaux"/>
                <?php } ?> 
                    <br/>
                <?php if ($item['pics_articles_2'] !== null ) { ?>
                    <img class="img-fluid" src="./img/img-article/<?php echo $item['pics_articles_2'] ?>" 
                    alt="photo de mes travaux"/>
                <?php } ?>
                <?php if ($item['video_article'] !== null ) { ?>
                    <video poster="./img/img-article/animation-espacece0057.jpg" class="video-espacece" controls width="500">
                        <source src="./video/<?php echo $item['video_article'] ?> " type="video/mp4" />
                    </video> 
                <?php } ?>
                </div>
        </article>
    <?php } 
    if ($item['position'] === '2'){ ?>
        <article class="container-article2">
            <?php if ($item['pics_articles'] !== null ) { ?>
            <div class="img-article">
                <img class="img-fluid" src="./img/img-article/<?php echo $item['pics_articles'] ?>" 
                alt="Pictures of my works"/>
            <?php } ?> 
                <br/>
            <?php if ($item['pics_articles_2'] !== null ) { ?>
                <img class="img-fluid" src="./img/img-article/<?php echo $item['pics_articles_2'] ?>" 
                alt="works's pictures"/>
            <?php } ?>
            </div>
            <div class="text-article2">
                <h2><?php echo ($item['title_article'])?></h2>
                <p><?php echo ($item['content_article1']) ?></p>
                <p><?php echo ($item['content_article2']) ?></p>
                <p><?php echo ($item['content_article3']) ?></p>
            </div>
        </article>
    <?php } ?>           
<?php } ?>
<div id="scroll_to_top"> 
    <a href="#top"><img src="img/top.svg" alt="Back to Top" title="Back to Top" /></a> 
</div>
</section>
