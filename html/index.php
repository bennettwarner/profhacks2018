<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Bootstrap 3 Admin</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/yeti/bootstrap.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
        <!-- header -->
        <div id="top-nav" class="navbar navbar-inverse navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">FaceFinder 84™</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="login/signup.php"><i class="glyphicon glyphicon-flash"></i> Register</a>
                        </li>
                        <li>
                            <a href="login/main_login.php"><i class="glyphicon glyphicon-lock"></i> Login</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /container -->
        </div>
        <!-- /Header -->
        <!-- Main -->
        <div class="container-fluid">
            <div class="row">
                <!-- /col-3 -->
                <div class="col-sm-12">
                    <!-- column 2 -->
                    <a href="#"><strong><i class="glyphicon glyphicon-dashboard"></i> My Dashboard</strong></a>
                    <hr>
                    <div class="row">
                        <!-- center left-->
                        <div class="col-md-6">
                            <div class="well">Inbox Messages 
                                <span class="badge pull-right">3</span>
                            </div>
                            <hr>
                            <div class="btn-group btn-group-justified">
                                <a href="#" class="btn btn-primary col-sm-3"><i class="glyphicon glyphicon-plus"></i><br> New Case</a>
                                <a href="#" class="btn btn-primary col-sm-3"><i class="glyphicon glyphicon-cloud"></i><br> Database</a>
                                <a href="#" class="btn btn-primary col-sm-3"><i class="glyphicon glyphicon-cog"></i><br> Tools</a>
                                <a href="#" class="btn btn-primary col-sm-3"><i class="glyphicon glyphicon-question-sign"></i><br> Help</a>
                            </div>
                            <hr>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4>Reports</h4>
                                </div>
                                <div class="panel-body">
                                    <small>Success</small>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%">
                                            <span class="sr-only">72% Complete</span>
                                        </div>
                                    </div>
                                    <small>Info</small>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                    <small>Warning</small>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                    <small>Danger</small>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <!--/panel-body-->
                            </div>
                            <!--/panel-->
                            <hr>
                            <!--tabs-->
                            <div class="panel">
                                <ul class="nav nav-tabs" id="myTab">
                                    <li class="active">
                                        <a href="#profile" data-toggle="tab">Profile</a>
                                    </li>
                                    <li>
                                        <a href="#messages" data-toggle="tab">Messages</a>
                                    </li>
                                    <li>
                                        <a href="#settings" data-toggle="tab">Settings</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active well" id="profile">
                                        <h4><i class="glyphicon glyphicon-user"></i></h4> Lorem profile dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                                        <p>Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis nisi.</p>
                                    </div>
                                    <div class="tab-pane well" id="messages">
                                        <h4><i class="glyphicon glyphicon-comment"></i></h4> Message ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                                        <p>Quisque mauris augu.</p>
                                    </div>
                                    <div class="tab-pane well" id="settings">
                                        <h4><i class="glyphicon glyphicon-cog"></i></h4> Lorem settings dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                                        <p>Quisque mauris augue, molestie.</p>
                                    </div>
                                </div>
                            </div>
                            <!--/tabs-->
                            <hr>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4>New Requests</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item active">Hosting virtual mailbox serv..</a>
                                        <a href="#" class="list-group-item">Dedicated server doesn't..</a>
                                        <a href="#" class="list-group-item">RHEL 6 install on new..</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/col-->
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4>Notices</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="alert alert-info">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        This is a dismissable alert.. just sayin'.
                                    </div>
                                    <p>This is a dashboard-style layout that uses Bootstrap 3. You can use this template as a starting point to create something more unique.</p>
                                    <p>Visit the Bootstrap Playground at <a href="http://bootply.com">Bootply</a> to tweak this layout or discover more useful code snippets.</p>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Visits</th>
                                            <th>ROI</th>
                                            <th>Source</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>45</td>
                                            <td>2.45%</td>
                                            <td>Direct</td>
                                        </tr>
                                        <tr>
                                            <td>289</td>
                                            <td>56.2%</td>
                                            <td>Referral</td>
                                        </tr>
                                        <tr>
                                            <td>98</td>
                                            <td>25%</td>
                                            <td>Type</td>
                                        </tr>
                                        <tr>
                                            <td>..</td>
                                            <td>..</td>
                                            <td>..</td>
                                        </tr>
                                        <tr>
                                            <td>..</td>
                                            <td>..</td>
                                            <td>..</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <i class="glyphicon glyphicon-wrench pull-right"></i>
                                        <h4>Post Request</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <form class="form form-vertical">
                                        <div class="control-group">
                                            <label>Name</label>
                                            <div class="controls">
                                                <input type="text" class="form-control" placeholder="Enter Name">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label>Message</label>
                                            <div class="controls">
                                                <textarea class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label>Category</label>
                                            <div class="controls">
                                                <select class="form-control">
                                                    <option>options</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label></label>
                                            <div class="controls">
                                                <button type="submit" class="btn btn-primary">
                                                    Post
</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--/panel content-->
                            </div>
                            <!--/panel-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Engagement</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="col-xs-4 text-center">
                                        <img src="http://placehold.it/80/BBBBBB/FFF" class="img-circle img-responsive">
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <img src="http://placehold.it/80/EFEFEF/555" class="img-circle img-responsive">
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <img src="http://placehold.it/80/EEEEEE/222" class="img-circle img-responsive">
                                    </div>
                                </div>
                            </div>
                            <!--/panel-->
                        </div>
                        <!--/col-span-6-->
                    </div>
                    <!--/row-->
                    <hr>
                    <a href="#"><strong><i class="glyphicon glyphicon-comment"></i> Discussions</strong></a>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="#"><i class="glyphicon glyphicon-flash"></i> <small>(3 mins ago)</small> The 3rd page reports don't contain any links. Does anyone know why..</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#"><i class="glyphicon glyphicon-flash"></i> <small>(1 hour ago)</small> Hi all, I've just post a report that show the relationship betwe..</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#"><i class="glyphicon glyphicon-heart"></i> <small>(2 hrs ago)</small> Paul. That document you posted yesterday doesn't seem to contain the over..</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#"><i class="glyphicon glyphicon-heart-empty"></i> <small>(4 hrs ago)</small> The map service on c243 is down today. I will be fixing the..</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#"><i class="glyphicon glyphicon-heart"></i> <small>(yesterday)</small> I posted a new document that shows how to install the services layer..</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#"><i class="glyphicon glyphicon-flash"></i> <small>(yesterday)</small> ..</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/col-span-9-->
            </div>
        </div>
        <!-- /Main -->
        <footer class="text-center">This service is provided by 
            <a href="http://streamforcemedia.com/"><strong>StreamForce Media</strong></a>
        </footer>
        <div class="modal" id="addWidgetModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Add Widget</h4>
                    </div>
                    <div class="modal-body">
                        <p>Add a widget stuff here..</p>
                    </div>
                    <div class="modal-footer">
                        <a href="#" data-dismiss="modal" class="btn">Close</a>
                        <a href="#" class="btn btn-primary">Save changes</a>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dalog -->
        </div>
        <!-- /.modal -->
        <!-- script references -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html> 
