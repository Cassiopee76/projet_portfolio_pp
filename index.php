<!DOCTYPE html>
<html lang="fr">

<!-------- HEAD -------->
    <?php
        include './php/head.php';
    ?>
<!-------- BODY -------->
<body>
        <!-- BACKGROUND SUR LES PAGES -->
        <?php
            include "./php/background.php";
        ?>

        <!-- LOGO -->
    <section id="section-home">
    <img src="./img/logo_PatriciaWebdesign-V4-144x117-blanc.png" class="show-logo-white" alt="logo portfolio Patricia Perroudon Webdesigner" />
    

    <!-------- Menu-Burger -------->
        <?php
            include "./php/menu-burger.php";
        ?>
        
    <!-------- primary navigation -------->
    
        <?php
            include "./php/menu.php";
        ?>

    <!-------- condition du menus -------->
     <?php

        if (isset($_GET['page']) && $_GET['page']==0) { 
            include './php/home.php';
        }   
        else if (isset($_GET['page']) && $_GET['page']==1)  {
            include './php/about-me.php';
        }
        else if (isset($_GET['page']) && $_GET['page']==3)  {
            include './php/menu-work.php';  
        }
        else if (isset($_GET['page']) && $_GET['page']==4)  {
            include './php/contact.php';
        } 
        else if (isset($_GET['page']) && $_GET['page']==5) {
            if (isset($_GET['id']) && $_GET['id']<=9) {
                include './php/articles.php';
            }
            else {
                include './php/menu-work.php';
            }
        }
        else {
            include './php/home.php';
        }
    ?>

    
    <!-------- Footer --------> 
    <?php
        if (isset($_GET['page']) && $_GET['page']!=4) { 
        include './php/footer.php';
        }
    ?>
    </section>

    



<!-------- les scripts -------->
<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous">
</script>

<script 
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" 
    crossorigin="anonymous">
</script>

<script 
    src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
    crossorigin="anonymous">
</script>

<script src="./js/main.js"></script>

</body>
</html>