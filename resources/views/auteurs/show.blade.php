@extends('layouts.templatelara')

@section('contenu')

@section('css')
@endsection

<!-- content @s -->
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="content-page wide-md m-auto">
                    <div class="nk-block-head nk-block-head-lg wide-xs mx-auto">
                        <div class="nk-block-head-content text-center">
                            <h2 class="nk-block-title fw-normal">{{$post->titre}}</h2>
                            <div class="nk-block-des">
                                {{$post->mini_content}}
                            </div>
                        </div>
                        <div class="nk-block-between">
                                        
                                        <a href="{{route('auteur.post')}}" class="btn btn-primary">Posts</a>
                            </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="card card-bordered">
                            <div class="card-inner card-inner-xl">
                                <article class="entry">

                                    {!!$post->content!!}


                                </article>
                            </div>
                        </div><!-- .card -->
                        {{--<div class="card card-bordered">
                            <div class="card-inner">
                                <div class="card-head">
                                    <h5 class="card-title">Leave a Reply</h5>
                                </div>
                                <form action="#">
                                    <div class="form-group">
                                        <label class="form-label">Comment</label>
                                        <div class="form-control-wrap">
                                            <div class="summernote-basic">
                                                <p>Hello World!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="cf-full-name">Name</label>
                                        <input type="text" class="form-control" id="cf-full-name">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="cf-email-address">Email</label>
                                        <input type="text" class="form-control" id="cf-email-address">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Post Comment</button>
                                    </div>
                                </form>
                            </div>
                        </div>--}}
                    </div><!-- .nk-block -->
                </div><!-- .content-page -->
            </div>
        </div>
    </div>
</div>
<!-- content @e -->

@section('js')
@endsection

@endsection
