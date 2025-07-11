	@extends('layout.user')

	@section('content')
	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
	    <div class="container">
	        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
	            <div class="col-first">
	                <h1>Contact Us</h1>
	                <nav class="d-flex align-items-center">
	                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
	                    <a href="category.html">Contact</a>
	                </nav>
	            </div>
	        </div>
	    </div>
	</section>
	<!-- End Banner Area -->

	<!--================Contact Area =================-->
	<section class="contact_area section_gap_bottom">
	    <div class="container">
	        <div id="mapBox" class="mapBox" data-lat="40.701083" data-lon="-74.1522848" data-zoom="13" data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
	            data-mlat="40.701083" data-mlon="-74.1522848">
	        </div>
	        <div class="row">
	            <div class="col-lg-3">
	                <div class="contact_info">
	                    <div class="info_item">
	                        <i class="lnr lnr-home"></i>
	                        <h6>California, United States</h6>
	                        <p>Santa monica bullevard</p>
	                    </div>
	                    <div class="info_item">
	                        <i class="lnr lnr-phone-handset"></i>
	                        <h6><a href="#">00 (440) 9865 562</a></h6>
	                        <p>Mon to Fri 9am to 6 pm</p>
	                    </div>
	                    <div class="info_item">
	                        <i class="lnr lnr-envelope"></i>
	                        <h6><a href="#">support@colorlib.com</a></h6>
	                        <p>Send us your query anytime!</p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-9">
	                <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
	                    <div class="col-md-6">
	                        <div class="form-group">
	                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'">
	                        </div>
	                        <div class="form-group">
	                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
	                        </div>
	                        <div class="form-group">
	                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'">
	                        </div>
	                    </div>
	                    <div class="col-md-6">
	                        <div class="form-group">
	                            <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"></textarea>
	                        </div>
	                    </div>
	                    <div class="col-md-12 text-right">
	                        <button type="submit" value="submit" class="primary-btn">Send Message</button>
	                    </div>
	                </form>
	            </div>
	        </div>
	    </div>
	</section>
	<!--================Contact Area =================-->


	@endsection