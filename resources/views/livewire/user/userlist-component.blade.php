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
                                                <h3 class="nk-block-title page-title">Users </h3>

                                            </div><!-- .nk-block-head-content -->
                                            <div class="nk-block-head-content">
                                                <a data-bs-toggle="modal" href="#addUser" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                                <a data-bs-toggle="modal" href="#addUser" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add user</span></a>
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
                                                            <th>Role</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($user as $users)
                                                            <tr>
                                                                <td>{{$loop->index + 1}}</td>
                                                                <td>{{$users->name}}</td>
                                                                <td>{{$users->email}}</td>
                                                                <td>{{$users->utype}}</td>
                                                                <td>
                                                                    <div class="drodown">
                                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                                <ul class="link-list-opt no-bdr">
                                                                                    <li><a href=""><em class="icon ni ni-eye"></em><span>Voir</span></a></li>
                                                                                    <li><a href="{{route('profile.editprofile', ['profile_id'=>$users->id])}}"><em class="icon ni ni-edit-fill"></em><span>Edit</span></a></li>
                                                                                    <li><a href="#"><em class="icon ni ni-trash-fill"></em><span>Trash</span></a></li>

                                                                                  
                                                                                </ul>
                                                                            </div>
                                                                    </div>
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


<!-- Add User-->
<div class="modal fade" tabindex="-1" role="dialog" id="addUser">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Add User</h5>
                    <form action="#" class="mt-4">
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="firstName">Name</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="First Name">
                                </div>
                            </div><!-- .col -->
                            <!--<div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="username">Username</label>
                                    <input type="text" class="form-control" id="username" placeholder="Username can't be changed later">
                                </div>
                            </div>-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="email@example.com">
                                </div>
                            </div><!-- .col -->
                            <!--<div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="lastName">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="Last Name">
                                </div>
                            </div><!-- .col -->
                            <!--<div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="website">Website</label>
                                    <input type="text" class="form-control" id="website" placeholder="Website">
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" class="form-control" id="password" placeholder="Password">
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Select Role</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" data-placeholder="Select Role">
                                            <option value="">Select Role</option>
                                            <option value="ADM">Admin</option>
                                            <option value="ATR">Auteur</option>
                                            <option value="USR">User</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <!--<div class="col-12">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="userNoti">
                                    <label class="custom-control-label" for="userNoti">Send User Notification</label>
                                </div>
                            </div><!-- .col -->
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <button type="submit" data-bs-dismiss="modal" class="btn btn-primary">Add User</button>
                                    </li>
                                    <li>
                                        <a href="#" class="link link-light" data-bs-dismiss="modal">Cancel</a>
                                    </li>
                                </ul>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </form>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
</div><!-- .modal -->
<!-- Edit User-->
<div class="modal fade" tabindex="-1" role="dialog" id="editUser">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Edit User</h5>
                    <form action="#" class="mt-4">
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="editFirstName">First Name</label>
                                    <input type="text" class="form-control" id="editFirstName" placeholder="First Name" value="Abu Bin">
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="editEmail">Email</label>
                                    <input type="email" class="form-control" id="editEmail" placeholder="email@example.com" value="softnio@gmail.com">
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="editLastName">Last Name</label>
                                    <input type="text" class="form-control" id="editLastName" placeholder="Last Name" value="Ishtiyak">
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="editWebsite">Website</label>
                                    <input type="text" class="form-control" id="editWebsite" placeholder="Website" value="softnio.com">
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="editPassword">Password</label>
                                    <input type="password" class="form-control" id="editPassword" placeholder="Password" value="123456">
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="editPost">Post</label>
                                    <input type="text" class="form-control" id="editPost" placeholder="Post" value="01">
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Select Role</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2">
                                            <option value="superadmin">Super Admin</option>
                                            <option value="admin">Admin</option>
                                            <option value="subscriber">Subscriber</option>
                                            <option value="contributor">Contributor</option>
                                            <option value="author">Author</option>
                                            <option value="editor">Editor</option>
                                            <option value="none">Guest</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-12">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="editNoti">
                                    <label class="custom-control-label" for="editNoti">Send User Notification</label>
                                </div>
                            </div><!-- .col -->
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <button type="submit" data-bs-dismiss="modal" class="btn btn-primary">Update</button>
                                    </li>
                                    <li>
                                        <a href="#" class="link link-light" data-bs-dismiss="modal">Cancel</a>
                                    </li>
                                </ul>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </form>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
</div><!-- .modal -->

