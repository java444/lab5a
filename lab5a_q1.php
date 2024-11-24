<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php 
        $name = "Aboubakar Mahamat Moussa";
        $MatricNumber = "AI230193";
        $course = "BIS";
        $yearOfStudy = 2024;
        $address = "jalan universiti, taman sedap 85900, Parit Raja, Johor.";

    ?>

    <table>
        <tr>
            <td>Name: </td>
            <td><?php echo "$name";?></td>
        </tr>
        <tr>
            <td>Matric Number: </td>
            <td><?php echo "$MatricNumber"; ?></td>
        </tr>
        <tr>
            <td>Course: </td>
            <td><?php echo "$course"; ?></td>
        </tr>
        <tr>
            <td>Year of Study: </td>
            <td><?php echo "$yearOfStudy"; ?></td>
        </tr>
        <tr>
            <td>Address: </td>
            <td><?php echo "$address"; ?></td>
        </tr>
    </table>
    
</body>
</html>
