<!DOCTYPE html>
<html lang="en">
    <head>

        <title>CodeRafa</title>
        <link rel="stylesheet" href="CSSTricksStyle.css">
        <link rel="stylesheet" href="JSProjectsStyle.css">
        <script type="text/javascript" src="JSProjectPack.js"></script>

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
                        <h2>Geocoding API</h2>
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
                        <div class="slideshow-container">
                            <div class="my-slides fade" style="display:block;">
                                <div class="numbertext">1 / 2</div>
                                    <div class="show-block-container-dark">
                                        <span class="loader0" style="border: 3px solid #fff; border-bottom-color:transparent;"></span>
                                    </div>
                                <div class="text">
                                    <a href="https://coderafa.com/CSSTricks.php?p=Loading" class="on-text T">See more Loading CSS Tricks</a>
                                </div>
                            </div>

                            <div class="my-slides fade">
                                <div class="numbertext">2 / 2</div>
                                    <div class="show-block-container-dark">
                                        xxx
                                    </div>
                                <div class="text">
                                    <a href="https://coderafa.com/CSSTricks.php?p=Switches" class="on-text T">See more Toggle Switches CSS Tricks</a>
                                </div>
                            </div>

                            <a class="prev T" onclick="NextSlide(-1)">❮</a>
                            <a class="next T" onclick="NextSlide(1)">❯</a>
                        </div>
                    </div>
                    <div class="headline">
                        <h2 style="text-align:right;">CSS Tricks</h2>
                    </div>
                </div>
                <div class="main-blocks light">
                    <div class="headline">
                        <h2>FILE.IO API</h2>
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
                        <h2 style="text-align:right;">JS PROJECTS</h2>
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