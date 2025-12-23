@include('layout.header')

<style>
:root {
    --green: #1e8e3e;
    --light-green: #e9f6ee;
    --black: #111;
    --gray: #555;
}

/* HERO */
.rooftop-hero {
    background: green;
    padding: 140px 0;
    text-align: center;
    color: #fff;
}
.rooftop-hero h1 {
    font-size: 48px;
    font-weight: 800;
}
.rooftop-hero p {
    max-width: 850px;
    margin: 20px auto 0;
    font-size: 18px;
}

/* SECTION */
.section {
    padding: 80px 0;
}
.section-title {
    text-align: center;
    margin-bottom: 50px;
}
.section-title h2 {
    font-size: 36px;
    font-weight: 700;
    color: var(--black);
}
.section-title span {
    color: var(--green);
    font-weight: 600;
}

/* TEXT */
.text-content p {
    color: var(--gray);
    font-size: 16px;
    line-height: 1.8;
}

/* FEATURES */
.feature-box {
    background: #fff;
    border: 1px solid #e5e5e5;
    padding: 30px;
    border-radius: 12px;
    transition: 0.3s;
    height: 100%;
}
.feature-box:hover {
    border-color: var(--green);
    transform: translateY(-6px);
}
.feature-box i {
    font-size: 34px;
    color: var(--green);
    margin-bottom: 15px;
}
.feature-box h5 {
    font-weight: 600;
    color: var(--black);
}

/* APPLICATION */
.application {
    background: var(--light-green);
}
.application li {
    color: var(--black);
    margin-bottom: 10px;
    font-size: 16px;
}

/* CTA */
.cta {
    background: var(--green);
    color: #fff;
    padding: 60px 20px;
    text-align: center;
}
.cta a {
    background: #fff;
    color: var(--green);
    padding: 14px 40px;
    border-radius: 50px;
    font-weight: 600;
    display: inline-block;
    margin-top: 15px;
    text-decoration: none;
}
</style>

<!-- HERO -->
<section class="rooftop-hero">
    <div class="container">
        <h1>Industrial Rooftop Solar Structures</h1>
        <p>
            Customized solar panel mounting structures for factories,
            warehouses, and commercial buildings.
        </p>
    </div>
</section>

<!-- ABOUT -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <span>Overview</span><br><br>
            <h2>Reliable Rooftop Structures for Industrial & Commercial Buildings</h2>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="{{ asset('img/img-600x400-4.jpg') }}" class="img-fluid rounded" alt="">
            </div>
            <div class="col-lg-6 text-content">
                <p>
                    Our Industrial Rooftop Solar Structures are engineered to support
                    solar installations on factories, warehouses, and commercial rooftops
                    without compromising building safety.
                </p>
                <p>
                    Designed with lightweight yet strong steel components, these structures
                    ensure optimal load distribution, high wind resistance, and long-term
                    performance for rooftop solar systems.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- FEATURES -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <span>Key Features</span><br><br>
            <h2>Why Choose Our Rooftop Structures</h2>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="feature-box">
                    <i class="fa fa-building"></i>
                    <h5>Lightweight Design</h5>
                    <p>Optimized structure weight to protect rooftop integrity.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="feature-box">
                    <i class="fa fa-ruler-combined"></i>
                    <h5>Customized Engineering</h5>
                    <p>Designed as per rooftop layout, load capacity, and tilt angle.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="feature-box">
                    <i class="fa fa-shield-alt"></i>
                    <h5>High Wind Resistance</h5>
                    <p>Engineered to withstand wind loads on elevated rooftops.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="feature-box">
                    <i class="fa fa-industry"></i>
                    <h5>Hot Dip Galvanized Steel</h5>
                    <p>Excellent corrosion protection for long-term rooftop installations.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="feature-box">
                    <i class="fa fa-tools"></i>
                    <h5>Easy Installation</h5>
                    <p>Designed for quick installation with minimal roof disturbance.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="feature-box">
                    <i class="fa fa-check-circle"></i>
                    <h5>Standards Compliant</h5>
                    <p>Manufactured as per MNRE and international quality standards.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- APPLICATION -->
<section class="section application">
    <div class="container">
        <div class="section-title">
            <span>Applications</span><br><br>
            <h2>Ideal Applications</h2>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6">
                <ul>
                    <li>✔ Industrial Factory Rooftops</li>
                    <li>✔ Warehouses & Logistics Centers</li>
                    <li>✔ Commercial Buildings & Offices</li>
                    <li>✔ Shopping Malls & Institutions</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('img/img-600x400-4.jpg') }}" class="img-fluid rounded" alt="">
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta">
    <h3>Plan Your Rooftop Solar Installation with Confidence</h3><br>
    <p>Contact us for customized industrial rooftop solar structure solutions.</p>
    <a href="/contact">Contact Us</a>
</section>

@include('layout.footer')
