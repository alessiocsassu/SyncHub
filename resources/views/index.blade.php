<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SyncHub</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Stile per la rotellina di caricamento */
        .loader {
            border: 4px solid rgba(0, 0, 0, 0.1);
            border-left: 4px solid #000;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="jumbotron">
        <h1 class="display-4">SyncHub</h1>
        <p class="lead">Index Page</p>
        <hr class="my-4">
        <p>L'app è in fase di sviluppo!</p>
        <div class="loader"></div> <!-- Elemento per la rotellina di caricamento -->
    </div>
</div>
</body>
</html>
