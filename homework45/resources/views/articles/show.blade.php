
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

<div class="bg-dark ">
    <div class="container p-5">
        <div class="card text-center w-50 m-auto">
            <div class="card-header">
                <img src="../images/pic01.jpg" alt="">
            </div>
            <div class="card-body">
              <h5 class="card-title">{{$article->title}}</h5>
              <p class="card-text">{{$article->excerpt}}</p>
              <p class="card-text">{{$article->body}}</p>
        
            </div>
            <div class="card-footer ">
                <a href="{{$article->id}}/edit" class="btn btn-primary" type='submit'>Edit</a>
            </div>
          </div>
    </div>
</div>
</body>





