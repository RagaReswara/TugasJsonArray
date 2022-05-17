<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanJsonController extends Controller
{
    public function getData1(){
        $data = array(
            "name"=> "Johanes",
            "url"=> "https://www.google.com",
            "rank"=> 1,
            "socialmedia"=> array(
                "facebook"=> "",
                "twitter"=> "",
                "instagram"=> "",
                "youtube"=> "",
                "github"=> ""
            ));
            $jd = json_encode($data);
            dd($jd);
    }
    public function getData2(){
        $data = array(
            "first_name" => "Johanes",
            "last_name" => "Vincent",
            "location" => "Yogyakarta",
            "online" => true,
            "followers" => 987);
        $jd = json_encode($data);
        dd($jd);
    }
    public function getData3(){
        $data = array(
            "first_name" => "Raga",
            "last_name" => "Reswara",
            "location" => "Yogyakarta",
            "websites" => array(
                [
                    "description" => "work",
                    "URL" => "https://www.digitalocean.com/"
                    ,
                    "desciption" => "tutorials",
                    "URL" => "https://www.digitalocean.com/community/tutorials"
                ],
                "social_media" => array(
                    [
                        "description" => "twitter",
                        "link" => "https://twitter.com/digitalocean"
                    ],
                        [
                        "description" => "facebook",
                        "link" => "https://www.facebook.com/DigitalOceanCloudHosting"
                        ],
                        [
                        "description" => "github",
                        "link" => "https://github.com/digitalocean"
                    ]
                )
            ));
            $jd = json_encode($data);
            dd($jd);
    }
    public function getData4(){
        $data = array(
            "employees"=>[
                [
                    "firstName"=>"Johanes", "lastName"=>"Vincent"
                ],
                [
                    "firstName"=>"Raga", "lastName"=>"Reswara"
                ],
                [
                    "firstName"=>"Peter","lastName"=>"Jones"
                ]
            ]
                );
                $jd = json_encode($data);
                dd($jd);  
            }
    public function getData5(){
        $data = array(
            "matapelajaran"=> array(
                    "subject" => "Matematika",
                    "kelas"=> array(
                        [
                            [
                                "X" => "Argo",
                                "Jadwal" => "Senin"
                            ],
                            [
                                "XI" => "JJS",
                                "Jadwal" => "Selasa"
                            ],
                            [
                                "XII" => "Halim",
                                "Jadwal" => "Rabu"
                            ]
                            ]
                    )));
                    $jd = json_encode($data);
                    dd($jd); 
    }
}
