			<section id="recommendations" class="section section-no-border bg-color-primary m-0">
				<div class="container">
					<div class="row text-center">
						<div class="col">
							<h2 class="text-uppercase font-weight-bold">@lang('cv.recommendations')</h2>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="owl-carousel custom-nav m-0" data-plugin-options="{'items': 1, 'loop': false, 'dots': true, 'nav': true, 'autoHeight': true}">
							@foreach($recommendations as $rec)
							<div class="row justify-content-center">
								<div class="col-lg-10">
									<div class="testimonial testimonial-style-2 testimonial-with-quotes custom-testimonial-style">
										<blockquote>
											<p class="custom-primary-font text-color-light">{{$rec->text}}</p>
										</blockquote>
										<div class="testimonial-author mt-5">
											<a href="{{$rec->linkedin_profile}}" target="_blank" class="img-fluid custom-rounded-image">
												<img src="{{$rec->picture}}" class="img-fluid custom-rounded-image" alt="{{$rec->made_by}}" />
												<p>
													<strong class="text-uppercase text-color-light">{{$rec->made_by}}</strong>
												</p>
												<p class="text-color-dark">{{$rec->title}} @lang('cv.at') {{$rec->company}}</p>
											</a>
										</div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</section>