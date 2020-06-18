<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to Yoga Stadio Yu Fleur</title>
</head>

<body>
  <!-- formにはaction, method, nameを設定！ -->
  <div class="contact">
        <h3 class="contact_title" id="contact_koko"><Table>Yoga Diary</Table></h3>
    </div>

  <form action="Kadai_confirm.php" method="POST">
    <fieldset>
    <legend>Queationaire of Yoga</legend>

<!-- <p>デフォルト：
<label><input type="radio" name="q1" value="はい">はい</label>
<label><input type="radio" name="q1" value="いいえ">いいえ</label>
<label><input type="radio" name="q1" value="どちらでもない">どちらでもない</label>
</p>

<p>選択済み：
<label><input type="radio" name="q2" value="はい">はい</label>
<label><input type="radio" name="q2" value="いいえ" checked>いいえ</label>
<label><input type="radio" name="q2" value="どちらでもない">どちらでもない</label>
</p> -->

      <div>
        Name: <input type="text" name="Name">
      </div>
        Age: <input type="text" name="Age">
      <div>
        date <input type="date" name="day1"> 
      </div>
      <div class="formA">
        <p>あなたにとってのYogaは?</p>
                <li><input type="checkbox" name="Choice[]" id="checkbox1" value="Relax">
                    <label class="label1" for="checkbox1">Relax</label>
                </li>
                <li><input type="checkbox" name="Choice[]" id="checkbox2" value="Happy">
                    <label class="label2" for="checkbox2">Happy</label>
                </li>
                <li><input type="checkbox" name="Choice[]" id="checkbox3" value="Mindful">
                    <label class="label3" for="checkbox3">Mindful</label>
                </li>
                <li><input type="checkbox" name="Choice[]" id="checkbox4" value="Refresh">
                    <label class="label4" for="checkbox4">Refresh</label>
                </li>
                <li><input type="checkbox" name="Choice[]" id="checkbox5" value="Diet">
                    <label class="label5" for="checkbox5">Diet</label>
                </li>
                <li><input type="checkbox" name="Choice[]" id="checkbox6" value="Positive">
                    <label class="label6" for="checkbox6">Positive</label>
                </li>
                </li>
                <li><input type="checkbox" name="Choice[]" id="checkbox7" value="Challange">
                    <label class="label7" for="checkbox7">Challange</label>
                </li>
                <li><input type="checkbox" name="Choice[]" id="checkbox8" value="Fun">
                    <label class="label8" for="checkbox8">Fun</label>
                </li>
                <li><input type="checkbox" name="Choice[]" id="checkbox9" value="Healing">
                    <label class="label9" for="checkbox9">Healing</label>
                </li>
                <li><input type="checkbox" name="Choice[]" id="checkbox10" value="Healthy">
                    <label class="label10" for="checkbox10">Healthy</label>
                </li>
                <li><input type="checkbox" name="Choice[]" id="checkbox11" value="Beauty">
                    <label class="label12" for="checkbox11">Beauty</label>
            </div>
      </div>
      <div>
        <button>submit</button>
      </div>
    </fieldset>
    <a href="Kadai_open.php">Yoga Worldへ</a>
  </form>
</body>

</html>