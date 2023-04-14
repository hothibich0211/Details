<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.72.0">
  <title>Album example · Bootstrap</title>

  <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/album/">
  <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

</head>

<body>
<div class="title-product-main">										
	<h3 class="section-title">Thời Trang Nữ</h3>										
	</div>										
	<div class="content-product-main">										
	<div class="row">	

	<?php			
    $conn = mysqli_connect("localhost", "root", "", "demo");							
	$sql = "SELECT id,image,name,price,des FROM prd  LIMIT 8";										
	$result = $conn->query($sql);	// 							
	while ($kq = mysqli_fetch_assoc($result)) {										
	?>		
    								
	<div class="col-md-3 col-sm-6 text-center">										
	<div class="thumbnail">										
	<div class="hoverimage1">										
	<img src= "<?php echo $kq['image']; ?>" width="200px" height="250">										
	</div>										
	<div class="name-product">										
	<?php echo $kq['name']; ?>										
	</div>										
	<div class="price">										
	Giá: <?php echo $kq['price']; ?><sup> đ</sup>										
	</div>	
    <div class="des">										
	Mô tả: <?php echo $kq['des']; ?>									
	</div>									
	<div class="product-info">										
	<a href="newdetail.php?id=<?php echo $kq['id']; ?>">										
	<button type="button" class="btn btn-primary">										
	<label style="color: red;">&hearts;</label> Mua hàng <label style="color: red;">&hearts;</label>										
	</button>										
	</a>										
	<a href="newdetail.php?id=<?php echo $kq['id'] ?>">										
	<button type="button" class="btn btn-primary">										
	<label style="color: red;">&hearts;</label> Chi Tiết <label style="color: red;">&hearts;</label>										
	</button>										
	</a>
										
	</div><!-- /product-info -->
	</div><!-- /thumbnail -->

	</div><!-- /col -->		
	<?php } ?>										

	</div><!-- /row -->		

	</div><!-- /Thời Trang Nữ -->										

</html>