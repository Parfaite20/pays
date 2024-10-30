<br><center><p><img src="{{asset('medias')}}/{{$post->image}}" alt="" width="600" height="600"></p></center><br>
<div id="content" class="site-content">
		<div class="wrapper">
			<center><h1><strong>{{$post->titre}}</strong></h1></center>
			<div class="entry-content">
				
				<p>{{$post->mini_content}}</p>
				<article>
					{!!$post->content!!}
				</article><br><br>

				<h2>Les commentaires</h2>
				
				<div class="card card-outline-secondary my-12">
					
					<div class="card-body">
					{{--@foreach($comments as $comment)
						<div class="media mb-3">
							
							<div class="mr-2"> 
								<img class="rounded-circle border p-1" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2264%22%20height%3D%2264%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2064%2064%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160c142c97c%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160c142c97c%22%3E%3Crect%20width%3D%2264%22%20height%3D%2264%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2213.5546875%22%20y%3D%2236.5%22%3E64x64%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Generic placeholder image">
							</div>
							<div class="media-body">
								<p>{{$comment->commente}}</p>
								<small class="text-muted">{{$comment->name}} le {{$comment->created_at}}</small>
							</div>
							
						</div>
						<hr>
						@endforeach--}}
					</div>
				</div><br><br>
				
				
				<div id="comments">
				<h2>Commenter l'article</h2>
					<div id="respond" class="comment-respond">
						<h3 id="reply-title" class="comment-reply-title">
							@if(Session::has('message'))
								<div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
							@endif
						</h3>
						<form action="{{ route('comm.store', $post_id) }}" method="post" id="commentform" class="comment-form">
							@csrf
							<p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
							<p class="comment-form-comment"><label for="comment">Comment <span class="required">*</span></label><textarea id="comment" name="commente" cols="45" rows="6" maxlength="65525" required="required"></textarea></p>
							<p class="comment-form-author"><label for="author">Name <span class="required">*</span></label> <input id="author" name="name" type="text" value="" size="30" maxlength="245" required="required"></p>
							<p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input id="email" name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes" required="required"></p>
							<p class="form-submit"><input name="submit" type="submit" id="submit" value="Post comment"></p>
						</form>
					</div>
				</div>
			</div>
		</div>
</div>
