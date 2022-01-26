<?php require_once 'templates/header.php'; ?>

<?php 
    require_once "admin/URLHelper.php";
    require_once "admin/assets/database/dao/VideoDAO.php";
    require_once "admin/assets/database/dao/ElencoDAO.php";
    require_once "admin/assets/database/dao/UsuarioDAO.php";
    require_once "admin/assets/database/dao/PessoaDAO.php";

    $baseUrl = URLHelper::getBaseURL();
    
    $video = VideoDAO::getInstance()->searchById($_GET["id"]);
    $elencoResponse = ElencoDAO::getInstance()->searchAll($video->getId());
    $elenco = [];

    foreach($elencoResponse as $ele){
        $elenco[] = PessoaDAO::getInstance()->searchById(UsuarioDAO::getInstance()->searchById($ele->getIdUsuario())->getIdPessoa())->getNome();
    }
?>

<body>
    <div id="content d-flex justify-content-center" style="background-color: #3b4046;">
        <iframe src="<?php echo $video->getLink(); ?>" width="768" height="432" allow="autoplay"></iframe>
    </div>

    <div id="areaInfomativa" class="text-center">
        <h1 class="title"><?php echo $video->getNome(); ?></h3>

        <div class="row textN">
          <div class="col-md-8">
            <h2>Descrição</h2>
            <p class="px15"><?php echo $video->getDescricao(); ?></p>
          </div>
          <div class="col-md-4">
                <h2>Elenco</h2>
                <ul style="list-style: none;">
                    <?php 
                        foreach($elenco as $ele){
                            echo '<li class="azul"><span style="font-size: large;">'.$ele.'</span></li>';
                        }
                    ?>
                </ul>
            </div>
        </div>

        <div class="row white d-none">
            <div class="col-md-8">
                <h2>Programas Utilizados</h2>
                <ul>
                    <li>asd</li>
                    <li>asd</li>
                </ul>
            </div>
        </div>
    </div>
    
</body>


<?php require_once 'templates/footer.php'; ?>