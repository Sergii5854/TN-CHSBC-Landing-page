<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="nafalin" content="Landing Page">


    <link rel="shortcut icon" href="img/favicon.png" type="image/png"/>
    <link href="build/css/style.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext" rel="stylesheet">

    <title>Landing Page </title>
    <!--[if lte IE 9 ]>
    <script>
        alert('Browser version is too old and site will not be displayed correctly. Please, upgrade your browser.');
    </script>
    <![endif]-->

</head>
<body  >

<header >

    <div class="container">

    </div>

</header>

<section class="hero-video">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 main-content">
                <img class="logo-small" src="img/2.png" alt="logo" type="image/png"/>

                <div class="background-element">
                    <img class="background-1" src=" img/Background_element.png" alt="Background element" type="image/png"/>
                    <img class="background-2" src=" img/Background_element.png" alt="Background element" type="image/png"/>
                    <img class="background-3" src=" img/Background_element.png" alt="Background element" type="image/png"/>
                    <img class="background-4" src=" img/Background_element.png" alt="Background element" type="image/png"/>
                </div>

                <img class="background-img" src="img/rsz_woman-notebook-working-girl.jpg" alt="logo" type="image/png"/>
               <div class="nav">
                <img class="menu" src=" img/Menu.png" alt="menu" type="image/png"/>
               </div>
                <!--<video autoplay="" loop="" muted="" class="bgvideo">

                    <source src="video/Hello_BrainBasket.mp4">

                </video>-->

                <div class="content">

                    <img class="logo anim " src=" img/logo-big.png" alt="logo" type="image/png"/>


                    <div class="textarea anim ">
                        <p>
                            CS50 is a free online class introducing students to the basics of computer science. CS50 is taught by David Malan of Harvard
                        </p>
                    </div>
                    <form class="input-group" name="myForm" onsubmit="return validateForm();" method="POST" action="saver.php">
                        <input name='email' type="email" class="form-email" placeholder="Enter your email" >
                        <button class="input-group-addon " id="submit"  type="submit" >Subscribe for news</button>

<!--                        --><?php //if($_GET["email"]=="ok") {echo "Ваша електронна адреса збережена";}?>
                    </form>


                </div>
                <img class="scroll_icon" src="img/Scroll_icon.png" alt="Scroll_icon" type="image/png"/>
            </div>
        </div>


    </div>
</section>

<section class="project">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 main-content">
                <img class="logo" src="img/project/logo.svg" alt="logo" type="image/png"/>

                <div class="nav">
                    <img class="menu" src=" img/Menu.png" alt="menu" type="image/png"/>
                </div>


                <h2 class="title">Проект</h2>
                <div class="textarea anim ">
                    <p>
                        Навчальна онлайн платформа, що об'єднає та змінить освіту в Україні! Викладачі, студенти та батьки! Долучайтесь та долучіть свої навчальний заклад!
                    </p>
                </div>


            </div>
        </div>
    </div>

</section>
<section  class="partners">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 main-content">
                <img class="logo" src="img/project/logo.svg" alt="logo" type="image/png"/>

                <div class="nav">
                    <img class="menu" src=" img/Menu.png" alt="menu" type="image/png"/>
                </div>


                <h2 class="title">Партнери</h2>
                <div class="textarea anim ">
                    <p>
                        Партнери, які долучилися до розвитку нашого проекта
                    </p>
                </div>


            </div>
        </div>
    </div>
</section>
<section  class="goal">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 main-content">
                <img class="logo" src="img/project/logo.svg" alt="logo" type="image/png"/>

                <div class="nav">
                    <img class="menu" src=" img/Menu.png" alt="menu" type="image/png"/>
                </div>


                <h2 class="title">Мета</h2>
                <div class="textarea anim ">
                    <p>
                        Створення потужної платформи, що дасть можливість школярам, студентам денної та заочної форми навчання отримати якісні знання!
                    </p>
                </div>


            </div>
        </div>
    </div>
</section>
<section  class="who_we_are"></section>
<section  class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 main-content">
                <img class="logo" src="img/project/logo.svg" alt="logo" type="image/png"/>

                <div class="nav">
                    <img class="menu" src=" img/Menu.png" alt="menu" type="image/png"/>
                </div>


                <h2 class="title">Проект</h2>
                <div class="textarea anim ">
                    <p>
                        Навчальна онлайн платформа, що об'єднає та змінить освіту в Україні! Викладачі, студенти та батьки! Долучайтесь та долучіть свої навчальний заклад!
                    </p>
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