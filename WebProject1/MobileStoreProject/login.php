<?php include('inc/header.php');  ?>

<?php include('inc/nav.php');  ?>
 
<div class="container text-white">
    <div class="row">
      <div class="col-md-12 my-5">
        <div class="page_header text-center text-dark">
            <h2></h2>
           
        </div>
      </div>


        <div class="col-md-12">
    <div class="row shop-login">
    <div class="col-md-6">
        <div class="box-content">
            <h3 class="heading text-center text-dark">Already have an account?</h3>
            <h4 class="heading text-center text-dark" >Log In here</h4>
            <div class="clearfix space40"></div>

            <?php
            if(isset($_REQUEST['message'])){
                if($_GET['message'] == '1'){ 
            ?>

    <div class="alert alert-danger">Incorrect Input </div>


<?php

                }
            }
            ?>
            <form class="logregform" action='loginProcess.php' method='post'>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group text-dark">
                            <label>Email Address</label>
                            <input type="text" value="" class="form-control" name='email'>
                        </div>
                    </div>
                </div>
                <div class="clearfix space20"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group text-dark">
                            <label>Password</label>
                            <input type="password" value="" class="form-control" name='password'>
                        </div>
                    </div>
                </div>
                <div class="clearfix space20"></div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" name='submit' class="btn button btn-md pull-right">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-6">
        <div class="box-content">
            <h3 class="heading text-center text-dark">New to The Website?</h3>
            <h4 class="heading text-center text-dark" >Register here</h4>
            <div class="clearfix space40"></div>

            <?php
            if(isset($_REQUEST['message'])){
                if($_GET['message'] == '2'){ 
 ?>

    <div class="alert alert-danger">Error Creating Account</div>


<?php

                }
            }
            ?>
            <form class="logregform" action='registerprocess.php' method='post'>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group text-dark">
                            <label>Email Address</label>
                            <input type="text" value="" class="form-control" name='email'>
                        </div>
                    </div>
                </div>
                <div class="clearfix space20"></div>
                <div class="form-group text-dark">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Password</label>
                            <input type="password" value="" class="form-control" name='password'>
                        </div>
                        <div class="col-md-12">
                            <label>Re-enter Password</label>
                            <input type="password" value="" class="form-control" name='passwordAgain'>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="space20"></div>
                        <button type="submit"  name='submit' class="btn button btn-md pull-right">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
                
</div>
</div>   
</div>

<?php include('inc/footer.php');  ?>
