<!DOCTYPE html>
<html lang="en">


<head>
    <title>Sales Page</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="EEducation master is one of the best eEducational html template, it's suitable for all eEducation websites like university,college,school,online eEducation,tution center,distance eEducation,computer eEducation">
    <meta name="keyword" content="eEducation html template, university template, college template, school template, online eEducation template, tution center template">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="{{ asset('admin') }}/css/font-awesome.min.css">
    <!-- ALL CSS FILES -->
    <link href="{{ asset('admin') }}/css/materialize.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/css/bootstrap.css" rel="stylesheet" />
    <link href="{{ asset('admin') }}/css/style.css" rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="{{ asset('admin') }}/css/style-mob.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <!--== MAIN CONTRAINER ==-->
    <div class="container-fluid sb1">
        <div class="row">
            <!--== LOGO ==-->
            <div class="col-md-2 col-sm-3 col-xs-6 sb1-1">
                <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
                <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
                {{-- <h3>Company Logo</h3> --}}
                
            </div>
            <!--== SEARCH ==-->
            <div class="col-md-6 col-sm-6 mob-hide">
                <form class="app-search">
                    <input type="text" placeholder="Search..." class="form-control">
                    <a href="#"><i class="fa fa-search"></i></a>
                </form>
            </div>
            <!--== NOTIFICATION ==-->
            <div class="col-md-2 tab-hide">
                <div class="top-not-cen">
                    <a class='waves-effect btn-noti' href="admin-all-enquiry.html" title="all enquiry messages"><i class="fa fa-commenting-o" aria-hidden="true"></i><span>5</span></a>
                    <a class='waves-effect btn-noti' href="admin-course-enquiry.html" title="course booking messages"><i class="fa fa-envelope-o" aria-hidden="true"></i><span>5</span></a>
                    <a class='waves-effect btn-noti' href="admin-admission-enquiry.html" title="admission enquiry"><i class="fa fa-tag" aria-hidden="true"></i><span>5</span></a>
                </div>
            </div>
            <!--== MY ACCCOUNT ==-->
            <div class="col-md-2 col-sm-3 col-xs-6">
                <!-- Dropdown Trigger -->
                <a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'><img src="{{ asset('admin') }}/images/user/6.png" alt="" />My Account <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>

                <!-- Dropdown Structure -->
                <ul id='top-menu' class='dropdown-content top-menu-sty'>
                    <li><a href="admin-panel-setting.html" class="waves-effect"><i class="fa fa-cogs" aria-hidden="true"></i>Admin Setting</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#" class="ho-dr-con-last waves-effect"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            <div class="sb2-1">
                <!--== USER INFO ==-->
                <div class="sb2-12">
                    <ul>
                        <li><img src="{{ asset('admin') }}/images/placeholder.jpg" alt="">
                        </li>
                        <li>
                            <h5>Showkat Osman<span> Software Engineer</span></h5>
                        </li>
                        <li></li>
                    </ul>
                </div>
                <!--== LEFT MENU ==-->
                <div class="sb2-13">
                    <ul class="collapsible" data-collapsible="accordion">
                        {{-- <li><a href="admin.html" class="menu-active"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a> --}}
                        </li>
						
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book" aria-hidden="true"></i>Sales</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ URL::to ("addsales") }}">Add Sales</a>
                                    </li>
                                    <li><a href="{{ URL::to ("managesales") }}">Manage Sales</a>
                                    </li>
                                  
                                </ul>
                            </div>
                        </li>
                       
                    </ul>
                </div>
            </div>

            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                <!--== breadcrumbs ==-->
                <!--== BODY INNER CONTAINER ==-->
            

                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp admin-form">
				<div class="sb2-2-add-blog sb2-2-1">
                    <h2>Add Coupon</h2>
                    <p>This PromoCode will capable for one time by spend 15000 BDT then you will get 5000 BDT. To get new Promo Code
                        <a class="btn btn-primary" href="{{ URL::to('coupon') }}">Click Here</a>
                    </p>
                    



                   

                    <div class="tab-content">
                        <div id="home" class="tab-pane fade active in">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Order Details</h4>
                                    <p>You can use your Promo Code for 15000 BDT expend</p>

                                </div>
                            </div>
                        </div>
                    </div>


                                    <h3>Coupons Codes:</h3>
                                    <ul>
                                        @foreach ($coupons as $item)
                                        <li>{{ $item->coupon_code }}</li>
                                            
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="bor">
									{{-- <form method="post" action="{{ route('order_create') }}"> --}}
									<form method="post" action="{{ route('manage.sell.store') }}">
                                    @csrf
                                        <div class="row">
                                            <ul>
                                            @foreach ($products as $product)
                                            <li>
                                                <input type="checkbox" id="{{ $product->name }}"  name="products[]" value="{{ $product->price }}">
                                                <label for="{{ $product->name }}"> {{ $product->name }}  {{ $product->price }}</label>
                                            </li>
                                            @endforeach
                                        </ul>

                                            <div class="input-field col s12">
                                                <input type="text" name="user_name" value="" class="validate">
                                                <label class="">Customer Name</label>
                                            </div>
                                            @if ($coupon)
                                            <div class="input-field col s12">
                                                <input type="text" name="coupon_code" value="" class="validate">
                                                <label class="">Coupon code</label>
                                            </div>
                                            @endif
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" class="waves-button-input" value="Submit"></i>
                                           
                                    </form>
                                </div>
                            

               {{--  Main Content --}}

               
               

    <!--Import jQuery before materialize.js-->
    <script src="{{ asset('admin') }}/js/main.min.js"></script>
    <script src="{{ asset('admin') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('admin') }}/js/materialize.min.js"></script>
    <script src="{{ asset('admin') }}/js/custom.js"></script>
</body>


</html>