<?php
const PAGE_NAME = 'Catalogue';
require_once  'views/page_top.php';
require_once 'db/data.php';
require_once 'views/sidemenu.php';
?>


    <h1>Catalogue</h1>
    <main>
        <div class="row produtos2">
                <?php foreach ($product as $id => $item) {
                    if(array_key_exists('ART_CAT', $_GET)){
                        if($_GET['ART_CAT'] === $item[ART_CAT]){ ?>
            <div class="col-4 cat1">
                <h2><?= $item[ART_MODEL] ?></h2>
                <img src="images/<?= $item[ART_IMG] ?>" alt="photo">
                <ul>
                    <li><?= ART_YEAR.$item[ART_YEAR] ?></li>
                    <li><?= ART_KM.$item[ART_KM] ?></li>
                    <li><?= ART_PRICE.$item[ART_PRICE] ?></li>
                </ul>
                <form method="post" id="form3" class="">
                    <input type="hidden" name="item_id" value="<?= $id ?>" />
                    <button type="submit" class="button" name="" value="">Ajouter à votre liste d'envies
                    </button>
                </form>
            </div>
                <?php }
                    }
                    else { ?>
            <div class="col-4 cat1">
                <h2><?= $item[ART_MODEL] ?></h2>
                <img src="images/<?= $item[ART_IMG] ?>" alt="photo">
                <ul>
                    <li><?= ART_YEAR.$item[ART_YEAR] ?></li>
                    <li><?= ART_KM.$item[ART_KM] ?></li>
                    <li><?= ART_PRICE.$item[ART_PRICE]?></li>
                </ul>
                <form method="post" class="">
                    <input type="hidden" name="item_id" value="<?= $id ?>" />
                    <button type="submit" class="button"name="<?= CART_OP ?>" value="<?= CART_OP_ADD ?>">Ajouter à votre liste d'envies
                    </button>
                </form>
            </div>
                 <?php  } }?>
        </div>
    </main>

<?php require_once dirname(__FILE__) . "/views/page_bottom.php";