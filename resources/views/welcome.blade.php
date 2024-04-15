<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Homepage</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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

    <div class="container mt-5">
        <h1 class="text-center mb-4">Welcome to Calculator Homepage</h1>
        <div class="row">
            <!-- Add buttons with links to your calculators as described previously -->
            <!-- Example for a calculator link -->
            <div class="col-md-4 mb-3">
                <a href="{{ url('/calorie-calculator') }}" class="btn btn-outline-primary btn-block">Calorie Calculator</a>
            </div>
            <div class="col-md-4 mb-3">
                <a href="{{ url('/bmi-calculator') }}" class="btn btn-outline-primary btn-block">BMI Calculator</a>
            </div>
            <!-- Repeat the block above for each of your calculator links -->
        </div>
    </div>

    <!-- Include Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
