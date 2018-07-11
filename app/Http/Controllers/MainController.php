<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view("welcome");
    }
    
    function sendMessage(Request $request)
    {
        //Title of the notification
        $heading      = array(
            "en" => $request->input('title')
        );
        //Content of the notification
        $content      = array(
            "en" => $request->input('body')
        );
       //Required fields for the curl request
        $hashes_array = array();
        $fields       = array(
            'app_id' => "5bbe181a-b7cf-4c54-a938-6c2d7e484e22",
            'included_segments' => array(
                'All'
            ),
            'data' => array(
                "foo" => "bar"
            ),
            'contents' => $content,
            'headings' => $heading,
            'web_buttons' => $hashes_array
        );

        //Encoding of fields
        
        $fields = json_encode($fields);
        print("\nJSON sent:\n");
        print($fields);
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json; charset=utf-8',
            'Authorization: Basic NDg4OTkzODYtYTBkNi00ZWIzLWFkNDYtYTkwNjVkODA2YTcz'
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        
        //Execution of curl and saved on response
        //$response = curl_exec($ch);
        

        
        try {
            curl_exec($ch);
            curl_close($ch);
            $response = "All okey!!";
        } catch (Exception $e) {
            $response = "Error: ".$e;
        }
        
        
       
        return back()->with('response', $response);

    }
}