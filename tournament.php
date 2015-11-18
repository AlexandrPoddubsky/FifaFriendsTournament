<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Head -->
    <?php include "module/head.php"; ?>
    
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fifa friends</title>

</head>

<body class="background-content">

   <!-- Navigation -->
   <?php include "module/menu.php"; ?>

    <!-- Page Content -->
    <div class="container">
    
     <hr class="featurette-divider"><br>
    
      <h2 class="pull-left">FIFA FRIENDSCHIP TOURNAMENTS <br><small>Check here your tournaments</small><br></h2><br><br><a href="#" class="btn btn-warning pull-right">Create Tournament</a><br><br><br>
      
      <!-- Coming up -->
      <div class="panel panel-info">
        <div class="panel-heading">Coming up</div>
        <div class="panel-body">
        <h2>Coming up tournament</h2>
        </div>
  
        <table class="table table-striped table-hover">
        <th>TournamentID</th><th>Name</th><th>Players</th><th>Start</th><th>Check it out</th>
        <tr><td>341235</td><td>Lets get it going</td><td>8 / 8</td><td>18-11-2015</td><td><a href="#" style="text-decoration:none;">Ready?</a></td></tr>
        <tr><td>873212</td><td>Fifa king</td><td>3 / 4</td><td>19-11-2015</td><td><a href="#" style="text-decoration:none;">Ready?</a></td></tr>  
        </table>
        </div>
      
        <!-- On going -->
        <div class="panel panel-success">
        <div class="panel-heading">On going</div>
        <div class="panel-body">
        <h2>On going tournament</h2>
        </div>

        <table class="table table-striped table-hover">
        <th>TournamentID</th><th>Name</th><th>Players</th><th>On going</th>
        <tr><td>33135</td><td>The ruler king</td><td>6 / 8</td><td><a href="#" style="text-decoration:none;">Playing</a></td></tr>   
        </table>
        </div>

         <!-- Closed -->
        <div class="panel panel-danger">
        <div class="panel-heading">Closed</div>
        <div class="panel-body">
        <h2>Closed tournament</h2>
        </div>

        <table class="table table-striped table-hover">
                <th>TournamentID</th><th>Name</th><th>Players</th><th>Position</th><th>Results</th>
        <tr><td>33135</td><td>The ruler king</td><td>4 / 4</td><td>2</td><td><a href="#" style="text-decoration:none;">View</a></td></tr>   
        </table>
        </div>

        <hr class="featurette-divider">

        <!-- Footer -->
        <?php include "module/footer.php"; ?>


    </div>
    <!-- /.container -->
       
</body>

</html>
