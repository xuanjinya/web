<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<p align="center"><span class="STYLE1"><a href="表单.html">返回</a></span>
		<?php  $name = $_POST["姓名"];
		$sex = $_POST["性别"];
		$number = $_POST["学号"];
		$专业 = $_POST["专业"];
		$年级 = $_POST["年级"]."届".$_POST["班级"];
		$省份 = $_POST["省份"];
		?>
	</p>
	<div align="center">
		<table width="80%" border="1">
	<caption>信息统计</caption>
	<tr bgcolor="#00FF00">
		<td>姓名</td>
		<td>性别</td>
		<td>专业</td>
		<td>学号</td>
		<td>班级</td>
		<td>省份</td>
	</tr>
	<tr>
		<td><?php echo $name ?></td>
		<td><?php echo $sex ?></td>
		<td><?php echo $专业 ?></td>
		<td><?php echo $number ?></td>
		<td><?php echo $年级 ?></td>
		<td><?php echo $省份 ?></td>
	</tr>
</table>
	</div>
</body>
</html>

