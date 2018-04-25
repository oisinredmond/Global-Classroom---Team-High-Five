import random as rand
import hashlib as hl

data = open("names.txt","r")
names = {}
surnames={}
for x in range(0,5000):
    c = data.readline()
    c=c.rstrip("\n")
    names[x] = c.title()

data.close()
data = open("surnames.txt","r")
for x in range(0,1000):
    c = data.readline()
    c=c.rstrip("\n")
    surnames[x] = c.title()
data.close()   
data=open("userData.sql","w")
emails = {0:"Gmail.com",1:"outlook.com",2:"yahoo.com"}
prefix = {0:"087",1:"085",2:"086",3:"089"}
for x in range(0,520):
    j= rand.randint(0,20)
    k= rand.randint(0,30)
    l= rand.randint(0,2)
    m= rand.randint(0,3)
    n= rand.randint(100,999)
    o= rand.randint(0,99)
    
    password = "password"
    hp = hl.md5(b'password')
    UID = names[j][0].upper()+surnames[k][0].upper()+str(x)
    Uname = names[j][0].upper()+names[j][1].upper()+surnames[k]+str(o)
    email = names[j]+surnames[k]+str(n)+"@"+emails[l]
    phone = str(prefix[m])+str(rand.randint(0,9))+str(rand.randint(0,9))+str(rand.randint(0,9))+str(rand.randint(0,9))+str(rand.randint(0,9))+str(rand.randint(0,9))+str(rand.randint(0,9))
    statement = "INSERT INTO Users(User_id,UName,Password,Phone,Email,IsTemp) VALUES("+"'"+UID+"'"+","+"'"+Uname+"'"+","+"'"+hp.hexdigest()+"'"+","+"'"+phone+"'"+","+"'"+email+"'"+","+"'"+"N"+"'"+");"
    print(statement)
    data.write(statement+"\n")
