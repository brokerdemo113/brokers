@extends('backend.main')

@section('title', 'profile')

@section('content')

<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4">My Pofile</h4>

      <div class="row">

        <!-- Form controls -->
        <div class="col-md-12">
          <div class="card mb-4">
            {{-- <h5 class="card-header">Form Controls</h5> --}}
            <div class="card-body">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input
                  type="email"
                  class="form-control"
                  id="exampleFormControlInput1"
                  placeholder="name@example.com"
                />
              </div>
              <div class="mb-3">
                <label for="exampleFormControlReadOnlyInput1" class="form-label">Read only</label>
                <input
                  class="form-control"
                  type="text"
                  id="exampleFormControlReadOnlyInput1"
                  placeholder="Readonly input here..."
                  readonly
                />
              </div>
              <div class="mb-3">
                <label for="exampleFormControlReadOnlyInputPlain1" class="form-label">Read plain</label>
                <input
                  type="text"
                  readonly
                  class="form-control-plaintext"
                  id="exampleFormControlReadOnlyInputPlain1"
                  value="email@example.com"
                />
              </div>
              <div class="mb-3">
                <label for="exampleFormControlSelect1" class="form-label">Example select</label>
                <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="exampleDataList" class="form-label">Datalist example</label>
                <input
                  class="form-control"
                  list="datalistOptions"
                  id="exampleDataList"
                  placeholder="Type to search..."
                />
                <datalist id="datalistOptions">
                  <option value="San Francisco"></option>
                  <option value="New York"></option>
                  <option value="Seattle"></option>
                  <option value="Los Angeles"></option>
                  <option value="Chicago"></option>
                </datalist>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlSelect2" class="form-label">Example multiple select</label>
                <select
                  multiple
                  class="form-select"
                  id="exampleFormControlSelect2"
                  aria-label="Multiple select example"
                >
                  <option selected>Open this select menu</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div>
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
    <!-- / Content -->

    <!-- Footer -->
    <footer class="content-footer footer bg-footer-theme">
      <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
        <div class="mb-2 mb-md-0">
          ©
          <script>
            document.write(new Date().getFullYear());
          </script>
            Brokers
        </div>

      </div>
    </footer>
    <!-- / Footer -->

    <div class="content-backdrop fade"></div>
  </div>

@endsection
