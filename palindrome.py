import random
def palindrome(arr):

    pal = ""
    count = {}
    cost = 0
    for i in arr:
        count[i] = 0
    sortedArray = sorted(set(arr))
    #print(sortedArray)
    for i in arr:
        count[i] += 1

    if len(arr) % 2 != 0:
        limit = 1
    else:
        limit = 0
        



    while len(sortedArray) != limit:

        if count[sortedArray[0]] % 2 != 0:
            if count[sortedArray[1]] % 2 != 0 :
                count[sortedArray[1]] += 1
                count[sortedArray[0]] -= 1

                cost += sortedArray[1] - sortedArray[0]

                pal = str(sortedArray[0])*(count[sortedArray[0]]//2) +pal+ str(sortedArray[0])*(count[sortedArray[0]]//2)

                pal = str(sortedArray[1])*(count[sortedArray[1]]//2) +pal+ str(sortedArray[1])*(count[sortedArray[1]]//2)
                #print(pal)
                sortedArray.pop(0)
                sortedArray.pop(0)
                #print(sortedArray)
            
            else:
                 pal = str(sortedArray[1])*(count[sortedArray[1]]//2) +pal+ str(sortedArray[1])*(count[sortedArray[1]]//2)

                 sortedArray.pop(1)
        
        else:

            pal = str(sortedArray[0])*(count[sortedArray[0]]//2) +pal+ str(sortedArray[0])*(count[sortedArray[0]]//2)
            sortedArray.pop(0)
        #print(count)

    #print(pal, cost)
    if limit == 1:
        rem = str(sortedArray[0])*count[sortedArray[0]]
        pal = pal[:len(pal)//2] + rem + pal[len(pal)//2:]
    print(count)

    return pal, cost





arr = [4,4,8,8,8,1,2,3]
#arr = [4,5,7]
#arr = [3,3,3,3,1,7,3,5,7]
#arr = [4, 4,5,1, 1, 7, 7,5,5]
'''for i in range(1,10):
    for j in range(1,10):
        arr.append(random.randrange(1,9))
    pal, cost = palindrome(arr)'''

pal, cost = palindrome(arr)
print("original number", arr,"Palindrome:", pal, "Cost:", cost)
#arr = []