@extends('backend.main')

@section('title', 'Admin Dashboard')

@section('content')
               <!-- Content wrapper -->
               <div class="content-wrapper">
                  <!-- Content -->
                  <div class="container-xxl flex-grow-1 container-p-y">
                     <div class="row">
                        <div class="col-lg-8 mb-4 order-0">
                           <div class="card">
                              <div class="d-flex align-items-end row">
                                 <div class="col-sm-7">
                                    <div class="card-body">
                                       <h5 class="card-title text-primary"> Admin! 🎉</h5>
                                       <p class="mb-4">
                                          You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in
                                          your profile.
                                       </p>
                                       <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
                                    </div>
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
               <!-- Content wrapper -->
@endsection
