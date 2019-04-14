<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request

class SearchController extends Controller

{
	public function flights(Request $result) {

		$type = $request('tripType');
		$departurePort = $request('departurePort');
		$arrivalPort = $request('arrivalPort');
		$departureDate= $request('departureDate');
		$flightClass = $request('flightClass');

		if ($type == 'return');		
		{
			$returnDate = $request('returnDate');

		}

	}

	public function hotels(Request $result) {

		$type = $request('tripType');
		$hotelLocation = $request('hotelLocation');
		$checkInDate = $request('checkInDate');
		$checkOutDate = $request('checkOutDate');
		$noOfGuests = $request('noOfGuests');
		$noOfRooms = $request('noOfRooms');
	}
}