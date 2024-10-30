@extends('layouts.templatelara')

@section('contenu')

@section('css')
@endsection

<!-- content @s -->
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    
                                </div><!-- .nk-block-head -->
                                <form method="post" action="{{route('auteurs.update', $post->id)}}" class="form-horizontal" id="form" enctype="multipart/form-data">

                                    @csrf

                                    @method('put')

                                    <div class="text-center">
                                        @if($message = Session::get('success'))
                                            <div class="alert alert-success">
                                                <p>{{$message}}</p>
                                            </div>
                                        @endif
                                    </div>

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
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" name="titre" value="{{$post->titre}}" class="form-control" focus required>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- col -->
                                                            </div><!-- .row --><br>
                                                            <div class="row g-3 align-center">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="addDescription">Mini description</label>

                                                                    </div>
                                                                </div><!-- .col -->
                                                                <div class="col-md-12">
                                                                    <div class="form-control-wrap">

                                                                        <input type="text" name="mini_content" value="{{$post->mini_content}}" class="form-control" required>
                                                                        
                                                                    </div>
                                                                </div><!-- col -->
                                                            </div><!-- .row --><br>
                                                            <div class="row g-3 align-center">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="addDescription">Description</label>

                                                                    </div>
                                                                </div><!-- .col -->
                                                                <div class="col-md-12">
                                                                    <div class="form-control-wrap">
                                                                        <textarea class="summernote-basic"  name="content" type="text" required>
                                                                            {!!$post->content!!}
                                                                        </textarea>
                                                                    </div>
                                                                </div><!-- col -->
                                                            </div><!-- .row --><br>

                                                            {{--<div class="row g-3 align-center">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label" >Date</label>

                                                                    </div>
                                                                </div><!-- .col -->
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <div class="form-control-wrap">
                                                                            <input type="date" name="date_publi" class="form-control" required>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- col -->
                                                            </div><!-- .row --><br>--}}
                                                            <div class="row g-3 align-center">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="">Slug</label>

                                                                    </div>
                                                                </div><!-- .col -->
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" name="slug" value="{{$post->slug}}" class="form-control" required>
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
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" name="tag" value="{{$post->tag}}" class="form-control" required>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- col -->
                                                            </div><!-- .row --><br>
                                                            <div class="row g-3 align-center">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="">Categories</label>

                                                                    </div>
                                                                </div><!-- .col -->
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <div class="form-control-wrap">
                                                                            <select class="form-select js-select2" multiple="multiple" name="categorie_id" required>

                                                                                @foreach($categorie as $cates)
                                                                                @if($cates->id == $post->categorie_id)
                                                                                    <option value="{{$cates->id}}" selected>{{$cates->name}}</option>
                                                                                @else
                                                                                    <option value="{{$cates->id}}">{{$cates->name}}</option>
                                                                                @endif
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- col -->
                                                            </div><!-- .row --><br>

                                                            <div class="row g-3 align-center">
                                                                <input type="text" hidden name="user_id" value="{{Auth::user()->id}}">
                                                                @if(Auth::user()->utype === 'ADM')
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="">Auteurs</label>

                                                                        </div>
                                                                    </div><!-- .col -->
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <div class="form-control-wrap">
                                                                                
                                                                                <select class="form-select js-select2" multiple="multiple" name="user_id" required>

                                                                                    @foreach($user as $users)
                                                                                    @if($users->id == $post->user_id)
                                                                                        <option value="{{$users->id}}" selected>{{$users->name}}</option>
                                                                                    @else
                                                                                        <option value="{{$users->id}}">{{$users->name}}</option>
                                                                                    @endif
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- col -->
                                                                @endif
                                                            </div><!-- .row --><br>
                                                            <div class="row g-3 align-center">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="">Audio</label>

                                                                    </div>
                                                                </div><!-- .col -->
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <div class="form-control-wrap">
                                                                            <input type="file" name="audio" value="{{$post->audio}}" class="form-control">
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
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <div class="form-control-wrap">
                                                                            <input type="file" name="video" value="{{$post->video}}" class="form-control">
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
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <div class="form-control-wrap">
                                                                            <input type="file" name="image" value="{{$post->image}}" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div><!-- col -->
                                                            </div><!-- .row -->
                                                            <div class="row g-3">
                                                                <div class="col-12">
                                                                    <div class="form-group mt-2 justify-content-between">
                                                                        <button type="submit" class="btn btn-primary">Modifier</button>
                                                                        <a href="{{route('auteur.post')}}" class="btn btn-secondary">Retour</a>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                    </div><!-- .card-inner -->
                                                </div><!-- .card -->
                                            </div><!-- .col -->
                                        </div>
                                    </div><!-- .nk-block -->
                                </form>
                            </div>
                        </div>
                    </div>
</div>
<!-- content @e -->

@section('js')
@endsection

@endsection

