<template>
	<section id="education" class="section section-no-border custom-bg-color-1 m-0">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="text-color-quaternary text-uppercase font-weight-extra-bold m-0">{{ $t('cv.education') }}</h2>
					<div class="owl-carousel nav-bottom custom-dots-style-1 mb-0" data-plugin-options="{'items': 1, 'loop': false, 'dots': true, 'nav': false}">
						<div class="row">							
							<div class="col-lg-4 col-sm-4 pb-4" v-for="educ in education" v-bind:key="educ.id">
								<div class="custom-box-details-2 bg-color-light custom-box-shadow-3">
									<i class="icon-graduation icons text-color-primary"></i>
									<h4 class="font-weight-semibold text-color-dark m-0">{{ educ.title }}</h4>
									<p class="custom-text-color-2 mb-1">{{ educ.institute }}</p>
									<strong class="text-color-primary">{{ educ.year_from }} - {{ educ.year_to }}</strong>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</template>

<script>

    import {APIService} from '../services/APIService';
    const apiService = new APIService();

    export default {
        data () {
            return {
            education: {}
            }
        },
        methods: {

            getEducationInfo(){
                apiService.getEducationInfo().then(response => (this.education = response.data));
            }

        },
        mounted () {
            this.getEducationInfo();
        }
    }
</script>
