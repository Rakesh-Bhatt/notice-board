@include('dashboard.header')
<div class="breadcrumbs">
</div>
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <small><a href="{{route('student.create')}}" class="btn btn-primary float-right">Create</a></small>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Table</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>S.N.</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Semester</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $key => $value)
                                <tr>
                                    <td>{{$data->firstItem() + $key}}</td>
                                    <td>{{$value->name}}</td>
                                    <td>{{$value->gender}}</td>
                                    <td>{{$value->email}}</td>
                                    <td>{{$value->phone}}</td>
                                    <td>{{$value->address}}</td>
                                    <td>{{$value->semester}}</td>
                                    <td>{{date('M d, Y', strtotime($value->created_at))}}</td>
                                    <td><div class="btn btn-info"><a href="{{route('student.edit', $value->id)}}"><i class="fa fa-edit">Edit</i></div>
                                        <form action="{{route('student.destroy', $value->id)}}" method="post" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')"><i class="fa fa-trash-o"></i>Delete</button>
                                        </form></div>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="justify-content-center">
                            @if(class_basename($data) !== 'Collection')
                            {{$data->links()}}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->
<div class="clearfix"></div>

@include('dashboard.footer')