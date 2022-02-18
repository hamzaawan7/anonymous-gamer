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
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="menu-icon mdi mdi-floor-plan"></i>
                <span class="menu-title">Games</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin-games-index') }}"> <i
                                class="mdi mdi-apps menu-icon"></i><span
                                class="menu-title">Games </span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin-games_required-index') }}"><i
                                class="mdi mdi-newspaper menu-icon"></i><span
                                class="menu-title">Game Requirements </span></a>
                    </li>
                </ul>
            </div>
        </li>


        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon mdi mdi-floor-plan"></i>
                <span class="menu-title">Posts</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin-posts-blogs-index') }}"><i
                                class="mdi mdi-blogger menu-icon"></i><span
                                class="menu-title">Blogs </span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin-posts-news-index') }}"><i
                                class="mdi mdi-newspaper menu-icon"></i><span
                                class="menu-title">News </span></a>
                    </li>
                </ul>
            </div>
        </li>


        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin-reviews-index') }}"><i
                    class="mdi mdi-comment-multiple-outline menu-icon"></i><span class="menu-title">Reviews </span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin-comments-index') }}"><i
                    class="mdi mdi-comment-multiple-outline menu-icon"></i><span class="menu-title">Comments </span></a>
        </li>
    </ul>
</nav>
