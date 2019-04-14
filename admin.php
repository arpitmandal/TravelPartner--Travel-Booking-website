<?PHP
    $con=mysqli_connect("localhost","root","","project");
    if(!$con)
        die("Cannot connect to server");
        else 
        {
            $sql="select * from users";
            $rs=mysqli_query($con,$sql);
            if(mysqli_num_rows($rs)>0)
            {
                echo "<Table border='2px' align='center' cellpadding='10px' cellspacing='1px'>";
                echo "<tr>";
                echo "<th>USER NAME</th>";
                echo "<th>EMAIL</th>";
                echo "<th>PASSWORD</th>";
                echo "<th>CONTACT</th>";
                echo "</tr>";
                {
                    while ($row=mysqli_fetch_array($rs)) 
                    {
                        echo "<tr>";
                        echo "<td>$row[0]</td>";
                        echo "<td>$row[1]</td>";
                        echo "<td>$row[2]</td>";
                        echo "<td>$row[3]</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                }
            }
        }
?>