<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>@yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" href={{ URL::asset('css/style.css') }} />
    <link rel="stylesheet" href={{ URL::asset('css/bootstrap.css') }} />
    <link rel="stylesheet" href={{ URL::asset('css/bootstrap-theme.min.css') }} />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css"/>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet"
          type="text/css"/>


    <script type="text/javascript" src={{ URL::asset('js/jquery-3.2.1.js') }}></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src={{ URL::asset('js/bootstrap.min.js') }}></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
    <script type="text/javascript" src={{ URL::asset('js/moment.js') }}></script>
    <script type="text/javascript" src={{ URL::asset('js/parsley.js') }}></script>
    <script type="text/javascript" src={{ URL::asset('js/jquery.mask.js') }}></script>
    <script type="text/javascript" src={{ URL::asset('js/script.js') }}></script>

</head>
<body>
<div class="main">
    <div class="header">
        <div class="logo">
            <h1><a href="index.html"><span>ПАТ</span> <span id="sp1">"Рівнеобленерго"</span>
                    <small>енергія глобальності</small>
                </a></h1>
        </div>
        <div class="menu_nav">
            <ul>
                <li><a href="{{ URL::asset('/cartridges') }}">Картриджі</a></li>
                <li><a href="{{ URL::asset('/') }}">Обмін </a></li>
                <li><a href="{{ URL::asset('/service') }}">Сервіс</a></li>
                <li><a href="{{ URL::asset('/branches') }}">Підрозділи</a></li>

            </ul>
            <div class="clr"></div>
        </div>
        <div class="clr"></div>
        <div class="hbg"><img src="{{ URL::asset('images/header_images.jpg')}}" width="653" height="271"
                              alt="header images"/>
            <div class="text">
                <h3>ПАТ "Рівнеобленерго"</h3>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="content_bg">@yield('data')
            {{--  <div class="mainbar"> </div>
              <div class="sidebar">

                  <div class="gadget">
                      <h2><span>Основне</span> меню</h2>
                      <div class="clr"></div>
                      <ul class="sb_menu">
                          <li><a href="{{ URL::asset('/cartridges') }}">Картриджі</a></li>
                          <li><a href="{{ URL::asset('/') }}">Обмін</a></li>
                          <li><a href="{{ URL::asset('/service') }}">Сервіс</a></li>
                          <li><a href="{{ URL::asset('/branches') }}">Підрозділис</a></li>
                          <li><a href="http://www.vsei.com.ua">Сайт компанії</a></li>
                          <li><a href="portal.roe.vsei.ua">Внутрішній портал</a></li>

                      </ul>
                  </div>
                  <div class="gadget">
                      <h2><span>Корисні сторінки</span></h2>
                      <div class="clr"></div>
                      <ul class="ex_menu">
                          <li class="active"><a href="http://www.hp.com/" title="Hewlett-Packard">Hewlett-Packard</a>
                              <span>Світовий лідер у виробництві оргтехніки</span></li>
                          <li><a href="http://www.canon.com" title="Canon">Canon</a> <span>Один зі світових лідерів в області створення цифрового обладнання</span>
                          </li>
                          <li><a href="http://www.xerox.com" title="Xerox">Xerox</a> <span>Oдин з світових лідерів в області технологій друку</span>
                          </li>
                          <li><a href="http://www.brother.ru/" title="Brother">Brother</a> <span>Японський виробник побутової техніки</span>
                          </li>
                          <li><a href="http://www.samsung.com" title="Samsung Electronics">Samsung </a> <span>Компанія-виробник електроніки</span>
                          </li>
                          <li><a href="http://www.sharp-world.com/" title="Sharp Global">Sharp </a> <span>Японська корпорація, виробник електроніки</span>
                          </li>
                      </ul>
                  </div>
                  <!--<div class="gadget">
                    <h2 class="grey"><span>Wise Words</span></h2>
                    <div class="clr"></div>
                    <div class="testi">
                      <p><span class="q"><img src="images/quote_1.gif" width="16" height="14" alt="quote" /></span> We can let circumstances rule us, or we can take charge and rule our lives from within. <span class="q"><img src="images/quote_2.gif" width="16" height="14" alt="quote" /></span></p>
                      <p class="title"><strong>Earl Nightingale</strong></p>
                    </div>
                  </div>-->
              </div>

              <div class="clr"></div>--}}
        </div>
    </div>
    <div class="fbg">
        <div class="col c1">
            <h2><span>Галерея зображень</span></h2>
            <a href="#"><img src="{{ URL::asset('images/ch_pic_1.jpg')}} " width="58" height="58" alt="pix"/></a> <a
                    href="#"><img src="{{ URL::asset('images/ch_pic_2.jpg')}} " width="58" height="58" alt="pix"/></a>
            <a href="#"><img src="{{ URL::asset('images/ch_pic_3.jpg')}} " width="58" height="58" alt="pix"/></a> <a
                    href="#"><img src="{{ URL::asset('images/ch_pic_4.jpg')}} " width="58" height="58" alt="pix"/></a>
            <a href="#"><img src="{{ URL::asset('images/ch_pic_5.jpg')}} " width="58" height="58" alt="pix"/></a> <a
                    href="#"><img src="{{ URL::asset('images/ch_pic_6.jpg')}} " width="58" height="58" alt="pix"/></a>
        </div>
        <div class="col c2">
            <h2><span>ВС Енерджі Інтернейшнл Україна</span></h2>
            <p>
                Пріоритетними напрямками діяльності «ВС Енерджи Інтернейшнл Україна» є енергетичний і готельний види
                бізнесу. Підприємства, що керуються компанією, відносяться до найбільших в Україні. Ми прагнемо бути
                лідерами у всіх аспектах своєї діяльності. Основною запорукою наших можливостей і впевненості у своїх
                силах є інтелектуальний і творчий потенціал трудового колективу групи. <a
                        href="http://www.vsei.com.ua/ua/">Більше...</a></p>
        </div>
        <div class="col c3">
            <h2><span>ПАТ «Рівнеобленерго»</span></h2>
            <p>ПАТ «Рівнеобленерго» здійснює передачу та постачання енергії у м.Рівному та Рівненській області.
                Рівненська область спеціалізується на електроенергетиці, хімічній, легкій і харчовій промисловостях,
                дерево- та металообробці, машинобудуванні. Завдяки електричній енергії, що її постачає ПАТ
                «Рівнеобленерго», у регіоні працюють потужні промислові підприємства. <a href="http://www.roe.vsei.ua">Більше...</a>
            </p>
        </div>
        <div class="clr"></div>
    </div>
    <div class="footer">
        <div class="footer_resize">
            <p class="lf"><a href="http://www.roe.vsei.ua">ПАТ «Рівнеобленерго»</a>.</p>
            <p class="rf"><a href="http://www.vsei.com.ua/ua/">ВС Енерджі Інтернейшнл Україна</a></p>
            <div class="clr"></div>
        </div>
    </div>
</div>
</body>
</html>