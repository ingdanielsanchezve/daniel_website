<template>
	<section id="certification" class="section section-secondary section-no-border m-0">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="text-color-quaternary text-uppercase font-weight-extra-bold m-0">{{ $t('cv.certifications') }}</h2>

                        <carousel paginationColor="#959595" :per-page="4" v-if="certifications.length">
					        <slide class="row" v-for="cert in certifications" v-bind:key="cert.id">

                                <div class="col-lg-3 col-sm-3 pb-4" v-if="cert.certified_by == 'TestDome'">
                                    <a :href="cert.url" target="_blank" :class="'testdome-certificate-stamp '+cert.level">
                                        <span class="testdome-certificate-name">{{ cert.name }}</span>
                                        <span class="testdome-certificate-test-name">{{ cert.title }} </span>
                                        <span class="testdome-certificate-card-logo">{{ cert.certified_by }} <br /> {{ cert.certified_type }}</span>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-sm-3 pb-4" v-if="cert.certified_by == 'Udemy' || cert.certified_by == 'LinkedIn'">
                                    <a :href="cert.url" target="_blank">
                                        <img :src="cert.url" :alt="cert.title" :title="cert.title" :style="'width:'+cert.width+'px; height:'+cert.height+'px'">
                                    </a>
                                </div>

						    </slide>
                        </carousel>

                        <div class="d-none table-responsive">
                            <table class="table table-borderless table-hover" v-if="certifications.length">

                                <tr v-for="cert in certifications" v-bind:key="cert.id">
                                    <td v-if="cert.certified_by == 'TestDome'">
                                        <a :href="cert.url" target="_blank" :class="'testdome-certificate-stamp '+cert.level">
                                            <span class="testdome-certificate-name">{{ cert.name }}</span>
                                            <span class="testdome-certificate-test-name">{{ cert.title }} </span>
                                            <span class="testdome-certificate-card-logo">{{ cert.certified_by }} <br /> {{ cert.certified_type }}</span>
                                        </a>
                                    </td>
                                    <td v-if="cert.certified_by == 'Udemy' || cert.certified_by == 'LinkedIn'">
                                        <a :href="cert.url" target="_blank">
                                            <img :src="cert.url" :alt="cert.title" :title="cert.title" :style="'width:'+cert.width+'px; height:'+cert.height+'px'">
                                        </a>
                                    </td>
                                    <td class="align-middle">
                                        {{ cert.title }}
                                    </td>
                                    <td>
                                        <img :src="'img/logos/'+cert.logo" :alt="cert.title" :title="cert.title" class="logo">
                                    </td>
                                </tr>
                            </table>
                        </div>

				</div>
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
                certifications: {}
            }
        },
        methods: {

            getCertificationInfo(){
                apiService.getCertificationInfo().then(response => (this.certifications = response.data));
            }

		},
		components: { Carousel, Slide },
        mounted () {
            this.getCertificationInfo();
        }
    }
</script>
<style>
    #certification{
        max-height: 1080px;
    }
    .logo{
        width: 64px;
        height: auto;
    }

</style>
