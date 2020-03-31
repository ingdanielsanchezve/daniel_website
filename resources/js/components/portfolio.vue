<template>
	<section id="portfolio" class="section section-no-border bg-color-secondary m-0">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="text-color-quaternary font-weight-extra-bold text-uppercase">{{ $t('cv.portfolio') }}</h2>
					<v-gallery :images="portfolio">
					</v-gallery>
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
                portfolio: []
            }
        },
        methods: {

            getPortfolioInfo(){
                apiService.getPortfolioInfo().then(response => (this.portfolio = response.data));
            }

        },
        mounted () {
            this.getPortfolioInfo();
        }
    }
</script>
