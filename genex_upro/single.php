<?php get_header(); ?>

<?php 
$blog_id = 333;
$post_id = get_the_ID();
$author_id = get_post_field('post_author', $post_id);
$first_name = get_the_author_meta('first_name', $author_id);
$last_name = get_the_author_meta('last_name', $author_id);
?>

<section class="text-default">
	<div class="content-width">
		<ul class="breadcrumb">
			<li><a href="<?php the_permalink($blog_id) ?>"><img src="<?= get_stylesheet_directory_uri() ?>/img/icon-12.svg" alt=""><?php _e('View all blogs', 'Genex') ?></a></li>
		</ul>
		<div class="content">
			<h1><?php the_title() ?></h1>
			<div class="info">
				<p><?php _e('Published:', 'Genex') ?> <?= get_the_date() ?></p>

				<?php if ($first_name || $last_name): ?>
					<p><?php _e('Author:', 'Genex') ?> <?php echo get_the_author_meta('first_name', $author_id); echo get_the_author_meta('last_name', $author_id); ?></p>
				<?php endif ?>
				
			</div>

			<?php if (has_post_thumbnail()): ?>
				<figure>
					<?php the_post_thumbnail('full') ?>
				</figure>
			<?php endif ?>
			
			<?php the_content() ?>

			<div class="link-copy">
				<a href="#"><img src="<?= get_stylesheet_directory_uri() ?>/img/icon-13.svg" alt=""><?php _e('Share Blog:', 'Genex') ?></a>
				<ul class="menu-link">
					<li class="copy"><a href="<?= get_permalink() ?>"><img src="<?= get_stylesheet_directory_uri() ?>/img/icon-14.svg" alt=""><?php _e('Copy link:', 'Genex') ?></a></li>
					<li><a href="https://twitter.com/intent/tweet?url=<?= get_permalink() ?>"><img src="<?= get_stylesheet_directory_uri() ?>/img/icon-15.svg" alt=""><?php _e('Share on Twitter:', 'Genex') ?></a></li>
					<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?= get_permalink() ?>"><img src="<?= get_stylesheet_directory_uri() ?>/img/icon-16.svg" alt=""><?php _e('Share on Facebook:', 'Genex') ?></a></li>
					<li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?= get_permalink() ?>"><img src="<?= get_stylesheet_directory_uri() ?>/img/icon-17.svg" alt=""><?php _e('Share on LinkedIn:', 'Genex') ?></a></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<?php 
$args = array(
	'post_type' => 'post', 
	'posts_per_page' => -1,
	'post__not_in' => array($post_id),
	'paged' => get_query_var('paged')
);
$wp_query = new WP_Query($args);
if($wp_query->have_posts()): 
	?>

	<section class="blog blog-shadow">
		<div class="content-width">
			<div class="top">
				<h2><?php _e('Related Blogs', 'Genex') ?></h2>
				<div class="link">
					<a href="<?php the_permalink($blog_id) ?>"><?php _e('View all', 'Genex') ?></a>
				</div>
			</div>
			<div class="content">

				<?php while ($wp_query->have_posts()): $wp_query->the_post(); ?>
					<?php get_template_part('parts/content', 'post') ?>
				<?php endwhile; ?>

			</div>
		</div>
	</section>

	<?php 
endif;
wp_reset_query(); 
?>

<?php get_footer(); ?>