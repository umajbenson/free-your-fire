<div id="admin-nav-wrapper">
    <nav id="admin-nav">
        <ul class="sm sm-mint admin-nav-ul">
            <li><a class="admin-home" href="/admin">Admin Home</a></li>
            <li><a href="/admin/users">Members</a></li>
            <li><a href="/admin/products">Products</a></li>                 
            <li><a href="/logout">Logout</a></li>

            
            <li class="admin-nav-search">
                <form action="/admin/products/search" method="POST" class="search-form">
                    @csrf
                    <i class="fa fa-search search-icon"></i>
                    <input type="text" name="queryString" id="query" class="search-box" placeholder="Search">
                </form>
            </li>
        </ul>
    </nav>
</div>