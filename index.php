<html lang="pt-BR">
<?php require_once 'templates/header.php';?>

<body>
    <div>
        <div class="col-lg-12">
            <div id="home">
                <div class="xing"></div>
                <div class="content">
                    <span class="text-lg">S<span style="color: #92c7ff;">G</span> Covers e <span style="color: #92c7ff;">D</span>ublagens</span>
                    <span class="text-sm">Bem vindo ao site dos estúdios SG, aqui você encontrará diversos covers e dublagens feitas com amor e carinho. Procuramos sempre melhorar e evoluir dublando e cantando músicas de animes que amamos, ou seja, tudo aqui é feito enquanto nos divertimos.</span>
                </div>                
            </div>

            <div>
                <h3 class="white mt-3">Ultimos Lançamentos</h3>
                <div style="height:216px;" class="row col-lg-12 carousel pull-left">
                    <?php require_once 'loaders/home-loader.php'; ?>
                </div>
            </div>

        </div>
    </div>

    <!--<div class="bodyVdd">
        <section class="ml-4">
            <h5 class="white">Projetos</h5>
                
            <div class="carousel">
                <div class="carouselItem"><img src="./imagens/deathnotetop.jpg"></div>
            </div>
        </section>

        <section class="ml-4">
            <h5 class="white">Em breve</h5>

            <div class="carousel">
                <div class="carouselItem"><img src="./imagens/deathnotetop.jpg"></div>
                <div class="carouselItem"><img src="./imagens/deathnotetop.jpg"></div>
                <div class="carouselItem"><img src="./imagens/deathnotetop.jpg"></div>
                <div class="carouselItem"><img src="./imagens/deathnotetop.jpg"></div>
                <div class="carouselItem"><img src="./imagens/deathnotetop.jpg"></div>
            </div>
        </section>
    </div> -->
</body>

<?php require_once 'templates/footer.php';?>
</html>