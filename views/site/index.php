<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
</head>
<?php
$this->registerCssFile("@web/css/style.css", [
    'depends' => [yii\bootstrap5\BootstrapAsset::class],
]);
?>
<ody>
<!--    <header class="container">-->
<!--        <div class="head">-->
<!--            <div class="burger-menu">-->
<!--                <img src="img/burger.png" alt="">-->
<!--            </div>-->
<!--            <div class="logo">-->
<!--                <img src="img/logo.png" alt="">-->
<!--            </div>-->
<!--            <div>-->
<!--                <ul class="menu-t">-->
<!--                    <a href=""><li>Menu</li></a>-->
<!--                    <a href=""><li>Delivery</li></a>-->
<!--                    <a href=""><li>FAQ</li></a>-->
<!--                    <a href=""><li>Contacts</li></a>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <div class="info">-->
<!--                <div class="number">-->
<!--                    <div>-->
<!--                        <img src="img/zv.png" alt="">-->
<!--                    </div>-->
<!--                    <p>591 902 883</p>-->
<!--                </div>-->
<!--                <div class="language">-->
<!--                    <p>EN</p>-->
<!--                    <div>-->
<!--                        <img src="img/str.png" alt="">-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="login">-->
<!--                <button  id="openPopup"><img src="img/login.png" alt=""><p>sign in</p></button>>-->
<!--                <div id="popup" class="popup">-->
<!--                    <div class="popup-content">-->
<!--                        <span class="close">&times;</span>-->
<!--                        <h2 >Регистрация</h2>-->
<!--                        <form>-->
<!--                            <div>-->
<!--                                <label for="name">Имя:</label>-->
<!--                                <input type="text" id="name" name="name" required>-->
<!--                            </div>-->
<!---->
<!--                            <div>-->
<!--                                <label for="email">Email:</label>-->
<!--                                <input type="email" id="email" name="email" required>-->
<!--                            </div>-->
<!---->
<!--                            <div>-->
<!--                                <label for="password">Пароль:</label>-->
<!--                                <input type="password" id="password" name="password" required>-->
<!--                            </div>-->
<!--                            <button type="submit">Зарегистрироваться</button>-->
<!--                        </form>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </header>-->

    <div class="main container">
        <div class="info">
            <h2>Your personal cook</h2>
            <p>The balanced diet for every day</p>
            <button>Make your choice</button>
        </div>
        <div>
            <img src="img/main.png" alt="">
        </div>
    </div>

    <div class="menu container">
        <h2>MENU</h2>
        <div class="week">
            <a href=""><p>All</p></a>
            <a href=""><p>Monday</p></a>
            <a href=""><p>Tuesday</p></a>
            <a href=""><p>Wednesday</p></a>
            <a href=""><p>Thursday</p></a>
            <a href=""><p>Friday</p></a>
            <a href=""><p>Saturday</p></a>
            <a href=""><p>Sunday</p></a>
        </div>
        <div class="food">
            <div class="food-menu">
                <div class="carousel">
                    <div class="item">
                        <img src="img/as.png" alt="">
                        <div class="info">
                            <h3>BREAKFAST 2</h3>
                            <p>Chicken fricassee with mushrooms and bulgur</p>
                            <a href="">MORE</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/xc.png" alt="">
                        <div class="info">
                            <h3>Lunch</h3>
                            <p>Chicken fricassee with mushrooms and bulgur</p>
                            <a href="">MORE</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/sd.png" alt="">
                        <div class="info">
                            <h3>Snack</h3>
                            <p>Chicken fricassee with mushrooms and bulgur</p>
                            <a href="">MORE</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/jk.png" alt="">
                        <div class="info">
                            <h3>DINNER</h3>
                            <p>Chicken fricassee with mushrooms and bulgur</p>
                            <a href="">MORE</a>
                        </div>
                    </div>
                </div>
                <div class="controls">
                    <img class="prev" src="img/lev.png" alt="">
                    <img class="next" src="img/pra.png" alt="">
                </div>
            </div>

            <p class="p-1">A balanced menu helps to maintain health and a slim figure, allows you to be cheerful and active throughout the week. While preparing our dishes, we use products from the best suppliers and always choose products that correspond to the concept of healthy nutrition. For example, lean beef, turkey and chicken, low-calorie sauces, pasta of hard varieties. Delivery is carried out every 2 days.</p>
            <div class="fon">
                <div class="calc">
                    <h3>Do you want to count your calories?</h3>
                    <a href="calories.html">Order now</a>
                </div>
            </div>
        </div>
    </div>

    <div class="adv container">
        <h2>Our advantages</h2>
        <div class="items">
            <div class="item">
                <img class="img-1" src="img/gr1.png" alt="">
                <p><b>We'll deliver it free of charge</b><br>
                    In a convenient 2-hour interval</p>
            </div>
            <div class="item">
                <img class="img-2" src="img/gr2.png" alt="">
                <p><b>We’ll calculate<br> calories</b><br>
                    It will be easy for you to control your diet</p>
            </div>
            <div class="item">
                <img class="img-3" src="img/gr3.png" alt="">
                <p><b>We'll help you to save<br> up to 20 hours</b><br>
                    of free time a week for you</p>
            </div>
            <div class="item">
                <img class="img-4" src="img/gr4.png" alt="">
                <p><b>Everything is ready,<br> just warm it up</b><br>
                    We’ll bring you ready-made dishes</p>
            </div>
            <div class="item">
                <img class="img-5" src="img/gr5.png" alt="">
                <p><b>Lorem ipsum dolor<br> sit amet consectetur.</b><br> Quisque sed nisi turpis enim.</p>
            </div>
        </div>
    </div>

    <div class="diet-fon container">
        <div class="diet">
            <div class="info">
                <h2>Do you want to choose a  personal diet?</h2>
                <p>Make orders, take part in promotions, recommend us to friends or connect
                    recommend us to friends or connect </p>
                <a href="">GO</a>
            </div>
            <div>
                <img src="img/mn.png" alt="">
            </div>
        </div>
    </div>

    <div class="areas container">
        <h2>Areas</h2>
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A70c1b8add16420e9b89b01f35387247deb672c9ee041c38612f81d3fa7d06df7&amp;width=1194&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
    </div>

    <div class="faq container">
        <h2>FAQ</h2>
        <div class="items">
            <div>
                <img src="img/ic1.png" alt="">
                <p class="p-1">Cashback</p>
            </div>
            <div>
                <img src="img/ic2.png" alt="">
                <p class="p-1">Weight loss</p>
            </div>
            <div>
                <img src="img/ic3.png" alt="">
                <p>Products</p>
            </div>
            <div>
                <img src="img/ic4.png" alt="">
                <p class="p-1">Rates</p>
            </div>
            <div>
                <img src="img/ic5.png" alt="">
                <p>Payment </p>
            </div>
            <div>
                <img src="img/ic6.png" alt="">
                <p>Storage</p>
            </div>
        </div>
    </div>

    <div class="form container">
        <div class="img">
            <img src="img/pom1.png" alt="">
        </div>
        <div class="info">
            <h3>LET'S GET IN TOUCH</h3>
            <p>Make orders, take part in promotions,recommend us to friends or connect </p>
        </div>
        <form action="">
            <div class="name-phone">
                <input type="text" placeholder="Your name">
                <input type="text" placeholder="Your phone number">
            </div>
            <div>
                <input class="email" type="text" placeholder="Your E-mail">
            </div>
            <div class="submit">
                <a href="">Submit</a>
            </div>
        </form>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/login.js"></script>
    <script>
        $(document).ready(function() {
            var carousel = $('.carousel');
            var items = $('.item', carousel);
            var prevBtn = $('.prev');
            var nextBtn = $('.next');
            var currentIndex = 0;
            var itemWidth = items.first().outerWidth();

            function updateCarousel() {
                carousel.css('transform', 'translateX(-' + (currentIndex * itemWidth) + 'px)');
            }

            prevBtn.click(function() {
                currentIndex = (currentIndex - 1 + items.length) % items.length;
                updateCarousel();
            });

            nextBtn.click(function() {
                currentIndex = (currentIndex + 1) % items.length;
                updateCarousel();
            });
        });
    </script>
</ody>
</html>