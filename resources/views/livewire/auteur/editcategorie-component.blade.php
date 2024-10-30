<!-- content @s -->
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Modification de categories</h3>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs flex-row-reverse">
                                        
                                        <div class="col-xxl-5">
                                            <div class="card card-bordered h-100">
                                                @if(Session::has('success_message'))
                                                <div class="alert alert-success">
                                                    <strong>Success</strong> {{Session::get('success_message')}}
                                                </div>
                                                @endif
                                                <div class="card-inner">
                                                    <form wire:submit="updateCategorie">
                                                        @csrf
                                                        
                                                        <div class="row g-3 align-center">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="name">Name</label>
                                                                    
                                                                </div>
                                                            </div><!-- .col -->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control" id="name" required placeholder="Name" wire:model="name">
                                                                    </div>
                                                                </div>
                                                            </div><!-- col -->
                                                        </div><!-- .row --><br>
                                                        {{--<div class="row g-3 align-center">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Slug</label>
                                                                    
                                                                </div>
                                                            </div><!-- .col -->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control" id="slug" required placeholder="Slug" wire:model="slug" >
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
                                                                    <textarea class="form-control form-control-sm no-resize" id="addDescription" placeholder="Write your description" wire:model="content"></textarea>
                                                                </div>
                                                            </div><!-- col -->
                                                        </div><!-- .row -->--}}
                                                        <div class="row g-3">
                                                            <div class="col-12">
                                                                <div class="form-group mt-2">
                                                                    <a href="{{route('auteur.cate')}}"><button type="submit" class="btn btn-lg btn-primary">Modifier</button></a>
                                                                    <a href="{{route('auteur.cate')}}" class="btn btn-lg btn-primary">Retour</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form><!-- form -->
                                                </div><!-- .card-inner -->
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                    </div>
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
</div>
    <!-- content @e -->


