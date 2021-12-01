@extends('layouts.app')

@section('content')
		<div id="tg-innerbanner" class="tg-innerbanner tg-haslayout">
			<div class="tg-parallaximg" data-appear-top-offset="600" data-parallax="scroll" data-image-src="{{asset('/assets/images/bg.jpg')}}"></div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="tg-innerbannercontent">
							<div class="tg-pagetitle">
								<h1>About</h1>
							</div>
							<ol class="tg-breadcrumb">
								<li><a href="#"><i class="fa fa-home"></i></a></li>
								<li class="tg-active">The Company</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--************************************
				Inner Banner End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<div class="tg-pagecontent">
				<div class="container">
					<div class="row">
						<div id="tg-twocolumns" class="tg-twocolumns">
							<div class="col-lg-9 col-sm-7 col-xs-12 pull-right">
								<div id="tg-content" class="tg-content">
									<!--************************************
											Services Tabs Start
									*************************************-->
									<section class="tg-main-section tg-haslayout">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="tg-whatwedo">
												<div class="tg-sectionhead">
													<div class="tg-sectiontitle">
													<h2 style="font-weight:bold; color:#000"> TMC Mission Statement  <hr style="padding:0px; margin-bottom:0px"></h2>	
													</div>
													<div class="tg-description" style="text-align:justify">
														<p style="text-align:justify">TMC core mission statement includes the attainment of clients’ desires in whatever industry they operate. We are closer to our clients than any of our peers rendering one-on-one business consultancy that embraces all sectors without any discriminations. TMC adheres to principles that promote professionalism, knowing our expertise depends on services to our customers.

														TMC considers our clients as partners whose partnering is vital to our organisational vision and mission. Our professional tactics include predicting clients’ feedback with the view of applying strategies and corrective measurements that eliminate potential conflicts with our clients boosting our clients' satisfaction rate, which is incomparable to none.

														At TMC Consultancy, we adhere to a legitimacy culture concerning our roles to clients and constitutional authorities such as to the Federal Board of Inland Revenue/ State Inland Revenue Board. We update our clients concerning changes from statutory authorities affecting their businesses and guide them on how to comply with the Federal Board of Inland Revenue/ State Inland Revenue Board and Companies regulations.

														TMC provides its employees with the best incentives demonstrating love and care. We do not demonstrate favouritism and discrimination to any member of our staff. We encourage diversity and appreciate the core uniqueness inherent in each staff member.

														At TMC, we recognize our social responsibilities as a consultancy firm. We strongly support a healthy environment for humans and other species.

														Lastly, as a responsible corporate citizen, recognizing the economic importance of our environment. We do not employ the use of machines or equipment that are harmful to our environment.
													</p></div>
												</div>
											</div>

												<div class="tg-whatwedo">
												<div class="tg-sectionhead">
													<div class="tg-sectiontitle">
														<h2 style="font-weight:bold; color:#000"> TMC Company Values  <hr style="padding:0px; margin-bottom:0px"></h2>	
													</div>
													<div class="tg-description" style="text-align:justify">
														<p style="text-align:justify">
														<strong>Professionalism: </strong> Our teams act with integrity and honesty, and focus on carrying out accounting consultancy tasks to deliver optimum customer satisfaction for our clients with public or private businesses.

													<br><strong> Results-Oriented: </strong> Delivering outstanding consultancy results by cultivating a culture of professional execution and excellent performance that is rewarding our clients immensely with outcomes.

												<br><strong>	Integrity:  </strong>At TMC, we are transparent, honest, and devoted to rendering optimum services for our clients resident in Nigeria and beyond. We achieve success through the application of various technologically updated apparatuses in delivering accurate and reliable financial advisory services. We have zero-tolerance for unprofessionalism, unnecessary mistakes or nonchalant job behaviour that hampers our responsibilities towards our clients.

												<br><strong>Build Relationships/Deliver Results: </strong> Connect with clients who are not merely clients but partners that built the foundation of our successes in recent years. At TMC Consulting, we build relationships with our clients because we cannot do our jobs without our loyal clients. Our clients remain our most fabulous advertisers of professional consultancy services which have become a business fact known in Nigeria and other operating nations across the globe.</p></div>
												</div>
											</div>
											
							
											</div>
									</section>
									
								</div>
							</div>
							<div class="col-lg-3 col-sm-5 col-xs-12 pull-left">
								<aside id="tg-sidebar" class="tg-siderbar">
									<div class="tg-widget tg-widgetdepartments">
										<div class="tg-widgettitle"><h3>Services</h3></div>
										<div class="tg-widgetcontent">
											<ul>
												<li><a href="{{route('the.company')}}">The Company</a></li>
												<li><a href="{{route('location')}}">Location</a></li>
												<li><a href="{{route('privacy')}}">Privacy Policy</a></li>
												<li><a href="{{route('team')}}">Our Team</a></li>
											</ul>
										</div>
									</div>
								</aside>
							</div>
						</div>
					</div>
					</div>

						<section class="tg-main-section tg-paddingbottomzero tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-lg-offset-2 col-lg-8 col-md-offset-1 col-md-10 col-sm-offset-0 col-sm-12 col-xs-12">
							
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="row">
								<div class="tg-services tg-servicestyletwo">
									<div class="col-sm-6">
										<div class="tg-box">
											<div class="tg-service">
												<span class="tg-seviceicon">
													<i class="fa fa-balance-scale"></i>
												</span>
												<div class="tg-heading">
													<h4><a href="#">Our Approach</a></h4>
												</div>
												<div class="tg-description">
													<p>Our approach combines insight and innovation from multiple disciplines within global business and industry expertise to help our clients excel anywhere in the world. We deliver outstanding impact on the reputation and success of our clients, in the UK, US and Africa. In pursuing this we contribute to a sustainable and prosperous society, and are firm believers in the positive impact business can and should have on the world it operates within</p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="tg-box">
											<div class="tg-service">
												<span class="tg-seviceicon">
													<i class="fa fa-line-chart"></i>
												</span>
												<div class="tg-heading">
													<h4><a href="#">Collaborative Culture</a></h4>
												</div>
												<div class="tg-description">
													<p>At THE MORGANS we promote a collaborative culture where talented individuals can produce their best work. We value innovative thinking, diverse insights and a genuinely distinctive level of customer service through our expertise and professionalism. We value difference, with respect at the heart of our inclusive culture. We are open to discussing with candidates the different ways in which we are able to support agile working arrangements. We recognize that our people are juggling demanding careers with commitments and interests outside of work</p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="tg-box">
											<div class="tg-service">
												<span class="tg-seviceicon">
													<i class="fa fa-trophy"></i>
												</span>
												<div class="tg-heading">
													<h4><a href="#">Financial Accounting and IT Professionals</a></h4>
												</div>
												<div class="tg-description">
													<p>We have a dedicated team of financial accounting and IT professionals with a broad experience in the management and implementation of process which ranges from delivering day to day or periodic accounting services to proactively ensure appropriate internal control measures for the strategic success of your business ventures. We have a pool of professionals who are highly qualified and passionate about regulations and they always ensure that they stay up to date with regulatory changes and business developments.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="tg-box">
											<div class="tg-service">
												<span class="tg-seviceicon">
													<i class="fa fa-flag-o"></i>
												</span>
												<div class="tg-heading">
													<h4><a href="#">Strong project Management</a></h4>
												</div>
												<div class="tg-description">
													<p>Our schedules are tightly managed and we maintain a close dialogue and connection with our clients. We take pride in delivering services which exceed clients’ expectations.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="tg-box">
										
										</div>
									</div>
									<div class="col-sm-6">
										<div class="tg-box">
											<div class="tg-service">
												<span class="tg-seviceicon">
													<i class="fa fa-flag-o"></i>
												</span>
												<div class="tg-heading">
													<h4><a href="#">Fair and Transparent Pricing</a></h4>
												</div>
												<div class="tg-description">
													<p>We base our pricing method on past engagements in order to deliver fair costs to our clients. Our core business is to give our clients value for their money..</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
				
				<section class="tg-haslayout tg-bglight tg-bgimage">
				<div class="container">
					<div class="row">
						<div class="tg-requestcallback">
							<div class="col-sm-3 hidden-xs">
								<figure>
									<img src="images/img-02.png" alt="image description">
								</figure>
							</div>
							<div class="col-sm-9 col-xs-12">
								<div class="tg-contentbox">
									<div class="tg-sectionhead">
										<div class="tg-sectiontitle">
											<h2>Company Overview</h2>
											<h3>Why you will enjoy working with us</h3>
										</div>
										<div class="tg-description">
											<p>Our excellent work in working with major agencies across the UK, has given enabled to standout in the competitive market space as the top leading consultancy firm in the globe. By choosing to work with TMC you are guaranteed of professional and quality services which will meet your business requirements in the most cost effective and timely manner. Additionally, we have a team of experienced, knowledgeable and friendly advisors available to answer your questions and offer you guidance..</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			</div>
		</main>

@endsection