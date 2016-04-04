<?php

/** @global $ospn \OSPN\OSPN_Plugin */
global $ospn;

get_header();
?>
    <div class="full-width">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
<?php
$podcast = $ospn->the_podcast();
?>
                <article class="podcast">
                    <aside>
                        <a name="<?php $podcast->the_name(); ?>"></a>
                        <img src="<?php $podcast->the_logo(); ?>" class="podcast-logo podcast-logo-main" width="125px" height="125px">
                    </aside>
                    <section>
                        <h1><?php $podcast->the_name(); ?></h1>
                        <h3><a class="host-link" href="<?php $podcast->the_url(); ?>"><?php $podcast->the_url(); ?></a></h3>
                        <section class="socials">
                            <?php while ($podcast->have_contacts()): $contact = $podcast->the_contact(); ?><a class="<?php $contact->the_type(); ?>" href="<?php $contact->the_url(); ?>" alt="<?php $contact->the_name() ?>" title="<?php $contact->the_name(); ?>">&nbsp;</a><?php endwhile; ?>
                        </section>
                    </section>
                    <section class="description">
                        <?php $podcast->the_description(); ?>
                    </section>
                    <section class="hosts">
                        <h3><?php $podcast->the_hosts_title(); ?></h3>
                        <?php while ($podcast->have_hosts()): $host = $podcast->the_host(); ?>
                            <a href="<?php $host->the_permalink(); ?>" alt="<?php $host->the_name(); ?>" title="<?php $host->the_name(); ?>"><?php $host->the_avatar(); ?></a>
                        <?php endwhile; ?>
                    </section>
                </article>
            </main><!-- #main -->
        </div><!-- #primary -->
    </div>

<?php get_footer(); ?>
