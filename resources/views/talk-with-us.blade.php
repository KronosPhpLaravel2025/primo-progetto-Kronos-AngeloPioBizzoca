<x-main>
    <x-navba></navbar>
    <div class="text-center pt-5 mb-2">
      <h3 class="fw-semibold text-uppercase d-inline-block">
      Get in touch with us
      </h3>
    </div>
    <div class="container d-flex justify-content-center align-items-center mt-3 flex-column">
      <form class="w-50 p-4 bg-light rounded shadow">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-outline-secondary w-100">Submit</button>
      </form>
    </div>
    <hr class="m-0 border-secondary mt-5">
    <x-footer></x-footer>
  </x-main>