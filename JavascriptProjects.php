<!DOCTYPE html>
<html lang="en">
    <head>

        <title>JS Projects | CodeRafa</title>
        <link rel="stylesheet" href="CSSTricksStyle.css">

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
            $HomeClassLink        = "link-not-selected";
            $CarouselClassLink    = "link-not-selected";

            echo <<< EOT
                <div class="two-columns-layout-container">       
                    <div class="right-column-layout vertical-main-containers">
            EOT;

            $p = $_GET['p'];
            
            if($p=='') {
                $HomeClassLink = "link-selected";
                echo <<< EOT
                    <h1>JS PROJECTS <i style="color:#f0db4f;" class="fa-brands fa-js"></i></h1>
                    <p class="DefaultText">&emsp;This page Javascript projects contains a compilation of JS solutions to add dynamism to the website</p>
                EOT;
            }
            if($p=='Carousel') {

                $CarouselClassLink = "link-selected";

                // ---------- Exec-Code Block 1 ------------ //

                $Exec = '<span class="loader0"></span>';
                $HtmlCode =<<< EOT
                    &lt;span class="loader0"&gt;&lt;/span&gt;

                EOT;
                $HtmlCode = nl2br($HtmlCode);

                $CSSCode =<<< EOT
                    .test {
                        &emsp;&emsp; width: 50px;
                        &emsp;&emsp; height: 50px;
                    }
                EOT;
                $CSSCode = nl2br($CSSCode);

                $JSCode =<<< EOT
                    var s;
                    var b = 10;
                    var c = 5;
                    s = b + c;
                EOT;
                $JSCode = nl2br($JSCode);

                // Get Exec-Code Block
                $aTecName = array('Html', 'CSS', 'JS');
                $aCode = array($HtmlCode, $CSSCode, $JSCode);
                $aContainersIDs = array('html-loading-0', 'css-loading-0', 'js-loading-0');

                GetExecCode($aTecName, $aContainersIDs, $Exec, $aCode, 'horizontal');
            }

            echo <<<EOT
                    </div>
                    <div class="left-column-layout">
                        <ul>
                            <a class="$HomeClassLink" href="/JavascriptProjects.php"><li>Home</li></a>
                            <a class="$CarouselClassLink" href="/JavascriptProjects.php?p=Carousel"><li>Carousel</li></a>
                        </ul>
                    </div>
                </div>
            EOT;        
        ?>
    </body>
</html>
