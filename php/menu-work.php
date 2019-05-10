
<section class="defilement-work">
    <nav id="nav2">
        <ul class="navigation-container">
            
            <?php
                require './connexion/connexion.php';
                $db = Database::connect();
                $query = $db->query('SELECT * FROM works');
                while($item = $query->fetch()) {  
            ?>
            <?php if ($item['pics_presentation'] !== null ) { ?>
            <li class="bloc">
                <figure>
                <a href='index.php?page=5&amp;id=<?php echo $item['id']?>'>
                    <img class="img-work img-fluid" src="./img/image-work/<?php echo $item['pics_presentation'] ?> " 
                    alt="Images de mes differents travaux"/>
                </a>

                </figure>
                <h5 class="title"><?php echo $item['title_work'] ?></h5>
            </li>
            <?php } ?>
            <?php     
                }
            ?>
            
        </ul>
    </nav>
</section>



    