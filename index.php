<!DOCTYPE html>
<html lang="en">
    <head>

        <title>coderafa</title>

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
            <!-- Only on mobile -->
            <div class="div-menu-mobile" id="div-menu-mobile">
                <ul>
                    <a href=""><li>About Me</li></a>
                    <a href=""><li>CSS</li></a>
                    <a href=""><li>JS</li></a>
                    <a href=""><li>PHP</li></a>
                    <a href=""><li>Contact</li></a>
                    <a onclick="ToggleColorTheme();" id="toggle-colortheme-icon"><li><i style="font-size:24px;" class="fa-solid fa-toggle-off"></i></li></a>
                </ul>
            </div>
            
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
                        <h2 class="title-main-blocks colorfull-1">FIXER API</h2>
                        <p>Foreign exchange rates and currency conversion JSON API</p>
                    </div>
                    <div>
                        currency conversion from API
                    </div>
                </div>
                <div class="main-blocks dark">
                    <div>
                        <p>CSS list projects</p>
                    </div>
                    <div>
                        <h2 class="title-main-blocks colorfull-1">CSS Application</h2>
                        <p>Different CSS application</p>
                    </div>
                </div>
                <div class="main-blocks light">
                    <div>
                        <h2 class="title-main-blocks colorfull-1">FILE.IO API</h2>
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
                        <h2 class="title-main-blocks colorfull-1">JS Application</h2>
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