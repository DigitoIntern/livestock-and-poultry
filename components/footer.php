 <footer>
        <div class="container ">
            <div class="row">
                <div class="col-md-2">
                    <div class="footer-logo">
                        <img src="assets/images/logo.jpg" alt="Dennis Livestock and Poultry Farm Ltd"
                            class="circular-dotted-logo">
                        <div class="col-md-4">
                            <h1 class="two-colored-name">Dennis <span>Livestock and Poultry Farm</span></h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="">
                        <h2>Sign Up for Our Newsletter</h2>
                        <form class="">
                            <div class="input-group">
                                <input type="email" class="form-control form-control-sm"
                                    placeholder="Enter your email address">
                                <input type="submit" class="btn btn-danger form-control form-control-sm"
                                    value="Sign up" />
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="">
                        <h2>Contact Us</h2>
                        <p>Email: <a
                                href="mailto:info@dennislivestockandpoultryfarm.com">info@dennislivestockandpoultryfarm.com</a>
                        </p>
                        <p>Telephone: +256 759 232 608 / 0788 502 868 / 0754 534 856</p>
                        <p> Kampala, Uganda</p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="">
                        <h2>Follow Us</h2>
                        <ul class="social-links">
                            <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>&copy; 2025 Dennis Livestock and Poultry Farm Ltd. All rights reserved.</p>
        </div>

    </footer>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/fontawasome/js/all.min.js"></script>
    <script src="assets/Custom.js"></script>
    <script>
        const wrapper = document.querySelector(".wrapper"),
            signupHeader = document.querySelector(".signup header"),
            loginHeader = document.querySelector(".login header");
        loginHeader.addEventListener("click", () => {
            wrapper.classList.add("active");
        });
        signupHeader.addEventListener("click", () => {
            wrapper.classList.remove("active");
        });
    </script>
</body>

</html>