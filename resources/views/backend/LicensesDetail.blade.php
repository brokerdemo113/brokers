@extends('backend.main')
@section('title', 'Broker Details')
@section('content')
<div class="content-wrapper">
   <!-- Content -->
   <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4">License Details </h4>
      <!-- Form controls -->
      <div class="col-xl">
         <div class="card mb-4">

            <div class="card-body">
               @include('flash-message')
               <form action="{{route('Post.Licenses.Detail')}}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="container">
                     <div class="row">
                        <div class="col-xl">
                            <div class="mb-3">
                                <label for="exampleFormControlSelect1" class="form-label">select Broker</label>
                                <select class="form-select" name="selectbroker" id="exampleFormControlSelect1" aria-label="Default select example">
                                    @foreach ($brokerdetails as $id => $name)
                                    <option value="{{ $id }}">{{ $name }}</option>
                                    @endforeach
                                </select>
                             </div>
                             <div class="mb-3">
                                <label for="exampleFormControlSelect1" class="form-label">select License</label>
                                <select class="form-select" name="selectlicense" id="exampleFormControlSelect1" aria-label="Default select example">
                                    @foreach ($license as $id => $name)
                                    <option value="{{ $id }}">{{ $name }}</option>
                                    @endforeach
                                </select>
                             </div>
                             <div class="mb-3">
                                <label for="exampleFormControlSelect1" class="form-label">License current Status</label>
                                <select  class="form-select" name="currentstatus" id="exampleFormControlSelect1" aria-label="Default select example">
                                   <option selected>License current Status</option>
                                   <option value="Regulated">Regulated</option>
                                   <option value="General Registration">General Registration</option>
                                   <option value="Exceeded">Exceeded</option>
                                   <option value="Revoked">Revoked</option>
                                </select>

                             </div>
                             <div class="mb-3">
                                <label for="exampleFormControlSelect1" class="form-label">Select Country</label>
                                <select name="country" class="form-select">
                                    <option value="Afghanistan 🇦🇫">Afghanistan 🇦🇫</option>
                                    <option value="AX">Åland Islands 🇦🇽</option>
                                    <option value="AL">Albania 🇦🇱</option>
                                    <option value="DZ">Algeria 🇩🇿</option>
                                    <option value="AS">American Samoa 🇦🇸</option>
                                    <option value="AD">Andorra 🇦🇩</option>
                                    <option value="AO">Angola 🇦🇴</option>
                                    <option value="AI">Anguilla 🇦🇮</option>
                                    <option value="AQ">Antarctica 🇦🇶</option>
                                    <option value="AG">Antigua and Barbuda 🇦🇬</option>
                                    <option value="AR">Argentina 🇦🇷</option>
                                    <option value="AM">Armenia 🇦🇲</option>
                                    <option value="AW">Aruba 🇦🇼</option>
                                    <option value="AU">Australia 🇦🇺</option>
                                    <option value="AT">Austria 🇦🇹</option>
                                    <option value="AZ">Azerbaijan 🇦🇿</option>
                                    <option value="BS">Bahamas 🇧🇸</option>
                                    <option value="BH">Bahrain 🇧🇭</option>
                                    <option value="BD">Bangladesh 🇧🇩</option>
                                    <option value="BB">Barbados 🇧🇧</option>
                                    <option value="BY">Belarus 🇧🇾</option>
                                    <option value="BE">Belgium 🇧🇪</option>
                                    <option value="BZ">Belize 🇧🇿</option>
                                    <option value="BJ">Benin 🇧🇯</option>
                                    <option value="BM">Bermuda 🇧🇲</option>
                                    <option value="BT">Bhutan 🇧🇹</option>
                                    <option value="BO">Bolivia, Plurinational State of 🇧🇴</option>
                                    <option value="BA">Bosnia and Herzegovina 🇧🇦</option>
                                    <option value="BW">Botswana 🇧🇼</option>
                                    <option value="BV">Bouvet Island 🇧🇻</option>
                                    <option value="BR">Brazil 🇧🇷</option>
                                    <option value="IO">British Indian Ocean Territory 🇮🇴</option>
                                    <option value="BN">Brunei Darussalam 🇧🇳</option>
                                    <option value="BG">Bulgaria 🇧🇬</option>
                                    <option value="BF">Burkina Faso 🇧🇫</option>
                                    <option value="BI">Burundi 🇧🇮</option>
                                    <option value="KH">Cambodia 🇰🇭</option>
                                    <option value="CM">Cameroon 🇨🇲</option>
                                    <option value="CA">Canada 🇨🇦</option>
                                    <option value="CV">Cabo Verde 🇨🇻</option>
                                    <option value="KY">Cayman Islands 🇰🇾</option>
                                    <option value="CF">Central African Republic 🇨🇫</option>
                                    <option value="TD">Chad 🇹🇩</option>
                                    <option value="CL">Chile 🇨🇱</option>
                                    <option value="CN">China 🇨🇳</option>
                                    <option value="CX">Christmas Island 🇨🇽</option>
                                    <option value="CC">Cocos (Keeling) Islands 🇨🇨</option>
                                    <option value="CO">Colombia 🇨🇴</option>
                                    <option value="KM">Comoros 🇰🇲</option>
                                    <option value="CG">Congo 🇨🇬</option>
                                    <option value="CD">Congo, The Democratic Republic of the 🇨🇩</option>
                                    <option value="CK">Cook Islands 🇨🇰</option>
                                    <option value="CR">Costa Rica 🇨🇷</option>
                                    <option value="CI">Côte d'Ivoire 🇨🇮</option>
                                    <option value="HR">Croatia 🇭🇷</option>
                                    <option value="CU">Cuba 🇨🇺</option>
                                    <option value="CY">Cyprus 🇨🇾</option>
                                    <option value="CZ">Czechia 🇨🇿</option>
                                    <option value="DK">Denmark 🇩🇰</option>
                                    <option value="DJ">Djibouti 🇩🇯</option>
                                    <option value="DM">Dominica 🇩🇲</option>
                                    <option value="DO">Dominican Republic 🇩🇴</option>
                                    <option value="EC">Ecuador 🇪🇨</option>
                                    <option value="EG">Egypt 🇪🇬</option>
                                    <option value="SV">El Salvador 🇸🇻</option>
                                    <option value="GQ">Equatorial Guinea 🇬🇶</option>
                                    <option value="ER">Eritrea 🇪🇷</option>
                                    <option value="EE">Estonia 🇪🇪</option>
                                    <option value="SZ">Eswatini 🇸🇿</option>
                                    <option value="ET">Ethiopia 🇪🇹</option>
                                    <option value="FK">Falkland Islands (Malvinas) 🇫🇰</option>
                                    <option value="FO">Faroe Islands 🇫🇴</option>
                                    <option value="FJ">Fiji 🇫🇯</option>
                                    <option value="FI">Finland 🇫🇮</option>
                                    <option value="FR">France 🇫🇷</option>
                                    <option value="GF">French Guiana 🇬🇫</option>
                                    <option value="PF">French Polynesia 🇵🇫</option>
                                    <option value="TF">French Southern Territories 🇹🇫</option>
                                    <option value="GA">Gabon 🇬🇦</option>
                                    <option value="GM">Gambia 🇬🇲</option>
                                    <option value="GE">Georgia 🇬🇪</option>
                                    <option value="DE">Germany 🇩🇪</option>
                                    <option value="GH">Ghana 🇬🇭</option>
                                    <option value="GI">Gibraltar 🇬🇮</option>
                                    <option value="GR">Greece 🇬🇷</option>
                                    <option value="GL">Greenland 🇬🇱</option>
                                    <option value="GD">Grenada 🇬🇩</option>
                                    <option value="GP">Guadeloupe 🇬🇵</option>
                                    <option value="GU">Guam 🇬🇺</option>
                                    <option value="GT">Guatemala 🇬🇹</option>
                                    <option value="GG">Guernsey 🇬🇬</option>
                                    <option value="GN">Guinea 🇬🇳</option>
                                    <option value="GW">Guinea-Bissau 🇬🇼</option>
                                    <option value="GY">Guyana 🇬🇾</option>
                                    <option value="HT">Haiti 🇭🇹</option>
                                    <option value="HM">Heard Island and McDonald Islands 🇭🇲</option>
                                    <option value="VA">Holy See (Vatican City State) 🇻🇦</option>
                                    <option value="HN">Honduras 🇭🇳</option>
                                    <option value="HK">Hong Kong 🇭🇰</option>
                                    <option value="HU">Hungary 🇭🇺</option>
                                    <option value="IS">Iceland 🇮🇸</option>
                                    <option value="IN">India 🇮🇳</option>
                                    <option value="ID">Indonesia 🇮🇩</option>
                                    <option value="IR">Iran, Islamic Republic of 🇮🇷</option>
                                    <option value="IQ">Iraq 🇮🇶</option>
                                    <option value="IE">Ireland 🇮🇪</option>
                                    <option value="IM">Isle of Man 🇮🇲</option>
                                    <option value="IL">Israel 🇮🇱</option>
                                    <option value="IT">Italy 🇮🇹</option>
                                    <option value="JM">Jamaica 🇯🇲</option>
                                    <option value="JP">Japan 🇯🇵</option>
                                    <option value="JE">Jersey 🇯🇪</option>
                                    <option value="JO">Jordan 🇯🇴</option>
                                    <option value="KZ">Kazakhstan 🇰🇿</option>
                                    <option value="KE">Kenya 🇰🇪</option>
                                    <option value="KI">Kiribati 🇰🇮</option>
                                    <option value="KP">Korea, Democratic People's Republic of 🇰🇵</option>
                                    <option value="KR">Korea, Republic of 🇰🇷</option>
                                    <option value="KW">Kuwait 🇰🇼</option>
                                    <option value="KG">Kyrgyzstan 🇰🇬</option>
                                    <option value="LA">Lao People's Democratic Republic 🇱🇦</option>
                                    <option value="LV">Latvia 🇱🇻</option>
                                    <option value="LB">Lebanon 🇱🇧</option>
                                    <option value="LS">Lesotho 🇱🇸</option>
                                    <option value="LR">Liberia 🇱🇷</option>
                                    <option value="LY">Libya 🇱🇾</option>
                                    <option value="LI">Liechtenstein 🇱🇮</option>
                                    <option value="LT">Lithuania 🇱🇹</option>
                                    <option value="LU">Luxembourg 🇱🇺</option>
                                    <option value="MO">Macao 🇲🇴</option>
                                    <option value="MG">Madagascar 🇲🇬</option>
                                    <option value="MW">Malawi 🇲🇼</option>
                                    <option value="MY">Malaysia 🇲🇾</option>
                                    <option value="MV">Maldives 🇲🇻</option>
                                    <option value="ML">Mali 🇲🇱</option>
                                    <option value="MT">Malta 🇲🇹</option>
                                    <option value="MH">Marshall Islands 🇲🇭</option>
                                    <option value="MQ">Martinique 🇲🇶</option>
                                    <option value="MR">Mauritania 🇲🇷</option>
                                    <option value="MU">Mauritius 🇲🇺</option>
                                    <option value="YT">Mayotte 🇾🇹</option>
                                    <option value="MX">Mexico 🇲🇽</option>
                                    <option value="FM">Micronesia, Federated States of 🇫🇲</option>
                                    <option value="MD">Moldova, Republic of 🇲🇩</option>
                                    <option value="MC">Monaco 🇲🇨</option>
                                    <option value="MN">Mongolia 🇲🇳</option>
                                    <option value="ME">Montenegro 🇲🇪</option>
                                    <option value="MS">Montserrat 🇲🇸</option>
                                    <option value="MA">Morocco 🇲🇦</option>
                                    <option value="MZ">Mozambique 🇲🇿</option>
                                    <option value="MM">Myanmar 🇲🇲</option>
                                    <option value="NA">Namibia 🇳🇦</option>
                                    <option value="NR">Nauru 🇳🇷</option>
                                    <option value="NP">Nepal 🇳🇵</option>
                                    <option value="NL">Netherlands, Kingdom of the 🇳🇱</option>
                                    <option value="AN">Netherlands Antilles 🇳🇱</option>
                                    <option value="NC">New Caledonia 🇳🇨</option>
                                    <option value="NZ">New Zealand 🇳🇿</option>
                                    <option value="NI">Nicaragua 🇳🇮</option>
                                    <option value="NE">Niger 🇳🇪</option>
                                    <option value="NG">Nigeria 🇳🇬</option>
                                    <option value="NU">Niue 🇳🇺</option>
                                    <option value="NF">Norfolk Island 🇳🇫</option>
                                    <option value="MP">Northern Mariana Islands 🇲🇵</option>
                                    <option value="MK">North Macedonia 🇲🇰</option>
                                    <option value="NO">Norway 🇳🇴</option>
                                    <option value="OM">Oman 🇴🇲</option>
                                    <option value="PK">Pakistan 🇵🇰</option>
                                    <option value="PW">Palau 🇵🇼</option>
                                    <option value="PS">Palestine, State of 🇵🇸</option>
                                    <option value="PA">Panama 🇵🇦</option>
                                    <option value="PG">Papua New Guinea 🇵🇬</option>
                                    <option value="PY">Paraguay 🇵🇾</option>
                                    <option value="PE">Peru 🇵🇪</option>
                                    <option value="PH">Philippines 🇵🇭</option>
                                    <option value="PN">Pitcairn 🇵🇳</option>
                                    <option value="PL">Poland 🇵🇱</option>
                                    <option value="PT">Portugal 🇵🇹</option>
                                    <option value="PR">Puerto Rico 🇵🇷</option>
                                    <option value="QA">Qatar 🇶🇦</option>
                                    <option value="RE">Réunion 🇷🇪</option>
                                    <option value="RO">Romania 🇷🇴</option>
                                    <option value="RU">Russian Federation 🇷🇺</option>
                                    <option value="RW">Rwanda 🇷🇼</option>
                                    <option value="BL">Saint Barthélemy 🇧🇱</option>
                                    <option value="SH">Saint Helena, Ascension and Tristan da Cunha 🇸🇭</option>
                                    <option value="KN">Saint Kitts and Nevis 🇰🇳</option>
                                    <option value="LC">Saint Lucia 🇱🇨</option>
                                    <option value="MF">Saint Martin 🇲🇫</option>
                                    <option value="PM">Saint Pierre and Miquelon 🇵🇲</option>
                                    <option value="VC">Saint Vincent and the Grenadines 🇻🇨</option>
                                    <option value="WS">Samoa 🇼🇸</option>
                                    <option value="SM">San Marino 🇸🇲</option>
                                    <option value="ST">Sao Tome and Principe 🇸🇹</option>
                                    <option value="SA">Saudi Arabia 🇸🇦</option>
                                    <option value="SN">Senegal 🇸🇳</option>
                                    <option value="RS">Serbia 🇷🇸</option>
                                    <option value="SC">Seychelles 🇸🇨</option>
                                    <option value="SL">Sierra Leone 🇸🇱</option>
                                    <option value="SG">Singapore 🇸🇬</option>
                                    <option value="SK">Slovakia 🇸🇰</option>
                                    <option value="SI">Slovenia 🇸🇮</option>
                                    <option value="SB">Solomon Islands 🇸🇧</option>
                                    <option value="SO">Somalia 🇸🇴</option>
                                    <option value="ZA">South Africa 🇿🇦</option>
                                    <option value="GS">South Georgia and the South Sandwich Islands 🇬🇸</option>
                                    <option value="ES">Spain 🇪🇸</option>
                                    <option value="LK">Sri Lanka 🇱🇰</option>
                                    <option value="SD">Sudan 🇸🇩</option>
                                    <option value="SR">Suriname 🇸🇷</option>
                                    <option value="SJ">Svalbard and Jan Mayen 🇸🇯</option>
                                    <option value="SE">Sweden 🇸🇪</option>
                                    <option value="CH">Switzerland 🇨🇭</option>
                                    <option value="SY">Syrian Arab Republic 🇸🇾</option>
                                    <option value="TW">Taiwan, Province of China 🇹🇼</option>
                                    <option value="TJ">Tajikistan 🇹🇯</option>
                                    <option value="TZ">Tanzania, United Republic of 🇹🇿</option>
                                    <option value="TH">Thailand 🇹🇭</option>
                                    <option value="TL">Timor-Leste 🇹🇱</option>
                                    <option value="TG">Togo 🇹🇬</option>
                                    <option value="TK">Tokelau 🇹🇰</option>
                                    <option value="TO">Tonga 🇹🇴</option>
                                    <option value="TT">Trinidad and Tobago 🇹🇹</option>
                                    <option value="TN">Tunisia 🇹🇳</option>
                                    <option value="TM">Turkmenistan 🇹🇲</option>
                                    <option value="TC">Turks and Caicos Islands 🇹🇨</option>
                                    <option value="TV">Tuvalu 🇹🇻</option>
                                    <option value="TR">Türkiye 🇹🇷</option>
                                    <option value="UG">Uganda 🇺🇬</option>
                                    <option value="UA">Ukraine 🇺🇦</option>
                                    <option value="AE">United Arab Emirates 🇦🇪</option>
                                    <option value="GB">United Kingdom 🇬🇧</option>
                                    <option value="US">United States of America 🇺🇸</option>
                                    <option value="UM">United States Minor Outlying Islands 🇺🇸</option>
                                    <option value="UY">Uruguay 🇺🇾</option>
                                    <option value="UZ">Uzbekistan 🇺🇿</option>
                                    <option value="VU">Vanuatu 🇻🇺</option>
                                    <option value="VE">Venezuela, Bolivarian Republic of 🇻🇪</option>
                                    <option value="VN">Viet Nam 🇻🇳</option>
                                    <option value="VG">Virgin Islands, British 🇻🇬</option>
                                    <option value="VI">Virgin Islands, U.S. 🇻🇮</option>
                                    <option value="WF">Wallis and Futuna 🇼🇫</option>
                                    <option value="EH">Western Sahara 🇪🇭</option>
                                    <option value="YE">Yemen 🇾🇪</option>
                                    <option value="ZM">Zambia 🇿🇲</option>
                                    <option value="ZW">Zimbabwe 🇿🇼</option>
                                  </select>

                             </div>
                           <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Licensed Institution</label>
                              <input
                                 type="text"
                                 name="licensed_institution"
                                 class="form-control  @error('licensed_institution') is-invalid @enderror"
                                 id="exampleFormControlInput1"
                                 placeholder="Licensed Institution"
                                 />
                           </div>
                           @error('licensed_institution')
                           <div  style="color:red">{{ $message }}</div>
                           @enderror
                           <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email Address of Licensed Institution</label>
                            <input
                               type="email"
                               name="email_license"
                               class="form-control  @error('email_license') is-invalid @enderror"
                               id="exampleFormControlInput1"
                               placeholder="company@mail.com"
                               />
                         </div>
                         @error('email_license')
                         <div  style="color:red">{{ $message }}</div>
                         @enderror

                         <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Website of Licensed Institution</label>
                            <input
                               type="text"
                               name="website_institution"
                               class="form-control  @error('website_institution') is-invalid @enderror"
                               id="exampleFormControlInput1"
                               placeholder="www.company@mail.com"
                               />
                         </div>

                         @error('website_institution')
                         <div  style="color:red">{{ $message }}</div>
                         @enderror

                        </div>
                        <div class="col-xl">

                             <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Address of Licensed Institution</label>
                                <input
                                   type="text"
                                   name="address_license"
                                   class="form-control  @error('address_license') is-invalid @enderror"
                                   id="exampleFormControlInput1"
                                   placeholder="Address of Licensed Institution"
                                   />
                             </div>
                             @error('address_license')
                             <div  style="color:red">{{ $message }}</div>
                             @enderror
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">License Type</label>
                                <input
                                   type="text"
                                   name="license_type"
                                   class="form-control  @error('license_type') is-invalid @enderror"
                                   id="exampleFormControlInput1"
                                   placeholder="License Type"
                                   />
                             </div>
                             @error('license_type')
                             <div  style="color:red">{{ $message }}</div>
                             @enderror
                             <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">License NO.</label>
                                <input
                                   type="text"
                                   name="license_no"
                                   class="form-control  @error('license_no') is-invalid @enderror"
                                   id="exampleFormControlInput1"
                                   placeholder="License NO."
                                   />
                             </div>
                             @error('license_no')
                             <div  style="color:red">{{ $message }}</div>
                             @enderror
                             <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Effective Date</label>
                                <input
                                   type="date"
                                   name="effective_date"
                                   class="form-control  @error('effective_date') is-invalid @enderror"
                                   id="exampleFormControlInput1"
                                   placeholder="Effective Date"
                                   />
                             </div>
                             @error('effective_date')
                             <div  style="color:red">{{ $message }}</div>
                             @enderror


                             <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Expiration Time</label>
                                <input
                                   type="time"
                                   name="expiration_time"
                                   class="form-control  @error('expiration_time') is-invalid @enderror"
                                   id="exampleFormControlInput1"
                                   placeholder="Expiration Time"
                                   />
                             </div>
                             @error('expiration_time')
                             <div  style="color:red">{{ $message }}</div>
                             @enderror

                             <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"> Phone Number of Licensed Institution</label>
                                <input
                                   type="number"
                                   name="phone_number"
                                   class="form-control  @error('phone_number') is-invalid @enderror"
                                   id="exampleFormControlInput1"
                                   placeholder="Phone Number of Licensed Institution"
                                   />
                             </div>
                             @error('phone_number')
                             <div  style="color:red">{{ $message }}</div>
                             @enderror
                             {{-- <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Licensed Institution Certified Documents</label>
                                <input
                                   type="text"
                                   name=""
                                   class="form-control  @error('licensed_institution"') is-invalid @enderror"
                                   id="exampleFormControlInput1"
                                   placeholder="www.company@mail.com"
                                   />
                             </div> --}}

                             <button type="submit" class="btn btn-primary" style="margin-top:40px">Add Details</button>
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
