<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;


class ClassQuestionController extends Controller
{
    //
    public function getQuestion()
    {
        $classNames = [
//            'A2-nhanthuc' => [
//                'testFormId' => 'b012d4c3-35f3-4da6-937b-5c02fbe4ce80',
//                'classContentId' => 'b8821f01-782b-493d-abb1-fb0fe832a5ad'
//            ],
//
//
//            'A2-cuoibai' => [
//                'testFormId' => '35fcc3ad-4830-4217-9b00-9cd1b40ccbdf',
//                'classContentId' => '4b65cecc-243f-43a8-b6ff-42205f58cd00'
//            ],
//
//
//            'A3-nhanthuc' => [
//                'testFormId' => '749c5759-4cb5-490d-ad29-9db817b0c683',
//                'classContentId' => '69b8db54-56a9-4e0f-9663-3540c7d20546'
//            ],
//
//
//            'A3-cuoibai' => [
//                'testFormId' => '6f31c71e-487e-43e7-be79-ff8d766572d0',
//                'classContentId' => 'dc932376-e4a2-4d4f-8b67-69aca8459308'
//            ],
//
//
//            'A4-nhanthuc' => [
//                'testFormId' => '2f210f76-36e4-4189-8c2e-ca3cd9ccf2a4',
//                'classContentId' => '1cf09ff3-0b65-45d2-815d-1aa626e43aa9'
//            ],
//
//
//            'A4-cuoibai' => [
//                'testFormId' => '8368831d-df34-42fa-8c85-ef6111b92e9e',
//                'classContentId' => '169485b2-3d6e-4c90-acc3-bbe9feec66b9'
//            ],
//
//
//            'A5-nhanthuc' => [
//                'testFormId' => 'd2c46b2a-4649-4fc5-aec2-1003977b9290',
//                'classContentId' => 'e63ae395-6654-4732-8acb-5bbe2acd98ab'
//            ],
//
//
//            'A5-cuoibai' => [
//                'testFormId' => 'a4c9f6a8-2904-4d10-95d9-68a9d421474f',
//                'classContentId' => '2e0824c7-cd26-4c03-b23d-7ffc1185e9f8'
//            ],
//
//
//            'A6-nhanthuc' => [
//                'testFormId' => 'eaa890d9-c868-45e3-81f9-875f66a9f809',
//                'classContentId' => '633c1a66-70c5-41f5-b1f8-7fa0af745fe8'
//            ],
//
//
//            'A6-cuoibai' => [
//                'testFormId' => '2d2add36-5195-4fcb-a5a9-9ad58f92d76a',
//                'classContentId' => '8c147107-30b1-4a29-a5bc-8b52afa0bc0a'
//            ],
//
//
//            'A7-nhanthuc' => [
//                'testFormId' => '99dbee29-eec9-4e82-8323-9369a467fde4',
//                'classContentId' => '923f3f04-bbe0-4cc1-9343-19fe6387ddf2'
//            ],
//
//
//            'A7-cuoibai' => [
//                'testFormId' => '60fba6b5-d3fa-4bdf-af73-29f0b74ddfed',
//                'classContentId' => '91002361-15b5-427b-b1dd-cfb1673a1591'
//
//            ],
//
//            'A8-nhanthuc' => [
//                'testFormId' => 'd614beb9-d86d-4582-9675-9e9952cebc5b',
//                'classContentId' => 'a7f7a837-5598-4cd0-8e6b-8f6b81c354d2'
//            ],
//
//
//            'A8-cuoibai' => [
//                'testFormId' => 'cae0f55b-5389-48ae-b0c6-a6db61a2f73d',
//                'classContentId' => '4ff564fd-df2f-45fc-b43b-e8ffecfa552d'
//            ],

//            'a9-nhanthuc' => [
//                'testFormId' => '40514407-7777-4825-b943-16f75d03aa0a',
//                'classContentId' => 'e15caf91-4b6c-4195-8b20-8e510c897b05'
//            ],
//            'a9-cuoibai' => [
//                'testFormId' => 'd5c5d11b-90da-410f-89db-a0ef941f9b1c',
//                'classContentId' => '09f59784-1e6e-4b1a-b17d-5e096ef08a09'
//            ],
//            'a10-nhanthuc' => [
//                'testFormId' => '4a5375a7-35fc-41c8-98df-1640b9ab4434',
//                'classContentId' => '138642e9-88e2-49fb-8bec-fb980a1a4c5d'
//            ],
//            'a10-11-cuoibai' => [
//                'testFormId' => '2c95ce49-2d2d-49ae-bf4f-26e56355b9d3',
//                'classContentId' => 'ab64e4f4-7878-4256-9b73-4c813a97918e'
//            ],
//            'C5-cuoibai' => [
//                'testFormId' => 'b7a17d25-75a4-405f-8a24-0026bf05252d',
//                'classContentId' => '69bc43c5-72db-4004-9a9f-7f745d3be81c'
//            ],
//            'bai thi' => [
//                'testFormId' => '9a6c342a-edff-42bc-9713-2506a0450d8b',
//                'classContentId' => '7efc6391-a9b9-40af-a00a-a8f3ebe10fe5'
//            ],
            'bai thi2' => [
                'testFormId' => 'cef48e08-4d16-4880-9aee-e89aea8e3263',
                'classContentId' => 'd345bf43-bdec-4c11-87ac-944affa62f89'
            ],
//            'd12-nhanthuc' => [
//                'testFormId' => 'f8f23127-011f-4fd5-9e7e-195a5d3f50d1',
//                'classContentId' => '1955dc46-aef9-4d4f-921f-8ba51746121e'
//            ],
//            'd12-venha' => [
//                'testFormId' => 'ad7b3363-f4d5-4c05-be6c-07e885d49b94',
//                'classContentId' => '2b57fccb-95c0-49b3-bb47-8d1a4631fe26'
//            ],



        ];
//        $client = new  Client();
        $headers = [
            "Authorization" => "Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6IjAwNTU2QzAzRkZBQTE5NTJCQUVGRTgxQzI1QjY0RDJFNDAxOUI3OTYiLCJ0eXAiOiJhdCtqd3QiLCJ4NXQiOiJBRlZzQV8tcUdWSzY3LWdjSmJaTkxrQVp0NVkifQ.eyJuYmYiOjE2NDIwMDE1MzcsImV4cCI6MTY0MjA5MTUzNywiaXNzIjoiaHR0cDovL2xtcy52bnUuZWR1LnZuIiwiYXVkIjpbIkF1dGhlbnRpY2F0aW9uIiwiQXV0aG9yaXphdGlvbiIsIkhyIiwiTE1TIiwiTG9jYWxpemF0aW9uIiwiTG9nIiwiTmF2aWdhdGlvbiIsIk5vdGlmaWNhdGlvbiIsIlRlc3QiXSwiY2xpZW50X2lkIjoid2ViIiwic3ViIjoiRERQMDYwMTAwNCIsImF1dGhfdGltZSI6MTY0MjAwMTUzNywiaWRwIjoibG9jYWwiLCJ1c2VyaWQiOiI1ZjEzOGI0OS03ZmVhLTRiMTctYjk5OC05M2E2MjZmNDk0OGMiLCJ1c2VybmFtZSI6IkREUDA2MDEwMDQiLCJkaXNwbGF5bmFtZSI6Ik5ndXnhu4VuIENodSBLaOG6oyBIw6JuIiwiZnVsbG5hbWUiOiJOZ3V54buFbiBDaHUgS2jhuqMgSMOibiIsImVtYWlsIjoiIiwiZW1haWxzIjoiIiwiaXNzdXBlcnVzZXIiOiJmYWxzZSIsInVzZXJlbmNyeXB0IjoicUhEUUVyRnE4L0ZFQXp2b3JxWXh2QT09Iiwic2Vzc2lvbmlkIjoiYTdlYjk1NjgtMmIyOC00MTM1LWE0MGQtNzU4ZjZlMjYzYzc1IiwidXNlcnR5cGUiOiJPdGhlciIsInRpbWV6b25lQ29kZSI6IlVUQyswNzowMCIsImlkR0dNZWV0IjoiIiwiaWRNU1RlYW0iOiIiLCJpZFpvb20iOiIiLCJhdmF0YXIiOiIiLCJwZXJtaXNzaW9ucyI6Int9Iiwic2NvcGUiOlsiQXV0aGVudGljYXRpb24iLCJBdXRob3JpemF0aW9uIiwiSHIiLCJMTVMiLCJMb2NhbGl6YXRpb24iLCJMb2ciLCJOYXZpZ2F0aW9uIiwiTm90aWZpY2F0aW9uIiwiVGVzdCIsIm9mZmxpbmVfYWNjZXNzIl0sImFtciI6WyJwYXNzd29yZCJdfQ.iU4rEe4FQ2kbLjJJwbl-_0f83y1jys-F3pZw9XRL5dUfgq-f23Ne5pFFGJDx4fFAYUcXKrqVFEEOwU9nC1oHUER2jSqbcPBERKFJUTRx_hKUzcAf31_6RLbjbEyCuNMQWqJULTEGjhoJ2NFkBJcy7zK_akhoqpT8RMWvQA_F1wRZ8iVBzbq47nDf9cvaZ0g8P8ex-wd8bU36_G0rROBj9lT8PlGlpggwB1CchuOT9vu06SMy1yf_DcQrcLFSbkJTDGYLFprgnTHaksK4QUVx0gkWCh-85bPsEBDNc6oQQFudsqZhT5If71Nwp59l06vnGG9AqYYBudNVKkQMV6ZUfiIxNYW84QvM2va2Wz2IQYgewBQJaEP9X92llS_ATQBL92od1QYdIiA88orx28dv4hIPAIEvYtUotXKLemYKWQDv5fh8RMCIwz_klHqhzMgerV9mPvdnFdm0YjArqysZBhyFLDhcVPcBllNzsKycaHOJHB3vNPkT6P8HbGgbSTglIeIqoPoNOq3JkY2d5Acu1x8kOVv5Pr71PiQ7UqIOBHfrYuAre1-YbuAMiGbfbGoxpunlDuRt_N01ecbdIwskz-I_uOYsUBMVMDe67a-wSZxievenbFLx4CvRv0dMQ7svbwsBiVNygQqNzUXT4ZZdW9xRk_mZoKjrb4Xclncw30A"
             ,   "X-Authorize" => "",
            "Host" => "lms.vnu.edu.vn",
        ];

        $listQuestion = [];
        for($i=0 ; $i < 10 ;$i++) {
            foreach ($classNames as $key => $value) {
                $class_questions = [];
                $response = Http::withHeaders($headers)->get('https://lms.vnu.edu.vn/dhqg.test.api/api/v1/TestClassUserTest/GetPreview', [
                    'classContentId' => $value['classContentId'],
                    'testFormId' => $value['testFormId'],
                    'classUserId' => 'ff5bec44-ecc0-4e96-ba7f-54cd534ef96c'
                ]);
//            return $response;
                foreach ($response["data"]["dataTest"] as $item) {
                    $class_questions[] = [
                        "content" => $item["question"]["content"],
                        "testAnswer" => $item["question"]["testAnswer"],
                    ];
                }

                $listQuestion[] = [
                    "class_name" => $key,
                    "questions" => $class_questions
                ];
            }
        }



        return view("question", [
            "listQuestion" => $listQuestion
        ]);
//        print_r(openssl_get_cert_locations());


    }
}
