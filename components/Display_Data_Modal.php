<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">S.No</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $user_id = $_SESSION['id'];
                        $sql = "SELECT * FROM `notes` WHERE `user_id`='$user_id'";
                        $result = mysqli_query($conn, $sql);
                        $no = 1;

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "
                                <tr>
                                    <th scope='row'>" . $no . "</th>
                                    <td>" . $row['title'] . "</td>
                                    <td>" . $row['description'] . "</td>
                                    <td class='d-flex justify-content-between'> <button class='edit btn btn-sm btn-info' id=' " . $row['sno'] . " ' >Edit</button> <button class='delete btn btn-sm btn-danger' id=' " . $row['sno'] . " ' >Delete
                                    </button>  </td>
                                </tr>
                                ";
                            $no = ($no + 1);
                        }
                        ?>


                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-info" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>