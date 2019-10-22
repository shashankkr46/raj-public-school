<?php $page_title = "Admission"; ?>
<?php include 'templates/header.php'; ?>

    <!--================ End Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="banner_content text-center">
                            <h2>Application Form</h2>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->
<section class="principal-hr">
  <div class="container">
     <div class="row">
      <div class="col-lg-12 text-dark principal-heading">
        <main>
            <h1 class="one"><span>Registration Form</span></h1>
        </main>
      </div>
     </div>
   </div>
</section>
<section class="pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pl-0">
                <p><span class="overview-para text-danger ">Note</span><span class="pl-4"><small class="text-dark">: Uploading file should be less than 4MB</small> </span><br>
                    <small class="reg-form-heading text-dark">: Please enter NA or '0' Wherever not applicable</small>    
                   
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 pl-0 reg-form-student-heading">
                <p class="pt-3">Student Details</p>
            </div>
        </div>

<!------------------------------------------------------------------------------------------->

<div class="row pt-4">
  <div class="col-lg-12">
    <form>
        <div class="form-group">
            <div class="row">
                <div class="col-lg-4">
                    <label for="firstname" class="label-text">First name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" >
                </div>
                <div class="col-lg-4">
                    <label for="firstname" class="label-text">Middle name </label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-lg-4">
                    <label for="firstname" class="label-text">Last name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control">
                </div>
            </div>
<!------------------------------------------------------------------------------------------->
            <div class="row pt-5">
                <div class="col-lg-4">
                    <label for="inlineFormInputGroupUsername" class="label-text">Mob no.</label>
                    <div class="input-group">
                     <div class="input-group-prepend">
                      <div class="input-group-text">91</div>
                     </div>
                     <input type="text" class="form-control" id="inlineFormInputGroupUsername">
                    </div>
               </div>
               <div class="col-lg-4 ">
                    <div><label for="inlineFormCustomSelect" class="overview-para">Present Class Studying</label></div>
                    <select class="custom-select pt-0 pb-0 w-100" id="inlineFormCustomSelect">
                        <option  value="1">Select Class</option>
                        <option  value="2">Nursery</option>
                        <option  value="3">Kindergarten I</option>
                        <option  value="4">Kindergarten II</option>
                        <option  value="5">Standard 1</option>
                        <option  value="6">Standard 2</option>
                        <option  value="7">Standard 3</option>
                        <option  value="8">Standard 4</option>
                        <option  value="9">Standard 5</option>
                        <option  value="10">Standard 6</option>
                        <option  value="11">Standard 7</option>
                        <option  value="12">Standard 8</option>
                        <option  value="13">Standard 9</option>
                        <option  value="14">standard 10</option>
                        <option  value="15">Standard 11 ART</option>
                        <option  value="16">Standard 11 Science</option>
                        <option  value="17">Standard 11 Commerce</option>
                        <option  value="18">Standard 12 ART</option>
                        <option  value="19">Standard 12 Science</option>
                        <option  value="20">Standard 12 Comm</option>
                    </select>
                </div>
                <div class="col-lg-4">
                    <label for="firstname" class="label-text">Present School Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control">
                </div>
            </div>
