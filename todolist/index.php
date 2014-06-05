<!DOCTYPE html>
<html>
<head>
	<title>Todo List</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="kotak-luar">
<!-- *************************************** FORM INPUT TODO LIST ******************************************* -->
		<form class="form-list" action="ListInput.php" method="post">

			<h1>TODO LIST</h1>
			<br/><br/>
			<div class="kotak-tabel">
				<div>
					<input type="text" name="todo" placeholder="Todo List Here" class="input-todo" required>
					<br/>
					<label class="label-tanggal">deadline</label>
					<input type="date" name="deadline" placeholder="yyyy-mm-dd" required class="input-tanggal">
				</div>
				<br/>
					<button type="submit" name="submit" value="Add"><h1>ADD</h1> </button>
			</div>
		</form>
		<br/><br/>
<!-- *************************************** TABEL TODOLISTNYA ******************************************* -->
		<div class="kotak-list">
		<table>
			<thead>
				<tr>
					<th>
						TODO
					</th>
					<th>
						status
					</th>
					<th>
						deadline
					</th>
				</tr>
			</thead>
			<tbody>
				
					<?php

					include 'connectDB.php';

					try{
						$todolist = $db->query("SELECT * FROM aktifitas Where hapus = 0");
						$row=$todolist->fetch();
						foreach ($todolist as $data) {
							echo '<tr>';
							echo '<td>'.$data['todo'].'</td>';
							echo '<td>'.$data['status'].'</td>';
							echo '<td>'.$data['tanggal'].'</td>';
							
							?>	
<!-- *************************************** FORM EDIT ******************************************* -->
							<td>
								<form action="editList.php" method="post">
									<?php echo'<input type="hidden" name="idhps" value="'.$data['idList'].'">';?>
									<input type="submit" name="submit" value="Edit">
								</form>
							</td>
<!-- *************************************** FORM HAPUS ******************************************* -->
							<td>
								<form action="hapusList.php" method="post">
									<?php echo'<input type="hidden" name="idhps" value="'.$data['idList'].'">';?>
									<input type="submit" name="submit" value="Hapus">
								</form>
							</td>
							<?
							echo '</tr>';
						}
					}catch(PDOException $e){
						echo $e->getMessage();
					}
					?>

			</tbody>
		</table>
			
		</div>
	</div>
</body>
</html>