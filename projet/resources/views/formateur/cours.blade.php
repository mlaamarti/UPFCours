<!-- Get Header -->
@extends('layouts.header')
@section('title', 'Cours')


<!-- Get Sidebar -->
@extends('includes.formateur.sidebar')


<!-- main contant -->
<div class="admin-content">

    <!-- Get Sidebar -->
@include('includes.formateur.nav')

    <div class="admin-content-inner">
        <div class="uk-background-default uk-position-relative uk-box-shadow-medium">
            <div class="uk-background-default uk-margin-top uk-padding">
                <div uk-grid="" class="uk-grid">
                    <div class="uk-width-expand@l uk-first-column">
                        <form class=" uk-flex-inline uk-flex-middle uk-text-small">
                            <p class="uk-margin-remove-bottom uk-margin-right" style="margin-top: 0px;margin-left: 20px"> Status :  </p>
                            <select class="uk-select uk-width-small" id="form-horizontal-select">
                                <option>All Status </option>
                                <option>accept</option>
                                <option>Pending</option>
                            </select>
                        </form>
                        <button class="uk-button uk-button-success uk-margin-medium-left admin-btn uk-text-uppercase" href="#create-model" uk-tooltip="title: Create New User ; delay: 500 ; pos: top ;animation:	uk-animation-scale-up" uk-toggle>
                            <i class="fas fa-plus"></i> add new
                        </button>
                    </div>
                    <div class="uk-width-auto@m uk-text-small">
                        <form>
                            <input class="uk-input uk-form-width-medium" type="text" placeholder="Search user">
                            <button class="uk-button uk-button-grey admin-btn">Search</button>
                        </form>
                    </div>
                </div>
            </div>

            <h5 class="uk-padding-small uk-margin-remove uk-text-bold  uk-text-left"> 20 Courses published | 1200 students
            </h5>
            <hr class="uk-margin-remove">
            <div class="uk-padding-small" uk-grid>
                <div class="uk-width-1-3@m uk-visible@m">
                    <img src="../assets/images/courses/course-1.jpg" alt="" class="uk-animation-fade">
                    <ul class="uk-list uk-text-small">
                        <li>
                            <div class="uk-card-header uk-text-bold">
                                <img src="../assets/images/avatures/avature-2.png" alt="" class="uk-border-circle user-profile-tiny"> Laamarti Mohamed
                            </div>
                        </li>
                        <li> 14 Lectures </li>
                        <li> Publish time 12/12/2018</li>
                        <li> Status : Publish</li>
                    </ul>
                </div>
                <div class="uk-width-expand">
                    <div class="uk-align-right">
                        <a class="el-content uk-button uk-button-success uk-circle" href="Homepage.html"> <i class="fas fa-check"></i> Edit </a>
                        <a class="el-content uk-button uk-button-danger uk-circle" href="Homepage.html"> <i class="fas fa-times"></i>  Delete  </a>
                    </div>
                    <h3 class="uk-margin-top"> Build Responsive Websites </h3>
                    <h5 class="uk-margin-remove"> Catagory : Web Development </h5>
                    <h5 class="uk-margin-small uk-text-muted"> Course Description</h5>
                    <p> Lorem ipsum dolor sit amet, est ei idque voluptua copiosae, pro detracto disputando reformidans at, ex vel suas eripuit. Vel alii zril maiorum ex, mea id sale eirsmod epicurei. Sit te possit senserit, eam alia veritus maluisset ei, id cibo vocent ocurreret per. Te qui doming doctus referrentur, usu debet tamquam et. Sea ut nullam aperiam, mei cu tollit salutatus delicatissimi. His appareat perfecto intellegat te. </p>
                </div>
            </div>
            <hr>
            <div class="uk-padding-small" uk-grid>
                <div class="uk-width-1-3@m uk-visible@m">
                    <img src="../assets/images/courses/course-1.jpg" alt="" class="uk-animation-fade">
                    <ul class="uk-list uk-text-small">
                        <li>
                            <div class="uk-card-header uk-text-bold">
                                <img src="../assets/images/avatures/avature-2.png" alt="" class="uk-border-circle user-profile-tiny"> Laamarti Mohamed
                            </div>
                        </li>
                        <li>
                            14 Lectures
                        </li>
                        <li>
                            Publish time 12/12/2018
                        </li>
                    </ul>
                </div>
                <div class="uk-width-expand">
                    <div class="uk-align-right">
                        <a class="el-content uk-button uk-button-success uk-circle" href="Homepage.html"> <i class="fas fa-check"></i> Accept </a>
                        <a class="el-content uk-button uk-button-danger uk-circle" href="Homepage.html"> <i class="fas fa-times"></i> Delete  </a>
                    </div>
                    <h3 class="uk-margin-top"> Build Responsive Websites </h3>
                    <h5 class="uk-margin-remove"> Catagory : Web Development </h5>
                    <h5 class="uk-margin-small uk-text-muted"> Course Description</h5>
                    <p> Lorem ipsum dolor sit amet, est ei idque voluptua copiosae, pro detracto disputando reformidans at, ex vel suas eripuit. Vel alii zril maiorum ex, mea id sale eirmod epicurei. Sit te possit senserit, eam alia veritus maluisset ei, id cibo vocent ocurreret per. Te qui doming doctus referrentur, usu debet tamquam et. Sea ut nullam aperiam, mei cu tollit salutatus delicatissimi. His appareat perfecto intellegat te. </p>
                </div>
            </div>
            <hr>
            <div class="uk-padding-small" uk-grid>
                <div class="uk-width-1-3@m uk-visible@m">
                    <img src="../assets/images/courses/course-1.jpg" alt="" class="uk-animation-fade">
                    <ul class="uk-list uk-text-small">
                        <li>
                            <div class="uk-card-header uk-text-bold">
                                <img src="../assets/images/avatures/avature-2.png" alt="" class="uk-border-circle user-profile-tiny"> Laamarti Mohamed
                            </div>
                        </li>                                <li> 14 Lectures </li>
                        <li> Publish time 12/12/2018</li>
                    </ul>
                </div>
                <div class="uk-width-expand">
                    <div class="uk-align-right">
                        <a class="el-content uk-button uk-button-success uk-circle" href="Homepage.html"> <i class="fas fa-check"></i> Accept </a>
                        <a class="el-content uk-button uk-button-danger uk-circle" href="Homepage.html"> <i class="fas fa-times"></i> Delete  </a>
                    </div>
                    <h3 class="uk-margin-top"> Build Responsive Websites   </h3>
                    <h5 class="uk-margin-remove"> Catagory : Web Development </h5>
                    <h5 class="uk-margin-small uk-text-muted"> Course Description</h5>
                    <p> Lorem ipsum dolor sit amet, est ei idque voluptua copiosae, pro detracto disputando reformidans at, ex vel suas eripuit. Vel alii zril maiorum ex, mea id sale eirmod epicurei. Sit te possit senserit, eam alia veritus maluisset ei, id cibo vocent ocurreret per. Te qui doming doctus referrentur, usu debet tamquam et. Sea ut nullam aperiam, mei cu tollit salutatus delicatissimi. His appareat perfecto intellegat te. </p>
                </div>
            </div>
        </div>
        <div class="uk-padding uk-background-default">
            <ul class="uk-pagination uk-flex-center uk-margin-medium">
                <li class="uk-active">
                    <span>1</span>
                </li>
                <li>
                    <a href="#">2</a>
                </li>
                <li>
                    <a href="#">3</a>
                </li>
                <li>
                    <a href="#">4</a>
                </li>
                <li>
                    <a href="#">5</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-ellipsis-h uk-margin-small-top"></i></a>
                </li>
                <li>
                    <a href="#">12</a>
                </li>
            </ul>
            <p>  You are showing 1 to 12 entries</p>
        </div>
    </div>
