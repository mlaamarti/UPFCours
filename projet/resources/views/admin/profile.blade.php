<!-- Get Header -->
@extends('layouts.header')
@section('title', 'Profile')


<!-- Get Sidebar -->
@extends('includes.admin.sidebar')


<!-- main contant -->
<div class="admin-content">

    <!-- Get Sidebar -->
    @include('includes.admin.nav')

    <div class="admin-content-inner">
        <div class="uk-card-small uk-card-default">
            <div class="uk-card-header uk-text-bold">
                <i class="fas fa-user uk-margin-small-right"></i> Profile details
            </div>
            <div class="uk-card-body ">
                <div uk-grid>
                    <div class="uk-width-1-3@m" style="text-align: center">
                        <p>Your profile photo</p>

                        <div class="over_up">
                            <span  onclick="document.getElementById('logo_profile').click()"  ><i class="fas fa-camera-retro"></i></span>
                            <img src="../assets/images/avatures/avature-2.png" alt="" id="logo" class="uk-border-circle user-profile-tiny" style="height: 100px !important;width: 100px !important;width: 100px !important;border: 1px solid #ece7e7;">
                        </div>
                        <form action="/file-upload">
                            <div class="fallback">
                                <input name="file" type="file" accept="image/*" style="display: none" id="logo_profile"  onchange="PreviewImage();"/>
                            </div>
                        </form>
                        <script type="text/javascript">

                            function PreviewImage() {
                                var oFReader = new FileReader();
                                oFReader.readAsDataURL(document.getElementById("logo_profile").files[0]);

                                oFReader.onload = function (oFREvent) {
                                    document.getElementById("logo").src = oFREvent.target.result;
                                };
                            };

                        </script>
                        <p>Update Profile Picture</p>
                    </div>
                    <div class="uk-width-2-3@m">
                        <form class="uk-grid-small" uk-grid>
                            <div class="uk-width-1-2">
                                <div class="uk-form-label"> Name  </div>
                                <input class="uk-input" type="text" placeholder="Your Name">
                            </div>
                            <div class="uk-width-1-2">
                                <div class="uk-form-label"> Last name   </div>
                                <input class="uk-input" type="text" placeholder="Your Last name">
                            </div>
                            <div class="uk-width-1-2">
                                <div class="uk-form-label"> Email  </div>
                                <input class="uk-input" type="text" placeholder="Your Email">
                            </div>
                            <div class="uk-width-1-2">
                                <div class="uk-form-label"> Telephone  </div>
                                <input class="uk-input" type="text" placeholder="Your Telephone">
                            </div>
                            <div class="uk-width-1-1">
                                <div class="uk-form-label"> Personal info   </div>
                                <textarea class="uk-textarea" rows="5" placeholder="Personal info"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-margin-medium">
            <div uk-grid>
                <div class="uk-width-1-2@m">
                    <div class="uk-card-small uk-card-default">
                        <div class="uk-card-header uk-text-bold">
                            <i class="fas fa-envelope uk-margin-small-right"></i> Change  Email
                        </div>
                        <div class="uk-card-body uk-padding-remove-top">
                            <div class="uk-form-label"> Old email  </div>
                            <input class="uk-input" type="text">
                            <div class="uk-form-label"> New email  </div>
                            <input class="uk-input" type="text">
                            <div class="uk-form-label"> Confirm new email  </div>
                            <input class="uk-input" type="text">
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-2@m">
                    <div class="uk-card-small uk-card-default">
                        <div class="uk-card-header uk-text-bold">
                            <i class="fas fa-lock uk-margin-small-right"></i> Change password
                        </div>
                        <div class="uk-card-body uk-padding-remove-top">
                            <div class="uk-form-label"> Old password  </div>
                            <input class="uk-input" type="text">
                            <div class="uk-form-label"> New password  </div>
                            <input class="uk-input" type="text">
                            <div class="uk-form-label"> Confirm new password  </div>
                            <input class="uk-input" type="text">
                        </div>
                    </div>
                </div>
            </div>
            <input class="uk-button uk-button-grey  uk-margin" type="submit" class="button" value="Sign in">
        </div>
    </div>


</div>
</body>
