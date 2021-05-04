<!DOCTYPE html>
<html lang="en">

<head>
    @include('common.head')
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        @include('common.sidebar')

        <!-- Page Content -->
        <div id="content">
            @include('common.navbar')

            @include('components.error')
            <div class="main">
                <div class="main-content">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <div class="overlaybg" id="overlay"></div>

    @include('common.scripts')

    @yield('add-script')

</body>

</html>