	<section id="certification" class="section section-secondary section-no-border m-0">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="text-color-quaternary text-uppercase font-weight-extra-bold m-0">@lang('cv.certifications')</h2>
					<div class="owl-carousel nav-bottom custom-dots-style-1 mb-0" data-plugin-options="{'items': 4, 'loop': true, 'dots': true, 'nav': false}">
						@for($i = 0; $i < count($certs); $i++)
							@if(($i+1) == 1 || ($i+1) % 4 == 0)
								<div class="row">
							@endif
							@switch($certs[$i]->certified_by)
								@case('TestDome')
									<div class="col-lg-3 col-sm-3 pb-4">
										<a href="{{$certs[$i]->url}}" target="_blank" class="testdome-certificate-stamp {{$certs[$i]->level}}">
											<span class="testdome-certificate-name">{{$certs[$i]->name}}</span>
											<span class="testdome-certificate-test-name">{{$certs[$i]->title}} </span>
											<span class="testdome-certificate-card-logo">{{$certs[$i]->certified_by}} <br /> {{$certs[$i]->certified_type}}</span>
										</a>
									</div>
								@break
								@case('Udemy')
									<div class="col-lg-3 col-sm-3 pb-4">
										<a href="{{$certs[$i]->url}}" target="_blank">
											<img src="{{$certs[$i]->url}}" alt="{{$certs[$i]->title}}" title="{{$certs[$i]->title}}" style="width:{{$certs[$i]->width}}px; height:{{$certs[$i]->height}}px">
										</a>
									</div>
								@break								
							@endswitch
							@if(($i+1) == 1 || ($i+1) % 4 == 0)
								</div>
							@endif
						@endfor
														
					</div>
				</div>
			</div>
		</div>
	</section>