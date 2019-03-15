<header>
    <div class="gm-title container-fluid text-center">
        <a class="title" href="./index.php"><h1 class="align-center titre">GAME<strong>MAG</strong><h1></a>
    </div>
    <div class="gm-nav container text-center" style="font-family:'Fjalla one', sans-serif;">
        <nav class="Navbar-fluid">
            <?php if($_SERVER['SCRIPT_NAME']=="/gameMAG/articles.php") { ?>
            
                <a class="navbar-brand lien active" href="#">
            <?php } else { ?>
                <a class="navbar-brand lien" href="#">
            <?php } ?>

                <i class="fas fa-newspaper" width="30" height="30" class="d-inline-block align-top" alt=""></i> &nbsp;
                Article
            </a>
        
            <?php if($_SERVER['SCRIPT_NAME']=="/gameMAG/leaderboard.php") { ?>
                <a class="navbar-brand lien active" href="./leaderboard.php">
            <?php } else { ?>
                <a class="navbar-brand lien" href="./leaderboard.php">
            <?php } ?>

                <i class="fas fa-award" width="30" height="30" class="d-inline-block align-top" alt=""></i> &nbsp;
                Classement
            </a>

            <?php if($_SERVER['SCRIPT_NAME']=="/gameMAG/videos.php") { ?>
                <a class="navbar-brand lien active" href="#">
            <?php } else { ?>
                <a class="navbar-brand lien" href="#">
            <?php } ?>
                <i class="fas fa-video" width="30" height="30" class="d-inline-block align-top" alt=""></i>
                &nbsp; Vidéos
            </a>
        </nav>
    </div>
</header>