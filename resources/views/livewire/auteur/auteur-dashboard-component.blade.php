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
                                                            <th>Titre</th>
                                                            <th>Categories</th>
                                                            <th>Tags</th>
                                                            <th>Status</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($posts as $post)
                                                            <tr>
                                                                <td>{{$loop->index + 1}}</td>
                                                                <td>{{$post->titre}}</td>
                                                                <td>{{$post->categories->name}}</td>
                                                                <td>{{$post->tag}}</td>
                                                                <td @if($post->publie==0){ class="text-warning"} @else{ class="text-success"} @endif>{{$post->publie ? 'Publié' : 'En attente'}}</td>
                                                                <td>
                                                                    <li>
                                                                        <div class="drodown">
                                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                                <ul class="link-list-opt no-bdr">
                                                                                    <li><a href="{{route('auteurs.show', $post->id)}}"><em class="icon ni ni-eye"></em><span>Voir</span></a></li>
                                                                                    <li><a href="{{route('auteurs.edit', $post->id)}}"><em class="icon ni ni-edit-fill"></em><span>Edit</span></a></li>
                                                                                    <li><form action="{{route('auteurs.destroy', $post->id) }}" method="post"
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


