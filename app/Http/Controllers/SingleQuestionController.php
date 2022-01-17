<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SingleQuestionController extends Controller
{
    // lấy câu hỏi ko theo class
    public function getQuestion()
    {
        $classNames = [
            'A2-nhanthuc' => [
                'testFormId' => '3a967ed2-a04a-4844-b8a9-7167a075057c',
                'classContentId' => 'eea33c28-025c-4f0e-a9b6-02eea5e532f0'
            ],
//

        ];
        $userLogin = [
//            "username" =>"DDP0603112" ,
//            "password" =>"qpan020304"

             "username" =>"DDP0603121" ,
            "password" =>"qpan020304"
        ];

        $loginUrl = "https://lms.vnu.edu.vn/dhqg.authentication.api/connect/token";
        $loginResponse = Http::asForm()->post($loginUrl, [
            "grant_type"=> "password",
            "client_id" => "web",
            "scope" =>"",
            "username"=> $userLogin["username"],
            "password"=>$userLogin["password"]

        ]);
        $classNames = [

            'form' => [
                'testFormId' => '748f37ce-f03a-4b24-9b72-95591c367167',
                'classContentId' => '6ff83dda-394e-4d99-b216-ca8b400d3548'
            ],


        ];
        $token =  $loginResponse["access_token"];
        $headers = [
            "Authorization" => "Bearer " . $token,
            "X-Authorize" => "",
            "Host" => "lms.vnu.edu.vn",
        ];
        $class_questions = [];

        foreach ($classNames as $key => $value) {
            $response = Http::withHeaders($headers)->get('https://lms.vnu.edu.vn/dhqg.test.api/api/v1/TestClassUserTest/GetPreview', [
                'classContentId' => $value['classContentId'],
                'testFormId' => $value['testFormId'],
                'classUserId' => 'ff5bec44-ecc0-4e96-ba7f-54cd534ef96c'
            ]);
            foreach ($response["data"]["dataTest"] as $item) {

                $class_questions[$item["question"]["content"]] = $item["question"]["testAnswer"];
            }

        }


        return view("single", [
            "class_questions" => $class_questions
        ]);


    }
}
