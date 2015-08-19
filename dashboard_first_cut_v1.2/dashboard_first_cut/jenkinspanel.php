<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>DevOps Dashboard Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/devops-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<body>
  <form method="post" action="">
    <input type="text" name="something" value="<?= isset($_POST['something']) ? htmlspecialchars($_POST['something']) : '' ?>" />
    <input type="submit" name="submit" value="enter job name" />
  </form>

<?php
if(isset($_POST['submit'])) {
 
  $jobname= $_POST['something'];
  
 $url1="http://iam:iam@localhost:8080/createItem?name="; 
 
 $url= "$url1" . "$jobname";
 

 echo "\n";
 echo "\n"; 


$req_data="<?xml version='1.0' encoding='UTF-8'?><project><actions/><description></description><keepDependencies>false</keepDependencies><properties/><scm class='hudson.scm.NullSCM'/><canRoam>true</canRoam><disabled>false</disabled><blockBuildWhenDownstreamBuilding>false</blockBuildWhenDownstreamBuilding><blockBuildWhenUpstreamBuilding>false</blockBuildWhenUpstreamBuilding><triggers class='vector'/><concurrentBuild>false</concurrentBuild><builders/><publishers/><buildWrappers/></project>";
$ch = curl_init(); 
curl_setopt ($ch, CURLOPT_TIMEOUT, 40); 
curl_setopt($ch, CURLOPT_HEADER, 1);  
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_URL, $url);
curl_setopt( $ch, CURLOPT_COOKIE, '/tmp/cookies.txt' );
curl_setopt($ch, CURLOPT_HTTPHEADER, Array("Content-Type: text/xml"));
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $req_data);

$result = curl_exec ($ch); 

$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE); ?>
<font color="white">
<?php   
if ($http_code ==400)
echo "project name not available"; ?>
</font>
<?php
  
}
?>

<a href="http://localhost/db/dashboard_first_cut/test.html" >Home</a>

</body>
</html>