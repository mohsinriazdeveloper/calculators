document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('calorie-form');
    const resultsDiv = document.getElementById('calorie-results');

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        const sex = document.getElementById('sex').value;
        const age = parseFloat(document.getElementById('age').value);
        const weight = parseFloat(document.getElementById('weight').value);
        const height = parseFloat(document.getElementById('height').value);
        const activityLevel = document.getElementById('activity_level').value;

        const bmr = calculateBMR(sex, weight, height, age);
        const calories = calculateCalories(bmr, activityLevel);

        displayResults(calories);
    });

    function calculateBMR(sex, weight, height, age) {
        if (sex === 'male') {
            return 88.362 + (13.397 * weight) + (4.799 * height) - (5.677 * age);
        } else {
            return 447.593 + (9.247 * weight) + (3.098 * height) - (4.330 * age);
        }
    }

    function calculateCalories(bmr, activityLevel) {
        const activityFactors = {
            inactive: 1.2,
            somewhat_active: 1.375,
            active: 1.55,
            very_active: 1.725
        };

        return Math.round(bmr * activityFactors[activityLevel]);
    }

    function displayResults(calories) {
        resultsDiv.innerHTML = `<h3>Daily Calories</h3>
                                <p><strong>Maintenance:</strong> ${calories} calories/day</p>
                                <p><strong>Fat Loss:</strong> ${calories * 0.8} calories/day (20% deficit)</p>
                                <p><strong>Extreme Fat Loss:</strong> ${calories * 0.6} calories/day (40% deficit)</p>`;
    }
});
