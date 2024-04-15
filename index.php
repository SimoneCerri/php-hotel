<?php
$hotels = 
[

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

];

//var_dump($_GET["parking"]);
if (!is_null($_GET["park"]))
{
    //echo "Park";
    echo array_filter($hotels, $hotels["parking"]);

    /* foreach ($hotels["parking"] as $result) {
        echo $result;
    } */

    /* foreach ($hotels as $hotel)
    {
        //echo array_filter($hotels, $hotel["parking"]);
        //array_filter($hotel, $hotel["parking"];
    } */
}
?>

<!doctype html>
<html lang='en'>

<head>

   <title>Hotel PHP</title>
   <meta charset='utf-8'>
   <meta name='viewport' content='width=device-width, initial-scale=1'>
   <!-- #region link to Style -->
   <link href='./assets/css/style.css' rel='stylesheet'>
   <!-- #endregion link to Style -->
   <!-- #region link to FontAwesome (icons) -->
   <link rel='stylesheet' href='https: //cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.    css'integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIft+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=='crossorigin='anonymous' referrerpolicy='no-referrer'/>
   <!-- #endregion link to FontAwesome (icons) -->
   <!-- #region links to GoogleFonts (Nanum Gothic Coding) -->
   <link rel='preconnect' href='https: //fonts.googleapis.com'>
   <link rel='preconnect' href='https: //fonts.gstatic.com' crossorigin>
   <link href='https: //fonts.googleapis.com/css2?family=Nanum+Gothic+Coding&display=swap' rel='stylesheet'>
   <!-- #endregion links to GoogleFonts (Nanum Gothic Coding) -->
   <!-- #region link to Bootstrap -->
   <link href='https: //cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH'crossorigin='anonymous'>
   <!-- #endregion link to Bootstrap -->

</head>

<body class='debug'>
    <form action="" method="get">
        <button type="submit" name="park">Filter for Hotel with parking</button>
        <!-- <input type="checkbox" name="parking" id=""> -->
    </form>
   <div id='app'>
       <?php
        foreach ($hotels as $hotel)
        {
             /* "Name: " .$hotel["name"] . "<br>"."Vote: ".$hotel["vote"]."/5"."<br>"."Distance to center: ".$hotel["distance_to_center"]."mt"."<br>"."<br>"; */
            echo "<div
                class='table-responsive'
            >
                <table
                    class='table table-primary'
                >
                    <thead>
                        <tr>
                            <th scope='col'>".$hotel['name']."</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class=''>
                            <td scope='row'>"."Vote: ".$hotel["vote"]."/5"."</td>
                        </tr>
                        <tr class=''>
                            <td scope='row'>"."Distance to center: ".$hotel["distance_to_center"]."mt"."</td>
                        </tr>
                    </tbody>
                </table>
            </div>"."<br>";
        }
       ?>
       
   </div>
   
   <!-- #region Dev-only cdns, disable in production -->
   <!-- #region link to Vue-script -->
   <script src='https: //unpkg.com/vue@3/dist/vue.global.js'></script>
   <!-- #endregion link to Vue-script -->
   <!-- #region link to Bootstrap-script -->
   <script src='https: //cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz' crossorigin='anonymous'></script>
   <!-- #endregion link to Bootstrap-script -->
   <!-- #region link to Script -->
   <script src='./assets/js/main.js'></script>
   <!-- #endregion link to Script -->
   <!-- #endregion Dev-only cdns, disable in production -->

</body>

<style>
    .table 
    {
        text-align:center;
    }
</style>

</html>
