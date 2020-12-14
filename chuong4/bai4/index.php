<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Bài 4</title>
</head>
<body>
	<?php
		$tendangnhap = $matkhau = $hoten = $ngaysinh = $gioitinh = $email = $diachi = $sdt = '';
		if(isset($_POST['dangky'])){
			if(isset($_POST['hoten'])) $hoten = $_POST['hoten'];
			if(isset($_POST['tendangnhap'])) $tendangnhap = $_POST['tendangnhap'];
			if(isset($_POST['matkhau'])) $matkhau = $_POST['matkhau'];
			if(isset($_POST['ngaysinh'])) $ngaysinh = $_POST['ngaysinh'];
			$gioitinh = isset($_POST['gioitinh']) ? 'Nam' : 'Nữ';
			if(isset($_POST['dienthoai'])) $sdt = $_POST['dienthoai'];
			if(isset($_POST['diachi'])) $diachi = $_POST['diachi'];
			if(isset($_POST['email'])) $email = $_POST['email'];
		}
	?>


	<form action="" class="container" method="POST">
		<header>
			<p>Hồ sơ đăng ký</p>
		</header>
		<div class="info_login_title">
			<p>Thông tin đăng nhập</p>
		</div>
		<div class="info_login_detail">
			<p id="_tendangnhap">Tên đăng nhập</p>
			<input type="text" id="tendangnhap" name="tendangnhap">
			<p id="_matkhau">Mật khẩu</p>
			<input type="text" id="matkhau" name="matkhau">
			<p id="_nhaplaimk">Nhập lại mật khẩu</p>
			<input type="text" id="nhaplaimk" name="nhaplaimk">
		</div>

		<div class="info_person_title">
			<p>Thông tin cá nhân</p>
		</div>
		<div class="info_profile_detail">
			<p id="_hoten">Họ tên khách hàng</p>
			<input type="text" id="hoten" name="hoten">
			<p id="_ngaysinh">Ngày sinh</p>
			<input type="date" value="2000-01-01" name='ngaysinh'>
			<p id="_email">Email</p>
			<input type="email" id="email" name="email">
			<p id="_thunhap">Thu nhập</p>
			<input type="number" id="thunhap" name="thunhap">
			<p id="_gioitinh">Giới tính</p>
			<div>
				<label for='gioitinh'>Nam</span>
				<input type="checkbox" id="gioitinh" name="gioitinh">
			</div> 
			<p id="_diachi">Địa chỉ</p>
			<textarea id="diachi" name="diachi"></textarea>
			<p id="_dienthoai">Điện thoại</p>
			<input type="text" id="dienthoai" name="dienthoai">
			<input type="submit" id="dangky" name="dangky">
		</div>

		<div class="info_customer_title">
			<p>Hồ sơ khách hàng</p>
		</div>
		<div class="info_customer_detail">
			<ul>
				<?php
					echo  
					"<li>Họ tên khách hàng: $hoten</li>
					<li>Tên đăng nhập: $tendangnhap</li>
					<li>Mật khẩu: $matkhau</li>
					<li>Ngày sinh:$ngaysinh</li>
					<li>Giới tính: $gioitinh</li>
					<li>Email:$email</li>
					<li>Địa chỉ:$email </li>
					<li>Điện thoại:$sdt</li>";
				?>
			</ul>
		</div>
	</form>
</body>
</html>