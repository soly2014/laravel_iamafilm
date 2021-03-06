  <nav class="navbar navbar-default">
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img class="img-responsive" src="assets/images/logo.png" style="margin-left: 20px;margin-top: 10px;"><span style="color: white;margin-left: 20px;margin-top: 10px;font-family: 'Comic Sans MS'"></span>
                </a>
            </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a id="modal-684021" href="#modal-container-684021" role="button" data-toggle="modal" > <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign up</a></li>
                    <li><a class="popup-with-move-anim" href="#test-form"><i class="fa fa-sign-in" aria-hidden="true"></i> login</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="assets/images/user.png">User Name <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="/index.html"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="profile.html"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                        <li><a href="#"><i class="fa fa-film" aria-hidden="true"></i> My Films</a></li>
                        <li><a href="#"><i class="fa fa-btc" aria-hidden="true"></i> Buy Coins</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a></li>
                      </ul>
                    </li>
                </ul>
        </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>


            <!-- sign up modal -->
            <!-- start modal -->
            <div class=" modal fade " id="modal-container-684021" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-admin">
                    <div class="modal-content">
                        <div class="modal-header">
                             
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                ×
                            </button>
                            <h4 class="modal-title" id="myModalLabel">
                

                                   <ul  class="nav nav-tabs">
                                        <li class="active">
                                    <a  href="#1b" data-toggle="tab">Director</a>
                                        </li>
                                        <li><a href="#2b" data-toggle="tab">Festival</a>
                                        </li>
                                      
                                    </ul>

                               <div class="tab-content clearfix">


                                        <!-- director tab  -->

                                          <div class="tab-pane active" id="1b"><br><br>
                                            <div class="row">
                                                <div class="col-md-6" style="padding:29px;"> 

                                        <form role="form" action="/signup" method="post" class="form-horizontal" id="sendform">
                                                                     {{ csrf_field() }}   

                                                        <div class="form-group {{ $errors->has('email')?'has-error':''}}">
                                                                        <label for="exampleInputEmail1">
                                                                            Email address
                                                                        </label>
                                                                        <input type="email" class="form-control" value="{{ old('email') }}" name="email" id="email"/>
                                                                        @if($errors->has('email'))
                                                                     <span class="help-block">Please correct the email</span>
                                                                        @endif

                                                                    </div>
                                                           <div class="form-group {{ $errors->has('password')?'has-error':''}}">
                                                                         
                                                                        <label for="exampleInputPassword1">
                                                                            Password
                                                                        </label>
                                                                        <input type="password" class="form-control" id="password" name="password" />
                                                                       @if($errors->has('password'))
                                                                     <span class="help-block">Please correct the password</span>
                                                                        @endif

                                                                    </div>

                                                </div>
                                                <div class="col-md-6" style="padding:15px;">

                                                                <div class="form-group" style="margin-top:92px;">
                                                                     
                                                                </div>
                                                                <div class="form-group {{ $errors->has('password_confirmation')?'has-error':''}}">
                                                                     
                                                                    <label for="exampleInputPassword1">
                                                                        Repeat Password
                                                                    </label>
                                                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" />
                                                                    @if($errors->has('password_confirmation'))
                                                                     <span class="help-block">Please correct the password_confirmation</span>
                                                                        @endif
                                                                </div>

                                                  

                                                </div>
                                            </div>

                                        <div class="row">
                                                <div class="col-md-6" style="padding:15px;">                                                        
                                                  
                                                            <div class="form-group {{ $errors->has('fname')?'has-error':''}}">
                                                                         
                                                                        <label for="exampleInputEmail1">
                                                                            First Name
                                                                        </label>
                                                                        <input type="text" value="{{ old('fname') }}" class="form-control" name="fname" id="fname" />
                                                                        @if($errors->has('fname'))
                                                                     <span class="help-block">Please correct the First Name</span>
                                                                        @endif
                                                                    </div>
                                                                
                                                            <div class="form-group {{ $errors->has('dob')?'has-error':''}}">
                                                
                                                                    <label for="exampleInputEmail1">
                                                                            Birth Date
                                                                        </label>
                                                                    <div class='input-group date' id='datetimepicker1'>
                                                
                                                                        <input type='text' value="{{ old('dob') }}" class="form-control" name="dob" id="dob" />
                                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                                                        </span></div>
                                                                        @if($errors->has('dob'))
                                                                     <span class="help-block">Please correct the Date Of Birth</span>
                                                                        @endif
                                                                    
                                                                </div>


                                                                <div class="form-group">
                                                                      <div class="form-group">
                                                                         
                                                                        <label for="exampleInputEmail1">
                                                                            Language
                                                                        </label>
                                                                        <select class="form-control" name="lang" id="lang">
                                                                            @foreach(Country::langList() as $lang)
                                                                            <option>{{ $lang }}</option>
                                                                            @endforeach
                                                                        </select> 
                                                                        
                                                                    </div>   
                                                                </div>
                                                            

                                                </div>
                                                <div class="col-md-6" style="padding:15px;">

                                                                <div class="form-group">
                                                                      <div class="form-group {{ $errors->has('lname')?'has-error':''}}">
                                                                         
                                                                        <label for="exampleInputEmail1">
                                                                            Last Name
                                                                        </label>
                                                                        <input type="text" value="{{ old('lname') }}" class="form-control" name="lname" id="lname" />
                                                                        @if($errors->has('lname'))
                                                                     <span class="help-block">Please correct the LAst Name</span>
                                                                        @endif
                                                                    </div>   
                                                                </div>
                                                                <div class="form-group {{ $errors->has('phone')?'has-error':''}}">
                                                                     
                                                                    <label for="exampleInputPassword1">
                                                                        Phone Number
                                                                    </label>
                                                                    <input type="tel" name="phones" class=".iti-flag form-control" id="phone" value="{{ old('phones') }}" placeholder="Add Your Phone Number" >
                                                                    @if($errors->has('phones'))
                                                                     <span class="help-block">Please correct the Phone Number</span>
                                                                        @endif<br>

                                                                </div>


                                                                <div class="form-group">
                                                                      <div class="form-group">
                                                                         
                                                                        <label for="exampleInputEmail1">
                                                                            Nationality
                                                                        </label>
                                                                        <select class="form-control" name="nation" id="nation">
                                                                            @foreach(Country::countryList() as $count)
                                                                            <option>{{ $count }}</option>
                                                                            @endforeach
                                                                        </select> 
                                                                        
                                                                    </div>   
                                                                </div>
                                                  

                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    
                                                <div class="checkbox">
                         
                                                     <label>
                                                        <input type="checkbox" name="accept_policy" id="accept_policy" value="0" /> I ACCEPT THE TERMS OF USE, PRIVACY POLICY & REFUNDS POLICY

                                                      </label>
                                                </div> 
                                                <div class="checkbox">
                         
                                                     <label>
                                                          <input type="checkbox" name="subscribed" id="subscribed" /> SUSCRIBE TO OUR BULLETIN

                                                      </label>
                                                </div> 
                                               <div class="checkbox">
                         
                                                     <label>
                                                          <input type="checkbox" name="confirmed" id="confirmed" value="0" /> CONFIRMATION E-MAIL AFTER EACH SUBMISSION

                                                      </label>
                                                </div> 
                                                                                          <div class="row">
                                              <div class="col-md-12" id="form-errors"></div>
                                          </div>                                                     

                                                <br>
                                                <button type="submit" class="btn btn-success">&nbsp; Submit &nbsp;</button>
                                                </form>

                                                </div>
                                            </div>
                                          </div>


                                         <!-- festival tab -->   
                                            <div class="tab-pane" id="2b">
                                               <h3>We use the class nav-pills instead of nav-tabs which automatically creates a background color for the tab</h3>
                                            </div>
                                    
                                </div>
                                        </h4>
                                    </div>
                                    <div class="modal-footer">
                                         
                                        <button type="button" class="btn btn-default" data-dismiss="modal">
                                            Close
                                        </button> 
                                                                            </div>
                                </div>
                                
                            </div>
                            
                        </div>

                        <!-- end sign up modal -->

                        <script type="text/javascript">
                            
                             $(function () {
                                   var bindDatePicker = function() {
                                        $(".date").datetimepicker({
                                        format:'YYYY-MM-DD',
                                            icons: {
                                                time: "fa fa-clock-o",
                                                date: "fa fa-calendar",
                                                up: "fa fa-arrow-up",
                                                down: "fa fa-arrow-down"
                                            }
                                        }).find('input:first').on("blur",function () {
                                            // check if the date is correct. We can accept dd-mm-yyyy and yyyy-mm-dd.
                                            // update the format if it's yyyy-mm-dd
                                            var date = parseDate($(this).val());

                                            if (! isValidDate(date)) {
                                                //create date based on momentjs (we have that)
                                                date = moment().format('YYYY-MM-DD');
                                            }

                                            $(this).val(date)
                                        });
                                    }
                                   
                                   var isValidDate = function(value, format) {
                                        format = format || false;
                                        // lets parse the date to the best of our knowledge
                                        if (format) {
                                            value = parseDate(value);
                                        }

                                        var timestamp = Date.parse(value);

                                        return isNaN(timestamp) == false;
                                   }
                                   
                                   var parseDate = function(value) {
                                        var m = value.match(/^(\d{1,2})(\/|-)?(\d{1,2})(\/|-)?(\d{4})$/);
                                        if (m)
                                            value = m[5] + '-' + ("00" + m[3]).slice(-2) + '-' + ("00" + m[1]).slice(-2);

                                        return value;
                                   }
                                   
                                   bindDatePicker();
                                 });
                        </script>

                        <!-- ajax form -->


                       <script type="text/javascript">
                          
                    
                    $(document).ready(function () {


                        $('#sendform').submit(function(event) {

                                        event.preventDefault();

                                        var url           = $('#sendform').attr('action');
                                        var email         = $('#email').val();
                                        var fname         = $('#fname').val();
                                        var lname         = $('#lname').val();
                                        var password         = $('#password').val();
                                        var password_confirmation         = $('#password_confirmation').val();
                                        var dob           = $('#dob').val();
                                        var phones        = $('#phone').val();
                                        var nation        = $('#nation').val();
                                        var lang              = $('#lang').val();
                                        var accept_policy     = $('#accept_policy').val();
                                        var subscribed        = $('#subscribed').val();
                                        var confirmed         = $('#confirmed').val();
                                       

                                       if ($('[name="subscribed"]').is(':checked')){

                                        var subscribed        = 1;

                                       }else{

                                        subscribed = 0;

                                       }


                                       if ($('[name="accept_policy"]').is(':checked')){

                                        var accept_policy        = 1;

                                       }else{

                                        accept_policy = 0;

                                       }


                                       if ($('[name="confirmed"]').is(':checked')){

                                        var confirmed        = 1;

                                       }else{

                                        confirmed = 0;

                                       }


                                        $.ajax({
                                            url: url,
                                            type: 'post',
                                            data:{'email':email,'fname':fname,'lname':lname,'dob':dob,'phones':phones,'nation':nation,'lang':lang,'accept_policy':accept_policy,'subscribed':subscribed,'confirmed':confirmed,'password':password,'password_confirmation':password_confirmation},
                                            dataType: "json",

                                            success:function(data) {
                                               
                                               $('#modal-container-684021').modal('toggle');

                                            
                                            },
                                            error:function(error) {

                                                    //process validation errors here.
                                                    var errors = error.responseJSON; //this will get the errors response data.
                                                    //show them somewhere in the markup
                                                    //e.g
                                                    errorsHtml = '<div class="alert alert-danger"><ul>';

                                                    $.each( errors, function( key, value ) {
                                                        errorsHtml += '<li>' + value[0] + '</li>'; //showing only the first error.
                                                    });
                                                    errorsHtml += '</ul></div>';
                                                        
                                                    $( '#form-errors' ).html( errorsHtml ); //appending to a <div id="form-errors"></div> inside form
                                                   // alert(errorsHtml); //appending to a <div id="form-errors"></div> inside form
                                                                                                        


                                            
                                                 
                                           
                                            }
                                        });

                         });

                 });       


                      </script>
                        


