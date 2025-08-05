// Initialize AOS animations
document.addEventListener("DOMContentLoaded", function () {
    // Initialize AOS
    AOS.init({
        duration: 800,
        easing: "ease-in-out",
        once: true,
        mirror: false,
    });

    // Navbar scroll effect
    const navbar = document.querySelector(".navbar");
    window.addEventListener("scroll", function () {
        if (window.scrollY > 50) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }
    });

    // Counter animation
    const counters = document.querySelectorAll(".count");
    const speed = 200;

    function animateCounters() {
        counters.forEach((counter) => {
            const target = +counter.getAttribute("data-target");
            const count = +counter.innerText;
            const increment = Math.ceil(target / speed);

            if (count < target) {
                counter.innerText = count + increment;
                setTimeout(() => animateCounters(), 1);
            } else {
                counter.innerText = target;
            }
        });
    }

    // Start counter animation when stats section is in viewport
    const statsSection = document.querySelector(".stats-section");

    const observer = new IntersectionObserver(
        (entries) => {
            if (entries[0].isIntersecting) {
                animateCounters();
                observer.unobserve(entries[0].target);
            }
        },
        { threshold: 0.5 }
    );

    if (statsSection) {
        observer.observe(statsSection);
    }

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault();
            const targetId = this.getAttribute("href");

            if (targetId === "#") return;

            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: "smooth",
                });
            }
        });
    });

    // Active navigation item based on scroll position
    const sections = document.querySelectorAll("section");
    const navLinks = document.querySelectorAll(".navbar-nav .nav-link");

    window.addEventListener("scroll", () => {
        let current = "";
        const scrollPosition = window.pageYOffset + 100;

        sections.forEach((section) => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;

            if (
                scrollPosition >= sectionTop &&
                scrollPosition < sectionTop + sectionHeight
            ) {
                current = section.getAttribute("id");
            }
        });

        navLinks.forEach((link) => {
            link.classList.remove("active");
            if (link.getAttribute("href") === `#${current}`) {
                link.classList.add("active");
            }
        });
    });

    // Form validation and submission
    const contactForm = document.querySelector(".contact-form form");
    if (contactForm) {
        contactForm.addEventListener("submit", function (e) {
            e.preventDefault();

            // Simple form validation
            let isValid = true;
            const formInputs = this.querySelectorAll("input, textarea");

            formInputs.forEach((input) => {
                if (input.value.trim() === "") {
                    isValid = false;
                    input.classList.add("is-invalid");
                } else {
                    input.classList.remove("is-invalid");
                }
            });

            if (isValid) {
                // Here you would normally send the form data to your server
                // For this demo, we'll just show a success message
                const formElements = this.querySelectorAll(
                    "input, textarea, button"
                );
                formElements.forEach((el) => (el.disabled = true));

                // Create success message
                const successMessage = document.createElement("div");
                successMessage.className = "alert alert-success mt-3";
                successMessage.textContent =
                    "Votre message a été envoyé avec succès. Nous vous répondrons dans les plus brefs délais.";

                this.appendChild(successMessage);

                // Reset form after 3 seconds
                setTimeout(() => {
                    formElements.forEach((el) => {
                        el.disabled = false;
                        if (el.tagName !== "BUTTON") {
                            el.value = "";
                        }
                    });
                    successMessage.remove();
                }, 3000);
            }
        });

        // Clear validation on input
        const formInputs = contactForm.querySelectorAll("input, textarea");
        formInputs.forEach((input) => {
            input.addEventListener("input", function () {
                if (this.value.trim() !== "") {
                    this.classList.remove("is-invalid");
                }
            });
        });
    }

    // Add hover effects to service cards
    const serviceCards = document.querySelectorAll(".service-card");
    serviceCards.forEach((card) => {
        card.addEventListener("mouseenter", function () {
            this.style.transform = "translateY(-10px)";
            this.style.boxShadow = "0 15px 30px rgba(62, 100, 255, 0.1)";
        });

        card.addEventListener("mouseleave", function () {
            this.style.transform = "translateY(0)";
            this.style.boxShadow = "0 10px 30px rgba(0, 0, 0, 0.05)";
        });
    });

    // Add additional animations for app cards
    const appCards = document.querySelectorAll(".app-card");
    appCards.forEach((card) => {
        card.addEventListener("mouseenter", function () {
            const icon = this.querySelector(".app-header i");
            if (icon) {
                icon.style.transform = "rotate(360deg)";
                icon.style.transition = "transform 0.6s ease-in-out";
            }
        });

        card.addEventListener("mouseleave", function () {
            const icon = this.querySelector(".app-header i");
            if (icon) {
                icon.style.transform = "rotate(0deg)";
            }
        });
    });
});
