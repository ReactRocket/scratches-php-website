<?php
require('dBconnect.php');

session_start();

if ($_SESSION['admin'] === false) {
    header("location:_logout.php");
    die();
}



?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iDiscuss | Online Coding Forum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body class="bg-light text-dark">

    <div class="container">
        <div class="container d-flex justify-content-between align-items-center mt-5">
        <h1 class="text-center text-info ">Admin Panel</h1>

            <a href="_logout.php" value="Cancel" class="btn btn-danger text-white" name='cancel'>Logout</a>
        </div>


        <!--  -->
        <?php
        require('Dbconnect.php');
        $q = "SELECT * FROM usertbl";
        $result = mysqli_query($conn, $q) or die("Query Failed!");
        if (mysqli_num_rows($result) > 0) {

            echo '<table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Mobile No.</th>
      <th scope="col">Gender</th>
      <th scope="col">Email</th>
     
    </tr>
  </thead>';

            while ($r = mysqli_fetch_array($result)) {
                echo "<tbody>
    <tr>
      <td>$r[0]</td>
      <td>$r[1]</td>
      <td>$r[2]</td>
      <td>$r[3]</td>
      <td>$r[4]</td>
      <td>$r[5]</td>
    </tr>
  </tbody>";
            }

            echo '</table>';
        }
        ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>