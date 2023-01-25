<?php
include 'includes/connexion.inc.php';
$conn = OpenCon();
 


    
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

$query2 = "SELECT * FROM faq";
$result2 = mysqli_query($conn, $query2);

$query3 = "SELECT * FROM opticians";
$result3 = mysqli_query($conn, $query3);

?>







<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Page</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="assets/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    body {
        color: #404E67;
        background: #F5F7FA;
		font-family: 'Open Sans', sans-serif;
	}
	.table-wrapper {
		width: 100%;
		margin: 30px 0 0 0;
        background: #fff;
        padding: 20px;	
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
    .table-title {
        padding-bottom: 10px;
        margin: 0 0 10px;
    }
    .table-title h2 {
        margin: 6px 0 0;
        font-size: 22px;
    }
    .table-title .add-new {
        float: right;
		height: 40px;
		font-weight: bold;
		font-size: 12px;
		text-shadow: none;
		min-width: 100px;
		border-radius: 50px;
		line-height: 13px;
    }
	.table-title .add-new i {
		margin-right: 4px;
	}
    table.table {
        table-layout: fixed;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
        width: fit-content;
        word-break: break-all;
    }
   
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table th:last-child {
        width: 100px;
    }
    table.table td a {
		cursor: pointer;
        display: inline-block;
        margin: 0 5px;
		min-width: 24px;
    }    
	table.table td a.add {
        color: #27C46B;
    }
    table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #E34724;
    }
    table.table td i {
        font-size: 19px;
    }
	table.table td a.add i {
        font-size: 24px;
    	margin-right: -1px;
        position: relative;
        top: 3px;
    }    
    table.table .form-control {
        height: 32px;
        line-height: 32px;
        box-shadow: none;
        border-radius: 2px;
    }
	table.table .form-control.error {
		border-color: #f50000;
	}
	table.table td .add {
		display: none;
	}

    .search{
        background-color: aliceblue;
        height: 40px;
        border-radius: 10px;
        border: none;
        
    }

::placeholder {
    text-align: center;
    }

</style>

</head>
<body>

<nav class='admin-nav'>
  <ul>
    <li data-target='section.users.s-h'><a href="#users">Users</a></li>
    <li data-target='section.faq.s-h'><a href="#faq">FAQ</a></li>
    <li data-target='section.addresses.s-h'><a href="#addresses">Addresses</a></li>
    <li><a href="admin-logout.php">Log Out</a></li>  
  </ul>
</nav>
<section class='users s-h'>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>User <b>Details</b></h2></div>
                    <div class="col-sm-4">
                        <input class="search" type="text" id='myInput' name="" placeholder="Type to search" >
                        <a href='controller/add.php'><button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button></a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered" id='myTable'>
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name </th>
                        <th>Date Of Birth</th>
                        <th>Phone</th>
                        <th>Addess</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    while($allusers = mysqli_fetch_assoc($result)){ ?>

                    <tr class='table-row'>
                        <td class='fil'><?php echo $allusers['firstName'] ?></td>
                        <td class='fil'><?php echo $allusers['lastName'] ?></td>
                        <td class='fil'><?php echo $allusers['dateOfBirth'] ?></td>
                        <td class='fil'><?php echo $allusers['phone'] ?></td>
                        <td class='fil'><?php echo $allusers['address'] ?></td>
                        <td class='fil'><?php echo $allusers['email'] ?></td>
                        <td class='fil'><?php echo $allusers['password'] ?></td>
                        <td>
							
                            <a href='controller/edit.php?id=<?php echo $allusers['id'];?>' class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href='controller/delete.php?id=<?php echo $allusers['id'];?>' class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    
                    <?php } ?>
                </tbody>
            </table>
                    </section>



    <section class='faq s-h'>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>FAQ <b>Details</b></h2></div>
                    <div class="col-sm-4">
                        <input class="search" type="text" id='myInput' name="" placeholder="Type to search" >
                        <a href='controller/add-faq.php'><button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button></a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered" id='myTable'>
                <thead>
                    <tr>
                        <th>Question</th>
                        <th>Answer </th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    while($allusers = mysqli_fetch_assoc($result2)){ ?>

                    <tr class='table-row'>
                        <td class='fil'><?php echo $allusers['questions'] ?></td>
                        <td class='fil'><?php echo $allusers['answers'] ?></td>
                        <td>
							
                            <a href='controller/edit-faq.php?id=<?php echo $allusers['id'];?>' class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href='controller/delete-faq.php?id=<?php echo $allusers['id'];?>' class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    
                    <?php } ?>
                </tbody>
            </table>
                    </section>

<section class='addresses s-h'>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Address <b>Details</b></h2></div>
                    <div class="col-sm-4">
                        <input class="search" type="text" id='myInput' name="" placeholder="Type to search" >
                        <a href='controller/add-address.php'><button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button></a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered" id='myTable'>
                <thead>
                    <tr>
                        <th>Optic Address</th>
                        <th>Department</th>
                        <th>Phone</th>
                        <th>Opening Hours</th>
                        <th>Stock</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    while($allusers = mysqli_fetch_assoc($result3)){ ?>

                    <tr class='table-row'>
                        <td class='fil'><?php echo $allusers['adressoptic'] ?></td>
                        <td class='fil'><?php echo $allusers['department'] ?></td>
                        <td class='fil'><?php echo $allusers['phoneoptic'] ?></td>
                        <td class='fil'><?php echo $allusers['openinghours'] ?></td>
                        <td class='fil'><?php echo $allusers['stock'] ?></td>
                        <td>
							
                            <a href='controller/edit-address.php?id=<?php echo $allusers['idoptic'];?>' class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href='controller/delete-address.php?id=<?php echo $allusers['idoptic'];?>' class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    
                    <?php } ?>
                </tbody>
            </table>
        </section>

            <script type="text/javascript">

                    $(document).ready(function(){
                //add index column with all content.
                    $(".table-bordered tr:has(td)").each(function(){
        var t = $(this).text().toLowerCase(); //all row text
        $("<td class='indexColumn'></td>")
            .hide().text(t).appendTo(this);
    });//each tr
    $(".search").keyup(function(){
    var s = $(this).val().toLowerCase().split(" ");
        //show all rows.
        $(".table-bordered tr:hidden").show();
        $.each(s, function(){
            $(".table-bordered tr:visible .indexColumn:not(:contains('"
                + this + "'))").parent().hide();
              })
        })
        })

        </script>

        <script>
            $("nav ul li").click(function(){
            $("section.s-h").css("display", "none");
            $($(this).data("target")).css("display", "block");
            });
        </script>
    </div>
        </div>  
    
</body>

</html>
