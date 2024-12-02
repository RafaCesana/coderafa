

// ------------------------------------------------------------------------------------------------------------------------------------------------

function _FindAndMarkNeighbors(board, i, j) {
    if( i<board.length && j<board[0].length && i>=0 && j>=0 ) {
        if( board[i][j] == "1" ) {
            board[i][j] = "";
            // top
            _FindAndMarkNeighbors(board, i-1, j);
            // bottom
            _FindAndMarkNeighbors(board, i+1, j);
            // left
            _FindAndMarkNeighbors(board, i, j-1);
            // right
            _FindAndMarkNeighbors(board, i, j+1);
        }
    }
}

function NumOfIslands() {

    // Input treatment
    var board = new Array();
    var id;
    for(var k=0 ; k<5 ; k++) {
        var columns = new Array();
        board.push(columns);
        for(var l=0 ; l<5 ; l++) {
            id = document.getElementById('input-NumOfIslands-'+k+'-'+l).value;
            columns.push(id);
        }
    }

    // Example of input
    /*
    var board = [
        ["1","1","1","1","0"],
        ["1","1","0","1","0"],
        ["1","1","0","1","0"],
        ["0","0","0","0","0"]
    ];
    */

    // Algorithm
    var output;
    var IslandCounter = 0;

    for(var i=0 ; i<board.length ; i++) {
        for(var j=0 ; j<board[0].length ; j++ ) {
            if(board[i][j] == "1") {
                _FindAndMarkNeighbors(board, i, j);
                IslandCounter++;
            }
        }
    }

    output = IslandCounter;
    document.getElementById('output-NumOfIslands').innerHTML = output;
}


function FindTheMostFrequentElementinanArray() {
    const input = document.getElementById('input-FindTheMostFrequentElementinanArray').value;
    const aInput = input.split(',');
    aInput.sort( (a,b)=>a-b );

    var count = 0;
    var max = 0;
    var output;
    var aCount = new Array();
    for(var i=0 ; i<aInput.length ; i++) {
        if( aInput[i] == aInput[i-1] ) {
            count++;
        }
        else {
            count = 1;
        }
        if( count > max ) {
            output = aInput[i];
            max = count;
        }
        aCount.push(count);
    }

    aCount.sort( (a,b)=>a-b );
    var LastCount = aCount[aCount.length-1];

    if( LastCount == aCount[aCount.length-2]) {
        output = 'none';
    }

    document.getElementById('output-FindTheMostFrequentElementinanArray').innerHTML = output;
}
// ------------------------------------------------------------------------------------------------------------------------------------------------
function _getIntFromRoman(n) {
    /*
     Roman numerals are based on following symbols:
     I  1
     V  5
     X  10
     L  50
     C  100
     D  500
     M  1000

     Ex) IV 4, IX 9, XL 40, XC 90, CD 400, CM 900.
    */
    if(n=='I') {
        number = 1;
    }
    if(n=='V') {
        number = 5;
    }
    if(n=='X') {
        number = 10;
    }
    if(n=='L') {
        number = 50;
    }
    if(n=='C') {
        number = 100;
    }
    if(n=='D') {
        number = 500;
    }
    if(n=='M') {
        number = 1000;
    }
    return number;
}

function RomanToInt() {
    const input = document.getElementById('input-RomanToInt').value;

    var result = 0;
    var currentNumber;
    var nextNumber = 0;

    // XIX
    for(var i=0 ; i<input.length ; i++ ) {

        currentNumber = _getIntFromRoman(input[i]);

        // Getting NextValue
        if(i + 1 < input.length) {
            nextNumber = _getIntFromRoman(input[i + 1]);
        }

        // Sum or subtract?
        if(nextNumber > currentNumber) {
            // or: result += nextNumber - currentNumber;
            result = result + (nextNumber - currentNumber);
            i = i + 1;
        } else {
            // or: result += currentNumber;
            result = result + currentNumber;
        }
    }

    var output = result;
    document.getElementById('output-RomanToInt').innerHTML = output;
}

// ------------------------------------------------------------------------------------------------------------------------------------------------

