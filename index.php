<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="nafalin" content="Landing Page">


    <link rel="shortcut icon" href="img/favicon.png" type="image/png"/>
    <link href="build/css/style.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext"
          rel="stylesheet">

    <title>Brainside.org - безкоштовна система онлайн навчання by Brainbasket! </title>
    <!--[if lte IE 9 ]>
    <script>
        alert('Browser version is too old and site will not be displayed correctly. Please, upgrade your browser.');
    </script>
    <![endif]-->

</head>
<body>
<header class="header">

    <div class="container-header">
        <div class="navbar-head">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" id="navBurger">
                <div class="animate-burger">
                    <span class="top"></span>
                    <span class="middle"></span>
                    <span class="bottom"></span>

                </div>
            </button>

        </div>
        <div id="navbar" class="navbar-collapse collapse">

                <ul class='nav navbar-nav' id="menu-headermenu">


                    <li class="menu-item"><a href="#home">Home</a></li>
                    <li class="menu-item"><a href="#project">Project</a></li>
                    <li class="menu-item"><a href="#partners">Partners</a></li>
                    <li class="menu-item"><a href="#goal">Goal</a></li>
                    <li class="menu-item"><a href="#who_we_are">Who we are</a></li>
                    <li class="menu-item"><a href="#contact">Contact</a></li>

                </ul>

        </div>

    </div>

</header>



<section id="hero-video" class="hero-video" data-anchor="home">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 main-content">
                <img class="logo-small" src="img/logo_small.png" alt="logo" type="image/png"/>

                <div class="background-element">
                    <img class="background-1" src=" img/Background_element.png" alt="Background element"
                         type="image/png"/>
                    <img class="background-2" src=" img/Background_element.png" alt="Background element"
                         type="image/png"/>
                    <img class="background-3" src=" img/Background_element.png" alt="Background element"
                         type="image/png"/>
                    <img class="background-4" src=" img/Background_element.png" alt="Background element"
                         type="image/png"/>
                </div>

                <!--<img class="background-img" src="img/rsz_woman-notebook-working-girl.jpg" alt="logo" type="image/png"/>-->
                <div class="nav">


                    <div class="lang">
                        <div class="switch-container">
                            <div class="switch">
                                <input value="ukrain" type="radio" name="switch" id="switch--left" checked>
                                <input value="english" type="radio" name="switch" id="switch--right">

                                <label for="switch--left">UA</label>
                                <label for="switch--right">EN</label>

                                <span class="toggle"></span>
                            </div>
                        </div>

                    </div>
<!--                    <div class="menu-wrap">-->
<!--                        <img class="menu toggle-bttn" src=" img/Menu.png" alt="menu" type="image/png"/>               -->
<!---->
<!--                    </div>-->
                </div>
                <video autoplay="" loop="" muted="" class="bgvideo">

                    <source src="563399566.mp4">

                </video>

                <div class="content">

                    <img class="logo anim " src=" img/logo_big.png" alt="logo" type="image/png"/>


                    <div class="textarea anim ">
                        <p class="ukrain">
                            Безкоштовна система онлайн-навчання від Brainbasket Foundation для шкіл, коледжів та ВУЗів.
                            <br>Підпишіться на нас, щоб не пропустити запуск!
                        </p>
                        <p class="english">Free online training system from Brainbasket Foundation for schools, colleges
                            and universities.
                            <br>Follow us not to miss the launch!
                        </p>

                        <form class="input-group" name="myForm" onsubmit="return validateForm();" method="POST"
                              action="saver.php">
                            <input name='email' type="email" class="form-email" placeholder="Enter your email">
                            <button class="input-group-addon " id="submit" type="submit">Subscribe for news</button>

                            <!--                        --><?php //if($_GET["email"]=="ok") {echo "Дякуємо за відповідь! Ваша електронна адреса збережена. ";}?>
                        </form>


                    </div>
                    <!-- <img class="scroll_icon" src="img/Scroll_icon.png" alt="Scroll_icon" type="image/png"/> -->


                </div>
            </div>


        </div>
</section>

<section id="project" class="project" data-anchor="project">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 main-content">
                <div class="header-section">
                    <img class="logo" src="img/project/logo.svg" alt="logo" type="image/png"/>

