<!DOCTYPE HTML>
<?php
require_once 'link.php';	
?>
<html>
	<head>
		<title>銘傳大學圖書館</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/abc.css" />
		<link rel="stylesheet" href="assets/css/w3.css">
	</head>
	<body>
		<!-- Header -->
			<header id="header" class="content">
			<div class="logo"><a href="management.php">管理員系統</a></div>
			<a href="#menu" class="toggle"><span>Menu</span></a>
			</header>
		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
                    <li><a href="management.php">管理系統首頁</a></li>
					<li><a href="index.php">座位歷史紀錄查詢網頁</a></li>
					<li><a href="management2.php">佔位狀態</a></li>
					<li><a href="management3.php">當日人流狀態</a></li>
					<li><a href="management4.php">資料庫狀態表</a></li>
					<li><a href="management5.php">網站系統監測</a></li>
					<li><a href="libray.php">登出</a></li>
				</ul>
			</nav>
			<!-- Banner -->
              <section id="one" class="wrapper style2">
				<div class="inner">
					<div>
						<div class="box">
							<div class="image fit">
								<img src="images/aavc.png" />
							</div>
							<div class="content">
								<header class="align-center">
									<h2>座位管理系統</h2>
									<p>各樓層座位目前狀態</p>
								</header>
								<hr />		
										<table class="alt">
											<thead>
												<tr>
													    <td align="center" valign="center"><h2>A區座位</h2></td>
													    <td align="center" valign="center"><h2>B區座位</h2></td>
													    <td align="center" valign="center"><h2>C區座位</h2></td>
														 <td align="center" valign="center"><h2>D區座位</h2></td>
												</tr>
											</thead>
											<tbody>
												<tr><div style="background-color:#ff0000"></div>
													<td align="center" valign="center"><h2>總座位:<b> 12</b> </h2></td>
													<td align="center" valign="center"><h2>總座位:<b> 12</b> </h2></td>
													<td align="center" valign="center"><h2>總座位:<b> 12</b> </h2></td>
													<td align="center" valign="center"><h2>總座位:<b> 12</b> </h2></td>
												</tr>
												<tr>                                          
													<td align="center" valign="center"><div style="background-color:red"><h2>使用:<b>
