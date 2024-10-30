@extends('layouts.templatelara')

@section('contenu')

@section('css')

<style>
      #embed {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Fond semi-transparent (facultatif) */
        z-index: 9999; /* Placez-le au-dessus des autres éléments */
    }

    /* Styles spécifiques pour les appareils mobiles */

    </style>

@endsection

@if (Auth::user()->utype === 'ADM')

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
                                                <h3 class="nk-block-title page-title">Abonnements </h3>

                                            </div><!-- .nk-block-head-content -->
                                            {{--<div class="nk-block-head-content">
                                                <a href="{{route('auteurs.create')}}" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                                <a href="{{route('auteurs.create')}}" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Post</span></a>
                                            </div><!-- .nk-block-head-content -->--}}
                                        </div><!-- .nk-block-between -->
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-block nk-block-lg">
                                        <div class="card card-bordered card-preview">

                                            <div class="card-inner">
                                                <table class="datatable-init-export nowrap table" data-export-title="Export">
                                                    <thead>
                                                        <tr>
                                                            <th>N°</th>
                                                            <th>User</th>
                                                            <th>Plan</th>
                                                            <th>Prix en $</th>
                                                            <th>Durée en mois</th>
                                                            <th>Debut</th>
                                                            <th>Fin</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($sous as $sou)
                                                            <tr>
                                                                <td>{{$loop->index + 1}}</td>
                                                                <td>{{$sou->users->name}}</td>
                                                                <td>{{$sou->plan_name}}</td>
                                                                <td>{{$sou->price}}</td>
                                                                <td>{{$sou->duree}}</td>
                                                                <td>{{$sou->start_date}}</td>
                                                                <td>{{$sou->end_date}}</td>
                                                                <td @if($sou->status=='actif'){ class="text-success warning"} @else @if($sou->status=='expiré'){ class="text-info"} @else{ class="text-danger"} @endif @endif>{{$sou->status}}</td>
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
                                <div class="components-preview wide-md mx-auto">
                                <div class="nk-content-body">
                                    <div class="nk-block-head nk-block-head-sm">
                                        <div class="nk-block-between">
                                            <div class="nk-block-head-content">
                                                <h3 class="nk-block-title page-title">Abonnements </h3>

                                            </div><!-- .nk-block-head-content -->
                                            {{--<div class="nk-block-head-content">
                                                <a href="{{route('auteurs.create')}}" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                                <a href="{{route('auteurs.create')}}" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Post</span></a>
                                            </div><!-- .nk-block-head-content -->--}}
                                        </div><!-- .nk-block-between -->
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-block nk-block-lg">

                                                {{--<p>Pour devenir un auteur et pouvoir publier des articles, il faut
                                                    <button data-bs-toggle="modal" data-bs-target="#plan" class="btn btn-primary">S'abonner</button>
                                                </p>--}}

                                                <p>Pour devenir un auteur et pouvoir publier des articles, il faut <button id="feda" class="btn btn-primary">S'abonner</button></p>
                                                    <div id="embed"  style=" display: none"></div>

                                                    <input style="display:none" id="na" type="text" value="{{ Auth::user()->name}}" >
                                                    <input style="display:none" id="em" type="text" value="{{ Auth::user()->email}}" >--}}

                                        <div class="card card-bordered card-preview">

                                            <div class="card-inner">
                                                <table class="datatable-init-export nowrap table" data-export-title="Export">
                                                    <thead>
                                                        <tr>
                                                            <th>N°</th>
                                                            <th>Plan</th>
                                                            <th>Prix en $</th>
                                                            <th>Durée en mois</th>
                                                            <th>Debut</th>
                                                            <th>Fin</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($sou as $sous)
                                                            <tr>
                                                                <td>{{$loop->index + 1}}</td>
                                                                <td>{{$sous->plan_name}}</td>
                                                                <td>{{$sous->price}}</td>
                                                                <td>{{$sous->duree}}</td>
                                                                <td>{{$sous->start_date}}</td>
                                                                <td>{{$sous->end_date}}</td>
                                                                <td @if($sous->status=='actif'){ class="text-success warning"} @else @if($sous->status=='expiré'){ class="text-info"} @else{ class="text-danger"} @endif @endif>{{$sous->status}}</td>
                                                                <td>

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

