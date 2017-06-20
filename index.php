<!DOCTYPE html>
<html>
<head>
  <?php
  $title = "Новости";
   require_once "blocks/head.php";
  ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
  <?php require_once "blocks/header.php" ?>
     <div id="wrapper">
       <div id="leftCol">
         <div id="bigArticle">
           <img src="/img/article_1.jpg" alt="Статья 1" title="Статья 1">
           <h2>Статья 1</h2>
             <p>Текст 1</p>
             <a href="/article.php"></a>
              <div class="more">Далее</div>
         </div>
         <div class="clear"></br></div>
         <div class="article">
           <img src="/img/article_2.jpg" alt="Статья 2" title="Статья 2">
           <h2>Статья 2</h2>
             <p>Текст 2</p>
             <a href="/article.php"></a>
              <div class="more">Далее</div>
         </div>
         <div class="article">
           <img src="/img/article_3.jpg" alt="Статья 3" title="Статья 3">
           <h2>Статья 3</h2>
             <p>Текст 3</p>
             <a href="/article.php"></a>
              <div class="more">Далее</div>
         </div>
       </div>
       <?php require_once "blocks/rightCol.php" ?>
     </div>
<?php require_once "blocks/footer.php" ?>
</body>
</html>
