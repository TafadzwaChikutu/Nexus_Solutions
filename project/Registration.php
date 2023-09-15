
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    
    <style media="screen">
        <!--Your CSS styles here -->
		   *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #fff;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form {
    height: auto; /* Adjust the form height as needed */
    width: 400px;
    background-color: rgba(255, 165, 0, 0.13);
    position: absolute;
    transform: translate(-50%, -50%);
    top: 60%;
    left: 50%;
    border-radius: 15px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255, 165, 0, 0.1);
    box-shadow: 0 0 40px rgba(255, 165, 0, 0.6);
    padding: 45px 25px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: black;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
   margin-top: 20px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: gray;
}
input:submit{
    margin-top: 50px;
    width: 100%;
    background-color: orange;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,165,0,0.27);
  color: black;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}
    </style>
</head>
<body>
    <!-- Your HTML code here -->
	<div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <!-- ... (previous HTML code) ... -->

<form action="php/connections.php" method="POST">
    <h3>Sign Up</h3>

    <label for="fullname">Name</label>
    <input type="text" name="name" class="form-control" placeholder="Full Name" id="fullname" required>

    <label for="surname">Surname</label>
    <input type="text" name="surname" class="form-control" placeholder="Surname" id="surname" required>

    <label for="username">Email/Username</label>
    <input type="text" name="email" class="form-control" placeholder="Email or Phone" id="username" required>

    <label for="password">Password</label>
    <input type="password" name="password" placeholder="Password" id="password" required>

    <label for="confirm-password">Confirm Password</label>
    <input type="password" name="confirm_password" placeholder="Confirm Password" id="confirm_password" required>

    <label for="phone">Phone Number</label>
    <input type="tel" name="phone" class="form-control" placeholder="Phone Number" id="phone" required>

    <input type="submit" class="btn btn-primary">
    <div class="social">
        <div class="go"><i class="fab fa-google"></i>  Google</div>
        <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
    </div>
</form>

</body>
</html>

