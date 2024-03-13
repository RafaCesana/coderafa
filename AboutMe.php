<!DOCTYPE html>
<html lang="en">
    <head>

        <title>About Me</title>

        <?php
            include 'Include.php';
            HTMLHeadTags();
        ?>

    </head>
    <body>
        <?php
            IncludeHeader();   
            //GridSystem();

            echo <<< EOT
                <div class="aboutme-layout">
                    <div class="aboutme-container">
                        <div class="aboutme-right">
                            <h1>Who am I?</h1>
                            <p>test</p>
                        </div>
                        <div class="aboutme-left">
                            <h1>My history</h1>
                            <p>test</p>
                        </div>
                    </div>
                </div>
            EOT;
     
        ?>
    </body>
</html>
