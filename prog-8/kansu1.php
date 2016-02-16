<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    //この下に関数getRectangleAreaを作ってください
    //引数として$heightと$widthを受け取り、
    //その面積をreturnします

    function getRectangleArea($height, $width)
    {
      return $height * $width;
    }

    //この下で$rectangle_areaに高さが5、幅が10の長方形の面積を、
    //getRectangleArea関数を用いて代入してください

    $rectangle_area = getRectangleArea(5, 10);

    //この下に関数printAreaを作ってください
    //引数として$areaを受け取り、
    //"面積は".$area."です。"とechoします

    function printArea($area)
    {
      echo '面積は'.$area.'です。';
    }

    //この下で$rectangle_areaの面積を、
    //printArea関数を用いてechoしてください。

    printArea($rectangle_area);

  ?>

</body>
</html>
