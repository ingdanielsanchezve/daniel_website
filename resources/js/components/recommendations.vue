<template>
	<section id="recommendations" class="section section-no-border bg-color-primary m-0">
		<div class="container">
			<div class="row text-center">
				<div class="col">
					<h2 class="text-uppercase text-color-light font-weight-bold">{{ $t('cv.recommendations') }}</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<carousel :per-page="1" v-if="recommendations.length">
					<slide class="my-row justify-content-center" v-for="rec in recommendations" v-bind:key="rec.id">
						<div class="col-lg-12">
							<div class="testimonial testimonial-style-2 testimonial-with-quotes custom-testimonial-style">
								<blockquote>
									<p class="custom-primary-font text-color-light">{{ rec.text }}</p>
								</blockquote>
								<div class="testimonial-author mt-5">
									<a :href="rec.linkedin_profile" target="_blank" class="img-fluid custom-rounded-image">
										<img :src="rec.picture" class="img-fluid custom-rounded-image" :alt="rec.made_by" />
										<p>
											<strong class="text-uppercase text-color-light">{{ rec.made_by }}</strong>
										</p>
										<p class="text-color-dark">{{ rec.title }} {{ $t('cv.at') }} {{ rec.company }}</p>
									</a>
								</div>
							</div>
						</div>
						
					</slide>
				</carousel>
				
			</div>
		</div>
	</section>
</template>

<script>

	import {APIService} from '../services/APIService';
	import { Carousel, Slide } from 'vue-carousel';

    const apiService = new APIService();

    export default {
        data () {
            return {
            recommendations: {}
            }
        },
        methods: {

            getRecommendationsInfo(){
                apiService.getRecommendationsInfo().then(response => (this.recommendations = response.data));
            }

		},
		components: { Carousel, Slide },
        mounted () {
            this.getRecommendationsInfo();
        }
    }
</script>
