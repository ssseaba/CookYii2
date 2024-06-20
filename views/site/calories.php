
<?php
$this->registerCssFile("@web/css/calor.css", [
    'depends' => [yii\bootstrap5\BootstrapAsset::class],
]);
?>
<body>
    <div class="calc container2">
        <div>
            <h1>Calorie Calculator</h1>
            <div class="calc-fon">

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


    <script src="/js/calor.js"></script>
</body>
</html>