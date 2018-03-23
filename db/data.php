<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_tp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
$category = array(
    '1' => 'Berline',
    '2' => 'Hatchback',
    '3' => 'Suv',
);

$product = array(
    '11' => array(
        'model' => "Honda",
        'category' => '1',
        'image' => "accord.jpg",
        'km' => '140.000km',
        'annee' => '2014',
        'prix' => '20900$',
    ),

    '12' => array(
        'model' => "mercedes",
        'category' => '1',
        'image' => "c203.jpg",
        'km' => '100.000km',
        'annee' => '2010',
        'prix' => '19900$',
    ),
    '13' => array(
        'model' => "toyota corola",
        'category' => '1',
        'image' => "corola.jpg",
        'km' => '100.000km',
        'annee' => '2010',
        'prix' => '19900$',
    ),
    '14' => array(
        'model' => "hyunday elentra",
        'category' => '1',
        'image' => "elentra.jpg",
        'km' => '100.000km',
        'annee' => '2008',
        'prix' => '9900$',
    ),
    '15' => array(
        'model' => "kia forte",
        'category' => '1',
        'image' => "forte.jpg",
        'km' => '101.000km',
        'annee' => '2013',
        'prix' => '23900$',
    ),

    '112' => array(
        'model' => "honda civic",
        'category' => '2',
        'image' => "civic.jpg",
        'km' => '115.000km',
        'annee' => '2011',
        'prix' => '10900$',
    ),
    '122' => array(
        'model' => "mercedes class a",
        'category' => '2',
        'image' => "classa.jpg",
        'km' => '125.000km',
        'annee' => '2013',
        'prix' => '24900$',
    ),
    '132' => array(
        'model' => "toyota auris",
        'category' => '2',
        'image' => "auris.jpg",
        'km' => '140.000km',
        'annee' => '2009',
        'prix' => '10900$',
    ),
    '142' => array(
        'model' => "hyunday accent",
        'category' => '2',
        'image' => "accent.jpg",
        'km' => '118.000km',
        'annee' => '2008',
        'prix' => '7400$',
    ),
    '152' => array(
        'model' => " kia rio",
        'category' => '2',
        'image' => "rio.jgg",
        'km' => '112.000km',
        'annee' => '2008',
        'prix' => '6900$',
    ),
    '113' => array(
        'model' => "honda crv",
        'category' => '3',
        'image' => "crv.jpg",
        'km' => '135.000km',
        'annee' => '2013',
        'prix' => '13900$',
    ),
    '123' => array(
        'model' => "mercedes glk",
        'category' => '3',
        'image' => "glk.jpg",
        'km' => '125.000km',
        'annee' => '2015',
        'prix' => '29900$',
    ),
    '133' => array(
        'model' => "toyota rav4",
        'category' => '3',
        'image' => "rav4.jpg",
        'km' => '160.000km',
        'annee' => '2009',
        'prix' => '14900$',
    ),
    '143' => array(
        'model' => "hyunday tucson",
        'category' => '3',
        'image' => "tucson.jpg",
        'km' => '110.000km',
        'annee' => '2012',
        'prix' => '11900$',
    ),
    '153' => array(
        'model' => "kia sol",
        'category' => '3',
        'image' => "soul.jpg",
        'km' => '119.000km',
        'annee' => '2011',
        'prix' => '11900$',
    )
);




