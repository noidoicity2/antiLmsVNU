<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnswerController extends Controller
{
    //
    public function getQuestionIdByForm()
    {
        $classNames = [

            'form' => [
                'testFormId' => 'cef48e08-4d16-4880-9aee-e89aea8e3263',
                'classContentId' => '9649590c-db57-4495-8f29-a1c6ee75fd09'
            ],


        ];
        $token =  "eyJhbGciOiJSUzI1NiIsImtpZCI6IjAwNTU2QzAzRkZBQTE5NTJCQUVGRTgxQzI1QjY0RDJFNDAxOUI3OTYiLCJ0eXAiOiJhdCtqd3QiLCJ4NXQiOiJBRlZzQV8tcUdWSzY3LWdjSmJaTkxrQVp0NVkifQ.eyJuYmYiOjE2NDIwMDYwMDIsImV4cCI6MTY0MjA5NjAwMiwiaXNzIjoiaHR0cDovL2xtcy52bnUuZWR1LnZuIiwiYXVkIjpbIkF1dGhlbnRpY2F0aW9uIiwiQXV0aG9yaXphdGlvbiIsIkhyIiwiTE1TIiwiTG9jYWxpemF0aW9uIiwiTG9nIiwiTmF2aWdhdGlvbiIsIk5vdGlmaWNhdGlvbiIsIlRlc3QiXSwiY2xpZW50X2lkIjoid2ViIiwic3ViIjoiRERQMDYwMzExMiIsImF1dGhfdGltZSI6MTY0MjAwNjAwMiwiaWRwIjoibG9jYWwiLCJ1c2VyaWQiOiI3MWQ3ZjdlMC00MGU5LTQ4M2UtOWVhNS1kMTU1MmUwNDQ5MDIiLCJ1c2VybmFtZSI6IkREUDA2MDMxMTIiLCJkaXNwbGF5bmFtZSI6Iktow7pjIFRow6BuaCBM4buZYyIsImZ1bGxuYW1lIjoiS2jDumMgVGjDoG5oIEzhu5ljIiwiZW1haWwiOiIiLCJlbWFpbHMiOiIiLCJpc3N1cGVydXNlciI6ImZhbHNlIiwidXNlcmVuY3J5cHQiOiJ0bVRXSnV3RkhOZm0vcnhkd0dHajZnPT0iLCJzZXNzaW9uaWQiOiI1ODkyNzY4ZC0zODllLTRhZmUtOGU2YS1hMDEzZmFmNmNlZWIiLCJ1c2VydHlwZSI6Ik90aGVyIiwidGltZXpvbmVDb2RlIjoiVVRDKzA3OjAwIiwiaWRHR01lZXQiOiIiLCJpZE1TVGVhbSI6IiIsImlkWm9vbSI6IiIsImF2YXRhciI6IiIsInBlcm1pc3Npb25zIjoie30iLCJzY29wZSI6WyJBdXRoZW50aWNhdGlvbiIsIkF1dGhvcml6YXRpb24iLCJIciIsIkxNUyIsIkxvY2FsaXphdGlvbiIsIkxvZyIsIk5hdmlnYXRpb24iLCJOb3RpZmljYXRpb24iLCJUZXN0Iiwib2ZmbGluZV9hY2Nlc3MiXSwiYW1yIjpbInBhc3N3b3JkIl19.HxpsIbUIE_2RhZnm3LYKSfWSVq3TiGrua-gc7gTBbexn0qRNx50NbBLO-EJRJ_ZXt2-I6EDLxQAFBeeYW6PZGglvfgOnVoWVuHD3yQphMzxO4P-y9GLXGPut7PqTTDiQe3Rp8p8TXHpyoZ4fYoMfvDiiggsJ477bMfDqQv2CmJLeBTBQc-WJR0esw_VyzYcQKW8AkeGo-XLmeUC4XPlwDWGleEcK-kBeYUxCqZKGsp1ZpNnve8nOCxeO5th9pBDK9ESLcfhm8qijaZqRAssC4bcorDqIlJanRsdAzbp_GCAxarMOtyDnWUITmGTxDfC6zb4CXU74zuOnP0qa6-kkw0flobIPQ4cKwhTwHBgQ85w_dqBkENcpjFDvz5bk2VbyZ5kYSMRWqXM3ip7LNQY04ThwbMAyUS2Fqd_g4CV80pbJE7XxnOiiC5G9OYGbBVa37v47PWQsMqpjiz9ZKKiQdHMX6VJy90rCVd9JErCQ9Q6xnmN69576AL7l32xGNp3EuRt-iDo6vmiaa-n-hoTCiaD5BVCQoV_FKGedEgGbJ6UxL1voSxMk5Y8CL3ir6HwjW2bFExoREVtIq6Te4Q8TKozimS8hC_PKKUnykkuv9KfdRR6O3IF4cRfZjV32hrgY12lSGX5_3Go7YmOXuExV0w6RUZWY4z59h0KokTKrHyY";
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
//        return $questionIds;

        return view("answer", [
            "questionIds" => $questionIds,
            "formId" => $classNames["form"]["testFormId"],
            "DoTestId" => $response["data"]["id"],
            "ws" =>$wsUrl . $token,
        ]);


    }

}
