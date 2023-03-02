<?php

// include './header.php';
// echo "<br>";

// print_r(isset($_POST['Password']))




// $cars = 'string';

// $cars = [
//     "volvo",
//     "bmw",
//     "ford"
// ];

// $trucks = [
//     'iveco',
//     'toyota'
// ];

// $merged = array_merge($cars, $trucks);


// var_dump( $merged);


// $cars = [
//     "https://volvo.com" => "volvo",
//     "https://bmw.com" => "bmw",
//     "https://ford.com" => "ford"];

// foreach ($cars as $href => $car) {
//     echo "<li><a href='".$href."'>$car</a></li>";
// }


// $cars = [
//     "https://volvo.com" => "volvo",
//     "https://bmw.com" => "bmw",
//     "https://ford.com" => "ford"];

// function createNavbarLinks($cars)
// {
// foreach ($cars as $href => $car) {
//     echo "<li><a href='".$href."'>$car</a></li>";
// }
// }
// createNavbarLinks($cars); 

//     echo "<u>class work 9feb2023</u>";

//     $country = 'Ireland';
//     $city = 'Dublin';
//     $population = '574221';

//     echo "<ul style='list-style-type:square;'>
//     <li> $country </li>
//     <li> $city </li>
//     <li> $population</li>
//     </ul>";

//     echo " $city - the capital of Ireland. ";
//     echo "<p>$country and $city are growing fast.</p>";

// //     

// // $cars = array("Volvo", "BMW", "Toyota");

// // echo count($cars);

// // $colours1 =  array("red", "green", "blue", "yellow");
// // $colours2 =  array("black", "white", "purple", "orange");

// // $allColours = array_merge($colours1, $colours2);

// // echo implode('|', $allColours);

// // echo implode('c', $allColours);

// // Class work lesson 8

// //Create 2 arrays of cites

// // Join the arrays together (array_merge)

// // Create a function to print a piece of text and a new line "<br/>"

// // Use this function to print all the cities (foreach)
// echo "<u>class work lesson 8</u><br><br>";
//       $cities1 = array("New York", "London", "Tokyo");
//       $cities2 = array("Paris", "Sydney", "Moscow");
//       $allCities = array_merge($cities1, $cities2);

//       function printCity($city) {
//         echo "$city<br />";
//       }

//       array_walk($allCities, 'printCity');

//       echo "<br>";

//Create a header.php file.

// Create an array of links

// Use Associative Arrays e.g. $ages = ["Peter" => "35", "Ben" => "37", "Joe" => "43"];

// Generate a nav HTML using the array and the link address and names

// Create an index.php

// Create a typical HTML structure

// Import the header.php file as the header of the page (include)

// $ages = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

// foreach ($ages as $name => $age) {
//     echo "$name is $age years old.<br>";
// }

//lesson 9 13th feb 2023

//constants
// ?>
<!-- // <html>
// <body>

// <!create a search form (using method get) to search for book titles
// - just one form field : title
// - print out the tile that was submitted>
// <!-- 
// <section class="container">

// <form class="searchbox" method="post">
//   <label for="Title">Title</label>
//   <input id="Title" name="Title" placeholder="Book title" type="text"/>
  
//     <button id="searchButton" type="submit"> Search </button>

//   </section>

//   <br>
// </form> -->

<!-- //   <!create a login form (using post) to login a user
// - 2 form fields : user/email + password
// - form action "dashboard.php"
// - check if both fields have a value
// - if they do print out "welcome $username";>

// <section class="container">

//   <form class="signup-form" action="dashboard.php" method="POST">

//     <label for="user">User</label>
//     <input id="user" name="user" placeholder="user" type="text" />

//     <label for="Password"> Password </label>
//     <input id="Password" name="Password" placeholder="Password" type="Password"/>

//     <button id="loginButton" type="submit"> Login </button>
//   </form>
// </section>
// </body>
// </html> --> 
<!-- 
//search form -->
<?php
$databasePassword = 'pEMPRvPG]52l(UF!';
$databaseUser = 'recipe-user';
$databaseHost = 'localhost';
$database = 'recipes';



if (isset($_GET['q'])) {
  
  $connection = new mysqli($databaseHost, $databaseUser, $databasePassword, $database);  

  $statement = $connection->prepare('SELECT * FROM recipe_list WHERE "name" = ?');

  $statement->bind_param('s', $_GET['q']);
  $statement->execute();

  $result = $statement->get_result();

    if ($result->num_rows > 0) {

      $recipe = $result->fetch_assoc();

      $recipeId = $recipe['id'];

      $recipeName = $recipe['name'];

      $recipeDescription = $recipe['description'];
    }

      if ($result->num_rows === 0) {
        
        $noResults = "<p>No results found</p>";

      }

    }

   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
</head>
<body>
<section class="container">


    <form action="" method="GET">
        <label for="username">Select recipe</label>
        <input id="username" name="q" placeholder="Search recipes" type="text"/>

        <button type="submit">Search</button>
    </form>

    <div>
      <h1>Search results</h1> 
      <?php

          if (isset($recipeName) && isset($recipeDescription) && isset($recipeId)) {

            echo "<p>$recipeName</p>";
            
            echo "<p>$recipeDescription</p>";

            echo "<a href='ingredients.php?id=$recipeId'>See ingredients</a>";

          }

          if (isset($noResults)) {

            echo $noResults;

          }

      ?>
    </div>

    
</section>
</body>
</html>


