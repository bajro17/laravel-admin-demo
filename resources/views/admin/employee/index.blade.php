@extends('admin.admin')
@section('content')
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <h4 class="page-title">Employee</h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title pull-right"><a href="{{route('employee.create')}}"
                                    class="btn btn-lg btn-success">Add new</a></div>
                        </div>
                        <div class="card-body">

                            <table class="table table-bordered table-head-bg-default table-bordered-bd-default mt-4">
                                <thead>
                                    <tr>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Practice</th>
                                        <th scope="col">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employee as $emp)
                                    
                                    <tr>
                                        <td>{{$emp->first_name}}</td>
                                        <td>{{$emp->last_name}}</td>
                                        <td>{{$emp->email}}</td>
                                        <td>{{$emp->phone}}</td>
                                        <td>{{$emp->practice->name}}</td>
                                        <td><a href="{{route('employee.edit', $emp->id)}}"
                                                class="btn btn-info mr-5">Edit</a>
                                            <form action="{{route('employee.destroy',$emp->id)}}" method="POST">
                                                @method('DELETE'){{csrf_field()}}<button type="submit"
                                                    class="btn btn-danger">Delete</button></form>
                                        </td>
                                    </tr>
                                    @endforeach



                                </tbody>
                            </table>
                            {{ $employee->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container-fluid">

            <div class="copyright ml-auto">
                2018, made with <i class="la la-heart heart text-danger"></i> by <a
                    href="http://www.themekita.com">ThemeKita</a>
            </div>
        </div>
    </footer>
</div>
@endsection