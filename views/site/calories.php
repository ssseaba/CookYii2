<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="calor.css">
</head>

<header class="container">
    <div class="head">
        <div class="burger-menu">
            <img src="img/burger.png" alt="">
        </div>
        <div class="logo">
            <img src="img/logo.png" alt="">
        </div>
        <div>
            <ul class="menu-t">
                <a href=""><li>Menu</li></a>
                <a href=""><li>Delivery</li></a>
                <a href=""><li>FAQ</li></a>
                <a href=""><li>Contacts</li></a>
            </ul>
        </div>
        <div class="info">
            <div class="number">
                <div>
                    <img src="img/zv.png" alt="">
                </div>
                <p>591 902 883</p>  
            </div>
            <div class="language">
                <p>EN</p>
                <div>
                    <img src="img/str.png" alt="">
                </div>
            </div>
        </div>

        <div class="login">
            <button id="openPopup"><img src="img/login.png" alt=""><p>sign in</p></button>
            <div id="popup" class="popup">
                <div class="popup-content">
                    <span class="close">&times;</span>
                    <h2>Регистрация</h2>
                    <form>
                        <div>
                            <label for="name">Имя:</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        
                        <div>
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                        </div>

                        <div>
                            <label for="password">Пароль:</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <button type="submit">Зарегистрироваться</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>

<body>
    <div class="calc container">
        <div>
            <h1>Калькулятор калорий</h1>
            <div class="calc-fon">
            <div class="calc-r">
                <div>
                    <label for="weight">Вес (кг):</label>
                    <input type="number" id="weight" placeholder="Введите ваш вес" required>
                </div>

                <div>
                    <label for="height">Рост (см):</label>
                    <input type="number" id="height" placeholder="Введите ваш рост" required>
                </div>

                <div>
                    <label for="age">Возраст:</label>
                    <input type="number" id="age" placeholder="Введите ваш возраст" required>
                </div>

                <div>
                    <label for="gender">Пол:</label>
                    <select id="gender">
                    <option value="male">Мужской</option>
                    <option value="female">Женский</option>
                    </select>
                </div>

                <div>
                    <label for="activity">Уровень активности:</label>
                    <select id="activity">
                    <option value="sedentary">Сидячий образ жизни</option>
                    <option value="lightlyActive">Легкая активность</option>
                    <option value="moderatelyActive">Умеренная активность</option>
                    <option value="active">Активный образ жизни</option>
                    </select>
                </div>
               
                <button onclick="calculateCalories()">Рассчитать</button>

                <div id="result"></div>
            </div>
        </div>
        </div>
    </div>

    <footer>
        <div class="foot container">
            <div>
                <img class="img-1" src="img/logo 2.png" alt="">
            </div>
            <div>
                <ul>
                    <a href=""><li>Menu</li></a>
                    <a href=""><li>Delivery</li></a>
                    <a href=""><li>FAQ</li></a>
                    <a href=""><li>Contacts</li></a>
                </ul>
            </div>
            <div >
                <img class="img-2" src="img/foot1.png" alt="">
            </div>
        </div>
    </footer>

    <script src="js/calor.js"></script>
</body>
</html>