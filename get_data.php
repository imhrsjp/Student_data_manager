<html>
    <body id="bd">
<?php
    

    

    $server = "localhost";

    $username = "root";

    $pass = "";

    $database = "info";

    $connection = mysqli_connect($server,$username,$pass,$database);

    
    if(isset($_POST['edit']))
    {
        include("update.php");
    }
    if(isset($_POST['ins']))
    {
        include("insert.php");
    }
    if(isset($_POST['fetch']))
    {
        include("fetchbyid.php");
    }
    if(isset($_POST['dlt']))
    {
        include("delete.php");
    }
    if(isset($_POST['hpage']))
    {
        include("main.php");
    }
    
    if(isset($_POST['submit']))
    {
        $eno=$_POST['eno'];
        $name=$_POST['name'];
        $mail=$_POST['email'];

        $iquery = "INSERT INTO stdata VALUES('$eno','$name','$mail')";
        $insert = mysqli_query($connection,$iquery);
        if($insert)
        {
            echo "<hr><h1>$eno Data Inserted</h2><br>";
            include("main.php");
        }
        else
        {
            echo "<h1>Something went Wrong</h1><br>";
            echo "<h1>Enter Another Id, This is Already in database..</h1>";
            include("blank.php");
        }

    }

    if(isset($_POST['editd']))
    {
        $enod=$_POST['enod'];
        $named=$_POST['named'];
        $maild=$_POST['emaild'];

        $q3="select * from stdata where eno='$enod'";
        $res=mysqli_query($connection,$q3);
        $rows=mysqli_num_rows($res);
        if($rows==0){
            header('Location:update.php');
        }

        $uquery = "UPDATE stdata SET fname='$named',email='$maild' WHERE eno='$enod'";
        $update = mysqli_query($connection,$uquery);
        if($update)
        {
            echo "<hr><h1>$enod Data Updated</h1><br>";
            include("main.php");
        }
        else
        {
            echo "<h1>Something went Wrong</h1><br>";
            include("blank.php");
        }

    }

    if(isset($_POST['dltdata']))
    {
        $enodel = $_POST['edno'];
        $dquery = "DELETE FROM stdata WHERE eno='$enodel'";
        $delete = mysqli_query($connection,$dquery);
        if($delete)
        {
            echo "<hr><h1>$enodel Data Deleted</h1><br>";
            include("main.php");
        }
        else
        {
            echo "<h1>Something went Wrong</h1><br>";
            include("blank.php");
        }
    }

    if(isset($_POST['fiddata']))
    {
        $fdid = $_POST['feno'];
        $fquery = "SELECT fname,email FROM stdata WHERE eno='$fdid'";
        $get_n = mysqli_query($connection,$fquery);
        while($row = mysqli_fetch_assoc($get_n))
        {
            echo "<br><br><hr><br><h2>Student Enrollment:   $fdid</h2>".
                "<h2>Student Name:   {$row['fname']} </h2>".
                "<h2>Student Email:   {$row['email']} </h2><br><hr>";

        //    include("blank.php")
        }
        include("blank.php");
    }

    if(isset($_POST['falldata']))
    {
        include("blank.php");
        $faquery = "SELECT * FROM stdata";
        $get_data = mysqli_query($connection,$faquery);
        while($row1 = mysqli_fetch_assoc($get_data))
        {
            echo "<br><hr><h2>Student Enrollment: {$row1['eno']}</h2>".
                 "<h2>Student Name: {$row1['fname']}</h2>".
                 "<h2>Student Email:    {$row1['email']}</h2><hr>";

        }
    //    include("blank.php");
    }



    

?>
</body>
</html>