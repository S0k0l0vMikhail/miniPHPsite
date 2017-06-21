<!DOCTYPE html>
<html>
<head>
  <?php
   require_once "/functions/functions.php";
   $news = getNews (1, $_GET["id"]);
   $title = $news["title"];
   require_once "blocks/head.php";
  ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
  <?php require_once "blocks/header.php" ?>
     <div id="wrapper">
       <div id="leftCol">
         <?php
                echo '<div id="bigArticle"><img src="/img/article/'.$news["id"].'.jpg" alt="Статья '.$news["id"].'" title="Статья '.$news["id"].'">
              <h2>'.$news["title"].'</h2>
                <p>'.$news["full_text"].'</p>
            </div>';
            ?>
       </div>
       <?php require_once "blocks/rightCol.php" ?>
     </div>
<?php require_once "blocks/footer.php" ?>
</body>
</html>
