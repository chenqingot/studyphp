<?php
/**
 * Created by PhpStorm.
 * User: j-qinche
 * Date: 2019/1/24
 * Time: 16:54
 */

if(is_uploaded_file($_FILES['userfile']['tmp_name'])){
    echo '上传成功';
    move_uploaded_file($_FILES['userfile']['tmp_name'],'uploads/'.$_FILES['userfile']['name']);
}
print_r($_FILES);