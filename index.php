<?php
const PAGE_NAME = 'Accueil';
require_once('views/page_top.php');
?>


        <div class="container">
            <div class="banner">
                <div class="video-container">
                    <video class="video" muted autoplay loop>
                        <source src="videos/car.mp4" type="video/mp4">
                        <source src="videos/car.webm" type="video/webm">
                    </video>
                    <div class="video-mask"></div>
                </div>
            </div>
        </div>
    <main>
        <h1>AUTO PLUS</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>

        <div class="row produtos">
            <div class="col-4">
                <h2>Berline</h2>
                <a href="catalogueb.php"><img src="images/berline.jpg" alt="Berline"></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

            </div>
            <div class="col-4" >
                <h2>Hatchback</h2>

                <a href="catalogueh.php"><img src="images/v-hatchback.jpg" alt="Hatchback"></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="col-4" >
                <h2>VUS</h2>

                <a href="cataloguev.php"><img src="images/v-vus.jpg" alt="VUS"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></a>

            </div>
        </div>
    </main>

<?php require_once('views/page_bottom.php'); ?>