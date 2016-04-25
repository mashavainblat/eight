<!---->
<!-- CAKEPOP PROJECT SHOW PAGE -->
<!---->

<?php get_header(); ?> <!-- <head></head> -->
<body id="index">
	<header>
		<?php include ("navigation.php"); ?>
	</header>
    <div class="col-md-1 emptyColumn"></div>
    <div class="col-md-10">
		<div id="main-content" class="main-content">
				<?php 
					if ( have_posts() ) : while ( have_posts() ) : the_post();
						// print_r($post);
				?>

				<h1><?php echo the_title(); ?> </h1> 

				<p class="prevPost">
					<?php
						echo previous_post_link('%link','prev', true );
					?>
				</p>
				
				<p class="nextPost">
					<?php 
						echo next_post_link('%link','next', true );
					?>
				</p>


			<?php 
				echo the_content();
			//echo get_a_title(59);
			endwhile; else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div><!-- #main-content -->
	</div>
    <div class="col-md-1 emptyColumn"></div>

	<footer>
		<?php get_footer();
		/*
		function get_a_title($id){
			$db = new PDO('mysql:host=localhost;dbname=eight;charset=utf8', 'root', 'vomm');
			$stmt = $db->prepare("SELECT title FROM wp_posts where id=?");
			$stmt->execute(array($id));
			$results = $stmt->fetchAll();
			foreach($results as $result){
				print_r($result);
			}
		}
		*/

		 ?>
	 </footer>
 </body>
 </html>