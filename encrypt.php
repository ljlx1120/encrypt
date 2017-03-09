<?php
  $phrase_one = $_GET["phrase_one"];
  $phrase_two = $_GET["phrase_two"];
  $phrase_three = $_GET["phrase_three"];
  $full_phrase = $phrase_one . " " . $phrase_two . " " . $phrase_three . ".";
  $new_phrase = encrypt($phrase_one,$phrase_two,$phrase_three);

  function encrypt ($str_one, $str_two, $str_three) {
    $rev = strrev($str_one);
    $cap = strtoupper($str_two);
    $rev_cap = strrev(strtoupper($str_three));
    $new_str = $rev . " " . $cap . " " . $rev_cap;
    return $new_str;
  };
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Encrypt</title>
  </head>
  <body>
    <h2>Original phrase is:</h2>
    <h3><?php echo $full_phrase; ?></h3>
    <h2>New phrase is:</h2>
    <h3><?php echo $new_phrase; ?></h3>
  </body>
</html>
