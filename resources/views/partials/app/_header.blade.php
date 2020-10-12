<header id="header" class="full-header">
	<div id="header-wrap">
		<div class="container">
			<div class="header-row">

				<!-- Logo
				============================================= -->
				<div id="logo">
					<a href="index.html" class="standard-logo" data-dark-logo="{{ asset('assets/app/images/logo-dark.png') }}">
						<img src="{{ asset('assets/app/images/logo.png') }}" alt="Canvas Logo">
					</a>
					<a href="index.html" class="retina-logo" data-dark-logo="{{ asset('assets/app/images/logo-dark@2x.png') }}">
						<img src="{{ asset('assets/app/images/logo@2x.png') }}" alt="Canvas Logo">
					</a>
				</div><!-- #logo end -->

				<div class="header-misc">

					<!-- Top Search
					============================================= -->
					<div id="top-search" class="header-misc-icon">
						<a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
					</div><!-- #top-search end -->

				</div>

				<div id="primary-menu-trigger">
					<svg class="svg-trigger" viewBox="0 0 100 100">
						<path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path>
						<path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path>
					</svg>
				</div>

				<!-- Primary Navigation
				============================================= -->
				<nav class="primary-menu">
					<ul class="menu-container">
						<li class="menu-item">
							<a class="menu-link" href="index.html"><div>@lang('global.menu.home')</div></a>
						</li>
						<li class="menu-item">
							<a class="menu-link" href="index.html"><div>@lang('global.menu.blog')</div></a>
						</li>
						<li class="menu-item">
							<a class="menu-link" href="index.html"><div>@lang('global.menu.features.label')</div></a>

							<ul class="sub-menu-container">
								<li class="menu-item">
									<a class="menu-link" href="intro.html#section-niche"><div>@lang('global.menu.features.responsive')</div></a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="intro.html#section-niche"><div>@lang('global.menu.features.retina')</div></a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="intro.html#section-niche"><div>@lang('global.menu.features.performance')</div></a>
								</li>
							</ul>
						</li>
					</ul>

				</nav><!-- #primary-menu end -->

				<form class="top-search-form" action="search.html" method="get">
					<input type="text" name="q" class="form-control" value="" placeholder="@lang('global.menu.search_bar')" autocomplete="off">
				</form>
			</div>
		</div>
	</div>

	<div class="header-wrap-clone"></div>
</header><!-- #header end -->