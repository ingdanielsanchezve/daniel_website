			<section id="portfolio" class="section section-no-border bg-color-secondary m-0">
				<div class="container">
					<div class="row">
						<div class="col">
							<h2 class="text-color-quaternary font-weight-extra-bold text-uppercase">@lang('cv.portfolio')</h2>
							<ul class="nav nav-pills sort-source custom-nav-sort mb-4" data-sort-id="portfolio" data-option-key="filter">
								<li class="nav-item active" data-option-value=".websites"><a class="nav-link text-light" href="#">@lang('cv.websites')</a></li>
							</ul>
							<div class="sort-destination-loader sort-destination-loader-showing">
								<div class="row image-gallery sort-destination lightbox" data-sort-id="portfolio" data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
									@foreach($portfolio as $port)
									<div class="col-12 col-sm-6 col-lg-3 isotope-item {{$port->category}}">
										<div class="image-gallery-item mb-4 pb-3">
											<a href="{{$port->img_url}}" class="lightbox-portfolio">
												<span class="thumb-info custom-thumb-info-1">
													<span class="thumb-info-wrapper">
														<span class="thumb-info-plus"></span>
														<img src="{{$port->img_url}}" class="img-fluid" alt="$port->title">
													</span>
												</span>
											</a>
										</div>
									</div>
									@endforeach							
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>