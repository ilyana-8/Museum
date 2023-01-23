<!DOCTYPE html>
<html lang="en">

@extends('master.layout')
@section('content')

<!-- Template Main CSS File -->
{{-- <link href="assets/css/style.css" rel="stylesheet"> --}}
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

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
						<form action="bookings" method="post" role="form" enctype="multipart/form-data">
                            @csrf
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">First Name</span>
										<input name="first_name" type="text" class="form-control" id="first_name" placeholder="Enter your first name" required>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Last Name</span>
										<input type="text" name="last_name" class="form-control" id="last_name" placeholder="Enter your last name" required>
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label">Email</span>
								<input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
							</div>
							<div class="form-group">
								<span class="form-label">Phone Number</span>
								<input type="text" class="form-control" name="phone_no" id="phone_no" placeholder="Enter your phone number" required>
							</div>
							{{-- <div class="form-group">
								<span class="form-label">Nationality</span>
								<input class="form-control" type="text" placeholder="Enter Nationality">
							</div> --}}
							<div class="form-group">
								<span class="form-label">Nationality</span>
								<select class="form-control" id="nationality" required>
									<option>Malaysian</option>
									<option>Non Malaysian</option>

								</select>
								<span class="select-arrow"></span>
							</div>
							<div class="row">
								<div class="col-sm-5">
									<div class="form-group">
										<span class="form-label">Pickup Date</span>
										<input class="form-control" type="date" id="pickup_date"required>
									</div>
								</div>
								<div class="col-sm-7">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<span class="form-label">Adult</span>
												<select class="form-control" id="adult">
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
												<select class="form-control" id="children">
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
                        {{-- <div class="alert">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                            This is an alert box. --}}
                          </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
 @endsection
