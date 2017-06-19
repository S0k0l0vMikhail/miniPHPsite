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