<?php //將查詢語法當成字串，記錄在$sql變數中(查詢資料表'A'的'status'有幾個'1'的 資料)
													                                                     $sql=" SELECT COUNT(status) AS `count` FROM  `A`WHERE `status` =1";
																										 //用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
													                                                     $result = mysqli_query($link, $sql);
																										 //mysqli_fetch_assoc 方法取得 一筆值
																										 $row=mysqli_fetch_assoc($result);
																										 $count = $row['count'];
																										 //輸出結果
																										 echo $count ;?></b></h2></div></td>
													<td align="center" valign="center"><h2><div style="background-color:red">使用:<b><?php $sql=" SELECT COUNT(status) AS `count` FROM  `B`WHERE `status` =1";$result = mysqli_query($link, $sql);$row=mysqli_fetch_assoc($result);$count = $row['count'];echo $count ;?></div></b></h2></td>
													<td align="center" valign="center"><h2><div style="background-color:red">使用:<b><?php $sql=" SELECT COUNT(status) AS `count` FROM  `C`WHERE `status` =1";$result = mysqli_query($link, $sql);$row=mysqli_fetch_assoc($result);$count = $row['count'];echo $count ;?></b></div></h2></td>
													<td align="center" valign="center"><h2><div style="background-color:red">使用:<b><?php $sql=" SELECT COUNT(status) AS `count` FROM  `D`WHERE `status` =1";$result = mysqli_query($link, $sql);$row=mysqli_fetch_assoc($result);$count = $row['count'];echo $count ;?></b></div></h2></td>
												</tr>
												<tr>
													<td align="center" valign="center"><div style="background-color:#deb437	"><h2>佔用:<b><?php $sql=" SELECT COUNT(status) AS `count` FROM  `A`WHERE `status` =2";$result = mysqli_query($link, $sql);$row=mysqli_fetch_assoc($result);$count = $row['count'];echo $count ; ?></b></h2></div></td>
													<td align="center" valign="center"><div style="background-color:#deb437"><h2>佔用:<b><?php $sql=" SELECT COUNT(status) AS `count` FROM  `B`WHERE `status` =2";$result = mysqli_query($link, $sql);$row=mysqli_fetch_assoc($result);$count = $row['count'];echo $count ; ?></b></h2></div></td>
													<td align="center" valign="center"><div style="background-color:#deb437"><h2>佔用:<b><?php $sql=" SELECT COUNT(status) AS `count` FROM  `C`WHERE `status` =2";$result = mysqli_query($link, $sql);$row=mysqli_fetch_assoc($result);$count = $row['count'];echo $count ; ?></b></h2></div></td>
													<td align="center" valign="center"><div style="background-color:#deb437"><h2>佔用:<b><?php $sql=" SELECT COUNT(status) AS `count` FROM  `D`WHERE `status` =2";$result = mysqli_query($link, $sql);$row=mysqli_fetch_assoc($result);$count = $row['count'];echo $count ; ?></b></h2></div></td>
												</tr>
												<tr>
													<td align="center" valign="center"><div style="background-color:rgb(192,192,192)"><h2>空位:<b><?php $sql="SELECT COUNT(status) AS `count` FROM  `A`WHERE `status` =0";$result = mysqli_query($link, $sql);$row=mysqli_fetch_assoc($result);$count = $row['count'];echo $count ; ?></b></h2></div></td>
													<td align="center" valign="center"><div style="background-color:rgb(192,192,192)"><h2>空位:<b><?php $sql="SELECT COUNT(status) AS `count` FROM  `B`WHERE `status` =0";$result = mysqli_query($link, $sql);$row=mysqli_fetch_assoc($result);$count = $row['count'];echo $count ; ?></b></h2></div></td>
													<td align="center" valign="center"><div style="background-color:rgb(192,192,192)"><h2>空位:<b><?php $sql="SELECT COUNT(status) AS `count` FROM  `C`WHERE `status` =0";$result = mysqli_query($link, $sql);$row=mysqli_fetch_assoc($result);$count = $row['count'];echo $count ; ?></b></h2></div></td>
													<td align="center" valign="center"><div style="background-color:rgb(192,192,192)"><h2>空位:<b><?php $sql="SELECT COUNT(status) AS `count` FROM  `D`WHERE `status` =0";$result = mysqli_query($link, $sql);$row=mysqli_fetch_assoc($result);$count = $row['count'];echo $count ; ?></b></h2></div></td>
												</tr>
											</tbody>
										</table>
		<div class="content">
					<div id="flexgrid">
						<div>
							<header>
								<h3>A區現況</h3>
							</header>
							
					<p>
					<?php
$sql=" SELECT DISTINCT * FROM  `A`WHERE `position` =  '1-1'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray' style='color:blue' >1-01</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `A`WHERE `position` =  '1-1'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red' style='color:blue' >1-01</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `A`WHERE `position` =  '1-1'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>1-01</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?>
								<?php	
$sql=" SELECT DISTINCT * FROM  `A`WHERE `position` =  '1-2'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>1-02</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `A`WHERE `position` =  '1-2'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>1-02</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `A`WHERE `position` =  '1-2'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>1-02</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?></p><p>
								<?php
$sql=" SELECT DISTINCT * FROM  `A`WHERE `position` =  '1-3'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>1-03</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `A`WHERE `position` =  '1-3'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>1-03</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `A`WHERE `position` =  '1-3'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>1-03</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?>
								<?php
$sql=" SELECT DISTINCT * FROM  `A`WHERE `position` =  '1-4'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>1-04</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `A`WHERE `position` =  '1-4'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>1-04</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `A`WHERE `position` =  '1-4'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>1-04</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?>
</p><p>						    <?php
$sql=" SELECT DISTINCT * FROM  `A`WHERE `position` =  '1-5'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>1-05</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `A`WHERE `position` =  '1-5'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>1-05</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `A`WHERE `position` =  '1-5'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>1-05</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?>
								<?php
