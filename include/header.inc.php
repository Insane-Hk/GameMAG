<?php 
    echo $_SERVER['SCRIPT_NAME'];
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="./index.php">GAME<strong>MAG</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-x"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar-collapse-x">
        <ul class="navbar-nav ml-auto mr-5">
            <?php if($_SERVER['SCRIPT_NAME']=="/gameMAG/article.php") { ?>
                <li class="nav-item active">
                    <a class="nav-link" href="./article.php"><i class="fas fa-newspaper"></i> &nbsp;ARTICLE</a>
                </li>
            <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="./article.php"><i class="fas fa-newspaper"></i> &nbsp;ARTICLE</a>
                </li>
            <?php } ?>
            <?php if($_SERVER['SCRIPT_NAME']=="/gameMAG/leaderboard.php") { ?>
                <li class="nav-item active">
                    <a class="nav-link" href="./leaderboard.php"><i class="fas fa-award"></i> &nbsp;CLASSEMENT</a>
                </li>
            <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="./leaderboard.php"><i class="fas fa-award"></i> &nbsp;CLASSEMENT</a>
                </li>
            <?php } ?>
            <?php if($_SERVER['SCRIPT_NAME']=="/gameMAG/videos.php") { ?>
                <li class="nav-item active">
                    <a class="nav-link" href="./videos.php"><i class="fas fa-video"></i> &nbsp;VIDÉOS</a>
                </li>
            <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="./videos.php"><i class="fas fa-video"></i> &nbsp;VIDÉOS</a>
                </li>
            <?php } ?>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link search" href="./index.php"><i class="fas fa-search"></i></a>
            </li>
        </ul>
    </div>
    <div class="progress fixed-top" style="height: 3px;">
        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
</nav>