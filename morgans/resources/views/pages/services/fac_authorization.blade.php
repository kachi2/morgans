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
														<h2 style="font-weight:bold; color:#000">Regulatory Authorization and Approval Advisory</h2>	
													</div>
													<div class="tg-description" style="text-align:justify">
														<p style="text-align:justify"> 
														Quality advice and assistance at all stages of the authorization process, which includes preparation, filing and ongoing conduct of the application.
														Our Expertise and Services also include:
														<ul style="padding-left:20px">
														<li style="list-style:circle">Advising you on the FCA Regulated activities for which you will need permission</li>
													<li style="list-style:circle">	Advising you on the different FCA Regulatory and competency requirements</li>
														<li style="list-style:circle">Assisting you in the preparation of your Regulatory Business Plan</li>
														<li style="list-style:circle">Assisting in the completion of the necessary forms, including ownership disclosure forms and FCA Approved Persons Forms</li>
														<li style="list-style:circle">Advice on corporate governance, systems and controls</li>
														<li style="list-style:circle">Preparation support for meetings with the FCA</li>
														<li style="list-style:circle">Liaising with your other advisers and with the FCA</li>
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