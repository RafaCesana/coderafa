<?php

    // System Stuff
    function HTMLHeadTags() {
        echo <<< EOT
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <link rel='shortcut icon' href='favicon.ico' type='image/x-icon'/>
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
                        <div><a class="left-to-right" href="About.php">ABOUT</a></div>
                        <div><a class="left-to-right" href="CSSTricks.php">CSS TRICKS</a></div>
                        <div><a class="left-to-right" href="UXUI.php">UX / UI</a></div>
                        <div><a class="left-to-right" href="JSProjects.php">JAVASCRIPT</a></div>
                        <div><a class="left-to-right" href="PHPProjects.php">PHP</a></div>
                        <div><a class="left-to-right" href="Algorithms.php">ALGORITHMS</a></div>
                        <div><a class="left-to-right" href="test.php">test</a></div>
                        <div><a onclick="ToggleColorTheme();" id="toggle-colortheme-icon" class="toggle-colortheme-icon"><i style="font-size:24px;" class="fa-solid fa-toggle-off"></i></a></div>
                    </div>

                    <!-- Only on mobile -->
                    <div class="nav-menu-mobile">
                        <a onclick="ToggleOpenCloseDiv('div-menu-mobile','toggle-menu-icon','fa-solid fa-bars','fa-solid fa-x','font-size:24px;');" id="toggle-menu-icon"><i style="font-size:24px;" class="fa-solid fa-bars"></i></a>
                    </div>

                    <div class="div-menu-mobile" id="div-menu-mobile">
                        <ul>
                            <a href="About.php"><li>About</li></a>
                            <a href="CSSTricks.php"><li>CSS</li></a>
                            <a href="UXUI.php"><li>UX/UI</li></a>
                            <a href="JSProjects.php"><li>JS</li></a>
                            <a href="PHPProjects.php"><li>PHP</li></a>
                            <a href="Algorithms.php"><li>ALGORITHMS</li></a>
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
            <div class="vertical-main-containers building-content">
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

            $R .= '<div style="padding-left:'.$Padding.'px;"><button id="button-'.$aContainersIDs[$i].'" onclick="ChangeCode(this.id , \''.$ContainersIDsConcat.'\');" class="'.$ClassName.' T">'.$aTecName[$i].'</button></div>';
        }
        $R .= '</div>';
        //$R .= '<button id="CopyCodeButton" onclick="CopyToClipboard();" class="copy-code T">Copy</button>';
        echo $R;
    }

    function GetExecCode($aTecName, $aContainersIDs, $Exec, $aCode, $Orientation) {

        // CSS Classes
        if($Orientation=='vertical') {
            $ExecCodeContainerClass  = 'exec-code-container-vertical';
            $ExecContainerClass      = 'exec-container-vertical';
            $CodeContainerClass      = 'code-container-vertical';
            $ExecBackgroundClass     = 'exec-background-vertical';
            $CodeBackgroundClass     = 'code-background-vertical';
        }
        if($Orientation=='horizontal') {
            $ExecCodeContainerClass  = 'exec-code-container-horizontal';
            $ExecContainerClass      = 'exec-container-horizontal';
            $CodeContainerClass      = 'code-container-horizontal';
            $ExecBackgroundClass     = 'exec-background-horizontal';
            $CodeBackgroundClass     = 'code-background-horizontal';
        }

        // First part of html code
        echo <<< EOT
            <!-- Exec-Code -->
            <div class="$ExecCodeContainerClass">
                <div class="$ExecContainerClass">
                    <div class="$ExecBackgroundClass">
                        $Exec
                    </div>
                </div>
                <div class="$CodeContainerClass">
                    <div class="$CodeBackgroundClass" id="CodeContainer">
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

    function GetPHPProjects($Project, $aParams) {

        if($Project == 'API-Geocoding') {

            $Name       = $aParams[0];
            $State      = $aParams[1];
            $Country    = $aParams[2];
            $Lat        = $aParams[3];
            $Lon        = $aParams[4];

            echo <<< EOT
                <div>
                    <div>
                        <form method="post" action="">
                            <label for="USCities">Choose a US city: </label>
                            <select name="USCities">
                                <option value="Orlando">Orlando</option>
                                <option value="Chicago">Chicago</option>
                                <option value="Arizona">Arizona</option>
                                <option value="SanDiego">SanDiego</option>
                            </select>
                            <input type="submit" value="Find" name="find">
                        </form>
                    </div>
                    <div>
                        <span style="color:#6f6f6f"><i>$Name, $State, $Country</i></span>
                    </div>
                    <div>  
                        <table>
                            <tr>
                                <th>LAT</th>
                                <td>$Lat</td>
                            </tr>
                            <tr>
                                <th>LON</th>
                                <td>$Lon</td>
                            </tr>
                        </table>
                    </div>
                </div>
            EOT;
        }
    }

?>