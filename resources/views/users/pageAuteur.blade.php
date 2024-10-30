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

<!-- content @s -->
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">

                                <div class="nk-block nk-block-lg">
                                    <div class="card card-bordered">
                                        <div class="card-content">

                                            <div class="card-inner">
                                                <div class="nk-block">

                                                    <p>Pour devenir un auteur et pouvoir publier des articles, il faut <button id="feda">S'abonner</button></p>
                                                    <div id="embed"  style=" display: none"></div>

                                                    <input style="display:none" id="na" type="text" value="{{ Auth::user()->name}}" >
                                                    <input style="display:none" id="em" type="text" value="{{ Auth::user()->email}}" >

                                                    {{--<div class="nk-block-head">
                                                        <div class="nk-block-between d-flex justify-content-between">
                                                            <div class="nk-block-head-content">
                                                                <h4 class="nk-block-title">Informations personnelles</h4>

                                                            </div>
                                                            <div class="nk-tab-actions me-n1">
                                                                <a class="btn btn-icon btn-trigger" href="{{route('profile.editprofile')}}"><em class="icon ni ni-edit"></em></a>
                                                            </div>
                                                        </div>
                                                    </div><!-- .nk-block-head -->
                                                    <div class="profile-ud-list">
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Name</span>
                                                                <span class="profile-ud-value">{{$user->name}}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Email</span>
                                                                <span class="profile-ud-value">{{$user->email}}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Type</span>
                                                                <span class="profile-ud-value">{{$user->utype}}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Adresse</span>
                                                                <span class="profile-ud-value">{{$user->profile->adresse}}</span>
                                                            </div>
                                                        </div>
                                                    </div><!-- .profile-ud-list -->--}}
                                                </div><!-- .nk-block -->

                                            </div><!--card inner-->
                                        </div><!-- .card-content -->
                                    </div><!--card-->
                                </div><!--nk block lg-->
                            </div>
                        </div>
                    </div>
</div>
<!-- content @e -->
@section('js')




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

@endsection
