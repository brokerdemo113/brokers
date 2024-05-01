@extends('backend.main')
@section('title', 'Broker Details')
@section('content')
<div class="content-wrapper">
   <!-- Content -->
   <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4">Brokers Details </h4>
      <!-- Basic Layout -->
      <div class="row">
         <div class="col-xl">
            <div class="card mb-4">
               <div class="card-header d-flex justify-content-between align-items-center">
               </div>
               <div class="card-body">
                  @include('flash-message')
                  <form action="{{route('broker.details.post')}}" method="post" enctype="multipart/form-data">
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
                                       name="name"
                                       class="form-control @error('name') is-invalid @enderror"
                                       id="basic-icon-default-fullname"
                                       placeholder="John Doe"
                                       />
                                 </div>
                              </div>
                              @error('name')
                              <div  style="color:red">{{ $message }}</div>
                              @enderror
                              <div class="">
                                 <label class="form-label" for="basic-icon-default-company">Company Logo</label>
                                 <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-company2" class="input-group-text"
                                       ><i class="bx bx-buildings"></i
                                       ></span>
                                    <input class="form-control @error('image') is-invalid @enderror" name="image" type="file" id="formFile" />
                                 </div>
                              </div>
                              @error('image')
                              <div  style="color:red">{{ $message }}</div>
                              @enderror
                              <div class="">
                                 <label class="form-label" for="basic-icon-default-email">Email</label>
                                 <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                    <input
                                       type="email"
                                       name="email"
                                       id="basic-icon-default-email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       placeholder="john.doe"
                                       />
                                    <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
                                 </div>

                              </div>
                              @error('email')
                              <div  style="color:red">{{ $message }}</div>
                              @enderror
                              <div class="">
                                 <label class="form-label" for="basic-icon-default-email">Company Website</label>
                                 <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                    <input
                                       type="email"
                                       name="website"
                                       id="basic-icon-default-email"
                                       class="form-control @error('website') is-invalid @enderror"
                                       placeholder="john.doe"
                                       />
                                    <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
                                 </div>

                              </div>
                              @error('website')
                              <div  style="color:red">{{ $message }}</div>
                              @enderror
                              <div class="">
                                 <label class="form-label" for="basic-icon-default-phone">Phone No</label>
                                 <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-phone2" class="input-group-text"
                                       ><i class="bx bx-phone"></i
                                       ></span>
                                    <input
                                       type="text"
                                       name="phone"
                                       id="basic-icon-default-phone"
                                       class="form-control phone-mask @error('phone') is-invalid @enderror"
                                       placeholder="658 799 8941"
                                       />
                                 </div>
                              </div>
                              @error('phone')
                              <div  style="color:red">{{ $message }}</div>
                              @enderror
                              <div class="">
                                 <label class="form-label" for="basic-icon-default-phone">Year</label>
                                 <div>
                                    <input class="form-control @error('year') is-invalid @enderror" name="year" type="year" value="2021-06" id="html5-month-input" />
                                 </div>
                              </div>
                              @error('year')
                              <div  style="color:red">{{ $message }}</div>
                              @enderror
                              <div class="">
                                 <label class="form-label" for="basic-icon-default-fullname">Platform registered country and region</label>
                                 <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"
                                       ><i class="bx bx-user"></i
                                       ></span>
                                    <input
                                       type="text"
                                       name="platform_reg"
                                       class="form-control @error('platform_reg') is-invalid @enderror"
                                       id="basic-icon-default-fullname"
                                       placeholder="Platform registered country and region"
                                       />
                                 </div>
                              </div>
                              @error('platform_reg')
                              <div  style="color:red">{{ $message }}</div>
                              @enderror
                           </div>
                           <div class="col-xl">
                              <div class="">
                                 <label class="form-label" for="basic-icon-default-fullname">Company Abbreviation</label>
                                 <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"
                                       ><i class="bx bx-user"></i
                                       ></span>
                                    <input
                                       type="text"
                                       name="company_abb"
                                       class="form-control @error('company_abb') is-invalid @enderror"
                                       id="basic-icon-default-fullname"
                                       placeholder="Company Abbreviation"
                                       />
                                 </div>
                              </div>
                              @error('company_abb')
                              <div  style="color:red">{{ $message }}</div>
                              @enderror
                              <div class="">
                                 <label class="form-label" for="basic-icon-default-message">Address</label>
                                 <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-message2" class="input-group-text"
                                       ><i class="bx bx-comment"></i
                                       ></span>
                                    <textarea
                                       id="basic-icon-default-message"
                                       name="address"
                                       class="form-control @error('address') is-invalid @enderror"
                                       placeholder="Address"
                                       ></textarea>
                                 </div>
                              </div>
                              @error('address')
                              <div  style="color:red">{{ $message }}</div>
                              @enderror
                              <div class="">
                                 <label class="form-label" for="basic-icon-default-fullname">Facebook Link</label>
                                 <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"
                                       ><i class="bx bx-user"></i
                                       ></span>
                                    <input
                                       type="text"
                                       name="facebook_link"
                                       class="form-control @error('facebook_link') is-invalid @enderror"
                                       id="basic-icon-default-fullname"
                                       placeholder="Facebook "
                                       />
                                 </div>
                              </div>
                              @error('facebook_link')
                              <div  style="color:red">{{ $message }}</div>
                              @enderror
                              <div class="">
                                 <label class="form-label" for="basic-icon-default-fullname">Instagram Link</label>
                                 <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"
                                       ><i class="bx bx-user"></i
                                       ></span>
                                    <input
                                       type="text"
                                       name="instagram_link"
                                       class="form-control @error('instagram_link') is-invalid @enderror"
                                       id="basic-icon-default-fullname"
                                       placeholder="Instagram"
                                       />
                                 </div>
                              </div>
                              @error('instagram_link')
                              <div  style="color:red">{{ $message }}</div>
                              @enderror
                              <div class="">
                                 <label class="form-label" for="basic-icon-default-fullname">Twitter Link</label>
                                 <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"
                                       ><i class="bx bx-user"></i
                                       ></span>
                                    <input
                                       type="text"
                                       name="twitter_link"
                                       class="form-control @error('twitter_link') is-invalid @enderror"
                                       id="basic-icon-default-fullname"
                                       placeholder="Twitter"
                                       />
                                 </div>
                              </div>
                              @error('twitter_link')
                              <div  style="color:red">{{ $message }}</div>
                              @enderror
                              <div class="">
                                 <label class="form-label" for="basic-icon-default-fullname">YouTube Link</label>
                                 <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"
                                       ><i class="bx bx-user"></i
                                       ></span>
                                    <input
                                       type="text"
                                       name="youtube_link"
                                       class="form-control @error('youtube_link') is-invalid @enderror"
                                       id="basic-icon-default-fullname"
                                       placeholder="YouTube"
                                       />
                                 </div>
                              </div>
                              @error('youtube_link')
                              <div  style="color:red">{{ $message }}</div>
                              @enderror
                              <div class="">
                                 <label class="form-label" for="basic-icon-default-fullname">LinkedIn Link</label>
                                 <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"
                                       ><i class="bx bx-user"></i
                                       ></span>
                                    <input
                                       type="text"
                                       name="linkedin_link"
                                       class="form-control @error('linkedin_link') is-invalid @enderror"
                                       id="basic-icon-default-fullname"
                                       placeholder="LinkedIn"
                                       />
                                 </div>
                              </div>
                              @error('linkedin_link')
                              <div  style="color:red">{{ $message }}</div>
                              @enderror
                              <button type="submit" class="btn btn-primary" style="margin-top:40px">Add Details</button>
                           </div>

                        </div>
                     </div>

                  </form>
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
@endsection
