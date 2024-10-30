@extends('layouts.templatelara')

@section('contenu')

@section('css')
@endsection

@if(Auth::user()->utype === 'ADM')

<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-md mx-auto">
                                <div class="nk-content-body">
                                    <div class="nk-block-head nk-block-head-sm">
                                        <div class="nk-block-between">
                                            <div class="nk-block-head-content">
                                                <h3 class="nk-block-title page-title">Commentaires </h3>

                                            </div><!-- .nk-block-head-content -->
                                            
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
                                                            <th>Nom</th>
                                                            <th>Email</th>
                                                            <th>Commentaires</th>
                                                            <th>Posts</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($comm as $comms)
                                                            <tr>
                                                                <td>{{$loop->index + 1}}</td>
                                                                <td>{{$comms->name}}</td>
                                                                <td>{{$comms->email}}</td>
                                                                <td>{{$comms->commente}}</td>
                                                                <td>{{$comms->posts->titre}}</td>
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

@else

<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-md mx-auto">
                                <div class="nk-content-body">
                                    <div class="nk-block-head nk-block-head-sm">
                                        <div class="nk-block-between">
                                            <div class="nk-block-head-content">
                                                <h3 class="nk-block-title page-title">Commentaires </h3>

                                            </div><!-- .nk-block-head-content -->
                                            
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
                                                            <th>Nom</th>
                                                            <th>Email</th>
                                                            <th>Commentaires</th>
                                                            <th>Posts</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($comms as $comm)
                                                            <tr>
                                                                <td>{{$loop->index + 1}}</td>
                                                                <td>{{$comm->name}}</td>
                                                                <td>{{$comm->email}}</td>
                                                                <td>{{$comm->commente}}</td>
                                                                <td>{{$comm->posts->titre}}</td>
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

@endif

@section('js')
@endsection

@endsection