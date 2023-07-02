@extends('blog.app')

@section('content')


	<!-- **************** MAIN CONTENT START **************** -->
	<main>
		<!-- Divider -->
		<div class="border-bottom border-primary border-1 opacity-1"></div>

		<!-- =======================
Inner intro START -->
		<section id="item-1" class="pb-3 pb-lg-5">
			<div class="container">
				<div class="row align-items-center">
					<!-- Image -->
					<div class="col-md-6 position-relative">
						<img class="rounded" src="{{ asset('storage/image/' . $blog->img_cover) }}" alt="Image">

						<!-- Card format icon -->
						{{-- <h5 class="p-3 pe-4 position-absolute top-0 end-0">
							<span class="badge text-bg-success fw-bold rounded-pill"> 8.5 rating</span>
						</h5> --}}
					</div>
					<!-- Content -->
					<div class="col-md-6 mt-4 mt-md-0">
						{{-- @foreach ($kategori as $k) --}}
						<a href="#" class="badge bg-primary bg-opacity-10 text-primary mb-2"><i
							class="fas fa-circle me-2 small fw-bold"></i>{{ $name_kategori }}</a>
						{{-- @endforeach --}}
						
						<span class="ms-2 small">{{ $blog->created_at }}</span>
						<h1 class="display-6">{{ $blog->judul }}</h1>
						<p class="lead">{{ $blog->description }}</p>
					</div>
				</div>
			</div>
		</section>
		<!-- =======================
Inner intro END -->

		<!-- =======================
