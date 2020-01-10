<!-- Get Header -->
@extends('layouts.header')
@section('title', 'Users')


<!-- Get Sidebar -->
@extends('includes.admin.sidebar')


<!-- main contant -->
<div class="admin-content">

    <!-- Get Sidebar -->
    @include('includes.admin.nav')


    <div class="admin-content-inner">
        <div class="uk-flex-inline uk-flex-middle">
            <i class="fas fa-user icon-large uk-margin-right"></i>
            <h4 class="uk-margin-remove"> Users </h4>
        </div>
        <div class="uk-background-default uk-margin-top uk-padding">
            <div uk-grid>
                <div class="uk-width-expand@m">
                    <form class=" uk-flex-inline uk-flex-middle uk-text-small">
                        <p class="uk-margin-remove-bottom uk-margin-right"> Show entries :  </p>
                        <select class="uk-select uk-width-small" id="form-horizontal-select">
                            <option>10 page </option>
                            <option>20 page </option>
                            <option>30 page </option>
                            <option>50 page </option>
                        </select>
                    </form>
                </div>
                <div class="uk-width-auto@m uk-text-small">
                    <form>
                        <input class="uk-input uk-form-width-medium" type="text" placeholder="Search user">
                        <button class="uk-button uk-button-grey admin-btn">Search</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="uk-overflow-auto">
            <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">
                <thead>
                <tr class="uk-text-small uk-text-bold">
                    <th>Avature</th>
                    <th>FullNAme</th>
                    <th>Email</th>
                    <th>Created</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Expand + Link</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <img class="uk-preserve-width uk-border-circle user-profile-small" src="../assets/images/avatures/avature-1.png" width="50" alt="">
                    </td>
                    <td> username </td>
                    <td> Username @gmail.com </td>
                    <td> 12/12/2020 </td>
                    <td>Administrater</td>
                    <td><span class="uk-label uk-label-warning">Pending</span></td>
                    <td class="uk-flex-inline uk-flex-middle">
                        <button class="uk-button uk-button-grey admin-table-btn" href="#edit_Profile_User" uk-tooltip="title: Edit Profile User ; delay: 500 ; pos: top ;animation:	uk-animation-scale-up" uk-toggle>
                            <i class="fas fa-trash uk-visible@m"></i> Edit
                        </button>
                        <button class="uk-button uk-button-danger admin-table-btn" href="#delete_User" uk-tooltip="title: Delete User ; delay: 500 ; pos: top ;animation:	uk-animation-scale-up" uk-toggle>
                            <i class="fas fa-trash uk-visible@m"></i> Delelt
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="uk-preserve-width uk-border-circle user-profile-small" src="../assets/images/avatures/avature-1.png" width="50" alt="">
                    </td>
                    <td> username </td>
                    <td> Username @gmail.com </td>
                    <td> 12/12/2020 </td>
                    <td>Administrater</td>
                    <td><span class="uk-label uk-label-danger">Suspend</span></td>
                    <td class="uk-flex-inline uk-flex-middle">
                        <button class="uk-button uk-button-grey admin-table-btn" href="#edit_Profile_User" uk-tooltip="title: Edit Profile User ; delay: 500 ; pos: top ;animation:	uk-animation-scale-up" uk-toggle>
                            <i class="fas fa-trash uk-visible@m"></i> Edit
                        </button>
                        <button class="uk-button uk-button-danger admin-table-btn" href="#delete_User" uk-tooltip="title: Delete User ; delay: 500 ; pos: top ;animation:	uk-animation-scale-up" uk-toggle>
                            <i class="fas fa-trash uk-visible@m"></i> Delelt
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="uk-preserve-width uk-border-circle user-profile-small" src="../assets/images/avatures/avature-1.png" width="50" alt="">
                    </td>
                    <td> username </td>
                    <td> Username @gmail.com </td>
                    <td> 12/12/2020 </td>
                    <td>Administrater</td>
                    <td><span class="uk-label uk-label-success">Active</span></td>
                    <td class="uk-flex-inline uk-flex-middle">
                        <button class="uk-button uk-button-grey admin-table-btn" href="#edit_Profile_User" uk-tooltip="title: Edit Profile User ; delay: 500 ; pos: top ;animation:	uk-animation-scale-up" uk-toggle>
                            <i class="fas fa-trash uk-visible@m"></i> Edit
                        </button>
                        <button class="uk-button uk-button-danger admin-table-btn" href="#delete_User" uk-tooltip="title: Delete User ; delay: 500 ; pos: top ;animation:	uk-animation-scale-up" uk-toggle>
                            <i class="fas fa-trash uk-visible@m"></i> Delelt
                        </button>
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

    <!-- Start  Edit Profile User model -->
    <div id="edit_Profile_User" uk-modal>
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default uk-padding-small" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h4> Edit Profile </h4>
            </div>
            <div class="uk-modal-body">
                <div uk-grid>
                    <div class="uk-width-1-1@l">
                        <form>
                            <div class="uk-margin">
                                <label> FullName </label>
                                <input class="uk-input uk-form-width-large" placeholder="Name" type="text" id="fullname">
                            </div>
                            <div class="uk-margin">
                                <label> Email </label>
                                <input class="uk-input uk-form-width-large" placeholder="name@example.com" type="email" id="email">
                            </div>
                            <div class="uk-margin">
                                <label> ROLE</label>
                                <select class="uk-select">
                                    <option> Administrateur </option>
                                    <option> Student </option>
                                    <option> Formateur </option>
                                </select>
                            </div>
                            <div class="uk-margin">
                                <label> STATUS</label>
                                <select class="uk-select">
                                    <option> Pending </option>
                                    <option> Active </option>
                                    <option> Suspend </option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="uk-modal-footer uk-text-right">
                <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                <button class="uk-button uk-button-success" type="button">Save</button>
            </div>
        </div>
    </div>
    <!-- End  Edit Profile User model -->

    <!-- Start  Delete User model -->
    <div id="delete_User" uk-modal>
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default uk-padding-small" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h4> are you sure you want to delete the user account ? </h4>
            </div>
            <div class="uk-modal-footer uk-text-right">
                <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                <button class="uk-button uk-button-danger" type="button">YES</button>
            </div>
        </div>
    </div>
    <!-- End  Delete User model -->

</div>
</body>
