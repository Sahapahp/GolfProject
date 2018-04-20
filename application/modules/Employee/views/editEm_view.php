<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

    <?php echo form_open('Employee/updateEmp'); ?>
    <table>
        <!-- <tr>
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
       </tr> -->
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
        <td>ตำแหน่ง : </td>
        <td> <select name ="Position">
          <option value="0 ">พนักงาน</option>
          <option value="1">แคดดี้</option>
      </select></td>
  </tr>
  <tr>
   <td colspan="1"></td>
   <td><input type="submit" value="ok"/></td>
</tr>
</table>
</form>

</body>
</html>