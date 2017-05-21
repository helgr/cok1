<!DOCTYPE html>
<html dir="ltr" lang="ru">
<head>
 
    <?php include "./includes/head-meta.php"; ?>
	
	<!-- Document Title
	============================================= -->
	<title>Центр оценки квалификаций</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header">

            <?php include "includes/primary-menu.php"; ?>

        </header><!-- #header end -->

        <!-- Slider
        =============================================-->
		<section id="slider" class="slider-parallax swiper_wrapper clearfix" data-autoplay="7000" data-speed="600" data-loop="true">

			<div class="slider-parallax-inner">

				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide dark" style="background-image: url('images/slider/1.jpg');">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 data-caption-animate="fadeInUp">Добро пожаловать</h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200">С 1 января 2017 года специалисты в сфере микроэлектроники могут пройти процедуру независимой оценки квалификаций в нашем Центре.</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide" style="background-image: url('images/slider/2.jpg'); opacity: 0.8">

                        <!-- <div class="slide"><a href="images/news/full/10.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/news/grid/10.jpg" alt="Standard Post with Gallery"></a></div> -->

							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<a href="standards.php"><h2 data-caption-animate="fadeInUp">Профессиональный стандарт</h2></a>
									<p data-caption-animate="fadeInUp" data-caption-delay="200">По результатам независимой оценки сотрудник получает свидетельство, подтверждающее уровень его квалификации.</p><br>
                                    <a data-caption-animate="fadeInUp" data-caption-delay="300" href="standards.php" class="button button-border button-large button-rounded tright nomargin"><span>Ознакомиться</span> <i class="icon-angle-right"></i></a>
								</div>
							</div>
						</div>
						<div class="swiper-slide" style="background-image: url('images/slider/3.jpg'); background-position: center top;">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<a href="lawframe.php"><h2 data-caption-animate="fadeInUp">Законодательная база</h2></a>
                                    <!-- <p data-caption-animate="fadeInUp" data-caption-delay="200">Сокращение сроков профессиональной подготовки и обучения.</p> -->
                                    <br>
                                    <a data-caption-animate="fadeInUp" data-caption-delay="300" href="lawframe.php" class="button button-border button-large button-rounded tright nomargin"><span>Ознакомиться</span> <i class="icon-angle-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
					<div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
					<!--<div id="slide-number"><div id="slide-number-current"></div><span>/</span><div id="slide-number-total"></div></div>-->
				</div>

			</div>

		</section><!-- #slider end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

                <div class="container clearfix">

                    <div id="about_cok" class="heading-block center">
                        <h3><a href="#" data-scrollto="#about_cok">О центре</a></h3>
                        <!--<span>Доп текст в заголовке блока новостей</span>-->
                    </div>

                    <div class="col_two_fifth notopmargin bottommargin">
                        <div class="entry-image">
                            <img class="image_fade" src="images/about-small.jpg" alt="Image about"></a>
                        </div>
                    </div>

                    <div class="col_three_fifth notopmargin nobottommargin col_last" style="text-align: justify;">

                        <p">Центр оценки квалификаций (ЦОК) в наноиндустрии, созданный на базе Акционерного общества «Научно-исследовательского института молекулярной электроники» при поддержке <a href="http://www.rusnano.com/infrastructure">Фонда инфраструктурных и образовательных программ</a> РОСНАНО (ФИОП), начал свою работу 23 декабря 2016 года.<br>
                        <a href="regulationdocs/attestat/cokattestat.pdf">Аттестат соответствия Центра оценки квалификаций от 23 декабря 2016 года № 3</a>.</p>

                        <h5>Наш Центр оценки квалификаций это:</h5>

                        <ul class="iconlist iconlist iconlist-color">
                            <li><i class="icon-ok-sign"></i> Первый в России Центр оценки квалификаций в сфере микроэлектроники</li>
                            <li><i class="icon-ok-sign"></i> Экспертные знания в области проведения независимой оценки квалификаций и профессиональных экзаменов</li>
                            <li><i class="icon-ok-sign"></i> Технические эксперты и эксперты по оценке (более 15 человек), аттестованные Советом по профессиональным квалификациям в наноиндустрии</li>
                        </ul>

                    </div>

                </div>

				<!-- news block -->
                <!--<div class="container clearfix topmargin nobottommargin">

                    <!--<div class="clear"></div>-->

                    <!--<div class="divider divider-short divider-center"><i class="icon-circle"></i></div>-->

                    <!--<div class="heading-block center">
                        <h3><a href="#">Новости</a></h3>
                        <!--<span>Доп текст в заголовке блока новостей</span>-->
                    <!--</div>

                    <div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows">

                        <div class="entry clearfix">
                            <div class="entry-image">
                                <a href="images/news/full/17.jpg" data-lightbox="image"><img class="image_fade" src="images/news/grid/17.jpg" alt="Standard Post with Image"></a>
                            </div>
                            <div class="entry-title">
                                <h2><a href="news-single.php">Заголовок первой новости с preview изображением</a></h2>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> 10/02/2016</li>
                                <!--<li><a href="news-single.php#comments"><i class="icon-comments"></i> 13</a></li>-->
                            <!--</ul>
                            <div class="entry-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur!</p>
                                <a href="news-single.php" class="more-link">Далее</a>
                            </div>
                        </div>

                        <div class="entry clearfix">
                            <div class="entry-image">
                                <a href="images/news/full/1.jpg" data-lightbox="image"><img class="image_fade" src="images/news/grid/1.jpg" alt="Standard Post with Image"></a>
                            </div>
                            <div class="entry-title">
                                <h2><a href="news-single.php">Заголовок другой новости с preview изображением</a></h2>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> 5/05/2016</li>
                                <!--<li><a href="news-single.php#comments"><i class="icon-comments"></i> 6</a></li>-->
                            <!--</ul>
                            <div class="entry-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur!</p>
                                <a href="blog-single.html" class="more-link">Далее</a>
                            </div>
                        </div>

                        <div class="entry clearfix">
                            <div class="entry-image">
                                <a href="images/news/full/3.jpg" data-lightbox="image"><img class="image_fade" src="images/news/grid/3.jpg" alt="Standard Post with Image"></a>
                            </div>
                            <div class="entry-title">
                                <h2><a href="news-single.php">Заголовок еще одной новости с preview изображением</a></h2>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> 15/07/2016</li>
                                <!--<li><a href="news-single.php#comments"><i class="icon-comments"></i> 6</a></li>-->
                            <!--</ul>
                            <div class="entry-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur!</p>
                                <a href="news-single.php" class="more-link">Далее</a>
                            </div>
                        </div>

                        <div class="entry clearfix">
                            <div class="entry-image">
                                <div class="fslider" data-arrows="false" data-lightbox="gallery">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
                                            <div class="slide"><a href="images/news/full/10.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/news/grid/10.jpg" alt="Standard Post with Gallery"></a></div>
                                            <div class="slide"><a href="images/news/full/20.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/news/grid/20.jpg" alt="Standard Post with Gallery"></a></div>
                                            <div class="slide"><a href="images/news/full/21.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/news/grid/21.jpg" alt="Standard Post with Gallery"></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-title">
                                <h2><a href="news-single.php">Заголовок новости с каруселью изображений</a></h2>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> 24/09/2016</li>
                                <!--<li><a href="news-single.php#comments"><i class="icon-comments"></i> 21</a></li>-->
                            <!--</ul>
                            <div class="entry-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur!</p>
                                <a href="news-single.php" class="more-link">Далее</a>
                            </div>
                        </div>

                    </div>
                </div><!-- end news block -->

                <!-- Team -->
				<div class="section notopmargin nobottommargin">

					<div class="container clearfix">

                        <!--<div class="clear"></div>-->

                        <div class="heading-block center">
                            <h3><a href="team.php">Наша команда</a></h3>
                        </div>

                        <div class="col_one_third">

                            <div class="team">
                                <div class="team-image">
                                    <img src="images/team/polikarpova.jpg" alt="Polikarpova">
                                </div>
                                <div class="team-desc">
                                    <div class="team-title"><h4>Поликарпова Л.В.</h4><span>Руководитель центра оценки</span></div>
                                    <!--<a href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>
                                    <a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
                                        <i class="icon-gplus"></i>
                                        <i class="icon-gplus"></i>
                                    </a>-->
                                </div>
                            </div>

                        </div>

                        <div class="col_one_third">

                            <div class="team">
                                <div class="team-image">
                                    <img src="images/team/zabodaeva.jpg" alt="Zabodaeva">
                                </div>
                                <div class="team-desc">
                                    <div class="team-title"><h4>Забодаева Н.Н.</h4><span>Заместитель руководителя центра оценки</span></div>
                                    <!--<a href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>
                                    <a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
                                        <i class="icon-gplus"></i>
                                        <i class="icon-gplus"></i>
                                    </a>-->
                                </div>
                            </div>

                        </div>

                        <div class="col_one_third col_last">

                            <div class="team">
                                <div class="team-image">
                                    <img src="images/team/novozhilova.jpg" alt="Novozhilova">
                                </div>
                                <div class="team-desc">
                                    <div class="team-title"><h4>Новожилова Г.И.</h4><span>Руководитель проектов внедрения программ по развитию, обучению и оценке</span></div>
                                    <!--<a href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>
                                    <a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
                                        <i class="icon-gplus"></i>
                                        <i class="icon-gplus"></i>
                                    </a>-->
                                </div>
                            </div>

                        </div>

                        <div class="clear"></div>

					</div>

				</div>
                <!-- end Team -->


                <div class="col_full bottommargin-lg common-height">
                    
                    <div id="ocenka" class="heading-block center">
                        <h3><a href="#" data-scrollto="#ocenka">НЕЗАВИСИМАЯ ОЦЕНКА КВАЛИФИКАЦИЙ</a></h3>
                    </div>

                    <div class="col-md-4 dark col-padding ohidden" style="background-color: #1abc9c;">
                        <div>
                            <h3 class="uppercase" style="font-weight: 600;">Соискателю</h3>
                            <p style="line-height: 1.8;">Возможность подтверждения и признания квалификации вне зависимости от способов ее получения.</p>
                            <a href="candidate.php" class="button button-border button-light button-rounded uppercase nomargin">Узнать больше</a>
                            <i class="icon-bulb bgicon"></i>
                        </div>
                    </div>

                    <div class="col-md-4 dark col-padding ohidden" style="background-color: #34495e;">
                        <div>
                            <h3 class="uppercase" style="font-weight: 600;">Работодателю</h3>
                            <p style="line-height: 1.8;">Раздел в разработке</p>
                            <!-- <a href="#" class="button button-border button-light button-rounded uppercase nomargin">Узнать больше</a> -->
                            <i class="icon-cog bgicon"></i>
                        </div>
                    </div>

                    <div class="col-md-4 dark col-padding ohidden" style="background-color: #66005a;">
                        <div>
                            <h3 class="uppercase" style="font-weight: 600;">Эксперту</h3>
                            <p style="line-height: 1.8;">Раздел в разработке</p>
                            <!-- <a href="#" class="button button-border button-light button-rounded uppercase nomargin">Узнать больше</a> -->
                            <i class="icon-thumbs-up bgicon"></i>
                        </div>
                    </div>

                    <div class="clear"></div>

                </div>

                <!-- Partners & Clients carousel -->
				<div class="container clearfix">

                    <div class="heading-block center">
                        <h3 style="margin-top: 70px"><a href="./partners.php">Наши партнеры</a></h3>
                        <!-- <span>Check out some of our Client Reviews</span> -->
                    </div>

					<div id="oc-clients" class="owl-carousel owl-carousel-full image-carousel carousel-widget" data-margin="30" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xxs="2" data-items-xs="3" data-items-sm="4" data-items-md="5" data-items-lg="6" style="padding: 20px 0;">

						<div class="oc-item"><a href="http://www.rusnano.com/about/structure/pravlenie-fiep"><img src="images/clients/rosnanof.jpg" alt="Clients"></a></div>
						<div class="oc-item"><a href="http://www.rusnano.com"><img src="images/clients/rosnano.jpg" alt="Clients"></a></div>
						<div class="oc-item"><a href="http://www.monrf.ru/"><img src="images/clients/mon.jpg" alt="Clients"></a></div>
						<div class="oc-item"><a href="http://spknano.ru/"><img src="images/clients/spk.jpg" alt="Clients"></a></div>
						<div class="oc-item"><a href="http://www.firo.ru/"><img src="images/clients/firo.jpg" alt="Clients"></a></div>
						<div class="oc-item"><a href="https://mipt.ru/"><img src="images/clients/mfti.jpg" alt="Clients"></a></div>
						<div class="oc-item"><a href="https://miet.ru/"><img src="images/clients/miet.png" alt="Clients"></a></div>
                        <div class="oc-item"><a href="https://www.mikron.ru"><img src="images/clients/mikron.jpg" alt="Clients"></a></div>
                        <div class="oc-item"><a href="https://www.niitm.ru"><img src="images/clients/niitm.jpg" alt="Clients"></a></div>

					</div>

				</div>
                <!--end Partners Clients carousel -->

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
        <?php include "./includes/footer.php"; ?>
        <!-- end footer -->
        
	</div><!-- #wrapper end -->

	<!-- Go To Top button
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="./js/jquery.js"></script>
	<script type="text/javascript" src="./js/plugins.js"></script>

    <script src="js/menu-hilight.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="./js/functions.js"></script>

</body>
</html>