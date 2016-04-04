<?php

/** @global $ospn \OSPN\OSPN_Plugin */
global $ospn;

get_header();
?>
<div class="full-width">
    <div id="primary" class="content-area">
        <main id="main" class="site-main podcasts-column" role="main">
            <?php while ($ospn->have_podcasts()) : $podcast = $ospn->the_podcast(); ?>
            <div class="podcast-box">
                <a href="<?php $podcast->the_permalink(); ?>" class="click-zone"></a>
                <div class="podcast-logo">
                    <img src="<?php $podcast->the_logo(); ?>">
                </div>
                <div class="podcast-name"><?php $podcast->the_name(); ?></div>
                <div class="podcast-tagline"><?php $podcast->the_tagline(); ?></div>
            </div>
            <?php endwhile; ?>
        </main><!-- #main -->
    </div><!-- #primary -->
</div>

<?php get_footer(); ?>
