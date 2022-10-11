<?php
    // echo - output numbers, strings, html. Can be done for multiple data types (string, float...)
    echo 'Hello', 123, 10.5;

    // print works like echo but can only take a single argument
    // we can use parenthesis with both echo and print though they aren't necessary 
    print 'Print only takes a single argument';


    // print_r() prints single values and arrays 
    print_r([2, 99, 1]);

    // var_dump() used a lot with arrays. Returns more info like data type and length
    var_dump('Hello');

    var_dump(true);
    var_dump(6783);
    var_dump(8.56);

    // var_export()
    var_export('Tuesday night');


    // data type 
    // strings, integers, float(decimal), boolean, array (special variable which can hold more than one value), boolean, object - class, NULL, resource - holds a resource 

    // variable naming rules 
    /**
     * must be prefixed with $
     * must start with a letter or an underscore (can't start with a number)
     * case sensitive 
     * must only contain alphanumeric characters 
    */


    $summary = 'The book was written by Malcolm Gladwell';
    $age = 67;
    $has_money = true;
    $cash_on_hand = 50.56;

    echo $has_money;
    var_dump($has_money);


    // having variables within string 
    // string concatenation 

    echo $summary . ' when he was ' . $age . ' years old.'; // works the same way in javascript except javascript uses a + and also there are template literals 

    // using double quotes takes away the need of using the period for concatenation 

    $name = 'Peter';
    $age = 34;

    echo "$name is $age years old.";
    echo "My name is ${name}."; // the template literal syntax can be used within php as well 

    $x = 5 + 5; // other arithmetic operations hold 
    $y = '5' + '5';
    $z = "5" + "5";

    var_dump($x);
    var_dump($y);
    var_dump($z);

    // constants - used for values that do not change e.g database credentials 
    define('HOST', 'localhost');
    define('DB_NAME', 'my_db');

    echo DB_NAME;


    // Arrays
    // simple array 
    $numbers = [2, 5, 6, 7, 9, 1];
    $cars = array('Audi', 'Land Rover', 'BMW', 'Mercedes-Benz');

    print_r($numbers);
    var_dump($cars);

    // index
    echo $cars[2];

    // associative array 
    $colors = [
        1 => 'red', 
        4 => 'blue',
        6 => 'yellow'
    ];

    echo $colors[6];

    // in associative arrays, we mostly have strings for keys - used with tabular data when working with databases
    // similar to javascript objects and python dictionary 
    /* 
     *javascript object 
    
     const person = {
        name: 'John Wick',
        email: 'wick@gmail.com'
     }
    */

    $hex = [
        'red' => '#f00',
        'blue' => '#f01', 
        'green' => '#ff3'
    ];

    echo $hex['blue'];

    $person = [
        'first_name' => 'John', 
        'last_name' => 'Wick', 
        'email' => 'wick@gmail.com'
    ];

    echo $person['email'];

    // multidimensional arrays 
    $people = [
        [
            'first_name' => 'John', 
            'last_name' => 'Wick', 
            'email' => 'wick@gmail.com'
        ], 
        [
            'first_name' => 'Michael', 
            'last_name' => 'Faraday', 
            'email' => 'faraday@gmail.com'
        ],
        [
            'first_name' => 'Leonardo', 
            'last_name' => 'da Vinci', 
            'email' => 'davinci@gmail.com'
        ]
    ];


    echo $people[0]['last_name'];
    echo $people[2]['email'];

    var_dump(json_encode($people));

    var_dump(json_decode($people[0]['last_name']));

    // ? functionality of json_encode and json_decode 

    // json_encode() - turning an associative array to json
    // json_decode() - turning json file to an array 


    // * CONDITIONALS - control structures 
    // operators - same as in js (<, >, >=, <=, ==, === (identical, in js strict equality - s), !=, !===)


    // if statements - syntax same as in js 
    // ? is PHP single-threaded or multi-threaded 

    $age = 24; // we've reassigned the value of age from the initial 34 to 24
    echo $age;

    if ($age >= 30) {
        echo 'You are likely to have completed your undergraduate studies';
    } else {
        echo 'Have you completed your undergraduate studies?';
    }

    // else if statements hold for multiple conditions as in js

    $t = date('H');
    echo $t;

    if($t < 12 ) {
        echo 'Good morning';
    } elseif ($t < 17) {
        echo "Good afternoon";
    } else {
        echo 'Good evening';
    }

    // what is the preferred syntax for else if or elseif

    $posts = ['First post'];

    if (!empty($posts)) { 
        echo $posts[0];
    }
?>

<!-- The closing tag is optional unless there is extra code below the closing tag -->
<!-- semicolons are necessary for the end of statements unless it's the last line to the closing tag (not recommended to omit them either way) -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
      <h3><?php echo 'Prices'; ?></h3>
    </body>
</html>