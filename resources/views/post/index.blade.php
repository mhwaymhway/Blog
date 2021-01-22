<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index page</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- fontawasome css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <style>
    body{
        padding:100px;
    }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col_md_3"></div>
        <div class="col_md_6">
        <h5>Post List</h5>
        <a href="{{ url('posts/create')}}">
        <button class="btn btn-primary btn-sm float-right mb-2"><i class="fa fa-plus-circle"></i> Add User</button>
        </a>
        @if(Session('successAlert'))
            <div class="alert alert-success alert-dismissible show fade">
                <strong>{{Session('successAlert')}}</strong>
                <button class="close" data-dismiss="alert">&times;</button>
            </div>
        @endif
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Action</th>
                </tr>
                </thead>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content}}</td>
                    <td>
                        <form action="{{url('posts/'.$post->id)}}" method="post">
                        @csrf @method('DELETE')
                        <a href="{{ route('posts.edit',$post->id) }}">
                        <!-- url('posts/'.$post->id.'/edit') -->
                    <button type="button" class="btn btn-success btn-sm"><i class="fa fa-edit"></i>
                    Edit</button>
                    </a>
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure want to delete?')"><i class="fa fa-trash "></i> Delete</button>
                    
                        </form>
                    </td>
                </tr>
                @endforeach   
        </table>
        {{$posts->links()}}
        </div> 
        <div class="col_md_3"></div>
    </div>
    </div>

<!-- bootstrap js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>  
</body>
</html>