<!--                    <div class="nav">-->
<!--                        <img class="menu" src=" img/Menu.svg" alt="menu" type="image/png"/>-->
<!--                    </div>-->
                </div>
                <div class="content">
                    <h2 class="title">Проект</h2>
                    <div class="textarea anim ">
                        <p>
                            Навчальна онлайн платформа, що об'єднає та змінить освіту в Україні! Викладачі, студенти та
                            батьки! Долучайтесь та долучіть свої навчальний заклад!
                        </p>
                    </div>

                    <div class="wraper-img ">

                        <div class="wraper">
                            <img src="img/project/journal.svg" class="icon" alt="jornal">
                            <div class="title-icon">Освітній журнал</div>
                        </div>

                        <div class="wraper ">
                            <img src="img/project/teachers.svg" class="icon" alt="jornal">
                            <div class="title-icon">Викладачі</div>
                        </div>

                        <div class="wraper ">
                            <img src="img/project/subjects.svg" class="icon" alt="subjects">
                            <div class="title-icon">Предмети</div>
                        </div>

                        <div class="wraper ">
                            <img src="img/project/testing.svg" class="icon" alt="testing">
                            <div class="title-icon">Тестування</div>
                        </div>

                        <div class="wraper ">
                            <img src="img/project/shedule.svg" class="icon" alt="shedule">
                            <div class="title-icon">Розклад</div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>
    <div class="ocean">
        <div class="wave"></div>
        <div class="wave"></div>
    </div>
</section>
<section id="partners" class="partners" data-anchor="partners">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 main-content">
                <img class="logo" src="img/project/logo.svg" alt="logo" type="image/png"/>

<!--                <div class="nav">-->
<!--                    <img class="menu" src=" img/menu.svg" alt="menu" type="image/png"/>-->
<!--                </div>-->
                <div class="content">

                    <h2 class="title">Партнери</h2>
                    <div class="textarea anim ">
                        <p>
                            Партнери, які долучилися до розвитку нашого проекта
                        </p>
                    </div>

                    <div class="wraper-img ">

                        <div class="wraper">
                            <a href="https://brainbasket.org/" target="_blank">
                                <img src="img/partners/brainbasket.png" class="icon" alt="partner">
                            </a>
                        </div>

                        <div class="wraper">
                            <a href="https://www.ciklum.com/" target="_blank">
                                <img src="img/partners/ciklum.png" class="icon" alt="partner">
                            </a>
                        </div>

                        <div class="wraper">
                            <a href="http://business-college.com.ua/" target="_blank">
                                <img src="img/partners/collegue.png" class="icon" alt="partner">
                            </a>
                        </div>

                        <div class="wraper">
                            <a href="http://mon.gov.ua/" target="_blank">
                                <img src="img/partners/min.png" class="icon" alt="partner">
                            </a>
                        </div>

                        <div class="wraper">
                            <a href="https://www.syngenta.ua/" target="_blank">
                                <img src="img/partners/syngenta.png" class="icon" alt="partner">
                            </a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="goal" class="goal" data-anchor="goal">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 main-content">

                <img class="logo" src="img/project/logo.svg" alt="logo" type="image/png"/>
<!---->
<!--                <div class="nav">-->
<!--                    <img class="menu" src=" img/Menu.png" alt="menu" type="image/png"/>-->
<!--                </div>-->
                <div class="content">

                    <h2 class="title">Мета</h2>
                    <div class="textarea anim ">
                        <p>
                            Створення потужної платформи, що дасть можливість школярам, студентам денної та заочної
                            форми
                            навчання отримати якісні знання!
                        </p>
                    </div>

                    <div class="wraper-img ">

                        <div class="wraper">
                            <img src="img/goal/59-layers.svg" class="icon" alt="teacher">
                            <div class="title-icon">Викладачі</div>
                            <div class="description-icon">якісну платформу для проведення лекцій та практик.</div>
                        </div>

                        <div class="wraper ">
                            <img src="img/goal/28-layers.svg" class="icon" alt="ico">
                            <div class="title-icon">ВУЗам та школам</div>
                            <div class="description-icon"> автоматичну генерацію розкладу, розсилку важливих новин, а
                                також
                                контроль за роботою викладачів.
                            </div>
                        </div>

                        <div class="wraper ">
                            <img src="img/goal/30-layers.svg" class="icon" alt="ico">
                            <div class="title-icon">Батькам</div>
                            <div class="description-icon">отримання актуальної інформації про успіхи та досягнення,
                                пропуски
                                та негативні оцінки студентів та школярів.
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ocean">
        <div class="wave-right"></div>
        <div class="wave-right"></div>
    </div>
</section>
<section id="who_we_are" class="who_we_are" data-anchor="who_we_are">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 main-content">
                <img class="logo" src="img/project/logo.svg" alt="logo" type="image/png"/>

