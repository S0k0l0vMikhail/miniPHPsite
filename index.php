<!DOCTYPE html>
<html>
<head>
  <meta charset="windows-1251">
  <title>�������</title>
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
     <header>
       <div id="logo">
         <a href="/" title="������� �� �������"><span>�</span>������</a>
       </div>
       <div id="menuHead">
          <a href="/about.php">
            <div style="margin-right: 5%">� ���</div></a>
          <a href="/feedback.php">
            <div>�������� �����</div></a>
       </div>
       <div id="regAuth">
          <A href="/reg.php">�����������<a/> <a href="/auth.php">����������</a>
       </div>
       </head>
     </header>

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

       <div id="rightCol">
         <div class="banner"><img src="/img/banner_1.png" alt="������ 1" title="������ 1"></div>

         <div class="banner"><img src="/img/banner_2.png" alt="������ 2" title="������ 2"></div>
       </div>

     </div>

     <footer>
       <div id="social">
         <a href="https://vk.com" title="������ ��" target="_blank"><img src="/img/vk.png" alt="��" title="��"></a>
         <a href="https://facebook.com" title="������ Facebook" target="_blank"><img src="/img/fb.png" alt="FB" title="Facebook"></a>
       </div>
       <div id="rights">
         ��� ����� �������� &copy; <?=date('Y')?>
       </div>
     </footer>
</body>
</html>
