	<section id="experience" class="section section-secondary section-no-border m-0">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="text-color-quaternary text-uppercase font-weight-extra-bold">@lang('cv.experience') </h2>
					<section class="timeline custom-timeline" id="timeline">
						<div class="timeline-body">
							@foreach($experiences as $exp)
							<article class="timeline-box right custom-box-shadow-2">
								<div class="row">
									<div class="experience-info col-lg-3 col-sm-5 bg-color-primary">
										<span class="from text-color-light text-uppercase">
											@lang('cv.from')
											<span class="font-weight-semibold">{{$exp->duration_from}}</span>
										</span>
										<span class="to text-color-light text-uppercase">
											@lang('cv.to')
											<span class="font-weight-semibold">{{$exp->duration_to}}</span>
										</span>
										<p class="text-color-light">({{$exp->duration_time}})</p>
										<span class="company text-color-light font-weight-semibold">
											{{$exp->company}} <br> {{$exp->observation}}
											<span class="company-location text-color-light font-weight-normal text-uppercase">{{$exp->location}}</span>
										</span>
									</div>
									<div class="experience-description col-lg-9 col-sm-7 bg-color-light">
										<h4 class="text-color-dark font-weight-semibold">{{$exp->title}}</h4>
										<ul>
											@foreach($exp->detail_experiences as $det)
												<li>{{$det->description}}</li>
											@endforeach
										</ul>
									</div>
								</div>
							</article>									
							@endforeach
							<div class="timeline-bar"></div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</section>