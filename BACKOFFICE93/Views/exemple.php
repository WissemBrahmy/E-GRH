<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ATTESTATION DE PRESENCE</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">

<link href="css/bootstrap-table.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script> 
         <![endif]-->
<?php

if(isset($_GET['voir'])){

$v=$_GET['voir'];
	$attest=$admin-> getattestation($v);
	
	$agent=$admin->getemp($v);
	
   $sal=$admin->getsalaire($v);
	?>



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ATTESTATION DE PRESENCE</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">

<link href="css/bootstrap-table.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

 <!-- jQuery -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap-table.js"></script>
<button  onClick="window.print()"  class="btn btn-Warning" >
							  		
							    		<span class="glyphicon glyphicon-print" aria-hidden="true">	Imprimer</span>	
							    		</button>
<center><div class="panel panel-default" style="width: 500px;height: 600px">
						XHTML

    <table class="table table-bordered">  
        <thead>  
        <tr>  
        <th>Name</th>  
        <th>Salary</th>
        <th>Age</th>  
        </tr>  
        </thead>  
        <tbody>  
        <?php  
        while ($row = mysqli_fetch_assoc($rs_result)) {
        ?>  
                    <tr>  
                    <td><?php echo $row["employee_name"]; ?></td>  
                    <td><?php echo $row["employee_salary"]; ?></td>  
                    <td><?php echo $row["employee_age"]; ?></td>  
                    </tr>  
        <?php  
        };  
        ?>  
        </tbody>  
        </table>
  
        <?php  
                 $q=$this->db->query("select count(id) as count from agents");
    $stats['cong']=$q->fetchColumn();

return $stats;
 
        $total_records = $stats[0];  
        $total_pages = ceil($total_records / $limit);  
        $pagLink = "<nav><ul class='pagination'>";  
        for ($i=1; $i<=$total_pages; $i++) {  
                     $pagLink .= "<li><a href='index.php?page=".$i."'>".$i."</a></li>";  
        };  
        echo $pagLink . "</ul></nav>";  
        ?>

    <table class="table table-bordered">  
        <thead>  
        <tr>  
        <th>Name</th>  
        <th>Salary</th>
        <th>Age</th>  
        </tr>  
        </thead>  
        <tbody>  
        <?php  
        while ($stats) {
        ?>  
                    <tr>  
                    <td><?php echo $stats["nom"]; ?></td>  
                    <td><?php echo $stats["prenom"]; ?></td>  
                    <td><?php echo $stats["cin"]; ?></td>  
                    </tr>  
        <?php  
        }}  
        ?>  
        </tbody>  
        </table>
          
        <?php  
                  $q=$this->db->query("select count(id) as count from agents");
    $stats['agent']=$q->fetchColumn();

return $stats;
 
        $total_records = $stats[0];  
        $total_pages = ceil($total_records / $limit);  
        $pagLink = "<nav><ul class='pagination'>";  
        for ($i=1; $i<=$total_pages; $i++) {  
                     $pagLink .= "<li><a href='index.php?page=".$i."'>".$i."</a></li>";  
        };  
        echo $pagLink . "</ul></nav>";  
         
        ?> </div></center>



</head></html>
