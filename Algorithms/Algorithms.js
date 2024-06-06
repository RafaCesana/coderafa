

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