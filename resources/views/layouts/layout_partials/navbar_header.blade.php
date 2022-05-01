<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            @include('layouts.layout_partials.navbar_header_partials.logo_section')

            <!-- App Search-->
            @include('layouts.layout_partials.navbar_header_partials.search_form')

        </div>

        <div class="d-flex">

            @include('layouts.layout_partials.navbar_header_partials.search_dropdown_section')

            @include('layouts.layout_partials.navbar_header_partials.full_screen_section')

            @include('layouts.layout_partials.navbar_header_partials.shopping_cart_section')

            @include('layouts.layout_partials.navbar_header_partials.messages_section')

            @include('layouts.layout_partials.navbar_header_partials.notification_section')

            @include('layouts.layout_partials.navbar_header_partials.user_dropdown_section')

            @include('layouts.layout_partials.navbar_header_partials.languages_section')

        </div>
    </div>
</header>
