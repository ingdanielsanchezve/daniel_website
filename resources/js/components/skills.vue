<template>
    <section id="skills" class="section section-no-border bg-color-light m-0">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-8 mb-4 mb-md-0">
					<div class="row">
						<div class="col-lg-6">
							<h2 class="text-color-quaternary text-uppercase font-weight-extra-bold">{{ $t('cv.skills_language')}}</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-sm-4" v-for="skill in skills" v-bind:key="skill.id">
							<i class="fas fa-caret-right"></i> <a href="#" class="badge badge-primary">{{ skill.name }}</a>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-4 col-sm-4">
					<div class="row">
						<div class="col">
							<div class="custom-box-details bg-color-light custom-box-shadow-1">
								<h4 class="text-color-dark">{{ $t('cv.language')}}</h4>
								<ul class="custom-list-style-1 p-0">
									<li v-for="lang in languages" v-bind:key="lang.id">
										<span class="font-weight-semibold custom-max-width-1 text-color-dark">
											<img src="img/blank.gif" :class="'flag flag-'+lang.flag+' mr-1'" :alt="lang.name">
											{{ lang.name }}:
										</span>
										<span class="custom-text-color-2">{{ lang.level }}</span>
									</li>											
								</ul>
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
            skills: '',
            languages: ''
            }
        },
        methods: {

            getSkillsLanguagesInfo(){
				apiService.getSkillsLanguagesInfo()
						  .then(response => {
							  this.skills = response.data.skills;
							  this.languages = response.data.languages;
						   });
            },

        },
        mounted () {
            this.getSkillsLanguagesInfo();
        }
    }
</script>
