<header>
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand">
            <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
            </div>
            <div class="search-bar flex-grow-1">
                {{-- <div class="position-relative search-bar-box">
                    <input type="text" class="form-control search-control" placeholder="Поиск ..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
                    <span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
                </div> --}}
            </div>

          

            {{-- <button type="button" class="btn btn-primary">Primary</button> --}}
            <a class="btn btn-primary" href="{{ route('destroy') }}" role="button">Exit</a>
        </nav>
    </div>

    <div id="notification_modals">

    </div>

</header>