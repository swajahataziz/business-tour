<?php

namespace App\Utils;

class DateUtil {

	function ConvertUtcToLocalTime($dateTime, $inputFormat, $outputFormat = "Y-m-d H:i:s") {
		$utcDate = DateTime::createFromFormat($inputFormat,$dateTime, new DateTimeZone('UTC'));
		$returnDate = $utcDate;
		//todo: This is a technical debt and needs to be refactored. Time zones should not be static in code
		//but based on user location
		$returnDate->setTimeZone(new DateTimeZone('Europe/Moscow')); 
		return $returnDate->format($outputFormat);
	}

}