<div class="modal fade" id="deleteEmployee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="" method="POST">
                @csrf
                @method('delete')
                <div class="modal-header">
                    <h5 class="modal-title">Confirm Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are your sure you want to delete?</p>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" name="btn_delete_submit_emp"
                        id="btn_delete_submit_emp">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>