<!------------------------------------------------------------------------------------------->
            <div class="row pt-5">
                <div class="col-lg-4">
                     <div><label for="inlineFormCustomSelect" class="overview-para">DOB<span class="text-danger">*</span></label></div>
                  <span class="d-flex flex-row justify-content-start">
                    <select class="custom-select pt-0 pb-0" id="inlineFormCustomSelect">
                        <option  value="1">Year</option>
                        <option  value="2">1999</option>
                        <option  value="3">2000</option>
                        <option  value="4">2001</option>
                        <option  value="5">2002</option>
                        <option  value="6">2003</option>
                        <option  value="7">2004</option>
                        <option  value="8">2005</option>
                        <option  value="9">2006</option>
                        <option  value="10">2007</option>
                        <option  value="11">2008</option>
                        <option  value="12">2009</option>
                        <option  value="13">2010</option>
                        <option  value="14">2011</option>
                        <option  value="15">2012</option>
                        <option  value="16">2013</option>
                        <option  value="17">2014</option>
                        <option  value="18">2015</option>
                        <option  value="19">2016</option>
                        <option  value="20">2017</option>
                        <option  value="20">2018</option>
                        <option  value="20">2019</option>
                    </select>
                    <select class="custom-select pt-0 pb-0 ml-2" id="inlineFormCustomSelect">
                        <option selected="selected" value="0">Month</option>
                        <option value="1">Jan</option>
                        <option value="2">Feb</option>
                        <option value="3">Mar</option>
                        <option value="4">Apr</option>
                        <option value="5">May</option>
                        <option value="6">Jun</option>
                        <option value="7">Jul</option>
                        <option value="8">Aug</option>
                        <option value="9">Sep</option>
                        <option value="10">Oct</option>
                        <option value="11">Nov</option>
                        <option value="12">Dec</option>
                    </select>
                    <select class="custom-select pt-0 pb-0 ml-2" id="inlineFormCustomSelect">

                        <option selected="selected" value="0">Day</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>

                </span>
               </div>
               <div class="col-lg-4 ">
                <div><label for="inlineFormCustomSelect" class="overview-para">Admission for the Academic Yeaar<span class="text-danger">*</span></label></div>
                  <span class="d-flex flex-row justify-content-start">
                    <select class="custom-select pt-0 pb-0 w-100" id="inlineFormCustomSelect">
                        <option  value="1">Select Year</option>
                        <option  value="2">2019</option>
                        <option  value="3">2020</option>
                    </select>
                 </span>
                </div>
                <div class="col-lg-4">
                    <label for="firstname" class="label-text">Present School City <span class="text-danger">*</span></label>
                    <input type="text" class="form-control">
                </div>
            </div>
<!-------------------------------------------------------------------------------------------> 
            <div class="row pt-5">
                <div class="col-lg-4">
                    <label for="firstname" class="label-text">Gender<span class="text-danger">*</span></label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label overview-para" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label overview-para" for="inlineRadio2">Female</label>
                    </div>
                </div>
                <div class="col-lg-4">
                     <div><label for="inlineFormCustomSelect" class="overview-para">Seeking Admission in class</label><span class="text-danger">*</span></div>
                    <select class="custom-select pt-0 pb-0 w-100" id="inlineFormCustomSelect">
                        <option  value="1">Select Class</option>
                        <option  value="2">Nursery</option>
                        <option  value="3">Kindergarten I</option>
                        <option  value="4">Kindergarten II</option>
                        <option  value="5">Standard 1</option>
                        <option  value="6">Standard 2</option>
                        <option  value="7">Standard 3</option>
                        <option  value="8">Standard 4</option>
                        <option  value="9">Standard 5</option>
                        <option  value="10">Standard 6</option>
                        <option  value="11">Standard 7</option>
                        <option  value="12">Standard 8</option>
                        <option  value="13">Standard 9</option>
                        <option  value="14">standard 10</option>
                        <option  value="15">Standard 11 ART</option>
                        <option  value="16">Standard 11 Science</option>
                        <option  value="17">Standard 11 Commerce</option>
                        <option  value="18">Standard 12 ART</option>
                        <option  value="19">Standard 12 Science</option>
                        <option  value="20">Standard 12 Comm</option>
                    </select>
                </div>
                <div class="col-lg-4"> 
                    <label for="firstname" class="label-text">Select Country<span class="text-danger">*</span></label><br>
                    <span class="d-flex flex-row justify-content-start">
                    <select class="custom-select pt-0 pb-0" id="inlineFormCustomSelect">
                    <option selected="selected" value="0">Select Country</option>
                    <option value="General" title="General">India</option>
                    <option value="General" title="General">Other</option>
                    </select><input type="text" class="form-control ml-2 input-box" placeholder="If other Please Mention"></span>
                </div>
</div>