<!--                <div class="nav">-->
<!--                    <img class="menu" src=" img/menu.svg" alt="menu" type="image/png"/>-->
<!--                </div>-->
                <div class="content">

                    <h2 class="title">Хто ми</h2>


                    <div class="wraper-img ">

                        <div class="wraper">
                            <div class="bb">
                                <img src="img/who_we_are/mask.png" class="icon  " alt="we_are">
                            </div>
                            <div class="neme">О. Ткаченко</div>
                            <div class="position">CEO, Founder</div>
                        </div>
                        <div class="wraper">
                            <div class="bb">
                                <img src="img/who_we_are/tanya.png" class="icon" alt="we_are">
                            </div>
                            <div class="neme">Т. Коляда</div>
                            <div class="position">Дизайнер</div>
                        </div>
                        <div class="wraper">
                            <div class="bb">
                                <img src="img/who_we_are/dsc-0825.png" class="icon" alt="we_are">
                            </div>
                            <div class="neme">Д. Мельніков</div>
                            <div class="position">Frontend</div>
                        </div>
                        <div class="wraper">
                            <div class="bb">
                                <img src="img/who_we_are/sergii.png" class="icon" alt="we_are">
                            </div>
                            <div class="neme">С. Бондаренко</div>
                            <div class="position">Frontend</div>
                        </div>
                        <div class="wraper">
                            <div class="bb">
                                <img src="img/who_we_are/oleksandr.png" class="icon" alt="we_are">
                            </div>
                            <div class="neme">О. Низовий</div>
                            <div class="position">Backend</div>
                        </div>
                        <div class="wraper">
                            <div class="bb">
                                <img src="img/who_we_are/mask.png" class="icon" alt="we_are">
                            </div>
                            <div class="neme">Д. Малоземов</div>
                            <div class="position">Backend</div>
                        </div>
                        <div class="wraper">
                            <div class="bb">
                                <img src="img/who_we_are/mask.png" class="icon" alt="we_are">
                            </div>
                            <div class="neme">А. Галушка</div>
                            <div class="position">Backend</div>
                        </div>
                        <div class="wraper">
                            <div class="bb">
                                <img src="img/who_we_are/mask.png" class="icon" alt="we_are">
                            </div>
                                <div class="neme">О. Бондар</div>
                                <div class="position">Backend</div>
                        </div>
                        <div class="wraper">
                            <div class="bb">
                                <img src="img/who_we_are/mask.png" class="icon" alt="we_are">
                            </div>
                            <div class="neme">О. Хандусь</div>
                            <div class="position">QA</div>
                        </div>


                        </div>


                    </div>
                </div>
            </div>
        </div>

</section>
<section id="contact" class="contact" data-anchor="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 main-content">

                <img class="logo" src="img/project/logo.svg" alt="logo" type="image/png"/>

<!--                <div class="nav">-->
<!--                    <img class="menu" src=" img/Menu.png" alt="menu" type="image/png"/>-->
<!--                </div>-->


                <div class="content">

                    <h2 class="title">Контакти</h2>

                    <div class="wraper-img ">

                        <div class="wraper">
                            <img src="img/contact/7-layers.svg" class="icon" alt="map"> <a class="description-icon"
                                                                                           target="_blank "
                                                                                           href="https://www.google.com/maps/place/%D0%93%D0%BE%D1%80%D0%B8%D0%B7%D0%BE%D0%BD%D1%82+%D0%9F%D0%B0%D1%80%D0%BA/@50.4233259,30.504417,17z/data=!4m8!1m2!2m1!1z0JrQuNGX0LIsINCy0YPQuy4g0JzQuNC60L7Qu9C4INCQ0LzQvtGB0L7QstCwLCAxMiDQkdCmICJIb3Jpem9uIFBhcmsi!3m4!1s0x0:0x5c19bf7554f3b262!8m2!3d50.423774!4d30.5080958">Київ,
                                вул. Миколи Амосова, 12
                                <br>БЦ "Horizon Park", друга вежа</a>
                        </div>

                        <div class="wraper ">
                            <img src="img/contact/5-layers.svg" class="icon" alt="web"><a class="description-icon"
                                                                                          target="_blank"
                                                                                          href="https://brainbasket.org/">bbf@brainbasket.org
                            </a>
                        </div>


                    </div>

                    <div class="wraper-foo ">
                        <img src="img/contact/brainbasket-logo.png" class="icon-foo" alt="footer">
                        <p class="description-icon-foo">Фонд BrainBasket є некомерційною, неурядовою організацією, яка
                            займається розвитком освіти в сфері ІТ. BrainBasket прагне зробити IT-галузь рушійною силою
                            економічного зростання України шляхом поліпшення освітньої інфраструктури. Глобальною метою
                            Фонду є сприяння у підготовці 100 000 нових IT-фахівців до 2020 року.
                        </p>
                    </div>

                    <a class="top">top</a>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Library  script-->
<script src="build/js/vendors.min.js"></script>
<!-- Own script -->
<script src="build/js/custom.min.js"></script>


</body>