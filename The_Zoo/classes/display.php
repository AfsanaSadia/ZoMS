<?php
        //including the database connection file
        require_once('Crud.php');

        $crud = new Crud();

        $sql = "SELECT * FROM animalinfo";

        $data = $crud -> getData($sql);

?>

<!DOCTYPE html>  
<html lang="en">  
    <head>  
        <meta charset="UTF-8" /> 
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

    <style>
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        
            } 
        th, td {
        padding: 5px;
            }  
    </style> 
           
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
        <h2 style="color: green;text-align: center;">Display Table Data</h2>

        <table style="width: 100%">
                
                <tr>
                        <th>Id</th>
                        <th>Tag</th>
                        <th>Gender</th>
                        <th>Birthday</th>
                        <th>Age</th>
                        <th>BWeight</th>
                        <th>foodC</th>
                        <th>amount</th>
                        <th>Animal</th>
                        <th>Bird</th>
                        <th>Complain</th>
                        <th>Delete</th>
                        <th>Update</th>
                </tr>

    <?php 
    foreach ($data as $key => $res) {
        //while($res = mysqli_fetch_array($data))
        ?>

        <tr>
                <td><?php echo $res["Id"]; ?></td>
                <td><?php echo $res["tag"]; ?></td>
                <td><?php echo $res["gender"]; ?></td>
                <td><?php echo $res["birthday"]; ?></td>
                <td><?php echo $res["age"]; ?></td>
                <td><?php echo $res["Bweight"]; ?></td>
                <td><?php echo $res["foodC"]; ?></td>
                <td><?php echo $res["amount"]; ?></td>
                <td><?php echo $res["Animal"]; ?></td>
                <td><?php echo $res["Bird"]; ?></td>
                <td><?php echo $res["textarea"]; ?></td>
                <td><button name="delete"><a href="delete.php?id=<?php echo $res["Id"]; ?>">Delete</a></button></td>
                <td><button ><a href="edit.php?id=<?php echo $res["Id"]; ?>">Update</a></button></td>
        </tr>

        <?php
                }
        ?>

        </table>
    </body> 
</html> 