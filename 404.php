<!DOCTYPE html>
<html dir="ltr" lang="ru">
<head>

	<?php include "includes/head-meta.php"; ?>

	<!-- Document Title
	============================================= -->
	<title>404 | ЦОК</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<?php include "includes/primary-menu.php"; ?>

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Страница не найдена</h1>
				<ol class="breadcrumb">
					<li><a href="index.php">Главная</a></li>
					<!--<li><a href="#">Pages</a></li>-->
					<li class="active">404</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="col_half nobottommargin">
						<div class="error404 center">404</div>
					</div>

					<div class="col_half nobottommargin col_last">

						<div class="heading-block nobottomborder">
							<h4>Страница, которую Вы искали, не найдена.</h4>
							<!--<span>Уточните поиск или перейдите по ссылкам ниже:</span>-->
						</div>

						<form action="search.php" method="get" role="form" class="nobottommargin">
							<div class="input-group input-group-lg">
								<input type="text" class="form-control" placeholder="Искать...">
								<span class="input-group-btn">
									<button class="btn btn-danger" type="submit">Поиск</button>
								</span>
							</div>
						</form>

						<!--<div class="col_one_third widget_links topmargin nobottommargin">
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="#">About</a></li>
								<li><a href="#">FAQs</a></li>
							</ul>
						</div>

						<div class="col_one_third widget_links topmargin nobottommargin">
							<ul>
								<li><a href="#">Shop</a></li>
								<li><a href="#">Portfolio</a></li>
								<li><a href="#">Blog</a></li>
							</ul>
						</div>

						<div class="col_one_third widget_links topmargin nobottommargin col_last">
							<ul>
								<li><a href="#">Support</a></li>
								<li><a href="#">Forums</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>-->

					</div>

				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<?php include "includes/footer.php"; ?>
		<!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>