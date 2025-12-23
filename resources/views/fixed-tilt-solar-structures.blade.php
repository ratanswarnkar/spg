@include('layout.header')

<style>
:root {
    --green: #1e8e3e;
    --light-green: #e9f6ee;
    --black: #111;
    --gray: #555;
}

/* HERO */
.fixed-hero {
    background: green;
    padding: 140px 0;
    text-align: center;
    color: #fff;
}
.fixed-hero h1 {
    font-size: 48px;
    font-weight: 800;
}
.fixed-hero p {
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
<section class="fixed-hero">
    <div class="container">
        <h1>Fixed Tilt Solar Structures</h1>
        <p>
            Strong and durable fixed tilt mounting structures designed for
            ground-mounted and rooftop solar installations.
        </p>
    </div>
</section>

<!-- ABOUT -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <span>Overview</span><br><br>
            <h2>High-Strength Fixed Tilt Solar Mounting Structures</h2>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="{{ asset('img/img-600x400-1.jpg') }}" class="img-fluid rounded" alt="">
            </div>
            <div class="col-lg-6 text-content">
                <p>
                    Our Fixed Tilt Solar Structures are engineered for stability,
                    durability, and long-term performance. These systems provide
                    an economical and reliable solution for solar projects where
                    maximum structural strength is essential.
                </p>
                <p>
                    Manufactured using premium-grade steel with hot-dip galvanization,
                    our structures ensure corrosion resistance and extended service life
                    even in harsh environmental conditions.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- FEATURES -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <span>Key Features</span>
            <h2>Why Choose Our Fixed Tilt Structures</h2>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="feature-box">
                    <i class="fa fa-shield-alt"></i>
                    <h5>High Load Bearing Capacity</h5>
                    <p>Designed to withstand strong wind loads and environmental stress.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="feature-box">
                    <i class="fa fa-industry"></i>
                    <h5>Hot Dip Galvanized</h5>
                    <p>Superior corrosion protection for long-term outdoor durability.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="feature-box">
                    <i class="fa fa-cogs"></i>
                    <h5>Simple & Fast Installation</h5>
                    <p>Optimized design ensures reduced installation time and cost.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="feature-box">
                    <i class="fa fa-map-marked-alt"></i>
                    <h5>Site-Specific Design</h5>
                    <p>Customized tilt angles based on geographic and project needs.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="feature-box">
                    <i class="fa fa-solar-panel"></i>
                    <h5>Optimized Energy Output</h5>
                    <p>Engineered for optimal panel orientation and solar exposure.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="feature-box">
                    <i class="fa fa-check-circle"></i>
                    <h5>Standards Compliant</h5>
                    <p>Manufactured as per MNRE and international standards.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- APPLICATION -->
<section class="section application">
    <div class="container">
        <div class="section-title">
            <span>Applications</span>
            <h2>Ideal Applications</h2>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6">
                <ul>
                    <li>✔ Utility-Scale Solar Power Plants</li>
                    <li>✔ Commercial & Industrial Rooftop Projects</li>
                    <li>✔ Residential Solar Installations</li>
                    <li>✔ Ground-Mounted Solar Farms</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('img/img-600x400-1.jpg') }}" class="img-fluid rounded" alt="">
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta">
    <h3>Need Fixed Tilt Solar Structures for Your Project?</h3>
    <p>Get expert support and customized solutions from our team.</p>
    <a href="/contact">Contact Us</a>
</section>

@include('layout.footer')
