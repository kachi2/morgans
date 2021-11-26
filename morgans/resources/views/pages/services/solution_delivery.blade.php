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
								<li class="tg-active">TMC Academy</li>
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
														<h2 style="font-weight:bold; color:#000">Managed Shared Services and Solution Delivery</h2>	
													</div>
													<div class="tg-description" style="text-align:justify">
														<p style="text-align:justify"> 
														As an experienced consultancy company in the provision of Managed Services, we offer tailor-made solutions based on your business needs. Our solutions offer a transparent delivery model which enables companies to predict, plan and control quality, cost and performance. Our team of professionals will help your company in careful management of the transition of your current solutions into a TMC managed service with zero impact on your business. Some of the managed services we offer include:

														<br><span style="font-weight:bold">Professional staffing as a service </span><br>
														TMC helps you in maximizing the potential of all staff resources as well as to measure their progress in order to find the right cultural fit in a supplier. This will position your company in a pole position of meeting both short- and long-term business objectives.

													<br>	<span style="font-weight:bold">IT infrastructure </span>
														We remove the burden of provisioning IT systems or the whole IT infrastructure by outsourcing the management to us. We are here to look after your IT assets, procurements and logistics related implementation and best executions.
														<ul style="padding-left:20px">
														<li style="list-style:circle">Forensic Regulatory Risk & Compliance Remediation</li>
														<li style="list-style:circle">Financial Crime KYC Remediation </li>
														<li style="list-style:circle">AML, Transaction Monitoring Solution Managed Services </li>
														<li style="list-style:circle">Cyber security solution</li>
														<li style="list-style:circle">Cloud Support</li>
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