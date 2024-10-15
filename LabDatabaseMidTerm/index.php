<?php include "DB.php"; ?>

<!DOCTYPE html>


<html lang="en">


<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Student's Database  </title>

</head>

<body>

    <?php include "navbar.php"; ?>

    <?php

        $db = new DB();

        $result = $db->get();

    ?>

    <table border = "1">

        <tr>

            <th>    Id No.      </th>
            <th>    Last Name   </th>
            <th>    First Name  </th>
            <th>    Age         </th>
            <th>    Course      </th>
            <th>    Address     </th>
            <th>    Actions     </th>
            

        </tr>

        <?php   while($row = mysqli_fetch_row($result)) :   ?>

            <tr>

                <td>    <?php   echo htmlspecialchars($row[0]); ?>  </td>
                <td>    <?php   echo htmlspecialchars($row[1]); ?>  </td>
                <td>    <?php   echo htmlspecialchars($row[2]); ?>  </td>
                <td>    <?php   echo htmlspecialchars($row[3]); ?>  </td>
                <td>    <?php   echo htmlspecialchars($row[4]); ?>  </td>
                <td>    <?php   echo htmlspecialchars($row[5]); ?>  </td>

                <td>

                    <form action="delete_student.php" method="POST" style="display:inline;">

                        <input  type="hidden"   name="Id_No"    value=" <?php echo $row[0]; ?>">
                        <input  type="submit"   value="Delete"  onclick="return confirm('Are you sure you want to delete this student?');">

                    </form>

                </td>

            </tr>

        <?php   endwhile;   ?>

    </table>

</body>


</html>