<?php include_once 'inc/head.php'; ?>
<link rel="stylesheet" type="text/css" href="style.css">



<body>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap');

        .admin-navbar {
            background-image: linear-gradient( 
                90deg, rgb(61 85 117) 0%, rgb(107 142 187) 35%, rgb(71 97 130) 100%);
        }

        .card img{
            padding-top: 5px;
            height: 50px;
            width: 55px;
            margin: 0 auto;


        }

        .form-inline {
            display: flex;
            justify-content: center;
            align-items: baseline;
        }

        .form-inline p{
         font-family: 'Source Sans Pro', sans-serif;
         letter-spacing: 1px;
     }


     .btn-success {
        color: #fff;
        background-color: #0ea66e;
        border-color: #0ea66e;
    }

    .card-title {
        margin-bottom: 0rem;
    }

    .card-body {
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        min-height: 1px;
        padding: 2rem 1rem;
    }

    .wishlist .card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem 3rem;
}

    .card-text{
        font-size: 12px;
    }


    @media (min-width: 700px){
        .open-nav
        {
            display: none;
        }
    }

</style>




<nav class="navbar navbar-light admin-navbar  py-xl-2 py-md-2  sticky-top">
    <a class="navbar-brand">
        <span class="open-nav" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
        Admin Panel
    </a>
    <form class="form-inline">
     <p class="text-white font-weight-bold mr-2">
        <?php if(isset($_SESSION['username'])){
            echo $_SESSION['username'];
        }?></p>   
        <div class="btn-group">

            <a href="logout.php" class="btn btn-light">Logout<span> <i class="far fa-user"></i></span></a>

        </div>
    </form>

</nav>  


<form action="mark_complete.php" method="post" name="mark_complete">
    <input type="hidden" id="id_record" name="this_id">
    <input type="hidden" id="id_page" name="page_id">
</form>

<form action="mark_complete.php" method="post" name="bulk_message">
    <input type="hidden" id="my_record" name="my_id">
    <input type="hidden" id="my_page" name="page_id">
    <input type="hidden" name="bulk">
</form>

