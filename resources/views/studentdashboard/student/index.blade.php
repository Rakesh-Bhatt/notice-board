@include('studentdashboard.header')
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">S.N.</th>
            <th scope="col">Category</th>
            <th scope="col">Description</th>
            <th scope="col">File</th>
            <th scope="col">Notice Issued Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $key => $value)
        <tr>
            <td>{{$data->firstItem() + $key}}</td>
            <td>{{$value->category->title}}</td>
            <td>{{$value->description}}</td>
            <td>
                @if($value->image)
                <img src="{{asset($value->image)}}".height="10".width="5">
                @endif

            </td>
            <td>{{date('M d, Y', strtotime($value->created_at))}}
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
@include('studentdashboard.footer')