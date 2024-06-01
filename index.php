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
                <!--
                <div class="main-blocks light">
                    <img class="TechDrawing Zoom T" src="html-drawing.png" alt="html lgo draw">
                    <img class="TechDrawing Zoom T" src="css-drawing.png" alt="html lgo draw">
                    <img class="TechDrawing Zoom T" src="js-drawing.png" alt="html lgo draw">
                    <img class="TechDrawing Zoom T" src="php-drawing.png" alt="html lgo draw">
                </div>
                -->
                <div class="main-blocks light">
                    <i class="fa-brands fa-html5 TechIcon Zoom T"></i>
                    <i class="fa-brands fa-css3-alt TechIcon Zoom T"></i>
                    <i class="fa-brands fa-square-js TechIcon Zoom T"></i>
                    <i class="fa-brands fa-php TechIcon Zoom T"></i>
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