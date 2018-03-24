<?php
const PAGE_NAME = 'Catalogue';
require_once 'views/page_top.php';
require_once 'db/data.php';
?>
    <main>
        <h1>Catalogue</h1>
        <div>

                <?php foreach ($product as $id => $item) {
                    if(array_key_exists('ART_CAT', $_GET)){ if($_GET['ART_CAT'] === $item[ART_CAT]){?>
                    <h2><?= $item[ART_MODEL] ?></h2>
                    <img src="../images/<?= $item[ART_IMG] ?>" alt="photo">
                <ul>
                    <li><?= $item[ART_YEAR] ?>"</li>
                    <li><?= $item[ART_KM] ?>"</li>
                    <li><?= $item[ART_PRICE] ?>"</li>
                </ul>
                <?php }} else { ?>
                        <h2><?= $item[ART_MODEL] ?></h2>
                        <img src="images/<?= $item[ART_IMG] ?>" alt="photo">
                        <ul>
                            <li><?= $item[ART_YEAR] ?>"</li>
                            <li><?= $item[ART_KM] ?>"</li>
                            <li><?= $item[ART_PRICE] ?>"</li>
                        </ul>
                 <?php  } }?>
        </div>


    </main>

<?php
require_once 'views/page_bottom.php';