<?php 
    header( "Refresh:5; url='../index.php'", true, 303);
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <title>GameMAG - Message</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<div class="row">
        <div class="container col-md-6">
            <div class="my-3 p-3 bg-white rounded shadow-sm">
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Erreur</h4>
                    <p>Une erreur est survenue lors de l'envoi de votre message.</p>
                    <hr>
                    <p class="mb-0">Vous allez être redirigé dans 5 secondes...</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>