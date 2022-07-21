<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tugas Akhir</title>
</head>
<body background="beg.jpg">
	<center><h1>Selamat Datang Dipinjaman Uang Online</h1>
			<h3>Jika anda mau meminjam uang anda harus mengisi form data diri anda</h3>
			<h2>Dibawah ini</h2>
			<img src="nunjuk.png" width="400" height="400">
			<h3><a href="form.html">Form Data Diri</a>  |  <a href="kalkulator.html">Hitung Jumlah Hutng</a>  |  <a href="kalender.php">Tanggal Pinjam </a></h3>
			<h3>Isi Form Data Diri Anda Sebelum Pinjam</h3>
			<form><center>
				<tr>
					<td> Nama : </td>
					<td><input type="text" name="vnama" value="" size="35px" maxlength="10"/></td>
				</tr><br>
				<tr>
					<td> Alamat : </td>
					<td><input type="text" name="vnama" value="" size="35px" maxlength="10"/></td>
				</tr><br>
				<tr>
					<td> No. Hp : </td>
					<td><input type="text" name="vnama" value="" size="35px" maxlength="10"/></td>
				</tr><br>
				<tr>
					<td> Pinjam : </td>
					<td><input type="text" name="vnama" value="" size="35px" maxlength="10"/></td>
				</tr><br><br>
				<tr>
        		  <td>Ceritakan kenapa anda pinjam uang</td><br>
        		  <td><textarea name="vcertita" cols="35" rows="5"></textarea></td>
        		</tr>
			</center></form>
			<h3>Total Jumlah Uang Yang Anda Pinjam</h3>
				<script type="text/javascript">
					function clearScreen() {
					 document.getElementById("result").value = "";
					}

					function display(value) {
					 document.getElementById("result").value += value;
					}

					function calculate() {
					 var p = document.getElementById("result").value;
					 var q = eval(p);
		 			 document.getElementById("result").value = q;
					}
 				</script>
				<table border="1" align="center">
				<tr>
					<td colspan = "3"> <input class = "display-box" type = "text" id = "result" disabled /> </td>
				<tr>
				<td>
					<table>
						<tr>
							<td width="50%" align="center">
								<input type="button" value="1" onclick = "display('1')" /;>
								<input type="button" value="2" onclick = "display('2')" /;>
								<input type="button" value="3" onclick = "display('3')" /;>
								<input type="button" value="*" onclick = "display('*')" /;></td></tr>
						<tr>
						<td width="50%" align="center">
							<input type="button" value="4" onclick = "display('4')" /;>
							<input type="button" value="5" onclick = "display('5')" /;>
							<input type="button" value="6" onclick = "display('6')" /;>
							<input type="button" value="/" onclick = "display('/')" /;></td></tr>
						<tr>
						<td width="50%" align="center">
							<input type="button" value="7" onclick = "display('7')" /;>
							<input type="button" value="8" onclick = "display('8')" /;>
							<input type="button" value="9" onclick = "display('9')" /;>
							<input type="button" value="+" onclick = "display('+')" /;></td></tr>
						<tr>
						<td width="50%" align="center">
							<input type="button" value="." onclick = "display('.')" /;>
							<input type="button" value="0" onclick = "display('0')" /;>
							<input class = "button" type = "button" value = "C" onclick = "clearScreen()" />
							<input type="button" value="-" onclick = "display('-')" /;></td></tr>
					</table>
					<tr>
						<td colspan="4" align="right">
							<input type="button" value="Enter" onclick = "calculate()";>
						</td>
					</tr>
				</td>
				</tr>
		</table>
		<h3>Tanggal Peminjaman Uang Anda</h3>
			<div>
				<?php
					include 'kalender.php';
				?>
			</div>
	</center>
</body>
</html>