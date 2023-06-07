<aside class="sidebar">
<div class="siderbar-inner">
    <div class="sidebar-logo d-flex justify-content-center">
        <img class="img-fluid" src="https://icons.veryicon.com/png/o/miscellaneous/admin-dashboard-flat-multicolor/admin-roles.png" alt="admin logo">
    </div>
    <div class="sidebar-menu">
        <ul>
            <li><a href="{{route('admin.dashboard')}}">Home</a></li>
            <li><a href="{{route('admin.projects.create')}}">Aggiungi progetto</a></li>
            <li><a href="{{route('admin.projects.index')}}">Lista progetti</a></li>
            <li><a href="{{route('admin.categories.index')}}">Lista categorie</a></li>
            <li><form class="d-inline" method="POST" action="{{route('logout')}}">
                @csrf
                <button class="a-form" type="submit">Logout</button>
            </form></li>


        </ul>
    </div>
</div>
</aside>
