<?php 
    
    $link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"phpmysqli");

    
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>MVC</title>
    <meta http-equiv="Content-type" content="text/html" charset="iso-8859-1" >
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form name="form1" action="" method="post">
        <table>
           
                <tr>
                    <td class="name">Enter Name</td>
                    <td><input type="text" name="t1"></td>
                </tr>
        
            <tr>
                <td class="name">Enter City</td>
                <td><input type="text" name="t2"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit1" value="insert">
                    <input type=submit name="submit2" value="delete">
                    <input type="submit" name="submit3" value="update">
                    <input type="submit" name="submit4" value="display">
                    <input type="submit" name="submit5" value="Search">
                </td>
                
            </tr>
        </table>
    </form>
<?php 
    if (isset($_POST["submit1"])) 
    {
        mysqli_query($link,"insert into table1 values('$_POST[t1]','$_POST[t2]')");
    }

    if (isset($_POST["submit2"])) 
    {
        mysqli_query($link,"delete from table1 where name='$_POST[t1]'");
    }
     if (isset($_POST["submit3"])) 
    {
        mysqli_query($link,"update table1 set name='$_POST[t2]' where name='$_POST[t1]'");
    }
    if (isset($_POST["submit4"])) 
    {
        $res=mysqli_query($link,"select * from table1");
        echo "<table border=1>";
        echo "<tr>";
            echo "<th>"; echo "name"; echo "</th>";
            echo "<th>"; echo "city"; echo "</th>";
            echo "</tr>";
        while ($row=mysqli_fetch_array($res))

        {
            echo "<tr>";
            echo "<td>"; echo $row["name"]; echo "</td>";
            echo "<td>"; echo $row["city"]; echo "</td>";
            echo "</tr>";
        }

        echo "</table>";
    }




    if (isset($_POST["submit5"])) 
    {
        $res=mysqli_query($link,"select * from table1 where name='$_POST[t1]'");
        echo "<table border=1>";
        echo "<tr>";
            echo "<th>"; echo "name"; echo "</th>";
            echo "<th>"; echo "city"; echo "</th>";
            echo "</tr>";
        while ($row=mysqli_fetch_array($res))

        {
            echo "<tr>";
            echo "<td>"; echo $row["name"]; echo "</td>";
            echo "<td>"; echo $row["city"]; echo "</td>";
            echo "</tr>";
        }

        echo "</table>";
    }


?>
</body>
</html>