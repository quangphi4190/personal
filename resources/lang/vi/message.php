<?php
use App\Content;
$info =  Content::first();
return [
	'successful_transaction_payment' => 'thành công!',
	'congratulations_getting_points' => ' :number online!',
	'notify_received_points' => 'Bạn vừa nhận được :number tài khoản :name',
	'agree' => 'Đồng ý',
	'cancel' => 'Hủy bỏ',
	'edit' => 'Chỉnh sửa',
	'update' => 'Cập nhật',
	'home_page' => 'Trang chủ',
	'approved' => 'hoàn thành',
	'pending' => 'đang chờ xử lý',
	'reject' => 'từ chối',
	'active' => 'kích hoạt',
	'deactive' => 'ngừng kích hoạt',
	'notContact' => 'Chưa liên hệ',
	'doingcontact' => 'Đã liên hệ',
	'textPage' => $info->tencongty,
]

?>
