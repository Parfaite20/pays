<!-- content @s -->
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Ajout de post</h3>
                                        </div><!-- .nk-block-head-content -->
                                        <a href="{{route('auteur.post')}}" class="btn btn-primary">Posts</a>
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="storePost">

                                    @csrf
                                    @if($currentStep == 1)
                                    <div class="nk-block">
                                        <div class="row g-gs flex-row-reverse">

                                            <div class="col-xxl-5">
                                                <div class="card card-bordered h-100">
                                                
                                                    <div class="card-inner">
                                                        
                                                            <div class="row g-3 align-center">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="name">Title</label>

                                                                    </div>
                                                                </div><!-- .col -->
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" wire:model.defer="titre" focus>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- col -->
                                                            </div><!-- .row --><br>

                                                            <div class="row g-3 align-center">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="addDescription">Description</label>

                                                                    </div>
                                                                </div><!-- .col -->
                                                                <div class="col-md-6">
                                                                    <div class="form-control-wrap">
                                                                        <textarea class="summernote-lg summernote-minimal" wire:model.defer="content">
                                                                                <p>Hello World!</p>
                                                                            </textarea>
                                                                    </div>
                                                                </div><!-- col -->
                                                            </div><!-- .row --><br>
                                                            
                                                            <div class="row g-3 align-center">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label" >Date</label>

                                                                    </div>
                                                                </div><!-- .col -->
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <div class="form-control-wrap">
                                                                            <input type="date"  class="form-control" wire:model.defer="date_publi">
                                                                        </div>
                                                                    </div>
                                                                </div><!-- col -->
                                                            </div><!-- .row --><br>
                                                            <div class="row g-3 align-center">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="">Slug</label>

                                                                    </div>
                                                                </div><!-- .col -->
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <div class="form-control-wrap">
                                                                            <input type="text"  class="form-control" wire:model.defer="slug">
                                                                        </div>
                                                                    </div>
                                                                </div><!-- col -->
                                                            </div><!-- .row --><br>
                                                            <div class="row g-3 align-center">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="">Tag</label>

                                                                    </div>
                                                                </div><!-- .col -->
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" wire:model.defer="tag" >
                                                                        </div>
                                                                    </div>
                                                                </div><!-- col -->
                                                            </div><!-- .row --><br>
                                                            <div class="row g-3 align-center">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="">Categories</label>

                                                                    </div>
                                                                </div><!-- .col -->
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <div class="form-control-wrap">
                                                                            <select class="form-select js-select2" multiple="multiple" wire:model.defer="categorie_id">
                                                                                
                                                                                    @foreach($categorie as $cates)
                                                                                        <option value="{{$cates->id}}">{{$cates->name}}</option>
                                                                                    @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- col -->
                                                            </div><!-- .row --><br>
                                                            
                                                            <div class="row g-3 align-center">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="">Auteurs</label>

                                                                    </div>
                                                                </div><!-- .col -->
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <div class="form-control-wrap">
                                                                            <select class="form-select js-select2" multiple="multiple"  wire:model.defer="user_id">
                                                                                
                                                                                    @foreach($user as $users)
                                                                                        <option value="{{$users->id}}">{{$users->name}}</option>
                                                                                    @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- col -->
                                                            </div><!-- .row --><br>
                                                            {{--<div class="row g-3 align-center">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="">Audio</label>

                                                                    </div>
                                                                </div><!-- .col -->
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <div class="form-control-wrap">
                                                                            <input type="file" class="form-control" wire:model.defer="audio">
                                                                        </div>
                                                                    </div>
                                                                </div><!-- col -->
                                                            </div><!-- .row --><br>
                                                            <div class="row g-3 align-center">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="">Video</label>

                                                                    </div>
                                                                </div><!-- .col -->
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <div class="form-control-wrap">
                                                                            <input type="file" class="form-control" wire:model.defer="video">
                                                                        </div>
                                                                    </div>
                                                                </div><!-- col -->
                                                            </div><!-- .row --><br>
                                                            <div class="row g-3 align-center">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="">Image</label>

                                                                    </div>
                                                                </div><!-- .col -->
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <div class="form-control-wrap">
                                                                            <input type="file" class="form-control" wire:model.defer="image">
                                                                        </div>
                                                                    </div>
                                                                </div><!-- col -->
                                                            </div><!-- .row -->--}}
                                                           
                                                        
                                                    </div><!-- .card-inner -->
                                                </div><!-- .card -->
                                            </div><!-- .col -->
                                        </div>
                                    </div><!-- .nk-block -->
                                    @endif
                                    @if($currentStep == 2)
                                    <div class="nk-block">
                                        <div class="row g-gs flex-row-reverse">

                                            <div class="col-xxl-5">
                                                <div class="card card-bordered h-100">
                        
                                                    <div class="card-inner">
                                            
                                                            
                                                            
                                                            <div class="row g-3 align-center">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="">Audio</label>

                                                                    </div>
                                                                </div><!-- .col -->
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <div class="form-control-wrap">
                                                                            <input type="file" class="form-control" wire:model.defer="audio">
                                                                        </div>
                                                                    </div>
                                                                </div><!-- col -->
                                                            </div><!-- .row --><br>
                                                            <div class="row g-3 align-center">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="">Video</label>

                                                                    </div>
                                                                </div><!-- .col -->
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <div class="form-control-wrap">
                                                                            <input type="file" class="form-control" wire:model.defer="video">
                                                                        </div>
                                                                    </div>
                                                                </div><!-- col -->
                                                            </div><!-- .row --><br>
                                                            <div class="row g-3 align-center">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="">Image</label>

                                                                    </div>
                                                                </div><!-- .col -->
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <div class="form-control-wrap">
                                                                            <input type="file" class="form-control" wire:model.defer="image">
                                                                        </div>
                                                                    </div>
                                                                </div><!-- col -->
                                                            </div><!-- .row -->
                                                            
                                                        
                                                    </div><!-- .card-inner -->
                                                </div><!-- .card -->
                                            </div><!-- .col -->
                                        </div>
                                    </div><!-- .nk-block -->
                                    @endif
                 
                                    <div class="row g-3">
                                                                <div class="col-12">
                                                                    <div class="form-group mt-2 justify-content-between">
                                                                        @if(Auth::user()->utype === 'ADM')
                                                                                    <li>
                                                                                        <button type="submit" class="btn btn-primary">Publier</button>
                                                                                    </li>
                                                                                @else
                                                                                @if($currentStep == 1)
                                                                                    <button type="button" class="btn btn-success" wire:click.prefetch="suivantStep()">Suivant</button>
                                                                                @endif
                                                                                @if($currentStep == 2)
                                                                                    <button type="button" class="btn btn-secondary" wire:click.prefetch="retourStep()">Retour</button>
                                                                                    <button type="submit" class="btn btn-primary">Soumettre</button>
                                                                                @endif          
                                                                                    
                                                                            @endif

                                                                    </div>
                                                                </div>
                                                            </div>
                                </form>
                            </div>
                        </div>
                    </div>
</div>
<!-- content @e -->


