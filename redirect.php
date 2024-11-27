<?php
// 获取用户代理字符串
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// 根据用户代理判断设备类型并进行重定向
if (preg_match('/mobile|android|iphone|ipad|ipod/i', $userAgent)) {
    header('Location: Source/androidhtml.html'); // 针对移动设备
} else {
    header('Location: Source/PCindex.html'); // 针对桌面设备
}
exit();
?>