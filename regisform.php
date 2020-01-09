<?php
error_reporting(E_ALL^(E_NOTICE|E_WARNING));
if ($_GET['act']=="simpan") {
include "config.php";
//PERINTAH MENGECEK AGAR TIDAK TERDAPAT USER YANG SAMA
$cek_user=mysql_num_rows(mysql_query("SELECT * FROM user WHERE id_user='$_POST[id_user]'"));
if ($cek_user > 0) {
        echo '<script language="javascript">
              alert ("User Sudah Ada Yang Menggunakan");
              window.location="index.php";
              </script>';
              exit();
}
else {
$level='user';
$password= $_POST["password"];
mysql_query("INSERT INTO user (username, 
							   nama,
                               alamat,
                               kodepos,
                               email,
                               jk,
                               telpon,
                               tmpt_lahir,
                               tgl_lahir,
                               level,
                               password)
                        Values ('$_POST[username]',
								'$_POST[nama]',
                                '$_POST[alamat]',
                                '$_POST[kpos]',
                                '$_POST[jk]',
                                '$_POST[email]',
                                '$_POST[hp]',
                                '$_POST[tempatlahir]',
                                '$_POST[tanggallahir]',
                                '$level',
                                '$password')");
        echo '<script language="javascript">
              alert ("Registrasi Berhasil Di Lakukan");
              window.location="loginuser.php";
              </script>';
              exit();
              }
    }
?>
<html>
<head>
	<title>Form Registrasi</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<br/>
	<br/>
	<center><h2>REGISTRASI USER</h2></center>	
	<br/>
	<div class="login">
	<br/>
<form name="form1" method="post" action="regisform.php?act=simpan">
	 <tr bgcolor="#CCCCCC">
	 <label>Username:</label>
	 <input type="text" name="username" id="username" />
     </tr>
     <tr bgcolor="#CCCCCC">
	 <label>Nama:</label>
	<input name="nama" type="text" id="nama"></td>
     </tr>
     <tr bgcolor="#CCCCCC">
     <label>Alamat:</label>    
     <textarea name="alamat" id="alamat"></textarea></td>
     </tr>
     <tr bgcolor="#CCCCCC">
         <label>Kode Pos:</label>
         <input name="kpos" type="text" id="kpos"></td>
         </tr>
         <tr bgcolor="#CCCCCC">
     <label>Jenis Kelamin:</label>
      <td>: 
      <select name="jk" id="jk">
      <option value="Laki-Laki">Laki-Laki</option>
      <option value="perempuan" selected>Perempuan</option>
     </select></td>
         </tr>
		 <tr>
         <tr bgcolor="#CCCCCC">
        <td><div align="left"><label>Tempat Lahir:</label></div></td>
         <td>
          <input name="tempatlahir" type="text" id="email3"></td>
         </tr>
        <tr bgcolor="#CCCCCC">
        <label>Tanggal Lahir:</label><td>
		<label>*dd/mm/yyyy</label>
        <input name="tanggallahir" type="text" id="email4">
        
         </tr>
    <tr bgcolor="#CCCCCC">
      <label>Email:</label>
      <td>: 
      <input name="email" type="text" id="email"></td>
    </tr>
    <tr bgcolor="#CCCCCC">
     <label>Nomor Henpon:</label>
      <input name="hp" type="text" id="hp"></td>
    </tr>
    <tr bgcolor="#CCCCCC">
     <label>Password:</label>
      <input name="password" type="password" id="password"></td>
    </tr>
    <tr bgcolor="#CCCCCC">
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Register">
      <input type="reset" name="Submit2" value="Reset"></td>
    </tr>
  </table>
</form>