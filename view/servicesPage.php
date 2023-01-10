<!--Pictures and Description of services offered-->

<!-- ABOUT AND MAP SECTION -->

<section class="serviceSection ms-5 me-5 ps-5 pe-5" id="hero">
    <div class="heroContent">
        <div class="text-light d-flex flex-column h-100 justify-content-center">
            <h1 class="display-1 ms-5 ps-5">Jetsudz</h1>
            <p class="ms-5 ps-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>
    </div>
</section>

<section class="ms-5 me-5 mapSection">

    <div class="row me-5 ms-5">

        <div class="col mt-5">
            <h1>Our Services</h1>
        </div>
        <div class="col mt-4 pt-5 ps-5 d-none d-sm-block">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="about">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row g-3 px-5">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card cards">
                <img src="img/vehiclem.png" alt="Vehicle" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Vehicle Maintenance</h5>
                    <p class="card-text">Summary information on the service</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card cards">
                <img src="img/boat1.png" alt="Boat" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Boat Polishing and Waxing</h5>
                    <p class="card-text">Summary information on the service</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card cards">
                <img src="img/boat2.png" alt="BoatCleaning" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Boat Maintence</h5>
                    <p class="card-text">Summary information on the service</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card cards">
                <img src="img/snow.png" alt="snow" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Snow Cleaning</h5>
                    <p class="card-text">Summary information on the service</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card cards">
                <img src="img/bathroom.png" alt="bathroom" class="card-img-top" onclick="showBathroom()">
                <div class="card-body">
                    <h5 class="card-title">Bathroom Cleaning</h5>
                    <p class="card-text">Summary information on the service</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card cards">
                <img src="img/boat3.png" alt="Boat3" class="card-img-top" onclick="showBoat()">
                <div class="card-body">
                    <h5 class="card-title">Boat Cleaning</h5>
                    <p class="card-text">Summary information on the service</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ms-5 me-5 mapSection">
    <!-- MAP SECTION -->
    <div class="container py-5 text-center mb-auto mapSection">
        <div class="row justify-content-center mapSection">
            <h3>Service Agents Locations</h3>
            <div id="map"></div>
        </div>
    </div>
</section>
<section class="ms-5 me-5 mapSection">
    <div class="container mb-auto mapSection" id="collapseContent">

        <!--DYNAMIC CONTENT IS LOADED HERE.  See the functions in the js file and their corresponding calls above in the <img> tags-->

    </div>
</section>