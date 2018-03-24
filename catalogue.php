<?php
const PAGE_NAME = 'Catalogue';
require_once('views/page_top.php');
require_once 'db/data.php';
?>
    <main>
        <h1>Catalogue</h1>
        <div>

                <?php foreach ($product as $id => $item) { ?>
                    <h2><?= $item[ART_MODEL] ?></h2>
                    <img src="images/<?= $item[ART_IMG] ?>" alt="photo">
                <ul>
                    <li><?= $item[ART_YEAR] ?>"</li>
                    <li><?= $item[ART_KM] ?>"</li>
                    <li><?= $item[ART_PRICE] ?>"</li>
                </ul>
                <?php } ?>

        </div>


               <!----- <form action="/action_page.php" method="get">
                    <fieldset>
                        <legend>Choisissez vos options:</legend>
                        <input type="checkbox" name="sieges" value="Bike">Sieges chaufants<br>
                        <input type="checkbox" name="aircond" value="Car">Air conditioner<br>
                        <input type="checkbox" name="vitres" value="Car">Vitres electriques<br>
                        <input type="checkbox" name="awd" value="Car">AWD<br>
                    </fieldset>
                    <input type="submit" value="Sommaire et paiements">
                </form>
            </div>
            <div class="col-4">
                <h2>Mercedes</h2>
                <figure>
                    <img src="images/mb2.jpg" alt="pagedetail2"></a>
                    <figcaption>Á partir de 45000$</figcaption>
                </figure>
                <form action="/action_page.php" method="get">
                    <fieldset>
                        <legend>Choisissez vos options:</legend>
                        <input type="checkbox" name="volant" value="Bike">Volant chaufants<br>
                        <input type="checkbox" name="aircond" value="Car">Air conditioner<br>
                        <input type="checkbox" name="vitres" value="Car">Vitres electriques<br>
                        <input type="checkbox" name="awd" value="Car">AWD<br>
                    </fieldset>
                    <input type="submit" value="Sommaire et paiements">
                </form>
            </div>
            <div class="col-4">
                <h2>Mercedes</h2>
                <figure>
                    <img src="images/mb3.jpg" alt="pagedetail3"></a>
                    <figcaption>Á partir de 55000$</figcaption>
                </figure>
                <form action="/action_page.php" method="get">
                    <fieldset>
                        <legend>Choisissez vos options:</legend>
                        <input type="checkbox" name="volant" value="Bike">Volant chaufants<br>
                        <input type="checkbox" name="aircond" value="Car">Air conditioner<br>
                        <input type="checkbox" name="vitres" value="Car">Vitres electriques<br>
                        <input type="checkbox" name="awd" value="Car">AWD<br>
                    </fieldset>
                    <input type="submit" value="Sommaire et paiements">
                </form>
            </div>
        </div>
        <div class="row produtos2">
            <div class="col-4">
                <h2>Mercedes</h2>
                <figure>
                    <img src="images/mb4.jpg" alt="pagedetail1"></a>
                    <figcaption>Á partir de 60000$</figcaption>
                </figure>
                <form action="/action_page.php" method="get">
                    <fieldset>
                        <legend>Choisissez vos options:</legend>
                        <input type="checkbox" name="sieges" value="Bike">Sieges chaufants<br>
                        <input type="checkbox" name="aircond" value="Car">Air conditioner<br>
                        <input type="checkbox" name="vitres" value="Car">Vitres electriques<br>
                        <input type="checkbox" name="awd" value="Car">AWD<br>
                    </fieldset>
                    <input type="submit" value="Sommaire et paiements">
                </form>
            </div>
            <div class="col-4">
                <h2>Mercedes</h2>
                <figure>
                    <img src="images/mb5.jpg" alt="pagedetail2"></a>
                    <figcaption>Á partir de 75000$</figcaption>
                </figure>
                <form action="/action_page.php" method="get">
                    <fieldset>
                        <legend>Choisissez vos options:</legend>
                        <input type="checkbox" name="volant" value="Bike">Volant chaufants<br>
                        <input type="checkbox" name="aircond" value="Car">Air conditioner<br>
                        <input type="checkbox" name="vitres" value="Car">Vitres electriques<br>
                        <input type="checkbox" name="awd" value="Car">AWD<br>
                    </fieldset>
                    <input type="submit" value="Sommaire et paiements">
                </form>
            </div>
            <div class="col-4">
                <h2>Mercedes</h2>
                <figure>
                    <img src="images/mb6.jpg" alt="pagedetail3"></a>
                    <figcaption>Á partir de 80000$</figcaption>
                </figure>
                <form action="/action_page.php" method="get">
                    <fieldset>
                        <legend>Choisissez vos options:</legend>
                        <input type="checkbox" name="sieges" value="Bike">Sieges chaufants<br>
                        <input type="checkbox" name="aircond" value="Car">Air conditioner<br>
                        <input type="checkbox" name="vitres" value="Car">Vitres electriques<br>
                        <input type="checkbox" name="awd" value="Car">AWD<br>
                    </fieldset>
                    <input type="submit" value="Sommaire et paiements">
                </form>
            </div>
        </div>
    </main>--->

<?php
require_once('views/page_bottom.php');