
<?php get_header(); ?>
        <section>

    <p>les pierres</p>
<!-- The Loop (la boucle)-->
<?php if (have_posts()):
    while (have_posts()):
        the_post();?>
        <article>
            <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
            <p><?php the_time();?></p>
            <p><?php the_author_posts_link();?></p>
            <div><?php the_content();?></div>
            <p><?php comments_number();?></p>
        </article>
        <?php endwhile; else : ?> <p>Désolé, bitch</p>
    <?php endif;?>
</section>
    <?php get_footer(); ?>
