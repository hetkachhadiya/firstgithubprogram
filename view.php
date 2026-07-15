<?php
include "db.php";
$result = mysqli_query($conn, "SELECT * FROM student_db");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Data</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style>
        body {
            background: linear-gradient(135deg, #667eea, #764ba2);
        }

        .table-container {
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body class="container py-5">

<div class="table-container animate_animated animate_fadeInUp">

<h2 class="text-center mb-4">Stored Data</h2>

<div class="table-responsive">
<table class="table table-bordered table-hover text-center">

<thead>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Password</th>
    <th>Age</th>
    <th>DOB</th>
    <th>Email</th>
    <th>Gender</th>
    <th>Hobby</th>
	<th>Img</th>
    <th>Action</th>
</tr>
</thead>

<tbody>

<?php while($row = mysqli_fetch_assoc($result)) { ?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['password']; ?></td>
    <td><?php echo $row['age']; ?></td>
    <td><?php echo $row['dob']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['gender']; ?></td>

    <!-- ✅ FIXED HOBBY -->
    <td><?php echo $row['hobby']; ?></td>
	<td><img src="uploads/<?php echo $row['img']; ?>" width="100"></td>

    <td>
        <a href="http://localhost/del.php?id=<?php echo $row['id'];?>">Delete</a>
        <a href="http://localhost/update.php?id=<?php echo $row['id']; ?>">Update</a>
    </td>
</tr>


<?php } ?>

</tbody>
</table>
</div>

<div class="text-center mt-3">
    <a href="form2.php" class="btn btn-primary">← Back to Form</a>
</div>

</div>

</body>
</html>