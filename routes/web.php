<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home', [
        'greeting' => 'Hello',
    ]);
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->paginate(20);
    return view('jobs', [
        'jobs' => $jobs


    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});







//FRUITS

//http://myfirstproject.test/fruits
Route::get('/fruits', function () {

    $fruits = ["apple", "banana", "orange", "grape"];

    // Part C: Add a fruit
    array_push($fruits, "pear");

    // Part D: Remove the first fruit
    array_shift($fruits);

    // Part E: Sort alphabetically
    sort($fruits);

    return view('fruits', [
        'fruits' => $fruits
    ]);
});

//http://myfirstproject.test/fruits/vowels
Route::get('/fruits/vowels', function () {

    $fruits = ["apple", "banana", "orange", "grape"];
    $vowels = ["a", "e", "i", "o", "u"];
    $new_array = [];

    foreach ($fruits as $fruit) {
        $first_letter = strtolower(substr($fruit, 0, 1));

        if (in_array($first_letter, $vowels)) {
            array_push($new_array, $fruit);
        }
    }

    return view('vowel-fruits', [
        'fruits' => $new_array
    ]);
});
