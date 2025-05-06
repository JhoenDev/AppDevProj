<!DOCTYPE html>
<html>
    <head>
        <title>E-Commerce</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <style>
            #Contact{
                margin-bottom: 0;
                padding-bottom: 0;
            }

            body{
                padding-top: 80px;
            }
        </style>
    </head>
    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"> E-Commerce </a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">Software</a></li>
                        <li><a href="#">Music</a></li>
                        <li><a href="#Contact">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <aside class="col-md-4">
            <div class="col-md-10 col-md-offset-1">
                <div class="list-group">
                    <a href="product.php" class="list-group-item" style="padding:0,margin:0;">
                        <div class="col-md-3" style="padding:0;margin:0;">
                            <img src="../images/cat.jpg" style="width:90px;height:100px;">
                        </div>
                        <div class="col-md-9" >
                            <div class="list-group-item-heading"  >
                                <h4>Php: 1.00</h4>
                                <h4>Pusa</h4>
                                <div class="clearfix"></div>
                            </div>
                            <p class="list-group-item-text">Lorem ipsum dolord do eiusmod</p>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </div>
            </div>

            <div class="col-md-10 col-md-offset-1">
                <div class="list-group">
                    <a href="product.php" class="list-group-item" style="padding:0,margin:0;">
                        <div class="col-md-3" style="padding:0;margin:0;">
                            <img src="../images/cat2.jpg" style="width:90px;height:100px;">
                        </div>
                        <div class="col-md-9" >
                            <div class="list-group-item-heading"  >
                                <h4>Php: 1.00</h4>
                                <h4>Pusa</h4>
                                <div class="clearfix"></div>
                            </div>
                            <p class="list-group-item-text">Lorem ipsum dolord do eiusmod</p>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </div>
            </div>

            <div class="col-md-10 col-md-offset-1">
                <div class="list-group">
                    <a href="product.php" class="list-group-item" style="padding:0,margin:0;">
                        <div class="col-md-3" style="padding:0;margin:0;">
                            <img src="../images/cat3.jpg" style="width:90px;height:100px;">
                        </div>
                        <div class="col-md-9" >
                            <div class="list-group-item-heading"  >
                                <h4>Php: 1.00</h4>
                                <h4>Pusa</h4>
                                <div class="clearfix"></div>
                            </div>
                            <p class="list-group-item-text">Lorem ipsum dolord do eiusmod</p>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </div>
            </div>

            <div class="col-md-10 col-md-offset-1">
                <div class="list-group">
                    <a href="product.php" class="list-group-item" style="padding:0,margin:0;">
                        <div class="col-md-3" style="padding:0;margin:0;">
                            <img src="../images/cat.jpg" style="width:90px;height:100px;">
                        </div>
                        <div class="col-md-9" >
                            <div class="list-group-item-heading"  >
                                <h4>Php: 1.00</h4>
                                <h4>Pusa</h4>
                                <div class="clearfix"></div>
                            </div>
                            <p class="list-group-item-text">Lorem ipsum dolord do eiusmod</p>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </div>
            </div>

        </aside>

        <header class="col-md-8">
            <div class="col-md-12">
                <div class="thumbnail">
                    <img src="../images/cat.jpg" style="width: 100%">
                    <div class="caption">
                        <h4 class="pull-right">Php: 1.00</h4>
                        <h4 class=""><a href="product.php">Pusa: Bogart Jr.</a></h4>
                        <div>
                            <button class="btn btn-primary" style="margin-left:10px; margin-bottom: 10px" data-target="#buy_me" data-toggle="modal">
                                Order Now
                            </button>
                            <div class="modal fade" id="buy_me">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button class="close" data-dismiss="modal">
                                                &times;
                                            </button>
                                            <h2 class="modal-title">
                                                Order Pusa
                                            </h2>
                                        </div>
                                        <div class="modal-body">
                                            <form class="">
                                                <div class="form-group">
                                                    <input type="text" class="form-control input-lg" placeholder="Enter Your Name">
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control input-lg" placeholder="Enter Your Email">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control input-lg" placeholder="Contact Number">
                                                </div>
                                                <div class="form-group">
                                                    <textarea class="form-control" rows="5" style="font-size:20px; color:gray;">Address...</textarea>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-danger" data-dismiss="modal">
                                                Submit Order
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="text-justify">
                            <strong>FS:</strong> Pusa <strong>RFS:</strong> magulo, makulet, mabaho, ayaw magpaligo, magastos, lagi gutom, agaw ng tulogan, masunget, malambing lang pag gotom, kumakain ipis <strong>Name:</strong> Bogart

                            <p class="text-justify">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            </p>
                        </p>
                    </div>
                </div>
            </div>
        </header>

        <div class="col-md-8 col-md-offset-4">
            <div class="col-md-12">
                <div class="well">
                    <div class="text-right">
                        <button class="btn btn-danger">Leave Comments</button>
                    </div>
                </div>

                <div class="well">
                    <span class="lead">Anonymous</span>
                    <span class="pull-right">1 hour ago</span>
                    <hr/>
                    <p>Mabait naman sa una spoiled na pag tumagal pero pwede na</p>
                </div>

                <div class="well">
                    <span class="lead">Kapit Bahay</span>
                    <span class="pull-right">3 days ago</span>
                    <hr/>
                    <p>Nangunguha ng ulam</p>
                </div>

                <div class="well">
                    <span class="lead">Dating Amo</span>
                    <span class="pull-right">5 days ago</span>
                    <hr/>
                    <p>Bakit binbenta nanaman to</p>
                </div>

                <div class="well">
                    <span class="lead">Product Owner</span>
                    <span class="pull-right">8 days ago</span>
                    <hr/>
                    <p>Bilin niyo na! Fast Transaction Only</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="page-header">
                <h3 class="text-center">Related Products</h3>
            </div>
            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="../images/cat.jpg" style="width: 100%">
                    <div class="caption">
                        <h4 class="pull-right">Php: 1.00</h4>
                        <h4 class=""><a href="product.php">Pusa</a></h4>
                        <p class="text-justify">
                            <strong>FS:</strong> Pusa <strong>RFS:</strong> magulo, makulet, mabaho, ayaw magpaligo, magastos, lagi gutom, agaw ng tulogan, masunget, malambing lang pag gotom, kumakain ipis <strong>Name:</strong> Bogart
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="../images/cat.jpg" style="width: 100%">
                    <div class="caption">
                        <h4 class="pull-right">Php: 1.00</h4>
                        <h4 class=""><a href="product.php">Pusa</a></h4>
                        <p class="text-justify">
                            <strong>FS:</strong> Pusa <strong>RFS:</strong> magulo, makulet, mabaho, ayaw magpaligo, magastos, lagi gutom, agaw ng tulogan, masunget, malambing lang pag gotom, kumakain ipis <strong>Name:</strong> Bogart
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="../images/cat.jpg" style="width: 100%">
                    <div class="caption">
                        <h4 class="pull-right">Php: 1.00</h4>
                        <h4 class=""><a href="product.php">Pusa</a></h4>
                        <p class="text-justify">
                            <strong>FS:</strong> Pusa <strong>RFS:</strong> magulo, makulet, mabaho, ayaw magpaligo, magastos, lagi gutom, agaw ng tulogan, masunget, malambing lang pag gotom, kumakain ipis <strong>Name:</strong> Bogart
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="../images/cat.jpg" style="width: 100%">
                    <div class="caption">
                        <h4 class="pull-right">Php: 1.00</h4>
                        <h4 class=""><a href="product.php">Pusa</a></h4>
                        <p class="text-justify">
                            <strong>FS:</strong> Pusa <strong>RFS:</strong> magulo, makulet, mabaho, ayaw magpaligo, magastos, lagi gutom, agaw ng tulogan, masunget, malambing lang pag gotom, kumakain ipis <strong>Name:</strong> Bogart
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-inverse " id="Contact">
            <ul class="nav navbar-nav navbar-left">
                <li><a data-target="#sendmessage" data-toggle="modal">julllienjhoen.alban@neu.edu.ph</a></li>
                <li><a href="#">jhoenshop.com</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right" style="margin-right: 4px">
                
                <li>
                    <a><button class="btn-link" data-target="#sendmessage" data-toggle="modal">
                        Send Message
                    </button></a>
                </li>
            </ul>
        </nav>

        <div class="modal fade" id="sendmessage">
            <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button class="close" data-dismiss="modal">
                                                &times;
                                            </button>
                                            <h2 class="modal-title">
                                                Send Message
                                            </h2>
                                        </div>
                                        <div class="modal-body">
                                            <form class="">
                                                <div class="form-group">
                                                    <input type="text" class="form-control input-lg" placeholder="Enter Your Name">
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control input-lg" placeholder="Enter Your Email">
                                                </div>
                                                <div class="form-group">
                                                    <textarea class="form-control" rows="5" placeholder="Type Message..." style="font-size:20px; color:gray;"></textarea>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-success" data-dismiss="modal">
                                                Send
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

        

    </body>
</html>