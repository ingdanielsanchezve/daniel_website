<template>
    <section id="links" class="custom-about-me-links bg-color-light">
		<div class="container">
			<div class="row justify-content-end">
				<div class="col-lg-3 text-center custom-xs-border-bottom p-0">
					<a data-hash href="#say-hello" class="text-decoration-none">
						<span class="custom-nav-button custom-divisors text-color-dark">
							<i class="icon-envelope-open icons text-color-primary"></i>
							{{ $t('cv.contact_me') }}
						</span>
					</a>
				</div>
				<div class="col-lg-3 text-center p-0">
					<a :href="profile.cv_url" target="_blank" class="text-decoration-none">
						<span class="custom-nav-button text-color-dark">
							<i class="icon-cloud-download icons text-color-primary"></i>
							{{ $t('cv.download_cv') }}
						</span>
					</a>
				</div>
				<div class="col-lg-1 col-sm-6 text-center p-0">
					<a href="/es" class="text-decoration-none">
						<span class="custom-nav-button text-color-dark">
							<img src="img/blank.gif" class="flag flag-es mr-1" :alt="$t('cv.spanish')"> {{ $t('cv.spa') }}
						</span>
					</a>
				</div>
				<div class="col-lg-1 col-sm-6 text-center p-0">
					<a href="/en" class="text-decoration-none">
						<span class="custom-nav-button text-color-dark">							
							<img src="img/blank.gif" class="flag flag-us mr-1" alt="$t('cv.english')"> {{ $t('cv.eng') }}
						</span>									
					</a>
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
