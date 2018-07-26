<?php
// including the database connection file
require_once('Crud.php');
 
$crud = new Crud();
 
//getting id from url
$id = $crud->escape_string($_GET['id']);
 
//selecting data associated with this particular id
$sql = "SELECT * FROM animalinfo WHERE id=$id";
$result = $crud->getData($sql);
 
foreach ($result as $res) {
	$id = $res['Id'];
    $tag = $res['tag'];
    $gender = $res['gender'];
    $birthday = $res['birthday'];
    $age = $res['age'];
    $Bweight = $res['Bweight'];
    $foodC = $res['foodC'];
    $amount = $res['amount'];
    $Animal = $res['Animal'];
    $Bird = $res['Bird'];
    $textarea = $res['textarea'];
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Animal Update Form</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
        <script src="../bootstrap/jquery.min.js"></script>
        <script src="../bootstrap/bootstrap.min.js"></script>

        <!-- Bootstrap -->
        <link href="../css/bootstrap.css" rel="stylesheet">
    
        <!--Google Fonts-->
        <link href='../css/font.css' rel='stylesheet' type='text/css'>
    
        <!--Bootshape-->
        <link href="../css/bootshape.css" rel="stylesheet">
    </head>
    
    <body>
        <!-- Navigation bar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.html"><span class="green">The</span> Zoo</a>
        </div>
        <nav role="navigation" class="collapse navbar-collapse navbar-right">
          <ul class="navbar-nav nav">
            <li class="dropdown">
              <a data-toggle="dropdown" href="#" class="dropdown-toggle">Authority <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="../EmployeeRegistration.html">Registration</a></li>
                <li ><a href="../login.html">Login</a></li>
                <li><a href="#">Food Item</a></li>
                <li><a href="#">Working area</a></li>
                <li><a href="#">Food Distribution</a></li>
                <li><a href="#">Delivery Food</a></li>
                <li><a href="#">Trucking</a></li>
                <li class="divider"></li>
                <li><a href="../Admin.html">Admin</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a data-toggle="dropdown" href="#" class="dropdown-toggle">PLan Your Visit <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Tict Hour</a></li>
                <li ><a href="#">Membership</a></li>
                <li><a href="#">FAQS</a></li>
                <li><a href="#">Discount and offer</a></li>
                <li><a href="#">Exhibition</a></li>
                <li class="divider"></li>
                <li><a href="#">Discount and offer</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a data-toggle="dropdown" href="#" class="dropdown-toggle">Animals <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Tict Hour</a></li>
                <li ><a href="#">Membership</a></li>
                <li><a href="#">FAQS</a></li>
                <li><a href="#">Discount and offer</a></li>
                <li><a href="#">Exhibition</a></li>
                <li class="divider"></li>
                <li><a href="#">Discount and offer</a></li>
              </ul>
            </li>


            <li class="dropdown">
              <a data-toggle="dropdown" href="#" class="dropdown-toggle">Events <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Tict Hour</a></li>
                <li ><a href="#">Membership</a></li>
                <li><a href="#">FAQS</a></li>
                <li><a href="#">Discount and offer</a></li>
                <li><a href="#">Exhibition</a></li>
                <li class="divider"></li>
                <li><a href="#">Discount and offer</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a data-toggle="dropdown" href="#" class="dropdown-toggle">Suport <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Tict Hour</a></li>
                <li ><a href="#">Membership</a></li>
                <li><a href="#">FAQS</a></li>
                <li><a href="#">Discount and offer</a></li>
                <li><a href="#">Exhibition</a></li>
                <li class="divider"></li>
                <li><a href="#">Discount and offer</a></li>
              </ul>
            </li>
            
             <li class="dropdown">
              <a data-toggle="dropdown" href="#" class="dropdown-toggle">About Us<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Tict Hour</a></li>
                <li ><a href="#">Membership</a></li>
                <li><a href="#">FAQS</a></li>
                <li><a href="#">Discount and offer</a></li>
                <li><a href="#">Exhibition</a></li>
                <li class="divider"></li>
                <li><a href="#">Discount and offer</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </div><!-- End Navigation bar -->

        <br/>
        <br/>
        <br/>

        <div class="container">
            <h3 style="text-align: center; color: #4cae4c">Animal Information Update Form</h3>
            <form class="form-horizontal" action="update.php" method="post">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="id">ID:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id" name="id" value="<?php echo $id;?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="tag">Tag No</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tag" placeholder="Enter tag" name="tag" value="<?php echo $tag;?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Gender</label>
                    <div class="col-sm-10">
                        <input type="radio" name="gender" id="rad1" value="<?php echo $gender;?>" checked="checked">Male
                        <input type="radio" name="gender" id="rad2" value="<?php echo $gender;?>">Female
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="birthday">Birthday</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="birthday" name="birthday" value="<?php echo $birthday;?>">
                    </div>
                </div>         
                <div class="form-group">
                    <label class="control-label col-sm-2" for="age">Age</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="age" placeholder="Enter age" name="age" value="<?php echo $age;?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="Bweight">Birth Weight</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="Bweight" placeholder="Enter birth weight" name="Bweight"
                        value="<?php echo $Bweight;?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="foodC">Food Category</label>
                    <div class="col-sm-10">          
                        <input type="text" class="form-control" id="foodC" name="foodC"
                        value="<?php echo $foodC;?>">
                    </div>
                </div>
                 <div class="form-group">
                    <label class="control-label col-sm-2" for="amount">Amount</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="amount" placeholder="Enter amount" name="amount"
                        value="<?php echo $amount;?>">
                    </div>
                </div>
                <div class="form-group">  
                    <label class="control-label col-sm-2">Meal Time</label>
                    <div class="col-sm-offset-2 col-sm-10">
                        Animal
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Animal" name="Animal" value="<?php echo $Animal;?>">
                        </div>
                    </div>
                    <div class="col-sm-offset-2 col-sm-10">
                        Bird
                        <div class="col-sm-10">                       
                            <input type="text" class="form-control" id="Bird" name="Bird" value="<?php echo $Bird;?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="textarea">Complain</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="textarea" name="textarea"
                        value="<?php echo $textarea;?>">
                    </div>
                </div>
                <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="Update" class="btn btn-default">Submit</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </div>
                </div>
            </form>
        </div>

    </body>
</html>
