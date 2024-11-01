<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light">

    <div class="container my-5">
        <div class="card mx-auto" style="max-width: 600px;">

            <div class="card-header bg-primary text-white text-center">
                <h1 class="h4">{{ $title }}</h1>
            </div>

            <div class="card-body">
                <p class="card-text">{{ $body }}</p>
                <div class="text-center mt-4">
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>

            <div class="card-footer text-muted text-center">
                <small>If you have any questions, feel free to contact us!</small>
            </div>
        </div>
    </div>

</body>
</html>
