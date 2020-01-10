<!-- Get Header -->
@extends('layouts.header')
@section('title', 'Script')


<!-- Get Sidebar -->
@extends('includes.admin.sidebar')


<!-- main contant -->
<div class="admin-content">

    <!-- Get Sidebar -->
    @include('includes.admin.nav')


    <div class="admin-content-inner">
        <div class="uk-margin uk-flex-inline uk-flex-middle">
            <i class="fas fa-code icon-large uk-margin-right"></i>
            <h4 class="uk-margin-remove"> Scripts  </h4>
        </div>
        <div class="uk-background-default uk-position-relative uk-box-shadow-medium">
            <h5 class="uk-padding-small uk-margin-remove uk-text-bold  uk-text-left"> Your Scirpts  </h5>
            <div class="uk-background-default uk-margin-top uk-padding">
                <div uk-grid="" class="uk-grid">
                    <div class="uk-width-expand@l uk-first-column">
                        <form class=" uk-flex-inline uk-flex-middle uk-text-small">
                            <p class="uk-margin-remove-bottom uk-margin-right"> Category :  </p>
                            <select class="uk-select uk-width-small" id="form-horizontal-select">
                                <option>All Category</option>
                                <option>Development Mobile </option>
                                <option>Development Web</option>
                            </select>
                            <p class="uk-margin-remove-bottom uk-margin-right" style="margin-top: 0px;margin-left: 20px"> Formateur :  </p>
                            <select class="uk-select uk-width-small" id="form-horizontal-select">
                                <option>All Formateur </option>
                                <option>Laamarti UPF</option>
                                <option>Haitam UPF </option>
                            </select>
                        </form>
                        <form class=" uk-flex-inline uk-flex-middle uk-text-small">
                            <p class="uk-margin-remove-bottom uk-margin-right" style="margin-top: 0px;margin-left: 20px"> Status :  </p>
                            <select class="uk-select uk-width-small" id="form-horizontal-select">
                                <option>All Status </option>
                                <option>accept</option>
                                <option>Pending</option>
                                <option>Reject</option>
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
            <p class="uk-position-top-right uk-position-small"> 12 Scripts Stored </p>
            <hr class="uk-margin-remove">
            <div class="uk-padding-small" uk-grid>
                <div class="uk-width-1-3@m uk-visible@m">
                    <img src="../assets/images/scripts/scritps.jpg" alt="" class="uk-animation-fade">
                    <h6 class="uk-heading-line uk-text-center uk-margin-small"><span>Feature shoots</span></h6>
                    <div class="uk-position-relative uk-visible-toggle uk-light uk-margin-small" uk-slider>
                        <ul class="uk-slider-items uk-grid-small uk-child-width-1-2@m uk-child-width-1-3@s" uk-grid>
                            <li class="uk-active">
                                <img src="../assets/images/scripts/script-description-feature.jpg">
                            </li>
                            <li>
                                <img src="../assets/images/scripts/script-description-feature.jpg">
                            </li>
                            <li>
                                <img src="../assets/images/scripts/script-description-feature.jpg">
                            </li>
                            <li>
                                <img src="../assets/images/scripts/script-description-feature.jpg">
                            </li>
                        </ul>
                        <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    </div>
                    <h5 class="uk-margin-remove">
                        <div class="uk-card-header uk-text-bold">
                            <img src="../assets/images/avatures/avature-2.png" alt="" class="uk-border-circle user-profile-tiny"> Laamarti Mohamed
                        </div>
                    </h5>
                </div>
                <div class="uk-width-expand">
                    <div class="uk-align-right">
                        <a class="el-content uk-button uk-button-success uk-circle" href="#"> <i class="fas fa-check"></i> approve </a>
                        <a class="el-content uk-button uk-button-danger uk-circle" href="#"> <i class="fas fa-times"></i>  Cancel  </a>
                    </div>
                    <h3 class="uk-margin-top"> Modeno simple template </h3>
                    <h5 class="uk-margin-remove"> Catagory : Html5 Templates </h5>
                    <h5 class="uk-margin-small uk-text-muted"> Theme Description</h5>
                    <p> Lorem ipsum dolor sit amet, est ei idque voluptua copiosae, pro detracto disputando reformidans at, ex vel suas eripuit. Vel alii zril maiorum ex, mea id sale eirmod epicurei. Sit te possit senserit, eam alia veritus maluisset ei, id cibo vocent ocurreret per. Te qui doming doclus referrentur, usu debet tamquam et. Sea ut nullam aperiam, mei cu tollit salutatus delicatissimi. His appareat perfecto intellegat te. </p>
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
</body>
