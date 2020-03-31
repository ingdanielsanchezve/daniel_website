<template>
	<header id="header" class="header-floating-icons" data-plugin-options="{'stickyEnabled': false, 'stickyEnableOnBoxed': false, 'stickyEnableOnMobile': false, 'stickyStartAt': 0, 'stickySetTop': '60px', 'stickyChangeLogo': false}">
				<div class="header-body animated slower fadeIn">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row" style="transform: translateY(calc(0vh - 0px));">
									<div class="header-nav pt-1">
										<div class="header-nav-main">
											<nav class="wrapper-spy collapse">
												<ul class="nav" id="mainNav">
													<li>
														<a data-hash="" href="#about-me" class="nav-link text-color-light bg-color-primary active">
															<i class="icon-home icons"></i>
															<span class="custom-tooltip">About Me</span>
														</a>
													</li>
													<li>
														<a data-hash="" href="#experience" class="nav-link text-color-light bg-color-primary">
															<i class="icon-eye icons"></i>
															<span class="custom-tooltip">Experience</span>
														</a>
													</li>
													<li>
														<a data-hash="" href="#education" class="nav-link text-color-light bg-color-primary">
															<i class="icon-briefcase icons"></i>
															<span class="custom-tooltip">Education</span>
														</a>
													</li>
													<li>
														<a data-hash="" href="#certification" class="nav-link text-color-light bg-color-primary">
															<i class="icon-badge icons"></i>
															<span class="custom-tooltip">Certifications</span>
														</a>
													</li>													
													<li>
														<a data-hash="" href="#recommendations" class="nav-link text-color-light bg-color-primary">
															<i class="icon-pencil icons"></i>
															<span class="custom-tooltip">Recommendations</span>
														</a>
													</li>
													<li>
														<a data-hash="" href="#skills" class="nav-link text-color-light bg-color-primary">
															<i class="icon-graduation icons"></i>
															<span class="custom-tooltip">Skills</span>
														</a>
													</li>
													<li>
														<a data-hash="" href="#portfolio" class="nav-link text-color-light bg-color-primary">
															<i class="icon-diamond icons"></i>
															<span class="custom-tooltip">Portfolio</span>
														</a>
													</li>													
													<li>
														<a data-hash="" href="#say-hello" class="nav-link text-color-light bg-color-primary">
															<i class="icon-envelope-open icons"></i>
															<span class="custom-tooltip">Contact me</span>
														</a>
													</li>
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
</template>

<script>
    export default {
        data () {
            return {
                items: [
                    {'text': 'cv.about_me', 'active': true, 'target': '#about-me', 'icon': 'icon-home'},
                    {'text': 'cv.experience', 'active': false, 'target': '#experience', 'icon': 'icon-eye'},
                    {'text': 'cv.education', 'active': false, 'target': '#education', 'icon': 'icon-briefcase'},
                    {'text': 'cv.certifications', 'active': false, 'target': '#certification', 'icon': 'icon-badge'},
                    {'text': 'cv.recommendations', 'active': false, 'target': '#recommendations', 'icon': 'icon-pencil'},
                    {'text': 'cv.skills', 'active': false, 'target': '#skills', 'icon': 'icon-graduation'},
                    {'text': 'cv.portfolio', 'active': false, 'target': '#portfolio', 'icon': 'icon-diamond'},
                    {'text': 'cv.contact_me', 'active': false, 'target': '#say-hello', 'icon': 'icon-envelope-open'}
                ]
            }
        },
        methods: {
            setActiveItem: function(item){
                this.items.forEach(item => {
                    item.active = false;
                })
                this.items[this.items.indexOf(item)].active = true;
            }
        }
    }
</script>

        