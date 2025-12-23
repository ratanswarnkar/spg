@include('layout.header')

<style>
:root {
    --green: #1e8e3e;
    --light-green: #e9f6ee;
    --black: #111;
    --gray: #555;
}

/* HERO */
.galvanized-hero {
    background: green;
    padding: 140px 0;
    text-align: center;
    color: #fff;
}
.galvanized-hero h1 {
    font-size: 48px;
    font-weight: 800;
}
.galvanized-hero p {
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
<section class="galvanized-hero">
    <div class="container">
        <h1>Galvanized Corrosion-Resistant Structures</h1>
        <p>
            Hot dip galvanized solar structures ensuring long life and
            superior corrosion resistance in harsh environments.
        </p>
    </div>
</section>

<!-- ABOUT -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <span>Overview</span><br><br>
            <h2>Long-Lasting Solar Structures with Superior Corrosion Protection</h2>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="{{ asset('img/img-600x400-6.jpg') }}" class="img-fluid rounded" alt="">
            </div>
            <div class="col-lg-6 text-content">
                <p>
                    Our Galvanized Solar Structures are manufactured using hot dip
                    galvanization technology, providing a thick zinc coating that
                    protects steel from rust and corrosion for decades.
                </p>
                <p>
                    These structures are ideal for solar installations in coastal areas,
                    industrial zones, high-humidity regions, and other harsh environments
                    where corrosion resistance is critical.
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
            <h2>Why Choose Hot Dip Galvanized Structures</h2>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="feature-box">
                    <i class="fa fa-shield-alt"></i>
                    <h5>Superior Corrosion Resistance</h5>
                    <p>Thick zinc coating protects steel against rust and oxidation.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="feature-box">
                    <i class="fa fa-clock"></i>
                    <h5>Extended Service Life</h5>
                    <p>Designed to last 25+ years with minimal maintenance.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="feature-box">
                    <i class="fa fa-water"></i>
                    <h5>Harsh Environment Ready</h5>
                    <p>Ideal for coastal, industrial, and high-humidity regions.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="feature-box">
                    <i class="fa fa-industry"></i>
                    <h5>Hot Dip Galvanization</h5>
                    <p>Uniform zinc coating as per IS and international standards.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="feature-box">
                    <i class="fa fa-layer-group"></i>
                    <h5>High Structural Strength</h5>
                    <p>Maintains load-bearing capacity throughout service life.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="feature-box">
                    <i class="fa fa-check-circle"></i>
                    <h5>Standards Compliant</h5>
                    <p>Manufactured as per MNRE, IS, and global quality standards.</p>
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
                    <li>✔ Coastal & High-Humidity Solar Installations</li>
                    <li>✔ Utility-Scale Solar Power Plants</li>
                    <li>✔ Industrial & Chemical Zone Projects</li>
                    <li>✔ Long-Life Solar Infrastructure</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('img/img-600x400-6.jpg') }}" class="img-fluid rounded" alt="">
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta">
    <h3>Build Long-Lasting Solar Projects with Galvanized Structures</h3><br>
    <p>Contact us for corrosion-resistant solar structure solutions.</p>
    <a href="/contact">Contact Us</a>
</section>

@include('layout.footer')
