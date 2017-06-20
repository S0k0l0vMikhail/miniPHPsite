<!DOCTYPE html>
<html>
<head>
  <?php
  $title = "�������";
   require_once "blocks/head.php";
  ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
  <?php require_once "blocks/header.php" ?>
     <div id="wrapper">
       <div id="leftCol">
         <div id="bigArticle">
           <img src="/img/article_1.jpg" alt="������ 1" title="������ 1">
           <h2>������ 1</h2>
             <p>����� 1</p>
             <a href="/article.php"></a>
              <div class="more">�����</div>
         </div>
         <div class="clear"></br></div>
         <div class="article">
           <img src="/img/article_2.jpg" alt="������ 2" title="������ 2">
           <h2>������ 2</h2>
             <p>����� 2</p>
             <a href="/article.php"></a>
              <div class="more">�����</div>
         </div>
         <div class="article">
           <img src="/img/article_3.jpg" alt="������ 3" title="������ 3">
           <h2>������ 3</h2>
             <p>����� 3</p>
             <a href="/article.php"></a>
              <div class="more">�����</div>
         </div>
       </div>
       <?php require_once "blocks/rightCol.php" ?>
     </div>
<?php require_once "blocks/footer.php" ?>
</body>
</html>
