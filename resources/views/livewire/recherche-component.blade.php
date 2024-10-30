
<div id="content" class="site-content">
		<div class="wrapper">
			<div class="entry-content">
				<div class="post-listing style-grid align-content-max">
                    @if($post->count()>0)
					@foreach($post as $posts)                   
						@if($posts->publie == 1)
						<article class="entry entry-episode has-post-thumbnail">
							<div class="entry-media">
								<a href="{{route('detail', ['post_id'=>$posts->id])}}" class="shine-on-hover"><img src="{{asset('medias')}}/{{$posts->image}}" alt="" width="540" height="540"></a>
							</div>
							<header class="entry-header">
								<h2 class="entry-title"><a href="{{route('detail', ['post_id'=>$posts->id])}}" rel="bookmark">{{$posts->titre}}</a></h2>
								<div class="entry-meta">
									<span class="posted-in">
										<span class="screen-reader-text">Posted in:</span> <em class="mdi mdi-folder-outline"></em> <a href="#" rel="category tag">{{$posts->categories->name}}</a>
										<span class="posted-on">
											<span class="screen-reader-text">Posted on</span> <em class="mdi mdi-calendar-blank"></em> <a href="{{route('detail', ['post_id'=>$posts->id])}}" rel="bookmark"><span class="entry-date published">{{$posts->created_at}}</span><span class="updated">{{$posts->updated_at}}</span></a>
										</span>
									</span>
								</div>
							</header>
						</article>
						@endif
					@endforeach
                    @else
                    <p>Aucun resultat</p>
                    @endif
					<div class="pagination">
						{{$post->links()}}
					</div>
				</div>
			</div>
		</div>
	</div>

