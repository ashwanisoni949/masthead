function narcissistic(int $number): bool {
  $array   = str_split($number);
  $nlenght = count($array);
  $sum = 0;

  foreach($array as $n){
    $sum += pow((int)$n, $nlenght);
  }	
	
  return $sum==$number;
}
© 2022 GitHub, Inc.
Terms
Privacy
Security
Status
