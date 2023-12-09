<!-- resources/views/users/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elenco Utenti</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Aggiungi qui eventuali personalizzazioni CSS */
        body {
            padding-top: 5rem;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="mb-4">Elenco Utenti</h1>
    <ul class="list-group">
        @foreach($users as $user)
            <li class="list-group-item">{{ $user->name }} - {{ $user->email }}</li>
        @endforeach
    </ul>
</div>
</body>
</html>
