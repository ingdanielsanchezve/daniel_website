<!DOCTYPE html>
<html>
	<head>

		@include('doc_header')
        @include('css')

	</head>
<body>

		<div class="body">

			<div role="main" class="main">

				<section class="page-header page-header-classic">
					<div class="container">
						<div class="row">
							<div class="col">
								<ul class="breadcrumb">
									<li><a href="/">Home</a></li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col p-static">
								<h1 data-title-border>@lang('cv.refunds')</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<section class="http-error">
						<div class="row justify-content-center py-3">
							<div class="col-md-7">
								<div class="http-error-main">
									<h3>@lang('cv.refunds_policy')</h3>
									@lang('cv.refunds_policy_text')
								</div>
							</div>
							<div class="col-md-4 mt-4 mt-md-0">
								<h4 class="text-primary">Here are some useful links</h4>
								<ul class="nav nav-list flex-column">
									<li class="nav-item"><a class="nav-link" href="cv/Daniel_Sanchez_Computer_Engineer.pdf"><i class="icon-cloud-download icons text-color-primary"></i> Download My CV</a></li>
									<li class="nav-item"><a class="nav-link" href="https://www.linkedin.com/in/ingdanielsanchezvzla/"><i class="fab fa-linkedin-in"></i> My LinkedIn Profile</a></li>
									<li class="nav-item"><a class="nav-link" href="https://github.com/ingdanielsanchezve/"> <i class="fab fa-github"></i> My Github</a></li>
									<li class="nav-item"><a class="nav-link" href="skype:live:ing.danielsanchez?chat"> <i class="fab fa-skype"></i> Let's talk on Skype</a></li>
								</ul>
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
