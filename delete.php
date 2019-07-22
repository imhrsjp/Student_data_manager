<html>
    <head>
        <title>Delete</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body id="bd">
        
        <form action="get_data.php" method="POST">
            <div id="deldiv">
                    <h1 id="heading">Delete Sheet</h1><hr>
    
                    <h3 id="para">Enrollment Number</h3> 
                    <input type="number" name="edno" placeholder="which Enrollment" required id="inputf">
                
                <div id="btndelete">
                        <input type="submit" name="dltdata" value="DeleteData">
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