<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<title>Form Response with If-Else Statement</title>
</head>
 
<body>

<h2>Favorite City</h2>
 

 
<?php
//If form not submitted, display form.
if (!isset($_POST['submit'])){
?>
<?php
//If form submitted, process input.
}else{
 
//Retrieve string from form submission.
$city = $_POST['city'];
echo "Your favorite city is $city.";
 
}
?>

</body>
</html>