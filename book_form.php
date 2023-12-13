<?php

    $conn = mysqli_connect('localhost','root','','travel_lanka');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // else{
    //     echo "Connected successfully";
    // }
    
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    $sql = " INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving) 
    VALUES ('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')";


    if(mysqli_query($conn, $sql)==TRUE){
        echo '<script>alert("Your information is recorded! We will send more detailes via email! Welcome!!!")</script>';
    }
    else{
        echo '<script>alert("Something went wrong")</script>';
    }


    $sql = "SELECT * FROM book_form";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        echo "<h1>Recorded Informtion</h1>";
        echo "<table> 
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Location</th>
                    <th>Guests</th>
                    <th>Arriaval</th>
                    <th>Leaving</th>
                </tr>";
       
        while($row = $result->fetch_assoc()){
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["phone"] . "</td>";
            echo "<td>" . $row["address"] . "</td>";
            echo "<td>" . $row["location"] . "</td>";
            echo "<td>" . $row["guests"] . "</td>";
            echo "<td>" . $row["arrivals"] . "</td>";
            echo "<td>" . $row["leaving"] . "</td>";
            echo "</tr>";
        }
        echo "</table><br>";
        echo "<h2>Please click <a href='index.php'> here </a> go to the website again..!</h2>";
    }	
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Lanka</title>
    <style>
        h1,h2 {
             text-align: center;
        }
        .logo img{
            width: 350px;
            height: 300px;
        }
        .logo{
             text-align: center;
         }
        table{
            border:1px solid black;
            margin-left: auto;
            margin-right: auto;
        }
        table tr td,th{
            border:1px solid black;
            padding-left: 10px;
            padding-right: 10px;
        }
        a{
            text-decoration: none;
            color:blue;
        }
        a:hover{
            text-decoration: none;
            font-size:30px;
            color:blue;
        }
    </style>
</head>
<body>

</body>
</html>
<?php
    $conn->close();
?>