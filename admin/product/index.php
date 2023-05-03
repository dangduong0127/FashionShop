 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
 <?php
    $title = 'Quản Lý Sản Phẩm';
    $baseUrl = '../';
    require_once('../layouts/header.php');

    $sql = "select Product.*, Category.name as category_name from Product left join Category on Product.category_id = Category.id where Product.deleted = 0";
    $data = executeResult($sql);
?>

<div class="row">
	<div class="col-md-12 table-responsive">
		<h1 class="text-center" style="margin-top: 15px;">Quản lý Người Dùng </h1>

		<a href="editor.php"><button class="btn btn-success">Thêm Sản Phẩm</button></a>
	<table class="table table-bordered table-hover" style="margin-top: 15px;background: white;">
		<thead>
			<tr>
				<th>STT</th>
				<th>Thumbnail</th>
				<th>Tên Sản Phẩm</th>
				<th>Giá</th>
				<th>Danh mục</th>
				<th style="width: 50px;"></th>
				<th style="width: 50px"></th>
			</tr>
		</thead>
		<tbody>
<?php
	$index = 0;
	foreach($data as $item) {
		echo '
			<tr>
			<th>'.(++$index).'</th>
			<td><img src="'.$item['thumbnail'].'" style="height: 100px"/></td>
			<td>'.$item['title'].'</td>
			<td>'.number_format($item['discount']).' VNĐ</td>
			<td>'.$item['category_name'].'</td>
			<td style="width: 50px;">
				<a href="editor.php?id='.$item['id'].'"><button class="btn btn-warning">Sửa</button></a>
			</td>
			<td style="width: 50px">
				<button onclick="deleteProduct('.$item['id'].')" class="btn btn-danger">Xoá</button>
			</td>
			<tr>	';
		}
?>
		</tbody>
	</table>
	</div>
</div>

<script type="text/javascript">
	function deleteProduct(id) {
		option = confirm('Bạn có chắc chắn muốn xoá sản phẩm này k?')
		if(!option) return;
		$.post('form_api.php', {
			'id': id,
			'action': 'delete'
		}, function(data){
			location.reload()
		})
	}
</script>

<?php
    require_once('../layouts/footer.php');
?>