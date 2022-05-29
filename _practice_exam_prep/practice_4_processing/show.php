<?php
foreach ($_COOKIE as $key => $value){
  if($key === "name"){
    print($value);
  }
  if($key === "bg_color"){
    ?><body bgcolor="<?php echo $value; ?>">

  <?php
  }
}

