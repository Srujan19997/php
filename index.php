<html>
<head>
<title>
Basic Info.</title>
</head>

<style>
span{
	color:red;
	font-size:12px;
}


fieldset{
	margin: 0 auto;
	width:500px;
	height:auto;
	
	background:#ffffb3;
font-size=12px;
	
	
}
h1{
	text-align:center;
	border:solid 1px #eee;
}
</style>
<body>
<h1>Welcome !!!!<h1>

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";
$nameErr = $emailErr = $genderErr = $websiteErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $nameErr = "Name is required";
  } else {
    $name =  ($_POST["fname"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email =  ($_POST["email"]);
  }

  if (empty($_POST["Website"])) {
    $website = "";
  } else {
    $website = ($_POST["Website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment =  ($_POST["Comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender =  ($_POST["gender"]);
  }
}
?>




<form method="Post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<fieldset>
<span > * is required feild</span><br>
<br>

Name:<input type="text" name="fname">
<span class="error">* <?php echo $nameErr;?></span><br>
<br>
email:<input type="email" name="email">
<span class="error">* <?php echo $emailErr;?></span>
<br>
<br>
Website:<input type="text" name="Website">
<span class="error">* <?php echo $websiteErr;?></span><br>
<br>
Comment:<textarea name="Comment" rows=5,cols=15></textarea><br>
<br>
Gender:<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other
<span class="error">* <?php echo $genderErr;?></span>

<br>
<br>
<input type="submit" value="submit">

</fieldset>
</form>
<?php
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $gender;
echo "<br>";

?>



</body>
