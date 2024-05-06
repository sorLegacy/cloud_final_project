<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- boot -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>ALEX-School</title>

</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" 
    style="background-color: #00ff5579;">
        ALEX-School🏫
    </nav>

<!--student  -->
    <div class="continar col-md-15" >
        
        <table class="table table-success table-striped text-center mb-3">
        <thead class="table-dark">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">C-GPA</th>
            <th scope="col">Age</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "index.php";

                $sql = "SELECT * FROM `students`";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td> <?php echo $row['student_id'] ?></td>
                        <td> <?php echo $row['fname'] ?></td>
                        <td> <?php echo $row['lname'] ?></td>
                        <td> <?php echo $row['cgpa'] ?></td>
                        <td> <?php echo $row['age'] ?></td>
                    </tr>
                    <tr>
                    <?php
                }
            ?>
        </tbody>
        </table>
    </div>

<!-- instructor -->
<div class="continar">
        
        <table class="table table-success table-striped text-center mb-3">
        <thead class="table-dark">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Salary</th>
            <th scope="col">Age</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "index.php";
            
                $sql = "SELECT * FROM `instructor`";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td> <?php echo $row['instructor_id'] ?></td>
                        <td> <?php echo $row['fname'] ?></td>
                        <td> <?php echo $row['lname'] ?></td>
                        <td> <?php echo $row['salary'] ?></td>
                        <td> <?php echo $row['age'] ?></td>
                    </tr>
                    <tr>
                    <?php
                }
            ?>
        </tbody>
        </table>
    </div>

<!-- courses -->
<div class="continar">
        <table class="table table-success table-striped text-center mb-3">
        <thead class="table-dark">
            <tr>
            <th scope="col">Course Code</th>
            <th scope="col">Course Name</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "index.php";
            
                $sql = "SELECT * FROM `courses`";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td> <?php echo $row['course_code'] ?></td>
                        <td> <?php echo $row['course_name'] ?></td>
                    </tr>
                    <tr>
                    <?php
                }
            ?>
        </tbody>
        </table>
    </div>

    <!-- boot -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>


