<?php include 'header.php'; ?>

    <style>
        .contact-section {
            background-color: #f4f6c9; /* Light greenish yellow background matching screenshot */
            background: linear-gradient(135deg, #fbfaf8 0%, #e6eaba 100%);
        }
        .contact-form-card {
            background: #fff;
            border-radius: 12px;
            padding: 3rem;
            box-shadow: 0 15px 40px rgba(0,0,0,0.05);
            height: 100%;
        }
        .contact-form-card h2 {
            color: #d8a000;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }
        .form-control, .form-select {
            border-radius: 8px;
            padding: 0.75rem 1rem;
            border-color: #e0e0e0;
        }
        .btn-submit {
            background-color: #f2a900;
            color: #fff;
            border: none;
            padding: 1rem;
            font-weight: 600;
            border-radius: 8px;
            width: 100%;
            transition: all 0.3s;
        }
        .btn-submit:hover {
            background-color: #d89600;
        }
        
        .contact-info-card {
            background-color: #4f5a43;
            color: #fff;
            border-radius: 12px;
            padding: 3rem;
            height: 100%;
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }
        .contact-info-card h4 {
            color: #f2a900;
            font-weight: 700;
            margin-bottom: 2rem;
        }
        .contact-info-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1.5rem;
        }
        .contact-info-icon {
            color: #f2a900;
            font-size: 1.2rem;
            width: 25px;
            text-align: center;
            margin-right: 0.75rem;
            margin-top: 0.15rem;
        }
        .contact-info-text strong {
            display: block;
            color: #fff;
            margin-bottom: 0.25rem;
            line-height: 1.2;
        }
        .contact-info-text p {
            margin-bottom: 0;
            font-size: 0.95rem;
            color: #e0e0e0;
        }
        .btn-save-contact {
            background-color: #f2a900;
            color: #fff;
            border: none;
            padding: 0.75rem;
            font-weight: 600;
            border-radius: 8px;
            width: 100%;
            margin-top: 1rem;
            transition: all 0.3s;
        }
        
        .map-card {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            display: flex;
            flex-direction: row;
            margin-bottom: 3rem;
            position: relative;
        }
        /* Decorative squiggles behind map */
        .map-decorator {
            position: absolute;
            top: -20px;
            left: -20px;
            width: 120px;
            height: 120px;
            background-color: #f2a900;
            border-radius: 20px;
            z-index: 0;
        }
        .map-iframe-container {
            flex: 1;
            min-height: 350px;
            position: relative;
            z-index: 1;
            padding: 1.5rem;
        }
        .map-iframe-container iframe {
            border-radius: 15px;
            width: 100%;
            height: 100%;
        }
        .map-info {
            flex: 1;
            padding: 3rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: #fff;
            z-index: 1;
        }
        .map-info h3 {
            color: #2e593a;
            font-weight: 700;
            position: relative;
            margin-bottom: 1.5rem;
        }
        .map-info h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            width: 50px;
            height: 3px;
            background: #cdd635;
        }
        .btn-open-map {
            border: 2px solid #7cb342;
            color: #2e593a;
            background: transparent;
            border-radius: 30px;
            padding: 0.6rem 1.5rem;
            font-weight: 600;
            display: inline-block;
            margin-top: 1rem;
            width: max-content;
            transition: all 0.3s;
        }
        .btn-open-map:hover {
            background: #7cb342;
            color: #fff;
        }
        
        @media (max-width: 768px) {
            .map-card {
                flex-direction: column;
            }
            .map-iframe-container {
                min-height: 250px;
            }
        }
    </style>

    <header class="page-header">
        <div class="container" data-aos="zoom-in">
            <h1>Contact Us</h1>
            <p class="lead">Get in touch with PT Dharmakerta Raharja</p>
        </div>
    </header>

    <main>
        <!-- Contact Form Section -->
        <section class="py-5 contact-section">
            <div class="container py-4">
                <div class="row g-4 align-items-stretch">
                    <!-- Form -->
                    <div class="col-lg-8" data-aos="fade-right">
                        <div class="contact-form-card">
                            <h2>Contact Us</h2>
                            <p class="text-muted mb-4">We will respond to your message as soon as possible</p>
                            
                            <form id="waForm" onsubmit="sendWA(event)">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="nama" placeholder="Name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" id="email" placeholder="Email Address" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="tel" class="form-control" id="telepon" placeholder="Phone" required>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select" id="alasan" required>
                                            <option value="" disabled selected>Reason for Contacting</option>
                                            <option value="Program Information">Program Information</option>
                                            <option value="Partnership">Partnership</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" id="pesan" rows="5" placeholder="Message" required></textarea>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn-submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <!-- Info -->
                    <div class="col-lg-4" data-aos="fade-left">
                        <div class="contact-info-card">
                            <h4>Contact Information</h4>
                            
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-info-text">
                                    <strong>Malang Office</strong>
                                    <p>Jl. Sulawesi No.12, Malang</p>
                                </div>
                            </div>
                            
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-info-text">
                                    <strong>Cirebon Office</strong>
                                    <p>Jl. Pangeran Antasari No.25, Cirebon</p>
                                </div>
                            </div>
                            
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="contact-info-text">
                                    <strong>Email</strong>
                                    <p>info@sekawangroup.org</p>
                                </div>
                            </div>
                            
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="contact-info-text">
                                    <strong>Phone</strong>
                                    <p>+62 812-2266-6379</p>
                                </div>
                            </div>
                            
                            <button class="btn-save-contact mt-3"><i class="fas fa-user-plus me-2"></i> Save to Contacts</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Maps Section -->
        <section class="py-5 bg-light-soft">
            <div class="container py-4">
                <div class="text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Our Locations</h2>
                </div>
                
                <!-- Address 1 Map -->
                <div class="position-relative" data-aos="fade-up" data-aos-delay="100">
                    <div class="map-card">
                        <div class="map-iframe-container">
                            <iframe src="https://maps.google.com/maps?q=PT+Dharmakerta+Raharja,+Malang&t=&z=14&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                        <div class="map-info">
                            <h3>Address 1</h3>
                            <div class="d-flex align-items-start mt-3">
                                <i class="fas fa-map-marker-alt fs-4 text-success me-3 mt-1"></i>
                                <p class="mb-0 text-muted">Jl. Sulawesi No.12, Kasin, Kec. Klojen, Kota Malang, Jawa Timur 65117</p>
                            </div>
                            <a href="https://maps.google.com/maps?vet=10CAAQoqAOahcKEwiw05aq0dOUAxUAAAAAHQAAAAAQIA..i&pvq=Cg0vZy8xMWcxMTg5NXhoIhwKFlBUIERoYXJtYWtlcnRhIFJhaGFyamEQAhgD&lqi=ChZQVCBEaGFybWFrZXJ0YSBSYWhhcmphSI-vkpSEroCACFooEAAQARACGAAYARgCIhZwdCBkaGFybWFrZXJ0YSByYWhhcmphMgJpZJIBEWVtcGxveW1lbnRfYWdlbmN5&fvr=1&cs=0&um=1&ie=UTF-8&fb=1&gl=id&sa=X&ftid=0x2dd629fc632d5b55:0x6d6496506caa2b37" target="_blank" class="btn-open-map">Open in Google Maps</a>
                        </div>
                    </div>
                </div>

                <!-- Address 2 Map -->
                <div class="position-relative mt-5" data-aos="fade-up" data-aos-delay="200">                    
                    <div class="map-card flex-row-reverse">
                        <div class="map-iframe-container">
                            <iframe src="https://maps.google.com/maps?q=Jl.+Pangeran+Antasari+No.25,+Plumbon,+Cirebon&t=&z=14&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                        <div class="map-info">
                            <h3>Address 2</h3>
                            <div class="d-flex align-items-start mt-3">
                                <i class="fas fa-map-marker-alt fs-4 text-success me-3 mt-1"></i>
                                <p class="mb-0 text-muted">Jl. Pangeran Antasari No.25, Purbawinangun, Kec. Plumbon, Kabupaten Cirebon, Jawa Barat 45155</p>
                            </div>
                            <a href="https://maps.google.com/maps?vet=10CAAQoqAOahcKEwiw05aq0dOUAxUAAAAAHQAAAAAQFA..i&pvq=Cg0vZy8xMXlxeW4wamxsIhwKFlBUIERoYXJtYWtlcnRhIFJhaGFyamEQAhgD&lqi=ChZQVCBEaGFybWFrZXJ0YSBSYWhhcmphSNKEgdrbvYCACFooEAAQARACGAAYARgCIhZwdCBkaGFybWFrZXJ0YSByYWhhcmphMgJpZJIBEGNvcnBvcmF0ZV9vZmZpY2U&fvr=1&cs=0&um=1&ie=UTF-8&fb=1&gl=id&sa=X&ftid=0x2e6ee1007ce56249:0x5eefe7f028dea9bc" target="_blank" class="btn-open-map">Open in Google Maps</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
    </main>

    <script>
        function sendWA(e) {
            e.preventDefault();
            const nama = encodeURIComponent(document.getElementById('nama').value);
            const email = encodeURIComponent(document.getElementById('email').value);
            const telepon = encodeURIComponent(document.getElementById('telepon').value);
            const alasan = encodeURIComponent(document.getElementById('alasan').value);
            const pesan = encodeURIComponent(document.getElementById('pesan').value);
            
            const text = `Hello DKR, I would like to contact you.%0A%0A*Name:* ${nama}%0A*Email:* ${email}%0A*Phone:* ${telepon}%0A*Reason:* ${alasan}%0A%0A*Message:*%0A${pesan}`;
            
            window.open(`https://wa.me/6281222666379?text=${text}`, '_blank');
        }
    </script>

<?php include 'footer.php'; ?>
