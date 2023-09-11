<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Content Form </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Content</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('index.index') }}">
                        Back</a>
                </div>
            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('index.update', $home->id) }}" method="put   ">

            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Heading 1:</strong>
                        <input type="text" name="heading1" value="{{ $home->heading1 }}" class="form-control"
                            placeholder="Heading 1">
                        @error('heading1')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Heading 2:</strong>
                        <input type="text" name="heading2" class="form-control" placeholder="Heading 2"
                            value="{{ $home->heading2 }}">
                        @error('heading 2')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Content Description:</strong>
                        <input type="text" name="description" value="{{ $home->description }}" class="form-control"
                            placeholder="Content description">
                        @error('address')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
    <form method="post" enctype='multipart/form-data' action='{{ url('index/update') }}'>
        @csrf
        @method('PUT')

        <div class="container">
            <div class="form-group mt-2">
                <label for="">File</label>
                <input type="File" name="image" id="" class="form-control" placeholder=""
                    aria-describedby="helpId">
                <small id="helpId" class="text-muted">Help text</small>
            </div>
            <button class="btn btn-primary">Upload</button>
        </div>

    </form>

</body>

</html>
