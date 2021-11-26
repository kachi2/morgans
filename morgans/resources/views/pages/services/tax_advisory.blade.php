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
								<li class="tg-active">Financial Accounting, Audit & Tax Advisory</li>
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
														<h2 style="font-weight:bold; color:#000">Financial Accounting, Audit & Tax Advisory</h2>	
													</div>
													<div class="tg-description" style="text-align:justify">
														<p style="text-align:justify"> 
																			We provide financial advisory and consultancy services to individuals, organizations, and businesses which are looking to grow and nurture their business. We deliver our services to international levels and standards through a friendly, accessible, and involved team. Some of the major services we offer include:<br>
																			<ul style="padding-left:20px">
																			<li style="list-style:number;" >Detailed criminal record checks</li>
																			<li style="list-style:number;" >Forensic Accounting</li>
																			<li style="list-style:number;" >	Business Advisory,</li>
																			<li style="list-style:number;" >	Book-keeping,</li>
																			<li style="list-style:number;" >	Management accounts,</li>
																			<li style="list-style:number;" >	Accounts outsourcing,</li>
																			<li style="list-style:number;" >	Budgeting and forecasts,</li>
																			<li style="list-style:number;" >	Reporting on accounting systems and internal controls,</li>
																			<li style="list-style:number;" >	Payroll, Financial reviews,</li>
																				<li style="list-style:number;" >Company secretarial services,</li>
																				<li style="list-style:number;" >VAT & Tax returns</li>
																				<li style="list-style:number;" >Merger and Acquisitions.</li>
																			</ul>
																			<br>
																			Our approach is customized to meet the unique needs of different clients through extensive understanding and planning of the client’s requirements. We work closely with the client to ensure that the solutions proposed are compatible with their objectives and fit their budget.<br>	
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