<!doctype html>
<html lang="en">
  <head>
  	<title>Login Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css
	">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="/css/signInAdmin.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
						@if(Session::get('first'))
					<div class="col-12">
					  <div class="alert alert-danger" role="alert">
						<div class="fw-bold">
						  <div class="d-flex justify-content-between">
		
						  {{ Session::get('first') }}
						  <button type="button" class="btn-close" id="close" data-bs-dismiss="alert" aria-label="Close"></button>
						  </div>
						</div>
					  </div>
					</div>
				  @endif
						<div class="icon d-flex align-items-center justify-content-center">
							<img src="/images/logoUnira.png" alt="" style="max-width: 100%">
						</div>
		      	<h3 class="text-center mb-4">Login Admin</h3>
						<form action="/loginAdmin" class="login-form" method="POST">
							@csrf
		      				<div class="form-group">
								<input type="text" name="username" class="form-control rounded-left" placeholder="Username" required>
							</div>
							<div class="form-group d-flex">
								<input type="password" name="password" class="form-control rounded-left" placeholder="Password" required>
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
							</div>
							<div class="form-group d-md-flex">
								<div class="w-50">
									<label class="checkbox-wrap checkbox-primary">Remember Me
										<input type="checkbox"  name="remember">
										<span class="checkmark"></span>
									</label>
								</div>
								
	           			 	</div>
	          			</form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="assets/js2/jquery.min.js"></script>
  <script src="assets/js2/popper.js"></script>
  <script src="assets/js2/bootstrap.min.js"></script>
  <script src="assets/js2/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>

	</body>
</html>

