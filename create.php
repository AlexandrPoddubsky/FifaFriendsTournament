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
     
      <form class="form-horizontal" action='' method="POST"> 
      <fieldset> 
      <div id="legend"> 
      <legend class="">Create tournament</legend> 
      </div> 
      <hr>
      <div class="control-group"> 
      <!-- Name --> 
      <div class="controls"> 
      <input type="text" id="username" name="username" placeholder="Name of the tournament " class="form-control"  class="input-xlarge" required> 
      <p class="help-block">The tournament name can contain any letters or numbers.</p> 
      </div>
      </div> 
       <hr>
      <!-- TYPE-->     
      <select id="types" class="form-control">
        <option>Tournament type</option>
        <option>League</option>
      </select> 
      
      <script text/javascript>
      $(document).ready(function(){
        $("select").click(function(){
          var type = document.getElementById("types").value;
          console.log(type);
          if(type == "Tournament type"){
                  $("#results").hide();
            };
          if(type == "League"){
                  $("#results").show();
                  $("#results").load("module/create-league.php");
            };
        });
      });
      </script>
          
      <div id="results"></div>    
      <br> 
         
      <div class="control-group"> 
      <!--  SUBMIT Button --> 
      <div class="controls"> 
      <button class="btn btn-success">Create Tournament Now!</button>
      </div> 
       </div> 
       
       </fieldset> 
       </form>

      <hr class="featurette-divider">

    </div>
    <!-- /.container -->
    <!-- Footer -->
<?php include "module/footer.php"; ?>
       
</body>

</html>
