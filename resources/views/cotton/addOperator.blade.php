<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="formModal">Add Operator</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
           <form id="addClientForm" method="post" action="javascript:void(0)">
            @csrf
        <div class="modal-body">

            <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-12 ">

<div class="form-group row"><label
                                                            class="col-lg-2 col-form-label">Name <span class="required" style="color:red;"> * </span></label>

                                                        <div class="col-lg-10">
                                                            <input type="text" name="name"
                                                                value="{{ isset($data) ? $data->name : ''}}"
                                                                class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row"><label
                                                            class="col-lg-2 col-form-label">Phone <span class="required" style="color:red;"> * </span></label>

                                                        <div class="col-lg-10">
                                                            <input type="text" name="phone"
                                                                value="{{ isset($data) ? $data->phone : ''}}"
                                                                class="form-control"  placeholder="+255713000000" required>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row"><label
                                                            class="col-lg-2 col-form-label">Email <span class="required" style="color:red;"> * </span></label>

                                                        <div class="col-lg-10">
                                                            <input type="email" name="email"
                                                                value="{{ isset($data) ? $data->email : ''}}"
                                                                class="form-control" required>
                                                        </div>
                                                    </div>

                                                <div class="form-group row"><label
                                                            class="col-lg-2 col-form-label">Address <span class="required" style="color:red;"> * </span></label>

                                                        <div class="col-lg-10">
                                                            <textarea name="address"  class="form-control" required>  {{ isset($data) ? $data->address : ''}} </textarea>
                                                                                                                    

</div>
                                                    </div>

                            <div class="form-group row"><label
                                                            class="col-lg-2 col-form-label">TIN</label>

                                                        <div class="col-lg-10">
                                                            <input type="text" name="TIN"
                                                                value="{{ isset($data) ? $data->TIN : ''}}"
                                                                class="form-control">
                                                        </div>
                                                    </div>

                                                 <div class="form-group row"><label
                                                            class="col-lg-2 col-form-label">Account Code <span class="required" style="color:red;"> * </span></label>

                                                        <div class="col-lg-10">
                                                            <input type="text" name="account_codes"
                                                                value="{{ isset($data) ? $data->account_codes : ''}}"
                                                                class="form-control" required>
                                                        </div>
                                                    </div>

                 
               
              </div>
</div>
                                                    </div>


        </div>
        <div class="modal-footer bg-whitesmoke br">
            <button type="submit" class="btn btn-primary" id="save" onclick=" saveOperator(this)" data-dismiss="modal">Save</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>


       </form>


    </div>
</div>

<script>    

</script> 