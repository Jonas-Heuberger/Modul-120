<?php require('Model/dbconnection.php');?>
<?php include('Controller/head.php');?>

<head>
    <title>Kunden</title>
</head>
<body>
    
<?php 
include('View/navbar.php');

require('Model/Query_kunden.php');

include('Controller/table_kunden.php');
    
include('Controller/footer.php');
?>
</body>
</html>