<table class="table table-hover table-bordered table-striped toggle-arrow-tiny"
       id="exampleFooAccordion"
       data-sorting="true" data-show-toggle="true" data-toggle-column="last">
    <thead>
    <tr>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Năm tốt nghiệp</th>
        <th>Xếp loại</th>
        <th>Chuyên ngành</th>
        <th>Chi tiết</th>
     </tr>
    </thead>
    <tbody>
        @foreach($data as $row)
            <tr>
                <td>{{$row->upon}}</td>
                <td>{{$row->dob}}</td>
                <td>{{$row->yog}}</td>
                <td>{{$row->ranking}}</td>
                <td>{{$row->major}}</td>
                <td><a target="_blank" href="/degrees/detail/{{ $row->id }}" >Chi tiết</a></td>
            </tr>
        @endforeach
    </tbody>
    </table>

    {!! $data->links() !!}


