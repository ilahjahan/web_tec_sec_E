<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration</title>
	<link rel="stylesheet" href="styles.css">
	<script src="scripts.js"></script>
</head>
<body>

<div class="wrapper">
  <h2>Registration</h2>
  <div id="error_message"></div>
  <form id="myform" onsubmit="return validate();">
    <div class="input_field">
        <input type="text" placeholder="Name" id="name">
    </div>
    <div class="input_field">
        <input type="text" placeholder="Email" id="email">
    </div>

    <div class="input_field">
        <input type="text" placeholder="Password" id="password">
    </div>

    <div class="input_field">
        <input type="text" placeholder="Confirm Password" id="cpassword">
    </div>

   <div class="input_field">
        <input type="text" placeholder="Phone" id="phone">
    </div>
    
    <div class="input_field">
        <textarea placeholder="Address" id="address"></textarea>
    </div>
    <div class="btn">
        <input type="submit">
    </div>
  </form>
</div>

</body>
</html>