$sql=" SELECT DISTINCT * FROM  `A`WHERE `position` =  '1-6'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>1-06</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `A`WHERE `position` =  '1-6'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>1-06</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `A`WHERE `position` =  '1-6'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>1-06</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?></p><p>		
                                <?php
$sql=" SELECT DISTINCT * FROM  `A`WHERE `position` =  '1-7'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>1-07</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `A`WHERE `position` =  '1-7'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>1-07</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `A`WHERE `position` =  '1-7'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>1-07</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?>							
								<?php
$sql=" SELECT DISTINCT * FROM  `A`WHERE `position` =  '1-8'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>1-08</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `A`WHERE `position` =  '1-8'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>1-08</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `A`WHERE `position` =  '1-8'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>1-08</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?></p><p>		
								<?php
$sql=" SELECT DISTINCT * FROM  `A`WHERE `position` =  '1-9'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>1-09</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `A`WHERE `position` =  '1-9'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>1-09</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `A`WHERE `position` =  '1-9'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>1-09</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?>	
								<?php	
$sql=" SELECT DISTINCT * FROM  `A`WHERE `position` =  '1-10'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>1-10</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `A`WHERE `position` =  '1-10'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>1-10</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `A`WHERE `position` =  '1-10'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>1-10</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?></p> <p>		
<?php
$sql=" SELECT DISTINCT * FROM  `A`WHERE `position` =  '1-11'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>1-11</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `A`WHERE `position` =  '1-11'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>1-11</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `A`WHERE `position` =  '1-11'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>1-11</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?>
								<?php	
$sql=" SELECT DISTINCT * FROM  `A`WHERE `position` =  '1-12'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>1-12</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `A`WHERE `position` =  '1-12'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>1-12</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `A`WHERE `position` =  '1-12'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>1-12</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?></p><p>

				</div>
					
						<div>
							<header>
								<h3>B區現況</h3>
							</header>
							<p><?php
$sql=" SELECT DISTINCT * FROM  `B`WHERE `position` =  '2-1'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>2-01</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `B`WHERE `position` =  '2-1'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>2-01</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `B`WHERE `position` =  '2-1'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>2-01</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?>
								<?php
$sql=" SELECT DISTINCT * FROM  `B`WHERE `position` =  '2-2'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>2-02</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `B`WHERE `position` =  '2-2'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>2-02</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `B`WHERE `position` =  '2-2'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>2-02</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?></p><p>
								<?php
$sql=" SELECT DISTINCT * FROM  `B`WHERE `position` =  '2-3'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>2-03</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `B`WHERE `position` =  '2-3'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>2-03</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `B`WHERE `position` =  '2-3'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>2-03</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?>
								<?php
$sql=" SELECT DISTINCT * FROM  `B`WHERE `position` =  '2-4'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>2-04</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `B`WHERE `position` =  '2-4'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>2-04</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `B`WHERE `position` =  '2-4'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>2-04</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?></p><p>
								<?php
$sql=" SELECT DISTINCT * FROM  `B`WHERE `position` =  '2-5'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>2-05</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `B`WHERE `position` =  '2-5'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>2-05</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `B`WHERE `position` =  '2-5'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>2-05</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?>
								<?php
$sql=" SELECT DISTINCT * FROM  `B`WHERE `position` =  '2-6'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>2-06</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `B`WHERE `position` =  '2-6'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>2-06</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `B`WHERE `position` =  '2-6'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>2-06</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?></p><p>
							    <?php
$sql=" SELECT DISTINCT * FROM  `B`WHERE `position` =  '2-7'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>2-07</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `B`WHERE `position` =  '2-7'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>2-07</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `B`WHERE `position` =  '2-7'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>2-07</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?>
                                <?php
$sql=" SELECT DISTINCT * FROM  `B`WHERE `position` =  '2-8'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>2-08</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `B`WHERE `position` =  '2-8'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>2-08</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `B`WHERE `position` =  '2-8'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>2-08</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?></p><p>
                                <?php
