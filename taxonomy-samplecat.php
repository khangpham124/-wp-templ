<?php get_header(); ?>
<title><?php the_title();?> | --</title>
<meta name="description" content="---" />
<meta name="keywords" content="---" />
<link rel="stylesheet" href="/common/css/import.css" type="text/css" media="all" />
<link rel="icon" href="/common/img/icon/favicon.ico" type="image/vnd.microsoft.icon" />
</head>
<body id="top">
<?php include(TEMPLATEPATH . '/header2.php'); ?>
<?php include(TEMPLATEPATH . '/gNavi.php'); ?>
	<div id="container">
		<!-- /container start -->		
		<div class="clearfix">
			<div id="mainContent">
				<!-- /mainContent start -->
				<?php
				$current_term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); // get current category 
				?>
				<h2><?php echo $current_term->name; ?></h2>
				<ul>
				<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					query_posts($query_string . '&orderby=post_date&order=desc&posts_per_page=10&paged=' . $paged);
					if(have_posts()): while(have_posts()) : the_post();
				
				?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title();?></a></li>
				<?php endwhile;endif;?>
				</ul>
				<!-- /maincontent end -->
			</div>
			<?php get_sidebar(); ?>
		</div>
		<!-- /container end -->
	</div>
	<?php get_footer(); ?>

</body>
</html>