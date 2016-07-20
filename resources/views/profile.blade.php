@extends('layouts.master')

@section('header.style')
    <style>
        body {
            overflow-y: scroll;
        }
    </style>
@endsection

@section('content')

@include('layouts.nav')

<!--    <section id="map" style="height:400px;"></section>-->

    <section class="profile">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <ul class="profile-tabs">
                        <li class="active">
                            Iam a Film
                        </li>

                        <li>
                            Submit a Video
                        </li>

                        <li>
                            Buy Coins
                        </li>

                        <li>
                            My film
                        </li>

                        <li>
                            Upload a film
                        </li>

                    </ul>
                </div>


                <div class="col-sm-9">
                    <div class="box">
                        <div id="iamafilm" class="profile-info clearfix">
                            <div class=" detials clearfix">
                                <div class="col-sm-3">
                                    <img class="img-responsive img-circle" src="assets/images/user.png">
                                </div>
                                <div class="col-sm-9">
                                    <h3>
                                        User Name
                                    </h3>
                                    <h4>Cairo - Egypt</h4>
                                    <p style="margin:0; padding:0;">Contact Info : </p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <hr style="border-color:#ddd">
                            <h4 style="margin: 5px auto; padding:0">About:</h4>
                            <p class="about clearfix" style="padding: 0 20px;">
                                Lorem ipsum dolor sit amet, has cu ludus intellegat definiebas. Suscipit praesent quo at, augue quodsi nec at, his integre vivendo torquatos eu. Consulatu cotidieque intellegebat sea cu, ne has verear dolorem reprimique. Ex viris sanctus per, cibo vulputate no nam, qui te prima vitae dicant.
                            </p>

                            <hr style="border-color:#ddd">

                            <h4 style="margin: 5px auto; padding:0">My films:</h4>
                            <div class="films" data-ng-controller="filmsCtrl">
                                <div style="margin: 15px auto"  class="film clearfix"
                                   data-ng-repeat=
                                   "film in (feedLoader = (films | limitTo:feedLimit))
                                   | orderBy: sortBy: reverse
                                   ">

                                    <div class="col-sm-8">
                                        <div class="festival-info">
                                            <h4>
                                                <a href="#">@{{film.title}}</a>
                                            </h4>

                                            <span>@{{film.country[0] + ' | '}} @{{film.date | date: yyyy}} </span>

                                            <p>
                                                @{{film.t_description}}
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="festival-img">
                                            <img class="img-responsive" src="@{{film.thu}}">
                                        </div>
                                    </div>
                                </div>

                                <button style="display: block; margin: 10px auto" class="btn btn-success" ng-click="feedLimit = feedLimit + 4">Show more</button>
                            </div>

                        </div>

                        <div id="submit-video" class="submit clearfix">

                            <div class="festivals" data-ng-controller="festivalCtrl">
                                <div class="festival">

                                   <h4 class="text-center">Festivals</h4>
                                    <div class="festival-color">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="festival-clolr-box">
                                                    <span style="background: #00FFA1;"></span>submission
                                                    <span style="background: #FFD400;"></span>deadline
                                                    <span style="background: #ff2525;"></span>closed
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="festival-filter">
                                        <div class="form-group" data-ng-model='festivalFilter'>
                                            <div class="form-group search-fest">
                                                <input value="" type="text" class="form-control" data-ng-model="festivalFilter" placeholder="Find your festival">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </div>
                                            <div class="films-filter festival-filter">
                                                <span class="active" data-ng-click="doSort('date')">All</span>
                                                <span data-ng-click="doSort('date')">Date</span>
                                                <span data-ng-click="festivalFilter = {type: 'submission'}">Submission</span>
                                                <span data-ng-click="festivalFilter = {type: 'deadline'}">Deadline</span>
                                                <span data-ng-click="festivalFilter = {type: 'closed'}">Closed</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group clearfix">
                                        <p class="col-xs-4 text-right" style="line-height: 2.5">Show As</p>
                                        <div class="col-xs-8">
                                            <select class="form-control" data-ng-model="pageSize">
                                                <option ng-selected="pageSize == pageSize" value="10" selected>10</option>
                                                <option value="20">20</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="festival-box"
                                        dir-paginate="festival in festivals
                                        | filter: festivalFilter
                                        | orderBy: sortBy: reverse
                                        | itemsPerPage: pageSize"
                                        pagination-id="festPagi">

                                        <div class="col-sm-4">
                                            <div class="festival-img">
                                                <img class="img-responsive" src="@{{festival.thu}}">
                                            </div>
                                        </div>

                                        <div class="col-sm-8">
                                            <div class="festival-info">
                                                <h4>
                                                    @{{festival.title}}
                                                </h4>
                                                <p>
                                                    @{{festival.t_description}}
                                                </p>
                                                <span style="    text-transform: capitalize;">
                                                    @{{festival.country + ' ' + festival.date}}
                                                </span>
                                            </div>
                                            <form>
                                                <select ng-controller="filmsCtrl" class="form-control pull-left" style="width:70%;">
                                                    <option selected disabled>Choose a film</option>
                                                    <option data-ng-repeat="film in films" value="@{{film.title}}">@{{film.title}}</option>
                                                </select>
                                                <div class="form-group">
                                                    <input type="submit" class="btn btn-success pull-right" value="Submit">
                                                </div>
                                            </form>

                                        </div>

                                        <span class="@{{festival.type[0]}}"></span>
                                    </div>
                                    <dir-pagination-controls pagination-id="festPagi"></dir-pagination-controls>
                                </div>


                                </div>


                        </div>

                        <div id="coins" class="buy-coins">
                            <div class="table clearfix">
                                <table class="table table-bordered table-hover">
                                    <tr>
                                        <th>
                                            Coin
                                        </th>

                                        <th>
                                            Currency
                                        </th>
                                    </tr>

                                    <tr>
                                        <td>
                                            1 Coin
                                        </td>

                                        <td>
                                            5$
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            5 Coin
                                        </td>

                                        <td>
                                            20$
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            1 Coin
                                        </td>

                                        <td>
                                            2 Euro
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            5 Coin
                                        </td>

                                        <td>
                                            15 Euro
                                        </td>
                                    </tr>
                                </table>

                                <div class="form-group">
                                    <a href="#buy" class="popup-with-move-anim btn btn-success pull-right">Buy</a>
                                </div>

                                <div id="buy" class="white-popup-block zoom-anim-dialog form-box mfp-hide" style="max-width: 800px;">
                                    <div class="" style="padding: 20px;">
                                        <div class="tabbable-panel">
                                            <div class="tabbable-line">
                                                <ul class="nav nav-tabs ">
                                                    <li class="active">
                                                        <a href="#tab_default_1" data-toggle="tab">
                                                        Visa </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_default_2" data-toggle="tab">
                                                        Paypal</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab_default_1">

                                                    </div>
                                                    <div class="tab-pane" id="tab_default_2">

                                                    </div>
                                                    <div class="tab-pane" id="tab_default_3">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div id="myfilm">
                            <div ng-controller="filmsCtrl">
                               <h4 class="text-center">Films</h4>
                                <div class="films-filter" data-ng-model='filmFilter'>
                                    <span class="active" data-ng-click="doSort('date')">Date</span>
                                    <span data-ng-click="doSort('country')">Country</span>
                                </div>

                                <div class="form-group clearfix" style="margin:15px auto;">
                                        <p class="col-xs-8 text-right" style="line-height: 2.5">Show As</p>
                                        <div class="col-xs-4">
                                            <select class="form-control" data-ng-model="pageSize">
                                                <option ng-selected="pageSize == pageSize" value="10" selected>10</option>
                                                <option value="20">20</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>
                                        </div>
                                    </div>
                                <div class="film-box"
                                    dir-paginate="
                                        film in films
                                        | filter: filmFilter
                                        | orderBy: sortBy: reverse
                                        | itemsPerPage: pageSize"
                                        pagination-id="filmPagi">
                                    <div class="col-sm-4">
                                        <div class="festival-img">
                                            <a class="popup-with-move-anim" href="#filmDetail"><img class="img-responsive" src="@{{film.thu}}"></a>
                                        </div>
                                    </div>

                                    <div class="col-sm-8">
                                        <div class="festival-info">
                                            <h4>
                                                <a href="#filmDetail" class="popup-with-move-anim">@{{film.title}}</a>
                                            </h4>
                                            <p>
                                                @{{film.t_description}}
                                            </p>
                                            <span>@{{film.country + ' ' + film.date}}</span>

                                        </div>
                                        <form>

                                            <div class="form-group">
                                                <a  href="#deleteForm" class="btn btn-danger pull-right popup-with-move-anim" id="delete"> Delete</a>
                                                <a href="#editForm" class="btn btn-default pull-right popup-with-move-anim" id="edit" style="margin: 0 5px;"> Edit</a>
                                            </div>

                                        </form>


                                        <!-- filmDetail -->
                                        <div id="filmDetail" class="white-popup-block zoom-anim-dialog form-box mfp-hide" style="max-width: 800px;">
                                            <iframe width="100%" height="480" ng-src="@{{film.video | trustAsResourceUrl}}" frameborder="0" allowfullscreen></iframe>
                                            <div class="" style="padding: 40px;">
                                                <h4>@{{film.title}}</h4>
                                                <span>@{{film.country[0]}} | @{{film.date | date}} </span>
                                                <p>
                                                    @{{film.description}}
                                                </p>
                                            </div>
                                        </div>

                                        <!-- delete message -->
                                        <div id="deleteForm" class="white-popup-block zoom-anim-dialog form-box mfp-hide" style="max-width: 475px;">
                                            <div class="" style="padding: 20px;">
                                                <h4>Are you sure you want to delete this film</h4>

                                                <div class="form-group clearfix">
                                                    <input type="submit" class="btn btn-danger pull-right" value="Delete" id="delete">
                                               </div>
                                            </div>
                                        </div>


                                        <!-- edit form -->

                                        <div id="editForm" class="white-popup-block zoom-anim-dialog form-box mfp-hide" style="max-width: 650px;">
                                            <form style="padding: 20px 40px;">
                                                <p class="h4">Title</p>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" value="@{{film.title}}">
                                                </div>

                                                <hr style="border-color: #ddd">

                                                <div class="form-group">
                                                    <p class="h4">Tumb</p>
                                                    <div class="clearfix">
                                                        <div class="col-sm-3">
                                                            <img class="img-responsive" src="@{{film.thu}}">
                                                        </div>

                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                                <input class="form-control" type="file" name="pic" accept="image/*">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <hr style="border-color: #ddd">

                                                <div class="form-group">
                                                    <p class="h4">Description</p>
                                                    <textarea style="padding: 20px; max-height: 250px; height: 250px; min-width: 100%;">@{{film.t_description}}</textarea>
                                                </div>

                                                <div class="form-group clearfix">
                                                    <input type="submit" class="btn btn-success pull-right" value="Save">
                                                </div>
                                            </form>
                                        </div>


                                    </div>
                                </div>
                                <dir-pagination-controls pagination-id="filmPagi"></dir-pagination-controls>

                            </div>
                        </div>

                        <div id="upload-film" class="u-film">
                            <form ng-controller="filmsCtrl">
                                <div class="clearfix thump">
                                    <div class="col-sm-4">
                                        <div class="video-thu">
                                            <img src="assets/images/thumb.png">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <h4><i class="fa fa-file-image-o" aria-hidden="true"></i> Change Thumbnail</h4>
                                        <div class="form-group">
                                            <input class="form-control" type="file" name="pic" accept="image/*">
                                        </div>
                                    </div>
                                </div>
                                <hr style="border-color:#ddd">
                                <div class="clearfix upload">
                                    <h4><i class="fa fa-cloud-upload" aria-hidden="true"></i> Upload Video</h4>
                                    <div class="form-group">
                                        <input class="form-control" type="file" name="pic" accept="video/*">
                                    </div>

                                    <div class="form-group">
                                        <select class="form-control">
                                            <option ng-repeat="typ in type" value="@{{typ}}">@{{typ}}</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <h4>Description</h4>
                                        <textarea class="form-control" style="height: 250px" ></textarea>
                                    </div>

                                    <div class="form-group">
                                        <input class="btn btn-success pull-right" type="submit" value="Upload">
                                    </div>



                                </div>

                            </form>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
   