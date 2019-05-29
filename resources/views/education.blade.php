
			<section id="education" class="section section-no-border custom-bg-color-1 m-0">
				<div class="container">
					<div class="row">
						<div class="col">
							<h2 class="text-color-quaternary text-uppercase font-weight-extra-bold m-0">@lang('cv.education')</h2>
							<div class="owl-carousel nav-bottom custom-dots-style-1 mb-0" data-plugin-options="{'items': 1, 'loop': false, 'dots': true, 'nav': false}">
								<div class="row">
									@foreach($education as $educ)
										<div class="col-lg-4 col-sm-4 pb-4">
											<div class="custom-box-details-2 bg-color-light custom-box-shadow-3">
												<i class="icon-graduation icons text-color-primary"></i>
												<h4 class="font-weight-semibold text-color-dark m-0">{{$educ->title}}</h4>
												<p class="custom-text-color-2 mb-1">{{$educ->institute}}</p>
												<strong class="text-color-primary">{{$educ->year_from}} - {{$educ->year_to}}</strong>
											</div>
										</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>