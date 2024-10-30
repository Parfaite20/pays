@if(Auth::user()->utype === 'ADM')
<!-- content @s -->
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-md mx-auto">
                                <div class="nk-content-body">
                                    <div class="nk-block-head nk-block-head-sm">
                                        <div class="nk-block-between">
                                            <div class="nk-block-head-content">
                                                <h3 class="nk-block-title page-title">Posts </h3>

                                            </div><!-- .nk-block-head-content -->
                                            <div class="nk-block-head-content">
                                                <a href="{{route('auteurs.create')}}" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                                <a href="{{route('auteurs.create')}}" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Post</span></a>
                                            </div><!-- .nk-block-head-content -->
                                        </div><!-- .nk-block-between -->
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-block nk-block-lg">
                                        <div class="card card-bordered card-preview">
                                        
                                            <div class="card-inner">
                                                <table class="datatable-init-export nowrap table" data-export-title="Export">
                                                    <thead>
                                                        <tr>
                                                            <th>N°</th>
                                                            <th>Auteur</th>
                                                            <th>Titre</th>
                                                            <th>Categories</th>
                                                            <th>Tags</th>
                                                            <th>Status</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($post as $posts)
                                                            <tr>
                                                                <td>{{$loop->index + 1}}</td>
                                                                <td>{{$posts->users->name}}</td>
                                                                <td>{{$posts->titre}}</td>
                                                                <td>{{$posts->categories->name}}</td>
                                                                <td>{{$posts->tag}}</td>
                                                                <td @if($posts->publie==0){ class="text-warning"} @else{ class="text-success"} @endif>{{$posts->publie ? 'Publié' : 'En attente'}}</td>
                                                                <td>
                                                                    <li>
                                                                        <div class="drodown">
                                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                                <ul class="link-list-opt no-bdr">
                                                                                    <li><a href="{{route('auteurs.show', $posts->slug)}}"><em class="icon ni ni-eye"></em><span>Voir</span></a></li>
                                                                                    @if(!$posts->publie)
                                                                                        <li><button wire:click="publiched({{$posts->id}})"><em class="icon ni ni-eye"></em><span>Publié</span></button></li>
                                                                                    @endif
                                                                                        <li><a href="{{route('auteurs.edit', $posts->slug)}}"><em class="icon ni ni-edit-fill"></em><span>Edit</span></a></li>
                                                                                    <li><form action="{{route('auteurs.destroy', $posts->slug) }}" method="post"
                                                                                        onsubmit="return confirm('Voulez-vous vraiment supprimer cet article ?');">

                                                                                        @csrf
                                                                                        @method('delete')
                                                                                        <button type="submit">
                                                                                            <em class="icon ni ni-trash-fill"></em><span>Trash</span>
                                                                                        </button>
                                                                                    </form></li>

                                                                                  
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><!-- .card-preview -->
                                    </div> <!-- nk-block -->
                                    
                                </div><!-- .components-preview -->
                            </div>
                        </div>
                    </div>
</div>
<!-- content @e -->
@else
<!-- content @s -->
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                        <div class="nk-block-between">
                                            <div class="nk-block-head-content">
                                                <h3 class="nk-block-title page-title">Posts </h3>

                                            </div><!-- .nk-block-head-content -->
                                            <div class="nk-block-head-content">
                                                <a href="{{route('auteurs.create')}}" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                                <a href="{{route('auteurs.create')}}" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Post</span></a>
                                            </div><!-- .nk-block-head-content -->
                                        </div><!-- .nk-block-between -->
                                    </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs">
                                        @foreach($posts as $post)
                                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                                            <div class="card card-bordered h-100">
                                                <div class="card-inner">
                                                    <div class="project">
                                                        <div class="project-head">
                                                            <a href="{{route('auteurs.show', $post->id)}}" class="project-title">
                                                                <div class=""><span><img src="{{asset('medias')}}/{{$post->image}}" height="90" width="90"></span>&emsp;</div>
                                                                <div class="project-info">
                                                                    <h6 class="title">{{$post->titre}}</h6>
                                                                    <!--<span class="sub-text">Softnio</span>-->
                                                                </div>
                                                            </a>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 me-n1" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="{{route('auteurs.show', $post->id)}}"><em class="icon ni ni-eye"></em><span>Voir</span></a></li>
                                                                        <li><a href="{{route('auteurs.edit', $post->id)}}"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                        <li>

                                                                            <form action="{{route('auteurs.destroy', $post->id) }}" method="post"
                                                                                onsubmit="return confirm('Voulez-vous vraiment supprimer cet article ?');">

                                                                                @csrf
                                                                                @method('delete')
                                                                                <button type="submit">
                                                                                    <em class="icon ni ni-trash-fill"></em><span>Trash</span>
                                                                                </button>
                                                                            </form>



                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="project-details">
                                                            {{$post->mini_content}}
                                                        </div>
                                                        <div class="project-progress">
                                                            <div class="project-progress-details">
                                                                <div class="project-progress-task"><span>{{$post->created_at}}</span></div>
                                                                <div class="project-progress-percent"></div>
                                                            </div>
                                                            <div class="">
                                                                
                                                                <label for="">Status:</label>
                                                                <span @if($post->publie==0){ class="text-warning"} @else{ class="text-success"} @endif> {{$post->publie ? 'Validé' : 'En attente'}}</span>
                                                            </div>
                                                        </div>
                                                        {{--<div class="project-meta">
                                                            <ul class="project-users g-1">
                                                                <li>
                                                                    <div class="user-avatar sm bg-primary"><span>A</span></div>
                                                                </li>
                                                                <li>
                                                                    <div class="user-avatar sm bg-blue"><img src="./images/avatar/b-sm.jpg" alt=""></div>
                                                                </li>
                                                                <li>
                                                                    <div class="user-avatar bg-light sm"><span>+12</span></div>
                                                                </li>
                                                            </ul>
                                                            <span class="badge badge-dim bg-warning"><em class="icon ni ni-clock"></em><span>5 Days Left</span></span>
                                                        </div>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    {{$posts->links()}}
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
</div>
<!-- content @e -->
@endif
