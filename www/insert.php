<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $id=$_POST['id'];
 $nama=$_POST['nama'];
 $alamat=$_POST['alamat'];
 $no_hp=$_POST['no_hp'];
  $email=$_POST['email'];
 
 $q=mysqli_query($con,"INSERT INTO `pelanggan` (`id`,`nama`,`alamat`,`no_hp`,`email`) VALUES ('$id','$nama','$alamat','$no_hp','$email')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>