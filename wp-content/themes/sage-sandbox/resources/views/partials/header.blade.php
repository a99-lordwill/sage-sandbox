<header class="header" style="background-image:url({{ get_field('banner_img') }})">
	<nav class="main-navigation">
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col navigation__logo-wrapper">
					<a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
				</div>
			<div class="col text-align-right navigation__menu-wrapper">
				<div class="navigation__menu">
					<span class="navigation__menu-span"></span>
					<span class="navigation__menu-span"></span>
					<span class="navigation__menu-span"></span>
				</div>
			</div>
		</div>
	</nav>
	<div class="header-banner text-center">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1>{{ get_field('banner_heading') != '' ? get_field('banner_heading') : App::title() }}</h1>
				</div>
				@if ( get_field('banner_subheading') != '' )
					<div class="row">
						<div class="col-12">
							<h4 class="">{{ get_field('banner_subheading') }}</h4>
						</div>
					</div>
				@endif
			</div>
		</div>
	</div>
</header>

{{-- 
<nav class="main-navigation main-navigation--dark">

  <div class="main-navigation__toggle">

  </div>
</nav> --}}

{{-- <nav class="nav-primary">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
          @endif
        </nav> --}}