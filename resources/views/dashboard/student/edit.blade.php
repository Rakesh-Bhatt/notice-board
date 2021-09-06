@include('dashboard.header')
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <strong>View Student Form</strong> 
                    </div>
                    <div class="card-body card-block">
                        <form action="{{route('student.update', $data->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            @method('PUT')
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" placeholder="Enter your name" class="form-control" value="{{$data->name}}"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Gender</label></div>
                                <div class="col col-md-9">
                                    <div class="form-check-inline form-check">
                                        <label for="inline-radio1" class="form-check-label ">
                                            <input type="radio" id="inline-radio1" name="gender" class="form-check-input" value="male"
                                            {{ $data->gender == 'male' ? 'checked' : ''}}
                                            >Male
                                        </label>
                                        <label for="inline-radio2" class="form-check-label ">
                                            <input type="radio" id="inline-radio1" name="gender" class="form-check-input" value="female"
                                            {{ $data->gender == 'female' ? 'checked' : ''}}
                                            >Female
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email Input</label></div>
                                <div class="col-12 col-md-9"><input type="email" id="email-input" name="email" placeholder="Enter Email" class="form-control" value="{{$data->email}}">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Phone</label></div>
                                <div class="col-12 col-md-9"><input type="phone" id="email-input" name="phone" placeholder="Enter phone" class="form-control" value="{{$data->phone}}">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Addresss</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="email-input" name="address" placeholder="Enter Address" class="form-control" value="{{$data->address}}">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Username</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="email-input" name="username" placeholder="Enter username" class="form-control" value="{{$data->username}}">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Password</label></div>
                                <div class="col-12 col-md-9"><input type="password" id="email-input" name="password" placeholder="Enter password" class="form-control" value="{{$data->password}}">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Semester</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="email-input" name="semester" placeholder="Enter semester" class="form-control" value=" {{$data->semester}}">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Update
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@include('dashboard.footer')