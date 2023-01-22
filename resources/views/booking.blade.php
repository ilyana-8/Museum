@extends('master.layout')
@section('content')

<!-- Template Main CSS File -->
{{-- <link href="assets/css/style.css" rel="stylesheet"> --}}
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
    {{-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	{{-- <link type="text/css" rel="stylesheet" href="assets/css/style.css" /> --}}
    <link href="assets/css/style.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->


</head>

<body>

	<div id="booking" class="section">
		<div class="section-center">
			<div class="container position-relative" data-aos="fade-up">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Book Ticket</h1>
						</div>
						<form>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">First Name</span>
										<input class="form-control" type="text" placeholder="Enter your first name">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Last Name</span>
										<input class="form-control" type="text" placeholder="Enter your last name">
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label">Email</span>
								<input class="form-control" type="emial" placeholder="Enter your email">
							</div>
							<div class="form-group">
								<span class="form-label">Phone Number</span>
								<input class="form-control" type="tel" placeholder="Enter your phone number">
							</div>
							<div class="form-group">
								<span class="form-label">Nationality</span>
								<input class="form-control" type="text" placeholder="Enter Nationality">
							</div>
							<div class="form-group">
								<span class="form-label">Malaysian</span>
								<select class="form-control">
									<option>Malaysian</option>
									<option>Non Malaysian</option>

								</select>
								<span class="select-arrow"></span>
							</div>
							<div class="row">
								<div class="col-sm-5">
									<div class="form-group">
										<span class="form-label">Pickup Date</span>
										<input class="form-control" type="date" required>
									</div>
								</div>
								<div class="col-sm-7">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<span class="form-label">Adult</span>
												<select class="form-control">
                                                    <option>0</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
													<option>6</option>
													<option>7</option>
													<option>8</option>
													<option>9</option>
													<option>10</option>
													<option>11</option>
													<option>12</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<span class="form-label">Children</span>
												<select class="form-control">
                                                    <option>0</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
													<option>6</option>
													<option>7</option>
													<option>8</option>
													<option>9</option>
													<option>10</option>
													<option>11</option>
													<option>12</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-sm-4">
										</div>
									</div>
								</div>
							</div>
                            <p>
                                {{-- <div class="form-btn"> --}}
									<button class="submit-btn">Book Now</button>
                        </p>
                            <p>
								{{-- <div class="form-btn"> --}}
									<button class="submit-btn">Back</button>
								{{-- </div>
							</div> --}}
                        </p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->


 @endsection