@include('layout.header')

<style>
:root {
    --green: #1e8e3e;
    --light-green: #e9f6ee;
    --black: #111;
    --gray: #555;
}

/* HERO */
.tracking-hero {
    background:green;
    padding: 140px 0;
    text-align: center;
    color: #fff;
}
.tracking-hero h1 {
    font-size: 48px;
    font-weight: 800;
}
.tracking-hero p {
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
<section class="tracking-hero">
    <div class="container">
        <h1>Solar Tracking Structures</h1>
        <p>
            Precision-engineered single-axis tracking structures designed to maximize
            solar energy generation efficiency.
        </p>
    </div>
</section>

<!-- ABOUT -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <span>Overview</span><br><br>
            <h2>High-Performance Solar Tracking Mounting Structures</h2>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="{{ asset('img/img-600x400-2.jpg') }}" class="img-fluid rounded" alt="">
            </div>
            <div class="col-lg-6 text-content">
                <p>
                    Our Solar Tracking Structures are designed to follow the sun’s movement
                    throughout the day, significantly increasing power output compared
                    to fixed structures. These systems are ideal for large-scale solar
                    power plants seeking higher efficiency and faster return on investment.
                </p>
                <p>
                    Built with robust steel components, advanced drive mechanisms, and
                    high-precision engineering, our tracking systems deliver reliable
                    performance even in demanding site conditions.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- FEATURES -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <span>Key Features</span><br> <br>
            <h2>Why Choose Our Solar Tracking Structures</h2>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="feature-box">
                    <i class="fa fa-sun"></i>
                    <h5>Increased Energy Generation</h5>
                    <p>Single-axis tracking improves power output by up to 20–25%.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="feature-box">
                    <i class="fa fa-cogs"></i>
                    <h5>Precision Drive System</h5>
                    <p>Accurate tracking mechanism ensures smooth and reliable movement.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="feature-box">
                    <i class="fa fa-shield-alt"></i>
                    <h5>High Wind Resistance</h5>
                    <p>Engineered to withstand strong wind loads and harsh climates.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="feature-box">
                    <i class="fa fa-industry"></i>
                    <h5>Hot Dip Galvanized Steel</h5>
                    <p>Long-lasting corrosion protection for outdoor installations.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="feature-box">
                    <i class="fa fa-map-marked-alt"></i>
                    <h5>Site-Specific Engineering</h5>
                    <p>Customized designs based on terrain, wind zone, and soil conditions.</p>
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
            <span>Applications</span><br> <br>
            <h2>Ideal Applications</h2>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6">
                <ul>
                    <li>✔ Utility-Scale Solar Power Plants</li>
                    <li>✔ Large Open-Land Solar Farms</li>
                    <li>✔ High-Efficiency Solar Projects</li>
                    <li>✔ MW-Scale Grid-Connected Installations</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('img/img-600x400-2.jpg') }}" class="img-fluid rounded" alt="">
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta">
    <h3>Boost Your Solar Plant Performance with Tracking Structures</h3><br>
    <p>Contact us for customized solar tracking solutions and expert support.</p>
    <a href="/contact">Contact Us</a>
</section>

@include('layout.footer')
