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
     
     <fieldset class="loginfieldset">
            <form action="#" method="post" class="form-horizontal">
                <div class="get-in-touch">
                    <h3 class="text-center">Ready to defend you're throne! Sign up now!</h3>
                    <hr />
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">PSN username</label>
                        <div class="col-sm-10">
                        <input type="email" class="form-control" id="txtUsernane" placeholder="PSN username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                        <input type="email" class="form-control" id="txtUsernane" placeholder="example@gmail.com">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                        <input type="password" class="form-control" id="txtPassword" placeholder="**************">
                        </div>
                    </div>
                                        <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Retype password</label>
                        <div class="col-sm-10">
                        <input type="password" class="form-control" id="txtPassword" placeholder="**************">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success pull widthBtn" role="button">Register</button>
                        </div>
                    </div>
                </div>
            </form>
            </fieldset>
          <hr class="featurette-divider">

        <!-- Footer -->
        <?php include "module/footer.php"; ?>


    </div>
    <!-- /.container -->
       
</body>

</html>
