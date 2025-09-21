<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Portfolio</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style>
      html {
        scroll-behavior: smooth;
      }
      header {
        height: 100vh;
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <!-- Header Navbar -->
    <nav
      class="navbar navbar-expand-lg fixed-top bg-dark border-bottom border-secondary shadow-sm"
      style="
        backdrop-filter: blur(6px);
        background-color: rgba(17, 24, 39, 0.95) !important;
      "
    >
      <div class="container">
        <!-- Logo / Name -->
        <a class="navbar-brand fw-bold text-white" href="#home">
          Dinesh Kumar
        </a>

        <!-- Mobile toggle -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <button
            class="navbar-toggler border-0"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarResponsive"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
        </nav>

        <!-- Nav links -->
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link text-light px-3 py-2" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light px-3 py-2" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light px-3 py-2" href="#skills">Skills</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light px-3 py-2" href="#projects"
                >Projects</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link text-light px-3 py-2" href="#contact"
                >Contact</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Custom Hover Effect -->
    <style>
      .navbar-nav .nav-link {
        transition: color 0.3s ease;
      }
      .navbar-nav .nav-link:hover {
        color: #0d6efd !important; /* blue highlight like Tailwind hover:text-blue-400 */
      }
    </style>

    <!-- Header -->
    <!-- class="d-flex flex-column justify-content-center align-items-center text-center text-white bg-dark"
  style="min-height: 100vh; width: 100%;" -->

    <!-- Header -->
    <header
      id="home"
      class="d-flex flex-column justify-content-center align-items-center text-center text-white bg-gradient-to-r"
      style="min-height: 100vh; width: 100%"
    >
      <img
        src="profile/BSIT-profile.jpeg"
        alt="Profile Picture"
        class="rounded-circle border border-4 border-light shadow mb-3"
        style="width: 160px; height: 160px; object-fit: cover"
      />

      <h1 class="fw-bold">
        Hi I'm
        <span class="text-warning">Dinesh Kumar</span>
      </h1>

      <p class="lead">Web Developer | Designer | Programmer</p>

      <p class="px-3 px-md-5" style="max-width: 700px; font-size: 1.1rem">
        Passionate about creating beautiful, functional web applications with
        modern technologies. 2+ years of experience building scalable solutions
        and bringing ideas to life.
      </p>
    </header>

    <style>
      .bg-gradient-to-r {
        background: linear-gradient(90deg, #111827, #1f2937, #2563eb);
      }

      .name-gradient {
        background: linear-gradient(90deg, #2563eb, #9333ea);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        font-weight: bold;
      }
    </style>

    <!-- About -->
    <section id="about" class="py-5 bg-light">
      <div class="container">
        <!-- Heading -->
        <h2 class="text-center fw-bold mb-5 text-white">About</h2>

        <div class="row align-items-center">
          <!-- Left Side: Development Journey -->
          <div class="col-lg-6 mb-4 mb-lg-0 aboutpara">
            <h3 class="fw-bold text-white mb-3">My Development Journey</h3>
            <p class="text-white">
              I'm a passionate PHP developer with 2+ years of experience
              creating web applications that solve real-world problems. My
              journey began with a fascination for how things work behind the
              scenes on the web.<br /><br />

              Starting with HTML, CSS, and JavaScript, I quickly fell in love
              with the problem-solving aspect of programming. I've since
              expanded my skills to include modern frameworks like React,
              Node.js, and various databases.<br /><br />

              I thrive in collaborative environments and enjoy mentoring junior
              developers. Currently, I'm focused on building scalable
              applications and exploring new technologies like cloud computing
              and microservices architecture.
            </p>
          </div>

          <!-- Right Side: 3 Feature Boxes -->
          <div class="col-lg-6">
            <div class="row g-4">
              <!-- Box 1 -->
              <div class="col-md-6">
                <div class="about-box p-4 text-center h-100">
                  <h5 class="fw-bold mb-2 text-white">Clean Code</h5>
                  <p class="mb-0 text-white">
                    Writing maintainable, readable, and scalable code for
                    long-term projects.
                  </p>
                </div>
              </div>
              <!-- Box 2 -->
              <div class="col-md-6">
                <div class="about-box p-4 text-center h-100">
                  <h5 class="fw-bold mb-2 text-white">Problem Solving</h5>
                  <p class="mb-0 text-white">
                    Breaking down challenges into efficient solutions with
                    logical thinking.
                  </p>
                </div>
              </div>
              <!-- Box 3 -->
              <div class="col-md-12">
                <div class="about-box p-4 text-center h-100">
                  <h5 class="fw-bold mb-2 text-white">Collaboration</h5>
                  <p class="mb-0 text-white">
                    Working effectively in teams to achieve shared goals and
                    deliver quality.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CSS -->
    <style>
      .about-box {
        background-color: #1f2937;
        border-radius: 12px;
        box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
      }

      .about-box:hover {
        transform: translateY(-8px);
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.2);
      }

      #about {
        background: linear-gradient(135deg, #111827); /* light gradient bg */
      }
    </style>

    <!-- Skills -->
    <section
      id="skills"
      class="py-5"
      style="background: linear-gradient(135deg, #1f2937)"
    >
      <div class="container">
        <h2 class="text-center text-white mb-5">Skills & technologies</h2>
        <div class="row g-4">
          <!-- Frontend Box -->
          <div class="col-lg-4">
            <div class="skill-box p-4 rounded shadow-sm h-100">
              <h5 class="text-center text-white mb-4">Frontend</h5>
              <div class="mb-3">
                <label class="text-white">HTML</label>
                <div class="progress">
                  <div class="progress-bar gradient-bar" style="width: 95%">
                    95%
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <label class="text-white">CSS</label>
                <div class="progress">
                  <div class="progress-bar gradient-bar" style="width: 90%">
                    90%
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <label class="text-white">JavaScript</label>
                <div class="progress">
                  <div class="progress-bar gradient-bar" style="width: 80%">
                    80%
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <label class="text-white">Bootstrap</label>
                <div class="progress">
                  <div class="progress-bar gradient-bar" style="width: 85%">
                    85%
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <label class="text-white">React</label>
                <div class="progress">
                  <div class="progress-bar gradient-bar" style="width: 80%">
                    80%
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Backend Box -->
          <div class="col-lg-4">
            <div class="skill-box p-4 rounded shadow-sm h-100">
              <h5 class="text-center text-white mb-4">Backend</h5>
              <div class="mb-3">
                <label class="text-white">PHP</label>
                <div class="progress">
                  <div class="progress-bar gradient-bar" style="width: 85%">
                    85%
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <label class="text-white">Node.js</label>
                <div class="progress">
                  <div class="progress-bar gradient-bar" style="width: 70%">
                    70%
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <label class="text-white">CodeIgniter</label>
                <div class="progress">
                  <div class="progress-bar gradient-bar" style="width: 85%">
                    85%
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <label class="text-white">RESTful APIs</label>
                <div class="progress">
                  <div class="progress-bar gradient-bar" style="width: 80%">
                    80%
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Database & Tools Box -->
          <div class="col-lg-4">
            <div class="skill-box p-4 rounded shadow-sm h-100">
              <h5 class="text-center text-white mb-4">Database & Tools</h5>
              <div class="mb-3">
                <label class="text-white">MySQL</label>
                <div class="progress">
                  <div class="progress-bar gradient-bar" style="width: 80%">
                    80%
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <label class="text-white">Git & GitHub</label>
                <div class="progress">
                  <div class="progress-bar gradient-bar" style="width: 85%">
                    85%
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <label class="text-white">VS Code</label>
                <div class="progress">
                  <div class="progress-bar gradient-bar" style="width: 90%">
                    90%
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Extra CSS for hover effect -->
    <style>
      .skill-box {
        transition: all 0.3s ease;
        background-color: #111827;
      }
      .skill-box:hover {
        transform: translateY(-8px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
      }
      .progress {
        height: 10px;
        border-radius: 10px;
        overflow: hidden;
      }
      .progress-bar {
        font-size: 0.8rem;
        font-weight: bold;
      }

      .gradient-bar {
        background: linear-gradient(90deg, #062d81, #55b392);
        background-size: 200% 100%;
        transition: width 1.5s ease-in-out, background-position 1.5s ease-in-out;
      }

      .gradient-bar:hover {
        background-position: right center; /* animate gradient on hover */
      }
    </style>

    <!-- Projects -->
    <section
      id="projects"
      class="py-5"
      style="background: linear-gradient(135deg, #111827)"
    >
      <div class="container">
        <h2 class="text-center fw-bold text-white mb-5">Projects</h2>

        <div class="row g-4">
          <!-- Project 1 -->
          <div class="col-md-6 col-lg-6">
            <div class="project-box text-white rounded shadow h-100 p-3">
              <img
                src="profile/careers-bsit.png"
                alt="Project 1"
                class="img-fluid rounded mb-3"
              />
              <h4 class="fw-bold">Careers BSIT</h4>
              <p>
                Full-stack job portal: Apply jobs, resume upload, tracking, admin module. Built with PHP and MySQL
              </p>
              <h6 class="fw-bold mt-3">Key Features:</h6>
              <ul class="features">
                <li>Real-time updates</li>
                <li>User authentication</li>
                <li>Job Filtering</li>
                <li>File uploads</li>
              </ul>
              <h6 class="fw-bold mt-3">Technologies Used:</h6>
              <div class="tech">
                <span class="badge me-2 mb-2">HTML</span>
                <span class="badge me-2 mb-2">CSS</span>
                <span class="badge me-2 mb-2">JavaScript</span>
                <span class="badge me-2 mb-2">Bootstrap</span>
                <span class="badge me-2 mb-2">PHP</span>
              </div>
            </div>
          </div>

          <!-- Project 2 -->
          <div class="col-md-6 col-lg-6">
            <div class="project-box text-white rounded shadow h-100 p-3">
              <img
                src="profile/FYH.png"
                alt="Project 2"
                class="img-fluid rounded mb-3"
              />
              <h4 class="fw-bold">Find Your Hostel</h4>
              <p>
                Platform with hostel listings, booking, reviews, and user profiles and User/Agent modules, filters and wishlist. Built with PHP and MySQL
              </p>
              <h6 class="fw-bold mt-3">Key Features:</h6>
              <ul class="features">
                <li>Amenities</li>
                <li>Bookings</li>
                <li>Reviews</li>
                <li>Rtings</li>
                <li>Pricing</li>
                <li>Filter</li>
              </ul>
              <h6 class="fw-bold mt-3">Technologies Used:</h6>
              <div class="tech">
                <span class="badge me-2 mb-2">HTML</span>
                <span class="badge me-2 mb-2">CSS</span>
                <span class="badge me-2 mb-2">JavaScript</span>
                <span class="badge me-2 mb-2">Bootstrap</span>
                <span class="badge me-2 mb-2">PHP</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CSS -->
    <style>
      .project-box {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background-color: #1f2937;
      }

      .features {
        padding-left: 20px;
      }
      .features li {
        margin-bottom: 5px;
      }
      .tech .badge {
        padding: 10px;
        background-color: #111827;
      }
      .connect {
        background-color: #111827;
      }
      .contact-form {
        background-color: #111827;
      }
      .contact-form .form-control {
        background-color: #1f2937;
        border: none;
      }

      /* Placeholder white */
      .placeholder-white::placeholder {
        color: #ffffff !important;
        opacity: 1; /* ensure full white, not faded */
      }
    </style>

    <!-- Contact -->
    <section
      id="contact"
      class="py-5"
      style="background: linear-gradient(135deg, #1f2937)"
    >
      <div class="container">
        <h2 class="text-center fw-bold text-white mb-5">Get In Touch</h2>
        <div class="row g-4">
          <!-- Left Side -->
          <div class="col-md-6">
            <h3 class="fw-bold text-white mb-4">Let's Connect</h3>

            <div class="mb-3 p-3 rounded shadow-sm connect">
              <h6 class="fw-bold text-white">📧 Email</h6>
              <p class="mb-0">
                <a
                  href="mailto:nanidinesh965@gmail.com"
                  class="text-white text-decoration-none"
                >
                  nanidinesh965@gmail.com
                </a>
              </p>
            </div>

            <div class="mb-3 p-3 rounded shadow-sm connect">
              <h6 class="fw-bold text-white">📞 Mobile</h6>
              <p class="mb-0">
                <a
                  href="tel:+917286881281"
                  class="text-white text-decoration-none"
                >
                  +91 7286881281
                </a>
              </p>
            </div>

            <div class="mb-3 p-3 rounded shadow-sm connect">
              <h6 class="fw-bold text-white">📍 Location</h6>
              <p class="mb-0 text-white">Hyderabad, India</p>
            </div>

            <!-- <div class="mt-4 p-3 border rounded shadow-sm bg-white">
          <h6 class="fw-bold mb-3">🔗 Follow Me</h6>
          <a href="#" class="me-3 text-primary fs-4"><i class="bi bi-facebook"></i></a>
          <a href="#" class="me-3 text-info fs-4"><i class="bi bi-twitter"></i></a>
          <a href="#" class="me-3 text-danger fs-4"><i class="bi bi-instagram"></i></a>
          <a href="#" class="me-3 text-dark fs-4"><i class="bi bi-linkedin"></i></a>
          <a href="#" class="text-dark fs-4"><i class="bi bi-github"></i></a>
        </div> -->
          </div>

          <!-- Right Side -->
          <div class="col-md-6">
            <h3 class="fw-bold text-white mb-4">Send Message</h3>
            <form
              id="contactForm"
              class="p-4 rounded shadow-sm contact-form"
              action="sendemail.php"
              method="post"
            >
              <div class="mb-3">
                <input
                  type="text"
                  id="name"
                  name="fullname"
                  class="form-control p-3 rounded shadow-sm text-white placeholder-white"
                  placeholder="Your Name"
                />
              </div>
              <div class="mb-3">
                <input
                  type="email"
                  id="email"
                  name="email"
                  class="form-control p-3 rounded shadow-sm text-white placeholder-white"
                  placeholder="Your Email"
                />
              </div>
              <div class="mb-3">
                <textarea
                  id="message"
                  name="subject"
                  class="form-control p-3 rounded shadow-sm text-white placeholder-white"
                  rows="4"
                  placeholder="Your Message"
                ></textarea>
              </div>
              <button
                type="submit"
                class="btn btn-primary w-100 py-2 fw-bold shadow-sm"
              >
                Send Message
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
      <p class="mb-0">© 2025 Dinesh Kumar | All Rights Reserved</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      document
        .getElementById("contactForm")
        .addEventListener("submit", function (e) {
          e.preventDefault(); // stop form from submitting

          const name = document.getElementById("name").value.trim();
          const email = document.getElementById("email").value.trim();
          const message = document.getElementById("message").value.trim();

          // Simple validations
          if (name === "") {
            alert("Please enter your name.");
            return;
          }
          if (name.length < 3) {
            alert("Name must be at least 3 characters.");
            return;
          }

          if (!/^[a-zA-Z\s]+$/.test(name)) {
            alert("Name must contain only letters.");
            return;
          }

          if (!email.endsWith("@gmail.com")) {
            alert("Email must end with @gmail.com.");
            return;
          }
          if (!/^[a-zA-Z]{3,}[a-zA-Z0-9._%+-]*@gmail\.com$/.test(email)) {
            alert(
              "Email must start with at least 3 letters and be a valid Gmail address."
            );
            return;
          }

          if (message === "") {
            alert("Please enter your message.");
            return;
          }

          // If all is good
          alert("✅ Thank you! Your message has been sent.");
          // You can submit the form data to server here using AJAX if needed
          document.getElementById("contactForm").reset();
        });
    </script>
  </body>
</html>
