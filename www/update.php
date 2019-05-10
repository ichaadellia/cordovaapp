<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $nama=$_POST['nama'];
 $alamat=$_POST['alamat'];
 $no_hp=$_POST['no_hp'];
  $email=$_POST['email'];
 
 $q=mysqli_query($con,"UPDATE `pelanggan` SET `id`='$id',`nama`='$nama',`alamat`='$alamat',`no_hp`='$no_hp',`email`='$email' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>