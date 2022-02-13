<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SingleQuestionController extends Controller
{
    // lấy câu hỏi ko theo class
    public function getQuestion()
    {

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
                'testFormId' => 'a7933a69-a9bd-4ffd-9516-682bbb2871dd',
                'classContentId' => 'ff6c240b-d3d2-4675-b263-e0636c486d12'
            ],


        ];
        $token =  $loginResponse["access_token"];
        $headers = [
            "Authorization" => "Bearer " . $token,
            "X-Authorize" => "",
            "Host" => "lms.vnu.edu.vn",
        ];
        $class_questions = [];
        for($i =0 ; $i < 50;$i ++) {
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

        }


        return view("single", [
            "class_questions" => $class_questions
        ]);


    }
}
