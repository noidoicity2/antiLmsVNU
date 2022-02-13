<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnswerController extends Controller
{
    // get question id
    public function getQuestionIdByForm()
    {
        /*
        B2 nhan thuc
        testFormId: 2243937c-89fa-4b19-9de5-b587ca5eac51
        classUserId: acd402f7-1c7b-42e1-8550-24f9cd91279c
        classContentId: 0d13c7a7-4c80-46d0-8292-7d3708c27587

        B2 cuoi bai
        testFormId: 8fac0487-aeb6-40ff-8483-2d0d1bf738d8
        classUserId: acd402f7-1c7b-42e1-8550-24f9cd91279c
        classContentId: 7f2c10bb-94b7-40ae-853a-c526279df0ad

        B3 cuoi bai
        testFormId: e8c58c13-21b1-46d2-b481-2aac2cfd59d3
        classUserId: acd402f7-1c7b-42e1-8550-24f9cd91279c
        classContentId: 44cebe89-f9b7-4944-ac73-5fbc15461067

        B4
        testFormId: 0ce96e10-f324-4934-953c-4ec3f1e9075a
        classUserId: acd402f7-1c7b-42e1-8550-24f9cd91279c
        classContentId: 8c816f59-6af8-468a-9adc-dd0e28449464

        B5
        testFormId: 3a967ed2-a04a-4844-b8a9-7167a075057c
        classUserId: acd402f7-1c7b-42e1-8550-24f9cd91279c
        classContentId: eea33c28-025c-4f0e-a9b6-02eea5e532f0
        */
        $classNames = [

            'form' => [
                'testFormId' => 'a7933a69-a9bd-4ffd-9516-682bbb2871dd',
                'classContentId' => 'ff6c240b-d3d2-4675-b263-e0636c486d12'
            ],


        ];

        $userLogin = [
            "username" =>"DDP0603112" ,
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

        $token =  $loginResponse["access_token"];
        $wsUrl = "wss://lms.vnu.edu.vn/dhqg.test.api/socket/hubs/test?access_token=";
        $headers = [
            "Authorization" => "Bearer ".$token,
            "X-Authorize" => "",
            "Host" => "lms.vnu.edu.vn",
        ];
        $class_questions = [];
        $questionIds = [];

        foreach ($classNames as $key => $value) {
            $response = Http::withHeaders($headers)->get('https://lms.vnu.edu.vn/dhqg.test.api/api/v1/TestClassUserTest/StartTest', [
                'testFormId' => $value['testFormId'],
                'classContentId' =>$value['classContentId'],
                'classId'=> "0568454a-578c-425c-8ef8-cf9b977c5dbd",
                'classUserId' => "f81a6353-2bb3-433c-a62e-3ef83b378318",
                'isExtraTest' => "false",
//                'viewDetails' => true,
//                    'classUserId' => 'ff5bec44-ecc0-4e96-ba7f-54cd534ef96c'
            ]);
//                return $response->json();
            foreach ($response["data"]["dataTest"] as $item) {
//                $class_questions[$item["question"]["content"]]["content"] = $item["question"]["content"];
//                $class_questions[$item["question"]["content"]]["question"] = $item["question"]["testAnswer"];
//                $class_questions[$item["question"]["content"]]["answer"] = substr($item["answer"],1,1);
                array_push($questionIds,$item['id']);



            }

        }

        return view("answer", [
            "questionIds" => $questionIds,
            "formId" => $classNames["form"]["testFormId"],
            "DoTestId" => $response["data"]["id"],
            "ws" =>$wsUrl . $token,
        ]);


    }

}
