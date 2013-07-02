<?php
/*
Template Name: Home
*/
get_header();?>
			<div class="content" role="main">
				<div class="row">
					<article id="post-<?php the_ID(); ?>" <?php post_class('large-8 columns'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						<header class="article-header">
							<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
						</header> <!-- Header -->
						<section itemprop="articleBody">
							<?php the_content(); ?>
						</section> <!-- Section -->
						<footer></footer> <!-- Footer -->
					</article> <!-- Article -->
				</div> <!-- Row -->
			</div><!-- Content -->
<?php get_footer();?>