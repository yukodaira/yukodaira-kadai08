<?php
function h($str){
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

function db_conn() {
    try {
        $db_name = 'gs_chilldb';    //データベース名
        $db_id   = 'root';      //アカウント名
        $db_pw   = 'root';      //パスワード：XAMPPはパスワード無しに修正してください。
        $db_host = 'localhost'; //DBホスト
        $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
        return $pdo;
    } catch (PDOException $e) {
        exit('DB Connection Error:' . $e->getMessage());
    }   
}
// function db_conn(){} は任意に決められる。

//SQLエラー関数：sql_error($stmt)
function sql_error ($stmt){
    $error = $stmt->errorInfo();
    exit('ErrorMessage:'.$error[2]);    
}

//リダイレクト関数: redirect($file_name)
function redirect($file_name){
    header('Location: ' . $file_name);
    exit();
}
?>
// 引き数の名前はなんでも良い。