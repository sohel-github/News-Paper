<!DOCTYPE html>
<html lang="en-gb" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">	
        <title><?php wp_title('|', true, 'right'); ?> <?php if (get_query_var('paged')) { echo get_query_var('paged') . ' page'; } ?> <?php bloginfo('name'); ?></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
		<?php wp_head(); ?>
    </head>
<body>

<!-- Header start here -->
<div class="uk-container uk-container-center uk-margin-top">
	<div class="uk-grid">
		<div class="uk-width-3-10">
			<a href="http://aponalo.com"><img src="http://aponalo.com/wp-content/uploads/2014/09/logo.png"></a>
			<p><b>Today : </b><?php echo date('l jS \of F Y'); ?></p>
		</div>
		<div class="uk-width-7-10">
			<a href = "#"><img class = "img-responsive" src = "<?php bloginfo('template_url'); ?>/images/top_add.jpg"></a>
		</div>
	</div>	
</div><!-- Header end here -->

<!-- Ticker bar start here -->	
<div class="uk-container uk-container-center uk-margin-top">
	<div class="uk-width-1-1">
		<table>
			<tr>
				<td style="background:#d42057;padding:6px 4px;color:#fff;text-align:center;"><b>শিরোনাম </b></td>
				<td style="width:100%;background:#05610e;padding:6px 4px;">
					<?php 
						$args = array(
							'posts_per_page'   => 10,
							'cat'         	   => 2,
							'orderby'          => 'post_date',
							'order'            => 'DESC',
							'post_type'        => 'post',
							'post_status'      => 'publish',
							'suppress_filters' => true );
						query_posts($args);
						?>
						<marquee id="headline" behavior="scroll" direction="left" onmouseover="this.stop()" onmouseout="this.start()">
						<?php
						while(have_posts()) : the_post(); ?>
						<a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a>&nbsp;&nbsp;
						<?php endwhile; wp_reset_query(); ?>
						</marquee>
				</td>
			</tr>
		</table>
		
	</div>
</div><!-- Ticker bar end here -->	

<!-- Menu bar start here -->	
<div class="uk-container uk-container-center uk-margin-top">
    <div data-uk-sticky="{top:-200, animation: 'uk-animation-slide-top'}" class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse">
				<?php wp_nav_menu(array(
					'container_class' => 'menu-header',
					'theme_location' => 'primary',
					'items_wrap' => '<ul id="%1$s" class="%2$s nav navbar-nav">%3$s</ul>',
					'walker' => new BS3_Walker_Nav_Menu,
				)); ?>
			</div><!--/.nav-collapse -->
		</div>
    </div>
</div> <!-- Menu bar end here -->

<!-- breadcrumbs start here -->

<style type="text/css">
#breadcrumbs{
    list-style:none;
    margin:0px -30px 10px;
    overflow:hidden;
}
 
#breadcrumbs li{
    float:left;
    margin-right:15px;
}
 
#breadcrumbs .separator{
    font-weight:700;
    font-size:20px;
    color:#999;
}
</style>

<div class="uk-container uk-container-center">
	<?php the_breadcrumb(); ?>
</div><!-- breadcrumbs end here --><br/>

