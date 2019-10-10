@extends('admin.admin')
@section('content')
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <h4 class="page-title">Fields Of Practice</h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title pull-right"><a href="{{route('field.create')}}"
                                    class="btn btn-lg btn-success">Add new</a></div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-head-bg-default table-bordered-bd-default mt-4">
                                <thead>
                                    <tr>
                                        <th scope="col">Tag name</th>
                                        <th scope="col">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($field as $tag)
                                    <tr>
                                        <td>{{$tag->tag_name}}</td>
                                        <td><a href="{{route('field.edit', $tag->id)}}"
                                                class="btn btn-info mr-5">Edit</a>
                                            <form action="{{route('field.destroy',$tag->id)}}" method="POST"
                                                width="200">@method('DELETE'){{csrf_field()}}<button type="submit"
                                                    class="btn btn-danger">Delete</button></form>
                                        </td>
                                    </tr>
                                    @endforeach



                                </tbody>
                            </table>
                            {{ $field->links() }}
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