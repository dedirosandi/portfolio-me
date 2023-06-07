<div class="main-header">
    <div class="logo-header">
        <a href="index.html" class="logo">
            Ready Dashboard
        </a>
        <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
            data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
    </div>
    <nav class="navbar navbar-header navbar-expand-lg">
        <div class="container-fluid">

            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"
                        aria-expanded="false"> <img src="{{ asset('assets/backend/img/profile.jpg') }}" alt="user-img"
                            width="36"
                            class="img-circle"><span>{{ auth()->user()->username }}</span></span> </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <div class="user-box">
                                <div class="u-img"><img src="{{ asset('assets/backend/img/profile.jpg') }}" alt="user">
                                </div>
                                <div class="u-text">
                                    @auth
                                        <h4>{{ auth()->user()->username }}</h4>
                                    @endauth
                                    <form action="/logout-process" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-rounded btn-danger btn-sm"> <i
                                                class="fa fa-power-off"></i>
                                            Logout</button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
            </ul>
        </div>
    </nav>
</div>