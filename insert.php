<html>
    <head>
        <title>Regestration</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body id="bd">
        
        <form action="get_data.php" method="POST">
            <div id="registerdiv">
                    <h1 id="heading">Registration Sheet</h1><hr>
    
                    <h3 id="para">Enrollment Number</h3> 
                    <input type="number" name="eno" placeholder="Enter Enrollement" required id="inputf">
                
                
                    <h3 id="para">Full Name</h3>
                    <div><input type="text" name="name" placeholder="Enter name" required id="inputf"></div>
                
                    <h3 id="para">Email Id</h3>
                    <div><input type="email" name="email" placeholder="Enter Email" required id="inputf"></div>
                <br>
                <div id="btns">
                        <input type="submit" name="submit" value="Register">
                </div>
            </div>
        </form>
        <form action="get_data.php" method="POST">
            <div id="hpagebtn">
                <input type="submit" name="hpage" value="HomePage">
            </div>
        </form>
    </body>
</html>