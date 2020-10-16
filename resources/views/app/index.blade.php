@extends('layouts.app')

@section('_header', true)
@section('_footer', true)
@section('_slider', true)
@section('description', trans('global.app.sections.index.description'))
@section('featured_img', asset(trans('global.app.sections.index.featured_img')))
@section('keywords', trans('global.app.sections.index.keywords'))
@section('title', trans('global.app.sections.index.title'))

@section('content')
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
				<p>Mi Contabilidad includes tons of optimized code that are completely customizable and deliver unmatched fast performance.</p>
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
						<span>Our Template acts &amp; behaves truly as a Mi Contabilidad.</span>
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
							<p>Mi Contabilidad includes tons of optimized code that are completely customizable and deliver unmatched fast performance.</p>
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
							<p>Completely Customizable 2 Columns, 3 Columns, 4 Columns &amp; 5 Columns Mega Menus are available with Mi Contabilidad.</p>
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
@endsection
