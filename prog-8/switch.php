<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    //この下で$numに好きな数字を代入してください
    $num = 10 ;
    $remainder = $num % 3 ;
    switch($remainder){
    	case 0 :
    	echo '大吉です。';
    	break;
    	
    	case 1 :
    	echo '中吉です。';
    	break;

    	case 2 :
    	echo '小吉です。';
    	break;
    	
    	default:
    	echo '凶です。';
    	break;

      }


    
  ?>

</body>
</html>