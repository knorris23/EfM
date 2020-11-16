<!DOCTYPE html>
<html>
<head>
<PHP><link rel="stylesheet" type="text\css" href="css/page.css"><PHP>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>



<title>For More Information</title>
</head>
<body>

<form method="post" action="process.php">

      <label for="FirstName">First name:</label><br><br>
      <input type="text" id="FirstName" name="FirstName"><br><br>
      <label for="MiddleName">Middle name:</label><br><br>
      <input type="text" id="MiddleName" name="MiddleName"><br><br>
      <label for="LastName">Last name:</label><br><br>
      <input type="text" id="LastName" name="LastName"><br><br>
      <label for="Email">Email Address:</label><br><br>
      <input type="email" id="Email" name="Email"><br><br>
      <label for="PhoneNumber">Phone Number (xxx-xxx-xxxx):</label><br><br>
      <input type="tel" id="PhoneNumber" name="PhoneNumber" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"><br><br>
      <label for="Address"><i class="fa fa-address-card-o"></i> Address</label><br><br>
      <input type="text" id="Address" name="Address"><br><br>
      <label for="City"><i class="fa fa-institution"></i> City</label><br><br>
      <input type="text" id="City" name="City"><br><br>
      <label for="State">State</label><br><br>
      <input type="text" id="State" name="State"><br><br>
      <label for="Zip">Zip</label><br><br>
      <input type="text" id="Zip" name="Zip"><br><br>
      <label for="Diocese">Diocese/Affiliation:</label><br><br>
      <input type="text" id="Diocese" name="Diocese"><br><br>
      <input type="submit" value="Submit">
      
</body>
</html>