$sql=" SELECT DISTINCT * FROM  `B`WHERE `position` =  '2-9'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>2-09</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `B`WHERE `position` =  '2-9'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>2-09</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `B`WHERE `position` =  '2-9'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>2-09</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?>	
                                <?php
$sql=" SELECT DISTINCT * FROM  `B`WHERE `position` =  '2-10'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>2-10</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `B`WHERE `position` =  '2-10'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>2-10</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `B`WHERE `position` =  '2-10'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>2-10</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?></p><p>
                                <?php
$sql=" SELECT DISTINCT * FROM  `B`WHERE `position` =  '2-11'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>2-11</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `B`WHERE `position` =  '2-11'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>2-11</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `B`WHERE `position` =  '2-11'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>2-11</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?>
                                <?php
$sql=" SELECT DISTINCT * FROM  `B`WHERE `position` =  '2-12'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>2-12</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `B`WHERE `position` =  '2-12'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>2-12</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `B`WHERE `position` =  '2-12'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>2-12</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?></p>
						</div>
						<div>
							<header>
								<h3>C區現況</h3>
							</header>
								<p><?php
$sql=" SELECT DISTINCT * FROM  `C`WHERE `position` =  '3-1'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>3-01</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `C`WHERE `position` =  '3-1'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>3-01</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `C`WHERE `position` =  '3-1'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>3-01</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?>
								<?php
$sql=" SELECT DISTINCT * FROM  `C`WHERE `position` =  '3-2'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>3-02</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `C`WHERE `position` =  '3-2'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>3-02</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `C`WHERE `position` =  '3-2'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>3-02</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?></p><p>
								<?php
$sql=" SELECT DISTINCT * FROM  `C`WHERE `position` =  '3-3'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>3-03</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `C`WHERE `position` =  '3-3'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>3-03</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `C`WHERE `position` =  '3-3'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>3-03</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?>
								<?php
$sql=" SELECT DISTINCT * FROM  `C`WHERE `position` =  '3-4'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>3-04</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `C`WHERE `position` =  '3-4'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>3-04</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `C`WHERE `position` =  '3-4'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>3-04</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?></p><p>
								<?php
$sql=" SELECT DISTINCT * FROM  `C`WHERE `position` =  '3-5'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>3-05</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `C`WHERE `position` =  '3-5'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>3-05</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `C`WHERE `position` =  '3-5'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>3-05</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?>
								<?php
$sql=" SELECT DISTINCT * FROM  `C`WHERE `position` =  '3-6'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>3-06</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `C`WHERE `position` =  '3-6'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>3-06</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `C`WHERE `position` =  '3-6'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>3-06</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?></p><p>					
								<?php
$sql=" SELECT DISTINCT * FROM  `C`WHERE `position` =  '3-7'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>3-07</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `C`WHERE `position` =  '3-7'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>3-07</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `C`WHERE `position` =  '3-7'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>3-07</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?>					
                                <?php
$sql=" SELECT DISTINCT * FROM  `C`WHERE `position` =  '3-8'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>3-08</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `C`WHERE `position` =  '3-8'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>3-08</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `C`WHERE `position` =  '3-8'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>3-08</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?></p><p>					
                                <?php
$sql=" SELECT DISTINCT * FROM  `C`WHERE `position` =  '3-9'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>3-09</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `C`WHERE `position` =  '3-9'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>3-09</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `C`WHERE `position` =  '3-9'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>3-09</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?>	
                                <?php
$sql=" SELECT DISTINCT * FROM  `C`WHERE `position` =  '3-10'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>3-10</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `C`WHERE `position` =  '3-10'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>3-10</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `C`WHERE `position` =  '3-10'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>3-10</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?></p><p>	
                                <?php
$sql=" SELECT DISTINCT * FROM  `C`WHERE `position` =  '3-11'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>3-11</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `C`WHERE `position` =  '3-11'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>3-11</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `C`WHERE `position` =  '3-11'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>3-11</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?>	
                                <?php
