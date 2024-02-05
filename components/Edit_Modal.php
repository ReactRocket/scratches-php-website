<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit this Note</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="Notes.php" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="snoEdit" id="snoEdit">
                    <div class="form-group">
                        <label for="title">Note Title</label>
                        <input type="text" class="form-control" id="titleEdit" name="titleEdit"
                            aria-describedby="emailHelp">
                    </div>

                    <div class="form-group">
                        <label for="desc">Note Description</label>
                        <textarea class="form-control" id="descriptionEdit" name="descriptionEdit" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer d-block mr-auto">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>