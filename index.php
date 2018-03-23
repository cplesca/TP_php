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



        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <div class="row produtos">
            <div class="col-4">
                <h2>Voiture Berline</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                <a href="catalogueb.php">Shop now<img src="images/berline.jpg" alt="Xbox one Product Photo">
                </a>
            </div>
            <div class="col-4" >
                <h2>Hatchback</h2>
                <img src="images/v-hatchback.jpg" alt="Tablet Product Photo">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                <a href="catalogueh.php">Shop now</a>
            </div>
            <div class="col-4" >
                <h2>VUS</h2>
                <img src="images/v-vus.jpg" alt="Iphone 8 Product Photo">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                <a href="cataloguev.php">Shop now</a>
            </div>
        </div>
    </main>

<?php require_once('views/page_bottom.php'); ?>