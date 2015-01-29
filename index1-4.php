<!--
Need to look into
$_ variables from php
-->
<pre>

<?
$name='John Doe';
echo '$name';



echo "hello $name<br /><br />";
echo 'hello $name<br /><br />';

$arr = array(2 => "test", "hot" => "chocolate", 3 => 42);

//echo  $arr[5]."<br />";
//echo  $arr["hot"]."<br />";
echo "Basic Array<br />";
echo print_r($arr);
echo "<br /><br />";

array_push( $arr, "33" ); array_push( $arr, "33" ); array_push( $arr, "33" );

echo "Updated Array<br />";
echo print_r($arr);
echo "<br /><br />";

echo "Array values count<br />";
echo print_r( array_count_values( $arr ) );
echo "<br /><br />";

echo "Array keys<br />";
echo print_r( array_keys( $arr ) );
echo "<br /><br />";

echo "Array values<br />";
echo print_r( array_values( $arr ) );
echo "<br /><br />";

echo "Sorted (sort()) Array by SORT_STRING<br />";
echo print_r($arr);
sort( $arr, SORT_STRING );
echo "<br /><br />";
echo print_r($arr);
echo "<br /><br />";

echo "Sorted (sort()) Array by SORT_NUMERIC <br />";
echo print_r($arr);
sort( $arr, SORT_NUMERIC  );
echo "<br /><br />";
echo print_r($arr);
echo "<br /><br />";
?>

</pre>

<!--
<?
  $dynPart = "work";
  $dynObject = "Address";

  $homeAddress = "3804";
  $workAddress = "none";

  echo "dynPart=".$dynPart."<br />";
  echo "dynObject=".$dynObject."<br />";
  echo ${$dynPart.$dynObject}
?>
-->

<!--
<?php echo phpinfo(); ?> <br />
<? echo time() ?> <br />
<?php echo "test"." stuff"; ?> <br />
<?="Hello World"?><br />
-->
