<?php 
    include("connection.php");
    include("signup.php");
?>
<!DOCTYPE html>
<html lang="en">
	
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up form </title>

	<!-- Bootstrap 5 CDN Link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS Link -->
	<link rel="stylesheet" href="signupstyle.css">
</head>
<body>
    <section class="wrapper">
		<div class="container">
			<div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 text-center">
				<div class="logo">
					<img decoding="async" src="/images/Stringpng.png" class="img-fluid" alt="Logo">
				</div>
				<form class="rounded bg-white shadow py-5 px-4"  action="signup.php" method="POST" onsubmit="return check()" name="form">
					<h3 class="text-dark fw-bolder fs-4 mb-2">Create an Account</h3>
					<div class="fw-normal text-muted mb-2"> 
                        Already have an account
						<a href="index.php" class="text-primary fw-bold text-decoration-none">Sign in here</a>
					</div>
                    <div class="text-center text-muted text-uppercase mb-2">or</div>
                    <a href="#" class="btn btn-light login_with w-100 mb-4" name="google">
						<img decoding="async" alt="Logo" src="/images/google-icon.svg" class="img-fluid me-3">Sign in with Google
					</a>

                    <div class="form-floating mb-3">
						<input type="text" class="form-control" id="floatingFirstName" name="fname" placeholder="name@example.com" required>
						<label for="floatingFirstName">First Name</label>
					</div>
                    <div class="form-floating mb-3">
						<input type="text" class="form-control" id="floatingLastName" name="lname" placeholder="name@example.com" required>
						<label for="floatingLastName">Last Name</label>
					</div>

					<div class="form-floating mb-3">
						<input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required>
						<label for="floatingInput">Email address</label>
					</div>

					<div class="form-floating mb-3">
						<input type="text" class="form-control" id="floatingInput1" name="uname" placeholder="name@example.com" required>
						<label for="floatingInput">Username</label>
					</div>
					<div class="form-floating mb-3">
						<input type="password" class="form-control" id="floatingPassword" name="pass" placeholder="Password" required>
						<label for="floatingPassword">Password</label>
                        <span class="password-info mt-2">
                            Use 8 or more Character with mix of letters , numbers & symbols.
                        </span>
					</div>

                    <div class="form-floating mb-3">
						<input type="password" class="form-control" id="floatingConfirmPassword" name="cpass" placeholder="Password" required>
						<label for="floatingConfirmPassword">Confirm Password</label>
                      
					</div>
                    <div class="form-check d-flex align-item-center">
                        <input class="form-check-input" type="checkbox" id="gridCheck" name="checkbox">
                        <label class="form-check-label ms-2" for="gridCheck">
                          I Agree <a href="#" name="tnc"> Terms and condition.</a>
                        </label>
                      </div>
					
					<input type="submit" class="btn btn-primary submit_btn w-100 my-4" name="submit">Continue
					
				</form>
			</div>
		</div>
	</section>
    <script>
		function check()
		{
			var pwd = document.form.pass.value;
            var cpwd = document.form.cpass.value;
			if(pwd==cpwd)
			{
				return true;
			}
			else 
			{
				alert("Password Not Match!!!");
				return false;
			}
		}
	</script>
</body>
</html>

