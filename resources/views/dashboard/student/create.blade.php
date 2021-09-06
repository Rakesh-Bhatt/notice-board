@include('dashboard.header')
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <strong>Add Student Form</strong> 
                    </div>
                    <div class="card-body card-block">
                        <form action="{{route('student.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" placeholder="Enter your name" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Gender</label></div>
                                <div class="col col-md-9">
                                    <div class="form-check-inline form-check">
                                        <label for="inline-radio1" class="form-check-label ">
                                            <input type="radio" id="inline-radio1" name="gender" value="male" class="form-check-input">Male
                                        </label>
                                        <label for="inline-radio2" class="form-check-label ">
                                            <input type="radio" id="inline-radio2" name="gender" value="female" class="form-check-input">Female
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email Input</label></div>
                                <div class="col-12 col-md-9"><input type="email" id="email-input" name="email" placeholder="Enter Email" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Phone</label></div>
                                <div class="col-12 col-md-9"><input type="phone" id="email-input" name="phone" placeholder="Enter phone" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Addresss</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="email-input" name="address" placeholder="Enter Address" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Username</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="email-input" name="username" placeholder="Enter username" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Password</label></div>
                                <div class="col-12 col-md-9"><input type="password" id="email-input" name="password" placeholder="Enter password" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Semester</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="email-input" name="semester" placeholder="Enter semester" class="form-control">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
@include('dashboard.footer')