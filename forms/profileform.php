
<h2>Account Settings</h2>
<form action="profile.php" method="post" />
<table border="2">
<tr><td>First Name: </td>  <td><input type="text" value=<?php echo $firstName ?> name="firstName"/></td></tr>
<tr><td> Last Name: </td> <td><input type="text" value=<?php echo $lastName ?> name="lastName"/></td></tr>
<tr><td>Email: </td> <td><input type="email" value=<?php echo $email ?>  name="email"/></td></tr>
<tr><td>Old Password: </td><td><input type="password" name="oldPassword"/></td></tr>
<tr><td>New Password: </td><td><input type="password" value =<?php echo $password ?> name="newPassword"/></td></tr>
</table>
<input type="submit" value="Submit"/>
</form>
