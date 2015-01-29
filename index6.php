<?
function sayHi($name) {
  echo "Hi $name!<br /><br />";

  function getMeANumber() {
    $num = 42;
    return $num;
  }

  $retval = getMeANumber();

  return $retval;
}

function howdy() {
  return "Howdy!";
}
?>

<?
$returnStuff = sayHi("Heath");
echo "<br /><br />";
echo "return is [$returnStuff]";
echo "<br /><br />";

for ( $i = 0; $i <= 10; $i++ ) {
   echo "!".howdy();
}

?>
