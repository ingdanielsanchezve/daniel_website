<!DOCTYPE html>
<html>
	<head>

		@include('doc_header')
        @include('css')

	</head>
<body>

	<div class="body coming-soon">
		<header id="header" data-plugin-options="{'stickyEnabled': false}">
			<div class="header-body border border-top-0 border-right-0 border-left-0">
				<div class="header-container container py-2">
					<div class="header-row">
						<div class="header-column">
							<div class="header-row">
								<p class="mb-0"><strong>@lang('cv.say_hello')</strong> (123) 456-789</span><span class="d-none d-sm-inline-block pl-1"> | <a href="mailto:ingdanielsanchezve@gmail.com">ingdanielsanchezve@gmail.com</a></span></p>
							</div>
						</div>
						<div class="header-column justify-content-end">
							<div class="header-row">
								<ul class="header-social-icons social-icons mr-2">
									<li class="social-icons-linkedin"><a href="https://www.linkedin.com/in/ingdanielsanchezvzla/" target="_blank" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a></li>
									<li class="social-icons-github"><a href="https://github.com/ingdanielsanchezve/" target="_blank" title="GitHub"><i class="fab fa-github"></i></a></li>
									<li class="social-icons-skype"><a href="skype:live:ing.danielsanchez?chat" target="_blank" title="Skype"><i class="fab fa-skype"></i></a></li>
								</ul>								
							</div>
						</div>
					</div>
				</div>
			</div>			
		</header>

		<div role="main" class="main" style="min-height: calc(100vh - 393px);">
			<div class="container">

				<div class="row">
					<div class="col">
						<hr class="solid my-5">
					</div>
				</div>
				<section class="http-error py-0">
					<div class="row justify-content-center py-3">
						<div class="col-6 text-center">
							<div class="http-error-main">
								<h2 class="mb-0">@lang('cv.calm')</h2>
								<span class="text-6 font-weight-bold text-color-dark">@lang('cv.calm_message')</span>
								<p class="text-3 my-4">@lang('cv.calm_explain')</p>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>

		<footer id="footer">
			
			<div class="footer-copyright footer-copyright-style-2">
				<div class="container py-2">
					<div class="row py-4">
						<div class="col-md-4 d-flex align-items-center justify-content-center justify-content-md-start mb-2 mb-lg-0">
							<p>Copyright © 2019 Daniel Sánchez, all rights reserved.</p>
						</div>
						<div class="col-md-8 d-flex align-items-center justify-content-center justify-content-md-end mb-4 mb-lg-0">
							<p><i class="far fa-envelope text-color-primary top-1 p-relative"></i><a href="mailto:ingdanielsanchezve@gmail.com" class="opacity-7 pl-1">ingdanielsanchezve@gmail.com</a></p>
							<ul class="footer-social-icons social-icons social-icons-clean social-icons-icon-light ml-3">
								<li class="social-icons-linkedin"><a href="https://www.linkedin.com/in/ingdanielsanchezvzla/" target="_blank" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a></li>
								<li class="social-icons-github"><a href="https://github.com/ingdanielsanchezve/" target="_blank" title="GitHub"><i class="fab fa-github"></i></a></li>
								<li class="social-icons-skype"><a href="skype:live:ing.danielsanchez?chat" target="_blank" title="Skype"><i class="fab fa-skype"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	@include('js')

	</body>
</html>
