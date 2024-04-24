<!DOCTYPE html>
<html lang="en">
    <head>

        <title>CSS Tricks | CodeRafa</title>
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
            $LoadingClassLink           = "link-not-selected";
            $AnimatedTextClassLink      = "link-not-selected";
            $FloatingImageClassLink     = "link-not-selected";
            $BoostrapClassLink          = "link-not-selected";
            $AccessibilityClassLink    = "link-not-selected";

            echo <<< EOT
                <div class="two-columns-layout-container">       
                    <div class="right-column-layout vertical-main-containers">
            EOT;

            $p = $_GET['p'];
            
            if($p=='') {
                $HomeClassLink = "link-selected";
                echo <<< EOT
                    <h1>CSS TRICKS <i style="color:#2965f1;" class="fa-brands fa-css3-alt"></i></h1>
                    <p class="DefaultText">&emsp;This page CSS tricks contains a compilation of tests using Cascading Style Sheets(CSS) to improve design and layout of web pages, being enable to apply the basics and to create more complex responsive web applications.</p>
                EOT;
            }
            if($p=='Switches') {
                $ToggleSwitchesClassLink = "link-selected";
                BuildingContent();
            }
            if($p=='Accessibility') {
                $AccessibilityClassLink = "link-selected";

                // Main Title
                echo <<< EOT
                    <h1>Accessibility Tricks</h1>
                    <p class="DefaultText">&emsp;Different solutions for web accessibility</p>
                EOT;

                // ---------------------------------- Accessible Form ------------------------------------ //
                echo <<< EOT
                    <div class="default-layout-container">
                        <h2>Accessible Forms</h2>
                        <p>&emsp;Using focus on form inputs</p>
                        <div style="padding: 20px;">
                            <div class="accessible-forms-container">
                                <div style="display:flex;justify-content:center;">
                                    <form class="accessible-1">
                                        <div style="padding:10px;">
                                            <label for="firstname1">First Name</label>
                                            <input type="text" id="firstname1">
                                        </div>
                                        <div style="padding:10px;">
                                            <label for="lastname1">Last Name</label>
                                            <input type="text" id="lastname1">
                                        </div>
                                        <div style="padding:10px;">
                                            <label for="message1">Message</label>
                                            <textarea id="message1"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div style="display:flex;justify-content:center;">
                                    <form class="accessible-2">
                                        <div>
                                            <label for="firstname2">Name</label>
                                            <input type="text" id="firstname2">
                                        </div>
                                        <div>
                                            <label for="phone2">Phone number</br><span style="font-size:12px;">(XXX.XX.XXXXX.XXXX)</span></label>
                                            <input type="text" id="phone2">
                                        </div>
                                        <div>
                                            <label for="email2">Your email address <span class="mandatory">*</span></label>
                                            <input type="email" id="email2" name="email2" required aria-required="true" placeholder="Email" required="" autocomplete="email">
                                        </div>
                                    </form>
                                </div>
                                <div style="display:flex;justify-content:center;">
                                    <form class="accessible-3">
                                        <div style="padding:10px;">
                                            <label for="firstname3">Username</label>
                                            <input type="text" id="firstname3">
                                        </div>
                                        <div style="padding:10px;">
                                            <label for="pwd3">Password</label>
                                            <input id="pwd3" type="password" placeholder="Enter at least 8 characters"></input>
                                        </div>
                                        <div style="display:flex; align-items:center;">
                                            <label for="checkbox3" style="display:inline; padding-bottom:0; padding-right:10px;">I agree</label>
                                            <input id="checkbox3" type="checkbox"></input>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                EOT;
            }
            if($p=='Loading') {

                $LoadingClassLink = "link-selected";

                // ---------- Exec-Code Block 3 ------------ //
                $Exec = '<span class="loader2"></span>';
                $HtmlCode =<<< EOT
                &lt;span class="loader2"&gt;&lt;/span&gt;
                EOT;
                $HtmlCode = nl2br($HtmlCode);

                $CSSCode =<<< EOT
                    .loader2 {
                        &emsp;&emsp; color: #000;
                        &emsp;&emsp; <span class="Comment">/* Must be monospaced */</span>
                        &emsp;&emsp; font-family: monospace;
                        &emsp;&emsp; font-size: 30px;
                        &emsp;&emsp; <span class="Comment">/* I'm clipping and displaying only element width */</span>
                        &emsp;&emsp; clip-path: inset(0 100% 0 0);
                        &emsp;&emsp; animation: load 2s steps(11) infinite;
                    }
                    .loader2:before {
                        &emsp;&emsp; content:"Loading...";
                    }
                    
                    @keyframes load
                    {
                        &emsp;&emsp; to 
                        &emsp;&emsp; {
                            &emsp;&emsp;&emsp;&emsp; <span class="Comment">/* ch unit is defined as the width of character 0 (ch unit works as an exact measurement for monospaced fonts) */</span>
                            &emsp;&emsp;&emsp;&emsp; clip-path: inset(0 -1ch 0 0);
                        &emsp;&emsp; }
                    }
                EOT;
                $CSSCode = nl2br($CSSCode);

                // Get Exec-Code Block
                $aTecName = array('Html', 'CSS');
                $aCode = array($HtmlCode, $CSSCode);
                $aContainersIDs = array('html-loading-2', 'css-loading-2');

                GetExecCode($aTecName, $aContainersIDs, $Exec, $aCode, 'vertical');

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

                GetExecCode($aTecName, $aContainersIDs, $Exec, $aCode, 'vertical');

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

                GetExecCode($aTecName, $aContainersIDs, $Exec, $aCode, 'vertical');
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
                            <a class="$AccessibilityClassLink" href="/CSSTricks.php?p=Accessibility"><li>Accessibility</li></a>
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
