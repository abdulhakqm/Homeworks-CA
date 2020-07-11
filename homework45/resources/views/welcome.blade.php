

@extends('layout')
@section('content')
		


				<!-- Extra -->
					<div id="extra">
						<div class="container">
							<div class="row no-collapse-1">
                                @foreach($articles as $article)
                            <section class="4u mb-3"> <a href="articles/{{$article->id}}" class="image featured"><img src="images/pic01.jpg" alt=""></a>
									<div class="box">
                                        <h4>{{$article->title}}</h4>
                                        <p>{{$article->excerpt}}</p>
										<a href="articles/{{$article->id}}" class="button">Read More</a> </div>
                                </section>
                                @endforeach
								
							</div>
						</div>
					</div>

				<!-- Main -->
					<div id="main">
						<div class="container">
							<div class="row"> 
								
								<!-- Content -->
								<div class="6u">
									<section>
										<ul class="style">
											<li class="fa fa-wrench">
												<h3>Integer ultrices</h3>
												<span>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat. Maecenas condimentum enim tincidunt risus accumsan.</span> </li>
											<li class="fa fa-leaf">
												<h3>Aliquam luctus</h3>
												<span>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat. Maecenas condimentum enim tincidunt risus accumsan.</span> </li>
										</ul>
									</section>
								</div>
								<div class="6u">
									<section>
										<ul class="style">
											<li class="fa fa-cogs">
												<h3>Integer ultrices</h3>
												<span>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat. Maecenas condimentum enim tincidunt risus accumsan.</span> </li>
											<li class="fa fa-road">
												<h3>Aliquam luctus</h3>
												<span>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat. Maecenas condimentum enim tincidunt risus accumsan.</span> </li>
										</ul>
									</section>
								</div>
							</div>
						</div>
					</div>

	
    <!-- Copyright -->
    @endsection
		

