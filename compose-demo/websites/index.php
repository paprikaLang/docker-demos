<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Welcome to my shop</h1>
    <ul>
    	<?php 
            $json = file_get_contents('http://product-service');
            $obj = json_decode($json);
            $products = $obj->products;
            foreach ($products as $key => $value) {
            	echo "<li>$value</li>";
            }
    	?>
    </ul>
</body>
</html>