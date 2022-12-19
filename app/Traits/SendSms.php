<?php  

namespace App\Traits;
use Twilio\Rest\Client;

trait SendSms
{
    public function sendOtpCodeSms( $numbers = [], $message = '' )
    {
       // Your Account SID and Auth Token from twilio.com/console
       $sid    = env( 'TWILIO_SID' );
       $token  = env( 'TWILIO_TOKEN' );
       $client = new Client( $sid, $token );

        $validator = \Validator::make(['numbers' => $numbers, 'message' => $message], [
           'numbers' => 'required',
           'message' => 'required'
        ],[
            'numbers.required' => 'the_numbers_field_is_required',
            'message.required' => 'the_message_field_is_required'
        ]);

       if ($validator->fails()) {
            $messages = $validator->messages();
            foreach ($messages->all() as $error) {
                return (object) ["error" => config('errorcode.' . $error), "message" => str_replace('_', ' ', $error)];
            }
        }

        $numbers_in_arrays = explode( ',' , $numbers );

        $count = 0;

        foreach( $numbers_in_arrays as $number )
        {
           $count++;

           $client->messages->create(
               $number,
               [
                   'from' => env( 'TWILIO_FROM' ),
                   'body' => $message,
               ]
           );
        }

       return (object) ["error" => 0, "message" => "success"];
    }
}

?>