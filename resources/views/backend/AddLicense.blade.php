@extends('backend.main')
@section('title', 'Broker Details')
@section('content')
<div class="content-wrapper">
   <!-- Content -->
   <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4">Add License </h4>
      <!-- Form controls -->
      <div class="col-xl">
         <div class="card mb-4">

            <div class="card-body">
               @include('flash-message')
               <form action="{{route('Post.License')}}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="container">
                     <div class="row">
                        <div class="col-xl">
                            <div class="">
                                <label class="form-label" for="basic-icon-default-fullname">Company Name</label>
                                <div class="input-group input-group-merge">
                                   <span id="basic-icon-default-fullname2" class="input-group-text"
                                      ><i class="bx bx-user"></i></span>
                                   <input
                                      type="text"
                                      name="license_name"
                                      class="form-control @error('license_name') is-invalid @enderror"
                                      id="basic-icon-default-fullname"
                                      placeholder="Australia Securities & Investment Commission"
                                      />
                                </div>
                             </div>
                             @error('license_name')
                             <div  style="color:red">{{ $message }}</div>
                             @enderror
                             <div class="">
                                <label class="form-label" for="basic-icon-default-fullname">Company Name</label>
                                <div class="input-group input-group-merge">
                                   <span id="basic-icon-default-fullname2" class="input-group-text"
                                      ><i class="bx bx-user"></i></span>
                                   <input
                                      type="text"
                                      name="license_abb"
                                      class="form-control @error('license_abb') is-invalid @enderror"
                                      id="basic-icon-default-fullname"
                                      placeholder="ASIC"
                                      />
                                </div>
                             </div>
                             @error('license_abb')
                             <div  style="color:red">{{ $message }}</div>
                             @enderror
                        </div>
                        <div class="col-xl">
                            <div class="">
                                <label class="form-label" for="basic-icon-default-company">Company Logo</label>
                                <div class="input-group input-group-merge">
                                   <span id="basic-icon-default-company2" class="input-group-text"
                                      ><i class="bx bx-buildings"></i
                                      ></span>
                                   <input class="form-control @error('license_image') is-invalid @enderror" name="license_image" type="file" id="formFile" />
                                </div>
                             </div>
                             @error('license_image')
                             <div  style="color:red">{{ $message }}</div>
                             @enderror

                           <button type="submit" class="btn btn-primary" style="margin-top:40px">Add Lincese</button>
                        </div>



                     </div>
                  </div>
               </form>
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
         <div>
            <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
            <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>
            <a
               href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
               target="_blank"
               class="footer-link me-4"
               >Documentation</a
               >
            <a
               href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
               target="_blank"
               class="footer-link me-4"
               >Support</a
               >
         </div>
      </div>
   </footer>
   <!-- / Footer -->
   <div class="content-backdrop fade"></div>
</div>
@endsection
