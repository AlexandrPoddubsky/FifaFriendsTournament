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
     
     <div class="row">
     
     <!-- Main page -->
      <div class="col-xs-12 col-sm-6 col-md-8">
      
        
      
      <h3>Welcome, djdino56 <br><small>What are you up to?</small></h3>
      
      <a href="#" class="btn btn-warning btn-lg" role="button" style="width:240px;"><h1>180</h1>Matches Played</a> | 
      <a href="#" class="btn btn-default btn-lg" role="button" style="width:240px;"><h1>10</h1>Tournament Played</a>  |
      <a href="#" class="btn btn-danger btn-lg" role="button" style="width:240px;"><h1>10</h1>Friends Request</a>
      
      <hr>
      
         <!-- Recent Matches -->
      <div class="panel panel-success">
      <div class="panel-heading"><h3>Recent Matches</h3></div>
      
      
      <table class="table table-bordered">
        <th>MatchID</th><th>Home</th><th class="text-center">Match</th><th class="text-right">Away</th>
        <tr><td>123456</td><td><img src="http://placehold.it/25x20" alt=""> Real Madrid (djdino56)</td><td class="text-center">1 - 1</td><td class="text-right">(spongi_07) Barcelona <img src="http://placehold.it/25x20" alt=""></td></tr>
        <tr><td>324335</td><td>Real Madrid (djdino56)</td><td class="text-center">0 - 0</td><td class="text-right">(spongi_07) Arsenal</td></tr>
      </table>
      
      </div>
      
      <!-- Friend request -->
      <div class="panel panel-info">
      <div class="panel-heading"><h3>Friend request</h3></div>
      
      
      <table class="table table-hover">
        <th>Username</th><th>Accept</th><th>Decline</th>
        <tr><td>playeryegor</td><td><a href="#"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a></td><td><a href="#"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td></tr>
        <tr><td>spongetjes</td><td><a href="#"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a></td><td><a href="#"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td></tr>
      </table>
      
      </div>
      
      </div>
      
      <!-- Site Menu -->
      <div class="col-xs-6 col-md-3">
      
      
      <!-- MY FFT -->
      <h3>My FFT</h3>
        <hr>
        <ul class="list-unstyled">
              <li>
                  <a href="tournament.php">
                      <span class="glyphicon glyphicon-menu-right text-primary"></span> My Tournaments
                  </a>
              </li>
              <li>
                  <a href="#getting-started">
                      <span class="glyphicon glyphicon-menu-right text-primary"></span> Create Tournament
                  </a>
              </li>
              <li>
                  <a href="#setting-up-our-page">
                      <span class="glyphicon glyphicon-menu-right text-primary"></span> Account settings
                  </a>
              </li>
              <li>
                  <a href="#conclusion">
                      <span class="glyphicon glyphicon-menu-right text-primary"></span> Log out
                  </a>
              </li>
        </ul>
        
        <!-- Friends -->
      <h3>Friends</h3>
        <hr>
		    <div class="span4 well">
      		
            <div class="span">
                  	<a href="#"><p><strong>djdino56</strong></p></a>
        			<span class=" badge badge-info">15 vrienden</span>  <img src="http://placehold.it/75x75" class="pull-right img-rounded" style="margin-top:-40px;margin-right:25px;">
        		</div>
            
            
            <hr style="border:1px solid green;">
                       
            <div class="span">
                  	<a href="#"><p><strong>playeryegor</strong></p></a>
        			<span class=" badge alert-danger">delete</span> <span class=" badge badge-info">2 vrienden</span>
        		</div> 
                   
           <hr style="border:1px solid green;">
                                  
            <div class="span">
                  	<a href="#"><p><strong>spong07</strong></p></a>
        			<span class=" badge badge-info">1 vrienden</span>
        		</div> 
            
            <hr style="border:1px solid green;">
                                    
            <div class="span">
                  <a href="#">	<p><strong>djdino</strong></p> </a>
        		 <span class=" badge badge-info">10 vrienden</span>
        		</div> 
           
        </div>
      
      </div>
      </div>
      
      
      
      <hr class="featurette-divider">

        <!-- Footer -->
        <?php include "module/footer.php"; ?>


    </div>
    <!-- /.container -->
       
</body>

</html>
