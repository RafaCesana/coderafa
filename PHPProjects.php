<!DOCTYPE html>
<html lang="en">
    <head>

        <title>PHP Projects | CodeRafa</title>
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
                    <div class="right-column-layout vertical-main-containers">
            EOT;

            $p = $_GET['p'];
            
            if($p=='') {
                $HomeClassLink = "link-selected";
                echo <<< EOT
                    <h1>PHP PROJECTS <i style="background-color:#777BB3" class="fa-brands fa-php"></i></h1>
                    <p class="DefaultText">&emsp;PHP studies.</p>
                EOT;
            }
            if($p=='APIs') {
                $APIsClassLink = "link-selected";

                // Calling API
                include 'curl.php';
                $SelectedOption = $_POST['USCities'];
                if($SelectedOption=='') {
                    $SelectedOption = 'Orlando';
                }
                $aGeocoding = GetGeocoding($SelectedOption);
       
                echo <<< EOT
                    <h1>APIs</h1>
                    <p class="DefaultText">&emsp;APIs calls using cURL.</p>
                    <div class="default-layout-container">
                        <h2>1. Geocoding</h2>
                        <p>&emsp;Geocoding API is a simple tool that <a class="on-text" href="https://openweathermap.org/">OpenWeather</a> have developed to ease the search for locations while working with geographic names and coordinates.</p>
                        <div class="GeocodingAPI">
                EOT;
                            GetPHPProjects('API-Geocoding',$aGeocoding);
                echo <<< EOT
                        </div>
                    </div>
                EOT;
            }

            echo <<<EOT
                    </div>
                    <div class="left-column-layout">
                        <ul>
                            <a class="$HomeClassLink" href="/PHPProjects.php"><li>Home</li></a>
                            <a class="$APIsClassLink" href="/PHPProjects.php?p=APIs"><li>APIs</li></a>
                        </ul>
                    </div>
                </div>
            EOT;    
        ?>

    </body>
</html>
