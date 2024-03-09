<!DOCTYPE html>
<html lang="en">
    <head>

        <title>CSS</title>

        <?php
            include 'Include.php';
            HTMLHeadTags();
        ?>

    </head>
    <body>
        <?php
            IncludeHeader();   
            //GridSystem();
        ?>
        <div class="two-columns-layout-container">
            <div class="left-column-layout">
                <ul>
                    <a class="change-color" href="/CSS.php?p=Switches"><li>Toggle Switches</li></a>
                    <a class="change-color" href="/CSS.php?p=Spinners"><li>Loading Spinners</li></a>
                    <a class="change-color" href="/CSS.php?p=AnimatedText"><li>Animated Text on Hover</li></a>
                    <a class="change-color" href="/CSS.php?p=FloatingImage"><li>Floating Image</li></a>
                    <a class="change-color" href="/CSS.php?p=Bootstrap"><li>Bootstrap Application</li></a>
                </ul>
            </div>
            <div class="right-column-layout">

                <?php
                    $p = $_GET['p'];
                    
                    if($p=='Switches') {
                        BuildingContent();
                    }
                    if($p=='Spinners') {

                        // ---------- Exec-Code Block 1 ------------ //

                        // Exec
                        $Exec = '<span style="color:#000;">test</span>';

                        // Html Code
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

                        // CSS Code
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
                        // Exec
                        $Exec = '<span style="color:#000;">test 2</span>';

                        // Html Code
                        $HtmlCode =<<< EOT
                            &lt;code&gt;
                                &emsp;&emsp;<span style="color: #60A365;">&lt;span&gt; </span>
                                        &emsp;&emsp;&emsp;&emsp; test 2
                                &emsp;&emsp;<span style="color: #60A365;">&lt;/span&gt; </span>
                            &lt;/code&gt;
                        EOT;
                        $HtmlCode = nl2br($HtmlCode);

                        // CSS Code
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
                        BuildingContent();
                    }
                    if($p=='FloatingImage') {
                        BuildingContent();
                    }
                    if($p=='Bootstrap') {
                        BuildingContent();
                    }
                    
                ?>


            </div>
        </div>
    </body>
</html>
