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
								<li class="tg-active">Outsourcing</li>
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
														<h2 style="font-weight:bold; color:#000">Outsourcing</h2>	
													</div>
													<div class="tg-description" style="text-align:justify">
														<p style="text-align:justify"> 
														We work on an exclusive basis in close partnership with our clients in delivering the right talent. We first build an in-depth knowledge with your organization and understand what makes you different and how it works with an aim of attracting the best talent that will grow and succeed in your particular cultural environment. We will only introduce the right talent and we will only approach individuals that are ready for a move from their current position. Effectively, we are representing your organization and therefore, we recognize that we must approach and attract the right talent, at the right time, with the right cultural fit for your organization. We do invest our time in building a working and friendly relationship with candidates. It is a requirement for our candidates to undergo background check with relevant government agencies or vetting. In other words, we carry out due diligence on all candidates.</p>
														</div>
												</div>
											</div>

												<div class="tg-whatwedo">
												<div class="tg-sectionhead">
													<div class="tg-sectiontitle">
														<h2 style="font-weight:bold; color:#000">Umbrella Company and Payroll Services</h2>	
													</div>
													<div class="tg-description" style="text-align:justify">
														<p style="text-align:justify"> 
														<span style="padding-left:20px">At TMC we provide the most competitive range of confidential and professional services available in the UK. As the leading umbrella solutions provider in the Africa and UK market, our services come with a host of benefits. Contractors or consultants who use our services benefit from the flexibility we offer and fast turnaround from inception of a contract to its termination. By choosing Morgans, you will receive the highest delivery of services and reap the following benefits:
														</span>
														<br><span style="padding:20px"><span style="font-weight:bold">Timely payments as we have multiple payrolls running daily</span>
														<br>• Excellent value for money with no exit or set up fees
														<br>• We provide you with legal cover documents required by your employer such as public liability, professional indemnity insurance and liability insurance cover
														<br>• Benefit from all the protection you need with comprehensive insurance at no additional cost including Professional Indemnity.
														<br>• Full visibility of payments made with daily notification
														<br>• Enjoy our employee benefits scheme which gives you a unique mix of rewards, perks and discounts
														<br>• We help you find your next assignment
														</span>
														If you are starting a new contract or wishing to move to Umbrella Service Provider don’t look any further, please  contact us.
														</p>	
														</div>
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
												<li><a href="{{route('risk.regulations')}}">Regulatory Governance , Risk , Compliance (GRC) and Financial Crime Prevention</a></li>
												<li><a href="{{route('vetting.screening')}}">Background Check, Vetting & Screening</a></li>
												<li><a href="{{route('tax.advisory')}}">Financial Accounting, Audit & Tax Advisory</a></li>
												<li><a href="{{route('outsourcing')}}">Outsourcing</a></li>
												<li><a href="{{route('tmc.academy')}}">TMC Academy</a></li>
												<li><a href="{{route('solution.delivery')}}">Managed Shared Services and Solution Delivery</a></li>
												<li><a href="{{route('fca.authorization')}}">Regulatory Authorization and Approval Advisory</a></li>
												<li><a href="{{route('documentation.manuals')}}">Documentation – Manuals</a></li>
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