   <!-- Start Slider -->
   	<div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="{{asset('assets/images/banner-01.jpg')}}" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Bienvenue sur <br> Votre site de blog</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="{{asset('assets/images/banner-02.jpg')}}" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Bienvenue sur <br> Votre site de blog</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="{{asset('assets/images/banner-03.jpg')}}" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Bienvenue sur <br> Votre site de blog</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
				@foreach($po as $pos)
				@if($pos->publie == 1)
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="shop-cat-box">
							
							<img class="img-fluid" src="{{asset('medias')}}/{{$pos->image}}" alt="" />
						
						<a class="btn hvr-hover" href="{{route('detail', ['post_id'=>$pos->slug])}}">{{$pos->titre}}</a>
					</div>
                </div>
				@endif
			@endforeach
            </div>
            {{$po->links()}}
        </div>
    </div>
    <!-- End Categories -->
	
	<div class="box-add-products">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="offer-box-products">
						<img class="img-fluid" src="{{asset('assets/images/add-img-01.jpg')}}" alt="" />
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="offer-box-products">
						<img class="img-fluid" src="{{asset('assets/images/add-img-02.jpg')}}" alt="" />
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- Start Blog  -->
    <div class="latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Tous les articles</h1>
                    </div>
                </div>
            </div>
            <div class="row">
			@foreach($post as $posts)
			@if($posts->publie == 1)
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
							<a href="{{route('detail', ['post_id'=>$posts->slug])}}">
								<img class="img-fluid" src="{{asset('medias')}}/{{$posts->image}}" alt="" />
							</a>
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
								<a href="{{route('detail', ['post_id'=>$posts->slug])}}">
									<h3>{{$posts->titre}}</h3>
									<p>{{$posts->mini_content}}</p>
								</a>
                            </div>
                        </div>
                    </div>
                </div>
			@endif
			@endforeach
            
            </div>
            {{$post->links()}}
        </div>
    </div>
    <!-- End Blog  -->


    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
	<div class="main-instagram owl-carousel owl-theme">
			@foreach($po as $pos)
				@if($pos->publie == 1)
					<div class="item">
						<div class="ins-inner-box">
							<img src="{{asset('medias')}}/{{$pos->image}}" alt="" />
							<div class="hov-in">
								<a href="{{route('detail', ['post_id'=>$pos->slug])}}"><i class="fas fa-eye"></i></a>
							</div>
						</div>
					</div>
            	@endif
			@endforeach
		</div>
    </div>
    <!-- End Instagram Feed  -->