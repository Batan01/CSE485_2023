<?php include "../includes/header.php"?>
<?php require "../views/create_view.php" ;
    require "list_id.php";
    ?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file="../Student_list.txt";
   $name=$_POST["name"];
   $id=$_POST["id"];
   $age=$_POST["age"];
   $grade=$_POST["grade"];
   if(strpos($id_string,$id)!==false){?>
    <div class="alert alert-success" role="alert">
        Trùng id vui lòng kiểm tra lại!
    </div>
<?php  }else {
   $newdata="\n$id,$name,$age,$grade";
   
   $file_new= fopen($file, "a");
   fwrite($file_new,$newdata);
   fclose($file_new);
   $success = true;
   }
}
?>
   <?php if (isset($success) && $success): ?>
    <div class="alert alert-success" role="alert">
        Sinh viên đã được thêm thành công!
    </div>
<?php endif; ?>
<?php include "../includes/footer.php"?>