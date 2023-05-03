 <?php
    $title = 'Quản Lý Phản Hôi';
    $baseUrl = '../';
    require_once('../layouts/header.php');
    $sql = "select * from Feedback order by status asc, updated_at desc";
    $data = executeResult($sql);
    $id = getPost('id');
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<div class="row">
	<div class="col-md-12 table-responsive">
		<h1 class="text-center" style="margin-top: 15px;">Quản lý Phản Hồi </h1>
		<table class="table table-bordered table-hover" style="margin-top: 15px; background: white;">
		<thead>
			<tr>
				<th>STT</th>
				<th>Tên</th>
				<th>Họ</th>
				<th>SĐT</th>
				<th>Email</th>
				<th>Chủ đề</th>
				<th>Nội dung</th>
				<th>Ngày gửi</th>
				<th style="width: 140px;"></th>
				<th style="width: 140px;"></th>
			</tr>
		</thead>
		<tbody>
<?php
	$index = 0;
	foreach($data as $item) {
		echo '
			<tr>
			<th>'.(++$index).'</th>
			<td>'.$item['firstname'].'</td>
			<td>'.$item['lastname'].'</td>
			<td>'.$item['phone_number'].'</td>
			<td>'.$item['email'].'</td>
			<td>'.$item['subject_name'].'</td>
			<td>'.$item['note'].'</td>
			<td>'.$item['updated_at'].'</td>
			<td style="width: 130px">';
		if($item['status'] == 0) {
			echo '<button onclick="markRead('.$item['id'].')" class="btn btn-danger">Đã xem</button>';
		}
		echo'
			<td><button onclick="deleteFb('.$item['id'].')" class="btn btn-danger">Xoá</button></td>
		</td>
		</tr>';
	}
?>
		</tbody>
	</table>
	</div>
</div>

<script type="text/javascript">
	function markRead(id){
		$.post('form_api.php', {
			'id': id,
			'action': 'mark'
		}, function(data){
			location.reload()
		})
	}
	function deleteFb(id) {
		$.post('deleteFb.php',{
			'id': id,
			'action': 'delete'
		}, function(data) {
			location.reload()
		})
	}
</script>

<?php
    require_once('../layouts/footer.php');
?>