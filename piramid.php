<?php
	$star=10;
	for($a=1; $a<=$star; $a++){
	for($i=1; $i<=$a; $i++){
		echo " &nbsp";
	}
	for($c=$star; $c>=$a; $c-=1){
		echo "*";
	}
	echo "<br>";
	}
?>
<?php
	$a = 10;
while ($a > 1) {
  $b = $a;
  while ($b >= 1) {
    echo "*";
    $b = $b - 1;
  }
  echo "<br>";
  $a = $a - 2;
}
?>
<?php
$jumlah=10;
for($a=1; $a<=$jumlah; $a++){
    for($b=1; $b<=$a; $b++){
        echo '&nbsp';
    }
    for($c=$jumlah; $c>=$a; $c-=1){
        echo '1';
    }
    echo "<br/>";
}
?>