function BinarySearch() {
    // Inputs
    const List = document.getElementById('input-BinarySearch-List').value;
    const aList = List.split(',');
    aList.sort( (a,b)=>a-b );

    const Item = document.getElementById('input-BinarySearch-Item').value;

    // Algorithm
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
    
    var output = result;
    document.getElementById('output-BinarySearch').innerHTML = output;
}

// ------------------------------------------------------------------------------------------------------------------------------------------------

function _findSmallestIndex(arr) {
    var smallestElement = arr[0];
    var smallestIndex = 0;

    for(var i=1 ; i<arr.length ; i++) {
        if( arr[i]<smallestElement ) {
            smallestElement = arr[i];
            smallestIndex = i;
        }
    }
    return smallestIndex;
}

function SelectionSort() {
    // Inputs
    const input = document.getElementById('input-SelectionSort').value;
    // Split converts the string into an array. The map number converts the string array into an array of numbers
    const arr = input.split(',').map(Number);
    // Creating a copy of array, because I will remove the smallest one each time and add it into the new array
    var copyArr = arr.slice();
    var sortedArr = [];

    for(var i=0 ; i<arr.length ; i++) {
        var smallestIndex = _findSmallestIndex(copyArr);
        //Remove element from copyArr at any index (using splice) and add it into sortedArr
        var element = copyArr.splice(smallestIndex, 1);
        sortedArr.push(element);
    }
    
    var output = sortedArr;
    document.getElementById('output-SelectionSort').innerHTML = output;
}

// ------------------------------------------------------------------------------------------------------------------------------------------------
function _sumRecursive(arr) {
    if( arr.length == 0 ) {
        return 0;
    }
    else {
        return arr[0] + _sumRecursive( arr.slice(1) );
    }
}

function ArraySum() {
    // Inputs
    const input = document.getElementById('input-ArraySum').value;
    // Split converts the string into an array. The map number converts the string array into an array of numbers
    const arr = input.split(',').map(Number);

    var output = _sumRecursive(arr);
    document.getElementById('output-ArraySum').innerHTML = output;
}

// ------------------------------------------------------------------------------------------------------------------------------------------------

function _countRecursive(arr) {
    if( arr == 0 ) return 0;
    return 1 + _countRecursive( arr.slice(1) );
}

function ArrayCountItems() {
    // Inputs
    const input = document.getElementById('input-ArrayCountItems').value;
    // Split converts the string into an array. The map number converts the string array into an array of numbers
    const arr = input.split(',');

    var output = _countRecursive(arr);
    document.getElementById('output-ArrayCountItems').innerHTML = output;
}

// ------------------------------------------------------------------------------------------------------------------------------------------------
function _max(arr) {
    if(arr.length == 2) return arr[0] > arr[1] ? arr[0] : arr[1];
    var sub_max = _max( arr.slice(1) );
    return arr[0] > sub_max ? arr[0] : sub_max;
}

function ArrayMaxNum() {
    // Inputs
    const input = document.getElementById('input-ArrayMaxNum').value;
    // Split converts the string into an array. The map number converts the string array into an array of numbers
    const arr = input.split(',').map(Number);

    var output = _max(arr);
    document.getElementById('output-ArrayMaxNum').innerHTML = output;
}

// ------------------------------------------------------------------------------------------------------------------------------------------------
function _quicksort(arr)
{
    // base-case
    if(arr.length < 2)
    {
        return arr;
    }
    else
    {
        let pivot = arr[0];
        // I'm creating a sub-array using filter() method that creates a new array filled with elements that pass a test provided by a function.
        let less = arr.slice(1).filter( function(el){ return el <= pivot; } );
        let greater = arr.slice(1).filter( function(el){ return el > pivot; } );

        return _quicksort(less).concat(pivot, _quicksort(greater));
    }
}

function Quicksort() {
    // Inputs
    const input = document.getElementById('input-Quicksort').value;
    // Split converts the string into an array. The map number converts the string array into an array of numbers
    const arr = input.split(',').map(Number);

    var output = _quicksort(arr);
    document.getElementById('output-Quicksort').innerHTML = output;
}