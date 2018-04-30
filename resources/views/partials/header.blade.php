<div class="flex" id="top-row-home">
    <div id="left-flex">       
        <h3 id="free-shipping">Free Shipping on orders $60 and up!</h3>
        <img src="/images/facebook.svg" alt="Facebook icon">
        <img src="/images/twitter.svg" alt="Twitter icon">
    </div>      
    <div id="right-flex">
        <nav id="user-nav">
            <ul class="sm sm-mint user-nav-ul">
                @if(Auth::user())                
                    <li><a class="hover" href="/edit-profile">Welcome, {{ Auth::user()->name }}</a>
                        <ul>
                            @if(Auth::user()->is_admin == true)
                                <li><a class="admin-home" href="/admin">Admin Page</a></li>                            
                                <li><a href="/members">Member Area</a></li>
                                <li><a href="/edit-profile">Edit Profile</a></li>
                                <li><a href="/logout">Logout</a></li>
                            @else
                                <li><a href="/members">Member Area</a></li>
                                <li><a href="/edit-profile">Edit Profile</a></li>
                                <li><a href="/logout">Logout</a></li> 
                            @endif    
                        </ul>
                    </li>             

                @else
                    <li><a href="/login">Login</a></li>
                    <li><a href="/register">Register</a></li>    
                @endif
            </ul>
        </nav>
    </div>
</div> <!-- end flexbox -->

<div id="branding"> 
    <h1><a href="/">Free&nbsp;your&nbsp;Fire</a></h1>
    <h2>Asheville North Carolina &nbsp;&nbsp;</h2>
</div>
   
