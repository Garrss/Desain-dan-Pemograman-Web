<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GANDARIA HOTEL - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            background-color: white;
        }

        .header {
            background-color: #000080;
            color: white;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            /* Align items to space out */
            align-items: center;
            /* Center items vertically */
        }

        .header h1 {
            margin: 0;
            /* Remove default margin */
            font-size: 24px;
            /* Adjust font size if needed */
        }

        .nav-link {
            color: white !important;
        }

        .banner {
            width: 100%;
            height: 300px;
        }

        .content {
            flex: 1;
        }

        .profile-section {
            padding: 30px;
        }

        footer {
            background-color: #000080;
            color: white;
            text-align: center;
            padding: 10px;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>GANDARIA HOTEL</h1>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="price-check.php">Price Check</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- Banner Image Slider -->
    <div id="bannerSlider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 banner" src="banner1.jpg" alt="Banner 1">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 banner" src="banner2.jpeg" alt="Banner 2">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 banner" src="banner3.jpg" alt="Banner 3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#bannerSlider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#bannerSlider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="">
        <h2>Hotel Profile</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Fuga accusantium, nulla, ab odio dignissimos quos, corrupti maxime omnis ducimus adipisci natus laboriosam eos reprehenderit amet dolorem obcaecati magni. Lorem ipsum dolor sit amet,
            consectetur adipisicing elit. Enim quisquam nisi, possimus, quidem magnam ducimus neque id nesciunt pariatur qui sit repudiandae illo odit sint quia iusto fuga dolorem cumque iste.
            Fuga odit aliquid corporis repellat incidunt, eaque sapiente expedita officiis nemo! Facere vero dignissimos omnis. Suscipit veritatis placeat impedit iusto magni nihil repudiandae harum consectetur officiis ex.
            Excepturi, ducimus ab. Quas, dolorem at aspernatur modi nam veniam labore libero!
        </p>
        <p>
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum ab aliquid optio repellat mollitia saepe ea quae nam ut
            laboriosam dolores quibusdam ratione reprehenderit quis eveniet veniam beatae quos officia voluptatem accusantium, ad eaque necessitatibus!
            Asperiores laborum blanditiis modi voluptatum, fuga nam nisi commodi hic temporibus atque corporis veniam rerum?
        </p>
    </div>

    <footer>
        @copyrightTegar
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>