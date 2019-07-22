<html>
    <head>
        <title>Update</title>
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body id="bd">
        
        <form action="get_data.php" method="POST">
            <div id="registerdiv">
                    <h1 id="heading">Update Sheet</h1><hr>
    
                    <h3 id="para">Enrollment Number</h3> 
                    <input type="number" name="enod" placeholder="Enter Enrollement" required id="inputf">
                
                
                    <h3 id="para">Full Name</h3>
                    <div><input type="text" name="named" placeholder="Enter New name" required id="inputf"></div>
                
                    <h3 id="para">Email Id</h3>
                    <div><input type="email" name="emaild" placeholder="Enter New Email" required id="inputf"></div>
                <br>
                <div id="btns">
                        <input type="submit" name="editd" value="Update">
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