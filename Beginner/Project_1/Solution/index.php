<?php
    $config = array(
        array(0, 'UNSHEDULED', 'UNSHEDULED'),
        array(0, 'UNSHEDULED', 'UNSHEDULED'),
        array(0, 'UNSHEDULED', 'UNSHEDULED'),
        array(0, 'UNSHEDULED', 'UNSHEDULED'),
    );

    $config_file = fopen("config.txt", "r");

    $config_lev = "None";

    // read the configuration file
    while(!feof($config_file)){
        $line = fgets($config_file); // read line by line

        if ($line == "[FORCELOG]" || $line == "[SHEDULE]") $config_lev = $line; // store the configuration level
        



    }//end of reading while loop



?>


<!DOCTYPE html>

<html>
    <head>
        <meta name="theme-color" content="#4285f4">
        <link rel="stylesheet" href="style.css">
        <title>Project 1</title>
    </head>

    <body>
        <div class = "Main-content-box">

        <div class = "Title-wrapper">
            <h1> IoT house device control </h1>
        </div>

        <div class = "Content-wrapper">
            <form action="submition.php" method="POST">
                <table>
                    <tr> <th>Device ID</th> <th>Force ON ?</th> <th>Start Time</th> <th>End time</th></tr>
                    <tr> <td>Device No 1</td> <td> <input type = "checkbox" name = "Status_dev1"> </td>  <td> <input type="time" name="Start_dev1"> </td> <td> <input type="time" name="End_dev1"> </td> </tr>
                    <tr> <td>Device No 2</td> <td> <input type = "checkbox" name = "Status_dev2"> </td>  <td> <input type="time" name="Start_dev2"> </td> <td> <input type="time" name="End_dev2"> </td> </tr>
                    <tr> <td>Device No 3</td> <td> <input type = "checkbox" name = "Status_dev3"> </td>  <td> <input type="time" name="Start_dev3"> </td> <td> <input type="time" name="End_dev3"> </td> </tr>
                    <tr> <td>Device No 4</td> <td> <input type = "checkbox" name = "Status_dev4"> </td>  <td> <input type="time" name="Start_dev4"> </td> <td> <input type="time" name="End_dev4"> </td> </tr>
                </table>

                <br>

                <button type="submit" name="submit"> Submit Configuration </button>

            </form>

        </div>
        




        </div>    
    </body>
</html>