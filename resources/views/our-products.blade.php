<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kronos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom">
      <div class="container-fluid"><a class="navbar-brand fw-semibold d-flex align-items-center gap-1"><img src="https://cdn-icons-png.flaticon.com/128/17648/17648808.png" alt="Logo" class="img-fluid" style="height: 1.5em;"> Kronos Agency </a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav w-100 d-flex justify-content-evenly align-items-center">
            <li class="nav-item"><a class="nav-link text-body fw-light d-flex align-items-center gap-1 text-decoration-none" href="/"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
                  <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z" />
                </svg> Homepage </a></li>
            <li class="nav-item"><a class="nav-link text-body fw-light d-flex align-items-center gap-1 text-decoration-none" href="/talk-with-us"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                  <path d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                </svg> Talk with us </a></li>
            <li class="nav-item"><a class="nav-link text-body fw-light d-flex align-items-center gap-1 text-decoration-none" href="/our-products"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lightbulb-fill" viewBox="0 0 16 16">
                  <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13h-5a.5.5 0 0 1-.46-.302l-.761-1.77a2 2 0 0 0-.453-.618A5.98 5.98 0 0 1 2 6m3 8.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1-.5-.5" />
                </svg> Our products </a></li>
            <li class="nav-item"><a class="nav-link text-body fw-light d-flex align-items-center gap-1 text-decoration-none" href="/services"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-diagram-3-fill" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H14a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 2 7h5.5V6A1.5 1.5 0 0 1 6 4.5zm-6 8A1.5 1.5 0 0 1 1.5 10h1A1.5 1.5 0 0 1 4 11.5v1A1.5 1.5 0 0 1 2.5 14h-1A1.5 1.5 0 0 1 0 12.5zm6 0A1.5 1.5 0 0 1 7.5 10h1a1.5 1.5 0 0 1 1.5 1.5v1A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5z" />
                </svg> Services </a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container min-vh-100 d-flex align-items-center pt-3 pb-3">
      <div class="row justify-content-center g-4 w-100">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center">
          <div class="card border rounded-3 p-3 d-flex flex-column" style="width: 15rem;"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQA3mQ6t2c0CzxOvwiludFf9t-h8nAaIjAwaw&s" class="card-img-top rounded" alt="...">
            <div class="card-body text-center d-flex flex-column mt-2">
              <h5 class="card-title mb-2">Cybersecurity Consulting</h5>
              <p class="card-text mb-3 flex-grow-1">Protect your business from digital threats with tailored strategies. We identify vulnerabilities, guide on security protocols, and train staff to ensure a safe and secure digital environment.</p><a href="#" class="btn btn-outline-secondary w-100 mt-auto">Go to details</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center">
          <div class="card border rounded-3 p-3 d-flex flex-column" style="width: 15rem;"><img src="https://t4.ftcdn.net/jpg/05/89/42/79/360_F_589427987_DHuYZn4ZIhPQVSA5aoQYiWw5inuKCWig.jpg" class="card-img-top rounded" alt="...">
            <div class="card-body text-center d-flex flex-column mt-2">
              <h5 class="card-title mb-2">Data Analysis & Reports</h5>
              <p class="card-text mb-3 flex-grow-1">Turn your company’s data into actionable insights. We analyze trends, create clear reports with dashboards, and provide recommendations to optimize decisions and boost performance.</p><a href="#" class="btn btn-outline-secondary w-100 mt-auto">Go to details</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center">
          <div class="card border rounded-3 p-3 d-flex flex-column" style="width: 15rem;"><img src="https://t4.ftcdn.net/jpg/01/92/13/65/360_F_192136561_9jE272lofBue3oF1ZyfdLJKvLzpg9EN9.jpg" class="card-img-top rounded" alt="...">
            <div class="card-body text-center d-flex flex-column mt-2">
              <h5 class="card-title mb-2">Human Resource</h5>
              <p class="card-text mb-3 flex-grow-1">Support your company in managing and developing your workforce. We provide recruitment, training, and personalized strategies to boost productivity, employee well-being, and business growth.</p><a href="#" class="btn btn-outline-secondary w-100 mt-auto">Go to details</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr class="m-0 border-secondary">
    <footer class="bg-body-tertiary text-center py-4">
      <div class="container">
        <div class="row justify-content-center gx-5">
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-3 fw-light text-center text-md-start">Follow Us</h5>
            <div class="d-flex justify-content-center justify-content-md-start">
              <div class="d-flex flex-column me-3">
                <img src="https://cdn-icons-png.flaticon.com/128/49/49354.png" alt="Facebook" class="img-fluid mb-2" style="width:25px; height:25px;">
                <img src="https://cdn-icons-png.flaticon.com/128/2991/2991147.png" alt="Google" class="img-fluid mb-2" style="width:25px; height:25px;"><img src="https://cdn-icons-png.flaticon.com/128/25/25657.png" alt="Github" class="img-fluid mb-2" style="width:25px; height:25px;">
                <img src="https://cdn-icons-png.flaticon.com/128/25/25320.png" alt="LinkedIn" class="img-fluid mb-2" style="width:25px; height:25px;">
                <img src="https://cdn-icons-png.flaticon.com/128/3670/3670274.png" alt="Instagram" class="img-fluid mb-2" style="width:25px; height:25px;">
                <img src="https://cdn-icons-png.flaticon.com/128/5968/5968830.png" alt="X" class="img-fluid mb-2" style="width:25px; height:25px;">
              </div>
              <div class="d-flex flex-column">
                <a href="#!" class="text-body text-decoration-none mb-2 fw-light">Facebook</a>
                <a href="#!" class="text-body text-decoration-none mb-2 fw-light">Google</a>
                <a href="#!" class="text-body text-decoration-none mb-2 fw-light">Github</a>
                <a href="#!" class="text-body text-decoration-none mb-2 fw-light">LinkedIn</a>
                <a href="#!" class="text-body text-decoration-none mb-2 fw-light">Instagram</a>
                <a href="#!" class="text-body text-decoration-none mb-2 fw-light">X</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-3 fw-light">Contact</h5>
            <ul class="list-unstyled mb-0 text-center small">
              <li class="mb-2"><a class="text-body fw-light text-decoration-none">Head Office: Via della Repubblica 100, Rome, Italy</a></li>
              <li class="mb-2"><a class="text-body fw-light text-decoration-none">Operational Office: Via dei Lavoratori 3, Milan, Italy</a></li>
              <li class="mb-2"><a class="text-body fw-light text-decoration-none">P.IVA: 1234567890</a></li>
              <li class="mb-2"><a class="text-body fw-light text-decoration-none">Email: kronos@example.com</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>