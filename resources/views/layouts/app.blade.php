<!DOCTYPE html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="author" content="{{ config('app.name') }}" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>{{ config('app.name') }} | By Nina Code</title>

		<!-- Stylesheets
		============================================= -->
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="{{ asset('assets/app/css/bootstrap.css') }}" type="text/css">
		<link rel="stylesheet" href="{{ asset('assets/app/app.css') }}" type="text/css">
		<link rel="stylesheet" href="{{ asset('assets/app/css/dark.css') }}" type="text/css">
		<link rel="stylesheet" href="{{ asset('assets/app/css/font-icons.css') }}" type="text/css">
		<link rel="stylesheet" href="{{ asset('assets/app/css/animate.css') }}" type="text/css">
		<link rel="stylesheet" href="{{ asset('assets/app/css/magnific-popup.css') }}" type="text/css">
		<link rel="stylesheet" href="{{ asset('assets/app/css/custom.css') }}" type="text/css" />

		<!-- Document Title
		============================================= -->
		<style>
			.device-xl #slider .emphasis-title h1 { font-size: 52px; }
			.device-lg #slider .emphasis-title h1 { font-size: 44px; }
		</style>
	</head>

	<body class="stretched">

		<!-- Document Wrapper
		============================================= -->
		<div id="wrapper" class="clearfix">

			<!-- Header
			============================================= -->
			<?php echo View::make('partials/app/_header', []); ?> 

			<!-- Slider
			============================================= -->
			<?php echo View::make('partials/app/_slider', []); ?> 

			<!-- Content
			============================================= -->
			<section id="content">
				<div class="content-wrap">
					<div class="container clearfix">

						<div class="row justify-content-center col-mb-50">
							<div class="col-sm-6 col-lg-4 text-center">
								<a href="#"><img src="{{ asset('assets/app/images/appshowcase/s1.png') }}" alt="Image" class="bottommargin-sm"></a>
								<h4>Responsive Layout</h4>
								<p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>
							</div>

							<div class="col-sm-6 col-lg-4 text-center">
								<a href="#"><img src="{{ asset('assets/app/images/appshowcase/s4.png') }}" alt="Image" class="bottommargin-sm"></a>
								<h4>Retina Ready Graphics</h4>
								<p>Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Retina Icons, Fonts &amp; all others graphics are optimized.</p>
							</div>

							<div class="col-sm-6 col-lg-4 text-center">
								<a href="#"><img src="{{ asset('assets/app/images/appshowcase/s5.png') }}" alt="Image" class="bottommargin-sm"></a>
								<h4>Powerful Performance</h4>
								<p>Canvas includes tons of optimized code that are completely customizable and deliver unmatched fast performance.</p>
							</div>
						</div>

					</div>

					<div class="section mb-0" style="padding-bottom: 150px;">
						<div class="d-none d-lg-block" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;background: transparent url('{{ asset('assets/app/images/appshowcase/ipad-section.png') }}') bottom right no-repeat;"></div>

						<div class="container clearfix" style="z-index: 1;">

							<div class="row">
								<div class="col-lg-5">
									<div class="heading-block topmargin-sm">
										<h2>Awesome Scalable Apps</h2>
										<span>Our Template acts &amp; behaves truly as a Canvas.</span>
									</div>

									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem maiores pariatur voluptatem placeat laborum iste accusamus nam unde, iure id.</p>

									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet cumque, perferendis accusamus porro illo exercitationem molestias, inventore obcaecati ut omnis voluptatibus ratione.</p>

									<a href="#" class="button button-border button-rounded button-large button-dark ml-0">Start Trial</a>
								</div>
							</div>

						</div>
					</div>

					<div class="section my-0">
						<div class="container">

							<div class="row align-items-center col-mb-30 mt-0 mt-lg-5">
								<div class="col-md-6">
									<img src="{{ asset('assets/app/images/appshowcase/iphone-solid.png') }}" alt="Image" class="center-block">
								</div>

								<div class="col-md-6 text-center text-md-left">
									<div class="heading-block border-bottom-0">
										<h2>Typically Responsive</h2>
										<span>Our App scales beautifully to different Devices.</span>
									</div>

									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet cumque, perferendis accusamus porro illo exercitationem molestias, inventore obcaecati ut omnis voluptatibus ratione odio amet magnam quidem tempore necessitatibus quaerat, voluptates excepturi voluptatem, veritatis qui temporibus.</p>

									<a href="#" class="button button-border button-rounded button-large button-dark ml-0">View Gallery</a>
								</div>
							</div>

						</div>
					</div>

					<div class="section dark mt-0 pb-0" style="padding-top: 60px;">
						<div class="container clearfix">

							<div class="row col-mb-50">
								<div class="col-md-6 col-lg-4">
									<div class="feature-box fbox-plain">
										<div class="fbox-icon">
											<a href="#"><i class="icon-screen"></i></a>
										</div>

										<div class="fbox-content">
											<h3>Responsive Layout</h3>
											<p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>
										</div>
									</div>
								</div>

								<div class="col-md-6 col-lg-4">
									<div class="feature-box fbox-plain">
										<div class="fbox-icon">
											<a href="#"><i class="icon-eye"></i></a>
										</div>

										<div class="fbox-content">
											<h3>Retina Ready Graphics</h3>
											<p>Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Retina Icons, Fonts &amp; all others graphics are optimized.</p>
										</div>
									</div>
								</div>

								<div class="col-md-6 col-lg-4">
									<div class="feature-box fbox-plain">
										<div class="fbox-icon">
											<a href="#"><i class="icon-beaker"></i></a>
										</div>

										<div class="fbox-content">
											<h3>Powerful Performance</h3>
											<p>Canvas includes tons of optimized code that are completely customizable and deliver unmatched fast performance.</p>
										</div>
									</div>
								</div>

								<div class="col-md-6 col-lg-4">
									<div class="feature-box fbox-plain">
										<div class="fbox-icon">
											<a href="#"><i class="icon-ok"></i></a>
										</div>

										<div class="fbox-content">
											<h3>12+ Header Designs</h3>
											<p>We have included 12+ Header + Menu Designs for your convenience so that you can match your style.</p>
										</div>
									</div>
								</div>

								<div class="col-md-6 col-lg-4">
									<div class="feature-box fbox-plain">
										<div class="fbox-icon">
											<a href="#"><i class="icon-thumbs-up"></i></a>
										</div>

										<div class="fbox-content">
											<h3>Awesome Mega menu</h3>
											<p>Completely Customizable 2 Columns, 3 Columns, 4 Columns &amp; 5 Columns Mega Menus are available with Canvas.</p>
										</div>
									</div>
								</div>

								<div class="col-md-6 col-lg-4">
									<div class="feature-box fbox-plain">
										<div class="fbox-icon">
											<a href="#"><i class="icon-magnet"></i></a>
										</div>

										<div class="fbox-content">
											<h3>Attractive Sticky Menu</h3>
											<p>Smooth &amp; Stylish Sticky Menu is what will make your Website differentiate with others.</p>
										</div>
									</div>
								</div>
							</div>

							<div class="line"></div>

							<div class="heading-block center">
								<h2>Looks beautiful on all devices.</h2>
							</div>

							<div class="position-relative overflow-hidden">
								<img src="{{ asset('assets/app/images/services/chrome.png') }}" data-animate="fadeInUp" data-delay="100" alt="Chrome">
								<img src="{{ asset('assets/app/images/services/ipad3.png') }}" style="top: 0; left: 0; min-width: 100%; min-height: 100%;" data-animate="fadeInUp" data-delay="400" alt="iPad" class="position-absolute">
							</div>

						</div>
					</div>

					<div class="container clearfix">

						<div class="heading-block center">
							<h3>Available on all Major Platforms.</h3>
							<span>We have made our App available on all Major Platforms</span>
						</div>

						<p class="mx-auto center" style="max-width: 800px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo animi ab dolorem deleniti, incidunt, recusandae tenetur eius aut similique delectus nisi labore odit temporibus reprehenderit eum iure natus voluptatem commodi? Quam ea, placeat quia et dignissimos laboriosam unde earum repudiandae?</p>

						<div class="w-100 center topmargin mb-0">

							<a href="#" class="social-icon si-appstore si-large si-rounded si-colored inline-block" title="iOS App Store">
								<i class="icon-appstore"></i>
								<i class="icon-appstore"></i>
							</a>

							<a href="#" class="social-icon si-android si-large si-rounded si-colored inline-block" title="Android Store">
								<i class="icon-android"></i>
								<i class="icon-android"></i>
							</a>

							<a href="#" class="social-icon si-gplus si-large si-rounded si-colored inline-block" title="Windows Store">
								<i class="icon-windows3"></i>
								<i class="icon-windows3"></i>
							</a>

						</div>

						<div class="clear"></div>

						<div class="divider divider-sm divider-vshort divider-line divider-center">&nbsp;</div>

						<div class="heading-block center">
							<h3>Subscribe for more <span>Updates</span>.</h3>
						</div>

						<div class="subscribe-widget">
							<div class="widget-subscribe-form-result"></div>

							<form id="widget-subscribe-form2" action="include/subscribe.php" method="post" class="mb-0">
								<div class="input-group input-group-lg mx-auto" style="max-width:600px;">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="icon-email2"></i></div>
									</div>

									<input type="email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
									<div class="input-group-append">
										<button class="btn btn-secondary" type="submit">Subscribe Now</button>
									</div>
								</div>
							</form>
						</div>

					</div>
				</div>
			</section><!-- #content end -->

			<!-- Footer
			============================================= -->
			<footer id="footer" class="dark">
				<div class="container">

					<!-- Footer Widgets
					============================================= -->
					<div class="footer-widgets-wrap">

						<div class="row col-mb-50">
							<div class="col-lg-8">

								<div class="row col-mb-50">
									<div class="col-md-4">

										<div class="widget clearfix">

											<img src="{{ asset('assets/app/images/footer-widget-logo.png') }}" alt="Image" class="footer-logo">

											<p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards.</p>

											<div style="background: url('{{ asset('assets/app/images/world-map.png') }}') no-repeat center center; background-size: 100%;">
												<address>
													<strong>Headquarters:</strong><br>
													795 Folsom Ave, Suite 600<br>
													San Francisco, CA 94107<br>
												</address>

												<abbr title="Phone Number"><strong>Phone:</strong></abbr> (1) 8547 632521<br>
												<abbr title="Fax"><strong>Fax:</strong></abbr> (1) 11 4752 1433<br>
												<abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
											</div>

										</div>

									</div>

									<div class="col-md-4">

										<div class="widget widget_links clearfix">

											<h4>Blogroll</h4>

											<ul>
												<li><a href="https://codex.wordpress.org/">Documentation</a></li>
												<li><a href="https://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
												<li><a href="https://wordpress.org/extend/plugins/">Plugins</a></li>
												<li><a href="https://wordpress.org/support/">Support Forums</a></li>
												<li><a href="https://wordpress.org/extend/themes/">Themes</a></li>
												<li><a href="https://wordpress.org/news/">Canvas Blog</a></li>
												<li><a href="https://planet.wordpress.org/">Canvas Planet</a></li>
											</ul>

										</div>

									</div>

									<div class="col-md-4">

										<div class="widget clearfix">
											<h4>Recent Posts</h4>

											<div class="posts-sm row col-mb-30" id="post-list-footer">
												<div class="entry col-12">
													<div class="grid-inner row">
														<div class="col">
															<div class="entry-title">
																<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
															</div>

															<div class="entry-meta">
																<ul>
																	<li>10th July 2021</li>
																</ul>
															</div>
														</div>
													</div>
												</div>

												<div class="entry col-12">
													<div class="grid-inner row">
														<div class="col">
															<div class="entry-title">
																<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
															</div>

															<div class="entry-meta">
																<ul>
																	<li>10th July 2021</li>
																</ul>
															</div>
														</div>
													</div>
												</div>

												<div class="entry col-12">
													<div class="grid-inner row">
														<div class="col">
															<div class="entry-title">
																<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
															</div>

															<div class="entry-meta">
																<ul>
																	<li>10th July 2021</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>

							</div>

							<div class="col-lg-4">

								<div class="row col-mb-50">
									<div class="col-md-4 col-lg-12">
										<div class="widget clearfix" style="margin-bottom: -20px;">

											<div class="row">
												<div class="col-lg-6 bottommargin-sm">
													<div class="counter counter-small"><span data-from="50" data-to="15065421" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>

													<h5 class="mb-0">Total Downloads</h5>
												</div>

												<div class="col-lg-6 bottommargin-sm">
													<div class="counter counter-small"><span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>

													<h5 class="mb-0">Clients</h5>
												</div>
											</div>

										</div>
									</div>

									<div class="col-md-5 col-lg-12">
										<div class="widget subscribe-widget clearfix">
											<h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>

											<div class="widget-subscribe-form-result"></div>

											<form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="mb-0">
												<div class="input-group mx-auto">
													<div class="input-group-prepend">
														<div class="input-group-text"><i class="icon-email2"></i></div>
													</div>

													<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">

													<div class="input-group-append">
														<button class="btn btn-success" type="submit">Subscribe</button>
													</div>
												</div>
											</form>
										</div>
									</div>

									<div class="col-md-3 col-lg-12">
										<div class="widget clearfix" style="margin-bottom: -20px;">

											<div class="row">
												<div class="col-6 col-md-12 col-lg-6 clearfix bottommargin-sm">
													<a href="#" class="social-icon si-dark si-colored si-facebook mb-0" style="margin-right: 10px;">
														<i class="icon-facebook"></i>
														<i class="icon-facebook"></i>
													</a>

													<a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
												</div>

												<div class="col-6 col-md-12 col-lg-6 clearfix">
													<a href="#" class="social-icon si-dark si-colored si-rss mb-0" style="margin-right: 10px;">
														<i class="icon-rss"></i>
														<i class="icon-rss"></i>
													</a>

													<a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
												</div>
											</div>

										</div>
									</div>

								</div>

							</div>
						</div>

					</div><!-- .footer-widgets-wrap end -->

				</div>

				<!-- Copyrights
				============================================= -->
				<div id="copyrights">
					<div class="container">

						<div class="row col-mb-30">

							<div class="col-md-6 text-center text-md-left">
								Copyrights &copy; 2020 All Rights Reserved by Canvas Inc.<br>
								<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
							</div>

							<div class="col-md-6 text-center text-md-right">
								<div class="d-flex justify-content-center justify-content-md-end">
									<a href="#" class="social-icon si-small si-borderless si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>

									<a href="#" class="social-icon si-small si-borderless si-twitter">
										<i class="icon-twitter"></i>
										<i class="icon-twitter"></i>
									</a>

									<a href="#" class="social-icon si-small si-borderless si-gplus">
										<i class="icon-gplus"></i>
										<i class="icon-gplus"></i>
									</a>

									<a href="#" class="social-icon si-small si-borderless si-pinterest">
										<i class="icon-pinterest"></i>
										<i class="icon-pinterest"></i>
									</a>

									<a href="#" class="social-icon si-small si-borderless si-vimeo">
										<i class="icon-vimeo"></i>
										<i class="icon-vimeo"></i>
									</a>

									<a href="#" class="social-icon si-small si-borderless si-github">
										<i class="icon-github"></i>
										<i class="icon-github"></i>
									</a>

									<a href="#" class="social-icon si-small si-borderless si-yahoo">
										<i class="icon-yahoo"></i>
										<i class="icon-yahoo"></i>
									</a>

									<a href="#" class="social-icon si-small si-borderless si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>
								</div>

								<div class="clear"></div>

								<i class="icon-envelope2"></i> info@canvas.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +1-11-6541-6369 <span class="middot">&middot;</span> <i class="icon-skype2"></i> CanvasOnSkype
							</div>

						</div>

					</div>
				</div><!-- #copyrights end -->
			</footer><!-- #footer end -->

		</div><!-- #wrapper end -->

		<!-- Go To Top
		============================================= -->
		<div id="gotoTop" class="icon-angle-up"></div>

		<!-- JavaScripts
		============================================= -->
		<script src="{{ asset('assets/app/js/jquery.js') }}"></script>
		<script src="{{ asset('assets/app/js/plugins.min.js') }}"></script>

		<!-- Footer Scripts
		============================================= -->
		<script src="{{ asset('assets/app/js/functions.js') }}"></script>

	</body>
</html>