<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 28/03/2019
 * Time: 12:51
 */
function Head($titre = "")
{
    ?>
    <head >
    <!--Required meta tags-->
    <meta charset = "utf-8" >
    <meta name = "viewport" content = "width=device-width, initial-scale=1, shrink-to-fit=no" >

    <!--Bootstrap CSS-->
    <link rel = "stylesheet" href = "<?=URL_HOME;?>css/bootstrap.min.css">

    <title ><?=$titre?></title >
  </head >

<?php
}

function js(){
    ?>
<script src="<?=URL_HOME?>js/jquery.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="<?=URL_HOME?>js/bootstrap.min.js"> </script>
<?php
}