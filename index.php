<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Hello</title>

	<!-- style -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">

	<!-- js -->
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>

</head>

<body>
<?php 
include 'connect.php';

function showTable($result) {
	echo "<table class='table table-hover table-condensed'>";
	echo "<tr class='active'><th width='10%'>ID Barang</th><th>Nama Barang</th><th>Detail Barang</th><th>Lokasi Barang</th><th width='10%'><input type='checkbox' id='checkAll'></th></tr>";

	// cek data ada atau tidak
	if(mysqli_num_rows($result)>0){
		while($row = mysqli_fetch_array($result)) {
			echo "<tr><td>".$row['id']."</td><td>".$row['nama']."</td><td>".$row['desc']."</td><td>".$row['location']."</td><td width='10%'><input class='checkbox' type='checkbox' id='checkAll'></td></tr>";
		}
	} else {
		echo "<tr class='danger'><td colspan='5'><i>Data Not Found</i></td></tr>";
	}

	echo "</table>";
}

function delete(){
	// delete
}

?>
<div class="row">
	<form role="form" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<div class="col-md-4">
			<input type="text" class="form-control" name="nama" placeholder="Name of Goods...">
		</div>
		<div class="col-md-8">
			<button type="submit" name="submit" value="go" class="btn btn-default">Search</button>
		</div>
	</div>
</div>

<?php
if(!isset($_GET['submit'])) 
{ 
	$result = mysqli_query($conDB,"SELECT * FROM barang");
	showTable($result);

} else {
    $name = $_GET['nama'];

	$result = mysqli_query($conDB,"SELECT * FROM barang WHERE nama LIKE '$name%'");
	showTable($result);
}
?>



<script src="js/javascript.js" type="text/javascript"></script>
</body>
</html>