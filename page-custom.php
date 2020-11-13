<?php get_header(); ?>
<section>

<h1 style="color:blue;">Ma page customisée<:/h1>
<!-- The Loop (La boucle)-->

<?php if (have_posts()):
 while (have_posts()):
   the_post();?>

   <article>
   <h2><?php the_title();?></h2>
   <div><?php the_content();?></div>

   </article>
   <?php endwhile; else : ?> <p>Déso</p>
   <?php endif;?>
   </section>
    <?php get_footer(); ?>
