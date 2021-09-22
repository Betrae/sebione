<div class="modal fade" id="editCompany" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Company</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/dashboard" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <div class="text-center mb-3">
                            <img src="/storage/logo/{{$company->logo}}" alt="">
                            <label class="form-label" for="edit_logo">Edit logo</label>
                            <input type="file" class="form-control" id="edit_logo" name="edit_logo"
                                accept="image/x-png, image/png, image/jpg, image/jpeg">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-building"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Company Name" name="edit_company_name"
                                id="edit_company_name" aria-label="Company Name">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-at"></i></span>
                            </div>
                            <input type="email" class="form-control" placeholder="Email Address"
                                name="edit_company_email" id="edit_company_email" aria-label="Email Address">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-window-restore"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Website" name="edit_company_website"
                                id="edit_company_website" aria-label="Website">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" name="btn_edit_submit"
                        id="btn_edit_submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>