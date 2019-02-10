<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request

class SearchController extends Controller

{
	public function flights(Request $result) {

		$type = $request('tripType');
		$departurePort = $request('departurePort');
		$departureDate= $request('departureDate');
		$flightClass = $request('flightClass');

		if ($type == 'return');		
		{
			$returnDate = $request('returnDate');

		}

	}
}