<!------------------------------------------------------------------------------------------->
        <div class="row pt-5"> 
            <div class="col-lg-4 ">
            <label for="firstname" class="label-text">Religion<span class="text-danger">*</span></label><br>
                    <select class="custom-select pt-0 pb-0 w-100" id="inlineFormCustomSelect">
                    <option selected="selected" value="0">Select Religion</option>
                    <option value="Buddha" title="Buddha">Buddha</option>
                    <option value="Christian" title="Christian">Christian</option>
                    <option value="Hindu" title="Hindu">Hindu</option>
                    <option value="Jain" title="Jain">Jain</option>
                    <option value="Muslim" title="Muslim">Muslim</option>
                    <option value="Sikh" title="Sikh">Sikh</option>

                    </select>
            </div>
             <div class="col-lg-4 ">
                <label for="firstname" class="label-text">Caste<span class="text-danger">*</span></label><br>
                    <select class="custom-select pt-0 pb-0 w-100" id="inlineFormCustomSelect">
                    <option selected="selected" value="0">Select Caste</option>
                    <option value="General" title="General">General</option>
                    <option value="OBC" title="OBC">OBC</option>
                    <option value="SC/ST" title="SC/ST">SC/ST</option>
                    <option value="NT" title="NT">NT</option>
                    <option value="Other" title="Other">Other</option>

                    </select>
            </div>
             <div class="col-lg-4 ">
                    <label for="firstname" class="label-text">Mother Tongue<span class="text-danger">*</span></label><br>
                    <span class="d-flex flex-row justify-content-start">
                    <select class="custom-select pt-0 pb-0" id="inlineFormCustomSelect">
                    <option selected="selected" value="0">English</option>
                    <option value="General" title="General">Hindi</option>
                    <option value="General" title="General">Other</option>
                    </select><input type="text" class="form-control ml-2 input-box" placeholder="If other Please Mention"></span>
                    
            </div>
        </div>
<!-------------------------------------------------------------------------------------------> 
        <div class="row pt-5"> 
            <div class="col-lg-4 ">
            <label for="firstname" class="label-text">Identification Number<span class="text-danger">*</span></label><br>
            <span class="d-flex flex-row justify-content-start">
                    <select class="custom-select pt-0 pb-0 w-100" id="inlineFormCustomSelect">
                    <option selected="selected" value="0">Select Id</option>
                    <option value="5" title="Aadhaar Card">Aadhaar Card</option>
                    <option value="1" title="Birth Cert">Birth Cert</option>
                    <option value="3" title="FIN">FIN</option>
                    <option value="2" title="NRIC">NRIC</option>
                    <option value="4" title="Other">Other</option>

                    </select><input type="text" class="form-control ml-2 input-box" placeholder="Enter Id No."></span>
            </div>
            <div class="col-lg-4 ">
            <label for="firstname" class="label-text">Blood Group<span class="text-danger">*</span></label><br>
            <span class="d-flex flex-row justify-content-start">
                    <select class="custom-select pt-0 pb-0 w-100" id="inlineFormCustomSelect">
                    <option selected="selected" value="0">Select Blood Group</option>
                    <option value="A+" title="A+">A+</option>
                    <option value="A-" title="A-">A-</option>
                    <option value="B+" title="B+">B+</option>
                    <option value="B-" title="B-">B-</option>
                    <option value="O+" title="O+">O+</option>
                    <option value="O-" title="O-">O-</option>
                    <option value="AB+" title="AB+">AB+</option>
                    <option value="AB-" title="AB-">AB-</option></select>
            </span>
            </div>
            <div class="col-lg-4">
                 <label for="exampleFormControlFile1"></label>
                 <input type="file" class="form-control-file file-box" id="exampleFormControlFile1">
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-12 pl-0 reg-form-student-heading">
                <p class="pt-3">Parent Details</p>
            </div>
        </div>
