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

    <?php echo form_open('Member/update'); ?>
    <table>
        <tr>
         <td>ID : </td>
         <td><input type="text" name="id" required="" /></td>  
     </tr>
        <tr>
         <td>UserName : </td>
         <td><input type="text" name="username" required="" /></td>  
     </tr>
     <tr>
         <td>PassWord : </td>
         <td><input type="text" name="password" required="" /></td>
     </tr>
     <td>ชื่อ : </td>
     <td><input type="text" name="FName" required="" /></td>  
 </tr>
 <tr>
    <td>นามสกุล : </td>
    <td><input type="text" name="LName" required="" /></td>
</tr>
</tr>
<td>ที่อยู่ : </td>
<td><input type="textarea" name="Address" /></td>

</tr>
<td>เบอร์โทร : </td>
<td><input type="text" name="Phone" value="" OnKeyPress="return chkNumber(this)" maxlength="10" /></td>

</tr>
<td>E-Mail : </td>
<td><input type="text" name="Email" maxlength="50" /></td>

</tr>
<tr>
         <td colspan="1"></td>
         <td><input type="submit" value="ok"/></td>
     </tr>
 </table>
</form>

</body>
</html>