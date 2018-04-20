<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

    <?php echo form_open('Employee/update'); ?>
    
    <form>
        <tr>
         <td>ID : </td>
         <td><input type="text" name="IdEmp" required="" /></td>  
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
<tr>
         <td colspan="1"></td>
         <td><input type="submit" value="ok"/></td>
     </tr>
</form>

</body>
</html>