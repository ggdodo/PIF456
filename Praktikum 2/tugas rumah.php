<html>
<head> 
   <title>Menu Login</title> 
 		<script type="text/javascript">			
		function cekLogin(){
		if (login.nama.value == "")
		{
		alert("Username Harus di isi");
		return false;
		}
		if (login.password.value == "")
		{
		alert("Password Harus Di Isi");
		return false;
		}
		else
		return true; 
		}
		</script>
</head> 
<body>
<table width="300" align='center'> 
  <form id="login" method="post" action="proses.php" onsubmit="return cekLogin();"> 
   		<tr>		
		<td>Username</td>
		<td>: </td>
		<td><input type="text" name="nama" id="nama" placeholder="Masukkan nama" /></td>
		</tr>
		<tr>
		<td>Password</td>
		<td>:</td>
		<td><input type="password" id="password" name="password" placeholder="Masukan password" /></td> 	
		</tr>
		<tr>	  
		<td></td>
		<td><input type="submit" name="submit" value="Login" /></td>
		</tr>
  </form>
</body> 
</html> 
