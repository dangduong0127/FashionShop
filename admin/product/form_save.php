<?php
if(!empty($_POST)) {
	$id = getPost('id');
	$title = getPost('title');
	$price = getPost('price');
	$discount = getPost('discount');
	$description = getPost('description');
	$thumbnail = getPost('thumbnail');
	$category_id = getPost('category_id');
	$created_at = $updated_at = date('Y-m-d H:s:i');

	if($id > 0) {
		$sql = "update Product set thumbnail = '$thumbnail', title = '$title', price = '$price', discount = '$discount', description = '$description', updated_at = '$updated_at', created_at = '$created_at', category_id = '$category_id' where id = $id";
		execute($sql);
		alert("Sửa thông tin thành công!!!");
		
	} else {
		$sql = "insert into Product(thumbnail, title, price, discount, description, updated_at, created_at, deleted, category_id) values ('$thumbnail', '$title', '$price','$discount', '$description', '$updated_at','$created_at', 0, $category_id)";
		execute($sql);

		alert("Thêm sản phẩm thành công!!!");
		
	}
}
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
?>
