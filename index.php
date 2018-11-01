<!DOCTYPE html>
<html>
<meta html-equyv="Content-type" content="text/html; charset=utf-8"/>
<head>
    <style>
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<h2 style="color:blue;"> Từ Điển Anh - Việt </h2>
<form method="post">
    <input type="text" name="search" placeholder="Nhập từ cần tìm"/>
    <input style="color:red;" type="submit" id="submit" value="Tìm"/>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dictionary = array(
        "hello"=>"xin chào",
        "awesome"=>"quá đỉnh",
        "book"=>"quyển sách",
        "cool"=>"tuyệt vời");
    $searchword = $_POST["search"];
    $flag = 0;
    foreach($dictionary as $word => $description) {
        if($word == $searchword){
            echo "Từ: " . $word . ". <br/>Nghĩa của từ: " . $description;
            echo "<br/>";
            $flag = 1;
        }
    }
    if($flag == 0){
        echo "Không tìm thấy từ cần tra.";
    }
}
?>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: alexnguyen
 * Date: 01/11/2018
 * Time: 14:52
 */
