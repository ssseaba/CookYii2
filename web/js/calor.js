function calculateCalories() {
    const weight = parseFloat(document.getElementById('weight').value);
    const height = parseFloat(document.getElementById('height').value);
    const age = parseInt(document.getElementById('age').value);
    const gender = document.getElementById('gender').value;
    const activity = document.getElementById('activity').value;
  
    let bmr;
  
    if (gender === 'male') {
      bmr = 88.362 + (13.397 * weight) + (4.799 * height) - (5.677 * age);
    } else {
      bmr = 447.593 + (9.247 * weight) + (3.098 * height) - (4.330 * age);
    }
  
    let calories;
  
    switch (activity) {
      case 'sedentary':
        calories = bmr * 1.2;
        break;
      case 'lightlyActive':
        calories = bmr * 1.375;
        break;
      case 'moderatelyActive':
        calories = bmr * 1.55;
        break;
      case 'active':
        calories = bmr * 1.725;
        break;
    }
  
    document.getElementById('result').textContent = `Вам необходимо потреблять примерно ${calories.toFixed(2)} калорий в день для поддержания веса.`;
  }