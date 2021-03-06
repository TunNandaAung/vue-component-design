<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/api/contact', function () {
    $contacts =
        [
           [
             "id" => 1,
             "name" => [
                "first" => "Alfreda",
                "last" => "Ferreira"
             ],
             "location" => [
                   "street" => "4127 Rua Mato Grosso ",
                   "city" => "Bagé",
                   "state" => "Distrito Federal",
                   "postcode" => 26866
              ],
             "email" => "alfreda.ferreira@example.com",
             "phone" => "(73) 8845-4229",
             "picture" => [
                      "large" => "https://randomuser.me/api/portraits/women/6.jpg",
                      "medium" => "https://randomuser.me/api/portraits/med/women/6.jpg",
                      "thumbnail" => "https://randomuser.me/api/portraits/thumb/women/6.jpg"
              ]
           ],
           
           [
              "id" => 2,
              "name" => [
                 "first" => "Leevi",
                 "last" => "Wirtanen"
              ],
              "location" => [
                    "street" => "5429 Verkatehtaankatu",
                    "city" => "Tampere",
                    "state" => "Northern Savonia",
                    "postcode" => 63174
              ],
              "email" => "leevi.wirtanen@example.com",
              "phone" => "05-212-720",
              "picture" => [
                       "large" => "https://randomuser.me/api/portraits/men/19.jpg",
                       "medium" => "https://randomuser.me/api/portraits/med/men/19.jpg",
                       "thumbnail" => "https://randomuser.me/api/portraits/thumb/men/19.jpg"
              ]
           ],
           [
              "id" => 3,
              "name" => [
                 "first" => "Kaitlin",
                 "last" => "Sutton"
              ],
              "location" => [
                    "street" => "2524 Park Lane",
                    "city" => "Tullamore",
                    "state" => "Waterford",
                    "postcode" => 94997
              ],
              "email" => "kaitlin.sutton@example.com",
              "phone" => "071-796-4637",
              "picture" => [
                       "large" => "https://randomuser.me/api/portraits/women/2.jpg",
                       "medium" => "https://randomuser.me/api/portraits/med/women/2.jpg",
                       "thumbnail" => "https://randomuser.me/api/portraits/thumb/women/2.jpg"
              ]
           ],
           [
              "id" => 4,
              "name" => [
                 "first" => "Alice",
                 "last" => "Wilson"
              ],
              "location" => [
                    "street" => "2925 Lakeview Ave",
                    "city" => "Chipman",
                    "state" => "Manitoba",
                    "postcode" => 60070
              ],
              "email" => "alice.wilson@example.com",
              "phone" => "937-532-8950",
              "picture" => [
                       "large" => "https://randomuser.me/api/portraits/women/62.jpg",
                       "medium" => "https://randomuser.me/api/portraits/med/women/62.jpg",
                       "thumbnail" => "https://randomuser.me/api/portraits/thumb/women/62.jpg"
              ]
           ],
           [
              "id" => 5,
              "name" => [
                 "first" => "Etienne",
                 "last" => "Roy"
              ],
              "location" => [
                    "street" => "2263 Dieppe Ave",
                    "city" => "Sutton",
                    "state" => "Alberta",
                    "postcode" => 28791
              ],
              "email" => "etienne.roy@example.com",
              "phone" => "498-395-4096",
              "picture" => [
                       "large" => "https://randomuser.me/api/portraits/men/4.jpg",
                       "medium" => "https://randomuser.me/api/portraits/med/men/4.jpg",
                       "thumbnail" => "https://randomuser.me/api/portraits/thumb/men/4.jpg"
              ]
           ]
        ];
     
     
    return response()->json($contacts);
});


Route::get('/home/test', function () {
   return view('index');
});

Route::get('/{any}', function () {
   return view('app');
})->where('any', '.*');


