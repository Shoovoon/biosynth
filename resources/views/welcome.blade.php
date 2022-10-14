<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Foodera - Responsive Food Landing Page Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="{{ asset('ui/frontend/images/favicon.html') }}">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="{{ asset('ui/frontend/css/bootstrap.min.css') }}">

    <!-- ICONS -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('ui/frontend/css/ilmosys-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('ui/frontend/js/vendors/swipebox/css/swipebox.min.css') }}">


    <!-- THEME / PLUGIN CSS -->
    <link rel="stylesheet" href="{{ asset('ui/frontend/js/vendors/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('ui/frontend/css/style.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body id="home">
    <div class="body">
        <!-- HEADER -->
     


        <!-- Home -->
        

          <!-- Stats -->
        <div id="stats2" class="bg-primary">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <div class="stats2-info">
                            <i class="icon-piggy"></i>
                            <p><span class="count">1287</span>+</p>
                            <h2>Savings</h2>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="stats2-info">
                            <i class="icon-photo"></i>
                            <p><span class="count">5786</span>+</p>
                            <h2>Photos</h2>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="stats2-info">
                            <i class="icon-rocket"></i>
                            <p><span class="count">1440</span>+</p>
                            <h2>Rockets</h2>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="stats2-info">
                            <i class="icon-world"></i>
                            <p><span class="count">7110</span>+</p>
                            <h2>Globes</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- About Us -->
       
        <div class="space80"></div>


        


        <!-- Products-->
        
        <div class="space100"></div>

        <!-- Testimonials -->
       

        <!-- Faq -->
        

     

        <!-- PARALLAX -->
        <section class="parallax-content2 parallax2 text-center" data-stellar-background-ratio="0.4">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h4>Baked fresh daily by bakers with passion.</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <a href="#" class="btn btn-lg btn-primary pull-left">Learn More <i class="icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- PARALLAX -->
        
        <div class="space80"></div>

     <!-- FOOTER -->
       

        <!-- Copyright -->
       
		
		
		
<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" data-toggle="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
	  
	  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
	  <div class="cf2-wrap">
	   
                        <h2>Make Your Order Now!</h2>

                        <div class="clearfix space40"></div>
                        <form class="positioned" name="sentMessage" id="contactForm" action="php/contact.php" method="post">
                            <div class="row">
							
                                <div class="col-md-6 col-sm-6">
                                    <input name="senderName" id="senderName" placeholder="Your Name" required type="text">
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <input name="senderEmail" id="senderEmail" placeholder="Email Address" required type="email">
                                </div>
                            </div>
							
                            <input name="address" id="address" placeholder="Address" required type="text">

							<input placeholder="Zip Code" required type="number">
							
							<input placeholder="Mobile No." required type="number">
							
							
						<select name="name" id="select" required="required">
                        <option value=""> Rainbow Vegetable Sandwich - $10.50 </option>
                        <option value="1"> Vegetarian Burger - $9.20 </option>
                        <option value="2"> Raspberry Stuffed French Toast - $12.50 </option>
                        
                      </select>
							

                           
                            <button type="submit" class="btn btn-primary btn-ico">Send Message<i class="fa fa-paper-plane-o"></i></button>
                        </form>
                        <div id="sendingMessage" class="statusMessage">
                            <p><i class="fa fa-spin fa-cog"></i> Sending your message. Please wait...</p>
                        </div>
                        <div id="successMessage" class="successmessage">
                            <p><span class="success-ico"></span> Thanks for sending your message! We'll get back to you shortly.</p>
                        </div>
                        <div id="failureMessage" class="errormessage">
                            <p><span class="error-ico"></span> There was a problem sending your message. Please try again.</p>
                        </div>
                        <div id="incompleteMessage" class="statusMessage">
                            <p><i class="fa fa-warning"></i> Please complete all the fields in the form before sending.</p>
                        </div>
                    </div>
                </div>
       </div>
    </div>
  </div>
</div>



        <!-- JAVASCRIPT =============================-->
        <script src="{{ asset('ui/frontend/js/jquery.js') }}"></script>
        <script src="{{ asset('ui/frontend/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('ui/frontend/js/vendors/slick/slick.min.js') }}"></script>
        <script src="{{ asset('ui/frontend/js/vendors/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('ui/frontend/js/vendors/stellar.js') }}"></script>
        <script src="{{ asset('ui/frontend/js/vendors/isotope/isotope.pkgd.js') }}"></script>
        <script src="{{ asset('ui/frontend/js/vendors/swipebox/js/jquery.swipebox.min.js') }}"></script>
        <script src="{{ asset('ui/frontend/js/main.js') }}"></script>
        <script src="{{ asset('ui/frontend/js/vendors/mc/jquery.ketchup.all.min.js') }}"></script>
        <script src="{{ asset('ui/frontend/js/vendors/mc/main.js') }}"></script>
</body>

</html>