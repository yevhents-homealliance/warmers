<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/adaptive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Грілки — тепло 6–10 годин</title>
    <meta name="description" content="Термогрілки DROPSTORM — це надійне джерело тепла до 10 годин. Ідеально підходять для прогулянок, роботи на холоді, подорожей та відпочинку. Замовляйте зараз!">
</head>
<body>
    <div class="glass" id="glass">
        <div class="modal" id="contacts-modal">
            <div class="modal__content">
                <button class="modal__close" onclick="close__modal()">&times;</button>
                <h2>Контакти</h2>
                <form action="#" method="post" class="modal__form">
                    <input type="text" class="modal__input" placeholder="Ваше ім'я">
                    <input type="tel" class="modal__input" placeholder="Ваш телефон">
                    <button class="modal__submit">
                        Відправити
                    </button>
                </form> 
                <p class="modal__text">
                    або зв'яжіться з нами
                </p>
                <div class="contacts-list">
                    <a href="https://t.me/drpstrm" class="contact-item tg">
                        <img src="img/telegram.png" alt="">
                        Telegram
                    </a>
                    <a href="https://www.instagram.com/drpstrm/" class="contact-item ig">
                        <img src="img/instagram.png" alt="">
                        Instagram
                    </a>
                    <a href="https://www.tiktok.com/@drpstrm" class="contact-item tt">
                        <img src="img/tiktok.png" alt="">
                        TikTok
                    </a>
                </div>
            </div>
        </div>
    </div>
    <header class="header">
        <div class="container">
            <div class="header__container">
                <a href="/index.html" class="montserrat__logo">
                    <img class="header__logo-img" src="img/logo.png" alt="">
                    DROPSTORM
                </a>
                <div class="header__box">
                    <a href="#product" class="header__link">
                        товари
                    </a>
                    <a href="javascript:void(0)" class="header__link" id="contacts" onclick="open__modal()">
                        контакти
                    </a>
                    <a href="#slider" class="header__link">
                        відгуки
                    </a>
                    <a href="#faq" class="header__link">
                        FAQ
                    </a>
                    <a href="#order" class="last-header__link">
                        замовити
                    </a>
                    
                </div>
                <button class="burger" id="burgerBtn">
                    <span></span><span></span><span></span>
                </button>
                
                <div class="mobile-menu" id="mobileMenu">
                    <div class="mobile-menu__topbox">
                        <a href="/" class="montserrat__logo burger__logo">
                            <img class="header__logo-img " src="img/logo.png" alt="">
                            DROPSTORM
                        </a>
                        <a id="mobile-close" class="mobile-close" href="javascript:void(0)">
                            <img class="mobile__close-icon" src="img/close.png" alt="">
                        </a>
                    </div>
                    <a href="#product" id="mobile__product">товари</a>
                    <a href="javascript:void(0)" id="contacts" onclick="open__modal()">контакти</a>
                    <a href="#slider" id="mobile__slider">відгуки</a>
                    <a href="#faq" id="mobile__faq">FAQ</a>
                    <a href="#order" id="mobile__order">замовити</a>
                </div>
            </div>
            <div class="header__content">
                <div class="header__text-box">
                    <p class="header__text">
                        ГАРАНТОВАНЕ ТЕПЛО ДО 10 ГОДИН
                    </p>
                    <h1 class="header__title">
                        Надійні <span class="underline">термогрілки</span> для зими — миттєве тепло на цілий день
                    </h1>
                    <p class="header__description">
                        Наші термогрілки активуються за секунди та забезпечують стабільне тепло протягом усього дня. Ідеально для прогулянок, роботи на холоді, подорожей та відпочинку.
                    </p>
                    <div class="header__button-box">
                        <a href="javascript:void(0)" id="contacts2" onclick="open__modal()" class="header__button">
                            замовити зараз
                        </a>
                    </div>
                </div>
                <div class="header__image-box">
                    <img src="img/header.png" alt="header-image" class="header__image slide-right">
                </div>
            </div>
        </div>
    </header>




    <a href="#order" class="order-btn" id="orderBtn">
        <img class="order-btn__icon" src="img/order.svg" alt="">
    </a>
    <div id="order-popup" class="order-popup" aria-live="polite" role="status">
        <p></p>
    </div>




    
    <section class="advantages">
        <div class="container">
            <h2 class="advantages__title">
                Чому обирають наші термогрілки?
            </h2>
            <div class="advantages__box">
                <div class="advantages__item">
                    <img src="img/thermostat.svg" alt="" class="advantages__icon">
                    <h3 class="advantages__subtitle">
                        Тепло до 8-10 годин
                    </h3>
                    <p class="advantages__description">
                        Наші грілки забезпечують стабільне тепло до 8 годин, ідеально підходять для тривалих прогулянок.
                    </p>
                </div>
                <div class="advantages__item">
                    <img src="img/list.svg" alt="" class="advantages__icon">
                    <h3 class="advantages__subtitle">
                        Легкі у використанні
                    </h3>
                    <p class="advantages__description">
                        Просто розірвіть упаковку, струсніть грілку, і вона миттєво почне нагріватися, забезпечуючи комфорт у будь-яких умовах.
                    </p>
                </div>
                <div class="advantages__item">
                    <img src="img/recycling.svg" alt="" class="advantages__icon">
                    <h3 class="advantages__subtitle">
                        Безпечні та екологічні
                    </h3>
                    <p class="advantages__description">
                        Наші грілки виготовлені з безпечних матеріалів, не містять шкідливих речовин і є екологічно чистими.
                    </p>
                </div>
                <div class="advantages__item">
                    <img src="img/battery.svg" alt="" class="advantages__icon">
                    <h3 class="advantages__subtitle">
                        Повністю автономні
                    </h3>
                    <p class="advantages__description">
                        Не потребують батарейок чи електрики, що робить їх ідеальними для використання в будь-яких умовах.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="product" id="product">
        <div class="container">
        <h2 class="product__title">
            Наші товари
        </h2>
        <div class="product__item">
            <div class="product__item-content">
                <h6 class="product__item-title title">
                    <span class="product__name">Hand Warmers</span> - грілка для рук
                </h6>
                <p class="product__titleparagraph">
                    Hand Warmers — це портативні хімічні грілки, створені для того, щоб зігрівати руки в холодну погоду.
                </p> 
                <h6 class="product__title-pseudotitle title">Максимальне тепло для рук до 8 годин</h6>
                <p class="product__paragraph">
                    Грілки рівномірно виділяють комфортне тепло, яке спрямовано саме на зігрівання долонь. Вони ідеально поміщаються у кишені або рукавичках, забезпечуючи приємний локальний обігрів.
                </p>
            </div>
            <div class="product__item-box product__item-box1">
                <img src="products/tw1.jpeg" class="product__item-img product__img1 slide-right" alt="">
            </div>
        </div>
        <div class="product__item reverse">
            <div class="product__item-box product__item-box2">
                <img src="products/tw3.jpeg" alt="" class="product__item-img product__img2 slide-left">
            </div>
            <div class="product__item-content">
                <h6 class="product__item-title title">
                    <span class="product__name">Warmer Patch</span> - грілка для тіла
                </h6>
                <p class="product__titleparagraph">
                    Warmer Patch — це портативна грілка для тіла, яка швидко нагрівається та забезпечує тривале, приємне тепло.  
                </p>
                <p class="product__paragraph">
                    Вона ідеально підходить для прогрівання спини, живота, шиї, попереку чи інших зон, яким потрібен локальний комфорт.
                </p>
                <p class="product__paragraph">
                    Warmer Patch легко кріпиться на одяг або тіло, не заважає рухам та створює тепло протягом 10 годин.
                </p>
            </div>
        </div>
        <div class="product__item">
            <div class="product__item-content">
                <h6 class="product__item-title title">
                    <span class="product__name">Toe Warmers</span>- грілка для взуття 
                </h6>
                <p class="product__titleparagraph">
                    Toe Warmers — це компактні грілки для взуття, створені для швидкого та тривалого зігрівання пальців ніг у холодну погоду.    
                </p> 
                <p class="product__paragraph">
                    Toe Warmers легко розміщуються всередині взуття, не заважають ходьбі та дарують м’яке, стабільне тепло протягом кількох годин. 
                </p>
            </div>
            <div class="product__item-box product__item-box3">
                <img src="products/tw2.jpeg" class="product__item-img product__img3 slide-right" alt="">
            </div>
        </div>
        </div>
    </section>
    <section class="slider" id="slider">
        <div class="container">

            <div class="slider__block">
                <div class="slider__text-box">
                    <p class="slider__description">
                        ВІДГУКИ КЛІЄНТІВ
                    </p>
                    <h2 class="slider__title">
                        Що говорять наші клієнти?
                    </h2>
                    <div class="dots" aria-hidden="false"></div>
                </div>

                <div class="slider-wrapper" aria-roledescription="carousel">
                    <div class="viewport">
                        <div class="stack">

                            <div class="slide" data-index="0">
                                <div class="card">
                                <p style="margin:0 0 12px;color:#4b5666;line-height:1.55;font-size:14px;">
                                    Дуже крута річ в осінньо-зимових походах. Невеличкий лайфхак: приклейте на зовнішню частину шкарпетки (над пальцями) і можете взувати навіть трішки холодне чи намокше взуття... Рекомендую.
                                </p>
                                <h4 style="margin:0 0 6px;font-size:16px;color:#1f2b3a;font-weight:600;">Олексій Фищук</h4>
                                <div style="color:#8b97a6;font-size:13px;">
                                    <p style="margin:0 0 12px;color:#4b5666;line-height:1.55;font-size:14px;">09.10.2025 в 18:25</p>
                                </div>
                                </div>
                            </div>






                            <div class="slide" data-index="1">
                                <div class="card">
                                <p style="margin:0 0 12px;color:#4b5666;line-height:1.55;font-size:14px;">
                                    Рекомендую. Швидко відправлено. Дуже гарно запаковано. Приємна ціна. Якісні грілки
                                </p>
                                <h4 style="margin:0 0 6px;font-size:16px;color:#1f2b3a;font-weight:600;">Скляр Тетяна Миколаївна</h4>
                                <div style="color:#8b97a6;font-size:13px;">
                                    <p style="margin:0 0 12px;color:#4b5666;line-height:1.55;font-size:14px;">28.10.2025 в 17:42</p>
                                </div>
                                </div>
                            </div>


                            <div class="slide" data-index="1">
                                <div class="card">
                                <p style="margin:0 0 12px;color:#4b5666;line-height:1.55;font-size:14px;">
                                    Брав з собою в похід в карпати, декілька днів під дощем. В день підкладав зверху на шкарпетки у взуття, а вночі сушив ними взуття. Це звичайно не електросушка, але в наметі в горах кращого не придумати. Ще й ціна дуже хороша.
                                </p>
                                <h4 style="margin:0 0 6px;font-size:16px;color:#1f2b3a;font-weight:600;">Андрій С.</h4>
                                <div style="color:#8b97a6;font-size:13px;">
                                    <p style="margin:0 0 12px;color:#4b5666;line-height:1.55;font-size:14px;">11.10.2025 в 15:08</p>
                                </div>
                                </div>
                            </div>





                            <div class="slide" data-index="2">
                                <div class="card">
                                <p style="margin:0 0 12px;color:#4b5666;line-height:1.55;font-size:14px;">
                                    Замовляв для друга на фронт, чудові грілки, добре нагріваються і довго тримають температуру.  Окреме дякую за швидку відправку 👍
                                </p>
                                <h4 style="margin:0 0 6px;font-size:16px;color:#1f2b3a;font-weight:600;">Василь Петренко</h4>
                                <div style="color:#8b97a6;font-size:13px;">
                                    <p style="margin:0 0 12px;color:#4b5666;line-height:1.55;font-size:14px;">27.02.2025 в 14:49</p>
                                </div>
                                </div>
                            </div>


                            <div class="slide" data-index="2">
                                <div class="card">
                                <p style="margin:0 0 12px;color:#4b5666;line-height:1.55;font-size:14px;">
                                    Рятівник останнього місяця зими, бо морози були сильні.  Зручна у використанні і дійсно тривало тримає тепло
                                </p>
                                <h4 style="margin:0 0 6px;font-size:16px;color:#1f2b3a;font-weight:600;">Марія Шевченко</h4>
                                <div style="color:#8b97a6;font-size:13px;">
                                    <p style="margin:0 0 12px;color:#4b5666;line-height:1.55;font-size:14px;">27.02.2025 в 14:47</p>
                                </div>
                                </div>
                            </div>

                            <div class="slide" data-index="2">
                                <div class="card">
                                <p style="margin:0 0 12px;color:#4b5666;line-height:1.55;font-size:14px;">
                                    Замовляли з побратимами та і волонтери передавали ваші грілки, гарно відпрацьовують своїх 7-8 годин, гріють добре, приємно що українське виробництво
                                </p>
                                <h4 style="margin:0 0 6px;font-size:16px;color:#1f2b3a;font-weight:600;">Олег Петровський</h4>
                                <div style="color:#8b97a6;font-size:13px;">
                                    <p style="margin:0 0 12px;color:#4b5666;line-height:1.55;font-size:14px;">26.02.2025 в 14:39</p></div>
                                </div>
                            </div>




                        </div> 
                    </div>
                    <div class="controls" aria-hidden="true">
                        <button id="upBtn" title="Prev">
                            <img src="img/prev.png" alt="">
                        </button>
                        <button id="downBtn" title="Next">
                            <img src="img/next.png" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="order" id="order">
        <div class="container">
            <div class="order__block">
                <h2 class="order__title">
                    Готові замовити термогрілки вже сьогодні?
                </h2>
                <h3 class="order__subtitle">
                    Замов ще 200 шт щоб купити по ціні 15.99 грн за штуку
                </h3>
                <div class="order__form-block">
                    <form id="leadForm" class="order__form" action="info.php?subid=<?=$_GET['clickid'] ?? $_GET['subid'] ?? ''?>" method="post">
                        <div class="order__form-box">
                            <div class="order__form-box-inner">
                                <p class="order__form-text">
                                    Грілка для рук
                                </p>
                                <div class="order__form-inputbox">
                                    <span class="order__form-remove" id="remove1" onclick="remove_handwarmer()">-</span>
                                    <input class="order__form-input" type="number" id="count__handwarmer" value="0" name="handwarmer__count">
                                    <span class="order__form-add" onclick="add_handwarmer()">+</span>
                                </div>
                            </div>
                            <div class="order__form-box-inner">
                                <p class="order__form-text">
                                    Грілка для ніг
                                </p>
                                <div class="order__form-inputbox">
                                    <span class="order__form-remove" id="remove2" onclick="remove_toewarmer()">-</span>
                                    <input class="order__form-input" type="number" id="count__toewarmer" value="0" name="toewarmer__count">
                                    <span class="order__form-add" id="add2" onclick="add_toewarmer()">+</span>
                                </div>
                            </div>
                            <div class="order__form-box-inner">
                                <p class="order__form-text">
                                    Грілка для тіла
                                </p>
                                <div class="order__form-inputbox">
                                    <span class="order__form-remove" id="remove3" onclick="remove_bodywarmer()">-</span>
                                    <input class="order__form-input" type="number" id="count__bodywarmer" value="0" name="bodywarmer__count">
                                    <span class="order__form-add" id="add3" onclick="add_bodywarmer()">+</span>
                                </div>
                            </div>

                            <div class="order__form-box-inner order__form-cost">
                                <input type="hidden" id="total_price" name="total_price" value="0">
                                <input type="hidden" id="clickid" name="clickid" value="<?php echo $_GET['clickid'] ?? '';?>">
                                <p class="order__form-cost-text" id="totalCost">
                                </p>
                            </div>
                        </div>
                        <div class="order__form-box ">
                            <div class="order__form-user">
                                <input type="text" class="order__input" placeholder="Ваше ім'я" name="name" required>
                                <input type="tel" class="order__input" placeholder="Ваш телефон" name="phone" required>
                            </div>
                            
                            <button class="order__submit">
                                Підтвердити замовлення
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="faq" id="faq">
        <div class="container">
            <h3 class="faq__title title">
                Часті питання (FAQ)
            </h3>
            <div class="faq__block">
                <details class="faq__details faq__bordertop">
                    <summary class="faq__question">
                        Який склад грілок?
                    </summary>
                    <p class="faq__text">
                        Повністю безпечні для здоров'я та навколишнього середовища. Вони не містять шкідливих речовин і відповідають усім стандартам якості. Вміст: вода, залізний порошок, активоване вугілля, сіль, вермикуліт.    
                    </p>
                </details>
                <details class="faq__details">
                    <summary class="faq__question">
                        Як використовувати грілки?
                    </summary>
                    <p class="faq__text">
                        Дуже просто! Розірвіть упаковку, струсніть грілку, і вона миттєво почне нагріватися. Помістіть її в кишеню, рукавички або взуття для локального обігріву.    
                    </p>
                </details>
                <details class="faq__details">
                    <summary class="faq__question">
                        Які характеристики грілки?
                    </summary>
                    <p class="faq__text">
                         Грілки мають компактний розмір (грілка для тіла: 8 × 11 см; для ніг: 8 × 5.5 см; розмір грілки для рук: 7 × 5.5 см), легку вагу та забезпечують тепло до 8-10 годин. Вони повністю автономні, не потребують батарейок чи електрики. Максимальна температура нагріву: до 60°C.
                    </p>
                </details>
                <details class="faq__details">
                    <summary class="faq__question">
                        Чи можна використовувати грілку повторно?
                    </summary>
                    <p class="faq__text">
                        Ні. Хімічна реакція відбувається лише один раз. Після повного охолодження грілка не підлягає повторній активації.    
                    </p>
                </details>
                <details class="faq__details faq__borderbottom">
                    <summary class="faq__question">
                        Як зберігати термохімічні грілки?
                    </summary>
                    <p class="faq__text">
                        У сухому місці, при кімнатній температурі. Поки пакет герметичний — грілка не активується й може зберігатися роками.    
                    </p>
                </details>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="footer__inner">

                <a href="/" class="montserrat__logo">
                    <img class="header__logo-img" src="img/logo.png" alt="">
                    DROPSTORM
                </a>

                <div class="footer__list">
                    <a href="#product" class="footer__menu-link">товари</a>
                    <a href="javascript:void(0)" id="contacts" onclick="open__modal()" class="footer__menu-link">контакти</a>
                    <a href="#order" class="footer__menu-link">замовити</a>
                    <a href="#faq" class="footer__menu-link">FAQ</a>
                </div>

                <div class="footer__followus">
                    <p class="footer__text">
                        Слідкуйте за нами:
                    </p>
                    <div class="footer__socials">
                        <a href="https://www.tiktok.com/@drpstrm" class="footer__social-link tiktok">
                            <img class="footer__icons" src="img/tiktok.png" alt="">
                        </a>
                        <a href="https://www.instagram.com/drpstrm/" class="footer__social-link instagram">
                            <img class="footer__icons" src="img/instagram.png" alt="">
                        </a>
                        <a href="https://t.me/drpstrm" class="footer__social-link telegram">
                            <img class="footer__icons" src="img/telegram.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer> 
    <script src="script/script.js"></script>
    <script src="script/calculate.js"></script>
    <script src="script/scroll_to_orderBlock.js"></script>
    <script src="script/pop_up.js"></script>
    <script src="script/contacts.js"></script>
    <script src="script/burger.js"></script>
</body>
</html>