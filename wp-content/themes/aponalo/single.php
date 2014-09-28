<?php get_header(); ?>
<br/>
<div class="uk-container uk-container-center" style="margin-top:-40px;">
	<div class="uk-grid" data-uk-grid-margin>
		<div class="uk-width-medium-3-4">
			<article data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true}" class="uk-article">
				<?php while(have_posts()) : the_post(); ?>
					<h2><u><?php echo the_title(); ?></u></h2>
					<div class="uk-thumbnail-expand"><?php echo the_post_thumbnail('large'); ?></div>
					<p class="uk-article-meta">Written by <?php the_author_link(); ?> on <?php the_date('F j, Y'); ?></p>
					<p><?php echo the_content(); ?></p>
				<?php endwhile; wp_reset_query(); ?>
			</article>
		</div>

		<div class="uk-width-medium-1-4">
			<p class="title">সাম্প্রতিক খবর</p>
            <ul data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true}" class="uk-list uk-list-striped">
				<?php 
				$args = array(
					'posts_per_page'   => 10,
					'orderby'          => 'post_date',
					'order'            => 'DESC',
					'post_type'        => 'post',
					'post_status'      => 'publish',
					'suppress_filters' => true );
				query_posts($args);
				while(have_posts()) : the_post(); ?>
				<li>
					<a href = "<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</li>				
				<?php endwhile; wp_reset_query(); ?>
            </ul>
		</div>
	</div>
</div>


<?php get_footer(); ?>