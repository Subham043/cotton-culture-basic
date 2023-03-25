<!-- Header -->
<header>
    <div class="header-container">
        <div id="header">
            <div class="container">
                <div class="row">
                    <div class="middle-header-wrapper">
                        <div class="col-md-2 col-xs-12 col-sm-2 logo-block">
                            <div class="logo">
                                <a title="altima" href="{{route('home.get')}}"><img alt="Magento Commerce"
                                        src="{{ asset('assets/images/logo.png') }}"> </a>
                            </div>
                            <!-- End Header Logo -->
                        </div>
                        <div class="col-md-10 col-xs-12 col-sm-10">
                            <div class="fl-nav-menu">
                                <!-- Navigation -->
                                <div class="mm-toggle-wrap">
                                    <div class="mm-toggle"><i class="fa fa-bars"></i><span
                                            class="mm-label">Menu</span> </div>
                                </div>
                                <!-- BEGIN NAV -->
                                <div id="main-menu">
                                    <ul id="nav" class="hidden-xs">
                                        <li class="level0 parent drop-menu active" id="nav-home"><a
                                                href="{{route('home.get')}}" class="level-top"><span>Home</span></a> </li>

                                        <li> <a class="level-top" href="{{route('about.get')}}"><span>About Us</span></a>
                                            </li>

                                        <li class="level0 nav-6 level-top drop-menu"> <a class="level-top"
                                                href="#"> <span>Products</span> </a>
                                            <ul class="level1">
                                                @foreach ($categories as $item)
                                                <li class="level2 first"><a href="{{route('prodcucts.get', $item->id)}}"><span>{{$item->name}}</span></a> </li>
                                                @endforeach
                                            </ul>
                                        </li>

                                        <li> <a class="level-top" href="{{route('contact.get')}}"><span>Contact Us</span></a>
                                        </li>
                                        <!--nav-->

                                    </ul>
                                    <!--nav-->
                                </div>

                                <!-- end nav -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header -->
