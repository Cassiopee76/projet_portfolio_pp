
<!----- BACKGROUND differents selon les pages ----->

<?php
        $fond = 'null';
        if (isset($_GET['page']) && $_GET['page']==0) { 
            $fond = 'null';
        }   
        if (isset($_GET['page']) && $_GET['page']==1)  {
            $fond = './img/background/abstract-background.jpg';
        }
        if (isset($_GET['page']) && $_GET['page']==3)  {
            $fond = './img/background/abstract-background.jpg';
        }
        if (isset($_GET['page']) && $_GET['page']==4)  {
            $fond = 'null';
        } 
        
        if (isset($_GET['id']) && $_GET['id']<=9) {
            $fond = './img/background/bg-blue.jpg';
        }
        
            
?>

<style>
        body {
            background: url('<?php echo $fond ?>') no-repeat center fixed;
            -webkit-background-size: cover; /* Pour les anciens chrome et safari */
            background-size: cover;
        }
    </style>
