<?php
if ($_FILES["file"]["error"]>0)
    {
       echo "error:" .$_FILES["files"]["error"];
    }
    else{
        echo"檔案名稱:" .$_FILES["file"]["name"]."<br/>";
        echo"檔案類型:" .$_FILES["file"]["type"]."<br/>";
        echo"檔案大小:" .($_FILES["file"]["size"]/1024)."<br/>";
        echo"暫存名稱:" .$_FILES["file"]["tmp_name"]."</br>";
$filename=$_FILES["file"]["name"];
move_uploaded_file($_FILES["file"]["tem_name"],"upload/".$filename);
echo '<img src="upload/'.$filename.'"/>';
    }
    function _get($str){
        $val = !empty($_GET[$str]) ? $_GET[$str] : null;
        return $val;
    }
?>