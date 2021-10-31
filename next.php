<?php
require("./con.php");
$date = $_POST['date'];
if (empty($date)) {
    $date = date("Y-m-d");
}

$chinese = $_POST['chinese'];
$math = $_POST['math'];
$english = $_POST['english'];
$phy = $_POST['phy'];
$hua = $_POST['hua'];
$shen = $_POST['shen'];
$other = $_POST['other'];
$uid = "3";
$note = "2333";

add($date, $chinese, $math, $english, $phy, $hua, $shen, $other, $uid, $note);
?>

<link rel="stylesheet" href="css/iconfont.css">
<link rel="stylesheet" href="./css/weui.css"/>

<div class="page">
    <div class="weui-msg">
        <div class="weui-msg__icon-area"><i class="weui-icon-success weui-icon_msg"></i></div>
        <div class="weui-msg__text-area">
            <h2 class="weui-msg__title">添加成功</h2>
            <p class="weui-msg__desc">作业添加成功啦！！！</p>
        </div>
        <div class="weui-msg__opr-area">
            <p class="weui-btn-area">
                <a href="javascript:history.back();" class="weui-btn weui-btn_primary">确定</a>
            </p>
        </div>
        <div class="weui-msg__tips-area">
            <p class="weui-msg__tips">作业已经成功添加。可以在前台查看。</p>
        </div>
        <div class="weui-msg__extra-area">
            <div class="weui-footer">
                <p class="weui-footer__text">Copyright &copy; 2021 ccrice</p>
            </div>
        </div>
    </div>
</div>