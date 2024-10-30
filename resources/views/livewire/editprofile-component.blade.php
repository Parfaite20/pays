@if(Auth::user()->utype === 'ADM')
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Modifier de profile</h3>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs flex-row-reverse">
                                        
                                        <div class="col-xxl-5">
                                            <div class="card card-bordered h-100">
                                               
                                                <div class="card-inner">
                                                    <form wire:submit.prevent="updateProfile" class="mt-4">
                                                        @csrf
                                                        <div class="row g-gs">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="editName">Email</label><br>
                                                                    <!--<input type="text" class="form-control" id="editName">-->
                                                                    {{$email}}
                                                                </div>
                                                            </div><!-- .col -->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="editName">Type</label><br>
                                                                    <input type="text" class="form-control" id="editName" wire:model.defer="utype">
                                                                    
                                                                </div>
                                                            </div><!-- .col -->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="editName">Name</label>
                                                                    <input type="text" class="form-control" id="editName" wire:model.defer="name">
                                                                </div>
                                                            </div><!-- .col -->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="editSurname">Mobile 1</label>
                                                                    <input type="text" class="form-control" id="editSurname" wire:model.defer="mobile1">
                                                                </div>
                                                            </div><!-- .col -->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="editEmail">Mobile 2</label>
                                                                    <input type="text" class="form-control" id="editEmail" wire:model.defer="mobile2">
                                                                </div>
                                                            </div><!-- .col -->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="editPhone">Pays</label>
                                                                    <input type="text" class="form-control" id="editPhone" wire:model.defer="pays">
                                                                </div>
                                                            </div><!-- .col -->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="editPhone">Ville</label>
                                                                    <input type="text" class="form-control" id="editPhone" wire:model.defer="ville">
                                                                </div>
                                                            </div><!-- .col -->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="editPhone">Adresse</label>
                                                                    <input type="text" class="form-control" id="editPhone" wire:model.defer="adresse">
                                                                </div>
                                                            </div><!-- .col -->
                                                            {{--<div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Language</label>
                                                                    <div class="form-control-wrap">
                                                                        <select class="form-select js-select2" data-placeholder="language">
                                                                            <option value="us">English (United State)</option>
                                                                            <option value="bengali">Bengali</option>
                                                                            <option value="uk">English (United Kingdom)</option>
                                                                            <option value="spanish">Spanish</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .col -->--}}
                                                            <div class="col-12">
                                                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                                                    <li>
                                                                        <button type="submit" data-bs-dismiss="" class="btn btn-primary">Modifier</button>
                                                                    </li>
                                                                    <li>
                                                                        <a href="{{route('user.list')}}" class="link link-light" data-bs-dismiss="">Retour</a>
                                                                    </li>
                                                                </ul>
                                                            </div><!-- .col -->
                                                        </div><!-- .row -->
                                                    </form>
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
@else
<!-- content @s -->
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Modifier ou compléter votre profile</h3>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs flex-row-reverse">
                                        
                                        <div class="col-xxl-5">
                                            <div class="card card-bordered h-100">
                                               
                                                <div class="card-inner">
                                                    <form wire:submit.prevent="updateProfile" class="mt-4">
                                                        @csrf
                                                        <div class="row g-gs">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="editName">Email</label><br>
                                                                    <!--<input type="text" class="form-control" id="editName">-->
                                                                    {{$email}}
                                                                </div>
                                                            </div><!-- .col -->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="editName">Type</label><br>
                                                                    <!--<input type="text" class="form-control" id="editName">-->
                                                                    {{$utype}}
                                                                </div>
                                                            </div><!-- .col -->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="editName">Name</label>
                                                                    <input type="text" class="form-control" id="editName" wire:model.defer="name">
                                                                </div>
                                                            </div><!-- .col -->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="editSurname">Mobile 1</label>
                                                                    <input type="text" class="form-control" id="editSurname" wire:model.defer="mobile1">
                                                                </div>
                                                            </div><!-- .col -->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="editEmail">Mobile 2</label>
                                                                    <input type="text" class="form-control" id="editEmail" wire:model.defer="mobile2">
                                                                </div>
                                                            </div><!-- .col -->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="editPhone">Pays</label>
                                                                    <input type="text" class="form-control" id="editPhone" wire:model.defer="pays">
                                                                </div>
                                                            </div><!-- .col -->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="editPhone">Ville</label>
                                                                    <input type="text" class="form-control" id="editPhone" wire:model.defer="ville">
                                                                </div>
                                                            </div><!-- .col -->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="editPhone">Adresse</label>
                                                                    <input type="text" class="form-control" id="editPhone" wire:model.defer="adresse">
                                                                </div>
                                                            </div><!-- .col -->
                                                            {{--<div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Language</label>
                                                                    <div class="form-control-wrap">
                                                                        <select class="form-select js-select2" data-placeholder="language">
                                                                            <option value="us">English (United State)</option>
                                                                            <option value="bengali">Bengali</option>
                                                                            <option value="uk">English (United Kingdom)</option>
                                                                            <option value="spanish">Spanish</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .col -->--}}
                                                            <div class="col-12">
                                                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                                                    <li>
                                                                        <button type="submit" data-bs-dismiss="" class="btn btn-primary">Modifier ou compléter</button>
                                                                    </li>
                                                                    <li>
                                                                        <a href="{{route('profile')}}" class="link link-light" data-bs-dismiss="">Retour</a>
                                                                    </li>
                                                                </ul>
                                                            </div><!-- .col -->
                                                        </div><!-- .row -->
                                                    </form>
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
@endif

    <script>
    window.addEventListener("showMessage", event=>{
        Swal.fire({
        title: "Super!",
        text: "Opération réussie!",
        icon: "success",

        /*position: 'top-end',
        icon: 'success',
        toast:true,
        title:event.detail.message || "Opération effectuée avec succès",
        showConfirmButton;false,
        timer:500*/

        });
    })
</script>
