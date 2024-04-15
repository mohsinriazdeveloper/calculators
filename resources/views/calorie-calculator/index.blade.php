{{-- resources/views/calorie-calculator/index.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calorie Calculator</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Calculations</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="{{ url('/') }}">Home</a>
            </div>
        </div>
    </div>
</nav>

<div class="container calculator-section">
    <h1 class="text-center mb-4">Daily Calorie Intake Calculator</h1>
    <div class="row">
        <!-- Form Column -->
        <div class="col-md-6 pr-md-3 form-column">
            <form id="calorie-form" method="POST" action="{{ url('/calorie-calculator/calculate') }}">
                @csrf <!-- CSRF token is required for form submissions in Laravel -->

                <div class="form-group">
                    <label for="sex">What is your sex?</label>
                    <select class="form-control" id="sex" name="sex" required>
                        <option value="">Select your sex</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="age">How old are you?</label>
                    <input type="number" class="form-control" id="age" name="age" placeholder="Enter your age" required>
                </div>
                
                <div class="form-group">
                    <label for="weight">How much do you weigh?</label>
                    <input type="number" class="form-control" id="weight" name="weight" placeholder="Enter your weight in KG" required>
                </div>
                
                <div class="form-group">
                    <label for="height">How tall are you?</label>
                    <input type="number" class="form-control" id="height" name="height" placeholder="Enter your height in CM" required>
                </div>
                
                <div class="form-group">
                    <label for="activity_level">How active are you on daily basis?</label>
                    <select class="form-control" id="activity_level" name="activity_level" required>
                        <option value="">Select your activity level</option>
                        <option value="inactive">Inactive</option>
                        <option value="somewhat_active">Somewhat Active</option>
                        <option value="active">Active</option>
                        <option value="very_active">Very Active</option>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary">Calculate</button>
            </form>
        </div>

        <!-- Results Column -->
        <div class="col-md-5 pl-md-3 results-col">
            <h2>Results</h2>
            <div id="calorie-results"></div> <!-- Results will be displayed here -->
        </div>
    </div>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<!-- Include the JavaScript for the Calorie Calculator -->
<script src="{{ asset('js/calorieCalculator.js') }}"></script>
</body>
</html>
