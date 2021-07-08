<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Murasaki Lau</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/lightbox.css"> <!-- LIGHTBOX by Lokesh Dhakar https://github.com/lokesh/lightbox2 -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/> <!-- Font Awesome Icons -->
    </head>
    <body>
        <main>
        <header id="header">
            <nav>
                <div class="container">
                    <div class="logo">
                        <a href="index.html"><img src="./img/logo.png" alt=""></a>
                    </div>

                    <div class="links">
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="#">Pricing</a>
                            </li>
                            <li>
                                <a href="#">Specification</a>
                            </li>
                            <li>
                                <a href="index.html#hireme" class="active">Hire Me</a>
                            </li>
                        </ul>
                    </div>

                    <div class="hamburger-menu">
                        <div class="bar"></div>
                    </div>
                </div>
            </nav>
        </header>

        <section class="portraits">
            <div class="container">
                <div class="section-header">
                    <h3 class="title" data-title="My Previous Works">Portraits</h3>
                </div>
                <div class="grid portrait-gallery">
                    <?php
                        $dir_name = "img/portfolio/portraits/";
                        $images = glob($dir_name."*.png");
                        natsort($images);
                        $rev_images = array_reverse($images, false);
                        $sliced_images = array_slice($rev_images, 0, 6);

                        foreach($sliced_images as $image) {
                            echo '
                                <div class="grid-item">
                                    <div class="gallery-image">
                                        <a href="'.$image.'" data-lightbox="portraits">
                                        <img src="'.$image.'"alt=""></a>
                                    </div>
                                </div>
                                ';
                        }
                    ?>
                </div>
                <div class="section-footer">
                    <a class="loadmore btn">Load More</a>
                </div>
            </div>
        </section>

        </main>

        <footer class="footer">
            <div class="container">
                <div class="grid-3">
                    <div class="grid-3-col footer-about">
                        <h4 class="title-sm">About</h4>
                        <p class="text">
                            I love creating characters for my pets, and I would love to do the same for
                            you. You can wear them, turn them into stickers, and frame them for display.
                        </p>
                    </div>
    
                    <div class="grid-3-col footer-links">
                        <h3 class="title-sm">Links</h3>
                        <ul>
                            <li><a href="index.html#header">Home</a></li>
                            <li><a href="index.html#services">Services</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">Portfolio</a></li>
                        </ul>
                    </div>
    
                    <div class="grid-3-col footer-links">
                        <h3 class="title-sm">Services</h3>
                        <ul>
                            <li><a href="portraits.php#header">Portraits</a></li>
                            <li><a href="#">Stickers</a></li>
                            <li><a href="#">Clothing</a></li>
                            <li><a href="#">Framing</a></li>
                        </ul>
                    </div>
                </div>

                <div class="bottom-footer">
                    <div class="copyright">
                        <p class="text">
                            &copy; 2021 <span>MurasakiLau.com</span> All rights Reserved
                        </p>
                    </div>
                    
                    <div class="followme-wrap">
                        <div class="followme">
                            <h3>Follow me</h3>
                            <span class="footer-line"></span>
                            <div class="social-media">
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-weixin"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> <!-- jQuery -->
        <script src="./js/isotope.pkgd.min.js"></script> <!-- Isotope https://github.com/metafizzy/isotope -->
        <script src="./js/lightbox.js"></script> <!-- LIGHTBOX by Lokesh Dhakar https://github.com/lokesh/lightbox2 -->
        <script src="./js/imagesloaded.pkgd.min.js"></script> <!-- Images Loaded https://github.com/desandro/imagesloaded -->
        <script src="./js/app.js"></script> 
    </body>
</html>