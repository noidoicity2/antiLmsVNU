<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ResultController extends Controller
{
    /* lấy đáp án bài thi */
    public function getQuestion()
    {
        $classNames = [
            'A2-aa' => [
                'testFormId' => '682ad2e1-af90-4b02-aee3-eebcb75eb5a2',
                'classContentId' => 'd345bf43-bdec-4c11-87ac-944affa62f89'
            ],
            'A2-nhanthuc' => [
                'testFormId' => 'd9123d57-ca3d-4506-bffa-a0cf754d89de',
                'classContentId' => 'b8821f01-782b-493d-abb1-fb0fe832a5ad'
            ],
//
////
            'A2-cuoibai' => [
                'testFormId' => '81e25744-b69e-4261-bb85-8452beec8f29',
                'classContentId' => '4b65cecc-243f-43a8-b6ff-42205f58cd00'
            ],
//
//////
//            'A3-nhanthuc' => [
//                'testFormId' => 'f3470681-7ecd-45d6-9020-711b04488e8b',
//                'classContentId' => '69b8db54-56a9-4e0f-9663-3540c7d20546'
//            ],
//////
//////
//            'A3-cuoibai' => [
//                'testFormId' => 'bb8c3f69-7c62-46d0-8b24-a02f268fb3ab',
//                'classContentId' => 'dc932376-e4a2-4d4f-8b67-69aca8459308'
//            ],
//////
//////
//            'A4-nhanthuc' => [
//                'testFormId' => '92c634b1-deae-4356-ae4d-82e3d658d208',
//                'classContentId' => '1cf09ff3-0b65-45d2-815d-1aa626e43aa9'
//            ],
////
//////
//            'A4-cuoibai' => [
//                'testFormId' => '20a50dd9-f7b8-4a84-9b4b-9b9ff7919e98',
//                'classContentId' => '169485b2-3d6e-4c90-acc3-bbe9feec66b9'
//            ],
//////
//////
//            'A5-nhanthuc' => [
//                'testFormId' => 'b1cbb2bc-8d35-43c6-889f-f4cca9bfa971',
//                'classContentId' => 'e63ae395-6654-4732-8acb-5bbe2acd98ab'
//            ],
////
//////
//            'A5-cuoibai' => [
//                'testFormId' => 'fbca1416-605f-492a-97ff-ebf7e1d16bdb',
//                'classContentId' => '2e0824c7-cd26-4c03-b23d-7ffc1185e9f8'
//            ],
////
//////
//            'A6-nhanthuc' => [
//                'testFormId' => 'c45d5031-b481-440b-8e0e-bb5616c9817d',
//                'classContentId' => '633c1a66-70c5-41f5-b1f8-7fa0af745fe8'
//            ],
////
//////
//            'A6-cuoibai' => [
//                'testFormId' => '4dd8bd91-470d-4795-a8dd-44019d155d2c',
//                'classContentId' => '8c147107-30b1-4a29-a5bc-8b52afa0bc0a'
//            ],
////
//////
//            'A7-nhanthuc' => [
//                'testFormId' => '6e8d98d1-a1f9-4fcc-bd32-1dc02892b45f',
//                'classContentId' => '923f3f04-bbe0-4cc1-9343-19fe6387ddf2'
//            ],
////
//////
//            'A7-cuoibai' => [
//                'testFormId' => 'c50c3355-3ab2-4d5c-835e-18eb4bce3f0f',
//                'classContentId' => '91002361-15b5-427b-b1dd-cfb1673a1591'
//
//            ],
//////
//            'A8-nhanthuc' => [
//                'testFormId' => 'e92b6572-8df0-45f8-8a05-dc2d66b3c60e',
//                'classContentId' => 'a7f7a837-5598-4cd0-8e6b-8f6b81c354d2'
//            ],
//////
//////
//            'A8-cuoibai' => [
//                'testFormId' => '72988afb-2b72-478b-ba90-f69900295b95',
//                'classContentId' => '4ff564fd-df2f-45fc-b43b-e8ffecfa552d'
//            ],
////
//            'a9-nhanthuc' => [
//                'testFormId' => '7bd6a57d-e72c-4d0a-b820-c7a49ecb168a',
//                'classContentId' => 'e15caf91-4b6c-4195-8b20-8e510c897b05'
//            ],
//            'a9-cuoibai' => [
//                'testFormId' => '1915dcfa-98c8-4198-a14e-680b961a968b',
//                'classContentId' => '09f59784-1e6e-4b1a-b17d-5e096ef08a09'
//            ],
////
////
//            'a10-nhanthuc' => [
//                'testFormId' => '1fca1da4-96d6-42f0-9ce3-6d62f2b364da',
//                'classContentId' => '138642e9-88e2-49fb-8bec-fb980a1a4c5d'
//            ],
//            'a10-11-cuoibai' => [
//                'testFormId' => 'a6081bfd-a888-45f5-b9e2-96ca0d9a81e5',
//                'classContentId' => 'ab64e4f4-7878-4256-9b73-4c813a97918e'
//            ],
//                        'giua-ky' => [
//                'testFormId' => 'a606b67a-bf7d-46c7-99c6-4bb399c76808',
//                'classContentId' => 'ab64e4f4-7878-4256-9b73-4c813a97918e'
//            ],




        ];
        $token =  "eyJhbGciOiJSUzI1NiIsImtpZCI6IjAwNTU2QzAzRkZBQTE5NTJCQUVGRTgxQzI1QjY0RDJFNDAxOUI3OTYiLCJ0eXAiOiJhdCtqd3QiLCJ4NXQiOiJBRlZzQV8tcUdWSzY3LWdjSmJaTkxrQVp0NVkifQ.eyJuYmYiOjE2NDIwMDUzOTEsImV4cCI6MTY0MjA5NTM5MSwiaXNzIjoiaHR0cDovL2xtcy52bnUuZWR1LnZuIiwiYXVkIjpbIkF1dGhlbnRpY2F0aW9uIiwiQXV0aG9yaXphdGlvbiIsIkhyIiwiTE1TIiwiTG9jYWxpemF0aW9uIiwiTG9nIiwiTmF2aWdhdGlvbiIsIk5vdGlmaWNhdGlvbiIsIlRlc3QiXSwiY2xpZW50X2lkIjoid2ViIiwic3ViIjoiRERQMDYwMzEyMSIsImF1dGhfdGltZSI6MTY0MjAwNTM5MSwiaWRwIjoibG9jYWwiLCJ1c2VyaWQiOiI4OWQ3OGVjMS1hMzI4LTRjMzItYTRlZi1kZmQyNmY3ZGViZDkiLCJ1c2VybmFtZSI6IkREUDA2MDMxMjEiLCJkaXNwbGF5bmFtZSI6Ik5ndXnhu4VuIEtow6FuaCBMaW5oIiwiZnVsbG5hbWUiOiJOZ3V54buFbiBLaMOhbmggTGluaCIsImVtYWlsIjoiIiwiZW1haWxzIjoiIiwiaXNzdXBlcnVzZXIiOiJmYWxzZSIsInVzZXJlbmNyeXB0IjoidG1UV0p1d0ZITmNmbDhrUnZXMEQzUT09Iiwic2Vzc2lvbmlkIjoiODI4MTM3OTEtYjJkNi00ZTM4LTkzMjktNWIzMDFhYzA3ZWM5IiwidXNlcnR5cGUiOiJPdGhlciIsInRpbWV6b25lQ29kZSI6IlVUQyswNzowMCIsImlkR0dNZWV0IjoiIiwiaWRNU1RlYW0iOiIiLCJpZFpvb20iOiIiLCJhdmF0YXIiOiIiLCJwZXJtaXNzaW9ucyI6Int9Iiwic2NvcGUiOlsiQXV0aGVudGljYXRpb24iLCJBdXRob3JpemF0aW9uIiwiSHIiLCJMTVMiLCJMb2NhbGl6YXRpb24iLCJMb2ciLCJOYXZpZ2F0aW9uIiwiTm90aWZpY2F0aW9uIiwiVGVzdCIsIm9mZmxpbmVfYWNjZXNzIl0sImFtciI6WyJwYXNzd29yZCJdfQ.h-LQgB5ENDUevM8Q8vWy0CZXs873u64VYYEuxrU9dPjKTtWwJ6KE_oluw0ZK0NzB0v0OL-BABgkCbNo7KPsPKLXllmtvQXImxPSeeagJSUIrvEgixBO0Dz2aVTyPM_xQuz1C72aalaWHVb3kN8cmpgaNfC7LvgmYBBwDAMmQjWZd1grjZxZenJEYJUJGyaiREmXlRFw24GaiXQ0d942v1o7c6DKtlT-QxaFN0LO8AImHp3k8jnh8Ng2azrGc5yLwlYSr8cZvN6H2SVzIoY0PjsPOR7RRgVRiLyNiJ8tNmdgrc3b4ZAZx0nUlD9IpIU4iugXOdKgqu1kJ7Gq3rEEiD2AgYDYqeot8iSZ9eQGiXIWl-sEE3vMgWrgMR7bTSr9ZYKPY-2mi2kOh-1QiQedggB0xoF6Jr3s28YihKQAiUd0d5CiU5cuxNLE8GyNyqby67qMqOhFxGww817bRkGsoWYxtDoEK8sIyLXvlZeR516B-6C6VToaGdnMJWiDSsDRrBjg8UuezDLiMLD3wqn7TBdTpTJlaXQmr3eTVinbDSs7Ds8fq8L7ZiSroxZrkXMrrRHfLeCZ5f9afd486AszmB7R1pS0TwnckVKq2rARlnp5kWV0KGWVUKmoOcFgQs6uDvLbjdh_0FQOcYay5VkFDZb-dbI1MmoMYN6zkx4khlBg";
        $wsUrl = "wss://lms.vnu.edu.vn/dhqg.test.api/socket/hubs/test?access_token=";
        $headers = [
            "Authorization" => "Bearer ".$token,
            "X-Authorize" => "",
            "Host" => "lms.vnu.edu.vn",
        ];
        $class_questions = [];

            foreach ($classNames as $key => $value) {
                $response = Http::withHeaders($headers)->get('https://lms.vnu.edu.vn/dhqg.test.api/api/v1/TestClassUserTest/GetResultNew', [
                    'id' => $value['testFormId'],
                    'viewDetails' => true,
                    'classUserId' => 'ff5bec44-ecc0-4e96-ba7f-54cd534ef96c'
                ]);
//                return $response->json();
                foreach ($response["data"]["dataTest"] as $item) {
                    $class_questions[$item["question"]["content"]]["content"] = $item["question"]["content"];
                    $class_questions[$item["question"]["content"]]["question"] = $item["question"]["testAnswer"];
                    $class_questions[$item["question"]["content"]]["answer"] = substr($item["answer"],1,1);



                }

            }

        return view("result", [
            "class_questions" => $class_questions
        ]);


    }
    /* lấy đáp án bài tập thường */
    public function getTestResult()
    {
        $classNames = [
            'A2-aa' => [
                'testFormId' => '060fc476-92de-432a-afee-44fcf78c63e9',
                'classContentId' => 'd345bf43-bdec-4c11-87ac-944affa62f89'
            ],

        ];
        $token =  "eyJhbGciOiJSUzI1NiIsImtpZCI6IjAwNTU2QzAzRkZBQTE5NTJCQUVGRTgxQzI1QjY0RDJFNDAxOUI3OTYiLCJ0eXAiOiJhdCtqd3QiLCJ4NXQiOiJBRlZzQV8tcUdWSzY3LWdjSmJaTkxrQVp0NVkifQ.eyJuYmYiOjE2NDIwMDUzOTEsImV4cCI6MTY0MjA5NTM5MSwiaXNzIjoiaHR0cDovL2xtcy52bnUuZWR1LnZuIiwiYXVkIjpbIkF1dGhlbnRpY2F0aW9uIiwiQXV0aG9yaXphdGlvbiIsIkhyIiwiTE1TIiwiTG9jYWxpemF0aW9uIiwiTG9nIiwiTmF2aWdhdGlvbiIsIk5vdGlmaWNhdGlvbiIsIlRlc3QiXSwiY2xpZW50X2lkIjoid2ViIiwic3ViIjoiRERQMDYwMzEyMSIsImF1dGhfdGltZSI6MTY0MjAwNTM5MSwiaWRwIjoibG9jYWwiLCJ1c2VyaWQiOiI4OWQ3OGVjMS1hMzI4LTRjMzItYTRlZi1kZmQyNmY3ZGViZDkiLCJ1c2VybmFtZSI6IkREUDA2MDMxMjEiLCJkaXNwbGF5bmFtZSI6Ik5ndXnhu4VuIEtow6FuaCBMaW5oIiwiZnVsbG5hbWUiOiJOZ3V54buFbiBLaMOhbmggTGluaCIsImVtYWlsIjoiIiwiZW1haWxzIjoiIiwiaXNzdXBlcnVzZXIiOiJmYWxzZSIsInVzZXJlbmNyeXB0IjoidG1UV0p1d0ZITmNmbDhrUnZXMEQzUT09Iiwic2Vzc2lvbmlkIjoiODI4MTM3OTEtYjJkNi00ZTM4LTkzMjktNWIzMDFhYzA3ZWM5IiwidXNlcnR5cGUiOiJPdGhlciIsInRpbWV6b25lQ29kZSI6IlVUQyswNzowMCIsImlkR0dNZWV0IjoiIiwiaWRNU1RlYW0iOiIiLCJpZFpvb20iOiIiLCJhdmF0YXIiOiIiLCJwZXJtaXNzaW9ucyI6Int9Iiwic2NvcGUiOlsiQXV0aGVudGljYXRpb24iLCJBdXRob3JpemF0aW9uIiwiSHIiLCJMTVMiLCJMb2NhbGl6YXRpb24iLCJMb2ciLCJOYXZpZ2F0aW9uIiwiTm90aWZpY2F0aW9uIiwiVGVzdCIsIm9mZmxpbmVfYWNjZXNzIl0sImFtciI6WyJwYXNzd29yZCJdfQ.h-LQgB5ENDUevM8Q8vWy0CZXs873u64VYYEuxrU9dPjKTtWwJ6KE_oluw0ZK0NzB0v0OL-BABgkCbNo7KPsPKLXllmtvQXImxPSeeagJSUIrvEgixBO0Dz2aVTyPM_xQuz1C72aalaWHVb3kN8cmpgaNfC7LvgmYBBwDAMmQjWZd1grjZxZenJEYJUJGyaiREmXlRFw24GaiXQ0d942v1o7c6DKtlT-QxaFN0LO8AImHp3k8jnh8Ng2azrGc5yLwlYSr8cZvN6H2SVzIoY0PjsPOR7RRgVRiLyNiJ8tNmdgrc3b4ZAZx0nUlD9IpIU4iugXOdKgqu1kJ7Gq3rEEiD2AgYDYqeot8iSZ9eQGiXIWl-sEE3vMgWrgMR7bTSr9ZYKPY-2mi2kOh-1QiQedggB0xoF6Jr3s28YihKQAiUd0d5CiU5cuxNLE8GyNyqby67qMqOhFxGww817bRkGsoWYxtDoEK8sIyLXvlZeR516B-6C6VToaGdnMJWiDSsDRrBjg8UuezDLiMLD3wqn7TBdTpTJlaXQmr3eTVinbDSs7Ds8fq8L7ZiSroxZrkXMrrRHfLeCZ5f9afd486AszmB7R1pS0TwnckVKq2rARlnp5kWV0KGWVUKmoOcFgQs6uDvLbjdh_0FQOcYay5VkFDZb-dbI1MmoMYN6zkx4khlBg";
        $wsUrl = "wss://lms.vnu.edu.vn/dhqg.test.api/socket/hubs/test?access_token=";
        $headers = [
            "Authorization" => "Bearer ".$token,
            "X-Authorize" => "",
            "Host" => "lms.vnu.edu.vn",
        ];
        $class_questions = [];

        foreach ($classNames as $key => $value) {
            $response = Http::withHeaders($headers)->get('https://lms.vnu.edu.vn/dhqg.test.api/api/v1/TestClassUserTest/GetResultNew', [
                'id' => $value['testFormId'],
                'viewDetails' => true,
                'classUserId' => 'ff5bec44-ecc0-4e96-ba7f-54cd534ef96c'
            ]);
//                return $response->json();
            foreach ($response["data"]["dataTest"] as $item) {
                $class_questions[$item["question"]["content"]]["content"] = $item["question"]["content"];
                $class_questions[$item["question"]["content"]]["question"] = $item["question"]["testAnswer"];
                $class_questions[$item["question"]["content"]]["answer"] = substr($item["answer"],1,1);



            }

        }

        return view("resultc", [
            "class_questions" => $class_questions
        ]);


    }

}
