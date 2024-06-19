<?php
$this->registerCssFile("@web/css/calor.css", [
    'depends' => [yii\bootstrap5\BootstrapAsset::class],
]);
$this->registerCssFile("@web/css/style.css", [
    'depends' => [yii\bootstrap5\BootstrapAsset::class],
]);
?>
<body class="plan">
    <div class="plan-d">
    <div class="container">
        <h1>План питания для похудения</h1>
        <form id="survey-form">
            <label for="age">Возраст:</label>
            <input type="number" id="age" name="age" min="1" required>

            <label for="height">Рост (см):</label>
            <input type="number" id="height" name="height" min="1" required>

            <label for="weight">Вес (кг):</label>
            <input type="number" id="weight" name="weight" min="1" required>

            <label for="desired-weight">Желаемый вес (кг):</label>
            <input type="number" id="desired-weight" name="desired-weight" min="1" required>

            <label for="activity">Насколько вы физически активны?</label>
            <select id="activity" name="activity">
                <option value="low">Низкая активность</option>
                <option value="moderate">Средняя активность</option>
                <option value="high">Высокая активность</option>
            </select>

            <label for="energy">Насколько вы энергичны в течение дня?</label>
            <select id="energy" name="energy">
                <option value="low">Низкая энергичность</option>
                <option value="moderate">Средняя энергичность</option>
                <option value="high">Высокая энергичность</option>
            </select>

            <label for="weight-loss">Легко ли вам похудеть?</label>
            <select id="weight-loss" name="weight-loss">
                <option value="easy">Легко</option>
                <option value="moderate">Средне</option>
                <option value="hard">Трудно</option>
            </select>

            <label for="foods">Выберите, какие продукты вы хотели бы включить в свой рацион:</label>
            <select id="foods" name="foods" multiple>
                <option value="fruits">Фрукты</option>
                <option value="vegetables">Овощи</option>
                <option value="grains">Зерновые</option>
                <option value="protein">Белки</option>
                <option value="dairy">Молочные продукты</option>
            </select>

            <label for="daily-routine">Как проходит ваш обычный день?</label>
            <select id="daily-routine" name="daily-routine">
                <option value="sedentary">Сидячий</option>
                <option value="active">Активный</option>
                <option value="very-active">Очень активный</option>
            </select>

            <label for="stress">Как часто вы испытываете стресс?</label>
            <select id="stress" name="stress">
                <option value="rarely">Редко</option>
                <option value="sometimes">Иногда</option>
                <option value="often">Часто</option>
            </select>

            <label for="emotional-eating">Количество съеденного зависит от вашего эмоционального состояния?</label>
            <select id="emotional-eating" name="emotional-eating">
                <option value="no">Нет</option>
                <option value="sometimes">Иногда</option>
                <option value="often">Часто</option>
            </select>

            <button type="button" onclick="generatePlan()">Создать план</button>
        </form>

        <div id="result" class="result"></div>
    </div>
</div>
</body>
</html>
<script>
function generatePlan() {
    var age = document.getElementById('age').value;
    var height = document.getElementById('height').value;
    var weight = document.getElementById('weight').value;
    var desiredWeight = document.getElementById('desired-weight').value;
    var activity = document.getElementById('activity').value;
    var energy = document.getElementById('energy').value;
    var weightLoss = document.getElementById('weight-loss').value;
    var foods = Array.from(document.getElementById('foods').selectedOptions).map(option => option.value);
    var dailyRoutine = document.getElementById('daily-routine').value;
    var stress = document.getElementById('stress').value;
    var emotionalEating = document.getElementById('emotional-eating').value;

    var result = document.getElementById('result');
    var plan = '';

    if (age < 15 && weight < 40) {
        plan = `<p>Вам не стоит худеть</p>`;
    } else {
        plan += `<h2>Ваш план питания</h2>`;
        plan += `<p>Возраст: ${age} лет</p>`;
        plan += `<p>Рост: ${height} см</p>`;
        plan += `<p>Текущий вес: ${weight} кг</p>`;
        plan += `<p>Желаемый вес: ${desiredWeight} кг</p>`;
        plan += `<p>Физическая активность: ${activity}</p>`;
        plan += `<p>Энергичность: ${energy}</p>`;
        plan += `<p>Легкость похудения: ${weightLoss}</p>`;
        plan += `<p>Продукты в рационе: ${foods.join(', ')}</p>`;
        plan += `<p>Обычный день: ${dailyRoutine}</p>`;
        plan += `<p>Частота стресса: ${stress}</p>`;
        plan += `<p>Эмоциональное состояние и еда: ${emotionalEating}</p>`;

        // Вычисляем ИМТ (индекс массы тела)
        var bmi = (weight / ((height / 100) ** 2)).toFixed(1);
        plan += `<p>Ваш ИМТ: ${bmi} (${getBmiCategory(bmi)})</p>`;

        // Рекомендации по похудению
        plan += `<h3>Рекомендации по похудению:</h3>`;
        plan += `<ul>`;
        plan += `<li>Убедитесь, что ваш рацион сбалансирован и включает разнообразные продукты, такие как фрукты, овощи, зерновые, белки и молочные продукты.</li>`;
        plan += `<li>Поддерживайте высокий уровень физической активности, например, регулярные тренировки, прогулки или занятия спортом.</li>`;
        plan += `<li>Следите за своим эмоциональным состоянием и старайтесь избегать переедания в стрессовых ситуациях.</li>`;
        plan += `<li>Старайтесь выпивать достаточно воды каждый день.</li>`;
        plan += `<li>Соблюдайте режим сна и отдыхайте достаточное количество времени.</li>`;
        plan += `</ul>`;
    }

    result.innerHTML = plan;
}

function getBmiCategory(bmi) {
    if (bmi < 18.5) {
        return 'Недостаточный вес';
    } else if (bmi < 24.9) {
        return 'Нормальный вес';
    } else if (bmi < 29.9) {
        return 'Избыточный вес';
    } else {
        return 'Ожирение';
    }
}
</script>