   <!-- Book a Consultation Modal -->
   <div class="modal fade form-modal" id="book-consultation-modal" tabindex="-1" role="dialog" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content">
               <div class="modal-body">
                   <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button> -->
                   <div class="img">
                       <img src="images/pop-ups/book-consultation.png" alt="Book a Consultation">
                   </div>

                   <div class="tab-form">
                       <h4 class="sh">Book a Consultation</h4>
                       <h3 class="mh">Fill in Your Details to Reserve Your Consultation Slot</h3>
                       <form action="includes/book_consultation.php" id="book_a_consultation" method="post">
                           <div class="form-group">
                               <input type="text" class="form-control" name="customer_name" placeholder="Your Name">
                           </div>
                           <div class="form-group">
                               <input type="text" class="form-control" name="customer_email" placeholder="Your Email Address">
                           </div>
                           <div class="form-group">
                               <input type="text" class="form-control" name="customer_contact" placeholder="Your Contact Number">
                           </div>
                           <div class="form-group">
                               <select name="visa_type" class="form-control">
                                   <option value="">Type of Visa</option>
                                   <option value="Tourist Visa">Tourist Visa</option>
                                   <option value="Business Visa">Business Visa</option>
                                   <option value="Work Visa">Work Visa</option>
                                   <option value="Dependent Visa">Dependent Visa</option>
                                   <option value="Migration">Migration</option>
                                   <option value="Student Visa">Student Visa</option>
                                   <option value="Student Enrollment">Student Enrollment</option>
                                   <option value="Other">Other</option>
                               </select>
                           </div>
                           <div class="form-group">
                               <select name="date_time_preference" class="form-control">
                                       <option value="" disabled>Date and Time Preference</option>
                                       <option value="Mon" >Mon</option>
                                       <option value="Tue" >Tue</option>
                                       <option value="Wed" >Wed</option>
                                       <option value="Thu" >Thu</option>
                                       <option value="Fri (10 a.m to 4.30 p.m)" >Fri (10 a.m to 4.30 p.m)</option>
                                       <option value="Sat (9.30 a.m. to 1 p.m.)" >Sat (9.30 a.m. to 1 p.m.)</option>
                               </select>
                           </div>
                          <!-- <div class="form-group">
                               <input type="text" class="form-control" placeholder="Time of Preference" name="time_of_preference">
                           </div>-->
                           <div class="form-group">
                               <select name="consultation_method" id="consultation_method" class="form-control">
                                   <option value="" selected disabled>Consultation Method</option>
                                   <option value="Online">Online </option>
                                   <option value="Physical">Physical</option>
                               </select>
                           </div>
                           <div class="form-group">
                               <select name="payment_method" id="payment_method" class="form-control">
                                   <option value="" selected disabled>Payment Method</option>
                                <!--   <option value="On-Premise" >On-Premise</option>
                                   <option value="Bank Transfer" >Bank Transfer</option>-->
                               </select>
                           </div>
                           <div class="form-group textarea">
                               <textarea name="special_requests" class="form-control" placeholder="Special Comments or Requests (Optional)"></textarea>
                           </div>
                           <div class="submit-outer">
                               <button type="submit" class="btn btn-primary submit">Submit Inquiry</button>
                               <div class="cp-cont">
                                   <p>* Please note that the On-Premise Payment Method is only available for Physical Consultations</p>
                                   <p class="mb-0">** Time slots available: <b>Weekdays</b> 10:00 AM to 4:30 PM and <b>Saturday</b> 9:30 AM to 1:00 PM</p>
                               </div>
                           </div>

                       </form>
                   </div>



               </div>
           </div>
       </div>
   </div>

   <!-- RPL Consultation Inquiry Modal style="display:block; opacity:1"-->
   <div class="modal fade form-modal" id="rpl-consultation-modal" tabindex="-1" role="dialog" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content">
               <div class="modal-body">
                   <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button> -->
                   <div class="img">
                       <img src="images/pop-ups/rpl-consultation.png" alt="Book a Consultation">
                   </div>

                   <div class="tab-form">
                       <h4 class="sh">RPL Consultation Inquiry</h4>
                       <h3 class="mh">Fill in Your Details & Upload Your CV</h3>
                       <form action="includes/rpl_consultation_inquiry.php" id="rpl_consultation_form" enctype="multipart/form-data" method="post">
                           <div class="form-group">
                               <input type="text" class="form-control" placeholder="Your Name" name="name">
                           </div>
                           <div class="form-group">
                               <input type="text" class="form-control" placeholder="Your Email Address" name="email">
                           </div>
                           <div class="form-group">
                               <input type="text" class="form-control" placeholder="Your Contact Number" name="contact_number">
                           </div>
                           <div class="form-group">
                               <input type="text" class="form-control" placeholder="Your Profession" name="profession">
                           </div>
                           <div class="form-group">
                               <select name="most_recent_qualification" class="form-control">
                                   <option value="" selected disabled>Most Recent Qualification</option>
                                   <option value="Ordinary Level" >Ordinary Level</option>
                                   <option value="Advance Level" >Advance Level</option>
                                   <option value="Diploma" >Diploma</option>
                                   <option value="Bachelors’ Degree" >Bachelors’ Degree</option>
                                   <option value="Postgraduate Diploma" >Postgraduate Diploma</option>
                               </select>
                           </div>
                           <div class="form-group textarea">
                               <textarea class="form-control" name="special_comments" placeholder="Special Comments or Requests"></textarea>
                           </div>
                           <div class="form-group ubu">
                               <div class="upload-btn-wrapper">
                                   <button class="btn"><span>Browse Files</span> to Upload Here</button>
                                   <input type="file" name="cv_file" />
                               </div>
                           </div>
                           <div class="submit-outer mt-0">
                               <button type="submit" class="btn btn-primary submit">Submit Inquiry</button>
                               <div class="cp-cont">
                                   <p class="mb-0">* Please note that only PDF, JPG, DOC, DOCS, TXT files of less than 10 MB are accepted as valid uploads.</p>
                               </div>
                           </div>

                       </form>
                   </div>

               </div>
           </div>
       </div>
   </div>

   <!-- Submit Your Story Modal-->
   <div class="modal fade form-modal" id="submit-story-modal" tabindex="-1" role="dialog" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content">
               <div class="modal-body">
                   <div class="img">
                       <img src="images/pop-ups/submit-story.png" alt="Book a Consultation">
                   </div>

                   <div class="tab-form">
                       <h4 class="sh">Submit Your Story</h4>
                       <h3 class="mh">We'd Love to Hear Your Experience with EVS</h3>
                       <form action="includes/submit_your_story.php"  id="submit_your_story" method="post">
                           <div class="form-group">
                               <input type="text" class="form-control" placeholder="Your Name" name="name">
                           </div>
                           <div class="form-group">
                               <input type="text" class="form-control" placeholder="Your Email Address" name="email">
                           </div>
                           <div class="form-group">
                               <input type="text" class="form-control" placeholder="Your Contact Number" name="contact_number">
                           </div>
                           <div class="form-group">
                               <select name="type_of_service" class="form-control">
                                   <option value="" selected disabled>Type of Service</option>
                                   <option value="Visit Visa" >Visit Visa</option>
                                   <option value="Long Stay Visa" >Long Stay Visa</option>
                                   <option value="Student Visa" >Student Visa</option>
                                   <option value="University Enrollment" >University Enrollment</option>
                                   <option value="Migration" >Migration </option>
                                   <option value="Other" >Other </option>
                               </select>
                           </div>
                           <div class="form-group textarea">
                               <textarea class="form-control" placeholder="Special Comments or Requests" name="special_comments"></textarea>
                           </div>
                           <div class="submit-outer">
                               <button type="submit" class="btn btn-primary submit">Submit Inquiry</button>
                               <div class="cp-cont">
                                   <p class="mb-0">* Pellentesque massa placerat duis ultricies lacus sed turpis.<br />Erat nam at lectus urna duis convallis convallis tellus.</p>
                               </div>
                           </div>

                       </form>
                   </div>



               </div>
           </div>
       </div>
   </div>

   <!-- Student Inquiry Modal -->
   <div class="modal fade form-modal" id="student-inquiry-modal" tabindex="-1" role="dialog" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content">
               <div class="modal-body">
                   <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button> -->
                   <div class="img">
                       <img src="images/pop-ups/book-consultation.png" alt="Book a Consultation">
                   </div>

                   <div class="tab-form">
                       <h4 class="sh">Student Inquiry</h4>
                       <h3 class="mh">Fill in Your Details to Register</h3>
                       <form action="includes/student_inquiry.php" id="student_inquiry_form" method="post">
                           <div class="form-group">
                               <input type="text" class="form-control" placeholder="Your Name" id="reg_w_us_name" name="name">
                           </div>
                           <div class="form-group">
                               <input type="text" class="form-control" placeholder="Your Email Address" id="reg_w_us_email" name="email">
                           </div>
                           <div class="form-group">
                               <input type="text" class="form-control" placeholder="Your Contact Number" name="contact_no">
                           </div>
                           <input type="hidden" class="form-control" name="student_inquiry_page" id="student_inquiry_page">
                           <div class="form-group">
                               <select name="country" class="form-control">
                                   <option value="" selected disabled>Your Country of Choice</option>
                                   <option value="Afganistan">Afghanistan</option>
                                   <option value="Albania">Albania</option>
                                   <option value="Algeria">Algeria</option>
                                   <option value="American Samoa">American Samoa</option>
                                   <option value="Andorra">Andorra</option>
                                   <option value="Angola">Angola</option>
                                   <option value="Anguilla">Anguilla</option>
                                   <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                   <option value="Argentina">Argentina</option>
                                   <option value="Armenia">Armenia</option>
                                   <option value="Aruba">Aruba</option>
                                   <option value="Australia">Australia</option>
                                   <option value="Austria">Austria</option>
                                   <option value="Azerbaijan">Azerbaijan</option>
                                   <option value="Bahamas">Bahamas</option>
                                   <option value="Bahrain">Bahrain</option>
                                   <option value="Bangladesh">Bangladesh</option>
                                   <option value="Barbados">Barbados</option>
                                   <option value="Belarus">Belarus</option>
                                   <option value="Belgium">Belgium</option>
                                   <option value="Belize">Belize</option>
                                   <option value="Benin">Benin</option>
                                   <option value="Bermuda">Bermuda</option>
                                   <option value="Bhutan">Bhutan</option>
                                   <option value="Bolivia">Bolivia</option>
                                   <option value="Bonaire">Bonaire</option>
                                   <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                   <option value="Botswana">Botswana</option>
                                   <option value="Brazil">Brazil</option>
                                   <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                   <option value="Brunei">Brunei</option>
                                   <option value="Bulgaria">Bulgaria</option>
                                   <option value="Burkina Faso">Burkina Faso</option>
                                   <option value="Burundi">Burundi</option>
                                   <option value="Cambodia">Cambodia</option>
                                   <option value="Cameroon">Cameroon</option>
                                   <option value="Canada">Canada</option>
                                   <option value="Canary Islands">Canary Islands</option>
                                   <option value="Cape Verde">Cape Verde</option>
                                   <option value="Cayman Islands">Cayman Islands</option>
                                   <option value="Central African Republic">Central African Republic</option>
                                   <option value="Chad">Chad</option>
                                   <option value="Channel Islands">Channel Islands</option>
                                   <option value="Chile">Chile</option>
                                   <option value="China">China</option>
                                   <option value="Christmas Island">Christmas Island</option>
                                   <option value="Cocos Island">Cocos Island</option>
                                   <option value="Colombia">Colombia</option>
                                   <option value="Comoros">Comoros</option>
                                   <option value="Congo">Congo</option>
                                   <option value="Cook Islands">Cook Islands</option>
                                   <option value="Costa Rica">Costa Rica</option>
                                   <option value="Cote DIvoire">Cote DIvoire</option>
                                   <option value="Croatia">Croatia</option>
                                   <option value="Cuba">Cuba</option>
                                   <option value="Curaco">Curacao</option>
                                   <option value="Cyprus">Cyprus</option>
                                   <option value="Czech Republic">Czech Republic</option>
                                   <option value="Denmark">Denmark</option>
                                   <option value="Djibouti">Djibouti</option>
                                   <option value="Dominica">Dominica</option>
                                   <option value="Dominican Republic">Dominican Republic</option>
                                   <option value="East Timor">East Timor</option>
                                   <option value="Ecuador">Ecuador</option>
                                   <option value="Egypt">Egypt</option>
                                   <option value="El Salvador">El Salvador</option>
                                   <option value="Equatorial Guinea">Equatorial Guinea</option>
                                   <option value="Eritrea">Eritrea</option>
                                   <option value="Estonia">Estonia</option>
                                   <option value="Ethiopia">Ethiopia</option>
                                   <option value="Falkland Islands">Falkland Islands</option>
                                   <option value="Faroe Islands">Faroe Islands</option>
                                   <option value="Fiji">Fiji</option>
                                   <option value="Finland">Finland</option>
                                   <option value="France">France</option>
                                   <option value="French Guiana">French Guiana</option>
                                   <option value="French Polynesia">French Polynesia</option>
                                   <option value="French Southern Ter">French Southern Ter</option>
                                   <option value="Gabon">Gabon</option>
                                   <option value="Gambia">Gambia</option>
                                   <option value="Georgia">Georgia</option>
                                   <option value="Germany">Germany</option>
                                   <option value="Ghana">Ghana</option>
                                   <option value="Gibraltar">Gibraltar</option>
                                   <option value="Great Britain">Great Britain</option>
                                   <option value="Greece">Greece</option>
                                   <option value="Greenland">Greenland</option>
                                   <option value="Grenada">Grenada</option>
                                   <option value="Guadeloupe">Guadeloupe</option>
                                   <option value="Guam">Guam</option>
                                   <option value="Guatemala">Guatemala</option>
                                   <option value="Guinea">Guinea</option>
                                   <option value="Guyana">Guyana</option>
                                   <option value="Haiti">Haiti</option>
                                   <option value="Hawaii">Hawaii</option>
                                   <option value="Honduras">Honduras</option>
                                   <option value="Hong Kong">Hong Kong</option>
                                   <option value="Hungary">Hungary</option>
                                   <option value="Iceland">Iceland</option>
                                   <option value="Indonesia">Indonesia</option>
                                   <option value="India">India</option>
                                   <option value="Iran">Iran</option>
                                   <option value="Iraq">Iraq</option>
                                   <option value="Ireland">Ireland</option>
                                   <option value="Isle of Man">Isle of Man</option>
                                   <option value="Israel">Israel</option>
                                   <option value="Italy">Italy</option>
                                   <option value="Jamaica">Jamaica</option>
                                   <option value="Japan">Japan</option>
                                   <option value="Jordan">Jordan</option>
                                   <option value="Kazakhstan">Kazakhstan</option>
                                   <option value="Kenya">Kenya</option>
                                   <option value="Kiribati">Kiribati</option>
                                   <option value="Korea North">Korea North</option>
                                   <option value="Korea Sout">Korea South</option>
                                   <option value="Kuwait">Kuwait</option>
                                   <option value="Kyrgyzstan">Kyrgyzstan</option>
                                   <option value="Laos">Laos</option>
                                   <option value="Latvia">Latvia</option>
                                   <option value="Lebanon">Lebanon</option>
                                   <option value="Lesotho">Lesotho</option>
                                   <option value="Liberia">Liberia</option>
                                   <option value="Libya">Libya</option>
                                   <option value="Liechtenstein">Liechtenstein</option>
                                   <option value="Lithuania">Lithuania</option>
                                   <option value="Luxembourg">Luxembourg</option>
                                   <option value="Macau">Macau</option>
                                   <option value="Macedonia">Macedonia</option>
                                   <option value="Madagascar">Madagascar</option>
                                   <option value="Malaysia">Malaysia</option>
                                   <option value="Malawi">Malawi</option>
                                   <option value="Maldives">Maldives</option>
                                   <option value="Mali">Mali</option>
                                   <option value="Malta">Malta</option>
                                   <option value="Marshall Islands">Marshall Islands</option>
                                   <option value="Martinique">Martinique</option>
                                   <option value="Mauritania">Mauritania</option>
                                   <option value="Mauritius">Mauritius</option>
                                   <option value="Mayotte">Mayotte</option>
                                   <option value="Mexico">Mexico</option>
                                   <option value="Midway Islands">Midway Islands</option>
                                   <option value="Moldova">Moldova</option>
                                   <option value="Monaco">Monaco</option>
                                   <option value="Mongolia">Mongolia</option>
                                   <option value="Montserrat">Montserrat</option>
                                   <option value="Morocco">Morocco</option>
                                   <option value="Mozambique">Mozambique</option>
                                   <option value="Myanmar">Myanmar</option>
                                   <option value="Nambia">Nambia</option>
                                   <option value="Nauru">Nauru</option>
                                   <option value="Nepal">Nepal</option>
                                   <option value="Netherland Antilles">Netherland Antilles</option>
                                   <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                   <option value="Nevis">Nevis</option>
                                   <option value="New Caledonia">New Caledonia</option>
                                   <option value="New Zealand">New Zealand</option>
                                   <option value="Nicaragua">Nicaragua</option>
                                   <option value="Niger">Niger</option>
                                   <option value="Nigeria">Nigeria</option>
                                   <option value="Niue">Niue</option>
                                   <option value="Norfolk Island">Norfolk Island</option>
                                   <option value="Norway">Norway</option>
                                   <option value="Oman">Oman</option>
                                   <option value="Pakistan">Pakistan</option>
                                   <option value="Palau Island">Palau Island</option>
                                   <option value="Palestine">Palestine</option>
                                   <option value="Panama">Panama</option>
                                   <option value="Papua New Guinea">Papua New Guinea</option>
                                   <option value="Paraguay">Paraguay</option>
                                   <option value="Peru">Peru</option>
                                   <option value="Phillipines">Philippines</option>
                                   <option value="Pitcairn Island">Pitcairn Island</option>
                                   <option value="Poland">Poland</option>
                                   <option value="Portugal">Portugal</option>
                                   <option value="Puerto Rico">Puerto Rico</option>
                                   <option value="Qatar">Qatar</option>
                                   <option value="Republic of Montenegro">Republic of Montenegro</option>
                                   <option value="Republic of Serbia">Republic of Serbia</option>
                                   <option value="Reunion">Reunion</option>
                                   <option value="Romania">Romania</option>
                                   <option value="Russia">Russia</option>
                                   <option value="Rwanda">Rwanda</option>
                                   <option value="St Barthelemy">St Barthelemy</option>
                                   <option value="St Eustatius">St Eustatius</option>
                                   <option value="St Helena">St Helena</option>
                                   <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                   <option value="St Lucia">St Lucia</option>
                                   <option value="St Maarten">St Maarten</option>
                                   <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                   <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                   <option value="Saipan">Saipan</option>
                                   <option value="Samoa">Samoa</option>
                                   <option value="Samoa American">Samoa American</option>
                                   <option value="San Marino">San Marino</option>
                                   <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                   <option value="Saudi Arabia">Saudi Arabia</option>
                                   <option value="Senegal">Senegal</option>
                                   <option value="Seychelles">Seychelles</option>
                                   <option value="Sierra Leone">Sierra Leone</option>
                                   <option value="Singapore">Singapore</option>
                                   <option value="Slovakia">Slovakia</option>
                                   <option value="Slovenia">Slovenia</option>
                                   <option value="Solomon Islands">Solomon Islands</option>
                                   <option value="Somalia">Somalia</option>
                                   <option value="South Africa">South Africa</option>
                                   <option value="Spain">Spain</option>
                                   <option value="Sri Lanka">Sri Lanka</option>
                                   <option value="Sudan">Sudan</option>
                                   <option value="Suriname">Suriname</option>
                                   <option value="Swaziland">Swaziland</option>
                                   <option value="Sweden">Sweden</option>
                                   <option value="Switzerland">Switzerland</option>
                                   <option value="Syria">Syria</option>
                                   <option value="Tahiti">Tahiti</option>
                                   <option value="Taiwan">Taiwan</option>
                                   <option value="Tajikistan">Tajikistan</option>
                                   <option value="Tanzania">Tanzania</option>
                                   <option value="Thailand">Thailand</option>
                                   <option value="Togo">Togo</option>
                                   <option value="Tokelau">Tokelau</option>
                                   <option value="Tonga">Tonga</option>
                                   <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                   <option value="Tunisia">Tunisia</option>
                                   <option value="Turkey">Turkey</option>
                                   <option value="Turkmenistan">Turkmenistan</option>
                                   <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                   <option value="Tuvalu">Tuvalu</option>
                                   <option value="Uganda">Uganda</option>
                                   <option value="United Kingdom">United Kingdom</option>
                                   <option value="Ukraine">Ukraine</option>
                                   <option value="United Arab Erimates">United Arab Emirates</option>
                                   <option value="United States of America">United States of America</option>
                                   <option value="Uraguay">Uruguay</option>
                                   <option value="Uzbekistan">Uzbekistan</option>
                                   <option value="Vanuatu">Vanuatu</option>
                                   <option value="Vatican City State">Vatican City State</option>
                                   <option value="Venezuela">Venezuela</option>
                                   <option value="Vietnam">Vietnam</option>
                                   <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                   <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                   <option value="Wake Island">Wake Island</option>
                                   <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                   <option value="Yemen">Yemen</option>
                                   <option value="Zaire">Zaire</option>
                                   <option value="Zambia">Zambia</option>
                                   <option value="Zimbabwe">Zimbabwe</option>
                               </select>
                           </div>
                           <div class="form-group">
                               <select name="type_of_service" class="form-control">
                                   <option value="" selected disabled>Type of Service</option>
                                   <option value="University Enrollment" >University Enrollment</option>
                                   <option value="Student Visa" >Student Visa</option>
                                   <option value="Other" >Other</option>
                               </select>
                           </div>
                           <div class="form-group">
                               <select name="qualification" class="form-control">
                                   <option value="" selected disabled>Most Recent Qualification</option>
                                   <option value="Ordinary Level" >Ordinary Level</option>
                                   <option value="Advance Level" >Advance Level</option>
                                   <option value="Diploma" >Diploma</option>
                                   <option value="Bachelors’ Degree" >Bachelors’ Degree</option>
                                   <option value="Postgraduate Diploma" >Postgraduate Diploma</option>
                                   <option value="Masters’ Degree">Masters’ Degree</option>
                               </select>
                           </div>
                           <div class="form-group textarea">
                               <textarea name="special_requests" class="form-control" placeholder="Special Comments or Requests"></textarea>
                           </div>
                           <div class="submit-outer">
                               <button type="submit" class="btn btn-primary submit">Submit Inquiry</button>
                               <div class="cp-cont">
                                   <p class="mb-0">* Pellentesque massa placerat duis ultricies lacus sed turpis.<br /> Erat nam at lectus urna duis convallis convallis tellus.</p>
                               </div>
                           </div>

                       </form>
                   </div>



               </div>
           </div>
       </div>
   </div>

   <!-- Quick Inquiry Modal-->
   <div class="modal fade form-modal" id="quick-inquiry-modal" tabindex="-1" role="dialog" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content">
               <div class="modal-body">
                   <div class="img">
                       <img src="images/pop-ups/rpl-consultation.png" alt="Book a Consultation">
                   </div>

                   <div class="tab-form">
                       <h4 class="sh">Quick Inquiry</h4>
                       <h3 class="mh">Fill in Your Details, Required Country & Visa Type</h3>
                       <form action="includes/quick_inquiry.php" method="post" id="quick_inquiry">
                           <div class="form-group">
                               <select name="country" id="quick_inc_country" class="form-control">
                                   <option value="" disabled selected>Select The Country</option>
                                   <option value="Afganistan">Afghanistan</option>
                                   <option value="Albania">Albania</option>
                                   <option value="Algeria">Algeria</option>
                                   <option value="American Samoa">American Samoa</option>
                                   <option value="Andorra">Andorra</option>
                                   <option value="Angola">Angola</option>
                                   <option value="Anguilla">Anguilla</option>
                                   <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                   <option value="Argentina">Argentina</option>
                                   <option value="Armenia">Armenia</option>
                                   <option value="Aruba">Aruba</option>
                                   <option value="Australia">Australia</option>
                                   <option value="Austria">Austria</option>
                                   <option value="Azerbaijan">Azerbaijan</option>
                                   <option value="Bahamas">Bahamas</option>
                                   <option value="Bahrain">Bahrain</option>
                                   <option value="Bangladesh">Bangladesh</option>
                                   <option value="Barbados">Barbados</option>
                                   <option value="Belarus">Belarus</option>
                                   <option value="Belgium">Belgium</option>
                                   <option value="Belize">Belize</option>
                                   <option value="Benin">Benin</option>
                                   <option value="Bermuda">Bermuda</option>
                                   <option value="Bhutan">Bhutan</option>
                                   <option value="Bolivia">Bolivia</option>
                                   <option value="Bonaire">Bonaire</option>
                                   <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                   <option value="Botswana">Botswana</option>
                                   <option value="Brazil">Brazil</option>
                                   <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                   <option value="Brunei">Brunei</option>
                                   <option value="Bulgaria">Bulgaria</option>
                                   <option value="Burkina Faso">Burkina Faso</option>
                                   <option value="Burundi">Burundi</option>
                                   <option value="Cambodia">Cambodia</option>
                                   <option value="Cameroon">Cameroon</option>
                                   <option value="Canada">Canada</option>
                                   <option value="Canary Islands">Canary Islands</option>
                                   <option value="Cape Verde">Cape Verde</option>
                                   <option value="Cayman Islands">Cayman Islands</option>
                                   <option value="Central African Republic">Central African Republic</option>
                                   <option value="Chad">Chad</option>
                                   <option value="Channel Islands">Channel Islands</option>
                                   <option value="Chile">Chile</option>
                                   <option value="China">China</option>
                                   <option value="Christmas Island">Christmas Island</option>
                                   <option value="Cocos Island">Cocos Island</option>
                                   <option value="Colombia">Colombia</option>
                                   <option value="Comoros">Comoros</option>
                                   <option value="Congo">Congo</option>
                                   <option value="Cook Islands">Cook Islands</option>
                                   <option value="Costa Rica">Costa Rica</option>
                                   <option value="Cote DIvoire">Cote DIvoire</option>
                                   <option value="Croatia">Croatia</option>
                                   <option value="Cuba">Cuba</option>
                                   <option value="Curaco">Curacao</option>
                                   <option value="Cyprus">Cyprus</option>
                                   <option value="Czech Republic">Czech Republic</option>
                                   <option value="Denmark">Denmark</option>
                                   <option value="Djibouti">Djibouti</option>
                                   <option value="Dominica">Dominica</option>
                                   <option value="Dominican Republic">Dominican Republic</option>
                                   <option value="East Timor">East Timor</option>
                                   <option value="Ecuador">Ecuador</option>
                                   <option value="Egypt">Egypt</option>
                                   <option value="El Salvador">El Salvador</option>
                                   <option value="Equatorial Guinea">Equatorial Guinea</option>
                                   <option value="Eritrea">Eritrea</option>
                                   <option value="Estonia">Estonia</option>
                                   <option value="Ethiopia">Ethiopia</option>
                                   <option value="Falkland Islands">Falkland Islands</option>
                                   <option value="Faroe Islands">Faroe Islands</option>
                                   <option value="Fiji">Fiji</option>
                                   <option value="Finland">Finland</option>
                                   <option value="France">France</option>
                                   <option value="French Guiana">French Guiana</option>
                                   <option value="French Polynesia">French Polynesia</option>
                                   <option value="French Southern Ter">French Southern Ter</option>
                                   <option value="Gabon">Gabon</option>
                                   <option value="Gambia">Gambia</option>
                                   <option value="Georgia">Georgia</option>
                                   <option value="Germany">Germany</option>
                                   <option value="Ghana">Ghana</option>
                                   <option value="Gibraltar">Gibraltar</option>
                                   <option value="Great Britain">Great Britain</option>
                                   <option value="Greece">Greece</option>
                                   <option value="Greenland">Greenland</option>
                                   <option value="Grenada">Grenada</option>
                                   <option value="Guadeloupe">Guadeloupe</option>
                                   <option value="Guam">Guam</option>
                                   <option value="Guatemala">Guatemala</option>
                                   <option value="Guinea">Guinea</option>
                                   <option value="Guyana">Guyana</option>
                                   <option value="Haiti">Haiti</option>
                                   <option value="Hawaii">Hawaii</option>
                                   <option value="Honduras">Honduras</option>
                                   <option value="Hong Kong">Hong Kong</option>
                                   <option value="Hungary">Hungary</option>
                                   <option value="Iceland">Iceland</option>
                                   <option value="Indonesia">Indonesia</option>
                                   <option value="India">India</option>
                                   <option value="Iran">Iran</option>
                                   <option value="Iraq">Iraq</option>
                                   <option value="Ireland">Ireland</option>
                                   <option value="Isle of Man">Isle of Man</option>
                                   <option value="Israel">Israel</option>
                                   <option value="Italy">Italy</option>
                                   <option value="Jamaica">Jamaica</option>
                                   <option value="Japan">Japan</option>
                                   <option value="Jordan">Jordan</option>
                                   <option value="Kazakhstan">Kazakhstan</option>
                                   <option value="Kenya">Kenya</option>
                                   <option value="Kiribati">Kiribati</option>
                                   <option value="Korea North">Korea North</option>
                                   <option value="Korea Sout">Korea South</option>
                                   <option value="Kuwait">Kuwait</option>
                                   <option value="Kyrgyzstan">Kyrgyzstan</option>
                                   <option value="Laos">Laos</option>
                                   <option value="Latvia">Latvia</option>
                                   <option value="Lebanon">Lebanon</option>
                                   <option value="Lesotho">Lesotho</option>
                                   <option value="Liberia">Liberia</option>
                                   <option value="Libya">Libya</option>
                                   <option value="Liechtenstein">Liechtenstein</option>
                                   <option value="Lithuania">Lithuania</option>
                                   <option value="Luxembourg">Luxembourg</option>
                                   <option value="Macau">Macau</option>
                                   <option value="Macedonia">Macedonia</option>
                                   <option value="Madagascar">Madagascar</option>
                                   <option value="Malaysia">Malaysia</option>
                                   <option value="Malawi">Malawi</option>
                                   <option value="Maldives">Maldives</option>
                                   <option value="Mali">Mali</option>
                                   <option value="Malta">Malta</option>
                                   <option value="Marshall Islands">Marshall Islands</option>
                                   <option value="Martinique">Martinique</option>
                                   <option value="Mauritania">Mauritania</option>
                                   <option value="Mauritius">Mauritius</option>
                                   <option value="Mayotte">Mayotte</option>
                                   <option value="Mexico">Mexico</option>
                                   <option value="Midway Islands">Midway Islands</option>
                                   <option value="Moldova">Moldova</option>
                                   <option value="Monaco">Monaco</option>
                                   <option value="Mongolia">Mongolia</option>
                                   <option value="Montserrat">Montserrat</option>
                                   <option value="Morocco">Morocco</option>
                                   <option value="Mozambique">Mozambique</option>
                                   <option value="Myanmar">Myanmar</option>
                                   <option value="Nambia">Nambia</option>
                                   <option value="Nauru">Nauru</option>
                                   <option value="Nepal">Nepal</option>
                                   <option value="Netherland Antilles">Netherland Antilles</option>
                                   <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                   <option value="Nevis">Nevis</option>
                                   <option value="New Caledonia">New Caledonia</option>
                                   <option value="New Zealand">New Zealand</option>
                                   <option value="Nicaragua">Nicaragua</option>
                                   <option value="Niger">Niger</option>
                                   <option value="Nigeria">Nigeria</option>
                                   <option value="Niue">Niue</option>
                                   <option value="Norfolk Island">Norfolk Island</option>
                                   <option value="Norway">Norway</option>
                                   <option value="Oman">Oman</option>
                                   <option value="Pakistan">Pakistan</option>
                                   <option value="Palau Island">Palau Island</option>
                                   <option value="Palestine">Palestine</option>
                                   <option value="Panama">Panama</option>
                                   <option value="Papua New Guinea">Papua New Guinea</option>
                                   <option value="Paraguay">Paraguay</option>
                                   <option value="Peru">Peru</option>
                                   <option value="Phillipines">Philippines</option>
                                   <option value="Pitcairn Island">Pitcairn Island</option>
                                   <option value="Poland">Poland</option>
                                   <option value="Portugal">Portugal</option>
                                   <option value="Puerto Rico">Puerto Rico</option>
                                   <option value="Qatar">Qatar</option>
                                   <option value="Republic of Montenegro">Republic of Montenegro</option>
                                   <option value="Republic of Serbia">Republic of Serbia</option>
                                   <option value="Reunion">Reunion</option>
                                   <option value="Romania">Romania</option>
                                   <option value="Russia">Russia</option>
                                   <option value="Rwanda">Rwanda</option>
                                   <option value="St Barthelemy">St Barthelemy</option>
                                   <option value="St Eustatius">St Eustatius</option>
                                   <option value="St Helena">St Helena</option>
                                   <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                   <option value="St Lucia">St Lucia</option>
                                   <option value="St Maarten">St Maarten</option>
                                   <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                   <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                   <option value="Saipan">Saipan</option>
                                   <option value="Samoa">Samoa</option>
                                   <option value="Samoa American">Samoa American</option>
                                   <option value="San Marino">San Marino</option>
                                   <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                   <option value="Saudi Arabia">Saudi Arabia</option>
                                   <option value="Senegal">Senegal</option>
                                   <option value="Seychelles">Seychelles</option>
                                   <option value="Sierra Leone">Sierra Leone</option>
                                   <option value="Singapore">Singapore</option>
                                   <option value="Slovakia">Slovakia</option>
                                   <option value="Slovenia">Slovenia</option>
                                   <option value="Solomon Islands">Solomon Islands</option>
                                   <option value="Somalia">Somalia</option>
                                   <option value="South Africa">South Africa</option>
                                   <option value="Spain">Spain</option>
                                   <option value="Sri Lanka">Sri Lanka</option>
                                   <option value="Sudan">Sudan</option>
                                   <option value="Suriname">Suriname</option>
                                   <option value="Swaziland">Swaziland</option>
                                   <option value="Sweden">Sweden</option>
                                   <option value="Switzerland">Switzerland</option>
                                   <option value="Syria">Syria</option>
                                   <option value="Tahiti">Tahiti</option>
                                   <option value="Taiwan">Taiwan</option>
                                   <option value="Tajikistan">Tajikistan</option>
                                   <option value="Tanzania">Tanzania</option>
                                   <option value="Thailand">Thailand</option>
                                   <option value="Togo">Togo</option>
                                   <option value="Tokelau">Tokelau</option>
                                   <option value="Tonga">Tonga</option>
                                   <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                   <option value="Tunisia">Tunisia</option>
                                   <option value="Turkey">Turkey</option>
                                   <option value="Turkmenistan">Turkmenistan</option>
                                   <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                   <option value="Tuvalu">Tuvalu</option>
                                   <option value="Uganda">Uganda</option>
                                   <option value="United Kingdom">United Kingdom</option>
                                   <option value="Ukraine">Ukraine</option>
                                   <option value="United Arab Erimates">United Arab Emirates</option>
                                   <option value="United States of America">United States of America</option>
                                   <option value="Uraguay">Uruguay</option>
                                   <option value="Uzbekistan">Uzbekistan</option>
                                   <option value="Vanuatu">Vanuatu</option>
                                   <option value="Vatican City State">Vatican City State</option>
                                   <option value="Venezuela">Venezuela</option>
                                   <option value="Vietnam">Vietnam</option>
                                   <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                   <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                   <option value="Wake Island">Wake Island</option>
                                   <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                   <option value="Yemen">Yemen</option>
                                   <option value="Zaire">Zaire</option>
                                   <option value="Zambia">Zambia</option>
                                   <option value="Zimbabwe">Zimbabwe</option>
                               </select>
                           </div>
                           <input type="hidden" class="form-control" placeholder="Your Name" name="quick_inquiry_page_name" id="quick_inquiry_page_name">
                           <div class="form-group">
                               <select name="type_of_visa" id="qui_inf_visa" class="form-control">
                                   <option value="">Type of Visa</option>
                                   <option value="Tourist Visa">Tourist Visa</option>
                                   <option value="Business Visa">Business Visa</option>
                                   <option value="Work Visa">Work Visa</option>
                                   <option value="Dependent Visa">Dependent Visa</option>
                                   <option value="Student Visa">Student Visa</option>
                                   <option value="Migration">Migration</option>
                                   <option value="Other">Other</option>
                               </select>
                           </div>
                           <div class="form-group">
                               <input type="text" class="form-control" placeholder="Your Name" name="name">
                           </div>
                           <div class="form-group">
                               <input type="text" class="form-control" placeholder="Your Email Address" name="email">
                           </div>
                           <div class="form-group">
                               <input type="text" class="form-control" placeholder="Your Contact Number" name="contact_number">
                           </div>
                           <div class="form-group">
                               <select name="civil_status" class="form-control">
                                   <option value="" selected disabled>Civil Status</option>
                                   <option value="Single">Single</option>
                                   <option value="Married">Married</option>
                               </select>
                           </div>
                           <div class="form-group">
                               <input type="text" class="form-control" placeholder="Duration of Stay" name="duration">
                           </div>
                          <!-- <div class="form-group">
                               <select name="duration" class="form-control">
                                   <option value="" selected disabled>Duration of Stay (if Applicable)</option>
                                   <option value="1 week">1 Week</option>
                                   <option value="2 week">2 Week</option>
                                   <option value="3 week">3 Week</option>
                               </select>
                           </div>-->
                           <div class="form-group textarea">
                               <textarea class="form-control" name="special_comments" placeholder="Special Comments or Requests"></textarea>
                           </div>
                           <div class="submit-outer mt-0">
                               <button type="submit" class="btn btn-primary submit">Submit Inquiry</button>
                               <div class="cp-cont">
                                   <p class="mb-0">* Pellentesque massa placerat duis ultricies lacus sed turpis. Erat nam at lectus urna duis convallis convallis tellus.</p>
                               </div>
                           </div>

                       </form>
                   </div>

               </div>
           </div>
       </div>
   </div>


     <!-- Migration Visa Inquiry Modal style="display:block; opacity:1"-->
     <div class="modal fade form-modal" id="migration-visa-inquiry-modal" tabindex="-1" role="dialog" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content">
               <div class="modal-body">
                   <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button> -->
                   <div class="img">
                       <img src="images/pop-ups/migration-visa-inquiry.png" alt="Book a Consultation">
                   </div>

                   <div class="tab-form">
                       <h4 class="sh">Migration Visa Inquiry</h4>
                       <h3 class="mh">Fill in Your Details, Required Programme & Upload Your CV</h3>
                       <form action="includes/migration_visa_inquiry.php" id="migration_visa_inquiry" enctype="multipart/form-data" method="post">
                           <div class="form-group">
                               <input type="text" class="form-control" placeholder="Your Name" name="name">
                           </div>
                           <div class="form-group">
                               <input type="text" class="form-control" placeholder="Your Email Address" name="email">
                           </div>
                           <div class="form-group">
                               <input type="text" class="form-control" placeholder="Your Contact Number" name="contact_number">
                           </div>
                           <div class="form-group">
                               <input type="text" class="form-control" placeholder="Your Profession" name="profession">
                           </div>
                           <div class="form-group">
                               <select name="country"  class="form-control">
                                   <option value="" disabled selected>Country of Choice</option>
                                   <option value="Afganistan">Afghanistan</option>
                                   <option value="Albania">Albania</option>
                                   <option value="Algeria">Algeria</option>
                                   <option value="American Samoa">American Samoa</option>
                                   <option value="Andorra">Andorra</option>
                                   <option value="Angola">Angola</option>
                                   <option value="Anguilla">Anguilla</option>
                                   <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                   <option value="Argentina">Argentina</option>
                                   <option value="Armenia">Armenia</option>
                                   <option value="Aruba">Aruba</option>
                                   <option value="Australia">Australia</option>
                                   <option value="Austria">Austria</option>
                                   <option value="Azerbaijan">Azerbaijan</option>
                                   <option value="Bahamas">Bahamas</option>
                                   <option value="Bahrain">Bahrain</option>
                                   <option value="Bangladesh">Bangladesh</option>
                                   <option value="Barbados">Barbados</option>
                                   <option value="Belarus">Belarus</option>
                                   <option value="Belgium">Belgium</option>
                                   <option value="Belize">Belize</option>
                                   <option value="Benin">Benin</option>
                                   <option value="Bermuda">Bermuda</option>
                                   <option value="Bhutan">Bhutan</option>
                                   <option value="Bolivia">Bolivia</option>
                                   <option value="Bonaire">Bonaire</option>
                                   <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                   <option value="Botswana">Botswana</option>
                                   <option value="Brazil">Brazil</option>
                                   <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                   <option value="Brunei">Brunei</option>
                                   <option value="Bulgaria">Bulgaria</option>
                                   <option value="Burkina Faso">Burkina Faso</option>
                                   <option value="Burundi">Burundi</option>
                                   <option value="Cambodia">Cambodia</option>
                                   <option value="Cameroon">Cameroon</option>
                                   <option value="Canada">Canada</option>
                                   <option value="Canary Islands">Canary Islands</option>
                                   <option value="Cape Verde">Cape Verde</option>
                                   <option value="Cayman Islands">Cayman Islands</option>
                                   <option value="Central African Republic">Central African Republic</option>
                                   <option value="Chad">Chad</option>
                                   <option value="Channel Islands">Channel Islands</option>
                                   <option value="Chile">Chile</option>
                                   <option value="China">China</option>
                                   <option value="Christmas Island">Christmas Island</option>
                                   <option value="Cocos Island">Cocos Island</option>
                                   <option value="Colombia">Colombia</option>
                                   <option value="Comoros">Comoros</option>
                                   <option value="Congo">Congo</option>
                                   <option value="Cook Islands">Cook Islands</option>
                                   <option value="Costa Rica">Costa Rica</option>
                                   <option value="Cote DIvoire">Cote DIvoire</option>
                                   <option value="Croatia">Croatia</option>
                                   <option value="Cuba">Cuba</option>
                                   <option value="Curaco">Curacao</option>
                                   <option value="Cyprus">Cyprus</option>
                                   <option value="Czech Republic">Czech Republic</option>
                                   <option value="Denmark">Denmark</option>
                                   <option value="Djibouti">Djibouti</option>
                                   <option value="Dominica">Dominica</option>
                                   <option value="Dominican Republic">Dominican Republic</option>
                                   <option value="East Timor">East Timor</option>
                                   <option value="Ecuador">Ecuador</option>
                                   <option value="Egypt">Egypt</option>
                                   <option value="El Salvador">El Salvador</option>
                                   <option value="Equatorial Guinea">Equatorial Guinea</option>
                                   <option value="Eritrea">Eritrea</option>
                                   <option value="Estonia">Estonia</option>
                                   <option value="Ethiopia">Ethiopia</option>
                                   <option value="Falkland Islands">Falkland Islands</option>
                                   <option value="Faroe Islands">Faroe Islands</option>
                                   <option value="Fiji">Fiji</option>
                                   <option value="Finland">Finland</option>
                                   <option value="France">France</option>
                                   <option value="French Guiana">French Guiana</option>
                                   <option value="French Polynesia">French Polynesia</option>
                                   <option value="French Southern Ter">French Southern Ter</option>
                                   <option value="Gabon">Gabon</option>
                                   <option value="Gambia">Gambia</option>
                                   <option value="Georgia">Georgia</option>
                                   <option value="Germany">Germany</option>
                                   <option value="Ghana">Ghana</option>
                                   <option value="Gibraltar">Gibraltar</option>
                                   <option value="Great Britain">Great Britain</option>
                                   <option value="Greece">Greece</option>
                                   <option value="Greenland">Greenland</option>
                                   <option value="Grenada">Grenada</option>
                                   <option value="Guadeloupe">Guadeloupe</option>
                                   <option value="Guam">Guam</option>
                                   <option value="Guatemala">Guatemala</option>
                                   <option value="Guinea">Guinea</option>
                                   <option value="Guyana">Guyana</option>
                                   <option value="Haiti">Haiti</option>
                                   <option value="Hawaii">Hawaii</option>
                                   <option value="Honduras">Honduras</option>
                                   <option value="Hong Kong">Hong Kong</option>
                                   <option value="Hungary">Hungary</option>
                                   <option value="Iceland">Iceland</option>
                                   <option value="Indonesia">Indonesia</option>
                                   <option value="India">India</option>
                                   <option value="Iran">Iran</option>
                                   <option value="Iraq">Iraq</option>
                                   <option value="Ireland">Ireland</option>
                                   <option value="Isle of Man">Isle of Man</option>
                                   <option value="Israel">Israel</option>
                                   <option value="Italy">Italy</option>
                                   <option value="Jamaica">Jamaica</option>
                                   <option value="Japan">Japan</option>
                                   <option value="Jordan">Jordan</option>
                                   <option value="Kazakhstan">Kazakhstan</option>
                                   <option value="Kenya">Kenya</option>
                                   <option value="Kiribati">Kiribati</option>
                                   <option value="Korea North">Korea North</option>
                                   <option value="Korea Sout">Korea South</option>
                                   <option value="Kuwait">Kuwait</option>
                                   <option value="Kyrgyzstan">Kyrgyzstan</option>
                                   <option value="Laos">Laos</option>
                                   <option value="Latvia">Latvia</option>
                                   <option value="Lebanon">Lebanon</option>
                                   <option value="Lesotho">Lesotho</option>
                                   <option value="Liberia">Liberia</option>
                                   <option value="Libya">Libya</option>
                                   <option value="Liechtenstein">Liechtenstein</option>
                                   <option value="Lithuania">Lithuania</option>
                                   <option value="Luxembourg">Luxembourg</option>
                                   <option value="Macau">Macau</option>
                                   <option value="Macedonia">Macedonia</option>
                                   <option value="Madagascar">Madagascar</option>
                                   <option value="Malaysia">Malaysia</option>
                                   <option value="Malawi">Malawi</option>
                                   <option value="Maldives">Maldives</option>
                                   <option value="Mali">Mali</option>
                                   <option value="Malta">Malta</option>
                                   <option value="Marshall Islands">Marshall Islands</option>
                                   <option value="Martinique">Martinique</option>
                                   <option value="Mauritania">Mauritania</option>
                                   <option value="Mauritius">Mauritius</option>
                                   <option value="Mayotte">Mayotte</option>
                                   <option value="Mexico">Mexico</option>
                                   <option value="Midway Islands">Midway Islands</option>
                                   <option value="Moldova">Moldova</option>
                                   <option value="Monaco">Monaco</option>
                                   <option value="Mongolia">Mongolia</option>
                                   <option value="Montserrat">Montserrat</option>
                                   <option value="Morocco">Morocco</option>
                                   <option value="Mozambique">Mozambique</option>
                                   <option value="Myanmar">Myanmar</option>
                                   <option value="Nambia">Nambia</option>
                                   <option value="Nauru">Nauru</option>
                                   <option value="Nepal">Nepal</option>
                                   <option value="Netherland Antilles">Netherland Antilles</option>
                                   <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                   <option value="Nevis">Nevis</option>
                                   <option value="New Caledonia">New Caledonia</option>
                                   <option value="New Zealand">New Zealand</option>
                                   <option value="Nicaragua">Nicaragua</option>
                                   <option value="Niger">Niger</option>
                                   <option value="Nigeria">Nigeria</option>
                                   <option value="Niue">Niue</option>
                                   <option value="Norfolk Island">Norfolk Island</option>
                                   <option value="Norway">Norway</option>
                                   <option value="Oman">Oman</option>
                                   <option value="Pakistan">Pakistan</option>
                                   <option value="Palau Island">Palau Island</option>
                                   <option value="Palestine">Palestine</option>
                                   <option value="Panama">Panama</option>
                                   <option value="Papua New Guinea">Papua New Guinea</option>
                                   <option value="Paraguay">Paraguay</option>
                                   <option value="Peru">Peru</option>
                                   <option value="Phillipines">Philippines</option>
                                   <option value="Pitcairn Island">Pitcairn Island</option>
                                   <option value="Poland">Poland</option>
                                   <option value="Portugal">Portugal</option>
                                   <option value="Puerto Rico">Puerto Rico</option>
                                   <option value="Qatar">Qatar</option>
                                   <option value="Republic of Montenegro">Republic of Montenegro</option>
                                   <option value="Republic of Serbia">Republic of Serbia</option>
                                   <option value="Reunion">Reunion</option>
                                   <option value="Romania">Romania</option>
                                   <option value="Russia">Russia</option>
                                   <option value="Rwanda">Rwanda</option>
                                   <option value="St Barthelemy">St Barthelemy</option>
                                   <option value="St Eustatius">St Eustatius</option>
                                   <option value="St Helena">St Helena</option>
                                   <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                   <option value="St Lucia">St Lucia</option>
                                   <option value="St Maarten">St Maarten</option>
                                   <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                   <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                   <option value="Saipan">Saipan</option>
                                   <option value="Samoa">Samoa</option>
                                   <option value="Samoa American">Samoa American</option>
                                   <option value="San Marino">San Marino</option>
                                   <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                   <option value="Saudi Arabia">Saudi Arabia</option>
                                   <option value="Senegal">Senegal</option>
                                   <option value="Seychelles">Seychelles</option>
                                   <option value="Sierra Leone">Sierra Leone</option>
                                   <option value="Singapore">Singapore</option>
                                   <option value="Slovakia">Slovakia</option>
                                   <option value="Slovenia">Slovenia</option>
                                   <option value="Solomon Islands">Solomon Islands</option>
                                   <option value="Somalia">Somalia</option>
                                   <option value="South Africa">South Africa</option>
                                   <option value="Spain">Spain</option>
                                   <option value="Sri Lanka">Sri Lanka</option>
                                   <option value="Sudan">Sudan</option>
                                   <option value="Suriname">Suriname</option>
                                   <option value="Swaziland">Swaziland</option>
                                   <option value="Sweden">Sweden</option>
                                   <option value="Switzerland">Switzerland</option>
                                   <option value="Syria">Syria</option>
                                   <option value="Tahiti">Tahiti</option>
                                   <option value="Taiwan">Taiwan</option>
                                   <option value="Tajikistan">Tajikistan</option>
                                   <option value="Tanzania">Tanzania</option>
                                   <option value="Thailand">Thailand</option>
                                   <option value="Togo">Togo</option>
                                   <option value="Tokelau">Tokelau</option>
                                   <option value="Tonga">Tonga</option>
                                   <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                   <option value="Tunisia">Tunisia</option>
                                   <option value="Turkey">Turkey</option>
                                   <option value="Turkmenistan">Turkmenistan</option>
                                   <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                   <option value="Tuvalu">Tuvalu</option>
                                   <option value="Uganda">Uganda</option>
                                   <option value="United Kingdom">United Kingdom</option>
                                   <option value="Ukraine">Ukraine</option>
                                   <option value="United Arab Erimates">United Arab Emirates</option>
                                   <option value="United States of America">United States of America</option>
                                   <option value="Uraguay">Uruguay</option>
                                   <option value="Uzbekistan">Uzbekistan</option>
                                   <option value="Vanuatu">Vanuatu</option>
                                   <option value="Vatican City State">Vatican City State</option>
                                   <option value="Venezuela">Venezuela</option>
                                   <option value="Vietnam">Vietnam</option>
                                   <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                   <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                   <option value="Wake Island">Wake Island</option>
                                   <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                   <option value="Yemen">Yemen</option>
                                   <option value="Zaire">Zaire</option>
                                   <option value="Zambia">Zambia</option>
                                   <option value="Zimbabwe">Zimbabwe</option>
                               </select>
                           </div>
                           <div class="form-group">
                               <select name="most_recent_qualification" class="form-control">
                                   <option value="" selected disabled>Programme of Choice</option>
                                   <option value="qu1">Programme of Choice 1</option>
                                   <option value="qu2">Programme of Choice 2</option>
                               </select>
                           </div>
                           <div class="form-group textarea">
                               <textarea class="form-control" name="special_comments" placeholder="Special Comments or Requests"></textarea>
                           </div>
                           <div class="form-group ubu">
                               <div class="upload-btn-wrapper">
                                   <button class="btn"><span>Browse Files</span> to Upload Here</button>
                                   <input type="file" name="cv_file" />
                               </div>
                           </div>
                           <div class="submit-outer mt-0">
                               <button type="submit" class="btn btn-primary submit">Submit Inquiry</button>
                               <div class="cp-cont">
                                   <p class="mb-0">* Please note that only PDF, JPG, DOC, DOCS, TXT files of less than 10 MB are accepted as valid uploads.</p>
                               </div>
                           </div>

                       </form>
                   </div>

               </div>
           </div>
       </div>
   </div>