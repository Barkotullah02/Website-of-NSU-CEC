<?php
include "db_connection.php";
include "validate.php";

$query = "SELECT * FROM new_post ORDER BY sl DESC";

$data = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin panel template by Barkotullah</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/cec-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">NSU CEC ADMIN</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
           
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $full_name; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="settings.php"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav" style="height: 100%;">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-envelope"></i> Messages</a>
                    </li>
                    <li>
                        <a href="new_admin.php"><i class="fa fa-fw fa-plus"></i> Add new admin</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-table"></i> Forms</a>
                    </li>
                    <li>
                        <a href="post_action.php"><i class="fa fa-edit"></i> Take action to a post</a>
                    </li>
                    <li>
                        <a href="add_post.php"><i class="fa fa-fw fa-desktop"></i> ADD post</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper" style="background:#e1e0e0ba;">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table">
                            <tr>
                                <th>SERIAL</th><th>POST HEADING</th><th>POST DATE</th><th colspan="2" class="text-center">ACTION</th>
                            </tr>
                            <?php
                            while ($row = mysqli_fetch_assoc($data)) {
                                $sl = $row['sl'];
                                $head = $row['headline'];
                                $date = $row['post_date'];
                                ?>

                                <tr>
                                    <td><?php echo $sl; ?></td><td><?php echo $head; ?></td><td><?php echo $date; ?></td><td colspan="2"><a href="edit_post.php?source=sl&sl=<?php echo $sl;?>"><button class="btn btn-primary">UPDATE</button></a> <a style="float: right;" href="delete.php?source=sl&sl=<?php echo $sl;?>"><button class="btn btn-danger" name="delete">DELETE</button></a></td>
                                </tr>

                            <?php } ?>
                        </table>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>