<?php require_once 'templates/header.php'; ?>

<body>
    <div class="areaProjetos">
        <div class="row ml-3 mt-4">
            <h3 class="white">Covers</h3>
            <div class="col-md-12">
                <div style="height:216px;" class="row col-lg-12 carousel pull-left">
                <?php require_once 'loaders/cover-loader.php'; ?>
                </div>
            </div>
        </div>
        
        <div class="row ml-3 mt-4">
            <h3 class="white">Cenas</h3>
            <div class="col-md-12">
                <div style="height:216px;" class="row col-lg-12 carousel pull-left">
                    <?php require_once 'loaders/cena-loader.php'; ?>

                </div>
            </div>
        </div>

        <div class="row ml-3 mt-4">
            <h3 class="white">Episódios Completos</h3>
            <div class="col-md-12">
                <div style="height:216px;" class="row col-lg-12 carousel pull-left">
                <?php require_once 'loaders/episodio-loader.php'; ?>

                </div>
            </div>
        </div>
    </div>
    
</body>

<?php require_once 'templates/footer.php'; ?>