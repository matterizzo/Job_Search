<?php

    include('inc/connDB.inc.php');

    $job=str_replace("-", ' ', htmlspecialchars($_GET["job"]));
    $place=str_replace("-", ' ', htmlspecialchars($_GET["place"]));
    $order=str_replace("-", ' ', htmlspecialchars($_GET["orde"]));

    $sql = "SELECT * FROM JOB WHERE title like '%".$job."%' and place like'%".$place."%' ".$order.";";

    $result = $connection->query($sql);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job <?php echo ucwords(str_replace("/", " ", str_replace("-", " ",$job)))."in".ucwords(str_replace("/", " ", str_replace("-", " ",$place)))?></title>

    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/bulma.min.css">
    <link rel="stylesheet" href="search/css/content.css">
    <link rel="stylesheet" href="search/css/form.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script src="js/func.js"></script>
    <script type="text/javascript">
        function search(){
            location.href= 'http://localhost/dashboard/jpb_search/search.php?job='+ document.getElementById('dimm').value.replace(' ','-').replace(/\W+/g, '-') + '&orde=ORDER-BY-date-ASC&place='+ document.getElementById('dovm').value;
        }
        function orderBy(){
            location.href= 'http://localhost/dashboard/jpb_search/search.php?job=<?php echo str_replace(" ", "-",$job)?>&orde='+document.getElementById('orde').value+'&place=<?php echo str_replace(" ", "-", $place)?>';
        }
    </script>

</head>
<body style="background: #f6f7f8">
    <?php require_once("search/header_search.php"); ?>
    <div class="hero-body" >
        <div class="container">
            <h1 class="title_desc">Job <span style="color:#b5b5b5;font-weight:500;"> <?php echo ucfirst(str_replace("/"," ",str_replace("-"," ",$job)))."in".ucfirst(str_replace("/", " ", str_replace("-", " ",$place))) ?> </span> </h1>
            
            <?php require_once("search/content.php"); ?>
        </div>
    </div>

    <script src="js/bulma.js"></script>

<?php include ("inc/closeDB.inc.php");?>    
</body>
</html>