<template>
    <section id="about-me" class="section section-no-border section-parallax custom-section-padding-1 custom-position-1 custom-xs-bg-size-cover parallax-no-overflow m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/resume/about-me/about-me-bg-1.jpg">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 custom-sm-margin-bottom-1">
							<a href="/">
								<img :src="profile.picture" class="img-fluid custom-border custom-image-position-2 custom-box-shadow-4" alt />
							</a>
						</div>
						<div class="col-lg-6 col-xl-5">
							<h1 class="text-color-light custom-font-size-1">{{ profile.name }}</h1>
							<p class="text-color-light font-weight-normal custom-font-size-2">{{ profile.title }}</p>
							<p class="text-color-light font-weight-normal custom-font-size-3 custom-margin-bottom-1">{{ profile.technologies }}</p>
							<span class="custom-about-me-infos">
								<span class="custom-text-color-1 text-uppercase">{{ profile.location }}</span>
								<span class="custom-text-color-1 text-uppercase mb-3">{{ profile.subtitle }}</span>
								<span class="custom-text-color-1 text-uppercase">
									<strong class="text-color-light">{{ $t('cv.previous') }}: </strong>
									Senior Front-End Developer
									<a data-hash href="#experience" class="btn btn-tertiary text-uppercase custom-btn-style-1 text-1 ml-2">{{ $t('cv.view_more') }}</a>
								</span>
								<span class="custom-text-color-1 text-uppercase">
									<strong class="text-color-light">{{ $t('cv.education') }}: </strong>
									Computer Engineer
									<a data-hash href="#education" class="btn btn-tertiary text-uppercase custom-btn-style-1 text-1 ml-2">{{ $t('cv.view_more') }}</a>
								</span>
							</span>
						</div>
						<div class="col-lg-2 col-xl-3 d-none d-lg-block">
							<img src="img/resume/about-me/mouse.png" custom-anim class="img-fluid custom-image-pos-1" alt />
						</div>
					</div>
				</div>
				<ul class="social-icons custom-social-icons">
					<li class="social-icons-linkedin">
						<a :href="profile.linkedin" target="_blank" title="LinkedIn">
							<i class="fab fa-linkedin-in"></i>
						</a>
					</li>
					<li class="social-icons-github">
						<a :href="profile.github" target="_blank" title="GitHub">
							<i class="fab fa-github"></i>
						</a>
					</li>					
					<li class="social-icons-skype">
						<a :href="'skype:'+profile.skype+'?chat'" target="_blank" title="Skype">
							<i class="fab fa-skype"></i>
						</a>
					</li>					
				</ul>
			</section>
</template>

<script>
    export default {
        props: ['profile']
    }
</script>
