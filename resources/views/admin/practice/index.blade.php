@extends('admin.admin')
@section('content')
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <h4 class="page-title">Practice</h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title pull-right"><a href="{{route('practice.create')}}"
                                    class="btn btn-lg btn-success">Add new</a></div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-head-bg-default table-bordered-bd-default mt-4">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Logo</th>
                                        <th scope="col">Website</th>
                                        <th scope="col">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($practice as $practic)
                                    <tr>
                                        <td>{{$practic->name}}</td>
                                        <td>{{$practic->email}}</td>
                                        <td><img src="{{Storage::url($practic->logo)}}" alt="" width="50"></td>
                                        <td>{{$practic->website}}</td>
                                        <td><a href="{{route('practice.edit',$practic->id)}}"
                                                class="btn btn-info mr-5">Edit</a>
                                            <form action="{{route('practice.destroy',$practic->id)}}" method="post">
                                                @method('DELETE') {{csrf_field()}} <button class="btn btn-danger"
                                                    type="submit">Delete</button></form>
                                        </td>
                                    </tr>
                                    
                                    @endforeach

                                </tbody>
                            </table>
                            {{ $practice->links() }}
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