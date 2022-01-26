<?php
require_once "admin/assets/database/dao/VideoDAO.php";
require_once "admin/URLHelper.php";

try {
    $baseUrl = URLHelper::getBaseURL();

    $videos = VideoDAO::getInstance()->searchAllTipo(3);

    $elementoCompleto = '';

    foreach ($videos as $video) {
        $caminhoDaImagem = $baseUrl . "/imagens/thumbnail/" . $video->getId() . "/imagem_principal.png";

        $elementoCompleto .= '<figure class="fig carousel-item" >
        <a href="view.php?id='.$video->getId().'"><img src="'.$caminhoDaImagem.'" class="fig__media"/></a>
        </figure>';
    }


    echo $elementoCompleto;
} catch (Exception $exception) {
    echo $exception->getMessage();
}

//        <figcaption class="f-large">'.$video->getNome().'</figcaption>
