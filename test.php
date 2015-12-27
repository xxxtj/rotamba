<?
class Math{
	public function kvadrat($a){
	return $a*$a;
	}
	public function minus($a){
	$b = 10-$a;
	 return $b;
	}
	
	public function cos($a){
	if ($a == '1/2'){
	echo "60";
	}
	}
}

$test = new Math();
echo $test->kvadrat(16.56);
?>