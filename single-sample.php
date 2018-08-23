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
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content();?>
				<?php endwhile; endif; ?>
				<!-- /maincontent end -->
			</div>
			<?php get_sidebar(); ?>
		</div>
		<!-- /container end -->
	</div>
	<?php get_footer(); ?>

</body>
</html>