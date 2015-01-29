<!--
Need to look into
$_ variables from php
-->
<pre>

<?
/*
$i = 1;
while ($i <= 10) {
  echo $i++;
}

echo "<br /><br />";
$i = 1;

while ($i <= 10):
  echo $i++;
endwhile;

echo "<br /><br />";
$i = 1;

do {
  echo $i++;
} while ($i <= 10);

echo "<br /><br />";

for ( $i = 0; $i <= 10; $i++ ) {
  echo " ".$i;
}
*/

/*
$arr = array(1,2,3,4);

foreach( $arr as &$value) {
  echo $value." ";
}

echo "<br /><br />";

foreach( $arr as &$value) {
  echo $value." * 2 = ";
  $value *= 2;
  echo $value."<br />";
}

echo "<br /><br />";

foreach( $arr as &$value) {
  echo $value." ";
}
*/
/*
$x = 10;
if ( $x > 10 ) {
  echo '$x > 10';
}
if ( $x < 10 ) {
  echo '$x < 10';
}
if ( $x == 10 ) {
  echo '$x == 10';
}
*/

/*
$x = 12;

echo 'if <br />';

if ( $x > 10 ) {
  echo '$x > 10 <br />';
}
else if ( $x < 10 ) {
  echo '$x < 10 <br />';
}
else {
  echo '$x == 10 <br />';
}

echo '<br />switch <br />';

switch ($x) {
  case 9:
    echo '$x == 9 <br />';
    break;
  case 10:
    echo '$x == 10 <br />';
    break;
  case 11:
    echo '$x == 11 <br />';
    break;
  default:
  echo '$x is not 8, 10, or 11 <br />';
}
*/

$name = "Heath";
if ( $name == "Heath") {
  echo "Hello $name";
}

echo "<br /><br />";

$names = array("Rag", "Nar", "Black", "Mane");
foreach( $names as $key => $value ) {
  echo "Hello $value ($key)<br />";
}

echo "<br /><br />";

for( $i = 0; $i < 4; $i++ ) {
  echo "Hello $names[$i] ($i)<br />";
}

?>

</pre>
