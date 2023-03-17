<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Yayasan Era Suria</title>
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{url('')}}/adminlte3/plugins/fontawesome-free/css/all.min.css">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="{{url('')}}/adminlte3/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{url('')}}/adminlte3/dist/css/adminlte.min.css">
        <link href="https://lh3.googleusercontent.com/p/AF1QipMQds0kV3gb_Q_wf94PSJPMVhe7Yv9nud8XIfer=s1360-w1360-h1020" rel="shortcut icon" />
        <style>
            .text-yes{
                color:#f2783f;
            }
    
            svg {
                position: absolute;
                top: 50%;
                left: 50%;
                margin-top: -250px;
                margin-left: -400px;
            }
            .message-box {
                height: 200px;
                width: 390px;
                position: absolute;
                top: 50%;
                left: 50%;
                margin-top: -100px;
                margin-left: 50px;
                /* color: #FFF; */
                font-family: Roboto;
                font-weight: 300;
            }
            .message-box h1 {
                font-size: 53px;
                line-height: 46px;
                margin-bottom: 40px;
            }
    
            #Polygon-1 , #Polygon-2 , #Polygon-3 , #Polygon-4 , #Polygon-4, #Polygon-5 {
                animation: float 1s infinite ease-in-out alternate;
            }
            #Polygon-2 {
                animation-delay: .2s; 
            }
            #Polygon-3 {
                animation-delay: .4s; 
            }
            #Polygon-4 {
                animation-delay: .6s; 
            }
            #Polygon-5 {
                animation-delay: .8s; 
            }
    
            @keyframes float {
                100% {
                    transform: translateY(20px);
                }
            }
            @media (max-width: 450px) {
                svg {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    margin-top: -250px;
                    margin-left: -190px;
                }
                .message-box {
                    top: 50%;
                    left: 50%;
                    margin-top: -100px;
                    margin-left: -190px;
                    text-align: center;
                }
            }
        </style>
    </head>

    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="header">
                <div>
                    <svg width="380px" height="500px" viewBox="0 0 837 1045" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                            <path d="M353,9 L626.664028,170 L626.664028,487 L353,642 L79.3359724,487 L79.3359724,170 L353,9 Z" id="Polygon-1" stroke="#047fb275" stroke-width="6" sketch:type="MSShapeGroup"></path>
                            <path d="M78.5,529 L147,569.186414 L147,648.311216 L78.5,687 L10,648.311216 L10,569.186414 L78.5,529 Z" id="Polygon-2" stroke="#EF4A5B" stroke-width="6" sketch:type="MSShapeGroup"></path>
                            <path d="M773,186 L827,217.538705 L827,279.636651 L773,310 L719,279.636651 L719,217.538705 L773,186 Z" id="Polygon-3" stroke="#795D9C" stroke-width="6" sketch:type="MSShapeGroup"></path>
                            <path d="M639,529 L773,607.846761 L773,763.091627 L639,839 L505,763.091627 L505,607.846761 L639,529 Z" id="Polygon-4" stroke="#F2773F" stroke-width="6" sketch:type="MSShapeGroup"></path>
                            <path d="M281,801 L383,861.025276 L383,979.21169 L281,1037 L179,979.21169 L179,861.025276 L281,801 Z" id="Polygon-5" stroke="#36B455" stroke-width="6" sketch:type="MSShapeGroup"></path>
                        </g>
                    </svg>
                </div>
            </div>

            <div class="card">
                <div class="card-body login-card-body">
                    <p class="mb-0 text-center"><img src="{{ url('yesimage/yes.png') }}" class="profile-user-img img-fluid" style="border: 0px;"></p>
                    <p class="login-box-msg">Sign in to start your session</p>

                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                            @error('email')
                            <div>
                                <span class="invalid-feedback text-danger">{{ $message }}</span>
                            </div>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            @error('password')
                                <span class="invalid-feedback text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember">
                                    <label for="remember">Remember Me</label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                </div>
            <!-- /.login-card-body -->
            </div>
        </div>
        <!-- /.login-box -->

        <!-- jQuery -->
        <script src="{{url('')}}/adminlte3/plugins/jquery/jquery.min.js"></script>
        <script src="{{url('')}}/adminlte3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{url('')}}/adminlte3/dist/js/adminlte.min.js"></script>
    </body>
</html>
