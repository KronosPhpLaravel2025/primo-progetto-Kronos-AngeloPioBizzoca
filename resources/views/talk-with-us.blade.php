<x-main>
<div class="text-center pt-5 mb-4">
    <h3 class="fw-bold text-uppercase d-inline-block border-bottom border-secondary pb-2">
        Get in touch with us
    </h3>
</div>
<div class="container d-flex justify-content-center align-items-center mt-3 flex-column">
    <form class="w-50 p-4 bg-light rounded-3 shadow-sm">      
        <div class="mb-3">
            <label for="emailInput" class="form-label text-secondary fw-semibold">Email address</label>
            <input type="email" class="form-control form-control-sm border-secondary" id="emailInput" placeholder="Enter here your email">
        </div>
        <div class="mb-3">
            <label for="messageInput" class="form-label text-secondary fw-semibold">Message</label>
            <textarea class="form-control form-control-sm border-secondary" id="messageInput" rows="4" placeholder="Enter here your message"></textarea>
        </div>
        <button type="submit" class="btn btn-outline-secondary btn-lg w-100 fw-semibold mt-3">
            Send the message
        </button>
    </form>
</div>
<hr class="m-0 border-secondary mt-5">
</x-main>