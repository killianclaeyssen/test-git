<?php
/**
* Template Name: bleu
*/

 get_header() ;
  ?>
<section style="background-color:blue">


	<h2> Bonjour </h2>


<!-- the loop (la boucle)-->
<!—The Loop (la boucle) -->
<?php if( have_posts() ) :
 	while ( have_posts() ) :
  				 the_post(); ?>
   					<article>
   						<p> <?php the_time();?> </p>
   						<p> <?php the_author_posts_link();?> </p>
   						<h2>
   							<?php the_title(); ?>
   						</h2>
   							<div>
   								<?php the_content(); ?>
   							</div>
   					 </article>
   		 <?php endwhile; endif; ?>

       </section>

       <?php get_footer();?>
