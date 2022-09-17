
<div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id No</th>
                <th>Name</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Department</th>
                <th>Year</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $emplo)
                <tr>
                    <th>{{$emplo->id}}</th>
                    <th>{{$emplo->name}}</th>
                    <th>{{$emplo->address}}</th>
                    <th>{{$emplo->contact}}</th>
                    <th>{{$emplo->degree}}</th>
                    <th>{{$emplo->year}}</th>
                    <td >
                        <a href="{{url('edit', ['employers' => $emplo->id])}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                    </td>
                    <td >
                        <a href="{{url('delete', ['employers' => $emplo->id])}}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<style>
    body {
  background-size: cover;
  background-image:url('{{asset('/images/bg1.jpg')}}');
}
</style>
