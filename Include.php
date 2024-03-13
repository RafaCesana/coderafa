<?php

    // System Stuff
    function HTMLHeadTags() {
        echo <<< EOT
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <link rel="stylesheet" href="MainStyle.css">
            <link rel="stylesheet" href="GridStyle.css">
            <link rel="stylesheet" href="fontawesome/css/fontawesome.css">
            <link rel="stylesheet" href="fontawesome/css/all.css">
        
            <script type="text/javascript" src="Pack.js"></script>
        EOT;
    }

    // Grid Theory: Used to support the arrangement of each element
    function GridSystem() {
        echo <<< EOT
            <div class="grid-container">
                <div class="grid-column"></div>
                <div class="grid-column"></div>
                <div class="grid-column"></div>  
                <div class="grid-column"></div>
                <div class="grid-column"></div>
                <div class="grid-column"></div>  
                <div class="grid-column"></div>
                <div class="grid-column"></div>
                <div class="grid-column"></div>
                <div class="grid-column"></div>
                <div class="grid-column"></div>
                <div class="grid-column"></div>
            </div>
        EOT;
    }

    // Other Functions
    function IncludeHeader() {
        echo <<< EOT
            <header>
                <div class="nav-container">
                    <div class="nav-logo"><a href="/">< CODERAFA /></a></div>
                    <div class="nav-links">
                        <div><a class="left-to-right" href="AboutMe.php">ABOUT ME</a></div>
                        <div><a class="left-to-right" href="CSSTricks.php">CSS TRICKS</a></div>
                        <div><a class="left-to-right" href="">JS SNIPPETS</a></div>
                        <div><a class="left-to-right" href="">PHP APPLICATION</a></div>
                        <div><a class="left-to-right" href="">CONTACT</a></div>
                        <div><a onclick="ToggleColorTheme();" id="toggle-colortheme-icon" class="toggle-colortheme-icon"><i style="font-size:24px;" class="fa-solid fa-toggle-off"></i></a></div>
                    </div>

                    <!-- Only on mobile -->
                    <div class="nav-menu-mobile">
                        <a onclick="ToggleOpenCloseDiv('div-menu-mobile','toggle-menu-icon','fa-solid fa-bars','fa-solid fa-x','font-size:24px;');" id="toggle-menu-icon"><i style="font-size:24px;" class="fa-solid fa-bars"></i></a>
                    </div>

                    <div class="div-menu-mobile" id="div-menu-mobile">
                        <ul>
                            <a href="AboutMe.php"><li>About Me</li></a>
                            <a href="CSSTricks.php"><li>CSS</li></a>
                            <a href=""><li>JS</li></a>
                            <a href=""><li>PHP</li></a>
                            <a href=""><li>Contact</li></a>
                            <a onclick="ToggleColorTheme();" id="toggle-colortheme-icon"><li><i style="font-size:24px;" class="fa-solid fa-toggle-off"></i></li></a>
                        </ul>
                    </div>

                </div>
            </header>
        EOT;
    }

    function IncludeFooter() {

    }

    function BuildingContent() {
        $ConstructIcon = '<i style="font-size: 20vw;" class="fa-solid fa-person-digging"></i>';
        echo <<< EOT
            <div class="building-content">
                <h1 style="margin:0;">Still Building Content</h1>
                $ConstructIcon
            </div>
        EOT;
    }

    function GetCodeButtons($aTecName, $aContainersIDs) {

        $QtyButtons = count($aTecName);
        $Padding    = 10;
        $ClassName  = 'unfilled';
        $ContainersIDsConcat = implode(',', $aContainersIDs);

        if($QtyButtons==1) {
            $Padding = 0;
        }

        $R = '<div class="buttons-code-container">';
        $LastButton = $QtyButtons-1;
        for($i=0 ; $i<$QtyButtons ; $i++) {

            if($i==$LastButton) {
                $ClassName = 'filled';
            }

            $R .= '<div style="padding-left:'.$Padding.'px;"><button id="button-'.$aContainersIDs[$i].'" onclick="ChangeCode(this.id , \''.$ContainersIDsConcat.'\');" class="'.$ClassName.'">'.$aTecName[$i].'</button></div>';
        }
        $R .= '</div>';
        $R .= '<button id="CopyCodeButton" onclick="" class="copy-code">Copy</button>';
        echo $R;
    }

    function GetExecCode($aTecName, $aContainersIDs, $Exec, $aCode) {

        // First part of html code
        echo <<< EOT
            <!-- Exec-Code -->
            <div class="exec-code-container">
                <div class="exec-container">
                    <div class="exec-background">
                        $Exec
                    </div>
                </div>
                <div class="code-container">
                    <div class="code-background" id="CodeContainer">
        EOT;

        // Code implementation part   
        $LastTec = count($aTecName)-1;
        for($i=0 ; $i<count($aTecName) ; $i++) {

            if($i==$LastTec) {
                $ClassName = 'Displayed-container';
            }
            else {
                $ClassName = 'NonDisplayed-container';
            }

            echo <<< EOT
                <code id="$aContainersIDs[$i]" class="$ClassName">
                    $aCode[$i]
                </code>
            EOT;
        }
        

        // The end part of html code
        echo <<< EOT
                    </div>
        EOT;

        GetCodeButtons($aTecName, $aContainersIDs);

        echo <<< EOT
                </div>
            </div>
        EOT; 
    }

?>