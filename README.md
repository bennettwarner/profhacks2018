# FaceFinder84™

## About the project:
This project is a security surveillance program designed to used pythons innate facial recognition software to create a database
of captured faces to be searched through by law enforcement to identify and track down criminals. The program is web-based off of a 
digital ocean ubuntu virtual machine. 

**Here is the address of the program:**
[FF84™ Webpage](https://ff84.wcupa.network)

## How to use FF84™
FF84 is a simple to understand program user side; to begin the search through the database a user simply must use either of the 
*New Case* links \(Pictured Below\)

![New case image](https://github.com/bennettwarner/profhacks2018/blob/master/screenshots/ff84%20scrnsht%201.png)

Then the user must input the image of the criminal \(pictured below\)

![Case creation screen](https://github.com/bennettwarner/profhacks2018/blob/master/screenshots/ff84%20scrnsht%202.png)

against the database, the program will then output whether or not there was a match as well as the times and locations 
that the suspect was detected.


### Project Functions
1. Stream.py
> This function reads the frame by frame input from our camera(s) and sends the captured images to the server.py
2. Server.py
> Takes in images from Stream.py and then passes them to Facecut.py
3. Facecut.py
> This function takes the image inputs from Server.py and uses facial recognition to cut out the detected faces and 
> after writes them to the mySQL database for later comparison
4. Facematch.py
> This function does the comparison of the face entered on case creation across all faces in the database, then 
> outputs whether or not there was a match and the timestamps and locations for each positive match

### Project Developers
* Alex Levanthal
* Bennett Warner
* Ellis Madagan
* Gavin Macko

### Liscencing
FaceFinder84™ is a trademarked product under the licensing of Soy Boys Inc.®, any unlicensed or unauthorized use of this 
software will result in swift and severe legal action against the perpetratior

**remember**, if you have a face, we can find you.
