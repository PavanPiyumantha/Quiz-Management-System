<?php 
    include 'dbConnection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Members</title>
    <link rel="stylesheet" href="css/displaystyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b41b9ec9a0.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="table">
        <div class="table_header">
            <p>Delete Users</p>
            <button name="btnsearch" class="btns"><a href="admindashboard.php" style="color:white;">Admin Dashboard</a></button>
        </div>
            <div class="table_section">
                <table>
                    <thead>
                        <tr>
                            <th>Name With Initails</th>
                            <th>Full Name</th>
                            <th>DOB</th>
                            <th>Gender</th>
                            <th>NIC</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Register No</th>
                            <th>Center</th>
                            <th>Course</th>
                            <th>Username</th>
                            <th>User Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "select * from user_details where active_status=0";
                        $result = mysqli_query($connect,$sql);
                        if($result)
                        {
                            while($row= mysqli_fetch_assoc($result))
                            {
                                $id=$row['id'];
                                $nameWithInitials = $row['nameWithInitials'];
                                $fullname = $row['fullName'];
                                $dob= $row['dob'];
                                $gender = $row['gender'];
                                $nic = $row['nic'];
                                $phone = $row['phone'];
                                $email = $row['email'];
                                $reg_no = $row['regNo'];
                                $center = $row['center'];
                                $course = $row['course'];
                                $username = $row['username'];
                                $userType = $row['userType'];
                                echo '<tr>
                                    <td>'.$nameWithInitials.'</td>
                                    <td>'.$fullname.'</td>
                                    <td>'.$dob.'</td>
                                    <td>'.$gender.'</td>
                                    <td>'.$nic.'</td>
                                    <td>'.$phone.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$reg_no.'</td>
                                    <td>'.$center.'</td>
                                    <td>'.$course.'</td>
                                    <td>'.$username.'</td>
                                    <td>'.$userType.'</td>
                                    <td>
                                        <button><a href="recoverMember.php?recoverid='.$id.'"><i class="fa-solid fa-arrows-rotate" id="rec"></i></a></button>
                                        <button><a href="deletePermenant.php?deleteid='.$id.'"><i class="fa-solid fa-trash"></i></a></button>
                                    </td>
                                </tr>';
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="text-center mt-10">
            <a href="delete_user_data_download.php" class="btn btn-success" target="_blank">Data Export To Excel</a>
        </div>
    </div>
</body>
</html>