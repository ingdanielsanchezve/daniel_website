	<section id="skills" class="section section-no-border bg-color-light m-0">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-8 mb-4 mb-md-0">
					<div class="row">
						<div class="col-lg-6">
							<h2 class="text-color-quaternary text-uppercase font-weight-extra-bold">@lang('cv.skills_language')</h2>
						</div>
					</div>
					<div class="row">
						@foreach($skills as $skill)
						<div class="col-lg-4 col-sm-4">
							<i class="fas fa-caret-right"></i> <a href="#" class="badge badge-primary">{{$skill->name}}</a>
						</div>
						@endforeach
					</div>
				</div>

				<div class="col-md-6 col-lg-4 col-sm-4">
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