<nav id="nav2">
    <ul class="navigation-container">
        <li class="bloc" >
            <h6 class="title">Espace CE</h6>
        </li>
        <li class="bloc" >
            <a class="menu" href="#" ></a>
        </li>
        <li class="bloc" >
            <a class="menu" href="#" ></a>
        </li>
        <li class="bloc" >
            <a class="menu" href="#" ></a>
        </li>
        <li class="bloc" >
            <a class="menu" href="#" ></a>
        </li>
    </ul>
</nav>

<?php
        require './connexion/connexion.php';
        $db = Database::connect();
        $query = $db->query('SELECT * FROM works');
        while($item = $query->fetch()) {  ?>

        <h1><?php echo $item['title_work'] ?></h1>

        <?php     
        }
        ?>