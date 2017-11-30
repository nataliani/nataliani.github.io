<!DOCTYPE html>
<html lang="ru">
  <head>
  	<meta charset="UTF-8">
  	<title>Резюме</title>
	<link rel="stylesheet" type="text/css" href="/ovaral.css">
    <link rel="icon" type="image/x-icon" href="/image/icon.ico" />
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/jquery.maskedinput.min.js"></script>
    <script src="/js/slider.js"></script>
    <script src="/js/menu.js"></script>
    <script src="/js/overal.js"></script>
  </head>
  <body>
  	<div id="header">
        <div id="menuTop">
            <a href="https://vk.com/id84725210" target="_blank" title="VK" id="vk" class="left">.</a>
            <a href="#phone"title="Контакты" class="left"  title="Контакты для связи" id="contacts">.</a>
            <a href="/../index.php" title="Резюме">Резюме</a>
            <a href="/blog/blog.php" title="Мои мысли, идеи, познания">Блог</a>
            <a href="#autentification" title="Вход с правами администратора">Войти</a>
        </div>
        <div class="lightBox" id="phone">
            <div class="box">
                <a href="#" class="close"></a>
                <h1>Контакты</h1>
                <hr>
                <p> 
                    <br> <a href="tel:+79144064313">+79144064313</a>; 
                    <br> <a href="tel:+79244011379">+79244011379</a>;
                    <br> natka.markova.1995@mail.ru;
                    <br> <a href="https://github.com/nataliani/summary.git" target="_blank" title="gitHub" id="gitHub">aккаунт на gitHub. </a>
                </p>
            </div>
        </div>
        <div class="lightBox" id="autentification">
            <form  id="enter" class="box">
                <a href="#" class="close"></a>
                <h1>Вход в систему</h1>
                <input placeholder="Логин" id="login" type="text" required="">
                <input placeholder="Пароль" id="password" type="password" required="">
                <a id="out" class="button">Войти</a>
            </form>
        </div>
		<div id="slider">
                <div id="slidewrapper">
                    <img src="/image/slider/page1.png" alt="Приветствую вас на своём ресурсе" class="slide">
                    <img src="/image/slider/page2.png" alt="Здесь вы можете познакомится с моими творческими начинаниями" class="slide">
                    <img src="/image/slider/page3.png" alt="И ознакомится с дебрями моего погружения в основы WEB-программирования" class="slide">
                </div>
                <div id="navBth">
                    <input type="radio" name="navigation" class="navigation" id="1">
                    <input type="radio" name="navigation" class="navigation" id="2">
                    <input type="radio" name="navigation" class="navigation" id="3"> 
                </div>
        </div>
	</div>
    <div id="conteiner">
