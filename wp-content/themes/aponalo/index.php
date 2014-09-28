<?php get_header(); ?>

<!-- Top bar start here -->
<div class="uk-container uk-container-center" style="margin-top:-20px;">
    <div class="uk-grid">
        <!-- Top left-bar start here -->
        <div class="uk-width-2-3">
            <div class="uk-grid">
                <div class="uk-width-1-2">
                   <article data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true}" class="uk-article">
						<?php 
						$args = array(
							'posts_per_page'   => 1,
							'cat'         	   => 2,
							'orderby'          => 'post_date',
							'order'            => 'DESC',
							'post_type'        => 'post',
							'post_status'      => 'publish',
							'suppress_filters' => true );
						query_posts($args);
						while(have_posts()) : the_post(); ?>
						<?php echo the_post_thumbnail('large'); ?>
						<p class="uk-article-lead"><a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
						<p><?php the_excerpt(); ?></p>
						<?php endwhile; wp_reset_query(); ?>
                    </article>
					
                    <article data-uk-scrollspy="{cls:'uk-animation-slide-top', repeat: true}" class="uk-article">
                        <?php 
						$args = array(
							'posts_per_page'   => 2,
							'cat'         	   => 2,
							'offset'		   => 1,
							'orderby'          => 'post_date',
							'order'            => 'DESC',
							'post_type'        => 'post',
							'post_status'      => 'publish',
							'suppress_filters' => true );
						query_posts($args);
						while(have_posts()) : the_post(); ?>
						<p class="uk-article-lead"><a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
						<p><span style="float:left;margin-right:7px;"><?php echo the_post_thumbnail(); ?></span>
						<?php the_excerpt(); ?></p><br/>
						<?php endwhile; wp_reset_query(); ?>
                    </article>
                </div>
                <div class="uk-width-1-2">
                    <article data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true}" class="uk-article">
                        <?php 
						$args = array(
							'posts_per_page'   => 4,
							'cat'         	   => 2,
							'offset'		   => 3,
							'orderby'          => 'post_date',
							'order'            => 'DESC',
							'post_type'        => 'post',
							'post_status'      => 'publish',
							'suppress_filters' => true );
						query_posts($args);
						while(have_posts()) : the_post(); ?>
						<p class="uk-article-lead"><a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
						<p><span style="float:left;margin-right:7px;"><?php echo the_post_thumbnail(); ?></span>
						<?php the_excerpt(); ?></p><br/><hr/>
						<?php endwhile; wp_reset_query(); ?>
                    </article>
                </div>
            </div>
        </div><!-- Top left-bar end here -->

        <!-- Top right-bar start here -->
        <div data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}" class="uk-width-1-3">
			
			<p><a href = "#"><img class = "img-responsive" src = "<?php bloginfo('template_url'); ?>/images/add.jpg"></a></p>
			<p><a href = "#"><img class = "img-responsive" src = "<?php bloginfo('template_url'); ?>/images/add.jpg"></a></p>
			<p><a href = "#"><img class = "img-responsive" src = "<?php bloginfo('template_url'); ?>/images/add.jpg"></a></p>

            <p class="title">সাম্প্রতিক খবর<p>
            <ul class="uk-list uk-list-striped">
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
        </div><!-- Top right-bar end here -->
    </div>
</div><!-- Top bar end here -->


