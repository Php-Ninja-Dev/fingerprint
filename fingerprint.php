<?
function fingerPrint($result){
	// Remove all accents. Compatibility for Spanish strings
	$result = removeAccents($result);
  // Every char to lowercase
	$result = strtolower($result);
  // Remove all chars that are not letters
  $result = preg_replace('/[^ \w]+/', '', $result);
	$words = explode(" ",$result);
  // remove duplicates
  $words = array_unique($words);
  // the order of terms is important
  sort($words);
	// "-" to separate terms, but you can get rid of this
	return implode("-",$words);
}


function removeAccents($s) {
    $replace = array(
        'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'Ae', 'Å'=>'A', 'Æ'=>'A', 'Ă'=>'A',
        'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'ae', 'å'=>'a', 'ă'=>'a', 'æ'=>'ae',
        'þ'=>'b', 'Þ'=>'B',
        'Ç'=>'C', 'ç'=>'c',
        'È'=>'E', 'É'=>'E', 'Ê'=>'E', 'Ë'=>'E',
        'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 
        'Ğ'=>'G', 'ğ'=>'g',
        'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'İ'=>'I', 'ı'=>'i', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i',
        'Ñ'=>'N',
        'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'Oe', 'Ø'=>'O', 'ö'=>'oe', 'ø'=>'o',
        'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
        'Š'=>'S', 'š'=>'s', 'Ş'=>'S', 'ș'=>'s', 'Ș'=>'S', 'ş'=>'s', 'ß'=>'ss',
        'ț'=>'t', 'Ț'=>'T',
        'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'Ue',
        'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ü'=>'ue', 
        'Ý'=>'Y',
        'ý'=>'y', 'ý'=>'y', 'ÿ'=>'y',
        'Ž'=>'Z', 'ž'=>'z'
    );
    return strtr($s, $replace);
}
