<?php get_header(); ?>
<body id="category">

<section id="primary" class="content-area">
	<div id="content" class="site-content" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="archive-header">
				<?php include ("navigation.php"); ?>

				<h1 class="archive-title"><?php echo single_cat_title( '', false ) ; ?></h1>
 				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :	?>
						<div class="taxonomy-description"><?php echo $term_description?></div><?php
					endif;
				?>
			</header><!-- .archive-header -->
			<div class="row noMargin galleryPostContentContainer">
				<div class="col-md-2 emptyColumn"></div>
				<div class="col-md-8 galleryPostContainer">

				<?php
						// we add this, to show all posts in our 
						// Glossary sorted alphabetically
						$args = array( 'posts_per_page' => -1, 'orderby'=> 'title', 'order' => 'ASC', 'category'=> $cat );
						$alphabeticalPosts = get_posts( $args );
						//loop
						foreach( $alphabeticalPosts as $post ) :?>
							<div class="col-md-3 col sm-4 col-xs-12 galleryPost">
							<?php setup_postdata($post);
								if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
											<figure><a href="<?php echo get_permalink (get_the_ID())?>"><img src="<?php echo the_post_thumbnail_url(); ?>"></a></figure>
								<?php } ?>
										<!-- <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> -->
										<h5 id="postTitle"><a href="<?php echo get_permalink (get_the_ID())?>"><?php echo get_the_title();?></a></h5>
												</div>
									<?php endforeach; 
									?>

								<?php else :
											// If no content, include the "No posts found" template.
											//get_template_part( 'content', 'none' );
										endif;
								?>

				</div><!-- #galleryPostContainer -->
				<div class="col-md-2 emptyColumn"></div>
			</div> <!-- #row -->
		</div><!-- #content -->
	</section><!-- #primary -->

<footer>
	<?php get_footer(); ?>
</footer>

</body>
</html>