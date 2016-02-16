<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    //この下にfor文を書いてください
  for($b = 1; $b <= 1000; $b++ )
  	if($b % 3 == 0){
  		echo $b;
  		echo "<br />";
  		continue;
  		// echo "<br />";
  	}
    
    
  ?>

</body>
</html>