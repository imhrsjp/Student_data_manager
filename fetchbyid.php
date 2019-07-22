<html>
    <head>
        <title>Fetch</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body id="bd">
        
        <form action="get_data.php" method="POST">
            <div id="deldiv">
                    <h1 id="heading">DataFetch Sheet</h1><hr>
    
                    <h3 id="para">Enrollment Number</h3> 
                    <input type="number" name="feno" placeholder="Which Enrollment" required id="inputf">
                
                <div id="btndelete">
                        <input type="submit" name="fiddata" value="Get Data">
                </div>
            </div>
        </form>
        <form action="get_data.php" method="POST">
            <div id="fetchbtn">
                <input type="submit" name="falldata" value="Fetch All Data">
            </div>
        </form>
        <form action="get_data.php" method="POST">
            <div id="hpagebtn1">
                <input type="submit" name="hpage" value="HomePage">
            </div>
        </form>
        
    </body>
</html>