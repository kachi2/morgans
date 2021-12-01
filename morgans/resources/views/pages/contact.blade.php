@extends('layouts.app')
@section('content')

		<div id="tg-innerbanner" class="tg-innerbanner tg-haslayout">
	<div class="tg-parallaximg" data-appear-top-offset="600" data-parallax="scroll" data-image-src="{{asset('/assets/images/bg.jpg')}}"></div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="tg-innerbannercontent">
							<div class="tg-pagetitle">
								<h1>contact us</h1>
							</div>
							<ol class="tg-breadcrumb">
								<li><a href="#"><i class="fa fa-home"></i></a></li>
								<li class="tg-active">contact us</li>
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
			<!--************************************
					Get In Touch Start
			*************************************-->
			<section class="tg-main-section tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-lg-offset-2 col-lg-8 col-md-offset-1 col-md-10 col-sm-offset-0 col-sm-12 col-xs-12">
							<div class="tg-sectionhead">
								<div class="tg-sectiontitle">
									<h2>let’s talk</h2>
									<h3>Get in Touch</h3>
								</div>
								<div class="tg-description">
									<p>Visit our agency or simply send us an email anytime you want. If you have any questions, please feel free to contact us.</p>
								</div>
							</div>
						</div>
						<form class="tg-themeform">
							<fieldset>
								<div class="col-sm-4">
									<div class="form-group">
										<input type="text" class="form-control" name="name" placeholder="Name">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<input type="text" class="form-control" name="number" placeholder="Number">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<input type="email" class="form-control" name="email" placeholder="Email">
									</div>
								</div>
								<div class="col-sm-12 col-xs-12">
									<div class="form-group">
										<textarea placeholder="Message"></textarea>
									</div>
								</div>
								<div class="col-sm-12 col-xs-12">
									<button type="button" class="tg-btn"><span>Send Message</span></button>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</section>
		</main>
@endsection