$sql=" SELECT DISTINCT * FROM  `C`WHERE `position` =  '3-12'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>3-12</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `C`WHERE `position` =  '3-12'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>3-12</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `C`WHERE `position` =  '3-12'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>3-12</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?></p>
						</div>
	<div>
							<header>
								<h3>D區現況</h3>
							</header>
								<p><?php
$sql=" SELECT DISTINCT * FROM  `D`WHERE `position` =  '4-1'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>4-01</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `D`WHERE `position` =  '4-1'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>4-01</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `D`WHERE `position` =  '4-1'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>4-01</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?>
								<?php
$sql=" SELECT DISTINCT * FROM  `D`WHERE `position` =  '4-2'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>4-02</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `D`WHERE `position` =  '4-2'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>4-02</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `D`WHERE `position` =  '4-2'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>4-02</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?></p><p>
								<?php
$sql=" SELECT DISTINCT * FROM  `D`WHERE `position` =  '4-3'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>4-03</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `D`WHERE `position` =  '4-3'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>4-03</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `D`WHERE `position` =  '4-3'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>4-03</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?>
								<?php
$sql=" SELECT DISTINCT * FROM  `D`WHERE `position` =  '4-4'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>4-04</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `D`WHERE `position` =  '4-4'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>4-04</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `D`WHERE `position` =  '4-4'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>4-04</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?></p><p>
								<?php
$sql=" SELECT DISTINCT * FROM  `D`WHERE `position` =  '4-5'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>4-05</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `D`WHERE `position` =  '4-5'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>4-05</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `D`WHERE `position` =  '4-5'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>4-05</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?>
								<?php
$sql=" SELECT DISTINCT * FROM  `D`WHERE `position` =  '4-6'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>4-06</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `D`WHERE `position` =  '4-6'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>4-06</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `D`WHERE `position` =  '4-6'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>4-06</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?></p><p>					
								<?php
$sql=" SELECT DISTINCT * FROM  `D`WHERE `position` =  '4-7'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>4-07</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `D`WHERE `position` =  '4-7'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>4-07</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `D`WHERE `position` =  '4-7'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>4-07</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?>					
                                <?php
$sql=" SELECT DISTINCT * FROM  `D`WHERE `position` =  '4-8'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>4-08</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `D`WHERE `position` =  '4-8'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>4-08</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `D`WHERE `position` =  '4-8'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>4-08</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?></p><p>					
                                <?php
$sql=" SELECT DISTINCT * FROM  `D`WHERE `position` =  '4-9'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>4-09</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `D`WHERE `position` =  '4-9'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>4-09</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `D`WHERE `position` =  '4-9'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>4-09</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?>	
                                <?php
$sql=" SELECT DISTINCT * FROM  `D`WHERE `position` =  '4-10'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>4-10</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `D`WHERE `position` =  '4-10'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>4-10</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `D`WHERE `position` =  '4-10'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>4-10</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?></p><p>	
                                <?php
$sql=" SELECT DISTINCT * FROM  `D`WHERE `position` =  '4-11'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>4-11</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `D`WHERE `position` =  '4-11'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>4-11</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `D`WHERE `position` =  '4-11'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>4-11</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?>	
                                <?php
$sql=" SELECT DISTINCT * FROM  `D`WHERE `position` =  '4-12'AND  `status` =0";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-btn w3-gray'>4-12</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `D`WHERE `position` =  '4-12'AND  `status` =1";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-red'>4-12</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
$sql=" SELECT DISTINCT * FROM  `D`WHERE `position` =  '4-12'AND  `status` =2";$result = mysqli_query($link, $sql);if ($result){if (mysqli_num_rows($result) > 0){echo"<button class='w3-button w3-amber'>4-12</button>";}}else{echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);}
?></p>
						</div>						
						</div>
					</div>										
							</div>
						</div>
					
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="content">
				<div class="inner">
				<div class="box">
		
					</div>
				</div>
			</section>






		

		
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>