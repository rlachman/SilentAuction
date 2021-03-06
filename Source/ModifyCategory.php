<?php
/**
 * Author: Bryan Moore
 */
include 'dbconfigSilentAuction.php';
  $CategoryId = $_GET["CategoryId"];
  $sql = "SELECT * FROM `Category` WHERE Id=$CategoryId";
  $result = $conn->query($sql);
$row = $result->fetch_assoc();
  $Id = $row["Id"];
  $Description = $row["Description"];
   $conn->close();
?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="Index.html">Silent Auction</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="Donors.php">Donors</a></li>
			<li><a href="Items.php">Items</a></li>
			<li><a href="PrintCenter.php">Print Center</a></li>
			<li><a href="Lots.php">Lots</a></li>
			<li><a href="Category.php">Category</a></li><span class="sr-only">(current)</span></a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<!--Category entry form-->
<div class="container">
    <h2>Modify Category</h2>
    <form class="form-horizontal" method="POST" action="UpdateCategory.php?CategoryId=<?php echo $CategoryId ?>">
        <div class="form-group">
            <label class="control-label col-sm-2">Description</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="Description"  value="<?php echo $Description ?>" required>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
</div>

</body>
</html>