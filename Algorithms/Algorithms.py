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

    # ------------------------------------------------------------------------------------------------------------------------------------------------
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