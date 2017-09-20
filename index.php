<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Form data collection</title>
</head>
<body>

<form id="form" action="">

<fieldset>
  ID:<br>
  <input type="text" name="ID" value="2015-2-60-076">
  <br>
  First name:<br>
  <input type="text" name="firstname" value="Raghib"> <br>
  Last name:<br>
  <input type="text" name="lastname" value="Shahriyer"><br>
  Email:<br>
  <input type="email" name="email" value="vcshahriyer@gmail.com"><br>
  <br>
  <input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other<br>
  <input type="button" value="Submit" onClick="myfunction()">
  <input type="reset" value="Reset">

</fieldset>
</form>

<br> <br> <br>

   <!-- Information table -->

<table border="1"
    summary="">
<caption> Personal Information </caption>

<tr>
<th>ID
<th>First Name
<th>Last Name
<th>Gmail
<th>Gender
</tr>


<tr>

<td id="stid">2015-2-60-076</td>
<td id="fname">Raghib</td>
<td id="lname">Shahriyer</td>
<td id="mail">vcshahriyer@gmail.com</td>
<td id="gender">Male</td>

</tr>


</table>
<p id="demo"></p>

<script src="script.js"></script>
</body>
</html>
