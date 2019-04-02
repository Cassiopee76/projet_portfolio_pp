<!DOCTYPE html>
<html lang="fr">

<!-------- HEAD -------->
    <?php
        include './php/head.php';
    ?>
<!-------- BODY -------->
<body>
    <section id="section1">

    <!-- Menu-Burger -->
        <?php
            include "./php/menu-burger.php";

        ?>
        
    <!-- les Menus -->
    
        <?php
            include "./php/menu.php";
        ?>

    <!-- condition des menus -->
     <?php
        if (isset($_GET['page']) && $_GET['page']==0) { 
            include './php/menu2.php';
        }   
        else if (isset($_GET['page']) && $_GET['page']==1)  {
            include './php/portfolio.php';
        }
        else if (isset($_GET['page']) && $_GET['page']==3)  {
            include './php/about-me.php';
        }
        else if (isset($_GET['page']) && $_GET['page']==4)  {
            include './php/contact.php';
        } 
        else {
            include './php/menu2.php';
        }
    ?>
    <!-------- Footer -------->
    <?php
        include "./php/footer.php";
    ?>
    </section>

    <article id="articles-show">
        <div id="cross">X</div>
    </article>



<!-------- les scripts -------->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="./js/main.js"></script>
</body>
</html>