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
                                                <h3 class="nk-block-title page-title">Messages</h3>
                                            </div><!-- .nk-block-head-content -->
                                            <!--<a href="#" class="btn btn-primary" >Ajouter</a>-->
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
                                                            <th>Message</th>
                                                            <th>Date de création</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                        @foreach($cont as $conn)
                                                            <tr>
                                                                <td>{{$loop->index + 1}}</td>
                                                                <td>{{$conn->name}}</td>
                                                                <td>{{$conn->email}}</td>
                                                                <td>{{$conn->comment}}</td>
                                                                <td>{{$conn->created_at}}</td>
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