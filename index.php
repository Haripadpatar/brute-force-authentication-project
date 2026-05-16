<?php


if(isset($_POST['submit'])){

$user="admin";
$pass="admin123";

if($_POST['username']==$user && $_POST['password']==$pass){
echo "Login Succesfully";
}
else{
echo "Incorrect Password";
}

}
?>

<form method="POST">
<input type="text" name="username" placeholder="Username"><br><br>


<input type="password" name="password" placeholder="password"><br><br>

<input type="submit" name="submit">
</form>
