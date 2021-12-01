@extends('layouts.app')

@section('content')
		<div id="tg-innerbanner" class="tg-innerbanner tg-haslayout">
			<div class="tg-parallaximg" data-appear-top-offset="600" data-parallax="scroll" data-image-src="{{asset('/assets/images/bg.jpg')}}"></div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="tg-innerbannercontent">
							<div class="tg-pagetitle">
								<h1>Services</h1>
							</div>
							<ol class="tg-breadcrumb">
								<li><a href="#"><i class="fa fa-home"></i></a></li>
								<li class="tg-active">Regulatory Authorization and Approval Advisory</li>
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
														<h2 style="font-weight:bold; color:#000">Our Location</h2>	
													</div>
													<div class="tg-description" style="text-align:justify">
														<p style="text-align:justify"> <ul style="padding-left:20px">
                                                       <li style="list-style:circle"><b>Address:</b> 2nd Floor, 1 Adeola Adeoye Street,Toyin Street,Ikeja, Lagos Nigeria</li>
                                                        <li style="list-style:circle"><b>Office Hours : </b> Monday – Friday ( 09:00 am – 18:00pm )</li>
                                                        
                                                         <li style="list-style:circle">   <b> Closed on :  </b>Saturday & Sundays</li>

                                                          <li style="list-style:circle"> <b> For urgent esquires please email : </b> Enquiries@morgansconsortium.com</li>
														</ul>
													</p></div>
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
			</div>
		</main>

@endsection