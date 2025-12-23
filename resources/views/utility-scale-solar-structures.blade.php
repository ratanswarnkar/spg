@include('layout.header')

<style>
:root {
    --green: #1e8e3e;
    --light-green: #e9f6ee;
    --black: #111;
    --gray: #555;
}

/* HERO */
.utility-hero {
    background: green;
    padding: 140px 0;
    text-align: center;
    color: #fff;
}
.utility-hero h1 {
    font-size: 48px;
    font-weight: 800;
}
.utility-hero p {
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
<section class="utility-hero">
    <div class="container">
        <h1>Utility-Scale Solar Structures</h1>
        <p>
            Heavy-duty solar mounting structures engineered for large
            utility-scale solar power plants.
        </p>
    </div>
</section>

<!-- ABOUT -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <span>Overview</span><br><br>
            <h2>Robust Structures for Utility-Scale Solar Projects</h2>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="{{ asset('img/img-600x400-3.jpg') }}" class="img-fluid rounded" alt="">
            </div>
            <div class="col-lg-6 text-content">
                <p>
                    Our Utility-Scale Solar Structures are designed to support large-capacity
                    solar power plants with superior strength, stability, and durability.
                    These structures are ideal for MW-scale installations requiring
                    long-term structural reliability.
                </p>
                <p>
                    Engineered with high-grade steel and precision fabrication, our utility
                    structures ensure excellent load-bearing capacity and resistance
                    against wind, seismic forces, and extreme weather conditions.
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
            <h2>Why Choose Our Utility-Scale Structures</h2>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="feature-box">
                    <i class="fa fa-industry"></i>
                    <h5>Heavy-Duty Construction</h5>
                    <p>Designed for large-scale solar plants with high structural loads.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="feature-box">
                    <i class="fa fa-shield-alt"></i>
                    <h5>High Wind & Seismic Resistance</h5>
                    <p>Engineered to withstand extreme weather and seismic conditions.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="feature-box">
                    <i class="fa fa-industry"></i>
                    <h5>Hot Dip Galvanized Steel</h5>
                    <p>Excellent corrosion protection for long service life.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="feature-box">
                    <i class="fa fa-map-marked-alt"></i>
                    <h5>Site-Specific Engineering</h5>
                    <p>Customized designs based on soil, wind zone, and terrain.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="feature-box">
                    <i class="fa fa-cogs"></i>
                    <h5>Fast Installation</h5>
                    <p>Optimized design reduces installation time and project cost.</p>
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
            <span>Applications</span><br><br>
            <h2>Ideal Applications</h2>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6">
                <ul>
                    <li>✔ Utility-Scale Solar Power Plants</li>
                    <li>✔ MW & GW Capacity Solar Farms</li>
                    <li>✔ Grid-Connected Solar Projects</li>
                    <li>✔ Large Open-Land Installations</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('img/img-600x400-3.jpg') }}" class="img-fluid rounded" alt="">
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta">
    <h3>Looking for Reliable Utility-Scale Solar Structures?</h3><br>
    <p>Get in touch with us for robust, customized solutions for your solar plant.</p>
    <a href="/contact">Contact Us</a>
</section>

@include('layout.footer')
