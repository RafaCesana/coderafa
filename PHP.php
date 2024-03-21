<!DOCTYPE html>
<html lang="en">
    <head>

        <title>PHP | CodeRafa</title>
        <link rel="stylesheet" href="PHPStyle.css">

        <?php
            include 'Include.php';
            HTMLHeadTags();
        ?>

    </head>
    <body>
        <?php
            IncludeHeader();
            //GridSystem();

            // Links selection on left-column-layout
            $HomeClassLink = "link-not-selected";
            $APIsClassLink = "link-not-selected";

            echo <<< EOT
                <div class="two-columns-layout-container">       
                    <div class="right-column-layout">
            EOT;

            $p = $_GET['p'];
            
            if($p=='') {
                $HomeClassLink = "link-selected";
                echo <<< EOT
                    <h1>PHP <i style="background-color:#777BB3" class="fa-brands fa-php"></i></h1>
                    <p class="DefaultText">&emsp;PHP studies.</p>
                EOT;
            }
            if($p=='APIs') {
                $APIsClassLink = "link-selected";
                include 'curl.php';

                // Calling API
                $SelectedOption = $_POST['USCities'];
                $aGeocoding = GetGeocoding($SelectedOption);

                $Name       = $aGeocoding[0];
                $State      = $aGeocoding[1];
                $Country    = $aGeocoding[2];
                $Lat        = $aGeocoding[3];
                $Lon        = $aGeocoding[4];              
                
                echo <<< EOT
                    <h1>APIs</h1>
                    <p class="DefaultText">&emsp;APIs calls using cURL.</p>
                    <div class="default-layout-container">
                        <h2>1. Geocoding</h2>
                        <p>&emsp;Geocoding API is a simple tool that <a class="on-text" href="https://openweathermap.org/">OpenWeather</a> have developed to ease the search for locations while working with geographic names and coordinates.</p>
                        <div class="GeocodingAPI">
                            <div>
                                <div>
                                    <form method="post" action="PHP.php?p=APIs">
                                        <label for="USCities">Choose a US city: </label>
                                        <select name="USCities">
                                            <option value="Orlando">Orlando</option>
                                            <option value="Chicago">Chicago</option>
                                            <option value="Arizona">Arizona</option>
                                            <option value="SanDiego">SanDiego</option>
                                        </select>
                                        <input type="submit" value="Find" name="find">
                                    </form>
                                </div>
                                <div>
                                    <span style="color:#6f6f6f"><i>$Name, $State, $Country</i></span>
                                </div>
                                <div>  
                                    <table>
                                        <tr>
                                            <th>LAT</th>
                                            <td>$Lat</td>
                                        </tr>
                                        <tr>
                                            <th>LON</th>
                                            <td>$Lon</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    EOT;
            }

            echo <<<EOT
                    </div>
                    <div class="left-column-layout">
                        <ul>
                            <a class="$HomeClassLink" href="/PHP.php"><li>Home</li></a>
                            <a class="$APIsClassLink" href="/PHP.php?p=APIs"><li>APIs</li></a>
                        </ul>
                    </div>
                </div>
            EOT;    
        ?>

        <script type="text/javascript">
                document.getElementById('USCities').value = "<?php echo $_POST['USCities']; ?>";
        </script>
    </body>
</html>
