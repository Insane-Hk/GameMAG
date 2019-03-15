<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GameMAG - Accueil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" media="screen" href="css/include/header.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/include/footer.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
    <script src="js/script.js"></script>
</head>

<body>
    <?php include('include/header.inc.php'); ?>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/games/td2-artwork.jpeg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h4>The Division 2</h4>
                    <p>15 mars 2019</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./img/games/anthem.jpeg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Anthem</h4>
                    <p>22 février 2019</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./img/games/dmc5.png" class="d-block w-100">
                <div class="container">
                    <div class="carousel-caption d-none d-md-block">
                        <h4>Devil May Cry 5</h4>
                        <p>8 mars 2019</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Précedent</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Suivant</span>
        </a>
    </div>

    <div class="container text-center mt-2">
        <h2>Les jeux du moment The Division 2, Devil May Cry 5 et Anthem.</h2>
        <p class="text-muted">par <strong>Jonathan</strong>, le 15 mars 2019.</p>
    </div>

    <br>

    <div class="row mx-5">
        <div class="col-sm-3">
            <div class="card shadow" style="width: 18rem;">
                <img src="./img/games/anthem.jpeg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Titre de l'article</h5>
                    <p class="card-text"><span class="badge badge-primary">NOUVEAU</span> <span class="badge badge-success">PREVIEW</span></p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#" class="btn btn-primary btn-block">Voir l'article</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card shadow" style="width: 18rem;">
                <img src="./img/games/anthem.jpeg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Titre de l'article</h5>
                    <p class="card-text"><span class="badge badge-danger">DLC</span></p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#" class="btn btn-primary btn-block">Voir l'article</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card shadow" style="width: 18rem;">
                <img src="./img/games/anthem.jpeg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Titre de l'article</h5>
                    <p class="card-text"><span class="badge badge-info">INFORMATION</span></p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#" class="btn btn-primary btn-block">Voir l'article</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card shadow" style="width: 18rem;">
                <img src="./img/games/anthem.jpeg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Titre de l'article</h5>
                    <p class="card-text"><span class="badge badge-warning">ALERTE</span></p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#" class="btn btn-primary btn-block">Voir l'article</a>
                </div>
            </div>
        </div>
    </div>

    <hr class="mx-5">

    <div class="row mx-5">
        <div class="col-8">
            <div class="card mb-3 shadow">
                <div class="row no-gutters">
                    <div class="col-md-4">
                    <img src="./img/games/anthem.jpeg" class="card-img">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Titre</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p class="card-text"><small class="text-muted">Ajouté il y a 3 heures par <strong>Jonathan</strong>.</small></p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 shadow">
                <div class="row no-gutters">
                    <div class="col-md-4">
                    <img src="./img/games/anthem.jpeg" class="card-img">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Titre</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p class="card-text"><small class="text-muted">Ajouté il y a 5 heures par <strong>Jonathan</strong>.</small></p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="twitter-feed col-4">
            <a class="twitter-timeline"href="https://twitter.com/gameinformer">Tweets par @GameInformer</a>
        </div>
    </div>

    <br>

    <?php include('include/footer.inc.php'); ?>

    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
</body>

</html>