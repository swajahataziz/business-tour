<?php

namespace App\Http\Controllers\Vendor;

interface HotelBookingInterface {

	public function sendRequest($request);

	public function getAvailability($searchReponse);

	public function getSearchResultsContent($formData);

}

