<?php
    $file = '../Student_list.txt';
    $lines = file($file); 
    $id_list = array(); 
    $arrdata= array();
    foreach ($lines as $key=>$val) {
        $data = explode(',', $val);
        array_push($arrdata,$data);
        $id = $data[0];
        array_push($id_list, $id); 
    }
    $id_string = implode('', $id_list);
    $id_list_check=implode(',', $id_list)
    // print_r($id_string); 
    // print_r($lines[0]);
    // echo"<pre>";
    // print_r($arrdata);
    // echo"<pre>";
    // print_r($arrdata[0][1])

?>