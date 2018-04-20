<?php
if (isset($this->session->userdata['logged_in']))
{
    $username = ($this->session->userdata['logged_in']['username']);
} else
{
    header("location:" . site_url() . "/login/login");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
    $id = $_GET['id']; 
?>
<?php echo form_open('Admin/updateAdmin'); ?> </h1>
	<table>
        <tr>
             <td>ID : </td>
             <td><input type="text" name="id" required="" value=<?php echo $id; ?>  readonly /></td>
        </tr>
    	<tr>
        	<td>UserName : </td>
             <td><input type="text" name="username" required="" /></td>
        </tr>
        <tr>
        	<td>PassWord : </td>
            <td><input type="text" name="password" required="" /></td>
           
        </tr>
              <tr>
        	<td colspan="1"></td>
            <td><input type="submit" value="แก้ไข"/></td>
        </tr>
    </table>
    </form>

</body>
</html>