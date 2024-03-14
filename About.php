<!DOCTYPE html>
<html lang="en">
    <head>

        <title>About | CodeRafa</title>

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
                <div class="about-layout">
                    <div class="about-container">
                        <div>
                            <h1>This website is developed by who?</h1>
                            <p>test</p>
                        </div>
                        <div>
                            <h1>Why?</h1>
                            <p>test</p>
                        </div>
                        <div>
                            <h1>About the website</h1>
                            <h2>Every detail is taken into consideration when building this website</h2>
                            <p>test</p>
                        </div>
                    </div>
                </div>
            EOT;
     
        ?>
    </body>
</html>
