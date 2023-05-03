 <?php
    $title = 'Thông Tin Chi Tiết Đơn Hàng';
    $baseUrl = '../';
    require_once('../layouts/header.php');
    $orderId = getGet('id');

    $sql = "select Order_Details.*, Product.title, Product.thumbnail from Order_Details left join Product on Product.id = Order_Details.product_id where Order_Details.order_id = $orderId";
    $data = executeResult($sql);
    $sql = "select * from Orders where id = $orderId";
    $orderItem = executeResult($sql, true);
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<div class="row">
	<div class="col-md-12"><h1 class="text-center" style="margin-top: 15px;">Chi Tiết Đơn Hàng </h1></div>
	<div class="col-md-8 table-responsive">
		<table class="table table-bordered table-hover" style="margin-top: 15px; background: white;">
		<thead>
			<tr>
				<th>STT</th>
				<th>Thumbnail</th>
				<th>Tên sản phẩm</th>
				<th>Giá</th>
				<th>Số lượng</th>
				<th>Tổng giá</th>
			</tr>
		</thead>
		<tbody>
<?php
	$index = 0;
	foreach($data as $item) {
		echo '
			<tr>
			<th>'.(++$index).'</th>
			<td><img src="'.$item['thumbnail'].'" style="height: 120px"/></td>
			<td>'.$item['title'].'</td>
			<td>'.$item['price'].'</td>
			<td>'.$item['num'].'</td>
			<td>'.$item['total_money'].'</td>
		</tr>';
	}
?>		
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<th>Tổng tiền:
				<?=number_format($orderItem['total_money'])?> VNĐ</th>
			</tr>
		</tbody>
	</table>
	</div>
	<div class="col-md-3">
		<table class="table table-bordered table-hover" style="margin-top: 15px;background: white">
			<tr>
				<th>Họ & tên:</th>
				<td><?=$orderItem['fullname']?></td>
			</tr>
			<tr>
				<th>Email:</th>
				<td><?=$orderItem['email']?></td>
			</tr>
			<tr>
				<th>Phone:</th>
				<td><?=$orderItem['phone_number']?></td>
			</tr>
			<tr>
				<th>Địa chỉ:</th>
				<td><?=$orderItem['address']?></td>
			</tr>
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