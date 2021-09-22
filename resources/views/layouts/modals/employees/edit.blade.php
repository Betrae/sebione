<div class="modal fade" id="editEmployee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Employee</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/employees/update/{id}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-building"></i></span>
                            </div>
                            <select class="form-control" name="edit_company_name" id="edit_company_name" required>
                                <option value="" disabled="" selected="">Select Company</option>
                                @foreach($companies as $company)
                                <option value="{{ $company->id }}">{{ $company->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="First Name" name="edit_first_name"
                                id="edit_first_name" aria-label="First Name" required>

                            <div class="input-group-prepend" style="margin-left:10px;">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Last Name" name="edit_last_name"
                                id="edit_last_name" aria-label="Last Name" required>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-at"></i></span>
                            </div>
                            <input type="email" class="form-control" placeholder="Email" name="edit_email"
                                id="edit_email" aria-label="Email" required>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-phone"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Phone" name="edit_phone"
                                id="edit_phone" aria-label="Phone" required>
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