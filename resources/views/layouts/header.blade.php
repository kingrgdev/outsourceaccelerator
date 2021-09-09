
<div class="header">
    <div class="row desktop">
        <div class="banner column">
            <a class="banner-logo active">
                <img class="logo-image" src="{{asset('images/oa-logo.png')}}">
            </a>
        </div>
        <div class="column">
            <div class="banner-item">
                <ul class="navbar">
                    <li class="nav-item">About OA</li>
                    <li class="nav-item">About SP</li>
                    <li class="nav-item active">Login</li>
                </ul>
               
            </div>
            <div class="banner-item-icon">
                <a href="javascript:void(0);" class="header-icon">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
           
        </div>
       
    </div>
    <div class="mobile">
        <div class="mid-row">
            <div class="banner mid-column">
                <a class="banner-logo active">
                    <img class="logo-image" src="{{asset('images/oa-logo.png')}}">
                </a>
            </div>
            <div class="mid-column">
                <button onclick="clickNav();" class="mobile-menu">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
          
        </div>
    </div>
   
</div>
<div class="mobile-dropdown" id="mobile-dropdown">
    <ul class="mobile-navbar">
        <li class="mobile-nav-item">About OA</li>
        <li class="mobile-nav-item">About SP</li>
        <li class="mobile-nav-item active">Login</li>
    </ul>
</div>