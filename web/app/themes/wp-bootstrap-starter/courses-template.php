<?php
/**
* Template Name: Courses list
 */

get_header(); ?>

 <section id="" class="content-area col-lg-3 col-md-6 col-sm-12">
    <?php get_template_part( 'template-parts/course-tags-form', 'taxonomy' ); ?>       
</section>

<section id="primary" class="content-area col-lg-9 col-md-6 col-sm-12">
		<div id="main" class="site-main" role="main">
        <?php get_template_part( 'template-parts/courses-list', get_post_format()); ?>	        
		</div><!-- #main -->
	</section><!-- #primary -->

  

<?php
get_footer();