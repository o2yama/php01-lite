<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./style.css">
  <title>ex0</title>
</head>

<body>
  <h1>サイコロ</h1>

  <?php

  $dice1 = new Dice();
  $dice2 = new Dice();

  $result1 = $dice1->roll();
  $result2 = $dice2->roll();

  ?>

  <p>サイコロの目は「<?php echo $result1  ?>」「<?php echo $result2 ?>」でした！<?php echo isSameNum($result1, $result2) ?></p>
  <a href="<?php $result1 = $dice1->roll();
            $result2 = $dice2->roll(); ?>">もう一度!</a>
</body>

</html>

<?php

class Dice
{
  function roll()
  {
    return rand(1, 6);
  }
}

function isSameNum($i, $j)
{
  if ($i == $j) {
    return 'ゾロ目です！';
  } else {
    return '';
  }
}
?>