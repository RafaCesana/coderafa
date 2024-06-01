<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Solving Problems | CodeRafa</title>
        <link rel="stylesheet" href="SolvingProblemsStyle.css">
        <script type="text/javascript" src="SolvingProblems.js"></script>

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
            $HomeClassLink      = "link-not-selected";
            $ArraysClassLink    = "link-not-selected";
            $ToConvertClassLink = "link-not-selected";

            echo <<< EOT
                <div class="two-columns-layout-container">       
                    <div class="right-column-layout vertical-main-containers">
            EOT;

            $p = $_GET['p'];
            
            if($p=='') {
                $HomeClassLink = "link-selected";
                echo <<< EOT
                    <h1>SOLVING PROBLEMS <i style="color:#737373;" class="fa-solid fa-gear"></i></h1>
                    <p class="DefaultText">&emsp;All data processing and input errors were not worked because the focus of this page is solely aimed at solving logic problems. In a software system, this care for the user experience and data processing is important and must be done. So please, for it to work, respect input examples for each exercise.</p>
                EOT;
            }
            if($p=='Arrays') {
                $ArraysClassLink = "link-selected";
                
                echo <<< EOT
                    <h1>Num of Islands <span class="difficulty-level medium">(medium)</span></h1>
                    <p>From a 2D array (matrix) containing only 1s(land) and null(water), count the number of islands in it. An island is a connected set of 1s(land) and is surrounded by either an edge or null(water). Each cell is considered connected to other cells horizontally or vertically (not diagonally).</p>
                    <form class="SolvingProblems-Form" action="javascript:NumOfIslands();">
                        <label for="input">Input</label>
                        <table class="NumOfIslands">
                            <tr>
                                <td><input type="text" class="input-NumOfIslands" id="input-NumOfIslands-0-0"></td>
                                <td><input type="text" class="input-NumOfIslands" id="input-NumOfIslands-0-1"></td>
                                <td><input type="text" class="input-NumOfIslands" id="input-NumOfIslands-0-2"></td>
                                <td><input type="text" class="input-NumOfIslands" id="input-NumOfIslands-0-3"></td>
                                <td><input type="text" class="input-NumOfIslands" id="input-NumOfIslands-0-4"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="input-NumOfIslands" id="input-NumOfIslands-1-0"></td>
                                <td><input type="text" class="input-NumOfIslands" id="input-NumOfIslands-1-1"></td>
                                <td><input type="text" class="input-NumOfIslands" id="input-NumOfIslands-1-2"></td>
                                <td><input type="text" class="input-NumOfIslands" id="input-NumOfIslands-1-3"></td>
                                <td><input type="text" class="input-NumOfIslands" id="input-NumOfIslands-1-4"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="input-NumOfIslands" id="input-NumOfIslands-2-0"></td>
                                <td><input type="text" class="input-NumOfIslands" id="input-NumOfIslands-2-1"></td>
                                <td><input type="text" class="input-NumOfIslands" id="input-NumOfIslands-2-2"></td>
                                <td><input type="text" class="input-NumOfIslands" id="input-NumOfIslands-2-3"></td>
                                <td><input type="text" class="input-NumOfIslands" id="input-NumOfIslands-2-4"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="input-NumOfIslands" id="input-NumOfIslands-3-0"></td>
                                <td><input type="text" class="input-NumOfIslands" id="input-NumOfIslands-3-1"></td>
                                <td><input type="text" class="input-NumOfIslands" id="input-NumOfIslands-3-2"></td>
                                <td><input type="text" class="input-NumOfIslands" id="input-NumOfIslands-3-3"></td>
                                <td><input type="text" class="input-NumOfIslands" id="input-NumOfIslands-3-4"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="input-NumOfIslands" id="input-NumOfIslands-4-0"></td>
                                <td><input type="text" class="input-NumOfIslands" id="input-NumOfIslands-4-1"></td>
                                <td><input type="text" class="input-NumOfIslands" id="input-NumOfIslands-4-2"></td>
                                <td><input type="text" class="input-NumOfIslands" id="input-NumOfIslands-4-3"></td>
                                <td><input type="text" class="input-NumOfIslands" id="input-NumOfIslands-4-4"></td>
                            </tr>

                        </table>
                        <!--<input type="text" id="input-NumOfIslands">-->
                        <input class="T" type="submit" value="Run Code"">
                    </form>
                    <p>Output <span style="font-size:33px; padding:10px;" id="output-NumOfIslands">...</span></p>

                    <hr class="separator">

                    <h1>Find The Most Frequent Element in an Array <span class="difficulty-level easy">(easy)</span></h1>
                    <p>Write input with number separeted by commas, it will be transformed into an array so it can be calculated. Ex) 4,5,2,1,1. </p>
                    <form class="SolvingProblems-Form" action="javascript:FindTheMostFrequentElementinanArray();">
                        <label for="input">Input</label>
                        <input type="text" id="input-FindTheMostFrequentElementinanArray">
                        <input class="T" type="submit" value="Run Code"">
                    </form>
                    <p>Output <span style="font-size:33px; padding:10px;" id="output-FindTheMostFrequentElementinanArray">...</span></p>
                EOT;
            }

            if($p=='ToConvert') {
                $ToConvertClassLink = "link-selected";
                
                echo <<< EOT
                    <h1>Convert Roman Into Integer</h1>
                    <p>Write a Roman number. Ex) VII, XIX, XC, CM, IV, MCMIV. </p>
                    <form class="SolvingProblems-Form" action="javascript:RomanToInt();">
                        <label for="input">Input</label>
                        <input type="text" id="input-RomanToInt">
                        <input class="T" type="submit" value="Run Code"">
                    </form>
                    <p>Output <span style="font-size:33px; padding:10px;" id="output-RomanToInt">...</span></p>
                EOT;
            }

            echo <<<EOT
                    </div>
                    <div class="left-column-layout">
                        <ul>
                            <a class="$HomeClassLink" href="/SolvingProblems.php"><li>Home</li></a>
                            <a class="$ArraysClassLink" href="/SolvingProblems.php?p=Arrays"><li>Arrays</li></a>
                            <a class="$ToConvertClassLink" href="/SolvingProblems.php?p=ToConvert"><li>To Convert</li></a>
                        </ul>
                    </div>
                </div>
            EOT;    
        ?>

    </body>
</html>
