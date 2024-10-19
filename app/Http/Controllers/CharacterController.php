<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CharacterController extends Controller
{

    public function randomCharacter()
    {
   
        $characters = json_decode(file_get_contents(resource_path('data/characters.json')), true);

        $rand = mt_rand(1, 100);
        $stars = 3;

        if ($rand <= 70) {
            $stars = 3;
        } elseif ($rand <= 95) {
            $stars = 4;
        } else {
            $stars = 5;
        }

        $filtered = array_filter($characters, function ($character) use ($stars) {
            return $character['stars'] == $stars;
        });


        $character = $filtered[array_rand($filtered)];


        return view('random', compact('character', 'stars'));
    }


    public function randomTenCharacters()
    {
        $characters = json_decode(file_get_contents(resource_path('data/characters.json')), true);

        $result = [];
        $fourStarGuaranteed = false;


        for ($i = 0; $i < 10; $i++) {
            $rand = mt_rand(1, 100);
            if ($rand <= 70) {
                $stars = 3;
            } elseif ($rand <= 95) {
                $stars = 4;
                $fourStarGuaranteed = true;
            } else {
                $stars = 5;
            }


            $filtered = array_filter($characters, function ($character) use ($stars) {
                return $character['stars'] == $stars;
            });

            if (!empty($filtered)) {
                $result[] = $filtered[array_rand($filtered)];
            }
        }

        if (!$fourStarGuaranteed) {
            $filtered = array_filter($characters, function ($character) {
                return $character['stars'] == 4;
            });

            if (!empty($filtered)) {
                $result[] = $filtered[array_rand($filtered)];
            }
        }

    
        return view('random-ten', compact('result'));
    }
}
