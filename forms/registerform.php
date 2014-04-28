<form name="registerForm" action="register.php" onsubmit="return validateRegisterForm()" method="post">
<h2>User Registration</h2>
<table border="2">
<tr><td>First Name: </td>  <td><input type="text" name="firstName"/></td></tr>
<tr><td> Last Name: </td> <td><input type="text" name="lastName"/></td></tr>
<tr><td>Email: </td> <td><input type="email" name="email"/></td></tr>
<tr><td>Password: </td><td><input type="password" name="password"/></td></tr>
<tr><td>Confirm Password: </td><td><input type="password" name="confirmPassword"/></td></tr>
</table>
<input type="submit" value="Submit"/>
</form>
<script type="text/javascript" src="javascript/validateforms.js" ></script>