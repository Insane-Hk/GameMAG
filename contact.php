<?php

?>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GameMAG - Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" media="screen" href="css/include/header.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/include/footer.css">

    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet"> 

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">

    <script src="js/script.js"></script>
</head>

<body>
    <?php include('include/header.inc.php'); ?>
    <br>

    <div class="row">
        <div class="container col-md-5">
            <div class="my-3 p-3 bg-white rounded shadow">
                <h5 class="border-bottom border-gray pb-2 mb-0">Formulaire de contact</h6>
                    <br>
                    <form action="./function/contact.func.php" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="contactme-name">Nom</label>
                                <input type="text" class="form-control" id="contactme-name" name="contactme-name"
                                    placeholder="Jean Dupont" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="contactme-mail">Adresse mail</label>
                                <input type="email" class="form-control" id="contactme-mail" name="contactme-mail"
                                    placeholder="jean.dupont@mail.com" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="contactme-subject">Sujet</label>
                            <input type="text" class="form-control" id="contactme-subject" name="contactme-subject"
                                placeholder="Sujet du message" required>
                        </div>

                        <div class="form-group">
                            <label for="contactme-message">Message</label>
                            <textarea class="form-control" rows="5" id="contactme-message" name="contactme-message"
                                placeholder="Message que vous souhaitez envoyé."
                                required></textarea>
                        </div>

                        <button type="submit" class="btn btn-success">Envoyer</button>
                    </form>
            </div>
        </div>
    </div>

    <?php include('include/footer.inc.php'); ?>
</body>

</html>