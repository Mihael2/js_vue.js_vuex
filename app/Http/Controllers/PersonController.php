<?php

namespace App\Http\Controllers;

class PersonController extends Controller
{
    public function __invoke()
    {

        $persons = [
            [
                'id' => 1,
                'name' => 'Ivan',
                'age' => 20,
                'job' => 'developer'
            ],
            [
                'id' => 2,
                'name' => 'Yura',
                'age' => 15,
                'job' => 'school'
            ],
            [
                'id' => 3,
                'name' => 'Yulia',
                'age' => 25,
                'job' => 'nurse'
            ]
        ];
        return $persons;
    }
}
