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
            <div class="main-containers">
                <div>
                    <div class="intro-container">
                        <div class="intro-container-item">
                            <div class="MainTitle-container">
                                <span class="SubMainTitle">Hi! I am Rafa</span>
                                <h1 class="MainTitle">Web Developer</h1>
                                <span class="SubMainTitle">You are at the website where I apply some of my knowledge</br>
                                Be welcome to explore!</span>
                            </div>
                        </div>
                        <div class="intro-container-item">
                        </div>
                    </div>
                </div>
                <div class="main-blocks light">
                    <div>
                        <h2 class="colorfull-1">Geocoding API</h2>
                        <p>from OpenWheater</p>
                    </div>
                    <div>
                        api response
                    </div>
                </div>
                <div class="main-blocks dark">
                    <div>
                        <p>CSS list projects</p>
                    </div>
                    <div>
                        <h2 class="colorfull-1">CSS Tricks</h2>
                        <p>Different CSS tricks</p>
                    </div>
                </div>
                <div class="main-blocks light">
                    <div>
                        <h2 class="colorfull-1">FILE.IO API</h2>
                        <p>Super simple file sharing!</p>
                    </div>
                    <div>
                        upload files
                    </div>
                </div>
                <div class="main-blocks dark">
                    <div>
                        <p>JS list projects</p>
                    </div>
                    <div>
                        <h2 class="colorfull-1">JS Application</h2>
                        <p>Different JS application</p>
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