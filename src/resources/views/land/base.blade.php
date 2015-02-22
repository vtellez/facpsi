<!doctype html>
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<title>SocialGym - {{ trans('ld.'.$section )}}</title>
		<!--meta info-->
		<meta charset="utf-8">
		<!-- <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no"> -->
		<meta name="author" content="Gooveris">
		<meta name="keywords" content="gym, fitness, socialgym, social, gym, workout, entrenamientos">
		<meta name="description" content="SocialGym - Fitness & Sports Tracker">
		<meta name="robots" content="index,follow">
  		<link rel="shortcut icon" href="{{ url('common/img/favicon.ico') }}" type="image/x-icon" />
		<!--web fonts-->
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic' rel='stylesheet' type='text/css'>
		<!--libs css-->
		<link rel="stylesheet" type="text/css" media="all" href="{{ url('land/plugins/owl-carousel/owl.carousel.css') }}">
		<link rel="stylesheet" type="text/css" media="all" href="{{ url('land/plugins/owl-carousel/owl.transitions.css') }}">
		<link rel="stylesheet" type="text/css" media="all" href="{{ url('land/plugins/jackbox/css/jackbox.min.css') }}">
		<link rel="stylesheet" type="text/css" media="screen" href="{{ url('land/plugins/rs-plugin/css/settings.css') }}">
		<!--theme css-->
		<link rel="stylesheet" type="text/css" media="all" href="{{ url('land/css/bootstrap.min.css') }}">
		<link rel="stylesheet" type="text/css" media="all" href="{{ url('land/css/theme-animate.css') }}">
		<link rel="stylesheet" type="text/css" media="all" href="{{ url('land/css/style.css') }}">
		<link rel="stylesheet" type="text/css" media="all" href="{{ url('land/css/sgcustom.css') }}">
		<link rel="stylesheet" type="text/css" media="all" href="{{ url('land/css/stylespricing.css') }}">
		<!--head libs-->
		<script src="{{ url('land/js/jquery-2.1.0.min.js') }}"></script>
		<script src="{{ url('land/plugins/jquery.queryloader2.min.js') }}"></script>
		<script src="{{ url('land/plugins/modernizr.js') }}"></script>
		<script>
			$('html').addClass('d_none');
			$(document).ready(function(){
				$('html').show();
				$("body").queryLoader2({
					backgroundColor: '#fff',
					barColor : '#35eef6',
					barHeight: 4,
					percentage:true,
					deepSearch:true,
					minimumTime:1000
				});
			});
		</script>
	</head>
	<body class="sticky_menus">
		<!--side menu-->
		<div id="side_menu">
		</div>
		<!--layout-->
		<div class="wide_layout bg_light">
			<!--header markup-->
			<header role="banner" class="relative">
				<span class="gradient_line"></span>
				<section class="header_top_part p_top_0 p_bottom_0">
					<div class="container">
						<div class="row">
							<!--contact info-->
							<div class="col-lg-6 col-md-6 col-sm-6 t_xs_align_c">
								<ul class="hr_list fs_small color_grey_light contact_info_list d_xs_none">
									<li class="m_right_20 f_xs_none m_xs_right_0 m_xs_bottom_5">
										<span class="circle icon_wrap_size_1 d_inline_m m_right_8"><i class="icon-phone-1"></i></span>(+34)-670-468-166
									</li>
									<li class="m_right_20 f_xs_none m_xs_right_0 m_xs_bottom_5">
										<a href="mailto:#" class="color_grey_light d_inline_b color_blue_hover"><span class="circle icon_wrap_size_1 d_inline_m m_right_8"><i class="icon-mail-alt"></i></span>info@socialgym.com</a>
									</li>
								</ul>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 t_align_r t_xs_align_c">
								<br class="d_none d_xs_block">
								<!--language change-->
								<div class="d_inline_m relative dropdown container3d">
									<?php $lang = App::getLocale(); ?>
									<a href="#" class="color_dark not_hover fs_small bg_light relative">
										<img src="{{ url('land/images/flag_'.$lang.'.jpg') }}" alt="" class="f_left m_right_5">{{ trans('lg.name_'.$lang) }}<i class="icon-angle-down m_left_8 color_grey d_inline_b"></i>
									</a>
									<ul class="sub_menu vr_list tr_all t_align_l bg_light fs_small">
										<li><a href="{{ url('lang/en') }}" class="d_block color_dark"><img src="{{ url('land/images/flag_en.jpg') }}" alt="" class="m_right_5">English</a></li>
										<li><a href="{{ url('lang/es') }}" class="d_block color_dark"><img src="{{ url('land/images/flag_es.jpg') }}" alt="" class="m_right_5">Español</a></li>
									</ul>
								</div>
								<div class="d_inline_m relative dropdown container3d">

									@if (Auth::check())
									<a href="#" class="color_dark not_hover fs_small bg_light relative">
										<span class="circle icon_wrap_size_1 d_inline_m m_right_8"><i class="icon-user"></i></span>{{ Auth::user()->name }}<i class="icon-angle-down m_left_8 color_grey d_inline_b"></i>
									</a>
									<ul class="sub_menu vr_list tr_all t_align_l bg_light fs_small">
										<li><a href="{{ url('profile') }}" class="d_block color_dark">{{ trans('sg.my_profile') }}</a></li>
										<li><a href="{{ url('logout') }}" class="d_block color_dark">{{ trans('sg.logout') }}</a></li>
									</ul>
									@else
									<a href="#" class="color_dark not_hover fs_small bg_light relative">
										<span class="circle icon_wrap_size_1 d_inline_m m_right_8"><i class="icon-user"></i></span>{{ trans('ld.join') }}<i class="icon-angle-down m_left_8 color_grey d_inline_b"></i>
									</a>
									<ul class="sub_menu vr_list tr_all t_align_l bg_light fs_small">
										<li><a href="{{ url('landing/join') }}" class="d_block color_dark">{{ trans('sg.login') }}</a></li>
										<li><a href="{{ url('landing/join?t=register') }}" class="d_block color_dark">{{ trans('sg.register') }}</a></li>
									</ul>
									@endif
								</div>
							</div>
						</div>
					</div>
				</section>
				<hr/>
				<!--header bottom part-->
				<section class="header_bottom_part bg_light">
					<div class="container">
						<div class="d_table w_full d_xs_block">
							<!--logo-->
							<div class="col-lg-3 col-md-4 col-sm-4 d_table_cell d_xs_block f_none v_align_m logo t_xs_align_c">
								<a href="{{ url('landing') }}" class="d_inline_m m_xs_top_20 m_xs_bottom_20">
									<img src="{{ url('land/images/logo.png') }}" alt="">
								</a>
							</div>
							<div class="col-lg-9 col-md-8 col-sm-8 t_align_r d_table_cell d_xs_block f_none">
								<div class="relative clearfix t_align_r">
									<button id="menu_button" class="r_corners tr_all color_blue db_centered m_bottom_20 d_none d_xs_block">
										<i class="icon-menu"></i>
									</button>
									<!--main navigation-->
									<nav role="navigation" class="d_inline_m d_xs_none m_xs_right_0 m_right_15 m_sm_right_5 t_align_l m_xs_bottom_15">
										<ul class="hr_list main_menu fw_light">
											@if ($section == '' || $section == 'home')
											<li class="current container3d relative f_xs_none m_xs_bottom_5">
											@else
											<li class="container3d relative f_xs_none m_xs_bottom_5">
											@endif
												<a class="color_dark fs_large relative r_xs_corners" href="{{ url('landing') }}">{{ trans('ld.home') }}
												</a>
											</li>

											@if ($section == 'services')
											<li class="current container3d relative f_xs_none m_xs_bottom_5">
											@else
											<li class="container3d relative f_xs_none m_xs_bottom_5">
											@endif
												<a class="color_dark fs_large relative r_xs_corners" href="{{ url('landing/services') }}">{{ trans('ld.services') }}
												</a>
											</li>

											@if ($section == 'join')
											<li class="current container3d relative f_xs_none m_xs_bottom_5">
											@else
											<li class="container3d relative f_xs_none m_xs_bottom_5">
											@endif
												<a class="color_dark fs_large relative r_xs_corners" href="{{ url('landing/join') }}">{{ trans('ld.join') }}
												</a>
											</li>

											@if (true || Auth::check() && Auth::user()->id == 2)
												@if ($section == 'hire')
												<li class="current container3d relative f_xs_none m_xs_bottom_5">
												@else
												<li class="container3d relative f_xs_none m_xs_bottom_5">
												@endif
													<a class="color_dark fs_large relative r_xs_corners" href="{{ url('landing/shop') }}">{{ trans('ld.hire') }}
													</a>
												</li>
											@endif

											@if ($section == 'downloads'  || $section == 'demo')
											<li class="current container3d relative f_xs_none m_xs_bottom_5">
											@else
											<li class="container3d relative f_xs_none m_xs_bottom_5">
											@endif
												<a class="color_dark fs_large relative r_xs_corners" style="cursor: pointer;">
												{{ trans('ld.support') }}
													<i class="icon-angle-down d_inline_m"></i>
												</a>
												<ul class="sub_menu r_xs_corners bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
													<li>
														<a href="{{ url('landing/downloads') }}" class="d_block color_dark relative">{{ trans('ld.downloads') }}</a>
													</li>
													<li>
														<a href="{{ url('landing/demo') }}" class="d_block color_dark relative">{{ trans('ld.ask_for_demo') }}</a>
													</li>
													<li>
														<a href="{{ url('landing/contact') }}" class="d_block color_dark relative">{{ trans('ld.contact') }}</a>
													</li>
												</ul>
											</li>

											
											
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</section>
			</header>


			<hr class="divider_type_2">
			<!--footer-->
			<footer role="contentinfo" class="bg_light_2">
				<!--top part-->
				<section class="footer_top_part ">
					<div class="container relative">
						<div class="row">
							<!--contact info--> 
							<div class="col-lg-3 col-md-3 col-sm-3 m_bottom_50 m_xs_bottom_15">
								<h5 class="color_dark m_bottom_20 fw_light">{{ trans('ld.contact') }}</h5>
								<div class="row">
									<ul class="fw_light w_break m_bottom_30 m_xs_bottom_8">
										<li class="m_bottom_8">
											<div class="d_inline_m icon_wrap_size_1 color_blue circle m_right_10">
												<i class="icon-phone-1"></i>
											</div>
											(+34) 670-468-166
										</li>
										<li class="m_bottom_8">
											<div class="d_inline_m icon_wrap_size_1 color_blue circle m_right_10">
												<i class="icon-mail-alt"></i>
											</div>
											<a href="mailto:info@socialgym.com" class="color_black color_blue_hover">info@socialgym.com</a>
										</li>
										<li class="m_bottom_8">
											<div class="d_inline_m icon_wrap_size_1 color_blue circle m_right_10">
												<i class="icon-globe-1"></i>
											</div>
											<a href="{{ url('/landing/demo') }}" class="color_black color_blue_hover">{{ trans('ld.ask_for_demo') }}</a>
										</li>
										<li>
											<div class="d_inline_m icon_wrap_size_1 color_blue circle m_right_10">
												<i class="icon-globe-1"></i>
											</div>
											<a href="{{ url('/landing/contact') }}" class="color_black color_blue_hover">{{ trans('ld.contact') }}</a>
										</li>
									</ul>
								</div>
								<h5 class="color_dark m_bottom_20 fw_light">{{ trans('ld.stay_connect') }}</h5>
								<ul class="hr_list social_icons">
									<!--tooltip_container class is required-->
									<li class="m_right_15 m_bottom_15 tooltip_container">
										<a href="#" class="d_block facebook icon_wrap_size_2 circle color_grey_light_2">
											<i class="icon-facebook fs_small"></i>
										</a>
									</li>
									<li class="m_right_15 m_bottom_15 tooltip_container">
										<a href="#" class="d_block twitter icon_wrap_size_2 circle color_grey_light_2">
											<i class="icon-twitter fs_small"></i>
										</a>
									</li>
									<li class="m_right_15 m_bottom_15 tooltip_container">
										<a href="#" class="d_block youtube icon_wrap_size_2 circle color_grey_light_2">
											<i class="icon-youtube-play fs_small"></i>
										</a>
									</li>
									<li class="m_bottom_15 tooltip_container">
										<a href="#" class="d_block linkedin icon_wrap_size_2 circle color_grey_light_2">
											<i class="icon-linkedin-squared fs_small"></i>
										</a>
									</li>
								</ul>
							</div>
							
							<div class="col-lg-3 col-md-3 col-sm-3 m_bottom_50 m_xs_bottom_30">
								<h5 class="color_dark fw_light m_bottom_20">SocialGym</h5>
								<ul class="vr_list_type_4 color_dark fw_light w_break">
									<li class="m_bottom_12">
										<a href="{{ url('landing/') }}" class="color_dark d_inline_b">
											<span class="icon_wrap_size_0 circle color_grey_light_5 d_block tr_inherit f_left">
												<i class="icon-angle-right"></i>
											</span>
											{{ trans('ld.home') }}
										</a>
									</li>
									<li class="m_bottom_12">
										<a href="{{ url('landing/services') }}" class="color_dark d_inline_b">
											<span class="icon_wrap_size_0 circle color_grey_light_5 d_block tr_inherit f_left">
												<i class="icon-angle-right"></i>
											</span>
											{{ trans('ld.services') }}
										</a>
									</li>
									<li class="m_bottom_12">
										<a href="{{ url('landing/join') }}" class="color_dark d_inline_b">
											<span class="icon_wrap_size_0 circle color_grey_light_5 d_block tr_inherit f_left">
												<i class="icon-angle-right"></i>
											</span>
											{{ trans('ld.join') }}
										</a>
									</li>
									<li class="m_bottom_12">
										<a href="{{ url('landing/shop') }}" class="color_dark d_inline_b">
											<span class="icon_wrap_size_0 circle color_grey_light_5 d_block tr_inherit f_left">
												<i class="icon-angle-right"></i>
											</span>
											{{ trans('ld.hire') }}
										</a>
									</li>
									<li class="m_bottom_12">
										<a href="{{ url('landing/downloads') }}" class="color_dark d_inline_b">
											<span class="icon_wrap_size_0 circle color_grey_light_5 d_block tr_inherit f_left">
												<i class="icon-angle-right"></i>
											</span>
											{{ trans('ld.downloads') }}
										</a>
									</li>
									<li>
										<a href="{{ url('landing/contact') }}" class="color_dark d_inline_b">
											<span class="icon_wrap_size_0 circle color_grey_light_5 d_block tr_inherit f_left">
												<i class="icon-angle-right"></i>
											</span>
											{{ trans('ld.contact') }}
										</a>
									</li>
								</ul>
							</div>
							<!--facebook plugin-->
							<div class="col-lg-3 col-md-3 col-sm-3 m_bottom_50 m_xs_bottom_20">
									<h5 class="color_dark fw_light m_bottom_15">{{ trans('ld.join_us_fb') }}</h5>
									<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fsocialgym&amp;width=235&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=438889712801266" style="border:none; overflow:hidden; width:235px; height:258px;"></iframe>
							</div>
							<!--subscribe-->
							<div class="col-lg-3 col-md-3 col-sm-3 m_bottom_50 m_xs_bottom_30">
								<h5 class="color_dark fw_light m_bottom_20">Newsletter</h5>
								<p class="fw_light m_bottom_25">{{ trans('ld.newsletter_desc') }}</p>
								<form class="subscribe_send_form">
									<ul>
										<li class="m_bottom_20">
											<input type="email" name="subscribe_email" placeholder="{{ trans('ld.your_mail') }}" class="r_corners bg_light w_full fw_light">
										</li>
										<li>
											<button class="fs_medium button_type_2 color_purple transparent r_corners tr_all">{{ trans('ld.suscribe') }}</button>
										</li>
									</ul>
								</form>
							</div>
						</div>
					</div>
				</section>
				<!--bottom part-->
				<section class="footer_bottom_part t_align_c color_grey bg_light_4 fw_light">
					<p>SocialGym ® Fitness & Sports Tracker is a trademark of Gooveris Inc, 2014-2015 © All rights reserved</p>
				</section>
			</footer>
		</div>
		<!--back to top button-->
		<button id="back_to_top" class="circle icon_wrap_size_2 color_blue_hover color_grey_light_4 tr_all d_md_none">
			<i class="icon-angle-up fs_large"></i>
		</button>

		<!--libs-->
		<script src="{{ url('land/plugins/rs-plugin/js/jquery.themepunch.plugins.min.js') }}"></script>
		<script src="{{ url('land/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
		<script src="{{ url('land/plugins/jquery.appear.js') }}"></script>
		<script src="{{ url('land/plugins/afterresize.min.js') }}"></script>
		<script src="{{ url('land/plugins/jquery.easing.1.3.js') }}"></script>
		<script src="{{ url('land/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
		<script src="{{ url('land/plugins/jackbox/js/jackbox-packed.min.js') }}"></script>
		<script src="{{ url('land/plugins/jquery.easytabs.min.js') }}"></script>
		<!--Theme Initializer-->
		<script src="{{ url('land/js/theme.plugins.js') }}"></script>
		<script src="{{ url('land/js/theme.js') }}"></script>
	</body>
</html>