<template>
    	<section id="say-hello" style="background: url(img/resume/about-me/about-me-bg-1.jpg); background-size: cover;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 p-0">
					<section class="section section-no-border h-100 m-0">
						<div class="row m-0">
							<div class="col-half-section col-half-section-left ml-3">
								<h2 class="text-color-light text-uppercase font-weight-extra-bold">{{ $t('cv.contact_me') }}</h2>
								<a :href="'mailto:'+profile.email" class="text-decoration-none">
									<span class="feature-box custom-feature-box align-items-center mb-4">
										<span class="custom-feature-box-icon">
											<i class="icon-envelope icons text-color-light"></i>
										</span>
										<span class="feature-box-info">
											<span class="custom-label font-weight-semibold text-uppercase custom-text-color-1">{{ $t('cv.email') }}</span>
											<strong class="font-weight-light text-color-light custom-opacity-effect-1">{{profile.email}}</strong>
										</span>
									</span>
								</a>
								<a :href="'tel:+'+profile.phone" class="text-decoration-none">
									<span class="feature-box custom-feature-box align-items-center mb-4">
										<span class="custom-feature-box-icon">
											<i class="icon-phone icons text-color-light"></i>
										</span>
										<span class="feature-box-info">
											<span class="custom-label font-weight-semibold text-uppercase custom-text-color-1">{{ $t('cv.phone') }}</span>
											<strong class="font-weight-light text-color-light custom-opacity-effect-1">{{profile.whatsapp}}</strong>
										</span>
									</span>
								</a>
								<a :href="'skype:'+profile.skype+'?chat'" class="text-decoration-none">
									<span class="feature-box custom-feature-box align-items-center mb-4">
										<span class="custom-feature-box-icon">
											<i class="icon-social-skype icons text-color-light"></i>
										</span>
										<span class="feature-box-info">
											<span class="custom-label font-weight-semibold text-uppercase custom-text-color-1">{{ $t('cv.skype') }}</span>
											<strong class="font-weight-light text-color-light custom-opacity-effect-1">{{profile.skype}}</strong>
										</span>
									</span>
								</a>
								</a>
								<a :href="'https://api.whatsapp.com/send?phone='+profile.phone" class="text-decoration-none">
									<span class="feature-box custom-feature-box align-items-center mb-4">
										<span class="custom-feature-box-icon">
											<i class="fab fa-whatsapp text-color-light"></i>
										</span>
										<span class="feature-box-info">
											<span class="custom-label font-weight-semibold text-uppercase custom-text-color-1">Whatsapp</span>
											<strong class="font-weight-light text-color-light custom-opacity-effect-1">{{profile.whatsapp}}</strong>
										</span>
									</span>
								</a>
								<span class="feature-box custom-feature-box align-items-center">
									<span class="custom-feature-box-icon">
										<i class="icon-share icons text-color-light"></i>
									</span>
									<a :href="profile.linkedin" target="_blank" class="d-flex text-decoration-none">
										<span class="feature-box-info">
											<span class="custom-label font-weight-semibold text-uppercase custom-text-color-1">Social</span>
											<strong class="font-weight-light text-color-light custom-opacity-effect-1">LinkedIn</strong>
										</span>
									</a>
									<a :href="profile.github" target="_blank" class="d-flex text-decoration-none">
										<span class="feature-box-info custom-both-side-border mt-2">
											<strong class="font-weight-light text-color-light custom-opacity-effect-1">GitHub</strong>
										</span>
									</a>										
								</span>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</section>
</template>

<script>
    export default {
        props: ['profile']
    }
</script>