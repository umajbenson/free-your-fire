<div id="admin-nav-wrapper">
    <nav id="admin-nav">
        <ul class="sm sm-mint admin-nav-ul">
            <li class="admin-nav-li"><a class="admin-home admin-nav-a" href="/admin">Admin Home</a></ class="admin-li">
            <li class="admin-nav-li"><a class="admin-nav-a" href="/admin/users">Members</a></ class="admin-li">
            <li class="admin-nav-li"><a class="admin-nav-a" href="/admin/products">Products</a></ class="admin-li">                 
            <li class="admin-nav-li"><a class="admin-nav-a" href="/logout">Logout</a></ class="admin-li">
        </ul>
    </nav>
</div>

    @if(isset($productsSearch))
    <form class="search-form" action="/admin/products/search" method="POST">
        @csrf
        <i class="fa fa-search search-icon"></i>
        <input type="text" name="queryString" id="query" class="search-box" placeholder="Search">
    </form>
    @endif
