    <!-- Footer -->
    <footer id="footer">
        <div class="container">
            <div class="row g-4 align-items-center text-center text-md-start">
                <!-- Logo & Name -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <img src="images/icons/Logo_DKR.png" alt="DKR Logo" height="50" class="mb-3" />
                    <h5 class="mb-0">PT Dharmakerta Raharja</h5>
                </div>
                <!-- Contact Info -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="mb-2 d-flex align-items-start">
                        <i class="fas fa-map-marker-alt me-2 text-primary-theme mt-1"></i>
                        <div>
                            <strong>Malang:</strong><br>
                            Jl. Sulawesi No.12, Malang
                        </div>
                    </div>
                    <div class="mb-2 d-flex align-items-start">
                        <i class="fas fa-map-marker-alt me-2 text-primary-theme mt-1"></i>
                        <div>
                            <strong>Cirebon:</strong><br>
                            Jl. Pangeran Antasari No.25, Cirebon
                        </div>
                    </div>
                    <div class="mb-2 d-flex align-items-start mt-3">
                        <i class="fas fa-phone me-2 text-primary-theme mt-1"></i>
                        <a href="https://wa.me/6281222666379" target="_blank">+62 812-2266-6379</a>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="col-md-4 text-md-end social-links" data-aos="fade-up" data-aos-delay="300">
                    <a href="https://www.instagram.com/my_dkrid/" target="_blank" title="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
            <hr />
            <div class="text-center small text-secondary">
                &copy; 2025 PT Dharmakerta Raharja. All rights reserved.
            </div>
        </div>
    </footer>
    
    <!-- Back to Top -->
    <button id="backTop" title="Back to Top">
        <i class="fas fa-arrow-up"></i>
    </button>
    
    <!-- Image Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center p-4">
                    <h4 id="modalTitle" class="mb-4"></h4>
                    <img id="modalImage" src="" alt="" class="img-fluid rounded-4 shadow-sm mb-4 w-100" />
                    <p id="modalDescription" class="text-muted fs-5 mb-0"></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Library Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        AOS.init({ once: true, offset: 50 });

        document.querySelectorAll('.clickable-image').forEach(img => {
            img.addEventListener('click', () => {
                document.getElementById('modalImage').src = img.getAttribute('src');
                document.getElementById('modalTitle').textContent = img.getAttribute('data-title');
                document.getElementById('modalDescription').textContent = img.getAttribute('data-description');
            });
        });

        const nav = document.getElementById('mainNav');
        const backTopBtn = document.getElementById('backTop');
        
        window.addEventListener('scroll', () => {
            // Jika bukan homepage, navbar sudah memiliki class solid-bg (dari header.php)
            // Namun untuk homepage, kita tambahkan class 'scrolled'
            if (window.scrollY > 50) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
            
            if (window.scrollY > 300) {
                backTopBtn.classList.add('visible');
            } else {
                backTopBtn.classList.remove('visible');
            }
        });
        
        backTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    </script>
</body>
</html>
