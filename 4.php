<?php
$koneksi=mysqli_connect('localhost','root','','berita') or die('Error Connection Network');
?>

<html>
<style>
        .tepi{
            border-style: dashed;
        }
    </style>

<head>
       <title>Test Dumbways.id</title>
       <marquee><font size="10" , color = "red">Vian Alfalah
        </font></marquee>
</head>
<body class="tepi" , style = "background-color : grey;">
<br>
<h1 align="center"><font color ="white"> <u>Semua Berita</u></font> </h1>
<form>
    <table align="center" border="1" style = "background-color : yellow;">
        <tr>
            <td><b>Title</b></td>
            <td><b>Gambar</b></td>
            <td align="center"><b>Deskripsi</b></td>
            <td>
            

</tr>
<?php
$query = mysqli_query($koneksi, "SELECT * FROM news");
while($row = mysqli_fetch_array($query)){
?>

<tr>
            <td><?php echo $row ['title'] ?></td>
            <td><img src="img/<?php echo $row['image'] ?> width="70" height="90"> </td>
            <td><?php echo $row ['deskripsi'] ?></td>
            <td>
        
</tr>
<?php }

?>
</table>
</form>
<hr/>

<h1><u> <font color = "white" >Tambah User </u></font></h1>
<form action ="" method="post" enctype="multipart/form-data">
<table style = "background-color : green;" >
    <tr>
    <td><b>ID</b></td>
    <td>:</td>
    <td><input type="text" name="id" /></td>
    </tr>
    <tr>
    <td><b>Nama</b></td>
    <td>:</td>
    <td><input type="text" name="name"/></td>
    </tr>
    <tr>
    <td><b>Email</b></td>
    <td>:</td>
    <td><input type="email" name="email"/></td>
    </tr>
    <tr>
    <td><b>Role</b></td>
    <td>:</td>
    <td>
    <input type="radio" name="role" value="Admin" checked />Admin
    <input type="radio" name="role" value="User" checked />User
    </td>
    </tr>
    <tr>
    <td></td>
    <td></td>
    <td><input type="submit" name="tambah_user" value="Tambah User"/></td>
    </tr>
</table>
</form>
<?php
if(isset($_POST['tambah_user'])){
    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    
    $insert = mysqli_query($koneksi, "INSERT INTO user VALUES ('$id','$name','$email','$role')");
     
    
    if($insert){
        header('location: 4.php');
    }
}
?>

<h1 ><u><font color="white"> Tambah Berita</u></font> </h1>
<form action ="" method="post" enctype="multipart/form-data">
<table style = "background-color : green;">
    <tr>
    <td><b>ID</b></td>
    <td>:</td>
    <td><input type="text" name="id"/></td>
    </tr>
    <tr>
    <td><b>Title</b></td>
    <td>:</td>
    <td><input type="text" name="title"/></td>
    </tr>
    <tr>
    <td><b>Gambar</b></td>
    <td>:</td>
    <td><input type="file" name="image"/></td>
    </tr>
    <tr>
    <td><b>Deskripsi</b></td>
    <td>:</td>
    <td><textarea rows="5" cols="40" class="span12" name="deskripsi" required></textarea>  </td>
    </tr>
    <tr>
    <td><b>Tanggal Buat</b></td>
    <td>:</td>
    <td><input type="text" name="create_time"/></td>
    </tr>
    <tr>
    <td><b>User ID</b></td>
    <td>:</td>
    <td><input type="text" name="user_id"/></td>
    </tr>
    <tr>
    <td></td>
    <td></td>
    <td><input type="submit" name="tambah_berita" value="Tambah Berita"/></td>
    </tr>
</table>
</form>
<?php
if(isset($_POST['tambah_berita'])){
    
    $id = $_POST['id'];
    $title = $_POST['title'];
    $image = $_FILES['image']['name'];
   
    $deskripsi = $_POST['deskripsi'];
    $create_time = $_POST['create_time'];
    $user_id = $_POST['user_id'];
    
    $insert = mysqli_query($koneksi, "INSERT INTO news VALUES ('$id','$title','$image','$deskripsi','$create_time','$user_id')");
     
    
    if($insert){
        header('location: 4.php');
    }
}
?>



</body>
</html>