@endif

@section('js')

<!-- fedapay-->
<script>


       $(document).ready(function() {


        $e=$('#na').val();
        $f=$('#em').val();
        console.log($f);

      $(document).on('click', '#feda', function(e) {
        e.preventDefault();


        $('#embed').fadeIn();


    FedaPay.init({
        public_key: 'pk_sandbox_8eOtRxM8TCwQ2kgaZ79wmggK',
        transaction: {
            amount: 5000,  // Remplacez par montantClique si nécessaire
            description: 'Recharge compte ' ,
            custom_metadata: {
                        //id_compte: id_compte,
                    // type_compte: type_compte,
                    //  caisse: caisse,
                    //  amount: montantClique,
                    //  rbet_id: userId
        }},
    customer: {
        email: $f,
        lastname: $e,
        firstname: '',
    },
    container: '#embed',

    onComplete: function ({ reason, transaction }) {


        if (reason === FedaPay.CHECKOUT_COMPLETED) {
            console.log('Paiement complet');
            console.log('Transaction :', transaction);
            $('#embed').fadeOut();


                //window.location.href = 'https://rechargebet.com/success?transaction=' + encodeURIComponent(JSON.stringify(transaction));



        } else if (reason === FedaPay.DIALOG_DISMISSED) {
            $('#embed').fadeOut();
            console.log('Boîte de dialogue fermée par l\'utilisateur');
        }
    }


    });

       })
    })
</script>

@endsection


<!-- plan-->
 <div class="modal fade"  role="dialog" id="plan">
        <div class="modal-dialog modal-lg" >
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Veuillez choisir votre plan</h5>
                    <div class="row">
                        <div class="col-md-6 col-lg-5 col-xxl-3">
                            <div class="card card-bordered h-100">
                                <div class="card-inner">
                                    <div class="card-title-group">
                                        <div class="card-title card-title-sm">
                                            <h6 class="title">Traffic Channel</h6>
                                        </div>
                                        <div class="card-tools">
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle dropdown-indicator btn btn-sm btn-outline-light btn-white" data-bs-toggle="dropdown">30 Days</a>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><span>7 Days</span></a></li>
                                                        <li><a href="#"><span>15 Days</span></a></li>
                                                        <li><a href="#"><span>30 Days</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="traffic-channel">
                                        <div class="traffic-channel-doughnut-ck">
                                            <canvas class="analytics-doughnut" id="TrafficChannelDoughnutData"></canvas>
                                        </div>
                                        <div class="traffic-channel-group g-2">
                                            <div class="traffic-channel-data">
                                                <div class="title"><span class="dot dot-lg sq" data-bg="#9cabff"></span><span>Organic Search</span></div>
                                                <div class="amount">4,305 <small>58.63%</small></div>
                                            </div>
                                            <div class="traffic-channel-data">
                                                <div class="title"><span class="dot dot-lg sq" data-bg="#b8acff"></span><span>Social Media</span></div>
                                                <div class="amount">859 <small>23.94%</small></div>
                                            </div>
                                            <div class="traffic-channel-data">
                                                <div class="title"><span class="dot dot-lg sq" data-bg="#ffa9ce"></span><span>Referrals</span></div>
                                                <div class="amount">482 <small>12.94%</small></div>
                                            </div>
                                            <div class="traffic-channel-data">
                                                <div class="title"><span class="dot dot-lg sq" data-bg="#f9db7b"></span><span>Others</span></div>
                                                <div class="amount">138 <small>4.49%</small></div>
                                            </div>
                                        </div><!-- .traffic-channel-group -->
                                    </div><!-- .traffic-channel -->
                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->
                    </div>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
</div><!-- .modal -->

@endsection
