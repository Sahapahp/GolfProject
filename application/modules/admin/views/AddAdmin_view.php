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

<?php echo form_open('Admin/validate'); ?>
	<table>
    	<tr>
        	<td>UserName : </td>
            <td><input type="text" name="first_name" required="" /></td>
            
        </tr>
        <tr>
        	<td>PassWord : </td>
            <td><input type="PassWord" name="last_name" required="" /></td>
           
        </tr>
          <tr>
            <td>ยืนยัน PassWord : </td>
            <td><input type="PassWord" name="relast_name" required="" /></td>
           
        </tr>
              <tr>
        	<td colspan="1"></td>
            <td><input type="submit" value="ตกลง"/></td>
        </tr>
    </table>
    </form>

</body>
</html>