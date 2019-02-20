<form action="" method="post">
<table border="3" align="center" bgcolor="#00CCFF">
<tr>
	<td><h1 align="center">Zodiak</h1></td>
</tr>
<tr>
<td>
	<table border="0" align="center">
		<tr>
			<td align="right">Masukkan Nama :</td>
			<td><input type="text" name="nama" required=""></td>
		</tr>
		<tr>
			<td align="right">Tgl Lahir :</td>
			<td align="left"><select name="t">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
                <option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
                <option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
                <option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
                <option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
                <option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
                <option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
                <option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
                <option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
                <option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
                <option value="31">31</option>
			</select></td>
		</tr>
		<tr>
			<td align="right">Bulan Lahir :</td>
			<td align="left"><select name="b">
				<option value="1">Januari</option>
				<option value="2">Februari</option>
				<option value="3">Maret</option>
                <option value="4">April</option>
				<option value="5">Mei</option>
				<option value="6">Juni</option>
                <option value="7">July</option>
				<option value="8">Agustus</option>
				<option value="9">September</option>
                <option value="10">Oktober</option>
				<option value="11">November</option>
				<option value="12">Desember</option>
			</select></td>
		</tr>
        <tr>
			<td align="right">Tahun Lahir :</td>
			<td><select name="ta">
            	<?php 
					$tahun = date('Y');
					for ($x = 1945; $x<=$tahun  ; $x++) {
    				echo"<option value='$x'>$x</option>";
				} 
				?>
            </select></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="hasil" value="Proses">
			 <input type="reset" name="batal" value="Batal"></td>
		</tr>
		<tr>
			
			<td><?php require "proses.php"?></td>
		</tr>
       
	</table>
</td>
</tr>
</table>
</form>