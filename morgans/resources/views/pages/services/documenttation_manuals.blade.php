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
								<li class="tg-active">Documentation – Manuals</li>
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
										<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
											<div class="tg-whatwedo">
												<div class="tg-sectionhead">
													<div class="tg-sectiontitle">
														<h2 style="font-weight:bold; color:#000">Operating Procedures Manual</h2>	
													</div>
													<div class="tg-description">
														<p style="text-align:justify"> 
														The objective of Operating Procedures is to lay out practical steps for the conduct of licensed financial services activities while ensuring adherence to all applicable laws and regulations, as well as your Firm’s policies, procedures, systems and controls.

															Depending on the scope of your Firm’s licence, the procedures will cover:
														<ul style="padding-left:20px">
															<li style="list-style:circle">	client acceptance and onboarding</li>
															<li style="list-style:circle">	transaction processing – such as order receipt, transmission, amendment, cancellation and confirmation</li>
																<li style="list-style:circle">customer service</li>
																<li style="list-style:circle">complaints handling procedures</li>
																<li style="list-style:circle">day to day procedures for monitoring adherence to relevant policies</li>
														</ul>
													</p></div>
												</div>
											</div>
											</div>
														<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
											<div class="tg-whatwedo">
												<div class="tg-sectionhead">
													<div class="tg-sectiontitle">
														<h2 style="font-weight:bold; color:#000">Code of Conduct Ethics</h2>	
													</div>
													<div class="tg-description" style="text-align:justify">
														<p style="text-align:justify"> 
														TMC consultants can work with you to develop a concise and easy to understand statement of your Firm’s expectations in respect of:
														<ul style="padding-left:20px">
														<li style="list-style:circle">	the personal conduct of your staff: honesty, truthfulness and integrity</li>
															<li style="list-style:circle">compliance with laws regulations and policies</li>
															<li style="list-style:circle">your staff’s dealings with your clients, including</li>
															<li style="list-style:circle">keeping client information confidential</li>
															<li style="list-style:circle">providing accurate and truthful reports</li>
															<li style="list-style:circle">managing conflicts of interest</li>
															<li style="list-style:circle">inter-personal conduct between your staff which includes</li>
															<li style="list-style:circle">Culture of respect</li>
															<li style="list-style:circle">Whistleblowing policy</li>
														</ul>
													</p></div>
												</div>
											</div>
											</div>
														<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
											<div class="tg-whatwedo">
												<div class="tg-sectionhead">
													<div class="tg-sectiontitle">
														<h2 style="font-weight:bold; color:#000">Risk Management Framework and Manual</h2>	
													</div>
													<div class="tg-description" style="text-align:justify">
														<p style="text-align:justify">
														 TMC  will place a risk management framework which covers the following areas
														<ul style="padding-left:20px">
														<li style="list-style:circle">	The active involvement of the board in the risk management process</li>
														<li style="list-style:circle">	An appropriate Risk Management infrastructure</li>
														<li style="list-style:circle">Identification of all risks relevant to your Firm</li>
														<li style="list-style:circle">Assessment of the potential impact of each identified risk</li>
														<li style="list-style:circle">Risk Mitigation plan</li>
														<li style="list-style:circle">Testing of controls to ensure they are operating effectively, and remediating or enhancing the control environment when deficiencies are identified</li>
														<li style="list-style:circle">Reporting to senior management and the board</li>
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