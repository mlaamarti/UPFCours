<!-- Get Header -->
@extends('layouts.header')
@section('title', 'Books')


<!-- Get Sidebar -->
@extends('includes.formateur.sidebar')


<!-- main contant -->
<div class="admin-content">

    <!-- Get Sidebar -->
    @include('includes.formateur.nav')

    <div class="admin-content-inner">
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
        <!-- table -->
        <div class="uk-overflow-auto">
            <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">
                <thead>
                <tr>
                    <th class="uk-table-shrink"> No</th>
                    <th class="uk-table-shrink"> Cover</th>
                    <th class="uk-width-small"> Title </th>
                    <th class="uk-table-expand"> Description </th>
                    <th class="uk-table-small"> Category </th>
                    <th class="uk-table-small"> Status </th>
                    <th class="uk-table-shrink"> Action </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>   1 </td>
                    <td class=" ">
                        <img class="uk-preserve-width admin-book-img" src="../assets/images/books/book.jpg" width="50" height="60" alt="">
                    </td>
                    <td class="uk-text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</td>
                    <td class="uk-table-link uk-text-truncate">
                        <a class="uk-link-reset" href="#about_Book" uk-tooltip="title: Description the book ; delay: 500 ; pos: top ;animation:	uk-animation-scale-up" uk-toggle>about Book</a>
                        <div id="about_Book" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body">
                                <button class="uk-modal-close-default" type="button" uk-close></button>
                                <h2 class="uk-modal-title">Default</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>

                    </td>
                    <td>
                        Development web
                    </td>
                    <td>
                        <mark>Pending</mark>
                    </td>
                    <td>
                        <a class="el-content uk-button uk-button-success uk-circle" href="#"> <i class="fas fa-check"></i> Edit </a>
                        <a class="el-content uk-button uk-button-danger uk-circle" href="#"> <i class="fas fa-times"></i>  Cancel  </a>
                    </td>
                </tr>
                </tbody>
            </table>
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
            <p> you are showing 1 to 12 entries</p>
        </div>
    </div>
</div>

<!-- Start  Delete Book model -->
<div id="delete_Book" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-default uk-padding-small" type="button" uk-close></button>
        <div class="uk-modal-header">
            <h4> are you sure you want to delete the user Book ? </h4>
        </div>
        <div class="uk-modal-footer uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
            <button class="uk-button uk-button-danger" type="button">YES</button>
        </div>
    </div>
</div>
<!-- End  Delete Book model -->

<!-- model -->
<div id="create-model" uk-modal>
    <div class="uk-modal-dialog uk-width-2-3@m">
        <button class="uk-modal-close-default uk-padding-small" type="button" uk-close></button>
        <div class="uk-modal-header uk-background-grey">
            <h4 class="uk-text-white"> Add New Book   </h4>
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
                            <label> About Book </label>
                            <div id="editor">
                                <p><br></p>
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label> Number Page </label>
                            <input class="uk-input uk-form-width-large" placeholder="Number Page" type="text">
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
