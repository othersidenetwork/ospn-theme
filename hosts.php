<?php

/** @global $ospn \OSPN\OSPN_Plugin */
global $ospn;

get_header();
?>
<div class="full-width">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <h1><?php echo __("Our hosts"); ?></h1>
            <?php while ($ospn->have_hosts()): $host = $ospn->the_host(); ?>
            <article class="host" id="<?php $host->the_nicename(); ?>">
                <aside>
                    <a name="<?php $host->the_nicename(); ?>"></a>
                    <?php $host->the_avatar(); ?>
                </aside>
                <section>
                    <h1><?php $host->the_name(); ?></h1>
                    <h3><a class="host-link" href="<?php $host->the_url(); ?>"><?php $host->the_url(); ?></a></h3>
                    <section class="socials">
                        <?php while ($host->have_contacts()): $contact = $host->the_contact(); ?><a class="<?php $contact->the_type(); ?>" href="<?php $contact->the_url(); ?>" alt="<?php $contact->the_name() ?>" title="<?php $contact->the_name(); ?>">&nbsp;</a><?php endwhile; ?>
                    </section>
                </section>
                <section class="description">
                    <?php $host->the_bio(); ?>
                </section>
                <section class="podcasts">
                    <h3>Host of :</h3>
                    <div class="logos">
                    <?php while ($host->have_podcasts()): $podcast = $host->the_podcast(); ?>
                    <a href="<?php $podcast->the_permalink(); ?>" alt="<?php $podcast->the_name(); ?>" title="<?php $podcast->the_name(); ?>"><img src="<?php $podcast->the_logo(); ?>" class="podcast-logo  podcast-logo-host"></a>
                    <?php endwhile; ?>
                    </div>
                </section>
            </article>
            <?php endwhile; ?>
        </main><!-- #main -->
    </div><!-- #primary -->
</div>
<?php get_footer(); ?>
