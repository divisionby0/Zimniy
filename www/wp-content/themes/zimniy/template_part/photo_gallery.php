<?php
/**
 * The template part for displaying template part
 *
 * @package WordPress
 * @subpackage zimniy
 */
?>

<!-- begin photo -->
<section id="photo">
    <div class="container">
        <div class="text-center tittle">
            <h2>фотогалерея</h2>
        </div>

        <?php
        new Calendar();
        ?>
        

        <?php
            $imagesGetter = new GetImages();
            $images = $imagesGetter->execute();
            new GalleryView($images);
        ?>
</section>

<!-- end photo -->
