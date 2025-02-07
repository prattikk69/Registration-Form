<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arniko College Admission Form</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body{
            height: 100vh;
            width: 100vw;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;


        }
        .logo{
            position: absolute;
            top: 0;
            font-size: 2rem;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin-left: -80%;
            color:white;
            background-color: rgb(59, 150, 59);
            cursor: pointer;
        }
        .background{
            font-size: 12rem;
            position: absolute;
            z-index: -1;
            font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            color: rgb(51, 155, 53);
            transform: rotate(-40deg);
            margin: 0;
            padding: 0;
            overflow:hidden;
        }
        .container{
            border: solid 1px ;
            height: auto;
            width: 50vw;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-radius: 12px;
            text-align:center;
            padding:30px;
        }

        input{
            width: 40vw;
            margin: 5px;
            padding: 5px;
            opacity: 80%;

        }
        button{
            width: 30vw;
            background-color: rgb(59, 150, 59);
            border: solid 1px;
            border-radius: 12px;
            margin-left: 10px;
            cursor: pointer;
        }
        #male {
            font-size:1.5rem;
            width: 10px;
        }
        #female {
            font-size:1.5rem;
            width: 10px;
        }

        h3{
            margin:0;
            padding: 0;
        }

    </style>
    </head>
<body>
    <div class="logo"><marquee>Arniko+2 Science Programme, Biratnagar-10</marquee></div>
    <div class="background">Arniko+2<br>College</br></div>


    <div class="container">
        <form action="" method="post">
            <input type="text" name="first_name" placeholder="First Name" maxlength="20" required><br>
            <input type="text" name="last_name" placeholder="Last Name" maxlength="20" required><br>

            <h3>
            <input type="radio" id="male" name="gender" value="male" required>
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
            </h3>

            <input type="text" name="parent_name" placeholder="Parent's Name" maxlength="30" required><br>
            <input type="text" name="guardian_name" placeholder="Guardian Name" maxlength="30" required><br>
            <input type="email" name="email" placeholder="Email Address" maxlength="30" required><br>
            <input type="text" name="address" placeholder="Address" maxlength="30" required><br>
            <input type="text" name="contact_no" placeholder="Contact no." pattern="\d{10,15}" required>

            <button type="submit">Register Me</button>
        </form>

    <?php

        echo "<script>
        Swal.fire({
            icon: 'Alert',
            title: 'Welcome to Arniko+2 Registration Form.',
            text: 'Please fill all the details in the form for the registration.',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK'
            });
        </script>";





        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "project";

        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error) {
            die("Connection Failed: " . $conn->connect_error);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $first_name = $_POST["first_name"];
            $last_name = $_POST["last_name"];
            $gender = $_POST["gender"];
            $parent_name = $_POST["parent_name"];
            $guardian_name = $_POST["guardian_name"];
            $email = $_POST["email"];
            $address = $_POST["address"];
            $contact_no = $_POST["contact_no"];

            $sql = "INSERT INTO `infos` (`first_name`, `last_name`, `gender`, `parent_name`, `guardian_name`, `email`, `address`, `contact_no`)
            VALUES ('$first_name', '$last_name', '$gender', '$parent_name', '$guardian_name', '$email', '$address', '$contact_no')";
        

        if ($conn->query($sql) === TRUE) {
                echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: '✔ Registration Successful!',
                    text: 'Your data has been stored successfully.',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                    });
                </script>";
            }

        else {
                    "<script>
                    Swal.fire({
                    icon: 'error',
                    title: 'X Registration was not successful!',
                    text: 'We're sorry. Your registration wasn't successful.
                    For more information please contact us on: Ph no.97******** ',
                    confirmButtonColor: '#ff0000',
                    confirmButtonText: 'OK'
                    });
                </script>";
            }
        }

        $conn->close();
        ?>


    </div>
</body>
</html>