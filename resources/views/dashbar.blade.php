<style>
    /* The sidepanel menu */
    .sidepanel {
        height: 100%;
        /* Specify a height */
        width: 0;
        /* 0 width - change this with JavaScript */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Stay on top */
        top: 0;
        left: 0;
        background-color: #111;
        /* Black*/
        overflow-x: hidden;
        /* Disable horizontal scroll */
        padding-top: 5%;
        /* Place content 60px from the top */
        transition: 0.5s;
        /* 0.5 second transition effect to slide in the sidepanel */
    }

    /* The sidepanel links */
    .sidepanel a {
        padding-left: 7%;
        text-decoration: none;
        font-size: 20px;
        color: #ffffff;
        display: block;
        transition: 0.3s;
    }

    /* When you mouse over the navigation links, change their color */
    .sidepanel a:hover {
        color: #979797;
    }

    /* Position and style the close button (top right corner) */
    .sidepanel .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }

    /* Style the button that is used to open the sidepanel */
    .open-button {
        color: white!important;
        border: none;
    }
    .open-button:hover {
        color: rgb(165, 165, 165)!important;
        /* border: none; */
    }

</style>

<div id="mySidepanel" class="sidepanel bg-dark">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
</div>

<nav class="navbar navbar-dark bg-dark p-0 shadow">
    <button class="navbar-toggler open-button" type="button" onclick="openNav()">
        &#9776;
    </button>
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Company name</a>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link active" href="/"><i class="bi bi-x-circle"></i> Exit</a>
        </li>
    </ul>
</nav>
<script>
    function openNav() {
        console.log('open');
        document.getElementById("mySidepanel").style.width = "20%";
    }

    /* Set the width of the sidebar to 0 (hide it) */
    function closeNav() {
        document.getElementById("mySidepanel").style.width = "0";
    }
</script>
