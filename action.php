<?php 
function convertXmlToCsvFile($xml_file_input, $csv_file_output) {
	$xml = simplexml_load_file($xml_file_input);
	
	$output_file = fopen($csv_file_output, 'w');
	
	$header = false;
	
	foreach($xml as $key => $value){
		if(!$header) {
			fputcsv($output_file, array_keys(get_object_vars($value)));
			$header = true;
		}
		fputcsv($output_file, get_object_vars($value));
	}
	return true;
}

  
function string_to_ascii($string)
{
    $ascii = NULL;
 
    for ($i = 0; $i < strlen($string); $i++) 
    { 
    	$ascii += ord($string[$i]); 
    }
 
    return($ascii);
}	
	 
	
	
	
	?>