<!------------------------------------------------------------------------------------------->
        <div class="row">
         <div class="col-lg-12 pl-0"><p class="font-weight-bold pt-3 text-dark">Father's Particulars</p></div>
        </div>
        <div class="row">
          <div class="col-lg-4">
             <label for="firstname" class="label-text">First name <span class="text-danger">*</span></label>
             <input type="text" class="form-control" >
          </div>
          <div class="col-lg-4">
             <label for="firstname" class="label-text">Middle name </label>
             <input type="text" class="form-control">
          </div>
          <div class="col-lg-4">
             <label for="firstname" class="label-text">Last name <span class="text-danger">*</span></label>
             <input type="text" class="form-control">
          </div>
        </div>

<!------------------------------------------------------------------------------------------->
        <div class="row mt-5">
            <div class="col-lg-4">
                     <div><label for="inlineFormCustomSelect" class="overview-para">DOB<span class="text-danger">*</span></label></div>
                  <span class="d-flex flex-row justify-content-start">
                    <select class="custom-select pt-0 pb-0" id="inlineFormCustomSelect">
                        <option  value="1">Year</option>
                        <option  value="2">1999</option>
                        <option  value="3">2000</option>
                        <option  value="4">2001</option>
                        <option  value="5">2002</option>
                        <option  value="6">2003</option>
                        <option  value="7">2004</option>
                        <option  value="8">2005</option>
                        <option  value="9">2006</option>
                        <option  value="10">2007</option>
                        <option  value="11">2008</option>
                        <option  value="12">2009</option>
                        <option  value="13">2010</option>
                        <option  value="14">2011</option>
                        <option  value="15">2012</option>
                        <option  value="16">2013</option>
                        <option  value="17">2014</option>
                        <option  value="18">2015</option>
                        <option  value="19">2016</option>
                        <option  value="20">2017</option>
                        <option  value="20">2018</option>
                        <option  value="20">2019</option>
                    </select>
                    <select class="custom-select pt-0 pb-0 ml-2" id="inlineFormCustomSelect">
                        <option selected="selected" value="0">Month</option>
                        <option value="1">Jan</option>
                        <option value="2">Feb</option>
                        <option value="3">Mar</option>
                        <option value="4">Apr</option>
                        <option value="5">May</option>
                        <option value="6">Jun</option>
                        <option value="7">Jul</option>
                        <option value="8">Aug</option>
                        <option value="9">Sep</option>
                        <option value="10">Oct</option>
                        <option value="11">Nov</option>
                        <option value="12">Dec</option>
                    </select>
                    <select class="custom-select pt-0 pb-0 ml-2" id="inlineFormCustomSelect">

                        <option selected="selected" value="0">Day</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>

                </span>
               </div>
               <div class="col-lg-4">
                   <label for="inlineFormInputGroupUsername" class="label-text">Mob no.</label>
                    <div class="input-group">
                     <div class="input-group-prepend">
                      <div class="input-group-text">91</div>
                     </div>
                     <input type="text" class="form-control" id="inlineFormInputGroupUsername">
                    </div>
               </div>
               <div class="col-lg-4">
                   <label for="firstname" class="label-text">Identification Number<span class="text-danger">*</span></label><br>
            <span class="d-flex flex-row justify-content-start">
                    <select class="custom-select pt-0 pb-0 w-100" id="inlineFormCustomSelect">
                    <option selected="selected" value="0">Select Id</option>
                    <option value="5" title="Aadhaar Card">Aadhaar Card</option>
                    <option value="1" title="Birth Cert">Birth Cert</option>
                    <option value="3" title="FIN">FIN</option>
                    <option value="2" title="NRIC">NRIC</option>
                    <option value="4" title="Other">Other</option>

                    </select><input type="text" class="form-control ml-2 input-box" placeholder="Enter Id No."></span>
               </div>

        </div>
