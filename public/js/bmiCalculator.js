// resources/js/bmiCalculator.js

document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('bmi-form');
    const weightInput = document.getElementById('weight');
    const heightInput = document.getElementById('height');
    const resultsDiv = document.getElementById('results');

    form.addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent the form from submitting the traditional way

        const weight = parseFloat(weightInput.value);
        const height = parseFloat(heightInput.value);
        
        // Make sure weight and height are positive numbers
        if(weight > 0 && height > 0) {
            const heightInMeters = height / 100;
            const bmi = weight / (heightInMeters ** 2);
            
            // Create and append the result to the resultsDiv
            resultsDiv.innerHTML = `
                <h3>Your BMI: ${bmi.toFixed(2)}</h3>
                <p>${getBmiCategory(bmi)}</p>
            `;
        } else {
            // Handle the error scenario where input is invalid
            resultsDiv.textContent = 'Please enter valid weight and height!';
        }
    });

    function getBmiCategory(bmi) {
        if (bmi < 18.5) return 'Underweight';
        if (bmi >= 18.5 && bmi < 24.9) return 'Normal weight';
        if (bmi >= 25 && bmi < 29.9) return 'Overweight';
        return 'Obese';
    }
});
