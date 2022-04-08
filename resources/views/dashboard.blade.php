@extends('index')
@section('container')
    {{-- @push('style')
        <style>
            /* The sidebar menu */
            .sidebar {
                height: 100%;
                /* 100% Full-height */
                width: 0;
                /* 0 width - change this with JavaScript */
                position: fixed;
                /* Stay in place */
                z-index: 1;
                /* Stay on top */
                top: 56px;
                left: 0;
                background-color: #111;
                /* Black*/
                overflow-x: hidden;
                /* Disable horizontal scroll */
                /* padding-top: 60px; */
                /* Place content 60px from the top */
                transition: 0.5s;
                /* 0.5 second transition effect to slide in the sidebar */
            }

            /* The sidebar links */
            .sidebar a {
                /* padding: 8px 8px 8px 32px; */
                text-decoration: none;
                font-size: 20px;
                color: #ffffff;
                display: block;
                transition: 0.3s;
            }

            /* When you mouse over the navigation links, change their color */
            .sidebar a:hover {
                color: #f1f1f1;
            }

            /* Position and style the close button (top right corner) */
            .sidebar .closebtn {
                position: absolute;
                top: 0;
                right: 25px;
                font-size: 36px;
                margin-left: 50px;
            }

            /* The button used to open the sidebar */
            .open-btn {
                font-size: 20px;
                cursor: pointer;
                background-color: #111;
                color: white;
                /* padding: 10px 15px; */
                border: none;
            }

            .open-btn:hover {
                background-color: #444;
            }

            /* Style page content - use this if you want to push the page content to the right when you open the side navigation */
            #main {
                transition: margin-left .5s;
                /* If you want a transition effect */
                /* padding: 20px; */
            }

            .visible {
                opacity: 1;
            }

            .invisible {
                opacity: 0;
            }

        </style>
    @endpush --}}
    {{-- <div id="mySidebar" class="sidebar">
        <ul class="mt-2">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <a href="# ">Services</a>
            </li>
            <li>
                <a href="#">Clients</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
    </div>

    <div id="main" class="row">
        
        <button class="open-btn" onclick="sidebarHandler()">&#x2630;</button>
        <h2>Collapsed Sidebar</h2>
        <p>Content...</p>
    </div> --}}
    <button onclick="animatebar()">btrn</button>
    <div class="row">
        <div class="bg-dark invisible d-none" id="kiri" style="transition: all  .5s ease;">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">
                        <span data-feather="home"></span>
                        Dashboard <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span data-feather="file"></span>
                        Orders
                    </a>
                </li>
        </div>
        <div class="col-md-12 animate-sidebar" id="kanan">aaa</div>
    </div>
    <script>
        const kiri = document.querySelector('#kiri');
        const kanan = document.querySelector('#kanan');

        function animatebar() {
            console.log("run");
            kiri.classList.toggle('d-none');
            setTimeout(function() {
                kiri.classList.toggle('invisible');
                kiri.classList.toggle('visible');
            }, 100 );
            kanan.classList.toggle('col-md-12');
            kanan.classList.toggle('col-md-3');
            // document.getElementById("main").style.marginLeft = "250px";
            return

            // $('#kiri').addClass('animate-sidebar');
            // $('#kanan').addClass('animate-sidebar');
            console.log($('#kiri').hasClass('col-md-3'));
            if ($('#kiri').hasClass('hidden')) {
                console.log('kondisi pertama');

                // kiri.classList.toggle('d-none');
                kiri.classList.toggle('hidden');
                kiri.classList.toggle('visible');

                kanan.classList.toggle('col-md-12');
                // kiri.classList.toggle('col-md-8');
                kanan.classList.toggle('col-md-4');


                // $('#kiri').toggleClass('animate-sidebar');
                return
            }

            if ($('#kiri').hasClass('col-md-8')) {
                kiri.classList.toggle('col-md-8');
                kiri.classList.toggle('col-md-3');
                kanan.classList.toggle('col-md-4');
                kanan.classList.toggle('col-md-9');
                return
            }
        }
        /* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
        const sideBar = document.getElementById("mySidebar");
        const content = document.getElementById("main");
        const openButton = document.querySelector(".open-btn");

        function sidebarHandler() {
            console.log('open btn', openButton.innerHTML, escape(openButton.innerHTML) === '%u2630');
            openButton.innerHTML = '&times;';
        }

        // function openNav() {
        //     sideBar.style.width = "250px";
        //     content.style.marginLeft = "250px";
        // }

        // /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
        // function closeNav() {
        //     sideBar.style.width = "0";
        //     content.style.marginLeft = "0";
        // }
    </script>
@endsection
