@extends('layouts.master')




@section('content')



  @include('layouts.nav')

    <!-- form itself -->
    <div id="test-form" class="white-popup-block zoom-anim-dialog form-box mfp-hide">
        <form>
            <div class="form-body">

                <div class="form-group">
                    <h5>
                        <i class="fa fa-user" aria-hidden="true"></i>
                        Your Email:
                    </h5><input class="form-control" type="email" name="email" placeholder="Email..." autofocus required>
                </div>

                <div class="form-group">
                   <h5>
                        <i class="fa fa-lock" aria-hidden="true"></i>Your Password:
                   </h5>
                   <input class="form-control" type="password" name="password" placeholder="Password" autofocus required>
                </div>

                <div class="form-group">
                    <input type="checkbox"> Remeber me.
                    <input class="pull-right btn btn-primary" type="submit" name="..." value="Sign in" autofocus required>
                </div>

                <div class="form-group">
                    <a href="#" onclick="forgetPass()">Forget your password</a>
                </div>
            </div>
        </form>

        <div class="forget-pass form-body">
            <form>
                <h4>Put your email to send new Password</h4>
                <div class="form-group">
                    <input type="text" name=".." placeholder="Your Email..." class="form-control">
                </div>

                <div class="form-group">
                    <input type="submit" name=".." value="Back" class="back btn btn-primary pull-left">
                    <input type="submit" name=".." value="Submit" class="btn btn-primary pull-right">
                </div>
            </form>
        </div>

    </div>


<!--    <section id="map" style="height:400px;"></section>-->

    <section class="tabs padding" id="tabs">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-7">
                    <div class="tap">

                        <div class="col-sm-3">
                            <ul class="tabs">
                                <li class="active">Festivals</li>
                                <li>Films</li>
                            </ul>
                        </div>

                        <div class="col-sm-9">
                            <div class="box">


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
                                                <div class="films-filter festival-filter" data-ng-model='festivalFilter'>
                                                    <span class="active" data-ng-click="festivalFilter = {type: 'all'}">All</span>
                                                    <span data-ng-click="doSort('date') " >Date</span>
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
                                            </div>

                                            <span class="@{{festival.type[0]}}"></span>
                                        </div>
                                        <dir-pagination-controls pagination-id="festPagi"></dir-pagination-controls>
                                    </div>
                                </div>
                                <!-- festivalCtrlEnd -->

                                <!-- FilmsCtrlStart -->
                                <div id="films" ng-controller="filmsCtrl">
                                   <h4 class="text-center">Films</h4>
                                    <div class="films-filter" data-ng-model='filmFilter'>
                                        <span class="active" data-ng-click="doSort('date')">Date</span>
                                        <span data-ng-click="doSort('country')">Country</span>
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

                                    <div class="film-box" dir-paginate="
                                       film in films
                                       | filter: filmFilter
                                       | orderBy: sortBy: reverse
                                       | itemsPerPage: pageSize"
                                       pagination-id="filmPagi">
                                        <div class="col-sm-4">
                                            <div class="festival-img">
                                                <img class="img-responsive" src="@{{film.thu}}">
                                            </div>
                                        </div>

                                        <div class="col-sm-8">
                                            <div class="festival-info">
                                                <h4>
                                                    @{{film.title}}
                                                </h4>
                                                <p>
                                                    @{{film.t_description}}
                                                </p>
                                                <span>@{{film.country + ' ' + film.date}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <dir-pagination-controls pagination-id="filmPagi"></dir-pagination-controls>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="box" data-ng-controller="directorListCtrl">
                        <div id="map" style="height:350px"></div>

                        <table class="table table-bordered table-hover">
                            <tr>
                                <th>Profile Pic</th>
                                <th>Director Name</th>
                                <th>Country</th>
                            </tr>
                            <tr class="text-center" data-ng-repeat="director in directorList">
                                <td><img class="img-circle" width="50" height="50" src="@{{director.profilePic}}"></td>
                                <td>@{{director.name}}</td>
                                <td>@{{director.country}} </td>
                            </tr>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </section>


   @endsection