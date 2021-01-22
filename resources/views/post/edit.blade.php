<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<style>
    body{
        padding:100 px;
    }
</style>
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h5>Update Post</h5>
            <form action="{{url('posts/'.$post->id)}}" method="POST">
            <!-- {{csrf_field()}} -->
            @csrf
            @method('PUT')

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" value="{{ $post->title ?? old('title') }}" placeholder="Enter post title" class="form-control @error('title') is-invalid @enderror " id="title">
                    @error('title')
                        <div class="is-invalidat">{{ $message }}</div>
                    @enderror
                </div>
           
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror" placeholder="Enter post content" rows="3">{{ $post->content ?? old('content') }}</textarea>
                    @error('content')
                        <div class="is-invalidat">{{ $message }}</div>
                    @enderror
                </div>
            
                <button class="btn btn-primary" type="submit">Update</button>
            </form>
        </div>
        <div class="col-md-3"></div>
        
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>