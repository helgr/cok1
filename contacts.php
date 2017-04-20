<!DOCTYPE html>
<html dir="ltr" lang="ru">
<head>

	<?php include "includes/head-meta.php"; ?>

	<!-- Document Title
	============================================= -->
	<title>Контакты | ЦОК</title>

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
		<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('images/title-bg.jpg'); padding: 120px 0;" data-stellar-background-ratio="0.3">

			<div class="container clearfix">
				<h1>Контакты</h1>
				<span>Свяжитесь с нами</span>
				<ol class="breadcrumb">
					<li><a href="index.php">О Центре</a></li>
					<li class="active">Контакты</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Google Map
		============================================= -->
		<section id="google-map" class="gmap slider-parallax"></section>

		<!-- Page Sub Menu
		============================================= -->
		
		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Postcontent
					============================================= -->
					<div class="postcontent nobottommargin">

						<h3>Отправьте нам сообщение</h3>

						<div class="contact-widget">

							<div class="contact-form-result"></div>

							<form class="nobottommargin" id="template-contactform" name="template-contactform" action="includes/sendemail.php" method="post">

								<div class="form-process"></div>

								<div class="col_one_third">
									<label for="template-contactform-name">Имя <small>*</small></label>
									<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required show-error-msg" />
								</div>

								<div class="col_one_third">
									<label for="template-contactform-email">Email <small>*</small></label>
									<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
								</div>

								<div class="col_one_third col_last">
									<label for="template-contactform-phone">Телефон</label>
									<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
								</div>

								<div class="clear"></div>

								<div class="col_two_third">
									<label for="template-contactform-subject">Тема сообщения <small>*</small></label>
									<input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" />
								</div>

								<!--<div class="col_one_third col_last">
									<label for="template-contactform-service">Services</label>
									<select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
										<option value="">-- Select One --</option>
										<option value="Wordpress">Wordpress</option>
										<option value="PHP / MySQL">PHP / MySQL</option>
										<option value="HTML5 / CSS3">HTML5 / CSS3</option>
										<option value="Graphic Design">Graphic Design</option>
									</select>
								</div>-->

								<div class="clear"></div>

								<div class="col_full">
									<label for="template-contactform-message">Сообщение <small>*</small></label>
									<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
								</div>

								<div class="col_full hidden">
									<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
								</div>

								<div class="col_full">
									<button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Отправить</button>
								</div>

							</form>
						</div>

					</div><!-- .postcontent end -->

					<!-- Sidebar
					============================================= -->
					<div class="sidebar col_last nobottommargin">

						<address>
							<strong>Офис:</strong><br>
							124460, Россия, Москва, Зеленоград,<br>
							1-ый Западный проезд, д. 12/1<br>
						</address>
						<abbr title="Phone Number"><strong>Телефон:</strong></abbr> +7 495 229 72 99<br>
						<!--<abbr title="Fax"><strong>Fax:</strong></abbr>+7 495 229 72 99<br>-->
						<abbr title="Email Address"><strong>Email:</strong></abbr> info@cokniime.ru<br>

					</div><!-- .sidebar end -->

				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<?php include "includes/footer.php"; ?>

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
	
	<!-- Google map
	============================================= -->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCgFBaLmsRydkkVs0TXvtAqIwqYbLIKTrQ"></script>
	<script src="js/google-map.js"></script>
	<!-- end Google map -->

</body>
</html>