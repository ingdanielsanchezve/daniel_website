			<section id="skills" class="section section-no-border bg-color-light m-0">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-6 col-lg-8 mb-4 mb-md-0">
							<div class="row">
								<div class="col-lg-6">
									<h2 class="text-color-quaternary text-uppercase font-weight-extra-bold">@lang('cv.skills_language')</h2>
									<div class="progress-bars custom-progress-bars">
										<div class="progress-label text-color-dark font-weight-semibold text-uppercase text-2">
											<span>Start Up</span>
										</div>

										<div class="progress mb-2">
											<div class="progress-bar" data-appear-progress-animation="60%"></div>
										</div>
										<div class="progress-label text-color-dark font-weight-semibold text-uppercase text-2">
											<span>Innovation</span>
										</div>
										<div class="progress mb-2">
											<div class="progress-bar" data-appear-progress-animation="80%" data-appear-animation-delay="300"></div>
										</div>
										<div class="progress-label text-color-dark font-weight-semibold text-uppercase text-2">
											<span>Products</span>
										</div>
										<div class="progress mb-2">
											<div class="progress-bar" data-appear-progress-animation="70%" data-appear-animation-delay="600"></div>
										</div>
										<div class="progress-label text-color-dark font-weight-semibold text-uppercase text-2">
											<span>CSS</span>
										</div>
										<div class="progress mb-2">
											<div class="progress-bar" data-appear-progress-animation="90%" data-appear-animation-delay="900"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="progress-bars custom-progress-bars custom-md-margin-top-1">
										<div class="progress-label text-color-dark font-weight-semibold text-uppercase text-2">
											<span>Javascript</span>
										</div>
										<div class="progress mb-2">
											<div class="progress-bar" data-appear-progress-animation="60%"></div>
										</div>
										<div class="progress-label text-color-dark font-weight-semibold text-uppercase text-2">
											<span>Business</span>
										</div>
										<div class="progress mb-2">
											<div class="progress-bar" data-appear-progress-animation="80%" data-appear-animation-delay="300"></div>
										</div>
										<div class="progress-label text-color-dark font-weight-semibold text-uppercase text-2">
											<span>E-commerce</span>
										</div>
										<div class="progress mb-2">
											<div class="progress-bar" data-appear-progress-animation="70%" data-appear-animation-delay="600"></div>
										</div>
										<div class="progress-label text-color-dark font-weight-semibold text-uppercase text-2">
											<span>Creative</span>
										</div>
										<div class="progress mb-2">
											<div class="progress-bar" data-appear-progress-animation="90%" data-appear-animation-delay="900"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-4">
							<div class="row">
								<div class="col">
									<div class="custom-box-details bg-color-light custom-box-shadow-1">
										<h4 class="text-color-dark">@lang('cv.language')</h4>
										<ul class="custom-list-style-1 p-0">
											@foreach($languages as $lang)
											<li>
												<span class="font-weight-semibold custom-max-width-1 text-color-dark"><img src="img/blank.gif" class="flag flag-{{$lang->flag}} mr-1" alt="{{$lang->name}}">{{$lang->name}}:</span>
												<span class="custom-text-color-2">{{$lang->level}}</span>
											</li>											
											@endforeach
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>