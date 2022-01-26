<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SG Covers e Dublagens</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bundles/slick/slick.css">
    <link rel="stylesheet" href="bundles/slick/slick-theme.css">
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand ml-4" href="#"><span style="color: white;">S</span><span style="color: #92c7ff;">G</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'index.php'){echo 'active'; } ?>">
          <a class="nav-link" href="index.php">Home </a>
        </li>
        <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'projetos.php'){echo 'active'; } ?>">
          <a class="nav-link" href="projetos.php">Projetos </a>
        </li>
        <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'sobre.php'){echo 'active'; } ?>">
          <a class="nav-link" href="#">Sobre Nós </a>
        </li>
      </ul>
    </div>
</nav>
