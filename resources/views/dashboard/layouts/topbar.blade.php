<div class="topbar">
    <div class="toggle">
        <ion-icon name="menu-outline"></ion-icon>
    </div>
    <!-- search -->
    <div class="search">
        <label for="">
            <input type="text" placeholder="Cari ..." />
            <ion-icon name="search-outline"></ion-icon>
        </label>
    </div>
    <!-- userimg -->
    {{-- <div class="user">
        <img src="/assets/images/title_favicon.png" alt="USER" height="50px" />

    </div> --}}
    @auth
        <a href="/logout">Logout</a>
    @endauth
</div>
