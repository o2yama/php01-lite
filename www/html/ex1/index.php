<?php
$text = $_POST['text'];
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>ex1</title>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <h1>▶️変換したい文字列（制限値：1024byte）</h1>
  <form method="POST">
    <textarea type='text' id='before' name="text"><?php echo $text; ?></textarea>
    <button type='submit'>⬇︎変換する⬇︎</button>
  </form>

  <h1>▶️変換された文字列</h1>
  <div id='after'>
    <?php
    if (strlen($text) > 1024) {
      echo '制限値オーバー!!!!<br>';
      echo 'もっと少ない文字数でやってね。<br>';
    } else {
      echo strtoupper($text);
    }
    ?>
  </div>
</body>

</html>