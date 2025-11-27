<x-main>
  <div class="text-center pt-5 mb-4">
      <h3 class="fw-bold text-uppercase d-inline-block pb-2 border-bottom border-secondary">
          Edit Service
      </h3>
  </div>
  <div class="container mb-5">
      <div class="row justify-content-center">
          <div class="col-12 col-sm-10 col-md-8 col-lg-6">
              <form class="p-4 bg-light rounded-3 shadow-sm" action="/update-service/{{$service['key']}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="mb-3">
                      <label class="form-label text-secondary fw-semibold">Key</label>
                      <input type="text" name="key" class="form-control form-control-sm border-secondary"
                          placeholder="Enter here the key" value="{{$service['key']}}">
                  </div>
                  <div class="mb-3">
                      <label class="form-label text-secondary fw-semibold">Name</label>
                      <input type="text" name="name" class="form-control form-control-sm border-secondary"
                          placeholder="Enter here the name" value="{{$service['name']}}">
                  </div>
                  <div class="mb-3">
                      <label class="form-label text-secondary fw-semibold">Icon</label>
                      <input type="file" name="icon" class="form-control form-control-sm border-secondary" value="{{$service['icon']}}">
                  </div>
                  <div class="mb-3">
                      <label class="form-label text-secondary fw-semibold">Image</label>
                      <input type="file" name="image" class="form-control form-control-sm border-secondary" value="{{$service['image']}}">
                  </div>
                  <div class="mb-3">
                      <label class="form-label text-secondary fw-semibold">Description</label>
                      <textarea class="form-control form-control-sm border-secondary" rows="3" name="description"
                          placeholder="Enter here the description">{{$service['description']}}</textarea>
                  </div>
                  <div class="d-flex flex-column flex-sm-row gap-2 mt-3">
                      <button type="submit" class="btn btn-outline-secondary btn-lg flex-grow-1 fw-semibold">
                          Edit Service
                      </button>
                      <a href="/services" class="btn btn-secondary btn-lg flex-grow-1 fw-semibold">
                        Delete Service
                      </a>
                  </div>
              </form>
          </div>
      </div>
  </div>
</x-main>
