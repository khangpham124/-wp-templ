<?php get_header(); ?>
<title>--</title>
<meta name="description" content="---" />
<meta name="keywords" content="---" />
<meta http-equiv="REFRESH" content="3; url=<?php echo esc_url( home_url( '/' ) )?>">
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
				<p class="taC t30b30 fz15">アクセスしようとしたページは、移動したか削除されました。<br />下記リンクに移動して下さい。</p>
				<p class="taC"><a href="<?php echo esc_url( home_url( '/' ) )?>"><?php echo esc_url( home_url( '/' ) )?></a></p>
				<!-- /maincontent end -->
			</div>
			<?php get_sidebar(); ?>
		</div>
		<!-- /container end -->
	</div>
	<?php get_footer(); ?>

</body>
</html>