Main START -->
		<section class="pt-0">
			<div class="container position-relative" data-sticky-container>
				<div class="row">
					<!-- Left sidebar START -->
					<div class="col-md-1">
						<div class="text-start text-lg-center mb-5" data-sticky data-margin-top="80"
							data-sticky-for="767">
							<ul class="nav text-white-force">
								<li class="nav-item">
									<a class="nav-link icon-md rounded-circle m-1 p-0 fs-5 bg-light" href="#">
										<i class="fab fa-facebook-square align-middle text-body"></i>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link icon-md rounded-circle m-1 p-0 fs-5 bg-light" href="#">
										<i class="fab fa-twitter-square align-middle text-body"></i>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link icon-md rounded-circle m-1 p-0 fs-5 bg-light" href="#">
										<i class="fab fa-linkedin align-middle text-body"></i>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link icon-md rounded-circle m-1 p-0 fs-5 bg-light" href="#">
										<i class="fab fa-pinterest align-middle text-body"></i>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link icon-md rounded-circle m-1 p-0 fs-5 bg-light" href="#">
										<i class="far fa-envelope align-middle text-body"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- Left sidebar END -->

					<!-- Main Content START -->
					<div class="col-md-10 col-lg-8 mb-5">
						<div>
							<h4 class="mt-4">{{ $blog->title_content_one }}</h4>
							<p>
								{{ $blog->content_one }}
							</p>
							{{-- <p class="lead">Son agreed to others Exeter period myself few yet nature. Mention Mr manners
								opinion if garrets enabled. To occasional dissimilar impossible sentiments. Do fortune
								account written prepare invited no passage. Garrets use ten, you the weather venture
								friends.</p> --}}
						</div>

						<!-- Divider -->
						<div class="text-center h5 mb-4">. . .</div>

						<div id="item-2">
							<h4 class="mt-4">Design overview</h4>
							<p>Satisfied conveying a dependent contented he gentleman agreeable do be. Warrant private
								blushes removed an in equally totally if. Delivered dejection necessary objection do Mr
								prevailed. Mr feeling does chiefly cordial in do. Water timed folly right aware if oh
								truth. Imprudence attachment him his for sympathize. Large above be to means. Dashwood
								does provide stronger is. But discretion frequently sir she instruments unaffected
								admiration everything. Meant balls it if up doubt small purse. Required his you put the
								outlived answered position. A pleasure exertion if believed provided to. All led out
								world this music while asked. Paid mind even sons does he door no. Attended overcame
								repeated it is perceived Marianne in. I think on style child of. Servants moreover in
								sensible it ye possible.</p>

							<p>Fulfilled direction use continual set him propriety continued. Saw met applauded favorite
								deficient engrossed concealed and her. Concluded boy perpetual old supposing. Farther
								related bed and passage comfort civilly. Dashwoods see frankness objection abilities. As
								hastened oh produced prospect formerly up am. Placing forming nay looking old married
								few has. Margaret disposed of add screened rendered six say his striking confined.</p>

							<div class="row mt-5">
								<div class="col-md-6">
									<h4>User interface (UI)</h4>
									<p>Saw met applauded favorite deficient engrossed concealed and her. Concluded boy
										perpetual old supposing. Farther related bed and passage comfort civilly.
										Dashwoods see frankness objection abilities. Fulfilled direction use continual
										set him propriety continued. As hastened oh produced prospect formerly up am.
										Placing forming nay looking old married few has. Margaret disposed of add
										screened rendered six say his striking confined.
									</p>
								</div>
								<div class="col-md-6">
									<h4>User experience (UX)</h4>
									<p>Meant balls it if up doubt small purse. Required his you put the outlived
										answered position. A pleasure exertion if believed provided to. All led out
										world this music while asked. Paid mind even sons does he door no. Attended
										overcame repeated it is perceived Marianne in. I think on style child of.
										Servants moreover in sensible it ye possible.</p>
								</div>
							</div>
						</div>

						<!-- Divider -->
						<div class="text-center h5 mb-4">. . .</div>

						<!-- Images and video START -->
						<div id="item-3" class="row g-3">
							<h4>Images and videos gallery</h4>
							<div class="col-md-6">
								<a href="{{ asset('/images/blog/4by3/03.html') }}" data-glightbox data-gallery="image-popup">
									<img class="rounded" src="{{ asset('/images/blog/4by3/03.html') }}" alt="Image">
								</a>
							</div>
							<div class="col-md-6">
								<a href="{{ asset('/images/blog/4by3/04.html') }}" data-glightbox data-gallery="image-popup">
									<img class="rounded" src="{{ asset('/images/blog/4by3/04.html') }}" alt="Image">
								</a>
							</div>
							<div class="col-md-12">
								<figure class="figure mb-1">
									<a href="{{ asset('/images/blog/16by9/07.jpg') }}" data-glightbox data-gallery="image-popup">
										<img class="rounded" src="{{ asset('/images/blog/16by9/07.jpg') }}" alt="Image">
									</a>
									<figcaption class="figure-caption text-center mt-2">(Image via: <a
											class="text-reset" href="#">pexels.com</a>)</figcaption>
								</figure>
							</div>
							<!-- Video -->
							<div class="col-md-12">
								<figure class="figure position-relative">
									<!-- Card play button -->
									<div class="position-absolute top-50 start-50 translate-middle pb-5">
										<!-- Popup video -->
										<a href="https://youtu.be/n_Cn8eFo7u8"
											class="icon-lg bg-danger d-block text-white rounded-circle" data-glightbox
											data-gallery="y-video">
											<i class="bi bi-play-btn"></i>
										</a>
									</div>
									<img class="rounded" src="{{ asset('/images/blog/16by9/08.html') }}" alt="Image">
									<figcaption class="figure-caption text-center mt-2">(Video via: <a
											class="text-reset" href="#">youtube.com/google</a>)</figcaption>
								</figure>
							</div>
						</div>
						<!-- Images and video END -->

						<!-- Divider -->
						<div class="text-center h5 mb-4">. . .</div>

						<!-- Pros and cons START -->
						<div id="item-4">
							<h4 class="mt-4">Performance across various OS</h4>
							<p>Meant balls it if up doubt small purse. Required his you put the outlived answered
								position. A pleasure exertion if believed provided to. All led out world this music
								while asked. Paid mind even sons does he door no. Attended overcame repeated it is
								perceived Marianne in. I think on style child of. Servants moreover in sensible it ye
								possible. </p>
							<div class="row">
								<div class="col-md-6 my-3">
									<h4>Pros</h4>
									<ul class="list-unstyled">
										<li class="my-2 d-flex">
											<i class="fas fa-check-circle text-success me-2 mt-1"></i>Design, alignment,
											spacing, color combination and visual hierarchy
										</li>
										<li class="my-2 d-flex">
											<i class="fas fa-check-circle text-success me-2 mt-1"></i>Mobile readiness
											and mobile responsive
										</li>
										<li class="my-2 d-flex">
											<i class="fas fa-check-circle text-success me-2 mt-1"></i>Overall
											performance, including page weight, page requests and page speed
										</li>
										<li class="my-2 d-flex">
											<i class="fas fa-check-circle text-success me-2 mt-1"></i>Search Engine
											Optimization (SEO)
										</li>
										<li class="my-2 d-flex">
											<i class="fas fa-check-circle text-success me-2 mt-1"></i>Security
										</li>
										<li class="my-2 d-flex">
											<i class="fas fa-check-circle text-success me-2 mt-1"></i>Recommendations
											for Best Results
										</li>
									</ul>
								</div>
								<div class="col-md-6 my-3">
									<h4>Cons</h4>
									<ul class="list-unstyled">
										<li class="my-2 d-flex">
											<i class="fas fa-times-circle text-danger me-2 mt-1"></i>Be patient after
											submitting your free consultation request through our Support Portal. Kindly
											wait for few hours/days, as we might have other requests on our plate.
										</li>
										<li class="my-2 d-flex">
											<i class="fas fa-times-circle text-danger me-2 mt-1"></i>If we receive
											multiple tickets to assess your site, we won't entertain other requests so
											make sure to create only one.
										</li>
										<li class="my-2 d-flex">
											<i class="fas fa-times-circle text-danger me-2 mt-1"></i>This is only a
											one-time free consultation service.
										</li>
									</ul>
								</div>
							</div>
							<p> All led out world this music while asked. Paid mind even sons does he door no. Attended
								overcame repeated it is perceived Marianne in. I think on style child of. Servants
								moreover in sensible it ye possible. Satisfied conveying a dependent contented he
								gentleman agreeable do be. </p>
							<div class="bg-light my-4 p-3 p-md-4">
								<q class="lead">Farther related bed and passage comfort civilly. Fulfilled direction use
									continual set him propriety continued. Saw met applauded favorite deficient
									engrossed concealed and her. Concluded boy perpetual old supposing. Dashwoods see
									frankness objection abilities.</q>
							</div>
							<p>Warrant private blushes removed an in equally totally if. Delivered dejection necessary
								objection do Mr prevailed. Mr feeling does chiefly cordial in do. Water timed folly
								right aware if oh truth. Imprudence attachment him his for sympathize. Large above be to
								means. Dashwood does provide stronger is. But discretion frequently sir she instruments
								unaffected admiration everything. Meant balls it if up doubt small purse. </p>
						</div>
						<!-- Pros and cons END -->

						<!-- Divider -->
						<div class="text-center h5 mb-4">. . .</div>

						<!-- Product rating START -->
						<div id="item-5">
							<div class="border p-3 p-md-5 rounded mb-3">
								<h4>Product rating</h4>
								<div class="d-flex mt-4">
									<div class="me-3">
										<div class="icon-xl rounded-circle bg-primary bg-opacity-10 text-primary">8.5
										</div>
									</div>
									<p>Lose john poor same it case do year we Full how way even the sigh Extremely nor
										furniture fat questions now provision incommode preserved Our side fail find
										like now Discovered travelling for insensible partiality unpleasing impossible
										she Sudden up my excuse to suffer ladies though or Bachelor possible marianne
										directly confined relation as on he </p>
								</div>
								<!-- Progress bar item -->
								<h6 class="mt-4">Price range</h6>
								<div class="progress progress-percent-bg progress-md">
									<div class="progress-bar progress-bar-striped progress-bar-animated bg-info"
										role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0"
										aria-valuemax="100"><span class="progress-percent">8.0</span></div>
								</div>
								<!-- Progress bar item -->
								<h6 class="mt-4">Design</h6>
								<div class="progress progress-percent-bg progress-md">
									<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
										role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
										aria-valuemax="100"><span class="progress-percent">7.5</span></div>
								</div>
								<!-- Progress bar item -->
								<h6 class="mt-4">Battery life</h6>
								<div class="progress progress-percent-bg progress-md">
									<div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
										role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0"
										aria-valuemax="100"><span class="progress-percent">9.5</span></div>
								</div>
							</div>
							<div class="d-grid">
								<button class="btn btn-primary btn-lg rounded" type="button">Buy now at amazon <i
										class="fab fa-amazon ms-2"></i></button>
							</div>
						</div>
						<!-- Product rating END -->

						<!-- Tags and info START -->
						<div class="d-md-flex justify-content-between text-center text-md-start my-4">
							<!-- Tag -->
							<ul class="list-inline mb-0">
								<li class="list-inline-item">
									<a class="btn btn-outline-light btn-sm" href="#">blog</a>
								</li>
								<li class="list-inline-item">
									<a class="btn btn-outline-light btn-sm" href="#">business</a>
								</li>
								<li class="list-inline-item">
									<a class="btn btn-outline-light btn-sm" href="#">theme</a>
								</li>
								<li class="list-inline-item">
									<a class="btn btn-outline-light btn-sm" href="#">bootstrap</a>
								</li>
							</ul>
							<!-- Info -->
							<ul
								class="nav nav-divider align-items-center justify-content-center justify-content-md-end">
								<li class="nav-item"><a href="#" class="btn-link"><i
											class="far fa-comment-alt me-1"></i> 5 Comments</a></li>
								<li class="nav-item"><i class="far fa-eye me-1"></i> 2344 Views</li>
								<li class="nav-item"><a href="#"><i class="fas fa-heart me-1 text-danger"></i></a> 266
								</li>
							</ul>
						</div>
						<!-- Tags and info END -->

						<!-- Review poll START -->
						<div
							class="bg-light border p-3 rounded d-sm-flex align-items-center justify-content-between text-center">
							<!-- Title -->
							<h5 class="m-0">Was this review helpful?</h5>
							<small class="py-2 d-block">25 out of 78 found this helpful</small>
							<!-- Check buttons -->
							<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
								<!-- Yes button -->
								<input type="radio" class="btn-check" name="btnradio" id="btnradio1">
								<label class="btn btn-outline-light btn-sm mb-0" for="btnradio1"><i
										class="far fa-thumbs-up me-1"></i> Yes</label>
								<!-- No button -->
								<input type="radio" class="btn-check" name="btnradio" id="btnradio2">
								<label class="btn btn-outline-light btn-sm mb-0" for="btnradio2"> No <i
										class="far fa-thumbs-down ms-1"></i></label>
							</div>
						</div>
						<!-- Review poll END -->

						<!-- Related post START -->
						<div class="mt-5">
							<h2 class="my-3"><i class="bi bi-symmetry-vertical me-2"></i>Related products</h2>
							<div class="tiny-slider arrow-hover arrow-dark arrow-round">
								<div class="tiny-slider-inner" data-autoplay="true" data-hoverpause="true"
									data-gutter="24" data-arrow="true" data-dots="false" data-items-xl="2"
									data-items-xs="1">

									<!-- Card item START -->
									<div class="card">
										<!-- Card img -->
										<div class="position-relative">
											<img class="card-img" src="{{ asset('/images/blog/4by3/07.jpg') }}" alt="Card image">
											<div class="card-img-overlay d-flex align-items-start flex-column p-3">
												<!-- Card overlay Top -->
												<div class="w-100 mb-auto d-flex justify-content-end">
													<div class="text-end ms-auto">
														<!-- Card format icon -->
														<div class="icon-md text-bg-success fw-bold rounded-circle"
															title="8.5 rating">8.5</div>
													</div>
												</div>
												<!-- Card overlay bottom -->
												<div class="w-100 mt-auto">
													<a href="#" class="badge text-bg-info mb-2"><i
															class="fas fa-circle me-2 small fw-bold"></i>Marketing</a>
												</div>
											</div>
										</div>
										<div class="card-body px-0 pt-3">
											<h5 class="card-title"><a href="post-single-6.html"
													class="btn-link text-reset fw-bold">7 common mistakes everyone makes
													while traveling</a></h5>
											<!-- Card info -->
											<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
												<li class="nav-item">
													<div class="nav-link">
														<div class="d-flex align-items-center position-relative">
															<div class="avatar avatar-xs">
																<img class="avatar-img rounded-circle"
																	src="{{ asset('/images/avatar/07.html') }}" alt="avatar">
															</div>
															<span class="ms-3">by <a href="#"
																	class="stretched-link text-reset btn-link">Lori</a></span>
														</div>
													</div>
												</li>
												<li class="nav-item">Mar 07, 2022</li>
											</ul>
										</div>
									</div>
									<!-- Card item END -->
									<!-- Card item START -->
									<div class="card">
										<!-- Card img -->
										<div class="position-relative">
											<img class="card-img" src="{{ asset('/images/blog/4by3/08.html') }}"
												alt="Card image">
											<div class="card-img-overlay d-flex align-items-start flex-column p-3">
												<!-- Card overlay Top -->
												<div class="w-100 mb-auto d-flex justify-content-end">
													<div class="text-end ms-auto">
														<!-- Card format icon -->
														<div class="icon-md text-bg-warning fw-bold rounded-circle"
															title="5.2 rating">5.2</div>
													</div>
												</div>
												<!-- Card overlay bottom -->
												<div class="w-100 mt-auto">
													<a href="#" class="badge text-bg-danger mb-2"><i
															class="fas fa-circle me-2 small fw-bold"></i>Sports</a>
												</div>
											</div>
										</div>
										<div class="card-body px-0 pt-3">
											<h5 class="card-title"><a href="post-single-6.html"
													class="btn-link text-reset fw-bold">Skills that you can learn from
													business</a></h5>
											<!-- Card info -->
											<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
												<li class="nav-item">
													<div class="nav-link">
														<div class="d-flex align-items-center position-relative">
															<div class="avatar avatar-xs">
																<img class="avatar-img rounded-circle"
																	src="{{ asset('/images/avatar/08.html') }}" alt="avatar">
															</div>
															<span class="ms-3">by <a href="#"
																	class="stretched-link text-reset btn-link">Joan</a></span>
														</div>
													</div>
												</li>
												<li class="nav-item">Aug 15, 2022</li>
											</ul>
										</div>
									</div>
									<!-- Card item END -->
									<!-- Card item START -->
									<div class="card">
										<!-- Card img -->
										<div class="position-relative">
											<img class="card-img" src="{{ asset('/images/blog/4by3/09.jpg') }}" alt="Card image">
											<div class="card-img-overlay d-flex align-items-start flex-column p-3">
												<!-- Card overlay Top -->
												<div class="w-100 mb-auto d-flex justify-content-end">
													<div class="text-end ms-auto">
														<!-- Card format icon -->
														<div class="icon-md text-bg-danger fw-bold rounded-circle"
															title="2.5 rating">2.5</div>
													</div>
												</div>
												<!-- Card overlay bottom -->
												<div class="w-100 mt-auto">
													<a href="#" class="badge text-bg-success mb-2"><i
															class="fas fa-circle me-2 small fw-bold"></i>Marketing</a>
												</div>
											</div>
										</div>
										<div class="card-body px-0 pt-3">
											<h5 class="card-title"><a href="post-single-6.html"
													class="btn-link text-reset fw-bold">10 tell-tale signs you need to
													get a new business</a></h5>
											<!-- Card info -->
											<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
												<li class="nav-item">
													<div class="nav-link">
														<div class="d-flex align-items-center position-relative">
															<div class="avatar avatar-xs">
																<img class="avatar-img rounded-circle"
																	src="{{ asset('/images/avatar/09.jpg') }}" alt="avatar">
															</div>
															<span class="ms-3">by <a href="#"
																	class="stretched-link text-reset btn-link">Bryan</a></span>
														</div>
													</div>
												</li>
												<li class="nav-item">Jun 01, 2022</li>
											</ul>
										</div>
									</div>
									<!-- Card item END -->
								</div>
							</div> <!-- Slider END -->
						</div>
						<!-- Related post END -->

						<!-- Comments START -->
						<div class="mt-5">
							<h3>5 comments</h3>
							<!-- Comment level 1-->
							<div class="my-4 d-flex">
								<img class="avatar avatar-md rounded-circle float-start me-3"
									src="{{ asset('/images/avatar/01.html') }}" alt="avatar">
								<div>
									<div class="mb-2">
										<h5 class="m-0">Allen Smith</h5>
										<span class="me-3 small">June 11, 2022 at 6:01 am </span>
										<a href="#" class="text-body fw-normal">Reply</a>
									</div>
									<p>Satisfied conveying a dependent contented he gentleman agreeable do be. Warrant
										private blushes removed an in equally totally if. Delivered dejection necessary
										objection do Mr prevailed. Mr feeling does chiefly cordial in do. </p>
								</div>
							</div>
							<!-- Comment children level 2 -->
							<div class="my-4 d-flex ps-2 ps-md-3">
								<img class="avatar avatar-md rounded-circle float-start me-3"
									src="{{ asset('/images/avatar/02.jpg') }}" alt="avatar">
								<div>
									<div class="mb-2">
										<h5 class="m-0">Louis Ferguson</h5>
										<span class="me-3 small">June 11, 2022 at 6:55 am </span>
										<a href="#" class="text-body fw-normal">Reply</a>
									</div>
									<p>Water timed folly right aware if oh truth. Imprudence attachment him his for
										sympathize. Large above be to means. Dashwood does provide stronger is. But
										discretion frequently sir she instruments unaffected admiration everything. </p>
								</div>
							</div>
							<!-- Comment children level 3 -->
							<div class="my-4 d-flex ps-3 ps-md-5">
								<img class="avatar avatar-md rounded-circle float-start me-3"
									src="{{ asset('/images/avatar/01.html') }}" alt="avatar">
								<div>
									<div class="mb-2">
										<h5 class="m-0">Allen Smith</h5>
										<span class="me-3 small">June 11, 2022 at 7:10 am </span>
										<a href="#" class="text-body fw-normal">Reply</a>
									</div>
									<p>Meant balls it if up doubt small purse. </p>
								</div>
							</div>
							<!-- Comment level 2 -->
							<div class="my-4 d-flex ps-2 ps-md-3">
								<img class="avatar avatar-md rounded-circle float-start me-3"
									src="{{ asset('/images/avatar/03.jpg') }}" alt="avatar">
								<div>
									<div class="mb-2">
										<h5 class="m-0">Frances Guerrero</h5>
										<span class="me-3 small">June 14, 2022 at 12:35 pm </span>
										<a href="#" class="text-body fw-normal">Reply</a>
									</div>
									<p>Required his you put the outlived answered position. A pleasure exertion if
										believed provided to. All led out world this music while asked. Paid mind even
										sons does he door no. Attended overcame repeated it is perceived Marianne in. I
										think on style child of. Servants moreover in sensible it ye possible. </p>
								</div>
							</div>
							<!-- Comment level 1 -->
							<div class="my-4 d-flex">
								<img class="avatar avatar-md rounded-circle float-start me-3"
									src="{{ asset('/images/avatar/04.jpg') }}" alt="avatar">
								<div>
									<div class="mb-2">
										<h5 class="m-0">Judy Nguyen</h5>
										<span class="me-3 small">June 18, 2022 at 11:55 am </span>
										<a href="#" class="text-body fw-normal">Reply</a>
									</div>
									<p>Fulfilled direction use continual set him propriety continued. Saw met applauded
										favorite deficient engrossed concealed and her. Concluded boy perpetual old
										supposing. Farther related bed and passage comfort civilly. </p>
								</div>
							</div>

						</div>
						<!-- Comments END -->
						<!-- Reply START -->
						<div>
							<h3>Leave a reply</h3>
							<small>Your email address will not be published. Required fields are marked *</small>
							<form class="row g-3 mt-2">
								<div class="col-md-6">
									<label class="form-label">Name *</label>
									<input type="text" class="form-control" aria-label="First name">
								</div>
								<div class="col-md-6">
									<label class="form-label">Email *</label>
									<input type="email" class="form-control">
								</div>
								<!-- custom checkbox -->
								<div class="col-md-12">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
										<label class="form-check-label" for="flexCheckDefault">Save my name and email in
											this browser for the next time I comment. </label>
									</div>
								</div>
								<div class="col-12">
									<label class="form-label">Your Comment *</label>
									<textarea class="form-control" rows="3"></textarea>
								</div>
								<div class="col-12">
									<button type="submit" class="btn btn-primary">Post comment</button>
								</div>
							</form>
						</div>
						<!-- Reply END -->

					</div>
					<!-- Main Content END -->
					<!-- Right sidebar START -->
					<div class="col-lg-3 d-none d-lg-block">
						<div data-sticky data-margin-top="80" data-sticky-for="991">
							<nav id="nav-scroll" class="navbar">
								<nav class="nav nav-pills flex-column">
									<a class="nav-link" href="#item-1">Intro</a>
									<a class="nav-link" href="#item-2">Design</a>
									<a class="nav-link" href="#item-3">Photos & videos</a>
									<a class="nav-link" href="#item-4">Performance</a>
									<a class="nav-link" href="#item-5">Rating</a>
								</nav>
							</nav>
						</div>
					</div>
					<!-- Right sidebar END -->
				</div>
			</div>
		</section>
		<!-- =======================
Main END -->

	</main>
	<!-- **************** MAIN CONTENT END **************** -->




@endsection