</div>

<!-- model -->
<div id="create-model" uk-modal>
    <div class="uk-modal-dialog uk-width-2-3@m">
        <button class="uk-modal-close-default uk-padding-small" type="button" uk-close></button>
        <div class="uk-modal-header uk-background-grey">
            <h4 class="uk-text-white"> Add New Courses   </h4>
        </div>
        <div class="uk-padding-small">
            <div uk-grid>
                <div class="uk-width-1-3@m" style="text-align: center">
                    <p>Post Picture</p>

                    <div class="over_up_new">
                        <span  onclick="document.getElementById('picture').click()"  ><i class="fas fa-camera-retro"></i></span>
                        <img src="../assets/images/backgrounds/about.jpg" alt="" id="logo" class=" user-profile-tiny" style="height: 200px !important;width: 300px !important;border: 1px solid #ece7e7;">
                    </div>
                    <form action="/file-upload">
                        <div class="fallback">
                            <input name="file" type="file" accept="image/*" style="display: none" id="picture"  onchange="PreviewImage();"/>
                        </div>
                    </form>
                    <script type="text/javascript">

                        function PreviewImage() {
                            var oFReader = new FileReader();
                            oFReader.readAsDataURL(document.getElementById("picture").files[0]);

                            oFReader.onload = function (oFREvent) {
                                document.getElementById("logo").src = oFREvent.target.result;
                            };
                        };

                    </script>
                    <p>Update Picture</p>
                </div>
                <div class="uk-width-1-2@m">
                    <form>
                        <div class="uk-margin">
                            <label> Title </label>
                            <input class="uk-input uk-form-width-large" placeholder="Name" type="text">
                        </div>
                        <div class="uk-margin">
                            <label> About </label>
                            <input class="uk-input uk-form-width-large" placeholder="about course" type="text">
                        </div>
                        <div class="uk-margin">
                            <label> About Course </label>
                            <div id="editor">
                                <p><br></p>
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label> PlayList ID </label>
                            <input class="uk-input uk-form-width-large" placeholder="ID Playlist" type="text">
                        </div>
                        <div class="uk-margin">
                            <label> Tags </label>
                            <input class="uk-input uk-form-width-large" placeholder="List Tags" type="text">
                        </div>
                        <div class="uk-margin">
                            <label> Category</label>
                            <select class="uk-select">
                                <option> HTML5 Templates </option>
                                <option> Php Scripts  </option>
                                <option> Wordpress themes  </option>
                                <option> Wordpress Plugins  </option>
                                <option> Android Codes  </option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="uk-modal-footer uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
            <button class="uk-button uk-button-success" type="button">Ajouter</button>
        </div>
    </div>
</div>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    var quill = new Quill('#editor', {
        theme: 'snow'
    });
</script>
</body>
