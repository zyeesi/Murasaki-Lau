<?php
$dir_name = "img/portfolio/portraits/";
$images = glob($dir_name."*.png");
natsort($images);
$rev_images = array_reverse($images, false);

$page = $_REQUEST["page"] * 6;

// Send in 6 img at a time, starting from current page
$sliced_images = array_slice($rev_images, $page, 6);

foreach($sliced_images as $image) {
    $output .= '
        <div class="grid-item">
            <div class="gallery-image">
                <a href="'.$image.'" data-lightbox="portraits">
                <img src="'.$image.'"alt=""></a>
            </div>
        </div>
        ';
}

echo $output;
?>