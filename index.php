<!DOCTYPE html>
<html lang="en">
    <head>

        <title>CodeRafa</title>

        <?php
            include 'Include.php';
            HTMLHeadTags();
        ?>

    </head>
    <body>
        <?php
            IncludeHeader();
        ?>

        <main>
            <div class="vertical-main-containers">
                <div>
                    <div class="intro-container">
                        <div class="intro-container-item">
                            <div class="MainTitle-container">
                                <span class="SubMainTitle">RAFAEL CESANA</span>
                                <h1 class="MainTitle" style="margin-bottom:0;">WEB</h1>
                                <h1 class="MainTitle" style="margin-top:0;"><span style="text-decoration:underline; text-decoration-color: rgb(254, 179, 38);">DEV</span>ELOPER</h1>
                                <span class="SubMainTitle">You are at the website where I apply some of my knowledge</br>
                                Be welcome to explore!</span>
                            </div>
                        </div>
                        <div class="intro-container-item">
                        </div>
                    </div>
                </div>
                <div class="main-blocks light">
                    <div class="headline">
                        <h2 class="colorfull-1">Geocoding API</h2>
                        <p style="color:#000;" class="DefaultText">Search for coordinates location using Geocoding API from OpenWeather. This project, such as other PHP projects you can find clicking at <a class="on-text" href="PHP.php">PHP page.</a></p>
                    </div>
                    <div>
                        <?php
                            // Calling API
                            include 'curl.php';
                            $SelectedOption = $_POST['USCities'];
                            if($SelectedOption=='') {
                                $SelectedOption = 'Orlando';
                            }
                            $aGeocoding = GetGeocoding($SelectedOption);
                            GetPHPProjects('API-Geocoding',$aGeocoding);
                        ?>
                    </div>
                </div>
                <div class="main-blocks dark">
                    <div class="project">
                        <p>CSS list projects CSS list projects CSS list projects CSS list projects</p>
                    </div>
                    <div class="headline">
                        <h2 style="text-align:right;" class="colorfull-1">CSS Tricks</h2>
                        <p class="DefaultText">Different CSS tricks Different CSS tricks Different CSS tricks Different CSS tricks Different CSS tricks Different CSS tricks Different CSS tricks Different CSS tricks Different CSS tricks</p>
                    </div>
                </div>
                <div class="main-blocks light">
                    <div class="headline">
                        <h2 class="colorfull-1">FILE.IO API</h2>
                        <p style="color:#000;" class="DefaultText">Super simple file sharing! Super simple file sharing! Super simple file sharing! Super simple file sharing! Super simple file sharing! Super simple file sharing! Super simple file sharing!</p>
                    </div>
                    <div class="project">
                        upload files upload files upload files upload files
                    </div>
                </div>
                <div class="main-blocks dark">
                    <div class="project">
                        <p>JS list projects JS list projects JS list projects JS list projects</p>
                    </div>
                    <div class="headline">
                        <h2 style="text-align:right;" class="colorfull-1">JS PROJECTS</h2>
                        <p class="DefaultText">Different JS Different JS Different JS projects Different JS projects Different JS projects</p>
                    </div>
                </div>
            </div>    
            
            <?php
                //GridSystem();
            ?>

        </main>

        <footer>
            <div class="footer-container">
                FOOTER
            </div>
        </footer>

    </body>
</html>