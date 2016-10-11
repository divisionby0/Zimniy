<?php
/**
 * The template part for displaying template part
 *
 * @package WordPress
 * @subpackage zimniy
 */
?>
<!-- begin poster -->

<section id="poster">
    <div class="container">
        <div class="text-center tittle">
            <h2>Афиша шоу выступления и концертов</h2>
        </div>

        <?php
        $postersGetter = new GetPosters();
        $posters = $postersGetter->execute();
        
        new PostersView($posters);
        ?>
    </div>
</section>

<!-- end poster -->