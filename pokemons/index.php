<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemons</title>
</head>
<body>
<h1>Pokemons</h1>

<form action="index.php" method="get">
<label for="user_group">Choose the group</label>
<input type="number" name="group" id="user_group">
<input type="submit" value="Submit">
</form>

    <?php

$pokemons_original = file_get_contents('data.json');
$pokemons_json = json_decode($pokemons_original, true);
$pokemons_array = $pokemons_json['results'];

$pokemons_array_limited = array_chunk($pokemons_array, 50);


if ($_GET != null && $_GET['group'] != null) {
    $counter = 0;
    $pokemons_group = $_GET['group'];

    while ($counter < count($pokemons_array_limited[$pokemons_group])) {
        echo $counter + 1 . " ";
        print_r($pokemons_array_limited[$pokemons_group][$counter]['name']);
        echo " - <a href=\"";
        print_r($pokemons_array_limited[$pokemons_group][$counter]['url']);
        echo "\">url</a>";
        echo "<br>";
        $counter++;
    }
    ;
} else {

    echo "<p> Availiable pokemons </p>";

    $counter = 0;

    while ($counter < count($pokemons_array)) {
        echo $counter + 1 . " ";
        print_r($pokemons_array[$counter]['name']);
        echo " - <a href=\"";
        print_r($pokemons_array[$counter]['url']);
        echo "\">url here</a>";
        echo "<br>";
        $counter++;
    }
    ;

}
;
?>

</body>
</html>