<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Hover User Details Template | PrepBootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="../css/bootstrap-3.3.6-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/volunteer_details.css" />
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <!--link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" /-->

    <script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
</head>
<body>
<div class="main-container">
    <div class="container">
    <div class="page-header">
        <h1><center>VOLUNTEERS</center></h1>
    </div>
    <div class="container">
        
        <div class="row">
            <div class="col-lg-4">
                <div class="form_hover" style="height:400px;">
                    <p style="text-align: center; margin-top: 20px;">
                        <img src="../img/girl1.jpe" alt="">
                    </p>
                    <div class="header">
                        <div class="blur"></div>
                        <div class="header-text" >
                            <div class="panel panel-success" style="height: 400px;margin-top:150px;">
                                <div class="panel-heading">
                                    <h3 style="color: #428BCA;">User Details</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        Last login Date:<b>02/09/2013</b>
                                    </div>
                                    <div class="form-group">
                                        Download Count:<b>104</b>
                                    </div>
                                    <div class="form-group">
                                        User Rating:<br />
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>
</div>
<style>
    .form_hover {
        padding: 0px;
        position: relative;
        overflow: hidden;
        height: 240px;
    }

        .form_hover:hover .header {
            opacity: 1;
            transform: translateY(-172px);
            -webkit-transform: translateY(-172px);
            -moz-transform: translateY(-172px);
            -ms-transform: translateY(-172px);
            -o-transform: translateY(-172px);
        }

        .form_hover img {
            z-index: 4;
        }

        .form_hover .header {
            position: absolute;
            top: 170px;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            transition: all 0.3s ease;
            width: 100%;
        }

        .form_hover .blur {
            height: 240px;
            z-index: 5;
            position: absolute;
            width: 100%;
        }

        .form_hover .caption-text {
            z-index: 10;
            color: #fff;
            position: absolute;
            height: 240px;
            text-align: center;
            top: -20px;
            width: 100%;
        }
</style>


<!-- Hover User Details - END -->

</div>

</body>
</html>