<!-- National Section Start here -->
<div class="uk-container uk-container-center" id="dept">
    <p class="title"><?php echo get_cat_name(3);?><p>
    <div class="uk-grid">
        <div class="uk-width-1-3">
            <article data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true}" class="uk-article">
                <?php 
				$args = array(
					'posts_per_page'   => 1,
					'cat'         	   => 3,
					'orderby'          => 'post_date',
					'order'            => 'DESC',
					'post_type'        => 'post',
					'post_status'      => 'publish',
					'suppress_filters' => true );
				query_posts($args);
				while(have_posts()) : the_post(); ?>
				<?php echo the_post_thumbnail('large'); ?>
				<p class="uk-article-lead"><a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
				<p><?php the_excerpt(); ?></p>
				<?php endwhile; wp_reset_query(); ?>
            </article>
        </div>
        <div class="uk-width-1-3">
            <article data-uk-scrollspy="{cls:'uk-animation-slide-top', repeat: true}" class="uk-article">
                <?php 
				$args = array(
					'posts_per_page'   => 2,
					'cat'         	   => 3,
					'offset'		   => 1,
					'orderby'          => 'post_date',
					'order'            => 'DESC',
					'post_type'        => 'post',
					'post_status'      => 'publish',
					'suppress_filters' => true );
				query_posts($args);
				while(have_posts()) : the_post(); ?>
				<p class="uk-article-lead"><a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
				<p><span style="float:left;margin-right:7px;"><?php echo the_post_thumbnail(); ?></span>
				<?php the_excerpt(); ?></p><br/><hr/>
				<?php endwhile; wp_reset_query(); ?>
            </article>
        </div>
        <div class="uk-width-1-3">
            <article data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true}" class="uk-article">
                <?php 
				$args = array(
					'posts_per_page'   => 2,
					'cat'         	   => 3,
					'offset'		   => 3,
					'orderby'          => 'post_date',
					'order'            => 'DESC',
					'post_type'        => 'post',
					'post_status'      => 'publish',
					'suppress_filters' => true );
				query_posts($args);
				while(have_posts()) : the_post(); ?>
				<p class="uk-article-lead"><a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
				<p><span style="float:left;margin-right:7px;"><?php echo the_post_thumbnail(); ?></span>
				<?php the_excerpt(); ?></p><br/><hr/>
				<?php endwhile; wp_reset_query(); ?>
            </article>
        </div>
    </div>
</div><!-- National Section end here -->



<!-- World Section Start here -->
<div class="uk-container uk-container-center" id="dept">
    <p class="title"><?php echo get_cat_name(4);?><p>
    <div class="uk-grid">
        <div class="uk-width-1-3">
            <article data-uk-scrollspy="{cls:'uk-animation-slide-top', repeat: true}" class="uk-article">
                <?php 
				$args = array(
					'posts_per_page'   => 1,
					'cat'         	   => 4,
					'orderby'          => 'post_date',
					'order'            => 'DESC',
					'post_type'        => 'post',
					'post_status'      => 'publish',
					'suppress_filters' => true );
				query_posts($args);
				while(have_posts()) : the_post(); ?>
				<?php echo the_post_thumbnail('large'); ?>
				<p class="uk-article-lead"><a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
				<p><?php the_excerpt(); ?></p>
				<?php endwhile; wp_reset_query(); ?>
            </article>
        </div>
        <div class="uk-width-1-3">
            <article data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true}" class="uk-article">
                <?php 
				$args = array(
					'posts_per_page'   => 2,
					'cat'         	   => 4,
					'offset'		   => 1,
					'orderby'          => 'post_date',
					'order'            => 'DESC',
					'post_type'        => 'post',
					'post_status'      => 'publish',
					'suppress_filters' => true );
				query_posts($args);
				while(have_posts()) : the_post(); ?>
				<p class="uk-article-lead"><a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
				<p><span style="float:left;margin-right:7px;"><?php echo the_post_thumbnail(); ?></span>
				<?php the_excerpt(); ?></p><br/><hr/>
				<?php endwhile; wp_reset_query(); ?>
            </article>
        </div>
        <div class="uk-width-1-3">
            <article data-uk-scrollspy="{cls:'uk-animation-slide-top', repeat: true}" class="uk-article">
                <?php 
				$args = array(
					'posts_per_page'   => 2,
					'cat'         	   => 4,
					'offset'		   => 3,
					'orderby'          => 'post_date',
					'order'            => 'DESC',
					'post_type'        => 'post',
					'post_status'      => 'publish',
					'suppress_filters' => true );
				query_posts($args);
				while(have_posts()) : the_post(); ?>
				<p class="uk-article-lead"><a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
				<p><span style="float:left;margin-right:7px;"><?php echo the_post_thumbnail(); ?></span>
				<?php the_excerpt(); ?></p><br/><hr/>
				<?php endwhile; wp_reset_query(); ?>
            </article>
        </div>
    </div>
