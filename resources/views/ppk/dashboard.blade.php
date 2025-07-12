@extends('layouts.navbar')
@section('title', 'Dashboard PPK')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>Dashboard Pejabat Pembuat Komitmen (PPK)</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('bendahara.dashboard') }}">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('cuba/assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                    </svg></a></li>
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">PPK</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid default-dashboard">
            <div class="row widget-grid">
                <div class="col-xxl-12 col-sm-6 box-col-6">
                    <div class="card profile-box">
                        <div class="card-body">
                            <div class="d-flex media-wrapper justify-content-between">
                                <div class="flex-grow-1">
                                    <div class="greeting-user">
                                        <h2 class="f-w-600">Welcome {{ Auth::user()->name }}!</h2>
                                        <p>KALWEDO!</p>
                                        <div class="whatsnew-btn"><a class="btn btn-outline-white" href="user-profile.html"
                                                target="_blank">View Profile</a></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="clockbox"><svg id="clock" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 600 600">
                                            <g id="face">
                                                <circle class="circle" cx="300" cy="300" r="253.9"></circle>
                                                <path class="hour-marks"
                                                    d="M300.5 94V61M506 300.5h32M300.5 506v33M94 300.5H60M411.3 107.8l7.9-13.8M493 190.2l13-7.4M492.1 411.4l16.5 9.5M411 492.3l8.9 15.3M189 492.3l-9.2 15.9M107.7 411L93 419.5M107.5 189.3l-17.1-9.9M188.1 108.2l-9-15.6">
                                                </path>
                                                <circle class="mid-circle" cx="300" cy="300" r="16.2"></circle>
                                            </g>
                                            <g id="hour">
                                                <path class="hour-hand" d="M300.5 298V142"></path>
                                                <circle class="sizing-box" cx="300" cy="300" r="253.9"></circle>
                                            </g>
                                            <g id="minute">
                                                <path class="minute-hand" d="M300.5 298V67"> </path>
                                                <circle class="sizing-box" cx="300" cy="300" r="253.9"></circle>
                                            </g>
                                            <g id="second">
                                                <path class="second-hand" d="M300.5 350V55"></path>
                                                <circle class="sizing-box" cx="300" cy="300" r="253.9">
                                                </circle>
                                            </g>
                                        </svg></div>
                                    <div class="badge f-10 p-0" id="txt"></div>
                                </div>
                            </div>
                            <div class="cartoon"><img class="img-fluid"
                                    src="{{ asset('cuba/assets/images/dashboard/cartoon.svg') }}"
                                    alt="vector women with leptop">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-3 col-sm-6 box-col-3">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card widget-1">
                                <div class="card-body">
                                    <div class="widget-content">
                                        <div class="widget-round success">
                                            <div class="bg-round"><svg>
                                                    <use href="{{ asset('cuba/assets/svg/icon-sprite.svg#c-revenue') }}">
                                                    </use>
                                                </svg><svg class="half-circle svg-fill">
                                                    <use href="{{ asset('cuba/assets/svg/icon-sprite.svg#halfcircle') }}">
                                                    </use>
                                                </svg></div>
                                        </div>
                                        <div>
                                            <h4>Rp<span class="counter" data-target="45195">0</span></h4><span
                                                class="f-light">TOTAL PERMINTAAN GU</span>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card widget-1">
                                    <div class="card-body">
                                        <div class="widget-content">
                                            <div class="widget-round success">
                                                <div class="bg-round"><svg>
                                                        <use
                                                            href="{{ asset('cuba/assets/svg/icon-sprite.svg#c-customer') }}">
                                                        </use>
                                                    </svg><svg class="half-circle svg-fill">
                                                        <use
                                                            href="{{ asset('cuba/assets/svg/icon-sprite.svg#halfcircle') }}">
                                                        </use>
                                                    </svg></div>
                                            </div>
                                            <div>
                                                <h4> <span class="counter" data-target="845">0</span>+</h4><span
                                                    class="f-light">Customers</span>
                                            </div>
                                        </div>
                                        <div class="font-danger f-w-500"><i class="bookmark-search me-1"
                                                data-feather="trending-down"></i><span class="txt-danger">-40%</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-3 col-sm-6 box-col-3">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card widget-1">
                                <div class="card-body">
                                    <div class="widget-content">
                                        <div class="widget-round warning">
                                            <div class="bg-round"><svg>
                                                    <use href="{{ asset('cuba/assets/svg/icon-sprite.svg#c-profit') }}">
                                                    </use>
                                                </svg><svg class="half-circle svg-fill">
                                                    <use href="{{ asset('cuba/assets/svg/icon-sprite.svg#halfcircle') }}">
                                                    </use>
                                                </svg></div>
                                        </div>
                                        <div>
                                            <h4> <span class="counter" data-target="80">0</span>%</h4><span
                                                class="f-light">Profit</span>
                                        </div>
                                    </div>
                                    <div class="font-danger f-w-500"><i class="bookmark-search me-1"
                                            data-feather="trending-down"></i><span class="txt-danger">-20%</span></div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card widget-1">
                                    <div class="card-body">
                                        <div class="widget-content">
                                            <div class="widget-round primary">
                                                <div class="bg-round"><svg class="fill-primary">
                                                        <use
                                                            href="{{ asset('cuba/assets/svg/icon-sprite.svg#c-invoice') }}">
                                                        </use>
                                                    </svg><svg class="half-circle svg-fill">
                                                        <use
                                                            href="{{ asset('cuba/assets/svg/icon-sprite.svg#halfcircle') }}">
                                                        </use>
                                                    </svg></div>
                                            </div>
                                            <div>
                                                <h4 class="counter" data-target="10905">0</h4><span
                                                    class="f-light">Invoices</span>
                                            </div>
                                        </div>
                                        <div class="font-success f-w-500"><i class="bookmark-search me-1"
                                                data-feather="trending-up"></i><span class="txt-success">+50%</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-3 col-sm-6 box-col-3">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card widget-1">
                                <div class="card-body">
                                    <div class="widget-content">
                                        <div class="widget-round warning">
                                            <div class="bg-round"><svg>
                                                    <use href="{{ asset('cuba/assets/svg/icon-sprite.svg#c-profit') }}">
                                                    </use>
                                                </svg><svg class="half-circle svg-fill">
                                                    <use href="{{ asset('cuba/assets/svg/icon-sprite.svg#halfcircle') }}">
                                                    </use>
                                                </svg></div>
                                        </div>
                                        <div>
                                            <h4> <span class="counter" data-target="80">0</span>%</h4><span
                                                class="f-light">Profit</span>
                                        </div>
                                    </div>
                                    <div class="font-danger f-w-500"><i class="bookmark-search me-1"
                                            data-feather="trending-down"></i><span class="txt-danger">-20%</span></div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card widget-1">
                                    <div class="card-body">
                                        <div class="widget-content">
                                            <div class="widget-round primary">
                                                <div class="bg-round"><svg class="fill-primary">
                                                        <use
                                                            href="{{ asset('cuba/assets/svg/icon-sprite.svg#c-invoice') }}">
                                                        </use>
                                                    </svg><svg class="half-circle svg-fill">
                                                        <use
                                                            href="{{ asset('cuba/assets/svg/icon-sprite.svg#halfcircle') }}">
                                                        </use>
                                                    </svg></div>
                                            </div>
                                            <div>
                                                <h4 class="counter" data-target="10905">0</h4><span
                                                    class="f-light">Invoices</span>
                                            </div>
                                        </div>
                                        <div class="font-success f-w-500"><i class="bookmark-search me-1"
                                                data-feather="trending-up"></i><span class="txt-success">+50%</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-xxl-8 box-col-12">
                    <div class="row">
                        <div class="col-xl-3 col-hr-6 col-sm-6">
                            <div class="card widget-11 widget-hover">
                                <div class="card-body">
                                    <div class="common-align justify-content-start">
                                        <div class="analytics-tread bg-light-primary"><svg class="fill-primary">
                                                <use href="../assets/svg/icon-sprite.svg#analytics-user"></use>
                                            </svg></div>
                                        <div> <span class="c-o-light">Total Employees</span>
                                            <h4 class="counter" data-target="356">0</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-hr-6 col-sm-6">
                            <div class="card widget-11 widget-hover">
                                <div class="card-body">
                                    <div class="common-align justify-content-start">
                                        <div class="analytics-tread bg-light-secondary"><svg class="fill-secondary">
                                                <use href="../assets/svg/icon-sprite.svg#hire-candidate"></use>
                                            </svg></div>
                                        <div> <span class="c-o-light">Hired Candidates</span>
                                            <h4 class="counter" data-target="100">0</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-hr-6 col-sm-6">
                            <div class="card widget-11 widget-hover">
                                <div class="card-body">
                                    <div class="common-align justify-content-start">
                                        <div class="analytics-tread bg-light-warning"><svg class="fill-warning">
                                                <use href="../assets/svg/icon-sprite.svg#gross-salary"></use>
                                            </svg></div>
                                        <div> <span class="c-o-light">Gross Salary</span>
                                            <h4 class="counter" data-target="562210">0</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-hr-6 col-sm-6">
                            <div class="card widget-11 widget-hover">
                                <div class="card-body">
                                    <div class="common-align justify-content-start">
                                        <div class="analytics-tread bg-light-success"><svg class="fill-success">
                                                <use href="../assets/svg/icon-sprite.svg#new-employee"></use>
                                            </svg></div>
                                        <div> <span class="c-o-light">New Employee</span>
                                            <h4 class="counter" data-target="70">0</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        {{-- <div class="col-xxl-12 col-md-6 box-col-6">
                            <div class="card heading-space">
                                <div class="card-header card-no-border">
                                    <div class="header-top">
                                        <h5>Employee List</h5>
                                        <div class="card-header-right-icon">
                                            <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle"
                                                    id="employeeList" type="button" data-bs-toggle="dropdown"
                                                    aria-expanded="false"><i class="icon-more-alt"></i></button>
                                                <div class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="employeeList"><a class="dropdown-item"
                                                        href="#!">This Month</a><a class="dropdown-item"
                                                        href="#!">Previous Month</a><a class="dropdown-item"
                                                        href="#!">Last 3 Months</a><a class="dropdown-item"
                                                        href="#!">Last 6 Months</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0 pt-0 seller-table">
                                    <div class="recent-table table-responsive custom-scrollbar employee-list-table">
                                        <table class="table" id="employee-list">
                                            <thead>
                                                <tr>
                                                    <th> </th>
                                                    <th>Name</th>
                                                    <th>Employees ID</th>
                                                    <th>Email ID</th>
                                                    <th>Joining Date</th>
                                                    <th>Role </th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="inbox-data">
                                                    <td> </td>
                                                    <td>
                                                        <div class="common-flex align-items-center"><img
                                                                class="img-fluid rounded-circle"
                                                                src="../assets/images/dashboard-11/user/12.jpg"
                                                                alt="user"><a class="f-w-500"
                                                                href="user-list.html">Wade Warren</a></div>
                                                    </td>
                                                    <td>#45812</td>
                                                    <td>wade.warr@co.in</td>
                                                    <td>20 Jun,2024</td>
                                                    <td>Web Designer</td>
                                                    <td>
                                                        <div class="common-align gap-2 justify-content-start">
                                                            <div class="square-white"><svg>
                                                                    <use href="../assets/svg/icon-sprite.svg#hr-pen">
                                                                    </use>
                                                                </svg></div>
                                                            <div class="square-white trash-3"><svg>
                                                                    <use href="../assets/svg/icon-sprite.svg#hr-trash">
                                                                    </use>
                                                                </svg></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td> </td>
                                                    <td>
                                                        <div class="common-flex align-items-center"><img
                                                                class="img-fluid rounded-circle"
                                                                src="../assets/images/dashboard/user/6.jpg"
                                                                alt="user"><a class="f-w-500"
                                                                href="user-list.html">Michael Mit</a></div>
                                                    </td>
                                                    <td>#58698</td>
                                                    <td>michael.mit@co.in</td>
                                                    <td>10 Dec,2024</td>
                                                    <td>UI Designer</td>
                                                    <td>
                                                        <div class="common-align gap-2 justify-content-start">
                                                            <div class="square-white"><svg>
                                                                    <use href="../assets/svg/icon-sprite.svg#hr-pen">
                                                                    </use>
                                                                </svg></div>
                                                            <div class="square-white trash-3"><svg>
                                                                    <use href="../assets/svg/icon-sprite.svg#hr-trash">
                                                                    </use>
                                                                </svg></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td> </td>
                                                    <td>
                                                        <div class="common-flex align-items-center"><img
                                                                class="img-fluid rounded-circle"
                                                                src="../assets/images/dashboard-11/user/8.jpg"
                                                                alt="user"><a class="f-w-500"
                                                                href="user-list.html">Jenny Wilson</a></div>
                                                    </td>
                                                    <td>#320148</td>
                                                    <td>jenny.wilson@co.in</td>
                                                    <td>13 May,2024</td>
                                                    <td>Researcher</td>
                                                    <td>
                                                        <div class="common-align gap-2 justify-content-start">
                                                            <div class="square-white"><svg>
                                                                    <use href="../assets/svg/icon-sprite.svg#hr-pen">
                                                                    </use>
                                                                </svg></div>
                                                            <div class="square-white trash-3"><svg>
                                                                    <use href="../assets/svg/icon-sprite.svg#hr-trash">
                                                                    </use>
                                                                </svg></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td> </td>
                                                    <td>
                                                        <div class="common-flex align-items-center"><img
                                                                class="img-fluid rounded-circle"
                                                                src="../assets/images/dashboard-11/user/3.jpg"
                                                                alt="user"><a class="f-w-500"
                                                                href="user-list.html">Guy Hawkins</a></div>
                                                    </td>
                                                    <td>#874264</td>
                                                    <td>guy.hawkins@co.in</td>
                                                    <td>17 Oct,2024</td>
                                                    <td>App Developer</td>
                                                    <td>
                                                        <div class="common-align gap-2 justify-content-start">
                                                            <div class="square-white"><svg>
                                                                    <use href="../assets/svg/icon-sprite.svg#hr-pen">
                                                                    </use>
                                                                </svg></div>
                                                            <div class="square-white trash-3"><svg>
                                                                    <use href="../assets/svg/icon-sprite.svg#hr-trash">
                                                                    </use>
                                                                </svg></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td> </td>
                                                    <td>
                                                        <div class="common-flex align-items-center"><img
                                                                class="img-fluid rounded-circle"
                                                                src="../assets/images/dashboard-9/user/2.png"
                                                                alt="user"><a class="f-w-500"
                                                                href="user-list.html">Esther Howard</a></div>
                                                    </td>
                                                    <td>#200148</td>
                                                    <td>esther.howard@co.in</td>
                                                    <td>22 Jan,2024</td>
                                                    <td>Graphic Designer</td>
                                                    <td>
                                                        <div class="common-align gap-2 justify-content-start">
                                                            <div class="square-white"><svg>
                                                                    <use href="../assets/svg/icon-sprite.svg#hr-pen">
                                                                    </use>
                                                                </svg></div>
                                                            <div class="square-white trash-3"><svg>
                                                                    <use href="../assets/svg/icon-sprite.svg#hr-trash">
                                                                    </use>
                                                                </svg></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td> </td>
                                                    <td>
                                                        <div class="common-flex align-items-center"><img
                                                                class="img-fluid rounded-circle"
                                                                src="../assets/images/dashboard-9/user/5.png"
                                                                alt="user"><a class="f-w-500"
                                                                href="user-list.html">Jacob Jones</a></div>
                                                    </td>
                                                    <td>#985367</td>
                                                    <td>jacob.jones@co.in</td>
                                                    <td>20 Apr,2024</td>
                                                    <td>App Developer</td>
                                                    <td>
                                                        <div class="common-align gap-2 justify-content-start">
                                                            <div class="square-white"><svg>
                                                                    <use href="../assets/svg/icon-sprite.svg#hr-pen">
                                                                    </use>
                                                                </svg></div>
                                                            <div class="square-white trash-3"><svg>
                                                                    <use href="../assets/svg/icon-sprite.svg#hr-trash">
                                                                    </use>
                                                                </svg></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td> </td>
                                                    <td>
                                                        <div class="common-flex align-items-center"><img
                                                                class="img-fluid rounded-circle"
                                                                src="../assets/images/dashboard-9/user/3.png"
                                                                alt="user"><a class="f-w-500"
                                                                href="user-list.html">Arlene McCoy</a></div>
                                                    </td>
                                                    <td>#45812</td>
                                                    <td>arlene.mccoy@co.in</td>
                                                    <td>02 Mar,2024</td>
                                                    <td>Web Designer</td>
                                                    <td>
                                                        <div class="common-align gap-2 justify-content-start">
                                                            <div class="square-white"><svg>
                                                                    <use href="../assets/svg/icon-sprite.svg#hr-pen">
                                                                    </use>
                                                                </svg></div>
                                                            <div class="square-white trash-3"><svg>
                                                                    <use href="../assets/svg/icon-sprite.svg#hr-trash">
                                                                    </use>
                                                                </svg></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td> </td>
                                                    <td>
                                                        <div class="common-flex align-items-center"><img
                                                                class="img-fluid rounded-circle"
                                                                src="../assets/images/dashboard-9/user/1.png"
                                                                alt="user"><a class="f-w-500"
                                                                href="user-list.html">Robert Fox</a></div>
                                                    </td>
                                                    <td>#589654</td>
                                                    <td>robert.fox@co.in</td>
                                                    <td>12 Feb,2024</td>
                                                    <td>JS Developer </td>
                                                    <td>
                                                        <div class="common-align gap-2 justify-content-start">
                                                            <div class="square-white"><svg>
                                                                    <use href="../assets/svg/icon-sprite.svg#hr-pen">
                                                                    </use>
                                                                </svg></div>
                                                            <div class="square-white trash-3"><svg>
                                                                    <use href="../assets/svg/icon-sprite.svg#hr-trash">
                                                                    </use>
                                                                </svg></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        
                      
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
