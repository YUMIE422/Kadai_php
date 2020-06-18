<?php
// データを受け取ると，受け取ったデータを元に処理を実行し，htmlのデータを返す
// まずデータの受取を確認
var_dump($_POST);
// exit();

// name属性の値を指定してデータを受け取る
$Name =$_POST["Name"];
// exit();
$Age=$_POST["Age"];
if (isset($_POST["Choice"]) && is_array($_POST["Choice"])) {
// $Choice=$_POST["Choice"];
$Choice = implode("、", $_POST["Choice"]);
}
$write_data =array($Name, $Age, $Choice);

// ファイルを開く処理
$file = fopen("result.csv", "a");

// ファイルロックの処理
flock($file, LOCK_EX);

// ファイル書き込み処理
	fputcsv($file, $write_data);

// ファイルアンロックの処理
flock($file, LOCK_UN);

// ファイルを閉じる処理
fclose($file);

// 入力画面へ移動
header("Location:Kadai.php");


// 上記の変数をhtmlに埋め込んで表示する

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yoga Stadio Yu Fleur</title>
</head>

<body>
  <!-- formにはaction, method, nameを設定！ -->
  <div class="contact">
  <!--体験フォーム入力-->
        <h3 class="contact_title" id="contact_koko"><Table>Yoga Diary</Table></h3>
    </div>

    <form action="Kadai.php" method="post" >
    <fieldset>
      <legend><h2>Answer List</h2></legend>
      <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Age</th>
          <th>Choice</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?= $Name ?><td>
          <td><?= $Age ?></td>
          <td><?= $Choice ?></td>
        </tr>
      </tbody>
    </table>
  </fieldset>
  
    </fieldset>
  </form>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js"></script>
    <script src="Kadai_confirm.js"></script>

    <title>chart of results</title>

<body>
<!--ここにグラフが挿入されます-->
<div style="width: 100%; height: 100%;">
    <canvas id="myChart" style="width: 100%; height: auto;"></canvas>
</div>

</body>

</html>