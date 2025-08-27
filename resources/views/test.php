<!DOCTYPE html>
<html>
<head>
         <title>test</title>
</head>
<body>
<p>a: <?=$a?></p>
<p>b: <?=$b?></p>
<p>Global Var: <?=$global_var?></p>
<?php if (isset($composer_data)) { ?>
    <p>Composer Data: <?=$composer_data?></p>
<?php } ?>
</body>
</html>