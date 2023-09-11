<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Laravel 9 CRUD Tutorial Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>About page</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('about.create') }}"> Create Content</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Content title</th>
                    <th>Content description</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($About as $datas)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $datas->title }}</td>
                        <td>{{ $datas->description }}</td>
                        <td class='d-flex '>
                            {{-- delete --}}
                            <form method="POST" action="{{ route('about.destroy', $datas->id) }}">
                                @csrf
                                @method('delete')

                                <button type='submit'
                                    class="d-flex flex-column text-inverse btn btn-danger text-white mr-4"
                                    data-toggle="tooltip">
                                    <i class="fa fa-trash"></i>
                                    {{-- <span>Delete</span> --}}
                                </button>
                            </form>
                            {{-- //edit --}}
                            <form method="get" action="{{ route('about.edit', $datas->id) }}">
                                @csrf
                                @method('edit')

                                <button type='submit' class="d-flex flex-column btn btn-outline-warning text-inverse  "
                                    data-toggle="tooltip">
                                    <i class="fa fa-edit"></i>
                                    {{-- <span>Edit</span> --}}
                                </button>
                            </form>
                            {{-- <a class="btn btn-primary" href="{{route('about.edit', $content->id)}}">Edit</a> --}}
                            {{-- <a class="btn btn-primary" href="{{route('about.destroy', ['id'=>$content->id])}}">Delete</a> --}}

                            {{-- <form action="{{ route('about.destroy',$content->id) }}" method="post">
                                <a class="btn btn-primary" href="{{ route('about.edit',$content->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                                <button type="submit" class="btn btn-danger">Show</button>
                            </form> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $About->links() !!}
    </div>
</body>

</html>
