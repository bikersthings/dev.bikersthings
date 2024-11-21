<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use DateTime;
class IceBoxesController extends Controller
{
    public function index(Request $request)
    {
        // $expectedToken = 'slebew';

        // $providedToken = $request->header('Authorization');

        // if ($providedToken && trim($providedToken) === 'Bearer ' . $expectedToken) {

        //     return response()->json($data);
        // } else {
        //     return response()->json(['error' => 'Unauthorized'], 401);
        // }

        $responseIceBox = Http::withHeaders(['Authorization' => 'Bearer patUSVOlIyGTFrO5D.e3325ee36b201b83d6cfdd7057401f23d500df180831157b72600f56b06a6860'])->get('https://api.airtable.com/v0/app0JdxKqALrl0u8s/tbl9saEdEWKJYB2lT');
        $iceboxes = json_decode($responseIceBox, true)['records'];
        $iceboxes = array_map(function($icebox) {

            // Start mapping participant
            $userCodes = $icebox['fields']['user_code'];
            $userNames = $icebox['fields']['user_name'];
            $iceboxParticipants = $icebox['fields']['iceboxparticipant'];
            $mergedArray = collect($userNames)->map(function ($userName, $index) use ($userCodes, $iceboxParticipants) {
                return [
                    'user_name' => $userName,
                    'user_code' => $userCodes[$index],
                    'icebox_participant' => $iceboxParticipants[$index],
                ];
            });
            $mergedArray = $mergedArray->toArray();
            // End mapping participant

            // Start is expired condition
            $expireDateTime = new DateTime($icebox['fields']['ib_expired_date']);
            $startDateTime = new DateTime($icebox['fields']['ib_started_date']);
            $currentDateTime = new DateTime();
            $isExpired = ($expireDateTime<=$currentDateTime) ? (true):(false);
            $isStarted = ($startDateTime>=$currentDateTime) ? (true):(false);
            // End is expired condition

            // Start counting percentage participant join
            $participantJoin = $icebox['fields']['ib_participant_join'];
            $participantLimit = $icebox['fields']['ib_participant_limit'];
            $participantPercent = intval(($participantJoin/$participantLimit)*100);
            // End counting percentage participant join

            // Start transform date
            $expiredDate = Carbon::parse($icebox['fields']['ib_expired_date'])->format('j M Y');
            $startedDate = Carbon::parse($icebox['fields']['ib_started_date'])->format('j M Y');
            // End transform date

            return [
                'ib_code' => $icebox['fields']['ib_code'],
                'ib_name' => $icebox['fields']['ib_name'],
                'ib_name_item' => $icebox['fields']['ib_name_item'],
                'ib_thumbnail' => $icebox['fields']['ib_thumbnail'][0]['url'],
                'ib_prices' => [
                    'ib_price_ice_coupon' => $icebox['fields']['ib_price_ice_coupon'],
                    'ib_price_break_now' => $icebox['fields']['ib_price_break_now'],
                ],
                'ib_participants' => [
                    'ib_participant_limit' => $icebox['fields']['ib_participant_limit'],
                    'ib_participant_join' => $icebox['fields']['ib_participant_join'],
                    'ib_participant_percent' => $participantPercent,
                    'ib_users' => $mergedArray,
                ],
                'ib_exp_date' => $expiredDate,
                'ib_start_date' => $startedDate,
                'ib_description' => $icebox['fields']['ib_description'],
                'is_expired' => $isExpired,
                'is_started' => $isStarted,
                
            ];
            
        }, $iceboxes);
        // dd($iceboxes);
        return response($iceboxes);
    }
}
