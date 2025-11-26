<x-main>
<div class="text-center pt-5 mb-4">
    <h3 class="fw-bold text-uppercase d-inline-block pb-2 border-bottom border-secondary">
        Add New Product
    </h3>
</div>
<div class="container d-flex justify-content-center align-items-center flex-column mb-5">
    <form class="w-50 p-4 bg-light rounded-3 shadow-sm" action="/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label text-secondary fw-semibold">Key</label>
            <input type="text" name="key" class="form-control form-control-sm border-secondary" placeholder="Enter here the key">
        </div>
        <div class="mb-3">
            <label class="form-label text-secondary fw-semibold">Name</label>
            <input type="text" name="name" class="form-control form-control-sm border-secondary" placeholder="Enter here the name">
        </div>
        <div class="mb-3">
            <label class="form-label text-secondary fw-semibold">Icon</label>
            <input type="file" name="icon" class="form-control form-control-sm border-secondary">
        </div>
        <div class="mb-3">
            <label class="form-label text-secondary fw-semibold">Image</label>
            <input type="file" name="image" class="form-control form-control-sm border-secondary">
        </div>
        <div class="mb-3">
            <label class="form-label text-secondary fw-semibold">Description</label>
            <textarea class="form-control form-control-sm border-secondary" rows="3" name="description" placeholder="Enter here the description"></textarea>
        </div>
        <button type="submit" class="btn btn-outline-secondary btn-lg w-100 fw-semibold mt-3">
            Create your product
        </button>
    </form>
</div>

</x-main>