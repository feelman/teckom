<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Главная</title>
    <link href="css/style.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/jssor.slider-21.1.5.mini.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_SlideoTransitions = [
              [{b:5500,d:3000,o:-1,r:240,e:{r:2}}],
              [{b:-1,d:1,o:-1,c:{x:51.0,t:-51.0}},{b:0,d:1000,o:1,c:{x:-51.0,t:51.0},e:{o:7,c:{x:7,t:7}}}],
              [{b:-1,d:1,o:-1,sX:9,sY:9},{b:1000,d:1000,o:1,sX:-9,sY:-9,e:{sX:2,sY:2}}],
              [{b:-1,d:1,o:-1,r:-180,sX:9,sY:9},{b:2000,d:1000,o:1,r:180,sX:-9,sY:-9,e:{r:2,sX:2,sY:2}}],
              [{b:-1,d:1,o:-1},{b:3000,d:2000,y:180,o:1,e:{y:16}}],
              [{b:-1,d:1,o:-1,r:-150},{b:7500,d:1600,o:1,r:150,e:{r:3}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:9100,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:10000,d:1600,x:-200,o:-1,e:{x:16}}]
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 700,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
  </head>
  <body>
    <div class="top">
      <div class="wrapper">
        <div class="top__tel">8 (495) 748-70-94</div>
        <div class="top__tel">8 (964) 529-44-44</div>
        <div class="top__right">
          <div class="top__email"><a href="mailto:office@tecckom.com">office@tecckom.com</a></div>
          <ul class="socials">
            <li class="social  social__vk"><a href="http://vkontakte.ru/id2582378#/tecckom"><img src="img/icon-vk.png"></a></li>
            <li class="social  social__tw"><a href="https://twitter.com/#!/tecckom"><img src="img/icon-tw.png"></a></li>
            <li class="social  social__yt"><a href="https://www.youtube.com/channel/UC8IYbL4-dso6mO20CgbtagA"><img src="img/icon-yt.png"></a></li>
            <li class="social  social__insta"><a href="https://instagram.com/tecckom/"><img src="img/icon-insta.png"></a></li>
          </ul>
        </div>
      </div>
    </div>
    <header class="page-header">
      <div class="wrapper  wrapper-menu">
        <div class="page-header__top">
          <div class="page-header__logo"><a href="/"><img src="img/logo.png" width="158" height="82"></a></div>
          <h1 class="h1-title">Оборудование и услуги спутниковой связи</h1>
        </div>
        <nav class="main-nav">
          <ul class="main-nav__list">
            <li class="main-nav__item">
              <a href="satellite_phones.html">
                <span>Спутниковые телефоны</span>
                <img src="img/sputnik-tel.jpg">
              </a>
            </li>
            <li class="main-nav__item">
              <a href="#">
                <span>Спутниковые терминалы</span>
                <img src="img/sputnik-term.jpg">
              </a>
            </li>
            <li class="main-nav__item">
              <a href="#">
                <span>M2M трекинг</span>
                <img src="img/m2m.jpg">
              </a>
            </li>
            <li class="main-nav__item">
              <a href="about_vsat.php">
                <span>Спутниковые VSAT станции</span>
                <img src="img/vsat.jpg">
              </a>
            </li>
            <li class="main-nav__item">
              <a href="globalstar_price.php">
                <span>Тарифы</span>
                <img src="img/arenda.jpg">
              </a>
            </li>
            <li class="main-nav__item">
              <a href="arenda_sputnikovogo_telefona.php">
                <span>Аренда</span>
                <img src="img/arenda.jpg">
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
            <div data-p="225.00" style="display: none;">
                <a href="#"><img data-u="image" src="img/banner.jpg" /></a>
            </div>
            <div data-p="225.00" style="display: none;">
                <a href="#"><img data-u="image" src="img/banner.jpg" /></a>
            </div>
            <div data-p="225.00" data-po="80% 55%" style="display: none;">
                <a href="#"><img data-u="image" src="img/banner.jpg" /></a>
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>
    <main>
      <div class="page-main">
        <div class="wrapper">
          <div class="main-left">
            <h2 class="h2-title  h2-title--news"><a href="company_news1.php">Новости</a></h2>
            <div class="news">
              <div class="news__url-all"><a href="company_news1.php">Смотреть все новости</a></div>
              <div class="news__item">
                <div class="news__logo"><img src="img/news-globalstar.png"></div>
                <div class="news__info">Всем купившим спутниковый телефон Qualcomm GSP1700 с подключением тарифного плана "Юбилейный-15" в период с 07 октября 2015 г. по 31 декабря 2015 г. Мы дарим 15 минут на счет.
      Более подробно с тарифами можно ознакомиться <a class="news__info-url" href="#">тут</a></div>
                <div class="news__img"><img src="img/news-tel.png"></div>
              </div>
              <div class="news__item">
                <div class="news__logo2"><img src="img/news-iridium.png"></div>
                <div class="news__info">Предлагаем Вам уникальную возможность обмена Вашей старой спутниковой трубки на новый телефон Iridium!<br>
    Приобретая новую модель Иридиум 9555, Иридиум Extreme 9575 или Иридиум Extreme PTT, вы сдаете нам старую трубку одной из конкурирующих систем, и получаете скидку до $200. <a class="news__info-url-more" href="#">Подробнее</a></div>
              </div>
            </div>
          </div>
          <div class="main-right">
            <div class="rate">
              <h2 class="h2-title"><a href="globalstar_price.php">Тарифы</a></h2>
              <div class="rate__line">
                <div class="rate__img"><a href="globalstar_features.php"><img src="img/tarif-globalstar.jpg"></a></div>
                <div class="rate__img"><a href="inmarsat_bgan.php"><img src="img/tarif-inmarsat.jpg"></a></div>
              </div>
              <div class="rate__line">
                <div class="rate__img"><a href="thuraya_about.php"><img src="img/tarif-thurava.jpg"></a></div>
                <div class="rate__img"><a href="iridium_about.php"><img src="img/tarif-iridium.jpg"></a></div>
              </div>
            </div>
            <div class="urls">
              <h2 class="h2-title"><a href="#">Ссылки</a></h2>
              <div class="urls__img"><img src="img/banner-urls.jpg"></div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer class="page-footer">
      <div class="wrapper">
        <div class="page-footer__block">
          <h3 class="h3-title">Оборудование</h3>
          <ul class="page-footer__list">
            <li class="page-footer__item">
              <a href="satellite_phones.html">Спутниковые телефоны</a>
            </li>
            <li class="page-footer__item">
              <a href="#">Спутниковые терминалы</a>
            </li>
            <li class="page-footer__item">
              <a href="#">М2М Трекинг</a>
            </li>
            <li class="page-footer__item">
              <a href="#">Морское оборудывание</a>
            </li>
            <li class="page-footer__item">
              <a href="about_vsat.php">Стационарные спутниковые терминалы VSAT</a>
            </li>
          </ul>
        </div>
        <div class="page-footer__block">
          <h3 class="h3-title">Услуги</h3>
          <ul class="page-footer__list">
            <li class="page-footer__item">
              <a href="arenda_sputnikovogo_telefona.php">Аренда</a>
            </li>
            <li class="page-footer__item">
              <a href="#">Обмен оборудования</a>
            </li>
            <li class="page-footer__item">
              <a href="#">Доставка</a>
            </li>
          </ul>
        </div>
        <div class="page-footer__block">
          <h3 class="h3-title">Контактная информация</h3>
          <p class="page-footer__tel">8 (495) 748-70-94<br>8 (964) 529-44-44</p>
          <p class="page-footer__info">
            E-mail: <a class="page-footer__info-mail" href="mailto:office@tecckom.com">office@tecckom.com</a><br>
            Адрес офиса: 117545 Москва, Варшавское шоссе 125<br>
            НИИ "АРГОН" офис 7609 (внутренний телефон 164)<br>
            Время работы с 10 до 18. <a class="page-footer__info-map" href="#">Схема проезда.</a>
          </p>
        </div>
      </div>
    </footer>
    <script src="js/script.js"></script>
  </body>
</html>