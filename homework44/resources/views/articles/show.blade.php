@extends('layout')
@section('content')

<div id="extra">
    <div class="container">
        <div class="row no-collapse-1">
            
        <section class="4u"> <a href="#" class="image featured"><img src="images/pic01.jpg" alt=""></a>
                <div class="box">
                    <h4>{{$article->title}}</h4>
                    <p>{{$article->excerpt}}</p>
                    <p>
                        {{$article->body}}
                    </p>
                    
            </section>
         
            
        </div>
    </div>
</div>




@endsection