<?php

    //var_dump($_POST);
    //exit();

    // データの受け取り
    $value = $_POST['bloodtype'];
      
    // データ1件を1行にまとめる（最後に改行を入れる）
    $write_data = "{$value}\n";
    // ファイルを開く．引数が`a`である部分に注目！
    $file = fopen('data/bloodtype.txt', 'a');
    // ファイルをロックする
    flock($file, LOCK_EX);

    // 指定したファイルに指定したデータを書き込む
    fwrite($file, $write_data);

    // ファイルのロックを解除する
    flock($file, LOCK_UN);
    // ファイルを閉じる
    fclose($file);

  
    // データ入力画面に移動する
    header("Location:bloodtype_input.php");
    exit();

?>
