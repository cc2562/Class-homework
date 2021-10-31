<?php
require("con.php");
$sql = mysql();
$ming = "SELECT * FROM `homework` WHERE `date` = '2021-06-06' ORDER BY `date`  ";
$stmt = $sql->prepare($ming);

$stmt->execute();
$stmt->store_result();
$stmt->bind_result($date, $chinese, $math, $english, $phy, $hua, $shen, $other, $uid, $note);
$stmt->fetch();

echo '<div class="card">';
echo '<header><h3>' . $date . '</h3></header>';
echo '<div class="content"><ol>';
echo '<li class="li"><strong>语文：</strong>' . $chinese . '</li>';
echo '<li class="li"><strong>数学：</strong>' . $math . '</li>';
echo '<li class="li"><strong>英语：</strong>' . $english . '</li>';
echo '<li class="li"><strong>物理：</strong>' . $phy . '</li>';
echo '<li class="li"><strong>化学：</strong>' . $hua . '</li>';
echo '<li class="li"><strong>生物：</strong>' . $shen . '</li>';
echo '<li class="li"><strong>其他：</strong>' . $other . '</li>';
echo '</ol></div>';
echo '<footer><p style="color: #6a6a6a">日期：</p></footer></div>';
echo "2222";
echo "oooooooooooo";