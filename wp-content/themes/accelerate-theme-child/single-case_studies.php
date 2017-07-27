<?php
/**
 * The template for displaying case studies
 *
 *
 * @package WordPress
 * @subpackage Accelerate_Theme
 * @since Accelerate Theme 1.1
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<article class="case-study">

				<aside class="case-study-sidebar">
  <h2>MailChimp Campaign</h2>
  <h5>Content Strategy, Design & Development</h5>
  <h6>Client: MailChimp</h6>

  <p>Here is some copy about what I did. Nothing to see here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin congue consequat enim, et pellentesque felis sollicitudin ac. Aenean nisi augue, semper ac ex non, imperdiet consequat turpis. Vestibulum velit tortor, varius a leo sed, eleifend ultrices purus. Duis porttitor felis vel leo efficitur tristique. Phasellus tellus est, auctor vel est dapibus, cursus lacinia metus. In nec orci vel lectus tempus lacinia. Etiam id erat nec turpis bibendum facilisis at et erat. Curabitur commodo id nisl at fermentum. Cras commodo sollicitudin sodales. Vivamus faucibus leo neque, sit amet ullamcorper nisl fermentum nec.</p>

  



</aside>

<div class="case-study-images">

	<img src="http://localhost/accelerate/wp-content/uploads/2017/07/mc-thumbnail-1.png" alt="" width="608" height="448" class="alignnone size-full wp-image-47343" />

	<img src="http://localhost/accelerate/wp-content/uploads/2017/07/mc-thumbnail-2.png" alt="" width="606" height="817" class="alignnone size-full wp-image-47344" />

	<img src="http://localhost/accelerate/wp-content/uploads/2017/07/mc-thumbnail-3.png" alt="" width="606" height="1211" class="alignnone size-full wp-image-47345" />

</div>
					<?php the_content(); ?>
				</article>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>