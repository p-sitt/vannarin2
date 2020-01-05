	<?php 
//Show Date with user timezone
if (! function_exists('show_date')) {
	function show_date($date, $format="d/m/Y")
	{
		if(!($date instanceof \Carbon\Carbon)) {
			if(is_numeric($date)) {
				 // Assume Timestamp
				 $date = \Carbon\Carbon::createFromTimestamp($date);
			} else {
				$date = \Carbon\Carbon::parse($date);
			}
		}
	
		return $date->setTimezone(Auth::user()->timezone)->format($format);
	}
}
 
//Set Datetime to insert_db
if (! function_exists('insert_db_date')) {
	function insert_db_date($date, $format="Y-m-d")
	{
		$output_timezone = \Config::get('app.timezone', 'UTC');	
		$date = \Carbon\Carbon::parse($date);
        return \Carbon\Carbon::createFromFormat($format, $date->format($format), Auth::user()->timezone)->setTimezone($output_timezone)->format('Y-m-d');
	}
}

