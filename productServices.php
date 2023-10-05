<?php
    include 'header.php';
?>

<body>

    <section class="productServices-image">
        <div class="productServices-image-content">
            <div class="productServices-text">
                <h1 class="animate">Here's what we serve</h1>
                <p class="animate">We do Mechanical, Electrical, Plumbing and Civil Works</p>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="services-title">
            <h1>Different <span>Categories</span> </h1>
        </div>

        <div class="warpper">
            <input class="radio" id="all" name="group" type="radio" checked>
            <input class="radio" id="one" name="group" type="radio" <?php if(isset($_GET['tab']) && $_GET['tab'] == 'one') echo 'checked'; ?>>
            <input class="radio" id="two" name="group" type="radio" <?php if(isset($_GET['tab']) && $_GET['tab'] == 'two') echo 'checked'; ?>>
            <input class="radio" id="three" name="group" type="radio" <?php if(isset($_GET['tab']) && $_GET['tab'] == 'three') echo 'checked'; ?>>
            <input class="radio" id="four" name="group" type="radio" <?php if(isset($_GET['tab']) && $_GET['tab'] == 'four') echo 'checked'; ?>>
            <input class="radio" id="five" name="group" type="radio" <?php if(isset($_GET['tab']) && $_GET['tab'] == 'five') echo 'checked'; ?>>
            <input class="radio" id="six" name="group" type="radio" <?php if(isset($_GET['tab']) && $_GET['tab'] == 'six') echo 'checked'; ?>>
            <div class="tabs">
                <label class="tab" id="all-tab" for="all">All</label>
                <label class="tab" id="one-tab" for="one">Air Condition</label>
                <label class="tab" id="two-tab" for="two">Fire Protection</label>
                <label class="tab" id="three-tab" for="three">Mechanical</label>
                <label class="tab" id="four-tab" for="four">Electrical</label>
                <label class="tab" id="five-tab" for="five">Civil Works</label>
                <label class="tab" id="six-tab" for="six">Fabrication</label>
            </div>
            <div class="panels">
                <div class="panel" id="all">
                    <div class="category-container">
                        <div class="panel-title">All Services</div>
                        <img src="air-condition/categories.jpg" alt="Air Curtains" style="flex: 1 1 calc(100% - 20px); max-width: calc(100% - 20px);">
                    </div>
                </div>
                <div class="panel" id="one-panel">
                    <div class="image-container">
                        <p>Supply, Delivered and Installation of (2) units 4.0HP, Carrier Floor Standing Inverter in San Carlos, Negros Occidental</p>
                        <div class="image"><img src="air-condition/airconditioner-specs.jpg" alt=""></div>
                        <div class="image"><img src="air-condition/aircon.jpg" alt=""></div>
                        <div class="image"><img src="air-condition/carrier.jpg" alt=""></div>
                        <div class="image"><img src="air-condition/carrier2.jpg" alt=""></div>
                        <div class="image"><img src="air-condition/aircon2.jpg" alt=""></div>
                    </div>

                    <div class="popup-image">
                        <span>&times;</span>
                        <div class="popup-image-details">
                            <img src="" alt="">
                            <h4></h4>
                        </div>
                    </div>
                    
                    <div class="category-container">
                        <img src="air-condition/aircon-services.jpg" alt="Air-Condition Services">
                    </div>
                </div>
                <div class="panel" id="two-panel">
                    <div class="image-container">
                        <p>On-going project of Warlen Industrial Sales Corporation - Deka Sales at Wilcon Depot Talisay City, Negros Occidental Branch with a project scope of Fire Protection, Smoke Control and Preventive Maintenance</p>
                        <div class="image"><img src="fire-protection/fire-protection1.jpg" alt=""></div>
                        <div class="image"><img src="fire-protection/fire-protection2.jpg" alt=""></div>
                        <div class="image"><img src="fire-protection/fire-protection3.jpg" alt=""></div>
                        <div class="image"><img src="fire-protection/fire-protection4.jpg" alt=""></div>
                        <div class="image"><img src="fire-protection/fire-protection5.jpg" alt=""></div>
                    </div>

                    <div class="popup-image">
                        <span>&times;</span>
                        <div class="popup-image-details">
                            <img src="" alt="">
                            <h4></h4>
                        </div>
                    </div>
                    
                    <div class="category-container">
                        <img src="fire-protection/fire-protection-contact.jpg" alt="Fire Protection Services">
                    </div>
                </div>
                <div class="panel" id="three-panel">
                    <div class="image-container">
                        <p>Warlen Industrial Sales Corporation (Deka Sales) Mega World Ilo-ilo Preventive Maintenance in One Fintech with a project scope of Mechanical.</p>
                        <div class="image"><img src="mechanical/mechanical1.jpg" alt=""></div>
                        <div class="image"><img src="mechanical/mechanical2.jpg" alt=""></div>
                        <div class="image"><img src="mechanical/mechanical3.jpg" alt=""></div>
                        <div class="image"><img src="mechanical/mechanical4.jpg" alt=""></div>
                        <div class="image"><img src="mechanical/mechanical5.jpg" alt=""></div>
                        <div class="image"><img src="mechanical/mechanical6.jpg" alt=""></div>
                    </div>

                    <div class="popup-image">
                        <span>&times;</span>
                        <div class="popup-image-details">
                            <img src="" alt="">
                            <h4></h4>
                        </div>
                    </div>
                </div>
                <div class="panel" id="four-panel">
                    <div class="image-container">
                        <p>Another successful project of Warlen Industrial Sales Corporation (Deka Sales) as Electrical Contractor of WILCON DEPOT BOHOL.</p>
                        <div class="image"><img src="electrical/electrical1.jpg" alt=""></div>
                        <div class="image"><img src="electrical/electrical2.jpg" alt=""></div>
                        <div class="image"><img src="electrical/electrical3.jpg" alt=""></div>
                        <div class="image"><img src="electrical/electrical4.jpg" alt=""></div>
                        <div class="image"><img src="electrical/electrical5.jpg" alt=""></div>
                        <div class="image"><img src="electrical/electrical6.jpg" alt=""></div>
                    </div>

                    <div class="popup-image">
                        <span>&times;</span>
                        <div class="popup-image-details">
                            <img src="" alt="">
                            <h4></h4>
                        </div>
                    </div>
                    
                    <div class="category-container">
                        <img src="electrical/electric-contact.jpg" alt="Electrical Services">
                    </div>                
                </div>
                <div class="panel" id="five-panel">
                    <div class="image-container">
                        <p>THE OVERALL CONTRACTOR: An on-going construction of Cadiz City Public Market<br>SCOPES: MECHANICAL, ELECTRICAL, PLUMBING, FIRE PROTECTION, FABRICATION AND CONSTRUCTION</p>
                        <div class="image"><img src="civil-works/civil-works1.jpg" alt=""></div>
                        <div class="image"><img src="civil-works/civil-works2.jpg" alt=""></div>
                        <div class="image"><img src="civil-works/civil-works3.jpg" alt=""></div>
                        <div class="image"><img src="civil-works/civil-works4.jpg" alt=""></div>
                        <div class="image"><img src="civil-works/civil-works5.jpg" alt=""></div>
                        <div class="image"><img src="civil-works/manpower_meeting.jpg" alt="Manpower Meeting"></div>
                    </div>

                    <div class="popup-image">
                        <span>&times;</span>
                        <div class="popup-image-details">
                            <img src="" alt="">
                            <h4></h4>
                        </div>
                    </div>                
                </div>
                <div class="panel" id="six-panel">
                    <div class="image-container">
                        <p>Snaps of VMA GLOBAL COLLEGE NEW HM BUILDING - Areas: Office Area, Hot and Cold Kitchen, 2 Stock Rooms, Lecture Room, Restroom</p>
                        <div class="image"><img src="fabrication/fab1.jpg" alt=""></div>
                        <div class="image"><img src="fabrication/fab2.jpg" alt=""></div>
                        <div class="image"><img src="fabrication/fab3.jpg" alt=""></div>
                        <div class="image"><img src="fabrication/fab4.jpg" alt=""></div>
                        <div class="image"><img src="fabrication/fab5.jpg" alt=""></div>
                        <div class="image"><img src="fabrication/fab6.jpg" alt=""></div>
                    </div>

                    <div class="popup-image">
                        <span>&times;</span>
                        <div class="popup-image-details">
                            <img src="" alt="">
                            <h4></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

    
    <?php
        include 'footer.php';
    ?>
    
    <script>
        document.querySelectorAll('.panel .image-container .image').forEach(image => {
        image.addEventListener('click', () => {
            const parentPanel = image.closest('.panel');
            const popupImage = parentPanel.querySelector('.popup-image');
            popupImage.style.display = 'flex';
            popupImage.querySelector('img').src = image.querySelector('img').src;
            const imageAlt = image.querySelector('img').alt;
            popupImage.querySelector('h4').textContent = imageAlt;

            // Hide the navbar
            document.querySelector('nav').style.visibility = 'hidden';
        });
    });

    document.querySelectorAll('.popup-image span').forEach(closeButton => {
        closeButton.addEventListener('click', () => {
            const parentPanel = closeButton.closest('.panel');
            parentPanel.querySelector('.popup-image').style.display = 'none';

            // Show the navbar again
            document.querySelector('nav').style.visibility = 'visible';
        });
    });

    </script>
</body>
