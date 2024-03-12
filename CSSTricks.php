<!DOCTYPE html>
<html lang="en">
    <head>

        <title>CSS Tricks</title>

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
            }
            if($p=='Switches') {
                $ToggleSwitchesClassLink = "link-selected";
                BuildingContent();
            }
            if($p=='Spinners') {

                $LoadingSpinnersClassLink = "link-selected";

                // ---------- Exec-Code Block 1 ------------ //

                $Exec = '<span style="color:#000;">test</span>';
                $HtmlCode =<<< EOT
                    &lt;code&gt;
                        &emsp;&emsp;<span style="color: #60A365;">&lt;span&gt; </span>
                                &emsp;&emsp;&emsp;&emsp; test
                        &emsp;&emsp;<span style="color: #60A365;">&lt;/span&gt; </span>
                    &lt;/code&gt;
                    &lt;code&gt;
                        &emsp;&emsp;<span style="color: #60A365;">&lt;span&gt; </span>
                                &emsp;&emsp;&emsp;&emsp; test
                        &emsp;&emsp;<span style="color: #60A365;">&lt;/span&gt; </span>
                    &lt;/code&gt;
                    &lt;code&gt;
                        &emsp;&emsp;<span style="color: #60A365;">&lt;span&gt; </span>
                                &emsp;&emsp;&emsp;&emsp; test
                        &emsp;&emsp;<span style="color: #60A365;">&lt;/span&gt; </span>
                    &lt;/code&gt;
                    &lt;code&gt;
                        &emsp;&emsp;<span style="color: #60A365;">&lt;span&gt; </span>
                                &emsp;&emsp;&emsp;&emsp; test
                        &emsp;&emsp;<span style="color: #60A365;">&lt;/span&gt; </span>
                    &lt;/code&gt;
                    &lt;code&gt;
                        &emsp;&emsp;<span style="color: #60A365;">&lt;span&gt; </span>
                                &emsp;&emsp;&emsp;&emsp; test
                        &emsp;&emsp;<span style="color: #60A365;">&lt;/span&gt; </span>
                    &lt;/code&gt;
                EOT;
                $HtmlCode = nl2br($HtmlCode);

                $CSSCode =<<< EOT
                    .ClassTest &#123;
                        &emsp;&emsp; color: #fff;
                    &#125;
                    .ClassTest &#123;
                        &emsp;&emsp; color: #fff;
                    &#125;
                    .ClassTest &#123;
                        &emsp;&emsp; color: #fff;
                    &#125;
                    .ClassTest &#123;
                        &emsp;&emsp; color: #fff;
                    &#125;
                    .ClassTest &#123;
                        &emsp;&emsp; color: #fff;
                    &#125;
                    .ClassTest &#123;
                        &emsp;&emsp; color: #fff;
                    &#125;
                    .ClassTest &#123;
                        &emsp;&emsp; color: #fff;
                    &#125;
                    .ClassTest &#123;
                        &emsp;&emsp; color: #fff;
                    &#125;
                EOT;
                $CSSCode = nl2br($CSSCode);

                // Get Exec-Code Block
                $aTecName = array('Html', 'CSS');
                $aCode = array($HtmlCode, $CSSCode);
                $aContainersIDs = array('html-loading-spinners-0', 'css-loading-spinners-0');

                GetExecCode($aTecName, $aContainersIDs, $Exec, $aCode);


                // ---------- Exec-Code Block 2 ------------ //

                $Exec = '<span style="color:#000;">test 2</span>';
                $HtmlCode =<<< EOT
                    &lt;code&gt;
                        &emsp;&emsp;<span style="color: #60A365;">&lt;span&gt; </span>
                                &emsp;&emsp;&emsp;&emsp; test 2
                        &emsp;&emsp;<span style="color: #60A365;">&lt;/span&gt; </span>
                    &lt;/code&gt;
                EOT;
                $HtmlCode = nl2br($HtmlCode);

                $CSSCode =<<< EOT
                    .ClassTest2 &#123;
                        &emsp;&emsp; color: #f0f;
                    &#125;
                EOT;
                $CSSCode = nl2br($CSSCode);

                // Get Exec-Code Block
                $aTecName = array('Html', 'CSS');
                $aCode = array($HtmlCode, $CSSCode);
                $aContainersIDs = array('html-loading-spinners-1', 'css-loading-spinners-1');

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
                            <a class="$LoadingSpinnersClassLink" href="/CSSTricks.php?p=Spinners"><li>Loading Spinners</li></a>
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
