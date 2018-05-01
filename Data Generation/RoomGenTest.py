import random as rand
types = {0:"Deluxe",1:"Single",2:"King Suite"}
desc = {0:"Larger Room",1:"Standard Room",2:"Extra Large Room"}
Price = {0:200,1:100,2:300}
rate=1.0
kingCount = 5
data=open("roomData.sql","w")
for x in range(0,150):
    j= rand.randint(0,2)
    if j == 2 and kingCount > 0:
        kingCount = kingCount-1
    if j == 2 and kingCount == 0:
        j = 1
    Roomid = "R"+str(x)
    room = types[j]
    roomNum = (x%20)+1
    floor = int(x/20)*100
    name = room+"-"+ str(floor+roomNum)
    statement = "INSERT INTO ROOMS(Room_id,Occupancy,Room_Size,Description,Room_name,Rate,img,Price) VALUES("+"'"+Roomid+"'"+","+"'"+"N"+"'"+","+"'"+room+"'"+","+"'"+desc[j]+"'"+","+"'"+name+"'"+","+"1.0,"+"'"+"temp.png"+"'"+","+str(Price[j])+");"
    print(statement)
    data.write(statement+"\n")
