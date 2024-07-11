<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Algorithms | CodeRafa</title>
        <link rel="stylesheet" href="AlgorithmsStyle.css">
        <script type="text/javascript" src="Algorithms.js"></script>

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
            $HomeClassLink          = "link-not-selected";
            $BinarySearchClassLink  = "link-not-selected";
            $ArraysClassLink        = "link-not-selected";
            $ToConvertClassLink     = "link-not-selected";
            $SelectionSortClassLink = "link-not-selected";

            echo <<< EOT
                <div class="two-columns-layout-container">       
                    <div class="right-column-layout vertical-main-containers">
            EOT;

            $p = $_GET['p'];
            
            if($p=='') {
                $HomeClassLink = "link-selected";
                echo <<< EOT
                    <h1>Algorithms <i style="color:#737373;" class="fa-solid fa-gear"></i></h1>
                    <p class="DefaultText">&emsp;All data processing and input errors were not worked because the focus of this page is solely aimed at solving logic problems. In a software system, this care for the user experience and data processing is important and must be done. So please, for it to work, respect input examples for each exercise.</p>
                EOT;
            }

            if($p=='BinarySearch') {
                $BinarySearchClassLink = "link-selected";

                 echo <<< EOT
                    <h1>Binary Search</h1>
                    <p>The function receives an array and an item. The function orders the array and if the item is in the array, the function returns its position.</p>
                    <form class="SolvingProblems-Form" action="javascript:BinarySearch();">
                        <div>
                            <label for="input">List
                                <input placeholder="1,3,5,7,9" type="text" id="input-BinarySearch-List" class="vertical-form">
                            </label>
                        </div>
                        <div>
                            <label for="input">Item
                                <input placeholder="3" type="text" id="input-BinarySearch-Item" class="vertical-form">
                            </label>
                        </div>
                        <div>
                            <input class="T" type="submit" value="Run Code">
                        </div>
                    </form>
                    <p>Position number <span style="font-size:33px; padding:10px;" id="output-BinarySearch">...</span></p>

                    <pre>
                        <code>
                            <span style="color: #8c8c8c; font-size:18px;">// JAVASCRIPT</span>

                            function BinarySearch(aList, Item) {
                                aList.sort( (a,b)=>a-b );

                                var lowPos = 0;
                                var highPos = aList.length - 1;
                                var middlePos;
                                var guess;
                                var result = 'Null';
                            
                                // repeat while it has not yet arrived at a single element
                                while(lowPos<=highPos) {
                                    middlePos = Math.round( (lowPos + highPos) / 2 );
                                    guess = aList[middlePos];
                                    if(guess == Item) {
                                        result = middlePos;
                                    }
                                    if(guess > Item) {
                                        highPos = middlePos - 1;
                                    }
                                    else {
                                        lowPos = middlePos + 1;
                                    }
                                }
                                return result;
                            }

                            <span style="color: #8c8c8c; font-size:18px;">// PYTHON</span>

                            def BinarySearch(aList, Item):
                                lowPos = 0
                                highPos = len(aList) - 1

                                while lowPos<=highPos:
                                    middlePos = (lowPos+highPos)/2
                                    guess = aList[middlePos]
                                    if guess == Item:
                                        return middlePos
                                    if guess > Item:
                                        highPos = middlePos - 1
                                    else:
                                        lowPos = middlePos + 1
                                return None

                            # Test
                            my_list = [1,3,5,7,9]
                            print BinarySearch(my_list, 3) #=> 1
                            print BinarySearch(my_list, -1) #=> None
                        </code>
                    </pre>
                 EOT;
            }

            if($p=='SelectionSort') {
                $SelectionSortClassLink = "link-selected";

                 echo <<< EOT
                    <h1>Selection Sort</h1>
                    <p>Let's sort an array from smallest to largest.</p>
                    <form class="SolvingProblems-Form" action="javascript:SelectionSort();">
                        <div>
                            <label for="input">Insert an array
                                <input placeholder=5,3,6,2,10 type="text" id="input-SelectionSort" class="vertical-form">
                            </label>
                        </div>
                        <div>
                            <input class="T" type="submit" value="Run Code">
                        </div>
                    </form>
                    <p>Output <span style="font-size:33px; padding:10px;" id="output-SelectionSort">...</span></p>

                    <pre>
                        <code>
                            <span style="color: #8c8c8c; font-size:18px;">// JAVASCRIPT</span>

                            function _findSmallestIndex(arr) {
                                var smallestElement = arr[0];
                                var smallestIndex = 0;
                            
                                for(var i=1 ; i < arr.length ; i++) {
                                    if( arr[i] < smallestElement ) {
                                        smallestElement = arr[i];
                                        smallestIndex = i;
                                    }
                                }
                                return smallestIndex;
                            }
                            
                            function SelectionSort(arr) {
                                // Creating a copy of array, because I will remove the smallest one each time and add it into the new array
                                var copyArr = arr.slice();
                                var sortedArr = [];
                            
                                for(var i=0 ; i < arr.length ; i++) {
                                    var smallestIndex = _findSmallestIndex(copyArr);
                                    //Remove element from copyArr at any index (using splice) and add it into sortedArr
                                    var element = copyArr.splice(smallestIndex, 1);
                                    sortedArr.push(element);
                                }
                                
                                return sortedArr;
                            }

                            const sourceArray = [5,3,6,2,10];
                            const sortedArray = SelectionSort(sourceArray);

                            console.log("Source Array: "+sourceArray); //[5,3,6,2,10];
                            console.log("Sorted Array: "+sortedArray); //[2,3,5,6,10];

                            <span style="color: #8c8c8c; font-size:18px;">// PYTHON</span>

                            def _findSmallestIndex(arr):
                                smallestElement = arr[0]
                                smallestIndex = 0

                                for i in range(1, len(arr)):
                                    if arr[i] < smallestElement:
                                        smallestElement = arr[i]
                                        smallestIndex = i
                                return smallestIndex

                            def SelectionSort(arr):
                                sortedArr = []
                                for i in range(len(arr)):
                                    smallestIndex = _findSmallestIndex(arr)
                                    element = arr.pop(smallestIndex)
                                    sortedArr.append(element)
                                return sortedArr

                            print( SelectionSort([5,3,6,2,10]) )

                        </code>
                    </pre>
                 EOT;
            }

            if($p=='Quicksort') {
                $QuicksortClassLink = "link-selected";

                 echo <<< EOT
                    <h1>Quicksort</h1>
                    <p>A divide-and-conquer algorithm recursively breaks down a problem into two or more sub-problems of the same or related type, until these become simple enough to be solved directly.</p>
                    <form class="SolvingProblems-Form" action="javascript:Quicksort();">
                        <div>
                            <label for="input">Insert an array
                                <input placeholder=5,3,6,2,10 type="text" id="input-Quicksort" class="vertical-form">
                            </label>
                        </div>
                        <div>
                            <input class="T" type="submit" value="Run Code">
                        </div>
                    </form>
                    <p>Output <span style="font-size:33px; padding:10px;" id="output-Quicksort">...</span></p>

                    <pre>
                        <code>
                            <span style="color: #8c8c8c; font-size:18px;">// JAVASCRIPT</span>

                            <span style="color: #8c8c8c; font-size:18px;">// PYTHON</span>
                        </code>
                    </pre>

                    <hr style="width:100%; border:1px solid #4a4a4a;">

                    <h2 style="font-style:italic;">1. Array Sum</h2>
                    <p>Just like the quicksort algorithm, the sum of elements in an array can be written using the divide-and-conquer technique.</p>
                    <form class="SolvingProblems-Form" action="javascript:ArraySum();">
                        <div>
                            <label for="input">Insert an array
                                <input placeholder=5,3,6,2,10 type="text" id="input-ArraySum" class="vertical-form">
                            </label>
                        </div>
                        <div>
                            <input class="T" type="submit" value="Run Code">
                        </div>
                    </form>
                    <p>The sum of array numbers is <span style="font-size:33px; padding:10px;" id="output-ArraySum">...</span></p>

                    <pre>
                        <code>
                            <span style="color: #8c8c8c; font-size:18px;">// JAVASCRIPT</span>

                            <span style="color: #8c8c8c; font-size:14px;">// using traditional loop</span>
                            function sum(arr) {
                                let total = 0;
                                for(let i=0 ; i < arr.length; i++) {
                                    total += arr[i];
                                }
                                return total;
                            }

                            <span style="color: #8c8c8c; font-size:14px;">// using recursion (divide-and-conquer)</span>
                            function sumRecursive(arr) {
                                if(arr.length == 0) return 0;
                                return arr[0] + sumRecursive( arr.slice(1) );

                            <span style="color: #8c8c8c; font-size:18px;">// PYTHON</span>

                            <span style="color: #8c8c8c; font-size:14px;">// using traditional loop</span>
                            def sum(arr):
                                total = 0
                                for x in arr:
                                    total += x
                                return total

                            <span style="color: #8c8c8c; font-size:14px;">// using recursion (divide-and-conquer)</span>
                            def sum(list):
                                if list == []:
                                    return 0
                                return list[0] + sum( list[1:] )
                        </code>                    
                    </pre>

                    <h2 style="font-style:italic;">2. Array Count Items</h2>
                    <p>Just like the quicksort and array sum algorithms to find the max number in an array we can use the divide-and-conquer technique.</p>
                    <form class="SolvingProblems-Form" action="javascript:ArrayCountItems();">
                        <div>
                            <label for="input">Insert an array
                                <input placeholder=5,3,6,2,10 type="text" id="input-ArrayCountItems" class="vertical-form">
                            </label>
                        </div>
                        <div>
                            <input class="T" type="submit" value="Run Code">
                        </div>
                    </form>
                    <p>Number of array items <span style="font-size:33px; padding:10px;" id="output-ArrayCountItems">...</span></p>

                    <pre>
                        <code>
                            <span style="color: #8c8c8c; font-size:18px;">// JAVASCRIPT using recursion (divide-and-conquer)</span>
                            function count(array) {
                                if(array == 0) return 0;
                                return 1 + count( array.slice(1) );

                            <span style="color: #8c8c8c; font-size:18px;">// PYTHON using recursion (divide-and-conquer)</span>
                            def count(list):
                                if list == []:
                                    return 0
                                return 1 + count(list[1]);
                        </code>                      
                    </pre>

                    <h2 style="font-style:italic;">3. Array Max Number</h2>
                    <p>Just like the quicksort, array sum algorithms and array count items, to find the max number in an array we can use the divide-and-conquer technique.</p>
                    <form class="SolvingProblems-Form" action="javascript:ArrayMaxNum();">
                        <div>
                            <label for="input">Insert an array
                                <input placeholder=5,3,6,2,10 type="text" id="input-ArrayMaxNum" class="vertical-form">
                            </label>
                        </div>
                        <div>
                            <input class="T" type="submit" value="Run Code">
                        </div>
                    </form>
                    <p>The array max number is <span style="font-size:33px; padding:10px;" id="output-ArrayMaxNum">...</span></p>

                    <pre>
                        <code>
                            <span style="color: #8c8c8c; font-size:18px;">// JAVASCRIPT using recursion (divide-and-conquer)</span>
                            function _max(arr) {
                                if(arr.length == 2) return arr[0] > arr[1] ? arr[0] : arr[1];
                                var sub_max = _max( arr.slice(1) );
                                return arr[0] > sub_max ? arr[0] : sub_max;
                            }

                        </code>                      
                    </pre>
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

            echo <<< EOT
                    </div>
                    <div class="left-column-layout">
                        <ul>
                            <a class="$HomeClassLink" href="/Algorithms.php"><li>Home</li></a>
                            <a class="$BinarySearchClassLink" href="/Algorithms.php?p=BinarySearch"><li>Binary Search</li></a>
                            <a class="$SelectionSortClassLink" href="/Algorithms.php?p=SelectionSort"><li>Selection Sort</li></a>
                            <a class="$QuicksortClassLink" href="/Algorithms.php?p=Quicksort"><li>Quicksort</li></a>
                            <a class="$ArraysClassLink" href="/Algorithms.php?p=Arrays"><li>Arrays</li></a>
                            <a class="$ToConvertClassLink" href="/Algorithms.php?p=ToConvert"><li>To Convert</li></a>
                        </ul>
                    </div>
                </div>
            EOT;    
        ?>

    </body>
</html>
