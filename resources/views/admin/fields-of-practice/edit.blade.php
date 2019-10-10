@extends('admin.admin')
@section('content')
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <h4 class="page-title text-center">Edit field of practice</h4>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-body">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form action="{{route('field.update',$field->id)}}" method="POST">
                                {{csrf_field()}}
                                @method('PUT')
                                <div class="form-group">
                                    <label for="tag" class="col-md-3 col-form-label">Tag name</label>
                                    <input type="text" class="form-control input-full" id="tag" placeholder="Enter Tag"
                                        name="tag" value="{{$field->tag_name}}">

                                </div>




                        </div>
                        <div class="card-action">
                            <button class="btn btn-success" type="submit">Update</button>
                        </div>
                        </form>
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