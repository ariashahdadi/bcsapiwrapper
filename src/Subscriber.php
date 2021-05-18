<?php


namespace Bcsapi;


class Subscriber extends BaseApi
{


    Public function ActivateBooking($BookingID){

         $apipath =   '/api/v3/subscriptions/booking/{bookingid}/activate';
         $APIFields = ['{bookingid}' => $BookingID];
         return $this->CallAPI($apipath, $APIFields);
    }





    public function SubscriberDetails($IndividualID){
        $apipath =  '/api/v3/subscriber/details/{individualid}';
        $APIFields = ['{individualid}' => $IndividualID];
        return $this->CallAPI($apipath,$APIFields);
        }

   }
