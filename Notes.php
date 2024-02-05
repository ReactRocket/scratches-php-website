<?php
session_start();

include 'components/Dbconnect.php';

if (isset($_SESSION['logedin']) && $_SESSION['logedin'] == true) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {


        if (isset($_POST['snoEdit'])) {
            // Update the record
            $sno = $_POST["snoEdit"];
            $title = $_POST["titleEdit"];
            $description = $_POST["descriptionEdit"];

            // Sql query to be executed
            $sql = "UPDATE `notes` SET `title` = '$title' , `description` = '$description' WHERE `notes`.`sno` = $sno";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $update = true;
            } else {
                echo "We could not update the record successfully";
            }
        } else {
            $title = $_POST["title"];
            $description = $_POST["description"];
            $user_id = $_SESSION['id'];

            // Sql query to be executed
            $sql = "INSERT INTO `notes` (`user_id`,`title`, `description`) VALUES ('$user_id','$title', '$description')";
            $result = mysqli_query($conn, $sql);
        }
    }
    if (isset($_GET['delete'])) {
        $sno = $_GET['delete'];
        $sql = "DELETE FROM `notes` WHERE `sno` = '$sno'";
        $result = mysqli_query($conn, $sql);
    }
} else {


    session_destroy();

    header("location: index.php");
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="utils/image/logo-color.png" />

    <title>scratches.com | Cloud Notes</title>

    <!-- <link
      rel="canonical"
      href="https://getbootstrap.com/docs/4.0/examples/carousel/"
    /> -->

    <!-- Bootstrap core CSS -->
    <link href="utils/css/getbootstrap.com_docs_4.0_dist_css_bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
    .mainc {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .active2 {
        font-weight: bold;
        opacity: 1;
    }
    </style>

</head>

<body>


    <main role="main" class="mainc">

        <?php
        include 'components/Display_Data_Modal.php';
        include 'components/Form_Modal.php';
        include 'components/Edit_Modal.php';
        ?>
        <!-- /.container -->
        <div class="container text-center">
            <div class="container d-flex justify-content-between">
                <a href="components/_logout.php" style="width: 10%;"
                    class="fixed-top m-5 btn btn-outline-danger">Logout</a>
            </div>
            <div class="card ">

                <div class="card-body">
                    <img class="rounded-circle" src="utils/animation/user.gif" alt="Generic placeholder image"
                        width="140" height="140" />

                    <h5 class="text-center">
                        <?php echo $_SESSION['name']; ?>
                    </h5>
                    <p class="card-text">A safe place in an unsafe world!</p>
                    <a href="#" class="btn btn-info" data-toggle="modal" data-target="#exampleModal"
                        data-whatever="@fat">Add Notes</a>
                    <a href="#" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModalCenter">Show
                        Notes</a>
                </div>
            </div>
        </div>


    </main>
    <!-- FOOTER -->
    <footer class="container">
        <!-- includ footer  -->
        <?php
        include 'components/Footer.php';
        ?>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script>
    window.jQuery ||
        document.write(
            '<script src="utils/js/code.jquery.com_jquery-3.2.1.slim.min.js"><\/script>'
        );
    </script>
    <script src="utils/js/getbootstrap.com_docs_4.0_assets_js_vendor_popper.min.js"></script>
    <script src="utils/js/getbootstrap.com_docs_4.0_dist_js_bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="utils/js/getbootstrap.com_docs_4.0_assets_js_vendor_holder.min.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script> -->
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();

    });

    edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
        element.addEventListener("click", (e) => {
            console.log("edit ");
            tr = e.target.parentNode.parentNode;
            title = tr.getElementsByTagName("td")[0].innerText;
            description = tr.getElementsByTagName("td")[1].innerText;
            console.log(title, description);
            titleEdit.value = title;
            descriptionEdit.value = description;
            snoEdit.value = e.target.id;
            console.log(e.target.id)
            $('#editModal').modal('toggle');
        })
    })

    deletes = document.getElementsByClassName("delete");
    Array.from(deletes).forEach((element) => {
        element.addEventListener("click", (e) => {

            sno = e.target.id.substr(0);

            if (confirm("Are you sure you want to delete this note!")) {
                window.location = `Notes.php?delete=${sno}`;
            } else {
                alert("Error! Somthing wents wrong...");
            }
        });
    });
    </script>
</body>

</html>