			<section id="say-hello" class="container-fluid">
				<div class="row">
					<div class="col-lg-6 p-0">
						<section class="section section-no-border bg-color-primary h-100 m-0">
							<div class="row justify-content-end m-0">
								<div class="col-half-section col-half-section-right mr-3">
									
									<h2 class="text-color-quaternary text-uppercase font-weight-extra-bold">Say Hello</h2>
									<form id="contactForm" class="contact-form custom-form-style" action="php/contact-form.php" method="post">
										<div class="contact-form-success alert alert-success d-none mt-4" id="contactSuccess">
											<strong>Success!</strong> Your message has been sent to us.
										</div>
										<div class="contact-form-error alert alert-danger d-none mt-4" id="contactError">
											<strong>Error!</strong> There was an error sending your message.
											<span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>
										</div>
										
										<div class="form-content">
											<div class="form-control-custom">
												<input type="text" class="form-control" name="name" placeholder="Your Name *" data-msg-required="This field is required." id="name" required="" />
											</div>
											<div class="form-control-custom">
												<input type="text" class="form-control" name="subject" placeholder="Subject *" data-msg-required="This field is required." id="subject" required="" />
											</div>
											<div class="form-control-custom">
												<textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" placeholder="Message*" id="message" required="" aria-required="true"></textarea>
											</div>
											<input type="submit" class="btn btn-quaternary text-color-light text-uppercase font-weight-semibold outline-none custom-btn-style-2 custom-border-radius-1" value="Submit" />
										</div>
									</form>

								</div>
							</div>
						</section>
					</div>
					<div class="col-lg-6 p-0">
						<section class="section section-no-border h-100 m-0" style="background: url(img/demos/resume/about-me/about-me-bg-1.jpg); background-size: cover;">
							<div class="row m-0">
								<div class="col-half-section col-half-section-left ml-3">
									<a href="mailto:ingdanielsanchezve@gmail.com" class="text-decoration-none">
										<span class="feature-box custom-feature-box align-items-center mb-4">
											<span class="custom-feature-box-icon">
												<i class="icon-envelope icons text-color-light"></i>
											</span>
											<span class="feature-box-info">
												<span class="custom-label font-weight-semibold text-uppercase custom-text-color-1">Email</span>
												<strong class="font-weight-light text-color-light custom-opacity-effect-1">ingdanielsanchezve@gmail.com</strong>
											</span>
										</span>
									</a>
									<a href="tel:+584127667976" class="text-decoration-none">
										<span class="feature-box custom-feature-box align-items-center mb-4">
											<span class="custom-feature-box-icon">
												<i class="icon-phone icons text-color-light"></i>
											</span>
											<span class="feature-box-info">
												<span class="custom-label font-weight-semibold text-uppercase custom-text-color-1">Phone</span>
												<strong class="font-weight-light text-color-light custom-opacity-effect-1">(+58) 412 766-7976</strong>
											</span>
										</span>
									</a>
									<a href="skype:live:ing.danielsanchez?chat" class="text-decoration-none">
										<span class="feature-box custom-feature-box align-items-center mb-4">
											<span class="custom-feature-box-icon">
												<i class="icon-social-skype icons text-color-light"></i>
											</span>
											<span class="feature-box-info">
												<span class="custom-label font-weight-semibold text-uppercase custom-text-color-1">Skype</span>
												<strong class="font-weight-light text-color-light custom-opacity-effect-1">live:ing.danielsanchez</strong>
											</span>
										</span>
									</a>
									<span class="feature-box custom-feature-box align-items-center">
										<span class="custom-feature-box-icon">
											<i class="icon-share icons text-color-light"></i>
										</span>
										<a href="https://www.linkedin.com/in/ingdanielsanchezvzla/" target="_blank" class="d-flex text-decoration-none">
											<span class="feature-box-info">
												<span class="custom-label font-weight-semibold text-uppercase custom-text-color-1">Social</span>
												<strong class="font-weight-light text-color-light custom-opacity-effect-1">LinkedIn</strong>
											</span>
										</a>
										<a href="http://github.com/ingdanielsanchezve" target="_blank" class="d-flex text-decoration-none">
											<span class="feature-box-info custom-both-side-border mt-2">
												<strong class="font-weight-light text-color-light custom-opacity-effect-1">GitHub</strong>
											</span>
										</a>										
									</span>
								</div>
							</div>
						</section>
					</div>
				</div>
			</section>