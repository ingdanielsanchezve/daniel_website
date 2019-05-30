			<section id="recommendations" class="section section-no-border bg-color-primary m-0">
				<div class="container">
					<div class="row">
						<div class="col">
							<h2 class="text-color-light font-weight-extra-bold text-uppercase">@lang('recommendations')</h2>
						</div>
						<div class="col-lg-12 p-0">
							<div class="owl-carousel custom-dots-style-1 custom-dots-color-1 custom-dots-position-1 mb-0" data-plugin-options="{'items': 1, 'autoHeight': true, 'loop': false, 'nav': false, 'dots': true}">
								@foreach($recommendations as $rec)
								<div>
									<div class="col">
										<div class="testimonial custom-testimonial-style-1 testimonial-with-quotes mb-0">
											<blockquote class="pb-2">
												<p class="custom-text-color-4">{{$rec->text}}</p>
											</blockquote>
											<div class="testimonial-author float-left">
												<p> <a href="{{$rec->linkedin_profile}}" target="_blank"><strong class="text-uppercase">{{$rec->made_by}} <i class="fab fa-linkedin-in"></i> </strong></a>  <span class="custom-text-color-4">{{$rec->title}} @lang('cv.at') {{$rec->company}}</span></p>
											</div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</section>