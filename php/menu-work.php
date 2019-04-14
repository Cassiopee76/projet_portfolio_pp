<section class="defilement-work">
    <nav id="nav2">
        <ul class="navigation-container">
            
            <?php
                require './connexion/connexion.php';
                $db = Database::connect();
                $query = $db->query('SELECT * FROM works');
                while($item = $query->fetch()) {  
            ?>

            <li class="bloc">
                <figure>
                    <img class="img-work" src="./img/image-work/<?php echo $item['pics_presentation'] ?> " 
                        alt="Images de mes differents travaux" 
                        onclick="window.location.href='php/articles.php?id=<?php echo $item['id']?>'"/>

                </figure>
                <h5 class="title"><?php echo $item['title_work'] ?></h5>
            </li>

            <?php     
                }
            ?>
            
        </ul>
    </nav>
</section>



    