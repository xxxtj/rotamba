<?
class Math{
	public function kvadrat($a){
	return $a*$a;
	}
	public function minus($a){
	$b = 10-$a;
	 return $b;
	}
}

$test = new Math();
echo $test->kvadrat(5);
?>