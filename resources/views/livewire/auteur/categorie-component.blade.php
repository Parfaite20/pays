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
                                                <h3 class="nk-block-title page-title">Categories</h3>
                                            </div><!-- .nk-block-head-content -->
                                            <!--<a href="#" class="btn btn-primary" >Ajouter</a>-->
                                        </div><!-- .nk-block-between -->
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-block nk-block-lg">
                                        <div class="card card-bordered card-preview">
                                                <div class="card-inner">
                                                    <form wire:submit.prevent="storeCategorie">
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
                                                                        <input type="text" class="form-control" id="name" required placeholder="Name" wire:model.defer="name">
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
                                                                    <button type="submit" class="btn btn-lg btn-primary">Ajouter Categorie</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form><!-- form -->
                                                </div><!-- .card-inner -->
                                            <div class="card-inner">
                                                <table class="datatable-init-export nowrap table" data-export-title="Export">
                                                    <thead>
                                                        <tr>
                                                            <th>N°</th>
                                                            <th>Nom</th>
                                                            <th>Actions</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                        @foreach($categorie as $cate)
                                                            <tr>
                                                                <td>{{$loop->index + 1}}</td>
                                                                <td>{{$cate->name}}</td>
                                                                <td>
                                                                    <li>
                                                                        <div class="drodown">
                                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                                <ul class="link-list-opt no-bdr">
                                                                                    <li><a href="#" wire:click.prevent="editCategorie({{$cate->id}})"><em class="icon ni ni-edit-fill"></em><span>Edit</span></a></li>
                                                                                    <li><a href="#" wire:click.prevent="confirmDelete('{{$cate->name}}', '{{$cate->id}}')"><em class="icon ni ni-trash-fill"></em><span>Trash</span></a></li>
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

    
<script>
    window.addEventListener("showEditForm", function(e){
        Swal.fire({
        title: "Modification de categorie",
        input: "text",
        inputValue: e.detail.categorie.name,
        showCancelButton: true,
        inputValidator: (value) => {
            if (!value) {
            return "Champ obligatoire";
            }

            @this.updateCategorie(e.detail.categorie.id, value)
        }
    })
    })
</script>

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

<script>
    window.addEventListener("showMessagedelete", event=>{
        Swal.fire({
        title: event.detail.message.title,
        text: event.detail.message.text,
        icon: event.detail.message.type,
        showCancelButton: true,
        }).then((result)=>{
            if (result.isConfirmed) {
                if (event.detail.message.data) {
                    @this.deleteCategorie(event.detail.message.data.categorie_id)
                }


            }
        });
    })
</script>
