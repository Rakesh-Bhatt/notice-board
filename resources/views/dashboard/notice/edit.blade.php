@include('dashboard.header')
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <strong>Edit Notice Form</strong> 
                    </div>
                    <div class="card-body card-block">
                        <form action="{{route('notice.update', $data->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            @method('PUT')
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Category</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="category_id" id="selectSm" class="form-control-sm form-control">
                                        <option value="0">Select Category</option>
                                        @foreach($category as $value)
                                        <option value="{{$value->id}}" @if($data->category_id==$value->id) selected @endif>{{$value->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Description</label></div>
                                <div class="col-12 col-md-9">
                                    <textarea name="description" id="textarea-input" rows="9" placeholder="Content..." class="form-control">{{$data->description}}</textarea></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">File </label></div>
                                    <!-- <div class="col-12 col-md-9"> -->
                                        <input type="file" name="image" class="col-12 col-md-9"> 
                                        <!-- </div> -->
                                        <div class="col-12 col-md-9">
                                            <input type="hidden" id="file-input" name="image_url" class="form-control-file" value="{{$data->image}}">
                                            @if($data->image)
                                            <img src="{{asset($data->image)}}" height="100" width="100">
                                            @endif
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
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
@include('dashboard.footer')