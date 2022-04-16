<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
		require_once "function_a.php"; //$arrQuestion
		require_once "function_b.php"; //$arrOptions

		
			$newArr =array();
			foreach ($arrQuestion as $key => $value) {
				$newArr[$key]["question"] = $value["question"];
				$newArr[$key]["sentences"] = $arrOptions[$key];
			}
		

	?>
<div class="content">
	<h1>Trắc nghiệm tính cách</h1>
	<form action="result.php" method="post" name="mainForm">
		<?php
			$i=1;
			foreach ($newArr as $key => $value) {
				echo '<div class="question">';
				echo '<p><span>Câu hỏi '.$i.': </span> '.$value["question"].'</p> ';
				
				echo '<ul>';
				foreach ($value["sentences"] as $keyc => $valuec) {
					echo '<li><label><input type="radio" name='.$key.' value="'.$valuec["point"].'">'.$valuec["option"].'</label></li>';
				}
				echo '</ul>';
			$i++;

			}
			
		?>
		
	
		<input type="submit" value="Kiểm tra" name="submit"></input>
	</form>
</div>
</body>
</html>