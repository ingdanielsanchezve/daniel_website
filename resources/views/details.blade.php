			<section id="details" class="section section-no-border bg-color-light m-0">
				<div class="container">
					<div class="row">
						<div class="col">

							<div class="custom-box-details bg-color-light custom-box-shadow-1 col-lg-6 ml-5 mb-5 mb-lg-4 float-right clearfix">
								<h4>@lang('cv.personal_details')</h4>
								<div class="row">
									<div class="col-md-5">
										<ul class="custom-list-style-1 p-0 mb-0">
											<li>
												<span class="text-color-dark">@lang('cv.birthday'):</span>
												<span class="custom-text-color-2">{{$profile->birthdate}}</span>
											</li>
											<li>
												<span class="text-color-dark">@lang('cv.marital'):</span>
												<span class="custom-text-color-2">{{$profile->marital_status}}</span>
											</li>
											<li>
												<span class="text-color-dark">@lang('cv.nationality'):</span>
												<span class="custom-text-color-2">{{$profile->nationality}}</span>
											</li>
										</ul>
									</div>
									<div class="col-md-7">
										<ul class="custom-list-style-1 p-0 mb-0">
											<li>
												<span class="text-color-dark">@lang('cv.skype'):</span>
												<span class="custom-text-color-2"><a class="custom-text-color-2" href="skype:{{$profile->skype}}?chat">{{$profile->skype}}</a></span>
											</li>
											<li>
												<span class="text-color-dark">@lang('cv.phone'):</span>
												<span class="custom-text-color-2"><a class="custom-text-color-2" href="tel:+584127667976">{{$profile->phone}}</a></span>
											</li>
											<li>
												<span class="text-color-dark">@lang('cv.email'):</span>
												<span class="custom-text-color-2"><a class="custom-text-color-2" href="mailto:{{$profile->email}}">{{$profile->email}}</a></span>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<h2 class="text-color-quaternary font-weight-extra-bold text-uppercase">@lang('cv.about_me')</h2>

							<p class="custom-text-color-2">{{$profile->aboutme}}</p>

							<div class="about-me-more" id="aboutMeMore">
								<p>{{$profile->aboutme_more1}}</p>
								<p>{{$profile->aboutme_more2}}</p>
								<p>{{$profile->aboutme_more3}}</p>
								<p>{{$profile->aboutme_more4}}</p>
							</div>

							<a id="aboutMeMoreBtn" class="btn btn-tertiary text-uppercase custom-btn-style-1 text-1" href="#">@lang('cv.view_more')</a>

						</div>
					</div>
				</div>
			</section>