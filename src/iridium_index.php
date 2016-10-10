<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Спутниковый телефон Iridium 9555</title>
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
              <a href="satellite_phones.php">Спутниковые телефоны</a><br>
              <span>>></span>
              <a href="iridium_about.php">Спутниковые телефоны Iridium</a>
              <span>>></span>
              <a>Iridium 9555</a>
            </div>
            <div class="cart">
              <img src="img/icon-cart.png">
            </div>
          </div>
          <div class="page-item">
            <div class="page-item__top">
              <div class="page-item__top-left">
                <div class="page-item__image-big">
                  <img class="item-img-big" src="img/iridium9555.jpg">
                </div>
                <div class="page-item__image-small">
                  <div class="page-item__image-small-item  page-item__image-small-item--1">   <img class="item-img-small1" src="img/iridium9555.jpg">
                  </div>
                  <div class="page-item__image-small-item  page-item__image-small-item--2">   <img class="item-img-small2" src="img/iridium9555-2.jpg">
                  </div>
                  <div class="page-item__image-small-item  page-item__image-small-item--3">   <img class="item-img-small3" src="img/iridium9555-3.jpg">
                  </div>
                </div>
              </div>
              <div class="page-item__top-right">
                <h3 class="page-item__title-category">Спутниковые телефоны Iridium</h3>
                <h2 class="page-item__title">Iridium 9555</h2>
                <p class="page-item__description">Компактный современный дизайн. Интуитивный пользовательский интерфейс. Простое понятное меню. Корпус обладает повышенной защитой от пыли, влаги, износа и ударов.</p>
                <div class="page-item__buy">
                  <div class="page-item__buy-price">71 000Р</div>
                  <div class="page-item__buy-cart"><a href="#"><img src="img/incart-item.png"></a></div>
                </div>
                <span class="page-item__setting">Настройка и сервис по запросу</span>
                <span class="page-item__setting2">Мы готовы взять на себя установку, настройку</span>
                <div class="page-item__footer">
                  <a href="#" class="page-item__footer-btn">Перезвонить вам?</a>
                  <a href="#" class="page-item__footer-btn">Консультация on-line</a>
                </div>
              </div>
            </div>
            <div class="page-item__menu">
              <ul class="page-item__menu-list">
                <li>
                  <a class="page-item__menu-item  page-item__menu-item--active" href="#">Описание</a>
                </li>
                <li>
                  <a class="page-item__menu-item" href="#">Характеристики</a>
                </li>
                <li>
                  <a class="page-item__menu-item" href="#">Комплектация</a>
                </li>
                <li>
                  <a class="page-item__menu-item" href="#">Инструкции</a>
                </li>
                <li>
                  <a class="page-item__menu-item" href="#">Аксессуары</a>
                </li>
                <li>
                  <a class="page-item__menu-item" href="#">Тарифы</a>
                </li>
                <li>
                  <a class="page-item__menu-item" href="#">Отзывы</a>
                </li>
              </ul>
            </div>
            <div class="page-item__info">
              <p><b>Иридиум 9555.</b> Компактный современный дизайн. Интуитивный пользовательский интерфейс. Простое понятное меню. Корпус обладает повышенной защитой от пыли, влаги, износа и ударов. Возможность выбора из 21 языка, в том числе русского. В сравнении с 9505А, улучшены, возможности SMS и E-mail, более яркий экран. Громкая связь. Порт Mini-USB. Возможность подключения наушников и гарнитуры hands-free. Автоматическая блокировка телефона и парольная защита SIM-карты (PIN).</p>
              <ul>
                <li>Габариты: 143 мм Х 55 мм Х 30 мм</li>
                <li>Вес 266 г</li>
                <li>громкая связь</li>
                <li>быстрое соединение с голосовой почтой Iridium.</li>
                <li>переадресация вызовов</li>
                <li>фиксированный набор номера</li>
                <li>автоматический набор международного кода страны (00 или +)</li>
                <li>почтовый ящик для голосовых, цифровых и текстовых сообщений</li>
                <li>SMS-чат и возможность передавать короткие текстовые сообщения по электронной почте.</li>
                <li>8 мелодий звонка</li>
                <li>3 различных тона для клавиш</li>
                <li>блокировка клавиатуры</li>
                <li>индикация не принятых вызовов</li>
                <li>регулировка громкости</li>
                <li>установка ограничений на диапазон набираемых номеров</li>
                <li>счетчик длительности последнего разговора</li>
                <li>счетчик длительности всех совершенных разговоров</li>
                <li>Память на 100 текстовых и цифровых записей</li>
                <li>Каждая ячейка памяти позволяет хранить несколько телефонных номеров, адреса электронной почты и примечания</li>
                <li>Память пропущенных, входящих и исходящих звонков</li>
                <li>Дополнительный объем памяти на SIM-карте</li>
                <li>подсвечиваемый ЖК дисплей на 200 символов</li>
                <li>индикация громкости, мощности сигнала и заряда батареи</li>
                <li>влагозащищенная клавиатура с подсветкой</li>
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