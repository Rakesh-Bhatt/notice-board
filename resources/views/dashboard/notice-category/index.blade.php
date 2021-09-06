@include('dashboard.header')
<div class="breadcrumbs">

</div>
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <center>
                <small><a href="{{route('notice-category.create')}}" class="btn btn-primary float-right">Create</a></small>
            </center>
            @if(session()->has('status')) 
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Can not Delete!!!</strong> {{session()->get('status')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
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
                                    <th>Title</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $key => $value)
                                <tr>
                                    <td>{{$data->firstItem() + $key}}</td>
                                    <td>{{$value->title}}</td>
                                    <td>{{date('M d, Y', strtotime($value->created_at))}}</td>
                                    <td><div class="btn btn-info"><a href="{{route('notice-category.edit', $value->id)}}"><i class="fa fa-edit">Edit</i></div>
                                        <form action="{{route('notice-category.destroy', $value->id)}}" method="post" class="d-inline">
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
    </div>
</div><!-- .content -->
<div class="clearfix"></div>

@include('dashboard.footer')