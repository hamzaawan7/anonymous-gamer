<nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color: #17181a">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item nav-category">pages</li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin-categories-index') }}"> <i
                    class="mdi mdi-apps menu-icon"></i><span
                    class="menu-title">Category </span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin-posts-index') }}"><i
                    class="mdi mdi-blogger menu-icon"></i><span
                    class="menu-title">Posts </span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin-reviews-index') }}"><i
                    class="mdi mdi-comment-multiple-outline menu-icon"></i><span class="menu-title">Reviews </span></a>
        </li>
    </ul>
</nav>
