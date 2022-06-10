@extends('layouts.master')


@section('content')
<section class="section">
    <div class="section-body">
        @include('layouts.alerts.message')
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Manage Designations</h4><br>

   <button type="button" class="btn btn-outline-info btn-xs px-4 pull-right"
                            data-toggle="modal" data-target="#addPermissionModal">
                        <i class="fa fa-plus-circle"></i>
                        Add
                    </button>
                    </div>
                    <div class="card-body">

                       
                        <div class="tab-content tab-bordered" id="myTab3Content">
                            <div class="tab-pane fade @if(empty($id)) active show @endif" id="home2" role="tabpanel"
                                aria-labelledby="home-tab2">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-1">
                                    <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Name</th>
                     <th>Department Name</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($permissions))
                    @foreach($permissions as $permission)
                   
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $permission->name }}</td>
                            <td>{{ $permission->department->name }}</td>
                            <td align="center">
                                {!! Form::open(['route' => ['designations.destroy', $permission->id], 'method' => 'delete']) !!}
                                <button type="button" class="btn btn-outline-info btn-xs edit_permission_btn"
                                        data-toggle="modal"
                                        data-id="{{$permission->id}}"
                                 data-name="{{$permission->name}}"
                                   data-department="{{$permission->department_id}}"
                                    <i class="fa fa-edit"></i> Edit
                                </button>
                                {{ Form::button('<i class="fas fa-trash"></i> Delete', ['type' => 'submit', 'class' => 'btn btn-outline-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) }}
                                {{ Form::close() }}
                            </td>
                        </tr>
                  
                    @endforeach
                    @endif
                    </tbody>
                                    </table>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


@include('manage.designation.add')
@include('manage.designation.edit')

@endsection

@section('scripts')
<script>
        $(document).on('click', '.edit_permission_btn', function () {
            var id = $(this).data('id');
            var name = $(this).data('name');
             var dep = $(this).data('department');
            $('#id').val(id);
            $('#p-name_').val(name);
             $('#p-dep_').val(dep);
            $('#editPermissionModal').modal('show');
        });
    </script>
@endsection
