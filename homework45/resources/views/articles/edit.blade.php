@include('../head')

<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link btn btn-dark text-light" href="/">Back to Articles<span class="sr-only">(current)</span></a>
            </li>                                    
        </ul>
                                
    </div>
</nav>
    


<div class="bg-dark">
    <div class="w-50 m-auto p-5">
        <h2 class="text-light mb-3">Create New Article</h2>
        <form action="articles/{{$article->id}}" class="form-group" method="POST">
            @csrf 
            @method('PUT')      

            <label for="" class="text-light">Update Title </label>
            <input type="text" class="w-100 form-control @error('title') bg-danger @enderror " name="title" value="{{$article->title}}">
           
            @error('title')
            <p class="text-danger"> {{ $errors->first('title') }} </p>
            @enderror

            <label for="" class="text-light">Update Description </label>
            <input type="text" class="w-100 form-control @error('excerpt') bg-danger @enderror " name="excerpt" value="{{$article->excerpt}}">
           
            @error('excerpt')
            <p class="text-danger"> {{ $errors->first('excerpt') }} </p>
            @enderror

            <label for="" class="text-light">Update Content </label>
            <textarea name="body" id="" cols="30" rows="5"  class="w-100 form-control @error('body') bg-danger @enderror "  value="{{$article->body}}"></textarea>
            
            @error('body')
            <p class="text-danger"> {{ $errors->first('body') }} </p>
            @enderror
            
            <a  class="btn btn-primary col-6 offset-3 mt-2" type="submit">Update</a>
        </form>

    </div>
</div>



</body>