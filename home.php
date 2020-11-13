
<?php
 get_header() ;
  ?>
<section>


	<h2> Bonjour </h2>
</section>



<?php get_footer();?>
<!-- the loop (la boucle)-->
<!—The Loop (la boucle) -->
<?php if( have_posts() ) :
 	while ( have_posts() ) :
  				 the_post(); ?>
   					<article>
   						<p> <?php the_time();?> </p>
   						<p> <?php the_author_posts_link();?> </p>
   						<h2>
   						<a href="<?php the_permalink(); ?>">
                <?php the_title();?>
              </a>
   						</h2>
   							<div>
   								<?php the_content(); ?>
   							</div>
   					 </article>
   		 <?php endwhile; endif; ?>
