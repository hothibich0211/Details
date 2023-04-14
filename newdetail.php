<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
  <div class="row">
  <?php	
  $id= $_GET['id'];
		
    $conn = mysqli_connect("localhost", "root", "", "demo");							
	$sql = "SELECT id,image,name,price,des FROM prd  LIMIT 8";										
	$result = $conn->query($sql);									
	while ($kq = mysqli_fetch_assoc($result)) {	
        if ($kq['id']==$id){

        							
	?>	
    <div class="col-sm-3 col-md-4">
    <img class="card-img-top" src="<?php echo $kq['image']?>" alt="Card image" style="width:300px">
    </div>
    <div class="col-sm-9 col-md-8" >
    <div class="card-body">
      <h4 class="name"><?php echo $kq['name']?></h4>
      <p class="price"><?php echo $kq['price']?></p>
      <p class="mota"><?php echo $kq['des']?></p>
      <!-- <a href="#" class="btn btn-primary">Chi tiết</a> -->
      <button type="button" class="btn btn-warning">Đặt hàng</button>
    </div>
  </div>
    </div>
    <?php }?>
    <?php }?>
  </div>

</div>
    
</body>
</html>
