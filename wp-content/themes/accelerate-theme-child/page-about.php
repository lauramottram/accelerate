<?php
/**
 * The template for displaying About page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
        <div class="about-intro">
          <h2><?php the_title(); ?></h2>
          <p>We take pride in our clients and the content we create for them.</p>
          <p>Here's a brief overview of our offered services.</p>
        </div>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->

  <nav id="navigation" class="container about-button">
      <span>Interested in working with us?</span>
     <button type="button" class="button "><a href="accelerate/contact"> Contact Us</a></button>
     </a></div>
  </nav>

<?php get_footer(); ?>