<!------------------------------------------------------------------------------------------->
        <div class="row">
            <div class="col-lg-4">
            <div><label for="inlineFormCustomSelect" class="overview-para">Education<span class="text-danger">*</span></label></div>
            <span class="d-flex flex-row justify-content-start">
                    <select class="custom-select pt-0 pb-0 w-100" id="inlineFormCustomSelect">
                    <option value="0">--Select Education--</option>
                    <option value="--Under-Graduate--" disabled="true">--Under-Graduate--</option>
                    <option value="Under-Graduate">Under-Graduate</option>
                    <option value="--Graduate--" disabled="true">--Graduate--</option>
                    <option value="B.E.">B.E.</option>
                    <option value="B.Com">B.Com</option>
                    <option value="Law Graduate">Law Graduate</option>
                    <option value="Pharm">Pharm</option>
                    <option value="Science">Science</option>
                    <option value="Arts">Arts</option>
                    <option value="MBBS">MBBS</option>
                    <option value="B.Tech">B.Tech</option>
                    <option value="--Post Graduate--" disabled="true">--Post Graduate--</option>
                    <option value="M.Tech">M.Tech</option>
                    <option value="Post Graduate - Commerce">Post Graduate - Commerce</option>
                    <option value="Post Graduate - LAW">Post Graduate - LAW</option>
                    <option value="Post Graduate - Pharm">Post Graduate - Pharm</option>
                    <option value="Post Graduate – Science">Post Graduate – Science</option>
                    <option value="Post Graduate – Arts">Post Graduate – Arts</option>
                    <option value="MD/MS">MD/MS</option>
                    <option value="MBA">MBA</option>
                    <option value="--Doctorate--" disabled="true">--Doctorate--</option>
                    <option value="Doctorate">Doctorate</option>
                    <option value="--Other--" disabled="true">--Other--</option>
                    <option value="Other">Other</option></select>
            </span></div>
            <div class="col-lg-4">
                <div><label for="inlineFormCustomSelect" class="overview-para">Education<span class="text-danger">*</span></label></div>
            <span class="d-flex flex-row justify-content-start">
                    <select class="custom-select pt-0 pb-0 w-100" id="inlineFormCustomSelect">
                    <option selected="selected" value="0">--Select Position--</option>
                    <option value="1" title="Analyst">Analyst</option>
                    <option value="2" title="Area Manager">Area Manager</option>
                    <option value="3" title="Asstt. Manager">Asstt. Manager</option>
                    <option value="4" title="Businessman">Businessman</option>
                    <option value="5" title="Consultant">Consultant</option>
                    <option value="6" title="Country Manager">Country Manager</option>
                    <option value="7" title="Executiive">Executiive</option>
                    <option value="8" title="Managing Director">Managing Director</option>
                    <option value="11" title="Other">Other</option>
                    <option value="10" title="Sr. Manager">Sr. Manager</option>
                    <option value="9" title="Technical Consultant">Technical Consultant</option></select>
            </span>
            </div>
            <div class="col-lg-4">
                <div><label for="inlineFormCustomSelect" class="overview-para">Education<span class="text-danger">*</span></label></div>
            <span class="d-flex flex-row justify-content-start">
                    <select class="custom-select pt-0 pb-0 w-100" id="inlineFormCustomSelect">
                    <option value="0">--Select Income Range--</option>
                    <option value="0,100000" title="0 to 100000">0 to 100000</option>
                    <option value="0,500000" title="100000 to 500000">100000 to 500000</option>
                    <option value="500000,1000000" title="500000 to 1000000">500000 to 1000000</option>
                    <option value="1000000,1500000" title="1000000 to 1500000">1000000 to 1500000</option>
                    <option value="1500000,2000000" title="1500000 to 2000000">1500000 to 2000000</option>
                    <option value="2000000,2500000" title="2000000 to 2500000">2000000 to 2500000</option>
                    <option value="Above 2500000" title="Above 2500000">Above 2500000</option>
                    <option value="NA" title="NA">NA</option></select>
            </span>
            </div>
            
        </div>

<!------------------------------------------------------------------------------------------->


        </div><!--form-group-->
    </form>
  </div>
</div>




    </div>
</section>
   

   
 
    <!--================ Start footer Area  =================-->

   <?php include 'templates/footer.php'; ?>