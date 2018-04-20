<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<script language="JavaScript">
    function chkNumber(ele)
    {
    var vchar = String.fromCharCode(event.keyCode);
    if ((vchar<'0' || vchar>'9') && (vchar != '.')) return false;
    ele.onKeyPress=vchar;
    }
</script>

	<?php echo form_open('Member/validate'); ?>
	<table>
		<tr>
			<td>UserName : </td>
			<td><input type="text" name="username" required="" /></td>  
		</tr>
		<tr>
			<td>PassWord : </td>
			<td><input type="text" name="password" required="" /></td>
		</tr>
		<tr>
			<td> ยืนยัน PassWord : </td>
			<td><input type="text" name="password" required="" /></td>
		</tr>
		<td>ชื่อ : </td>
		<td><input type="text" name="FName" required="" /></td>  
	</tr>
	<tr>
		<td>นามสกุล : </td>
		<td><input type="text" name="LName" required="" /></td>
	</tr>
		<tr>
			<td>
				<div>
					ที่อยู่
					<td><textarea name="address" rows="5" cols="40"></textarea></td>
				</div> </td>
			</tr>
			<tr>
				<td>
					<div>  E-Mail
						<td><input type="text" name="email"></td>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div>  เบอร์โทร
						<td> <input type="text" name="phone"value="" OnKeyPress="return chkNumber(this)"></td>
					</div></td>
				<tr>
					<td colspan="1"></td>
					<td><input type="submit" value="ok"/></td>
				</tr>
			</table>
		</form>

	</body>
	</html>