{{-- resources/views/bmi_calculator/index.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
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
                <a class="nav-item nav-link active" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
            </div>
        </div>
    </div>
</nav>

<div class="container">
    <h1 class="text-center mb-4">BMI Calculator</h1>
    <div class="row">
        <!-- Form Column -->
        <div class="col-md-6 pr-md-3 form-column">
            <form method="POST" action="{{ url('/bmi-calculate') }}" id="bmi-form">
                @csrf

                <div class="form-group">
                    <label for="weight">Weight (in kilograms):</label>
                    <input type="number" class="form-control" id="weight" name="weight" placeholder="Enter your weight" required>
                </div>

                <div class="form-group">
                    <label for="height">Height (in centimeters):</label>
                    <input type="number" class="form-control" id="height" name="height" placeholder="Enter your height" required>
                </div>

                <button type="submit" class="btn btn-primary">Calculate BMI</button>
            </form>
        </div>

        <!-- Results Column -->
        <div class="col-md-5 pl-md-3 results-col" id="results">
            <h2>Results</h2>
            <div id="bmi-result"></div>
        </div>
    </div>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/bmiCalculator.js') }}"></script>
</body>
</html>
