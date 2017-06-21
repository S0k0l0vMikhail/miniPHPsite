<!DOCTYPE html>
<html>
<head>
  <?php
   require_once "/functions/functions.php";
   $title = "Новости";
   require_once "blocks/head.php";
   $news = getNews (3, $id);
  ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
  <?php require_once "blocks/header.php" ?>
     <div id="wrapper">
       <div id="leftCol">
         <?php
            for ($i = 0; $i < count($news); $i++){
              if($i == 0)
                echo "<div id=\"bigArticle\">";
              else
                echo "<div class=\"article\">";
              echo '<img src="/img/article/'.$news[$i]["id"].'.jpg" alt="Статья '.$news[$i]["id"].'" title="Статья '.$news[$i]["id"].'">
              <h2>Статья '.$news[$i]["title"].'</h2>
                <p>Текст '.$news[$i]["intro_text"].'</p>
                <a href="/article.php?id='.$news[$i]["id"].'">
                 <div class="more">Далее</div>
                 </a>
            </div>';
            if ($i == 0)
              echo "<div class=\"clear\"><br></div>";
            }
            ?>
<!--
         <div id="bigArticle">
           <img src="/img/article_1.jpg" alt="Статья 1" title="Статья 1">
           <h2>Статья 1</h2>
             <p>Текст 1</p>
             <a href="/article.php">
              <div class="more">Далее</div>
              </a>
         </div>
         <div class="clear"></br></div>
         <div class="article">
           <img src="/img/article_2.jpg" alt="Статья 2" title="Статья 2">
           <h2>Статья 2</h2>
             <p>Текст 2</p>
             <a href="/article.php">
              <div class="more">Далее</div>
              </a>
         </div>
         <div class="article">
           <img src="/img/article_3.jpg" alt="Статья 3" title="Статья 3">
           <h2>Статья 3</h2>
             <p>Текст 3</p>
             <a href="/article.php">
              <div class="more">Далее</div>
              </a>
         </div>
-->
       </div>
       <?php require_once "blocks/rightCol.php" ?>
     </div>
<?php require_once "blocks/footer.php" ?>
</body>
</html>
