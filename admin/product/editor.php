 <?php
    $title = 'Thêm/Sửa Sản Phẩm';
    $baseUrl = '../';
    require_once('../layouts/header.php');
    $id = $thumbnail = $title = $price = $discount = $category_id = $description = '';
    require_once('form_save.php');
   
    $id = getGet('id');
    //lay truong thong tin
    if($id != '' && $id > 0) {
    	$sql = "select * from Product where id = '$id' and deleted = 0";
		$userItem = executeResult($sql, true);
		if($userItem != null) {
			$thumbnail = $userItem['thumbnail'];
			$title = $userItem['title'];
			$price = $userItem['price'];
			$discount = $userItem['discount'];
			$category_id = $userItem['category_id'];
			$description = $userItem['description'];
		} else {
			$id = 0;
		}
    } else {
    	$id = 0;
    }
    $sql = "select * from Category";
    $categoryItems = executeResult($sql);
    
?>

<div class="row">
	<div class="col-md-12 table-responsive">
		<h1 class="text-center" style="margin-top: 15px;">Thêm/Sửa Sản Phẩm </h1>
		<div class="container">
		<div class="panel panel-primary">
			<div class="panel-body">
			<form method="post">
					<div class="form-group">
				  <label for="usr">Tên Sản Phẩm:</label>
				  <input required="true" type="text" class="form-control" id="usr" name="title" value="<?=$title?>">
				  <input type="text" name="id" value="<?=$id?>" hidden="true">
				</div>
				<div class="form-group">
				  <label for="usr">Danh Mục Sản Phẩm:</label>
				  <select class="form-control" name="category_id" id="category_id" required="true">
				  		<option value="">--Chọn đê--</option>
				  		<?php
				  			foreach($categoryItems as $item) {
				  				if($item['id'] == $category_id) {
				  					echo '<option selected value="'.$item['id'].'">'.$item['name'].'</option>';
				  				} else {
				  					echo '<option value="'.$item['id'].'">'.$item['name'].'</option>';
				  				}
				  			}
				  		?>
				  </select>
				</div>
				<div class="form-group">
				  <label for="thumbnail">Thumbnail:</label>
				  <input required="true" type="text" class="form-control" id="email" name="thumbnail" value="<?=$thumbnail?>">
				</div>
				<div class="form-group">
				  <label for="price">Giá:</label>
				  <input type="number" class="form-control" id="price" name="price" value="<?=$price?>">
				</div>
				<div class="form-group">
				  <label for="discount">Giảm giá:</label>
				  <input type="text" class="form-control" id="discount" name="discount" value="<?=$discount?>">
				</div>
				<div class="form-group">
				  <label for="pwd">Mô tả:</label>
				  <textarea class="form-control" rows="5" name="description"><?=$description?></textarea>
				</div>
				
				<button class="btn btn-success" style="margin-top:10px;">Lưu Sản Phẩm</button>
			</form>
			</div>
		</div>
	</div>
		
	</div>
</div>

<?php
    require_once('../layouts/footer.php');
?>