
<!DOCTYPE html>
<html lang="en">
<head>
	{{-- <meta charset="utf-8">
	<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"> --}}
	<title>Rallio Local</title>

  <link href="{{ URL::asset('css/all.css') }}" rel="stylesheet">
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">


	{{-- <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'>
	<meta content="width=device-width" name="viewport">
  <script src="/css/all.css"></script>
  <!-- Bootstrap core CSS     -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/paper-kit.css?v=2.1.0" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet"><!--     Fonts and icons     -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
	<link href="assets/css/nucleo-icons.css" rel="stylesheet">
	<script src="https://checkout.stripe.com/checkout.js">
	</script>
	<script>
	  window.intercomSettings = { app_id: "dh85vds0" };
	</script>
	<script>
	  (function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/h7ycmsfq';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()
	</script> --}}
</head>
<body>
	<nav class="navbar navbar-expand-lg fixed-top navbar-transparent nav-down" color-on-scroll="500">
		<div class="container">
			<div class="navbar-translate">
				<div class="navbar-header">
					<a class="navbar-brand" href="/monthly-register">Rallio Local</a>
				</div><button aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-burger" data-target="#navbarToggler" data-toggle="collapse" type="button"><span class="navbar-toggler-bar"></span> <span class="navbar-toggler-bar"></span> <span class="navbar-toggler-bar"></span></button>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="btn btn-round btn-danger" href="#buy_now"><i class="nc-icon nc-cart-simple"></i> Review Packages</a>
					</li>
          <li class="nav-item">
						<a class="btn btn-round btn-primary" href="#get_rewarded"><i class="nc-icon nc-money-coins"></i> Get Rewarded</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="page-header page-header-xs background-image">
		<div class="filter"></div>
	</div>
	<div class="main">
    <!--     *********     FEATURES 4     *********      -->
        <div class="features-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-center">
                        <h2 class="title">Get started with Rallio Local.</h2>
                        <h5 class="description">Social media is a powerful marketing channel for your business. Are you using it to its fullest potential? Let Rallio help you. </h5>
                    </div>
                </div>
                <div class="row">

                    <div class="col-xl-6">
                      <div class="graph-margin-top">

                      </div>

              <div class="ipad-container">
                <img src={{ URL::asset('images/graph.jpeg') }} />
              </div>
            </div>

                    <div class="col-xl-4 offset-1">
                    <div class="info info-horizontal">
                <div class="icon icon-info">
                  <i class="nc-icon nc-atom" aria-hidden="true"></i>
                </div>
                <div class="description">
                  <h4 class="info-title">Manage & Grow</h4>
                  <p>Dramatically grow your local social following and drive more customers to your business. Franchisees on this platform grow on average 100X more compared to those that are not. (We’re not kidding; it literally averages 100x more.) <a href='#benefits'>Learn more.</a></p>
                </div>
                  </div>

              <div class="info info-horizontal">
                <div class="icon icon-success">
                  <i class="nc-icon nc-ruler-pencil" aria-hidden="true"></i>
                </div>
                <div class="description">
                  <h4 class="info-title">Personalize & Engage</h4>
                  <p>Build true local interest and engagement in your business. Focus on social media becoming a revenue-generating powerhouse. <a href="#benefits">Learn more.</a></p>
                </div>
              </div>
                        <div class="info info-horizontal">
                            <div class="icon icon-danger">
                                <i class="nc-icon nc-tie-bow" aria-hidden="true"></i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Get Rewarded</h4>
                                <p>Get rewarded for inviting your franchisee friends to Rallio Local. You get $25 when they purchase a package with your special coupon code. <a href="#get_rewarded">Learn more.</a> </p>
                            </div>
                        </div>
            </div>
                </div>
            </div>
        </div>

        <!--     *********     FEATURES 5      *********      -->

    	    <div id='benefits' class="features-5 section-image" style="background-image: url({{ URL::asset('images/features-full-1.png') }})">
        		<div class="container">
                    <div class="row">
                        <div class="ml-auto mr-auto">
                            <h2 class="title text-center">Benefits Rallio Local</h2>
                            <div class="text-center">
                                <a href='#buy_now' class='text-center btn btn-round btn-primary'>View Pricing</a>
                            </div>

                        </div>
                    </div>
                    <div class="margin-top">

                    </div>
        			<div class="row">
        				<div class="col-sm-5 ml-auto">
        					<div class="info">
        						<div class="icon">
        							<i class="nc-icon nc-atom" aria-hidden="true"></i>
        						</div>
        						<h4 class="title">Social Growth</h4>
        						<p>Rallio will run ads, launch campaigns and boost your top-performing content. You can expect to see month-over-month growth in your local social following. <span class='white-text'>Followers mean brand awareness. Brand awareness means more business.</span> </p>
        					</div>
        				</div>

        				<div class="col-sm-5 mr-auto">
        					<div class="info">
        						<div class="icon">
        							<i class="nc-icon nc-ruler-pencil" aria-hidden="true"></i>
        						</div>
        						<h4 class="title">Review Replies</h4>
        						<p>Rallio will respond to all online reviews and other social media engagements on your behalf with corporate-approved responses.
                      <span class='white-text'>A Rallio teammate will contact you directly to alert you of any sales inquiries or other urgent matters. </span> </p>
        					</div>
        				</div>
        			</div>

        			<div class="row bottom-line">
        				<div class="col-sm-5 ml-auto">
        					<div class="info">
        						<div class="icon">
        							<i class="nc-icon nc-paper" aria-hidden="true"></i>
        						</div>
        						<h4 class="title">Custom Content</h4>
        						<p>Corporate content is great, but custom local content performs 8 times better. Trust our content team, managed by the former editor of Entrepreneur magazine, to develop content that showcases the people behind your business. <span class='white-text'>Customers are more likely to buy from brands they personally connect with.</span> </p>
        					</div>
        				</div>

        				<div class="col-sm-5 mr-auto">
        					<div class="info">
        						<div class="icon">
        							<i class="nc-icon nc-time-alarm" aria-hidden="true"></i>
        						</div>
        						<h4 class="title">Reporting</h4>
        						<p>Finally a marketing company you can hold accountable. We deliver monthly reports to help you track your social media growth over time.  <span class='white-text'>See what’s working and what isn’t. We’ll work together to strategize the best approach for you.</span>
</p>
        					</div>
        				</div>
        			</div>
        		</div>
            </div>
        </div>


        <div class="testimonials-1 section-image" style="background-image: url({{ URL::asset('images/testimonial-full.jpg') }})">


          <div class="container">
            <div class="row">
              <div class="col-md-6 ml-auto mr-auto text-center">
                <h2 class="title">Franchisee Testimonies</h2>
                <h5 class="description">We of all people know how important reviews are. Check out what other franchisees have to say about us!</h5>
              </div>
            </div>
                  <div class="space-top"></div>
            <div class="row">
              <div class="col-md-2">

              </div>
              <div class="col-md-4">
                <div class="card card-testimonial">
                  <div class="card-icon">
                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                  </div>
                  <div class="card-body">
                    <p class="card-description">
                      "Rallio was able to get me almost 100 new Followers in less than 2 weeks, which subsequently grew my weekly revenue. They also helped with my grand opening. I used to think that social media wasn’t a great marketing channel for my business, but now I’m a believer.”
                    </p>
                                  <div class="card-footer">
                        <h4 class="card-title">Mark Martin</h4>
                        <h6 class="card-category">Pet Supplies Plus</h6>
                      </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                          <div class="card card-testimonial">
                  <div class="card-icon">
                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                  </div>
                  <div class="card-body">
                    <p class="card-description">
                      “The results and expertise delivered by Rallio are fantastic. As if that wasn’t enough, the support and service that my team and I receive is truly unparalleled. I highly recommend Rallio to any business wanting to be successful on social media.”
                    </p>
                                  <div class="card-footer">
                        <h4 class="card-title">Greg King</h4>
                        <h6 class="card-category">Service Master Restore</h6>
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-md-2">

              </div>

            </div>
          </div>
        </div>

      <!-- <div class="section section-dark text-center reward-section">
  		<div class="container">
  			<h2 class='title'>GET REWARDED</h2>
        <h3 class='subtitle'> Invite Franchisees, Get $25 Cash</h3>
  			<div class="row">
  				<div class="col-md-12">
  					<a class='link' target="_blank" href="http://ralliolocal.refr.cc">Click Here To Get Started</a>
  				</div>
  			</div>
  		</div>
  	</div> -->

    <!--     *********     FEATURES 1      *********      -->
        <div class="features-1">
            <div class="container">
                <div class="row">
    				<div class="col-md-8 ml-auto mr-auto text-center">
    					<h2 class="title">Things you should know</h2>
    					<h5 class="description">Every pixel in our technology and member on our team is here to help make you more successful and grow your business. You’re special to us, so we look forward to you joining our tribe. </h5>
    				</div>
    			</div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="info">
                            <div class="icon icon-danger">
                                <i class="nc-icon nc-palette"></i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Includes ad spend</h4>
                                <p class="description">Package pricing <b>includes</b> all direct-to-Facebook advertising cost. </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info">
                            <div class="icon icon-danger">
                                <i class="nc-icon nc-bulb-63"></i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Guarantees growth</h4>
                                <p>Rallio <b>guarantees</b> to grow your local social following.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info">
                            <div class="icon icon-danger">
                                <i class="nc-icon nc-chart-bar-32"></i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Focused on local</h4>
                                <p>Growth and engagement will come from people <b>living in your</b> local <b>community</b>. </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info">
                            <div class="icon icon-danger">
                                <i class="nc-icon nc-sun-fog-29"></i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Awesome Support</h4>
                                <p>Have a question? No worries, Rallio is always <b>here for you</b> with online support.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section section-dark text-center">
      		<div class="container">
      			<h2 class="title">No long term contracts. Month to month only.</h2>
      			<div class="row">
      				<div class="col-md-12">
      					<a target="_blank" href="terms.php">See Terms and Conditions</a>
      				</div>
      			</div>
      		</div>
      	</div>

        <!--     *********    PRICING 2     *********      -->
            <div class="pricing-2 section-gray" id='buy_now'>
            <div class="container">
              <div class="row">
                <div class="col-md-6 ml-auto mr-auto text-center">
                  <h2 class="title">Pick the best plan for you</h2>
                            <h5 class="description">Our no contract plans make this a risk-free decision. We look forward to working with you!</h5>
                            <br>
                            <ul class="nav nav-pills nav-pills-danger justify-content-center">
                              <li class="nav-item">
              									<a class="nav-link active" data-toggle="tab" href="#monthly" role="tab">Monthly</a>
              								</li>
              								<li class="nav-item">
              									<a class="nav-link" data-toggle="tab" href="#yearly" role="tab">Yearly</a>
              								</li>
                            </ul>

                </div>
              </div>

              <!-- Pill panes -->
              <div class="margin-top">

              </div>
              <div class="tab-content">
                  <!-- MONTHLY START -->
                  <div class="tab-pane active" id="monthly" role="tabpanel">
                    <div class="row">
                      <div class="col-md-6">
                                  <div class="card card-pricing" data-background="image" style="background-image: url({{ URL::asset('images/sections/forest-bg.jpg') }})">
                        <div class="card-body">
                          <h6 class="card-category">Manage & Grow
</h6>
                          <h1 class="card-title"><small>$</small>147<small>/mo</small></h1>
                          <ul>
                            <li><b>Includes</b> all advertising dollars</li>
                            <li><b>Grow</b> your social following</li>
                            <li><b>Respond</b> to reviews</li>
                            <li><b>Generate</b> monthly report</li>
                          </ul>
                          <button class="btn btn-primary btn-round" data-target="#registerModal" data-toggle="modal" id='boostedMonthly' type="button">Register now</button>
                        </div>
                      </div>
                      </div>

                      <div class="col-md-6">
                                  <div class="card card-pricing" data-background="image" style="background-image: url({{ URL::asset('images/sections/anders-jilden.jpg') }})">

                        <div class="card-body">
                          <h6 class="card-category">Personalize & Engage</h6>
                          <h1 class="card-title"><small>$</small>347<small>/mo</small></h1>
                          <ul>
                                              <li><b>Includes</b> the Manage & Grow package
</li>
                              <li><b>Create</b> 3 weekly custom, local posts</li>
                              <li><b>Strategize</b> with a Rallio specialist</li>
                          </ul>
                          <button class="btn btn-neutral btn-round" data-target="#registerModal" data-toggle="modal" id='completeMonthly' type="button">Register now</button>
                        </div>
                      </div>
                      </div>
                    </div>
                  </div>
                  <!-- YEARLY START -->
                  <div class="tab-pane" id="yearly" role="tabpanel">
                    <div class="row">
                      <div class="col-md-6">
                                  <div class="card card-pricing" data-background="image" style="background-image: url({{ URL::asset('images/sections/forest-bg.jpg') }})">

                        <div class="card-body">
                          <h6 class="card-category">Manage & Grow
</h6>
                          <h1 class="card-title"><small>$</small>1,470<small>/y</small></h1>
                          <ul>
                            <li><b>Includes</b> all advertising dollars</li>
                            <li><b>Grow</b> your social following</li>
                            <li><b>Respond</b> to reviews</li>
                            <li><b>Generate</b> monthly report</li>
                          </ul>
                          <button class="btn btn-warning btn-round" data-target="#registerModal" data-toggle="modal" id='boostedYearly' type="button">Register now</button>
                        </div>
                      </div>
                      </div>

                      <div class="col-md-6">
                                  <div class="card card-pricing" data-background="image" style="background-image: url({{ URL::asset('images/sections/anders-jilden.jpg') }})">

                        <div class="card-body">
                          <h6 class="card-category">Personalize & Engage</h6>
                          <h1 class="card-title"><small>$</small>3,470<small>/y</small></h1>
                          <ul>
                                              <li><b>Includes</b> the Manage & Grow package
</li>
                              <li><b>Create</b> 3 weekly custom, local posts</li>
                              <li><b>Strategize</b> with a Rallio specialist</li>
                          </ul>
                          <button class="btn btn-neutral btn-round" data-target="#registerModal" data-toggle="modal" id='completeYearly' type="button">Register now</button>
                        </div>
                      </div>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
        </div>

		<!-- <div class="pricing-5 section-gray" id='buy_now'>
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<h2 class="title">Choose the package that suits your needs and budget</h2>
						<div class="choose-plan">
							<ul class="nav nav-pills nav-pills-danger" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#monthly" role="tab">Monthly</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#yearly" role="tab">Yearly</a>
								</li>
							</ul>
						</div><br>
            <div class="row">
              <div class="col-md-10">
                  <p class="description text-gray">Too busy to manage your social media? Let the experts at Rallio handle it. Our  packages supercharge your engagement and drive more local business.</p>
              </div>
            </div>
					</div>
					<div class="col-md-7 ml-auto">
						<div class="tab-content text-center">
							<div class="tab-pane active" id="monthly" role="tabpanel">
								<div class="space-top"></div>
								<div class="row">
									<div class="col-md-6">
										<div class="card card-pricing">
											<div class="card-body">
												<h6 class="card-category text-primary">Boosted Package</h6>
												<h6 class="card-category text-primary small">per month</h6>
												<h1 class="card-title">$147</h1>
                        <p class='invisible'></p>
                        <p> <i>Small monthly boost on content increases engagement by<span class='nowrap'> 10 to 25 times</span></i></p>
												<ul>
													<li>Run your boosted ad campaigns</li>
													<li>Increase your followers</li>
                          <li>Reply to all reviews</li>
													<li>Engage with all social interactions</li>
													<li>Generate monthly reports</li>
													<li class='invisible'></li>
													<li class='invisible'></li>
												</ul><button class="btn btn-primary btn-round" data-target="#registerModal" data-toggle="modal" id='boostedMonthly' type="button">Register now</button>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="card card-pricing" data-color="orange">
											<div class="card-body">
												<h6 class="card-category text-success">Complete Package</h6>
												<h6 class='card-category text-success small'>per month</h6>
												<h1 class="card-title">$347</h1>
                        <p class='invisible'></p>
                        <p> <b>(Best Value)</b> </p>
                        <p>   <i>Local content has proven to have 10
times the engagement rate</i> </p>

												<ul>
                          <li>Includes Boosted Package +</li>
													<li>Create 3 custom, local posts per week for major social platforms</li>
													<li>Dedicated Rallio account strategist</li>
													<li>Quarterly strategy calls</li>
													<li>Monthly reports</li>
												</ul><button class="btn btn-neutral btn-round" data-target="#registerModal" data-toggle="modal" id='completeMonthly' type="button">Register now</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="yearly" role="tabpanel">
								<div class="space-top"></div>
								<div class="row">
									<div class="col-md-6">
										<div class="card card-pricing">
											<div class="card-body">
												<h6 class="card-category text-warning">Boosted Package</h6>
												<h6 class="card-category text-warning small">per year (2 MONTHS FREE)</h6>
												<h1 class="card-title">$1,570</h1>
                        <p class='invisible'></p>
                        <p> <i>Small monthly boost on content increases engagement by<span class='nowrap'> 10 to 25 times</span></i></p>
												<ul>
													<li>Run your boosted ad campaigns</li>
													<li>Increase your followers</li>
                          <li>Reply to all reviews</li>
													<li>Engage with all social interactions</li>
													<li>Generate monthly reports</li>
													<li class='invisible'></li>
													<li class='invisible'></li>
												</ul><button class="btn btn-warning btn-round" data-target="#registerModal" data-toggle="modal" id='boostedYearly' type="button">Register now</button>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="card card-pricing" data-color="orange">
											<div class="card-body">
												<h6 class="card-category text-success">Complete Package</h6>
												<h6 class="card-category text-success small">per year (2 MONTHS FREE)</h6>
												<h1 class="card-title">$3,570</h1>
                        <p class='invisible'></p>
                        <p> <b>(Best Value)</b> </p>
                        <p>   <i>Local content has proven to have 10
times the engagement rate</i> </p>

												<ul>
                          <li>Includes Boosted Package +</li>
													<li>Create 3 custom, local posts per week for major social platforms</li>
													<li>Dedicated Rallio account strategist</li>
													<li>Quarterly strategy calls</li>
													<li>Monthly reports</li>
												</ul><button class="btn btn-neutral btn-round" data-target="#registerModal" data-toggle="modal" id='completeYearly' type="button">Register now</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
    <!-- form modal -->
  	<div aria-hidden="false" class="modal fade" id="registerModal" role="dialog" tabindex="-1">
  		<div class="modal-dialog modal-register">
  			<div class="modal-content">
  				<div class="modal-header no-border-header text-center">
  					<button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;</button>
  					<h3 class="modal-title"><span id='displayPackageType'></span> Package</h3>
  					<p>$<span id='displayPrice'>XXX</span> / <span id='displayRecurrence'>month</span></p>
            <p><i id='displayReferral'></i></p>
            <i>Ad Spend Included</i>
            <!-- <p id='boostValue'>+ $ / month (min boost)</p> -->
  				</div>
  				<div class="modal-body contact-us">
  					<form action="" class="contact" id="registerForm" method="post" name="registerForm">
  						<div class="row">
  							<div class="col-md-6">
  								<div class="form-group">
  									<input class="form-control" id="first_name" name="first_name" placeholder="First Name" size="4" type="text">
  								</div>
  							</div>
  							<div class="col-md-6">
  								<div class="form-group">
  									<input class="form-control" id="last_name" name="last_name" placeholder="Last Name" size="4" type="text">
  								</div>
  							</div>
  						</div>

  						<div class="row">
  							<div class="col-md-6">
  								<div class='form-group'>
  									<input class="form-control" id="email_address" name="email_address" placeholder="Email(Rallio Username)" size="4" type="email">
                    <div id='emailAlert' style='display: none;' class="form-control-feedback">Enter the email associated with your Rallio account.</div>
  								</div>
  							</div>
  							<div class="col-md-6">
  								<div class="form-group">
  									<input class="form-control" id="corporate_address" name="corporate_address" placeholder="Billing Address" size="4" type="text">
  								</div>
  							</div>
  						</div>

  						<div class="row">
  							<div class="col-md-6">
  								<div class="form-group">
  									<input class="form-control" id="city" name="city" placeholder="City" size="4" type="text">
  								</div>
  							</div>
  							<div class="col-md-6">
  								<div class="form-group">
  									<input class="form-control" id="state" name="state" placeholder="State" size="4" type="text">
  								</div>
  							</div>
  						</div>
  						<div class="row">
  							<div class="col-md-6">
  								<div class="form-group">
  									<input class="form-control" id="zip_code" name="zip_code" placeholder="Zip" size="4" type="text">
  								</div>
  							</div>
  							<div class="col-md-6">
  								<div class="form-group">
  									<input class="form-control" id="country" name="country" placeholder="Country" size="4" type="text">
  								</div>
  							</div>
  						</div>
  						<div class="row">
  							<div class="col-md-6">
  								<div class="form-group">
  									<input class="form-control" id="phone_number" name="phone_number" placeholder="Phone Number" size="4" type="tel">
  								</div>
  							</div>
                <div class="col-md-6">
  								<div class="form-group">
  									<input class="form-control" id="location_name" name="location_name" placeholder='Location Name' size="4" type="text">
  								</div>
  							</div>
  						</div>
              <div class="row">
                <div class="invisible col-md-6 margin-bottom">
                  <div class="form-group">
                      <select id='boost_amount' name="boost_amount" class="selectpicker" data-style="btn btn-default" >
                          <option disabled>Boost Amount</option>
                          <option selected value="0">$0</option>
                     </select>
                  </div>

  							</div>
                <div class="col-md-6">
  								<div class="form-group">
  									<input class="form-control" id='coupon_code' name="coupon_code" placeholder='Coupon Code' size="4" type="text">
  								</div>
  							</div>
              </div>
  						<div class="row">
  							<div class="col-md-6 ml-auto mr-auto text-center margin-bottom">
  								<div class="form-check">
  									<label class="form-check-label" for='chk2'><input class="form-check-input" id='chk2' name="terms_n" type="checkbox"> Agree to terms <span class="form-check-sign"></span></label>
  								</div>
  							</div>
  						</div>
  						<div class="row margin-bottom">
  							<div class="col-md-6 ml-auto mr-auto text-center">
  								<input name="contact_rallio" type="hidden" value="send_email"> <input id='price' name="contact_rallio" type="hidden" value="price"> <input class="btn btn-success btn-lg btn-fill" type="submit" value="Check Out">
  							</div>
  						</div>
  					</form>
  				</div>
  				<div class="modal-footer flex-justify-center">
  					<a target="_blank" href="terms.php">Terms and Conditions</a>
  				</div>
  			</div>
  		</div>
  	</div>

    <!-- loading modal -->
    <div class="modal fade" id="loadingModal" tabindex="-1" role="dialog" aria-labelledby="loadingModal" aria-hidden="true">
        <div class="modal-dialog modal-notice">
            <div class="modal-content">
                <div class="modal-header no-border-header">
                    <h5 class="modal-title">Submitting...</h5>
                </div>
                <div class="modal-body text-center">
                    <div class='uil-reload-css reload-background' style=''><div></div></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-link" data-dismiss="modal">Okay</button>
                </div>
            </div>
        </div>
    </div>

  <div class="alert-fixed">
      <div id='alertSuccess' class="alert alert-success" role="alert" style='display:none'>
        <div class="container">
            <div class="alert-wrapper">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="nc-icon nc-simple-remove"></i>
                </button>
                <div id='successMessage' class="message">
                  Success
                </div>
            </div>
        </div>
      </div>

      <div id='alertFailure' class="alert alert-danger alert-with-icon" data-notify="container" style='display:none'>
          <div class="container">
              <div class="alert-wrapper">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="nc-icon nc-simple-remove"></i>
                  </button>
                  <div class="message">Failure</div>
              </div>
          </div>
      </div>
  </div>

    <!--     *********    Features-6 Custom Feature     *********      -->
    <div class="features-6 section-image" id='get_rewarded'  style="background-image: url({{ URL::asset('images/thank-you.jpeg') }})">

			<div class="filter"></div>
			<div class="text-center">
				<div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <h1 class='title'>Get Rewarded</h1>
            </div>

          </div>
					<div class="row">
						<div class="col-md-6 ml-auto">
							<h2 class="title">Win A Trip to California</h2>
							<h5 class="description">Team Rallio wants to meet you, and we know you’ll love Orange County. Refer 15 franchisees to purchase a Rallio Local package in a 30 day period and Rallio will fly you and a friend to stay the weekend in Orange County. Don’t worry, our feelings won’t be hurt if you’d rather lay on the beach than come visit us.</h5><br>
							<!-- <a href="#video_link" target="_blank" class="btn btn-danger">
        <i class="nc-icon nc-cart-simple"></i> WATCH OUR VIDEO
    </a> -->
						</div><!-- <div class="col-md-5">
                            <div class="iframe-container">
                                <iframe src="https://www.youtube.com/embed/RcmrbNRK-jY?modestbranding=1&autohide=1&showinfo=0" frameborder="0" allowfullscreen height="250"></iframe>
                            </div>
                        </div> -->
						<div class="col-md-6 ml-auto">
							<h2 class="title">$25 Every Referral</h2>
							<h5 class="description">You will receive $25 for every referral that purchases a Rallio Local package. Your friend will also receive $25 off their first month of Rallio Local. Click the link to below to start earning</h5><br>
							<a class="btn btn-danger" href="http://ralliolocal.refr.cc" target="_blank"><i class="nc-icon nc-cart-simple"></i> Start Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
  	<div class="section landing-section">
  		<div class="container">
  			<div class="row">
  				<div class="col-md-6 ml-auto mr-auto">
  					<h2 class="text-center">Have questions?</h2>
  					<form data-toggle="validator" class="contact-form" method='post' action='contact.php'>
  						<div class="row">
  							<div class="col-md-6 form-group">
  								<label>Name</label> <input class="form-control" placeholder="Name" id='name' name='name' type='text' required>
  							</div>
  							<div class="col-md-6 form-group">
  								<label>Email</label> <input class="form-control" placeholder="Email" name='email' name='email' type='email' required>
  							</div>
  						</div>
              <div class="form-group">
                <label>Message</label>
    						<textarea type='text' name='message' id='message' class="form-control" placeholder="Ask your questions here..." rows="4" required></textarea>
              </div>

  						<div class="row">
  							<div class="col-md-4 offset-md-4">
  								<button type='submit' name='submit' value='submit' class="btn btn-danger btn-lg btn-fill">Send Message</button>
  							</div>
  						</div>
  					</form>
  				</div>
  			</div>
  		</div>
  	</div>
	</div>



	<footer class="footer footer-black footer-big">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 ml-auto mr-auto">
					<div class="logo text-center">
						<h3>Rallio</h3>
					</div>
				</div>
				<div class="col-md-6 offset-md-2 col-sm-8">
					<div class="links">
            <ul>
              <li>
                <a class='phone' href="tel:+8003994210">800 - 399 - 4210</a>
              </li>
            </ul>
            <hr />
						<div class="copyright">
							<div class="pull-left">
								©
								<script>
								document.write(new Date().getFullYear())
								</script>, made with <i class="fa fa-heart heart"></i>
							</div>
							<div class="pull-right">
								<ul>
									<li>
										<a target="_blank" href="terms.php">Terms</a>
									</li>
									<li style="list-style: none">|</li>
									<li>
										<a href="">Privacy</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- Core JS Files -->
	{{-- <script src="assets/js/jquery-3.2.1.min.js" type="text/javascript">
	</script>
	<script src="assets/js/jquery-ui-1.12.1.custom.min.js" type="text/javascript">
	</script>
	<script src="assets/js/popper.js" type="text/javascript">
	</script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript">
	</script> <!-- Switches -->
	<script src="assets/js/bootstrap-switch.min.js">
	</script> <!--  Plugins for Slider -->
	<script src="assets/js/nouislider.js">
	</script> <!--  Photoswipe files -->
	<script src="assets/js/photo_swipe/photoswipe.min.js">
	</script>
	<script src="assets/js/photo_swipe/photoswipe-ui-default.min.js">
	</script>
	<script src="assets/js/photo_swipe/init-gallery.js">
	</script> <!--  Plugins for Select -->
	<script src="assets/js/bootstrap-select.js">
	</script> <!--  for fileupload -->
	<script src="assets/js/jasny-bootstrap.min.js">
	</script> <!--  Plugins for Tags -->
	<script src="assets/js/bootstrap-tagsinput.js">
	</script> <!--  Plugins for DateTimePicker -->
	<script src="assets/js/moment.min.js">
	</script>
	<script src="assets/js/bootstrap-datetimepicker.min.js">
	</script> <!--  Form Input Modifier -->
	<script src="js/forminputs.js" type="text/javascript">
	</script> <!--  Primary Site Javascript -->
	<script src="js/rallio.js">
	</script> <!--  Smooth Scrolling  -->
	<script src="js/smooth-scroll.js">
	</script>
  <!--  Bootstrap Form Validation  -->
	<script src="js/validator.js">
	</script>
	<script src="assets/js/paper-kit.js?v=2.1.0">
	</script>
  <!--  MD5  -->
  <script src="js/md5.min.js"></script> --}}

</body>
</html>
