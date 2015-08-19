<html>
<head>
<title>jira new project</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
     <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/devops-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>



<body>

      
	
  <form method="post" action="">
 
 
  <font color="white">  enter pjt name </font><input type="text" name="something" value="<?= isset($_POST['something']) ? htmlspecialchars($_POST['something']) : '' ?>" /> 
  <font color="white">  enter mail id </font><input type="text" name="something2" value="<?= isset($_POST['something2']) ? htmlspecialchars($_POST['something2']) : '' ?>" />
  <font color="white">  enter key </font><input type="text" name="something3" value="<?= isset($_POST['something3']) ? htmlspecialchars($_POST['something3']) : '' ?>" />
   <font color="white"> Description </font> <input type="text" name="something4" value="<?= isset($_POST['something4']) ? htmlspecialchars($_POST['something4']) : '' ?>" />
    <input type="submit" name="submit" value="submit" />
	
  </form>

<?php
if(isset($_POST['submit'])) {

  
   
$admin = '';
$password = '';
$soapClient = new SoapClient('http://localhost:8090/rpc/soap/jirasoapservice-v2?wsdl');
$token = $soapClient->login($admin,$password);
$projectname= $_POST['something'];
$key = $_POST['something3'];
$description = $_POST['something4'];
$eid = $_POST['something2'];
 
try{
 
            
			$soapClient->createProject($token, $key , $projectname , $description , 'http://localhost:8090 ' , $eid,  array('id' =>'koffeewitharun@gmail.com'));
 ?>
  <font color="white">  Project raised in Jira </font>
  <a href="http://localhost:8090" >Click to follow</a>
  <?php
  }
        catch(Exception $ex){
 
            die('JIRA add Project failed: ' . $ex->getMessage());
        }
  
  
}
?>

<a href="http://localhost/db/dashboard_first_cut/test.html" >Home</a>

</body>
<html>