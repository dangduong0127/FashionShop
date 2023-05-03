 <?php
    $title = 'Quản Lý Đơn Hàng';
    $baseUrl = '../';
    require_once('../layouts/header.php');
    $sql = "select * from Orders order by status asc, order_date desc";
    $data = executeResult($sql);
?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<div class="row">
	<div class="col-md-12 table-responsive">
		<h1 class="text-center" style="margin-top: 15px;text-align: center;">Quản lý Đơn Hàng </h1>
		<table class="table table-bordered table-hover" style="margin-top: 15px; background: white;">
		<thead>
			<tr>
				<th style="width: 40px">STT</th>
				<th>Họ và tên</th>
				<th>SĐT</th>
				<th>Email</th>
				<th>Địa chỉ</th>
				<th>Nội dung</th>
				<th>Tổng tiền</th>
				<th style="width: 150px">Ngày tạo</th>
				<th style="width: 120px;">Trạng thái</th>
				<th style="width: 170px;"></th>
			</tr>
		</thead>
		<tbody>
<?php
	$index = 0;
	foreach($data as $item) {
		echo '
			<tr>
			<th><a href="detail.php?id='.$item['id'].'">'.(++$index).'</a></th>
			<td>'.$item['fullname'].'</td>
			<td>'.$item['phone_number'].'</td>
			<td>'.$item['email'].'</td>
			<td>'.$item['address'].'</td>
			<td>'.$item['note'].'</td>
			<td>'.$item['total_money'].'</td>
			<td>'.$item['order_date'].'</td>
			<td style="width: 130px">';
		if($item['status'] == 0) {
			echo '<td style="text-align: center;"><button style="margin-bottom: 2px" onclick="changeStatus('.$item['id'].', 1)" class="btn btn-success">Chấp thuận</button>
				<button onclick="changeStatus('.$item['id'].', 2)" class="btn btn-danger">Huỷ đơn</button></td>
			';
		} else if($item['status'] == 1){
			echo'
			<label class="badge badge-success" style="color: white; background: green">Approve</label>
			<td style="text-align: center"><a href="detail.php?id='.$item['id'].'"><button class="btn btn-danger">Chi tiết</button></a></td>
			';
		} else {
			echo'
			<label class="badge badge-danger" style="color: white; background: red">Cancel</label>
			<td style="text-align: center"><a href="detail.php?id='.$item['id'].'"><button class="btn btn-danger">Chi tiết</button></a></td>
			';
		}
		echo'
			</td>
		</tr>';
	}
?>
		</tbody>
	</table>
	</div>
</div>

<script type="text/javascript">
	function changeStatus(id, status){
		$.post('form_api.php', {
			'id': id,
			'status': status,
			'action': 'update_status'
		}, function(data){
			location.reload()
		})
	}
	
</script>

<?php
    require_once('../layouts/footer.php');
?>