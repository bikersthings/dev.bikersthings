<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://panel.bikersthings.com/APIALLDATA',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Cookie: XSRF-TOKEN=eyJpdiI6IkRNcm1OaXE3ZnRLcUkwV3Z1RDB5NGc9PSIsInZhbHVlIjoidEd5RkN1M0d5MHM3Q1hSWlFScTVlbDhOdmlGbGplN3RjeWt3UXVOa2NyNVVYdEFWVVZvbWVPem9EcFpQdkxreGNMT3F5SDdDeWJFR1BRbldTRUJMbEhRQVh2YWtRVFFhZkFQSDJkRSs3ZjE3QUlqdGhtY3hGelo5NVdxTjEvUk0iLCJtYWMiOiIzNzE3NzJhYzM1YzRjZTVmZjdmYzZkMWUyOWMwMTAzYmYwZDg4MzNlM2FiZTNiYTQ0NjNjYzg2YWU0NDE5ZGYxIiwidGFnIjoiIn0%3D; bikersthings_session=eyJpdiI6IkdwWlFnTFRKTEhlWnErbjZvSjUxd3c9PSIsInZhbHVlIjoiaUtpbEpLVzE4cEtFTmFDTFZQZjB4YTNBZFdoOUVHWGJ5YnZreFB0UlZ6MFBXNEg4TVpvZDJRTWpLbCtBcTZIUTg4OWxlSmZYdFdnaTEvQ0k5YkJ1MmI2eVVoV0w1akREOVZjeno2bjN0YmdEcE5weDd5d2JTZFZDWVJrcDU3VUUiLCJtYWMiOiI1N2YzNDE3ZGRmYWNiMjM4N2RkZWYwNDAxNzE3ZGEyNjc2MGM1NDg4Mzc5MmFkZDliYWQ0NGI1YWU1MWJjNTdjIiwidGFnIjoiIn0%3D'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $tebe = json_decode($response);

        $alldata = $tebe->data;

        return view('page-visitor.home.main',get_defined_vars());

    }
}
