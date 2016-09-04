<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Аренда спутникового телефона</title>
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
              $AutoPlay: false,
              $SlideDuration: 800,
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
            <li class="main-nav__item  main-nav__item--in  main-nav__item--active">
              <a href="satellite_phones.php">
                <span>Спутниковые телефоны</span>
              </a>
            </li>
            <li class="main-nav__item  main-nav__item--in">
              <a href="#">
                <span>Спутниковые терминалы</span>
              </a>
            </li>
            <li class="main-nav__item  main-nav__item--in">
              <a href="#">
                <span>M2M трекинг</span>
              </a>
            </li>
            <li class="main-nav__item  main-nav__item--in">
              <a href="about_vsat.php">
                <span>Спутниковые VSAT станции</span>
              </a>
            </li>
            <li class="main-nav__item  main-nav__item--in">
              <a href="globalstar_price.php">
                <span>Тарифы</span>
              </a>
            </li>
            <li class="main-nav__item  main-nav__item--in">
              <a href="arenda_sputnikovogo_telefona.php">
                <span>Аренда</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <main>
      <div class="page-main  page-main--in">
        <div class="wrapper">
          <div class="page-main__top">
            <div class="breadcrumbs">
              <a href="/">Главная</a>
              <span>>></span>
              <a>Спутниковые телефоны</a><br>
              <span>>></span>
              <a>Аренда спутникового телефона</a>
            </div>
            <div class="cart">
              <img src="img/icon-cart.png">
            </div>
          </div>
          <div class="catalog">
            <h2 class="h2-title  h2-title--in"><a>АРЕНДА СПУТНИКОВОГО ТЕЛЕФОНА</a></h2>
            <div class="article">
              <p>Аренда спутниковых телефонов системы Глобалстар подойдет для разовых поездок по России и СНГ. В аренду можно взять телефоны следующих моделей Telit SAT 550 или Qualcomm GSP1700.</p>
              <h3 class="article__h3">Стандартная комплектация при аренде спутникового телефона:</h3>
              <ul class="article__complect">
                <li>- Спутниковый телефон</li>
                <li>- Зарядное устройство 220В</li>
                <li>- Защитный кожаный чехол</li>
                <li>- Сим-карта 
              </ul>
              <p>Дополнительные аксессуары, такие как зарядного устройства от прикуривателя автомобиля, дополнительного аккумулятора и т.д. можно арендовать за дополнительную плату.</p>
              <h3 class="article__h3">Как арендовать спутниковый телефон у нас</h3>
              <ol>
                <li>1) Необходимо приехать к нам в офис, если Вы из другого региона РФ мы можем выслать телефон транспортной компанией (арендная плата не взимается на время транспортировки).</li>
                <li>2) Выбираете способ как оплачивать аренду: посуточно или помесячно. Аренда на целый месяц получается выгоднее.</li>
                <li>3) Вноситься депозит за аренду спутникового телефона. (Перед началом аренды оплачивается только депозит). Оплата за трафик, доставку, аренду и т.п. - оплачивается после аренды спутникового телефона.</li>
                <li>4) После возврата с аренды, спутниковый телефон необходимо оставить на проверку и работоспособность нашим специалистам (обычно это занимает не больше 2-х дней).</li>
                <li>5) По окончанию проверки, мы возвращаем депозит. ( Из суммы депозита вычитаются: услуги за аренду спутникового телефона, израсходованные минуты, дополнительные услуги, если такие использовались).</li>
              </ol>
              <div class="article__catalog">
                <div class="article-item">
                  <a href="iridium9575.php">
                    <div class="article__item-img"><img src="img/globalstar-1700.jpg"></div>
                    <h5 class="article__item-title">Аренда спутникового телефона GlobalStar Qualcomm GSP1700</h5>
                    <ul class="article__item-info">
                      <li>Депозит: 35 000 руб.</li>
                      <li>Аренда в день: 300 руб.</li>
                      <li>Аренда в месяц: 6000 руб.</li>
                      <li>Стоимость исходящей минуты: 45 руб.</li>
                    </ul>
                    <div class="article__item-footer">
                      <div class="article__item-price">93 000Р</div>
                      <div class="article__item-cart"><a href="#"><img src="img/incart.png"></a></div>
                    </div>
                  </a>
                </div>
                <div class="article-item">
                  <a href="iridium9575.php">
                    <div class="article__item-img"><img src="img/globalstar-550.jpg"></div>
                    <h5 class="article__item-title">Iridium Extreme 9575</h5>
                    <div class="article__item-info">Выше класс защиты, программируемая кнопка SOS, встроенный GPS приемник</div>
                    <div class="article__item-footer">
                      <div class="article__item-price">93 000Р</div>
                      <div class="article__item-cart"><a href="#"><img src="img/incart.png"></a></div>
                    </div>
                  </a>
                </div>
              </div>
              <h3 class="article__h4">Примечание:</h3>
              <ul class="article__note">
                <li>- День получения и день возврата спутникового телефона входят в срок аренды.</li>
                <li>- Вы можете внести депозит переводом денежных средств на банковскую карту.</li>
              </ul>
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
              <a href="satellite_phones.php">Спутниковые телефоны</a>
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