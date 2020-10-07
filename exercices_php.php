<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercices php</title>
</head>
<body>
    
<?php 

function birthYear(int $age=null) {
    if ($age){
        $birthYear = date("Y")-$age;
        return $birthYear;
    }
    else{
        return "no age given";
    }
}
// echo birthYear(44);

$user =[
    "firstname" => "John",
    "lastname" => "Doe",
    "age" => 42,
    "job" => "dev"
];

Function identityCard (array $user) :string {
    $variable="";
    foreach ($user as $key =>  $value){
    
    $variable .= $key . " : " . $value . "<br>";
    }
    return $variable;
}

// echo identityCard ($user);

$shopping = [
    "chaussures" => 70,
    "jean" => 59,
    "t-shirt" => 20
];

$reduc = 20;

function bilt (array $shopping, int $reduc){
    $total =0;
    foreach($shopping as $key => $value){
        $total += (1- $reduc /100)*$value;
    }
    return $total;
}
//  echo bilt($shopping, $reduc);


echo "exercice 2  ~~~~~~~~~~~~~~~~~~". "<br>";

function triple (){
    for ($i=0; $i<100 ; $i++){
        if ($i%3 == 0 && $i%2 !=0){
            echo $i . "<br>";
        }
    }
}
// triple();

echo "exercice 3  ~~~~~~~~~~~~~~~~~~". "<br>";

$user = [
    "lastname" => "Doe",
    "firstname" => "John",
    "nickname" => "",
    "age" => 42,
    "hobby" => "",
    "sport" => ""
  ];

function noInfo(array $user){
    foreach($user as $key => $value){
        if ($value == ""){
            $user[$key] = "No information provided";
        }
    }
    return $user;
}
// var_dump(noInfo($user));

$texte = "B0nj0ur les n0uveau, démarr0ns la pr0grammati0n";

// function ohN0(string $texte){
//     $texplode = str_split($texte,1);
//     $texte="";
//     foreach($texplode as $key => $value){
//         if($value === "0") {
//             $texte .="o";
//         }
//          else{
//             $texte .=$value;
//          }
//     }
//     return $texte;
// }
// echo ohN0($texte);

// $text="test";
// $show=100;
// function addDash(string $text, int $how){
//     $texplode = str_split($text,1);
//     $text="";
//     for ($i=0;$i<$how;$i++){
//         if ($i%2 === 0){
//             $text .= "-";
//         }
//         else {
//             $text .= "*";
//         }
//     }
//     foreach($texplode as $key => $value){
//         $text .= $value;
//     }
// return $text;
// }
// echo addDash($text, $show);

// $numbers = [4, 15, 2, 145, 42, 5, 78, 12];

// function bestSale(array $numbers){
//     $higNumber = 0;
//     foreach ($numbers as $key => $value){
//         if ($higNumber<$value){
//             $higNumber = $value;
//         }
//     }
//     return $higNumber;
// }
// echo bestSale($numbers);

// function swimingFull (int $height, int $width, int $depth,  int $speed){
//     $volume = $height * $width * $depth;
//     $duration = $volume / $speed;
//     return $duration; 
// }

// echo swimingFull(8, 4, 3, 2);

// function perimeter (int $ray){
//     $perimeter =2 * 3.14 * $ray;
//     return $perimeter;
// }

// function area (int $ray){
//     $area =3.14 * $ray * $ray;
//     return $area;
// }

// echo "perimetre : " .  perimeter (5) . "<br>" . "aire : " . area(5);

// function ramses(){
//     $text="";
//     for($i=0; $i<6 ; $i++){
//     echo $text .= "*";
//     echo "<br>";
//     }
// }
// ramses();

// function fizzBuzz (){
//     $text ="";
//     for($i=0; $i<100 ; $i++){
//         if($i%3 !== 0 && $i%5 !== 0){
//             echo $i;
//         }
//         elseif ($i%3 === 0 && $i%5 === 0){
//             echo "fizz Buzz";
//         }
//         elseif($i%3 == 0){
//             echo " buzz";
//         }
//         else {
//             echo "fizz";
//         }
//         echo "<br>";
//     }
// }
// fizzBuzz();

// function chess(){
//     $board="";
//     for ($i=0;$i<8;$i++){
//         for ($j=0;$j<8;$j++){
//             if(($i+$j)%2 ==0){
//                 $board .="#";
//             }
//             else {
//                 $board .="O";
//             }
//         }
//         $board .= "<br>";
//     }
//     return $board;
// }
// echo chess();


// function inTheMatrix (){
//     $matrix = [1,0,0,0];
//     $i=0;
//     foreach ($matrix as $key => $value){
//         echo $key;
//         if ($key == $i){
//             echo "1 <br>";
//         }
//         else {
//             echo "0 <br>";
//         }
//     echo "----------<br>";
//     $i++;
//     echo $i;
//     }
// }
// inTheMatrix();




?>
    
</body>
</html>
