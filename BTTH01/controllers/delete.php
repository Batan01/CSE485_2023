<?php include "../includes/header.php" ;
    require "../views/delete_view.php";
    ?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file = "../Student_list.txt"; 
    $id=$_POST["id"];
    $name=$_POST["name"];
    $grade=$_POST["grade"];
    $age=$_POST["age"];
    $delete_data ="$id,$name,$age,$grade"; 
    $content = file_get_contents($file); 
    // echo "Dữ Liệu trước:<pre>";
    //    print_r($content);
    // echo "<pre>";
    $new_content = str_replace($delete_data, "", $content);
    file_put_contents($file, $new_content);
    // echo "Dữ liệu sau:<pre>";
    //    print_r($new_content);
    // echo "<pre>";
    
  
}

?>
<?php include "../includes/footer.php" ?>