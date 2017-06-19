<!DOCTYPE html>
<html>
<head>
  <meta charset="windows-1251">
  <title>Новости</title>
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
     <header>
       <div id="logo">
         <a href="/" title="Перейти на главную"><span>Н</span>овости</a>
       </div>
       <div id="menuHead">
          <a href="/about.php">
            <div style="margin-right: 5%">О нас</div></a>
          <a href="/feedback.php">
            <div>Обратная связь</div></a>
       </div>
       <div id="regAuth">
          <A href="/reg.php">Регистрация<a/> <a href="/auth.php">Авторизаця</a>
       </div>
       </head>
     </header>

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

       <div id="rightCol">
         <div class="banner"><img src="/img/banner_1.png" alt="Баннер 1" title="Баннер 1"></div>

         <div class="banner"><img src="/img/banner_2.png" alt="Баннер 2" title="Баннер 2"></div>
       </div>

     </div>

     <footer>
       <div id="social">
         <a href="https://vk.com" title="Группа Вк" target="_blank"><img src="/img/vk.png" alt="Вк" title="Вк"></a>
         <a href="https://facebook.com" title="Группа Facebook" target="_blank"><img src="/img/fb.png" alt="FB" title="Facebook"></a>
       </div>
       <div id="rights">
         Все права защищены &copy; <?=date('Y')?>
       </div>
     </footer>
</body>
</html>
