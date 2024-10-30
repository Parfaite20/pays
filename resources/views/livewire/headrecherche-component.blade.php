<li class="menu-item-search">
						<a href="#searchform" title="Toggle search"><em class="mdi mdi-magnify"></em><em class="mdi mdi-close"></em></a>
						<form class="searchform" method="get" action="{{route('post.recherche')}}" role="search">
							<label class="screen-reader-text">Search for:</label>
							<!--<input type="search" value="{{$post_cat}}" name="post_cat" placeholder="Search&hellip;">-->
                            <input type="search" value="{{$recherche}}" name="recherche" placeholder="Search&hellip;">
							<button type="submit"><em class="mdi mdi-magnify"></em><span class="screen-reader-text">Search</span></button>
						</form>
</li>