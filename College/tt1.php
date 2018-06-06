<?php
$div = '$_POST["div"]';
if ($div = 'a'){
  include('adiv.html');
}
else if($div = 'b'){
  include('bdiv.html');
}
else{
  include('cdiv.html');
}
 ?>
