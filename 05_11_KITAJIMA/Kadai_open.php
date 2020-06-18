<?php
// var_dump($_POST);
// exit();
// 出力用の文字列（ここに読み込んだデータをタグに入れた形式で追加していく）
$str = "";
// ファイルを開く処理
$file=fopen("result.csv","r");
// ファイルロックの処理
flock($file, LOCK_EX);
// ファイル書き込み処理
// 1行づつ取り出す
if($file){
  while($line = fgets($file)){
    $str .="<tr><td>{$line}</td></tr>";
  }
}
var_dump($file);
// ファイルアンロックの処理
flock($file, LOCK_UN);
// ファイル閉じる
fclose($file);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Let's art</title>

<body>
  <fieldset>
    <legend>TOPに戻る</legend>
    <a href="Kadai.php">入力画面</a>
    <!-- <table>
      <thead>
        <tr>
          <th>todo</th>
        </tr>
      </thead>
      <tbody>
        <h1><?= $str ?></h1>
      
      </tbody>
    </table> -->
    </fieldset>

    <div id="anychart-embed-samples-bct-tag-cloud-chart-11" class="anychart-embed anychart-embed-samples-bct-tag-cloud-chart-11">
  <script src="https://cdn.anychart.com/releases/8.7.1/js/anychart-base.min.js?hcode=a0c21fc77e1449cc86299c5faa067dc4"></script>
  <script src="https://cdn.anychart.com/releases/8.7.1/js/anychart-tag-cloud.min.js?hcode=a0c21fc77e1449cc86299c5faa067dc4"></script>
  <script src="https://cdn.anychart.com/releases/8.7.1/js/anychart-exports.min.js?hcode=a0c21fc77e1449cc86299c5faa067dc4"></script>
  <script src="https://cdn.anychart.com/releases/8.7.1/js/anychart-ui.min.js?hcode=a0c21fc77e1449cc86299c5faa067dc4"></script>
  <div id="ac_style_samples-bct-tag-cloud-chart-11" style="display:none;">
  html, body {
      width: 100%;
      height: 100%;
      margin: 0;
      margin-top:500px;
      padding: 0;
  }
  label {
      display: inline-block;
      margin: 10px 0 0 10px;
  }
  #container {
      position: absolute;
      width: 100%;
      top: 35px;
      bottom: 0;
  }
  </div>
  <script>(function(){
  function ac_add_to_head(el){
    var head = document.getElementsByTagName('head')[0];
    head.insertBefore(el,head.firstChild);
  }
  function ac_add_link(url){
    var el = document.createElement('link');
    el.rel='stylesheet';el.type='text/css';el.media='all';el.href=url;
    ac_add_to_head(el);
  }
  function ac_add_style(css){
    var ac_style = document.createElement('style');
    if (ac_style.styleSheet) ac_style.styleSheet.cssText = css;
    else ac_style.appendChild(document.createTextNode(css));
    ac_add_to_head(ac_style);
  }
  ac_add_link('https://cdn.anychart.com/releases/8.7.1/css/anychart-ui.min.css?hcode=a0c21fc77e1449cc86299c5faa067dc4');
  ac_add_style(document.getElementById("ac_style_samples-bct-tag-cloud-chart-11").innerHTML);
  ac_add_style(".anychart-embed-samples-bct-tag-cloud-chart-11{width:600px;height:450px;}");
  })();</script>
  <label><input onclick="tagCloudMode('spiral')" type="radio" name="type" checked>Spiral Mode</label>
  <label><input onclick="tagCloudMode('rect')" type="radio" name="type">Rectangle Mode</label>
  <div id="container"></div>
  <script>
  anychart.onDocumentReady(function () {
  
      // create data
      var data = "Yoga, simple, deep breathing " +
                 "In the forests of the night, " +
                 "Close you eyes and hear your voice of the heart " +
                 "Do you like yoga? " +
                 "Feel calm and kind heart" +
                 "Sometime they give us the relaxation! " +
                 "Please heal you self everyday " +
                 "Do you feel that airal yoga is fun? " +
                 "It always gives us healty and beauty " +
                 "Twist and fun fun fun! " +
                 "BE HAPPY,SMILE,LIVERTY " +
                 "No Yoga, No Life! " +
                 "I will pray for my loved one " +
                 "In what furnace was thy brain? " +
                 "Best healing in the world " +
                 "Do you know the mindfulness? " +
                 "How many yogini in Japan " +
                 "Enjoy diet, Enjoy fashion " +
                 "Challenge is very important for me " +
                 "Thanks for everything " +
                 "My yoga time with favorite wear " +
                 "No need to compare with ohters, " +
                 "I want to make beautiful world " +
                 "Is it positive way? " +
                 "<?php echo $file; ?>"+
                 "<?php echo $line; ?>"+
                 "<?php echo $line; ?>"+
                 "<?php echo $line; ?>";
                 console.log("$file.line5");
  
      // create a chart
      chart = anychart.tagCloud();
  
      // configure angles
      chart.angles([0]);
      console.log(chart);
  
      // set the parsing mode
      chart.data(data, {mode: "by-word"});
  
      // set the chart title
      chart.listen("chartDraw", function () {
        chart.title("Tag Cloud Chart: Mode = " +  chart.mode());
      });
  
      // set the container id
      chart.container("container");
  
      // initiate drawing the chart
      chart.draw();
  });
      
  // set the mode of the tag cloud
  function tagCloudMode(mode) {
    chart.mode(mode);
  }
  </script>
  </head>
  </body>
  </html>