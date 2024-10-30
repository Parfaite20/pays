<!-- content @s -->
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h2 class="nk-block-title page-title">Mon Profile</h2>
                                    </div>
                                    <div class="text-center">
                                        @if($message = Session::get('success'))
                                            <div class="alert alert-success">
                                                <p>{{$message}}</p>
                                            </div>
                                        @endif
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="nk-block nk-block-lg">
                                    <div class="card card-bordered">
                                        <div class="card-content">
                                            <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#"><em class="icon ni ni-user-circle"></em><span>Personal</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#"><em class="icon ni ni-repeat"></em><span>Transactions</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#"><em class="icon ni ni-file-text"></em><span>Documents</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#"><em class="icon ni ni-bell"></em><span>Notifications</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#"><em class="icon ni ni-activity"></em><span>Activities</span></a>
                                                </li>
                                                <li class="nav-item nav-item-trigger d-xxl-none">
                                                    <a href="#" class="toggle btn btn-icon btn-trigger" data-target="userAside"><em class="icon ni ni-user-list-fill"></em></a>
                                                </li>
                                            </ul><!-- .nav-tabs -->
                                            <div class="card-inner">
                                                <div class="nk-block">
                                                    <div class="nk-block-head">
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
                                                    </div><!-- .profile-ud-list -->
                                                </div><!-- .nk-block -->
                                                <div class="nk-block">
                                                    <div class="nk-block-head nk-block-head-line">
                                                        <h6 class="title overline-title text-base">D'autres informations</h6>
                                                    </div><!-- .nk-block-head -->
                                                    <div class="profile-ud-list">
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Pays</span>
                                                                <span class="profile-ud-value">{{$user->profile->pays}}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Ville</span>
                                                                <span class="profile-ud-value">{{$user->profile->ville}}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Mobile 1</span>
                                                                <span class="profile-ud-value">{{$user->profile->mobile1}}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Mobile 2</span>
                                                                <span class="profile-ud-value">{{$user->profile->mobile2}}</span>
                                                            </div>
                                                        </div>
                                                    </div><!-- .profile-ud-list -->
                                                </div><!-- .nk-block -->
                                                {{--<div class="nk-block">
                                                    <div class="nk-block-head nk-block-head-line">
                                                        <h6 class="title overline-title text-base">Personal Preferences</h6>
                                                    </div><!-- .nk-block-head -->
                                                    <div class="profile-ud-list">
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Language</span>
                                                                <span class="profile-ud-value">English (United State)</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Date Format</span>
                                                                <span class="profile-ud-value">M d, YYYY</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Timezone</span>
                                                                <span class="profile-ud-value">Bangladesh (GMT +6)</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Visual Editor</span>
                                                                <span class="profile-ud-value">Disable the visual editor when writing</span>
                                                            </div>
                                                        </div>
                                                    </div><!-- .profile-ud-list -->
                                                </div><!-- .nk-block -->--}}
                                            </div><!--card inner-->
                                        </div><!-- .card-content -->
                                    </div><!--card-->
                                </div><!--nk block lg-->
                            </div>
                        </div>
                    </div>
</div>
<!-- content @e -->


