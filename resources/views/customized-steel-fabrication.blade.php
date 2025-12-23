@include('layout.header')

<style>
:root {
    --green: #1e8e3e;
    --light-green: #e9f6ee;
    --black: #111;
    --gray: #555;
}

/* HERO */
.fabrication-hero {
    background: green;
    padding: 140px 0;
    text-align: center;
    color: #fff;
}
.fabrication-hero h1 {
    font-size: 48px;
    font-weight: 800;
}
.fabrication-hero p {
    max-width: 900px;
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
<section class="fabrication-hero">
    <div class="container">
        <h1>Customized Steel Fabrication</h1>
        <p>
            Site-specific solar structure fabrication designed to meet wind load,
            seismic, and soil conditions.
        </p>
    </div>
</section>

<!-- ABOUT -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <span>Overview</span><br><br>
            <h2>Engineering-Driven Solar Structure Fabrication Solutions</h2>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="{{ asset('img/img-600x400-5.jpg') }}" class="img-fluid rounded" alt="">
            </div>
            <div class="col-lg-6 text-content">
                <p>
                    Our Customized Steel Fabrication services deliver precision-engineered
                    solar mounting structures tailored to specific project requirements.
                    Every structure is designed based on site location, wind zone,
                    seismic activity, and soil conditions.
                </p>
                <p>
                    With advanced fabrication facilities and strict quality control,
                    we ensure high structural integrity, durability, and long service life
                    for utility-scale, commercial, and industrial solar installations.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- FEATURES -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <span>Key Capabilities</span><br><br>
            <h2>Why Choose Our Steel Fabrication</h2>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="feature-box">
                    <i class="fa fa-drafting-compass"></i>
                    <h5>Site-Specific Design</h5>
                    <p>Custom engineering based on wind load, seismic zone, and terrain.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="feature-box">
                    <i class="fa fa-layer-group"></i>
                    <h5>High Structural Strength</h5>
                    <p>Fabricated using high-grade steel for maximum load capacity.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="feature-box">
                    <i class="fa fa-shield-alt"></i>
                    <h5>Wind & Seismic Resistant</h5>
                    <p>Designed to withstand extreme weather and seismic conditions.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="feature-box">
                    <i class="fa fa-industry"></i>
                    <h5>Hot Dip Galvanization</h5>
                    <p>Superior corrosion protection for long-term outdoor performance.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="feature-box">
                    <i class="fa fa-tools"></i>
                    <h5>Precision Fabrication</h5>
                    <p>Advanced machinery ensures dimensional accuracy and consistency.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="feature-box">
                    <i class="fa fa-check-circle"></i>
                    <h5>Standards Compliant</h5>
                    <p>Manufactured as per MNRE, IS, and international standards.</p>
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
            <h2>Where Our Fabrication Is Used</h2>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6">
                <ul>
                    <li>✔ Utility-Scale Solar Power Plants</li>
                    <li>✔ Industrial & Commercial Solar Projects</li>
                    <li>✔ Rooftop & Ground-Mounted Installations</li>
                    <li>✔ High Wind & Seismic Zone Projects</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('img/img-600x400-5.jpg') }}" class="img-fluid rounded" alt="">
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta">
    <h3>Need Site-Specific Solar Structure Fabrication?</h3><br>
    <p>Contact us for customized steel fabrication solutions tailored to your project.</p>
    <a href="/contact">Contact Us</a>
</section>

@include('layout.footer')
