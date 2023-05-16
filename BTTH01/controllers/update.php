<?php 
    include "../includes/header.php";
    require "../views/update_view.php";
    require "list_id.php";
?>

<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $file = "../Student_list.txt"; 
        $id = $_POST["id"];
        $pos=strpos($id_string,$id);
        // print_r($id_string);
        // print_r($pos);
        $name = ($_POST["name"]=="")?$arrdata[$pos][1]:$_POST["name"];
        $age = ($_POST["age"]=="")?$arrdata[$pos][2]:$_POST["age"];;
        $grade = ($_POST["grade"]=="")?$arrdata[$pos][3]:$_POST["grade"];
        // print_r($arrdata[$pos][1]);
        // print_r($arrdata[$pos][2]);
        // print_r($arrdata[$pos][3]."../");
        
        if(strpos($id_list_check, $id) === false) {
        
?>
            <div class="alert alert-danger" role="alert">
                Không tìm thấy thông tin sinh viên!
            </div>
<?php
        } else {
            $new_id = ($id=== $_POST["new_id"] || $_POST["new_id"] == "") ? $id : $_POST["new_id"];
            if($new_id==$id){

            }else if( strpos($id_list_check, $new_id) !== false) {
               
?>
                <div class="alert alert-danger" role="alert">
                    ID đã bị trùng !
                </div>
<?php           exit();
            } 
                $new_name = ($name === $_POST["new_name"] || $_POST["new_name"] == "") ? $name : $_POST["new_name"];
                $new_age = ($age === $_POST["new_age"] || $_POST["new_age"] == "") ? $age : $_POST["new_age"];
                $new_grade = ($grade === $_POST["new_grade"] || $_POST["new_grade"] == "") ? $grade : $_POST["new_grade"];
                // print_r($new_id."***");
                $content=file_get_contents($file);
                $delete_data = "$id,$name,$age,$grade"; 
                $update_data = "$new_id,$new_name,$new_age,$new_grade";
                $new_content = str_replace($delete_data, $update_data, $content);
                // print_r($update_data);
                // print_r($delete_data);
                // print_r($content);
                // print_r($new_content);
                // print_r($id_string);
                file_put_contents($file, $new_content);
                
?>
                <div class="alert alert-success" role="alert">
                    Cập nhật thông tin sinh viên thành công!
                </div>
<?php
            }
        }
?>

<?php include "../includes/footer.php" ?>
