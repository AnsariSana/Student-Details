def heapify(array, index):

    left = 2*index+1
    right = 2*index+2
    smallest = index
    length = len(array) - 1

    if left <= length and array[index] > array[left]:
        smallest = left
    if right <= length and array[smallest] > array[right]:
        smallest = right

    if smallest != index:
        array[index], array[smallest] = array[smallest], array[index]
        heapify(array, smallest)

    return array

array = [7,4,6,3,9,1]

for i in range((len(array)-1)//2,-1,-1):
    array = heapify(array,i)

print(array)