</div><!-- World Section end here -->

<br/>

<!-- Politics Section Start here -->
<div class="uk-container uk-container-center" id="dept">
<p class="title"><?php echo get_cat_name(8);?><p>
<div class="uk-grid" data-uk-grid-margin>
	
		<?php 
		$args = array(
			'posts_per_page'   => 7,
			'cat'         	   => 8,
			'orderby'          => 'post_date',
			'order'            => 'DESC',
			'post_type'        => 'post',
			'post_status'      => 'publish',
			'suppress_filters' => true );
		query_posts($args);
		while(have_posts()) : the_post(); ?>
		<div data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}" class="uk-width-1-2 uk-width-medium-1-3 uk-width-large-1-6">
		<a class="uk-overlay" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php echo the_post_thumbnail(); ?>
		    <div class="uk-overlay-area">
				<div class="uk-overlay-area-content">বিস্তারিত</div>
			</div>
		</a>
		</div>
		<?php endwhile; wp_reset_query(); ?>
</div>
</div><!-- Politics Section end here -->
<br/>

<!-- Picture Section Start here -->
<div class="uk-container uk-container-center" id="dept">
	<p class="title">ছবিঘর<p>
	<div class="uk-grid">
    <div class="uk-width-7-10">
		<div id="myCarousel" class="carousel slide">
			<div class="carousel-inner">
				<?php 
					$the_query = new WP_Query(array(
					'posts_per_page' => 1 
				)); 
			while ( $the_query->have_posts() ) : 
			$the_query->the_post();
			?>
			<div class="item active">
				<div class="uk-thumbnail-expand"><?php the_post_thumbnail('large');?></div>
				<div class="carousel-caption">
					<p class="uk-article-lead"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></p>
				</div>
			</div><!-- item active -->
				<?php 
					endwhile; 
					wp_reset_postdata();
				?>
				<?php 
					$the_query = new WP_Query(array(
					'posts_per_page' => 5, 
					'offset' => 1 
					)); 
					while ( $the_query->have_posts() ) : 
					$the_query->the_post();
				?>
				<div class="item">
					<div class="uk-thumbnail-expand"><?php the_post_thumbnail('large');?></div>
					<div class="carousel-caption">
						<p class="uk-article-lead"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></p>
					</div>
				</div><!-- item -->
				<?php 
					endwhile; 
					wp_reset_postdata();
				?>
			</div><!-- carousel-inner -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
		</div><!-- #myCarousel -->
		
		<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('.carousel').carousel({
				interval: 3000	
			})
		});
		</script>		
	</div>
		<div class="uk-width-3-10"></div>
	</div>
</div><!-- Picture Section End here -->



<!-- Sports Section start here -->
<div class="tm-section tm-section-color-white">
    <div class="uk-container uk-container-center uk-text-center">
        <hr/>
        <h2 class="tm-margin-large-bottom title"><strong><?php echo get_cat_name(7);?></strong></h2>
        <div class="uk-grid tm-grid-margin-large" data-uk-grid-match="{target:'.uk-panel'}" data-uk-grid-margin>
			<?php 
			$args = array(
				'posts_per_page'   => 4,
				'cat'         	   => 7,
				'orderby'          => 'post_date',
				'order'            => 'DESC',
				'post_type'        => 'post',
				'post_status'      => 'publish',
				'suppress_filters' => true );
			query_posts($args);
			while(have_posts()) : the_post(); ?>
			<div class="uk-width-medium-1-4">
				<div data-uk-scrollspy="{cls:'uk-animation-slide-top', repeat: true}"><?php echo the_post_thumbnail(); ?></div>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<p><?php the_excerpt(); ?></p>
			</div>
			<?php endwhile; wp_reset_query(); ?>
        </div>
    </div>
</div><!-- Sports Section end here -->
<br/><br/>

<?php get_footer(); ?>