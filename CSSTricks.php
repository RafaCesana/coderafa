<!DOCTYPE html>
<html lang="en">
    <head>

        <title>CSS Tricks</title>
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
            $HomeClassLink              = "link-not-selected";
            $ToggleSwitchesClassLink    = "link-not-selected";
            $LoadingSpinnersClassLink   = "link-not-selected";
            $AnimatedTextClassLink      = "link-not-selected";
            $FloatingImageClassLink     = "link-not-selected";
            $BoostrapClassLink          = "link-not-selected";

            echo <<< EOT
                <div class="two-columns-layout-container">       
                    <div class="right-column-layout">
            EOT;

            $p = $_GET['p'];
            
            if($p=='') {
                $HomeClassLink = "link-selected";
                echo <<< EOT
                    <p>This page CSS tricks contains a compilation of tests using Cascading Style Sheets(CSS) to improve design and layout of web pages, being enable to apply the basics and to create more complex responsive web applications.</p>
                EOT;
            }
            if($p=='Switches') {
                $ToggleSwitchesClassLink = "link-selected";
                BuildingContent();
            }
            if($p=='Loading') {

                $LoadingClassLink = "link-selected";

                // ---------- Exec-Code Block 1 ------------ //

                $Exec = '<span class="loader0"></span>';
                $HtmlCode =<<< EOT
                    &lt;span class="loader0"&gt;&lt;/span&gt;

                EOT;
                $HtmlCode = nl2br($HtmlCode);

                $CSSCode =<<< EOT
                    .loader0 {
                        &emsp;&emsp; width: 50px;
                        &emsp;&emsp; height: 50px;
                        &emsp;&emsp; border: 3px solid #000;
                        &emsp;&emsp; border-radius: 50%;
                        &emsp;&emsp; border-bottom-color: transparent;
                        &emsp;&emsp; animation: rotation 1s linear infinite;
                    }
                    
                    @keyframes rotation {
                        &emsp;&emsp; 0% {
                            &emsp;&emsp;&emsp;&emsp; transform: rotate(0deg);
                            &emsp;&emsp; }
                        &emsp;&emsp; 100% {
                            &emsp;&emsp;&emsp;&emsp;transform: rotate(360deg);
                            &emsp;&emsp; }
                    }

                EOT;
                $CSSCode = nl2br($CSSCode);

                // Get Exec-Code Block
                $aTecName = array('Html', 'CSS');
                $aCode = array($HtmlCode, $CSSCode);
                $aContainersIDs = array('html-loading-0', 'css-loading-0');

                GetExecCode($aTecName, $aContainersIDs, $Exec, $aCode);


                // ---------- Exec-Code Block 2 ------------ //

                $Exec = '<span class="loader1"></span>';
                $HtmlCode =<<< EOT
                    &lt;span class="loader1"&gt;&lt;/span&gt;
                EOT;
                $HtmlCode = nl2br($HtmlCode);

                $CSSCode =<<< EOT
                    .loader1 {
                        &emsp;&emsp; width: 48px;
                        &emsp;&emsp; height: 12px;
                        &emsp;&emsp; background: #000;
                        &emsp;&emsp; margin-top: 40px;
                        &emsp;&emsp; position: relative;
                    }
                    .loader1::after {
                        &emsp;&emsp; content: '';
                        &emsp;&emsp; border: 15px solid transparent;
                        &emsp;&emsp; border-top-color: #000;
                        &emsp;&emsp; position: absolute;
                        &emsp;&emsp; left: 50%;
                        &emsp;&emsp; transform: translate(-50%, 0);
                        &emsp;&emsp; bottom: 0;
                        &emsp;&emsp; animation: bounce 0.4s ease-in-out infinite alternate;
                    }
                    .loader1::before {
                        &emsp;&emsp; content: '';
                        &emsp;&emsp; width: 15px;
                        &emsp;&emsp; height: 20px;
                        &emsp;&emsp; background: #000;
                        &emsp;&emsp; position: absolute;
                        &emsp;&emsp; left: 50%;
                        &emsp;&emsp; transform: translate(-50%, 0);
                        &emsp;&emsp; bottom: 25px;
                        &emsp;&emsp; animation: bounce 0.4s ease-in-out infinite alternate;
                    }
                    
                    @keyframes bounce {
                        &emsp;&emsp; 0% {
                            &emsp;&emsp;&emsp;&emsp; transform: translate(-50%, 5px);
                            &emsp;&emsp; }
                            &emsp;&emsp; 100% {
                            &emsp;&emsp;&emsp;&emsp; transform: translate(-50%, -5px);
                            &emsp;&emsp; }
                    }
                EOT;
                $CSSCode = nl2br($CSSCode);

                // Get Exec-Code Block
                $aTecName = array('Html', 'CSS');
                $aCode = array($HtmlCode, $CSSCode);
                $aContainersIDs = array('html-loading-1', 'css-loading-1');

                GetExecCode($aTecName, $aContainersIDs, $Exec, $aCode);
            }

            if($p=='AnimatedText') {
                $AnimatedTextClassLink = "link-selected";
                BuildingContent();
            }
            if($p=='FloatingImage') {
                $FloatingImageClassLink = "link-selected";
                BuildingContent();
            }
            if($p=='Bootstrap') {
                $BoostrapClassLink = "link-selected";
                BuildingContent();
            }

            echo <<<EOT
                    </div>
                    <div class="left-column-layout">
                        <ul>
                            <a class="$HomeClassLink" href="/CSSTricks.php"><li>Home</li></a>
                            <a class="$ToggleSwitchesClassLink" href="/CSSTricks.php?p=Switches"><li>Toggle Switches</li></a>
                            <a class="$LoadingClassLink" href="/CSSTricks.php?p=Loading"><li>Loading</li></a>
                            <a class="$AnimatedTextClassLink" href="/CSSTricks.php?p=AnimatedText"><li>Animated Text on Hover</li></a>
                            <a class="$FloatingImageClassLink" href="/CSSTricks.php?p=FloatingImage"><li>Floating Image</li></a>
                            <a class="$BoostrapClassLink" href="/CSSTricks.php?p=Bootstrap"><li>Bootstrap</li></a>
                        </ul>
                    </div>
                </div>
            EOT;        
        ?>
    </body>
</html>
