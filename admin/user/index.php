 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
 <?php
    $title = 'Quản Lý Người Dùng';
    $baseUrl = '../';
    require_once('../layouts/header.php');
    $sql = "select User.*, Role.name as role_name from User left join Role on User.role_id = Role.id where User.deleted = 0";
    $data = executeResult($sql);
?>

<div class="row">
	<div class="col-md-12 table-responsive">
		<h1 class="text-center" style="margin-top: 15px;">Quản lý Người Dùng </h1>

		<a href="editor.php"><button class="btn btn-success">Thêm Tài khoản</button></a>
	<table class="table table-bordered table-hover" style="margin-top: 15px;background: white;">
		<thead>
			<tr>
				<th>STT</th>
				<th>Họ và tên</th>
				<th>Email</th>
				<th>SĐT</th>
				<th>Địa chỉ</th>
				<th>Quyền</th>
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
			<td>'.$item['fullname'].'</td>
			<td>'.$item['email'].'</td>
			<td>'.$item['phone_number'].'</td>
			<td>'.$item['address'].'</td>
			<td>'.$item['role_name'].'</td>
			<td style="width: 50px;">
				<a href="editor.php?id='.$item['id'].'"><button class="btn btn-warning">Sửa</button></a>
			</td>
			<td style="width: 50px">';
			if($user['id'] != $item['id'] && $item['role_id'] != 1) {
				echo '<button onclick="deleteUser('.$item['id'].')" class="btn btn-danger">Xoá</button>';
			}
				
			}
			echo'
			</td>
		</tr>';
?>
		</tbody>
	</table>
	</div>
</div>

<script type="text/javascript">
	function deleteUser(id) {
		option = confirm('Bạn có chắc chắn muốn xoá tk này k?')
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