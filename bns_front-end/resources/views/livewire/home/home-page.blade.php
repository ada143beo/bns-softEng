<div data-bs-spy="scroll" data-bs-target="#navbarNav" data-bs-offset="50" class="scrollspy-example">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background: #1B5E20;">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('assets/image/admin_logo.png') }}" alt="BNS Logo"
                    class="rounded-circle border border-white" style="height: 35px; margin-right: 10px;">
                <span class="fw-bold">Sto. Domingo BNS</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav gap-3">
                    <li class="nav-item"><a class="nav-link text-white" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#barangay-profile">Barangay Profile</a>
                    </li>
                    <li class="nav-item"><a class="nav-link text-white" href="#activities">Activities</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#contact">Contact Us</a></li>
                </ul>
            </div>
            <a class="btn btn-light fw-bold shadow-sm rounded-pill" href="{{ route('login') }}">Login</a>

        </div>
    </nav>

    <!-- Hero Section -->
    <!-- Hero Section -->
    <section id="home" class="d-flex flex-column justify-content-center align-items-center text-center vh-100"
        style="background: url('{{ asset('assets/image/home_background.png') }}') no-repeat center center/cover;">

        <div class="container">
            <!-- Sto. Domingo Text -->
            <h1 class="sto-domingo-text">Sto. Domingo</h1>

            <!-- Barangay Nutrition Scholar Text -->
            <h2 class="bns-text">Barangay Nutrition Scholar</h2>

            <!-- Brief Description -->
            <p class="bns-description">
                Dedicated to improving community health through proper nutrition, <br>
                the Barangay Nutrition Scholars of Sto. Domingo lead programs <br>
                that promote wellness, awareness, and nourishment.
            </p>

            <!-- Learn More Button -->
            <a href="#about" class="btn btn-light fw-bold px-4 py-2 mt-4 learn-more-btn">Learn More</a>
        </div>
    </section>

    <!-- CSS for Styling -->
    <style>
        /* Font Import */
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&family=Poppins:wght@400;700&display=swap');

        /* General Styling */
        * {
            font-family: 'Poppins', sans-serif;
        }

        /* Sto. Domingo Styling */
        .sto-domingo-text {
            font-size: 3rem;
            font-weight: 600;
            color: white;
            text-transform: uppercase;
            opacity: 0;
            animation: fadeSlide 1.5s ease-out forwards;
            letter-spacing: 2px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        /* Barangay Nutrition Scholar Styling (Main Emphasis) */
        .bns-text {
            font-size: 5rem;
            font-weight: 700;
            font-family: 'Oswald', sans-serif;
            color: white;
            text-transform: uppercase;
            -webkit-text-stroke: 4px #4CAF50;
            text-shadow: 0px 0px 15px #4CAF50, 0px 0px 30px #4CAF50;
            opacity: 0;
            animation: glowText 2s ease-in-out forwards 1s;
        }

        /* Description Text */
        .bns-description {
            font-size: 1.3rem;
            color: white;
            margin-top: 20px;
            font-weight: 400;
            opacity: 0;
            animation: fadeIn 2s ease-in-out 1.5s forwards;
        }

        /* Button Animation */
        .learn-more-btn {
            transition: transform 0.3s ease-in-out, background 0.3s;
            animation: fadeIn 2s ease-in-out 1.5s forwards;
            opacity: 0;
        }

        .learn-more-btn:hover {
            background: #4CAF50 !important;
            color: white !important;
            transform: scale(1.1);
        }

        /* Keyframe Animations */
        @keyframes fadeSlide {
            0% {
                opacity: 0;
                transform: translateY(-30px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes glowText {
            0% {
                opacity: 0;
                text-shadow: none;
            }

            100% {
                opacity: 1;
                text-shadow: 0px 0px 15px #057208, 0px 0px 30px #4CAF50;
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }
    </style>



    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">ABOUT BNS</h2>
                <p class="section-subtitle">
                    Barangay Nutrition Scholars (BNS) are committed community health workers dedicated to promoting
                    nutrition, wellness, and sustainable programs.
                </p>
            </div>

            <div class="row g-4">
                <!-- Vision Box -->
                <div class="col-md-4">
                    <div class="info-box vision-box p-4 text-center">
                        <div class="icon-box">
                            <i class="bi bi-eye"></i>
                        </div>
                        <h3 class="info-title">VISION</h3>
                        <p class="info-text">
                            A <span>healthy and sustainable</span> community of smart, resilient citizens with
                            <span>less malnutrition, morbidity, and mortality.</span>
                        </p>
                    </div>
                </div>

                <!-- Mission Box -->
                <div class="col-md-4">
                    <div class="info-box mission-box p-4 text-center">
                        <div class="icon-box">
                            <i class="bi bi-heart-pulse"></i>
                        </div>
                        <h3 class="info-title">MISSION</h3>
                        <p class="info-text">
                            To deliver <span>essential health, education, and livelihood services</span> that improve
                            the quality of life for the entire community.
                        </p>
                    </div>
                </div>

                <!-- Goals Box -->
                <div class="col-md-4">
                    <div class="info-box goals-box p-4 text-center">
                        <div class="icon-box">
                            <i class="bi bi-check-circle"></i>
                        </div>
                        <h3 class="info-title">GOALS</h3>
                        <ul class="goal-list text-start">
                            <li><i class="bi bi-dot"></i> Learn to prepare nutritious meals.</li>
                            <li><i class="bi bi-dot"></i> Equip skills for effective BNS service.</li>
                            <li><i class="bi bi-dot"></i> Promote agricultural programs & school gardens.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <style>
            /* Background & Section Styling */
            #about {
                background: #E8F5E9;
                padding: 80px 0;
                border-radius: 0 0 50px 50px;
            }

            /* Section Title */
            .section-title {
                font-size: 2.5rem;
                font-weight: 700;
                color: #1B5E20;
                text-transform: uppercase;
            }

            .section-subtitle {
                font-size: 1.2rem;
                color: #4F4F4F;
                max-width: 700px;
                margin: 0 auto;
            }

            /* Info Boxes */
            .info-box {
                background: white;
                padding: 30px;
                border-radius: 15px;
                text-align: center;
                transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
                box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
                border-left: 6px solid #2E7D32;
            }

            .info-box:hover {
                transform: translateY(-5px);
                box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.2);
            }

            /* Icons */
            .icon-box {
                width: 60px;
                height: 60px;
                background: #2E7D32;
                color: white;
                border-radius: 50%;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 1.8rem;
                margin: 0 auto 15px;
            }

            /* Text Styling */
            .info-title {
                font-size: 1.6rem;
                font-weight: bold;
                color: #1B5E20;
                text-transform: uppercase;
                margin-bottom: 15px;
            }

            .info-text {
                font-size: 1.1rem;
                color: #333;
            }

            .info-text span {
                font-weight: bold;
                color: #2E7D32;
            }

            /* Goals List */
            .goal-list {
                padding-left: 0;
                text-align: left;
                margin-top: 10px;
                list-style: none;
            }

            .goal-list li {
                font-size: 1.1rem;
                color: #333;
                display: flex;
                align-items: center;
                margin-bottom: 10px;
            }

            .goal-list i {
                color: #2E7D32;
                margin-right: 10px;
                font-size: 1.5rem;
            }
        </style>
    </section>

    {{--
    BARANGAY PROFILE
    --}}
    <section id="barangay-profile" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Barangay Profile</h2>
                <p class="section-subtitle">Name of Barangay: <span class="highlight">STO. DOMINGO</span></p>
            </div>

            <div class="row g-4">
                <!-- General Information -->
                <div class="col-md-6">
                    <div class="info-box p-4">
                        <h3 class="info-title"><i class="bi bi-house-door"></i> General Information</h3>
                        <ul class="info-list">
                            <li><i class="bi bi-geo-alt-fill"></i> Total No. of Purok: <span>7</span></li>
                            <li><i class="bi bi-people-fill"></i> Total Population: <span>1,539</span></li>
                            <li><i class="bi bi-building"></i> Total No. of Households: <span>334</span></li>
                        </ul>
                    </div>
                </div>

                <!-- Special Groups -->
                <div class="col-md-6">
                    <div class="info-box p-4">
                        <h3 class="info-title"><i class="bi bi-person-circle"></i> Special Groups</h3>
                        <ul class="info-list">
                            <li><i class="bi bi-mortarboard"></i> Total No. of Pre-Schoolers: <span>143</span></li>
                            <li><i class="bi bi-book"></i> Total No. of School Children: <span>226</span></li>
                            <li><i class="bi bi-person-heart"></i> Total No. of Pregnant Women: <span>9</span></li>
                            <li><i class="bi bi-gender-female"></i> Total No. of Lactating Women: <span>35</span></li>
                        </ul>
                    </div>
                </div>

                <!-- Preschool Children Status -->
                <div class="col-md-6">
                    <div class="info-box p-4">
                        <h3 class="info-title"><i class="bi bi-bar-chart-fill"></i> Preschool Children (PS) Status
                        </h3>
                        <ul class="info-list">
                            <li><i class="bi bi-check-circle-fill"></i> Normal Weight: <span>102</span></li>
                            <li><i class="bi bi-arrow-down-circle"></i> Underweight: <span>18</span></li>
                            <li><i class="bi bi-exclamation-circle"></i> Severely Underweight: <span>4</span></li>
                            <li><i class="bi bi-x-circle-fill"></i> Total UW & SUW: <span>22</span></li>
                            <li><i class="bi bi-graph-up"></i> Overweight & Obese: <span>1</span></li>
                            <li><i class="bi bi-clipboard-check"></i> Total PS Weighed: <span>132</span></li>
                        </ul>
                    </div>
                </div>

                <!-- School Children Status -->
                <div class="col-md-6">
                    <div class="info-box p-4">
                        <h3 class="info-title"><i class="bi bi-bar-chart"></i> School Children (SC) Status</h3>
                        <ul class="info-list">
                            <li><i class="bi bi-check-circle-fill"></i> Normal Weight: <span>152</span></li>
                            <li><i class="bi bi-arrow-down-circle"></i> Underweight: <span>18</span></li>
                            <li><i class="bi bi-exclamation-circle"></i> Overweight: <span>9</span></li>
                            <li><i class="bi bi-clipboard-check"></i> Total SC Weighed: <span>210</span></li>
                        </ul>
                    </div>
                </div>

                <!-- Additional Health & Mortality Data -->
                <div class="col-md-6">
                    <div class="info-box p-4">
                        <h3 class="info-title"><i class="bi bi-activity"></i> Health & Mortality</h3>
                        <ul class="info-list">
                            <li><i class="bi bi-calendar-check"></i> Latest Period of OPT: <span>132</span></li>
                            <li><i class="bi bi-percent"></i> OPT Coverage of Preschoolers: <span>84.06%</span></li>
                            <li><i class="bi bi-heart-pulse"></i> Age-Specific Proportionate Mortality Rate:
                                <span>N/A</span></li>
                        </ul>
                    </div>
                </div>

                <!-- Household & Occupation Data -->
                <div class="col-md-6">
                    <div class="info-box p-4">
                        <h3 class="info-title"><i class="bi bi-house-heart"></i> Household & Occupation</h3>
                        <ul class="info-list">
                            <li><i class="bi bi-tree"></i> Households w/ Gardens: <span>25</span></li>
                            <li><i class="bi bi-tools"></i> Common Occupation: <span>Construction
                                    Workers/Scrappers</span></li>
                        </ul>
                    </div>
                </div>

                <!-- Family Data -->
                <div class="col-md-12">
                    <div class="info-box p-4">
                        <h3 class="info-title"><i class="bi bi-people"></i> Family Data</h3>
                        <ul class="info-list">
                            <li><i class="bi bi-exclamation-triangle"></i> Families w/ UW & SUW PS: <span>19</span>
                            </li>
                            <li><i class="bi bi-people-fill"></i> Families w/ UW & OW SC: <span>9</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <style>
            /* Background & Section Styling */
            #barangay-profile {
                background: #E8F5E9;
                padding: 80px 0;
                border-radius: 0 0 50px 50px;
            }

            /* Section Title */
            .section-title {
                font-size: 2.5rem;
                font-weight: 700;
                color: #1B5E20;
                text-transform: uppercase;
            }

            .section-subtitle {
                font-size: 1.2rem;
                color: #4F4F4F;
                max-width: 700px;
                margin: 0 auto;
            }

            .highlight {
                font-weight: bold;
                color: #2E7D32;
            }

            /* Info Boxes */
            .info-box {
                background: white;
                padding: 30px;
                border-radius: 15px;
                text-align: left;
                transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
                box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
                border-left: 6px solid #2E7D32;
            }

            .info-box:hover {
                transform: translateY(-5px);
                box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.2);
            }

            /* Info Titles */
            .info-title {
                font-size: 1.6rem;
                font-weight: bold;
                color: #1B5E20;
                text-transform: uppercase;
                margin-bottom: 15px;
                display: flex;
                align-items: center;
                gap: 10px;
            }

            /* Info List */
            .info-list {
                list-style: none;
                padding-left: 0;
            }

            .info-list li {
                font-size: 1.1rem;
                color: #333;
                display: flex;
                align-items: center;
                margin-bottom: 10px;
                gap: 10px;
            }

            .info-list i {
                color: #2E7D32;
                font-size: 1.4rem;
            }

            .info-list span {
                font-weight: bold;
                color: #2E7D32;
            }
        </style>
    </section>

    {{-- ACTIVITIES --}}
    <style>
        #activities {
            background: #E8F5E9;
            padding: 80px 0;
            border-radius: 50px 50px 0 0;
        }
    
        #activities h2 {
            font-weight: bold;
            color: #2E7D32;
        }
    
        #activities p {
            color: #4E944F;
        }
    
        .activity-list {
            max-width: 1000px;
            margin: 0 auto;
            text-align: left;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
    
        .activity-list h4 {
            color: #1B5E20;
            margin-top: 30px;
            font-weight: 600;
        }
    
        .activity-list ul {
            list-style: none;
            padding-left: 1rem;
        }
    
        .activity-list ul li::before {
            content: '✔';
            color: #66BB6A;
            margin-right: 8px;
        }
    
        .activity-sub {
            margin-left: 20px;
            font-style: italic;
            color: #388E3C;
        }
    
    </style>
    
    <section id="activities" class="text-center">
        <div class="container">
            <h2 class="mb-3">Activities</h2>
            <p class="fs-5 text-muted">Record and track barangay nutrition initiatives seamlessly with our system.</p>
    
            <div class="activity-list text-start">
                <ul>
                    <li>Full Weighing (OPT+)/Office Supplies</li>
                    <li>Monthly/Quarterly Weighing</li>
    
                    <h4>Infant and Young Child Feeding</h4>
                    <ul>
                        <li>Presence of Lactation Area in Health Station</li>
                        <li>Breastfeeding Counselling</li>
                        <li>Distribution of IEC Materials – "Idol ko si Tatay"</li>
                        <li>Distribution of IEC Materials on Breastfeeding & Complementary Feeding</li>
                    </ul>
    
                    <h4>Integrated Management of Acute Malnutrition</h4>
                    <ul>
                        <li>Enrollment of Malnourished Children for Dietary Feeding Program</li>
                        <li>Distribution of PIMAM Tarpaulin at Barangay Health Station</li>
                    </ul>
    
                    <h4>Dietary Supplementation Program</h4>
                    <ul>
                        <li>Hot Meal Feeding Program for Pregnant Women – <span class="activity-sub">Tutok-Kainan</span></li>
                        <li>120-Day Daily Feeding for Children</li>
                    </ul>
    
                    <h4>Nutrition Promotion & Behavior Change</h4>
                    <ul>
                        <li>Nutrition Counselling</li>
                    </ul>
    
                    <h4>Micronutrient Supplementation</h4>
                    <ul>
                        <li>Vitamin A</li>
                        <li>Iron, Iron-Folic Acid, Micronutrient Powder, Calcium</li>
                    </ul>
    
                    <h4>Nutrition Emergency Response</h4>
                    <ul>
                        <li>Distribution of Food Packs</li>
                    </ul>
    
                    <h4>Overweight & Obesity Management Program</h4>
                    <ul>
                        <li>Promotion of Healthy Lifestyle</li>
                        <li>Zumba Dance</li>
                        <li>Basketball Tournament</li>
                        <li>Distribution of IEC Materials</li>
                    </ul>
    
                    <h4>Strengthening the First 1000 Days Program</h4>
                    <ul>
                        <li>Distribution of Nutrition Advocacy IEC for Youth</li>
                        <li>Breastfeeding Counselling</li>
                        <li>“Idol ko si Nanay” Campaign</li>
                        <li>Backyard Gardening & Seedling Distribution</li>
                        <li>Nutrition Month Celebration</li>
                    </ul>
                </ul>
            </div>
        </div>
    </section>
    




    {{--
ACTIVITIES --}}

    <section id="contact" class="py-5 text-center bg-light rounded shadow-sm">
        <h2 class="fw-bold mb-3">Contact Us</h2>
        <p class="fs-5 text-muted">For inquiries, reach us at <strong>email@example.com</strong> or visit the
            Barangay Sto. Domingo office.</p>
    </section>




    <!-- Custom Scrollspy Styling -->
    <style>
        .nav-link {
            transition: 0.3s ease-in-out;
        }

        .nav-link:hover {
            font-weight: bold;
        }

        .nav-link.active {
            background-color: white !important;
            border-radius: 5px;
            color: green !important;
            font-weight: bold;

        }

        section {
            padding: 80px 0;
        }
    </style>
</div>
