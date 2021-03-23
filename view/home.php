<!doctype html>
<html lang="en">


    <?php include 'links.php';?>
<body>
    
    <!-- header area -->
    <section class="header header--2">
  
    <!-- start menu area -->
        <?php include 'nav.php';?>
    <!-- end menu area -->

    </section>
    <!-- end: .header -->


<!-- model 1 -->
<div class="modal fade" id="ForColleges" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-lg" role="document">
    <!--Content-->
    <div class="modal-content  text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
      <div>
        		<h5 class="mb-0">LearnEngg</h5>
        <p class="mb-0">The Place You can learn Every Thing.</p>
      </div>
  </div>

      <!--Body-->
      <div class="modal-body">

        <i class="fas fa-user-plus info-color fa-4x animated rotateIn mb-4"></i>
        <form>
        <div class="form-group row">
        	<div class="col-lg-4">
            <label class="form-label"> Education *</label>
        </div>
        <div class="col-lg-8">
           
               
               <select name="education" class="form-control" required="required" data-error="Please college type." id="education">
                	<option value="0">Enginnering</option>
                	<option value="1">Polytechnic</option>
                </select>               
                 <div class="help-block with-errors"></div>
           
        </div>
        </div>
        <div class="form-group row">
        	<div class="col-lg-4">
            <label class="form-label"> College Name *</label>
        </div>
        <div class="col-lg-8">
        	
           
              <input type="text" name="firstname" data-minlength="6" class="form-control" placeholder="College Name" required="required" data-error="Minimum of 6 characters." maxlength="50" id="firstname" value="">               
                 <div class="help-block with-errors"></div>
           
        </div>
        </div>
         <div class="form-group row">
        	<div class="col-lg-4">
            <label class="form-label"> Phone Number *</label>
        </div>
        <div class="col-lg-8">
        	
           
              <input type="number" name="firstname" data-minlength="6" class="form-control" placeholder="Phone Number" required="required" data-error="Minimum of 6 characters." maxlength="50" id="firstname" value="">               
                 <div class="help-block with-errors"></div>
           
        </div>
        </div>
             <div class="form-group row">
        	<div class="col-lg-4">
            <label class="form-label"> Email ID *</label>
        </div>
        <div class="col-lg-8">
        	
           
              <input type="email" name="firstname" data-minlength="6" class="form-control" placeholder="Email ID" required="required" data-error="Minimum of 6 characters." maxlength="50" id="firstname" value="">               
                 <div class="help-block with-errors"></div>
           
        </div>
        </div>
              <div class="form-group row">
        	<div class="col-lg-4">
            <label class="form-label">Password*</label>
        </div>
        <div class="col-lg-8">
        	
           
              <input type="Password" name="firstname" data-minlength="6" class="form-control" placeholder="Email ID" required="required" data-error="Minimum of 6 characters." maxlength="50" id="firstname" value="">               
                 <div class="help-block with-errors"></div>
           
        </div>
        </div>
         <div class="form-group row">
        	<div class="col-lg-4">
            <label class="form-label">Confirm Password*</label>
        </div>
        <div class="col-lg-8">
        	
           
              <input type="Password" name="firstname" data-minlength="6" class="form-control" placeholder="Email ID" required="required" data-error="Minimum of 6 characters." maxlength="50" id="firstname" value="">               
                 <div class="help-block with-errors"></div>
           
        </div>
        </div>
 <div class="form-group  text-center">
 	<div class="">
        	<span>Already have account login
        	<a href="#" data-toggle="modal" data-target="#ForCollegeAdmin">here</a></span>
        </div>
        </div>

    </form>

      </div>

      <!--Footer-->
      <div class="modal-footer flex-center">
        <a href="#" class="btn btn-info">Get Started</a>
        <a type="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">No</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>


<!-- end -->

<!-- model2 -->

<div class="modal fade" id="ForIndividuals" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-lg" role="document">
    <!--Content-->
    <div class="modal-content  text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
      <div>
        		<h5 class="mb-0">LearnEngg</h5>
        <p class="mb-0">The Place You can learn Every Thing.</p>
      </div>
  </div>

      <!--Body-->
      <div class="modal-body">

        <i class="fas fa-user-plus info-color fa-4x animated rotateIn mb-4"></i>
          <form>

	     <div class="form-group row">
        	<div class="col-lg-4">
            <label class="form-label">Name *</label>
        </div>
        <div class="col-lg-8">
        	
           
              <input type="text" name="firstname" data-minlength="6" class="form-control" placeholder="College Name" required="required" data-error="Minimum of 6 characters." maxlength="50" id="firstname" value="">               
                 <div class="help-block with-errors"></div>
           
        </div>
        </div>
        <div class="form-group row">
        	<div class="col-lg-4">
            <label class="form-label"> Education *</label>
        </div>
        <div class="col-lg-8">
           
               
               <select name="education" class="form-control" required="required" data-error="Please college type." id="education">
                	<option value="0">Enginnering</option>
                	<option value="1">Polytechnic</option>
                </select>               
                 <div class="help-block with-errors"></div>
           
        </div>
        </div>

           <div class="form-group row">
        	<div class="col-lg-4">
            <label class="form-label"> University *</label>
        </div>
        <div class="col-lg-8">
           
               
               <select name="education" class="form-control" required="required" data-error="Please college type." id="education">
                	<option value="0">Enginnering</option>
                	<option value="1">Polytechnic</option>
                </select>               
                 <div class="help-block with-errors"></div>
           
        </div>
        </div>
               <div class="form-group row">
        	<div class="col-lg-4">
            <label class="form-label"> Department *</label>
        </div>
        <div class="col-lg-8">
           
               
               <select name="education" class="form-control" required="required" data-error="Please college type." id="education">
                	<option value="0">Enginnering</option>
                	<option value="1">Polytechnic</option>
                </select>               
                 <div class="help-block with-errors"></div>
           
        </div>
        </div>
           <div class="form-group row">
        	<div class="col-lg-4">
            <label class="form-label"> Year *</label>
        </div>
        <div class="col-lg-8">
           
               
               <select name="education" class="form-control" required="required" data-error="Please college type." id="education">
                	<option value="0">Enginnering</option>
                	<option value="1">Polytechnic</option>
                </select>               
                 <div class="help-block with-errors"></div>
           
        </div>
        </div>
         <div class="form-group row">
        	<div class="col-lg-4">
            <label class="form-label"> Phone Number *</label>
        </div>
        <div class="col-lg-8">
        	
           
              <input type="number" name="firstname" data-minlength="6" class="form-control" placeholder="Phone Number" required="required" data-error="Minimum of 6 characters." maxlength="50" id="firstname" value="">               
                 <div class="help-block with-errors"></div>
           
        </div>
        </div>
             <div class="form-group row">
        	<div class="col-lg-4">
            <label class="form-label"> Email ID *</label>
        </div>
        <div class="col-lg-8">
        	
           
              <input type="email" name="firstname" data-minlength="6" class="form-control" placeholder="Email ID" required="required" data-error="Minimum of 6 characters." maxlength="50" id="firstname" value="">               
                 <div class="help-block with-errors"></div>
           
        </div>
        </div>
              <div class="form-group row">
        	<div class="col-lg-4">
            <label class="form-label">Password*</label>
        </div>
        <div class="col-lg-8">
        	
           
              <input type="Password" name="firstname" data-minlength="6" class="form-control" placeholder="Email ID" required="required" data-error="Minimum of 6 characters." maxlength="50" id="firstname" value="">               
                 <div class="help-block with-errors"></div>
           
        </div>
        </div>
         <div class="form-group row">
        	<div class="col-lg-4">
            <label class="form-label">Confirm Password*</label>
        </div>
        <div class="col-lg-8">
        	
           
              <input type="Password" name="firstname" data-minlength="6" class="form-control" placeholder="Email ID" required="required" data-error="Minimum of 6 characters." maxlength="50" id="firstname" value="">               
                 <div class="help-block with-errors"></div>
           
        </div>
        </div>

        <div class="form-group">
        	<span>Already have account login ! <a data-toggle="modal" data-target="#ForStudent"> here</a></span>
        </div>
    </form>

      </div>

      <!--Footer-->
      <div class="modal-footer flex-center">
        <a href="#" class="btn btn-info">Get Started</a>
        <a type="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">No</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>

<!-- end -->

<!-- model3 -->
<div class="modal fade" id="ForCollegeAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-lg" role="document">
    <!--Content-->
    <div class="modal-content  text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
      <div>
        		<h5 class="mb-0">LearnEngg</h5>
        <p class="mb-0">The Place You can learn Every Thing.</p>
      </div>
  </div>

      <!--Body-->
      <div class="modal-body">

        <i class="fas fa-sign-in-alt info-color fa-4x animated rotateIn mb-4"></i>
           <form>


          
         <div class="form-group row">
        	<div class="col-lg-4">
            <label class="form-label"> Phone Number *</label>
        </div>
        <div class="col-lg-8">
        	
           
              <input type="number" name="firstname" data-minlength="6" class="form-control" placeholder="Phone Number" required="required" data-error="Minimum of 6 characters." maxlength="50" id="firstname" value="">               
                 <div class="help-block with-errors"></div>
           
        </div>
        </div>
           
              <div class="form-group row">
        	<div class="col-lg-4">
            <label class="form-label">Password*</label>
        </div>
        <div class="col-lg-8">
        	
           
              <input type="Password" name="firstname" data-minlength="6" class="form-control" placeholder="Email ID" required="required" data-error="Minimum of 6 characters." maxlength="50" id="firstname" value="">               
                 <div class="help-block with-errors"></div>
           
        </div>
        </div>


        <div class="form-group text-center">
        	<div>
        	<span>Forgot Password ? <a href="#"> Login with OTP</a></span>
        </div>
        </div>
    </form>

      </div>

      <!--Footer-->
      <div class="modal-footer flex-center">
      	<span>Don't have Account ! <a href="#"> Signin Here</a></span>
        <a href="#" class="btn btn-info">Login</a>
        <a type="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">No</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>

<div class="modal fade" id="ForProfessors" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-lg" role="document">
    <!--Content-->
    <div class="modal-content  text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
      <div>
        		<h5 class="mb-0">LearnEngg</h5>
        <p class="mb-0">The Place You can learn Every Thing.</p>
      </div>
  </div>

      <!--Body-->
      <div class="modal-body">

          <i class="fas fa-sign-in-alt info-color fa-4x animated rotateIn mb-4"></i>
          <form>


          
         <div class="form-group row">
        	<div class="col-lg-4">
            <label class="form-label"> Phone Number *</label>
        </div>
        <div class="col-lg-8">
        	
           
              <input type="number" name="firstname" data-minlength="6" class="form-control" placeholder="Phone Number" required="required" data-error="Minimum of 6 characters." maxlength="50" id="firstname" value="">               
                 <div class="help-block with-errors"></div>
           
        </div>
        </div>
           
              <div class="form-group row">
        	<div class="col-lg-4">
            <label class="form-label">Password*</label>
        </div>
        <div class="col-lg-8">
        	
           
              <input type="Password" name="firstname" data-minlength="6" class="form-control" placeholder="Email ID" required="required" data-error="Minimum of 6 characters." maxlength="50" id="firstname" value="">               
                 <div class="help-block with-errors"></div>
           
        </div>
        </div>


        <div class="form-group text-center">
        	<div>
        	<span>Forgot Password ? <a href="#"> Login with OTP</a></span>
        </div>
        </div>
    </form>

      </div>

      <!--Footer-->
      <div class="modal-footer flex-center">
      	<span>Don't have Account ! <a href="#"> Signin Here</a></span>
        <a href="#" class="btn btn-info">Login</a>
        <a type="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">No</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>

<div class="modal fade" id="ForStudent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-lg" role="document">
    <!--Content-->
    <div class="modal-content  text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
      <div>
        		<h5 class="mb-0">LearnEngg</h5>
        <p class="mb-0">The Place You can learn Every Thing.</p>
      </div>
  </div>

      <!--Body-->
      <div class="modal-body">

          <i class="fas fa-sign-in-alt info-color fa-4x animated rotateIn mb-4"></i>
          <form>


          
         <div class="form-group row">
        	<div class="col-lg-4">
            <label class="form-label"> Phone Number *</label>
        </div>
        <div class="col-lg-8">
        	
           
              <input type="number" name="firstname" data-minlength="6" class="form-control" placeholder="Phone Number" required="required" data-error="Minimum of 6 characters." maxlength="50" id="firstname" value="">               
                 <div class="help-block with-errors"></div>
           
        </div>
        </div>
           
              <div class="form-group row">
        	<div class="col-lg-4">
            <label class="form-label">Password*</label>
        </div>
        <div class="col-lg-8">
        	
           
              <input type="Password" name="firstname" data-minlength="6" class="form-control" placeholder="Email ID" required="required" data-error="Minimum of 6 characters." maxlength="50" id="firstname" value="">               
                 <div class="help-block with-errors"></div>
           
        </div>
        </div>


        <div class="form-group text-center">
        	<div>
        	<span>Forgot Password ? <a href="#"> Login with OTP</a></span>
        </div>
        </div>
    </form>

      </div>

      <!--Footer-->
      <div class="modal-footer flex-center">
      	<span>Don't have Account ! <a href="#"> Signin Here</a></span>
        <a href="#" class="btn btn-info">Login</a>
        <a type="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">No</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>

<!-- end -->
     
    
    <div class="intro-three">
        <div class="intro-three--contents">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-6 col-md-12">
                        <h2 class="display-2">Hi There, </h2>
                        <h5>Your Study companion this side</h5>
                        <p> Get to Know me<p>
                        <a class="btn btn-secondary  dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Register  <i class="fa fa-arrow-up" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div><!-- ends: .intro-three-contents -->
        <div class="intro-three--img">
            <img src="assets/img/img/Header Phone.png" alt="">
        </div><!-- ends: .intro-three-img -->
    </div><!-- ends: .intro-three -->



        <section>
            <div class="container">
                 <h3 class="text-center"><b>How about Learning Engineering Visually !</b></h3>

    <div class="row">

       
        <div class="offset-lg-3 col-lg-4 col-sm-4 col-xs-12">
            <img src="assets/img/img/For-students/Landing Page Illustrations_Students_A.png">

            </div>

            <div class="col-lg-3 col-sm-6 col-xs-12">
            <h4 class="vertical-align">For Students </h4>

            </div>

    </div>
</div>

 
</section>




    <section class="testimonials padding-top">
        
  
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonial-carousel-three owl-carousel">
                <div class="carousel-single">
                        
  <div class="card card--eleven">
    
       
            <div class="card card-shadow card--testimonial2 linera-bck card-three card-three">
            <div class="card-body text-center">
                 <div style="max-width: 100%">
            <img src="assets/img/img/For-students/For students_icons_Q1.png" alt="fhfghfg" class="rounded-circle">
           
            <p>How can I access your content Platform?</p>
           </div>
        </div>
    </div>
        
  
        <div class="card-body1 card-body text-center">
            <div class="card-contents">
                <div class="content-top">
                   
                    <h6>Hover Here For Answer</h6>
                </div>
                <div class="content-bottom">
                    <p>Our platform is available both in Andrioid APP and Web based versions. </p>
                    <!-- <a href="#" class="btn btn-secondary btn-sm">See Details</a> -->
                </div>
            </div>
        </div>
    </div><!-- End: .card -->

                    </div><!-- ends: .carousel-single -->
                <div class="carousel-single">
				
                    <div class="card card--eleven">    
       
            <div class="card card-shadow card--testimonial2 linera-bck card-three card-three">
            <div class="card-body text-center">
                 <div style="max-width: 100%">
            <img src="assets/img/img/For-students/For students_icons_Q2.png" alt="fhfghfg" class="rounded-circle">
           
            <p>Are there free courses? </p>
           </div>
        </div>
    </div>
        
  
        <div class="card-body1 card-body text-center">
            <div class="card-contents">
                <div class="content-top">
                   
                    <h6>Hover Here For Answer</h6>
                </div>
                <div class="content-bottom">
                    <p>No but when you register you will get free trial for a week </p>
                    <!-- <a href="#" class="btn btn-secondary btn-sm">See Details</a> -->
                </div>
            </div>
        </div>
    </div><!-- End: .card -->

                    </div>
				<div class="carousel-single">
				  <div class="card card--eleven">
    
       
            <div class="card card-shadow card--testimonial2 linera-bck card-three card-three">
            <div class="card-body text-center">
                 <div style="max-width: 100%">
            <img src="assets/img/img/For-students/For students_icons_Q1.png" alt="fhfghfg" class="rounded-circle">
           
            <p>Is the Content tailored for our University Syllabus?</p>
           </div>
        </div>
    </div>
        
  
        <div class="card-body1 card-body text-center">
            <div class="card-contents">
                <div class="content-top">
                   
                    <h6>Hover Here For Answer</h6>
                </div>
                <div class="content-bottom">
                    <p>No the student need to select the subject topic in every subject according to their syllabus</p>
                    <!-- <a href="#" class="btn btn-secondary btn-sm">See Details</a> -->
                </div>
            </div>
        </div>
    </div><!-- End: .card -->
				</div>            	
           </div>
		   </div>
        </div>
    </div>

    </section>
    <section>
    <div class="container">                
	<div class="row">       
        <div class="offset-lg-1 col-lg-5 col-sm-4 col-xs-12">
             <h4 class="vertical-align">For professors / Teachers </h4>           

            </div>

            <div class="col-lg-4 col-sm-6 col-xs-12">
           <img src="assets/img/img/For professors/Landing Page Illustrations_Professors_A.png">

            </div>

    </div>
</div>

  
</section>
   
    <section class="testimonials padding-top">      
  
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonial-carousel-three owl-carousel">
                    <div class="carousel-single">
                        
  <div class="card card--eleven">
    
       
            <div class="card card-shadow card--testimonial2 linera-bck card-three">
            <div class="card-body text-center">
                 <div style="max-width: 100%">
            <img src="assets/img/img/For-students/For students_icons_Q1.png" alt="fhfghfg" class="rounded-circle">
           
            <p>Can I use LearnEngg for conducting my online classes? </p>
           </div>
        </div>
    </div>
        
  
        <div class="card-body1 card-body text-center">
            <div class="card-contents">
                <div class="content-top">
                   
                    <h6>Hover Here For Answer</h6>
                </div>
                <div class="content-bottom">
                    <p>Very much! You can use all the digital content and the bonus tools like assessments and assignments to conduct a very seamless online class</p>
                    <!-- <a href="#" class="btn btn-secondary btn-sm">See Details</a> -->
                </div>
            </div>
        </div>
    </div><!-- End: .card -->

                    </div><!-- ends: .carousel-single -->
                    <div class="carousel-single">
                        
  <div class="card card--eleven">
    
       
            <div class="card card-shadow card--testimonial2 linera-bck card-three">
            <div class="card-body text-center">
                 <div style="max-width: 100%">
            <img src="assets/img/img/For-students/For students_icons_Q2.png" alt="fhfghfg" class="rounded-circle">
           
            <p>Can I share this app with my students? </p>
           </div>
        </div>
    </div>
        
  
        <div class="card-body1 card-body text-center">
            <div class="card-contents">
                <div class="content-top">
                   
                    <h6>Hover Here For Answer</h6>
                </div>
                <div class="content-bottom">
                    <p>We have an integrated and fully equipped Learning Management system where you can add your entire class and teach very conveniently. </p>
                    <!-- <a href="#" class="btn btn-secondary btn-sm">See Details</a> -->
                </div>
            </div>
        </div>
    </div><!-- End: .card -->

                    </div><!-- ends: .carousel-single -->
                    <div class="carousel-single">
                        
  <div class="card card--eleven">
    
       
            <div class="card card-shadow card--testimonial2 linera-bck card-three">
            <div class="card-body text-center">
                 <div style="max-width: 100%">
            <img src="assets/img/img/For-students/For students_icons_Q3.png" alt="fhfghfg" class="rounded-circle">
           
            <p>What are the subjects I can cover?</p>
           </div>
        </div>
    </div>
        
  
        <div class="card-body1 card-body text-center">
            <div class="card-contents">
                <div class="content-top">
                   
                    <h6>Hover Here For Answer</h6>
                </div>
                <div class="content-bottom">
                    <p>We have engaging digital content  75+ subjects for Engineering & 90 + subjects for Diploma. You can access them for an enhanced teaching experience. </p>
                    <!-- <a href="#" class="btn btn-secondary btn-sm">See Details</a> -->
                </div>
            </div>
        </div>
    </div><!-- End: .card -->

                    </div>       
                </div>
            </div>
        </div>
    </div>

    </section>
    <section>
    <div class="container">           

		<div class="row">
       
        <div class="offset-lg-3 col-lg-4 col-sm-4 col-xs-12">
            <img src="assets/img/img/For institutions/Landing Page Illustrations_Institutions_A.png">

            </div>

            <div class="col-lg-3 col-sm-6 col-xs-12">
            <h4 class="vertical-align">For institutions </h4>

            </div>

    </div>
</div>
	</section>

    <section class="testimonials padding-top">      
      <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonial-carousel-three owl-carousel">
                    <div class="carousel-single">
                        
  <div class="card card--eleven">
    
       
            <div class="card card-shadow card--testimonial2 linera-bck card-three">
            <div class="card-body text-center">
                 <div style="max-width: 100%">
            <img src="assets/img/img/For-students/For students_icons_Q1.png" alt="fhfghfg" class="rounded-circle">
           
            <p>What does Learnengg Platform have for colleges? </p>
           </div>
        </div>
    </div>
        
  
        <div class="card-body1 card-body text-center">
            <div class="card-contents">
                <div class="content-top">
                   
                    <h6>Hover Here For Answer</h6>
                </div>
                <div class="content-bottom">
                    <p>Platform has, Digital contents, LMS & Online Classroom. </p>
                    <!-- <a href="#" class="btn btn-secondary btn-sm">See Details</a> -->
                </div>
            </div>
        </div>
    </div><!-- End: .card -->

                    </div><!-- ends: .carousel-single -->
                              <div class="carousel-single">
                        
  <div class="card card--eleven">
    
       
            <div class="card card-shadow card--testimonial2 linera-bck card-three">
            <div class="card-body text-center">
                 <div style="max-width: 100%">
            <img src="assets/img/img/For-students/For students_icons_Q2.png" alt="fhfghfg" class="rounded-circle">
           
            <p>Does it cover both Engineering & Polytechnic Syllabus? </p>
           </div>
        </div>
    </div>
        
  
        <div class="card-body1 card-body text-center">
            <div class="card-contents">
                <div class="content-top">
                   
                    <h6>Hover Here For Answer</h6>
                </div>
                <div class="content-bottom">
                    <p>Yes platform has both Engineering & Polytechnic syllabus.</p>
                    <!-- <a href="#" class="btn btn-secondary btn-sm">See Details</a> -->
                </div>
            </div>
        </div>
    </div><!-- End: .card -->

                    </div><!-- ends: .carousel-single -->
                                      <div class="carousel-single">
                        
  <div class="card card--eleven">
    
       
            <div class="card card-shadow card--testimonial2 linera-bck card-three">
            <div class="card-body text-center">
                 <div style="max-width: 100%">
            <img src="assets/img/img/For-students/For students_icons_Q3.png" alt="fhfghfg" class="rounded-circle">
           
            <p>Can a college buy licenses for faculties & Students?</p>
           </div>
        </div>
    </div>
        
  
        <div class="card-body1 card-body text-center">
            <div class="card-contents">
                <div class="content-top">
                   
                    <h6>Hover Here For Answer</h6>
                </div>
                <div class="content-bottom">
                    <p>Yes colleges can buy any no of licenses for both faculties & Students. </p>
                    <!-- <a href="#" class="btn btn-secondary btn-sm">See Details</a> -->
                </div>
            </div>
        </div>
    </div><!-- End: .card -->

                    </div><!-- ends: .carousel-single -->
                                
                        
  

                    
                       
            </div>
        </div>
    </div>

    </section>


            <section class="padding-top">
            <div class="container">
            

    <div class="row">

       
        <div class="offset-lg-2 col-lg-4 col-sm-4 col-xs-12">
            <img src="assets/img/img/Phone 01.png">

            </div>

            <div class="col-lg-4 col-sm-6 col-xs-12">
            <p style=" padding: 49px 0px;">At Learning We have engineered sample solution for your all learning troubles with a user-frindly visual learning app! convenience with embedeed learning not just acadamics but also skills that will take your career to the next level .</p>

            </div>

    </div>
</div>

 
</section>


<section class="padding-top">
            <div class="container">
            

    <div class="row">

       
        <div class="offset-lg-2 col-lg-8 col-sm-8 col-xs-12">
            <img src="assets/img/img/Features.png">

            </div>
        </div>

            
            <p class="text-center padding-top">Undecided? Get your 7 days free trail and learn whenever and however suits you </p>


    </div>
</div>

 
</section>

    <section class="padding-top " style=" background: linear-gradient(-45deg,#f8e3e3,#fdf2e6);">
        <div class="continer">
        <div class="col-lg-12 text-center"><h3>What's life without a little learning?
            <br>What's learning without a little LearnEngg?</h3></div>
    
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Carousel indicators -->
                  <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
       
              </ol>   
                  <!-- Wrapper for carousel items -->
                          <div class="carousel-inner">        
                           <div class="item carousel-item active">
                         <p class="testimonial">You prepare for not just your exams, but the industry and your career large - which means your chances of being hired in your dream job .</p>
                        
                          <p class="testimonial">The content is curated by the expert academicians so you can carry around knowledge your packet and learn a little something everyday. Our curriculum covers most of what you require to clear your engineering and polytechnic exams enhanced navigation and faster streaming for anything learning</p>
                        <div class="text-center">
                         <a href="https://play.google.com/store/apps/details?id=com.learn.engg.learnenggalpha" target="_blank" class="btn btn-secondary">Take me to the LearnEngg App</a>
                          </div>
            
                  </div>
                      <div class="item carousel-item">
                          <p class="testimonial">You prepare for not just your exams, but the industry and your career large - which means your chances of being hired in your dream job .</p>
                      
                     <p class="testimonial">The content is curated by the expert academicians so you can carry around knowledge your packet and learn a little something everyday. Our curriculum covers most of what you require to clear your engineering and polytechnic exams enhanced navigation and faster streaming for anything learning.</p>
                        <div class="text-center">
                 <a href="https://play.google.com/store/apps/details?id=com.learn.engg.learnenggalpha" target="_blank" class="btn  btn-secondary">Take me to the LearnEngg App</a>
                </div>
            
                        </div>
          
                                   </div>
                      <!-- Carousel controls -->
                   <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                       <i class="fa fa-angle-left"></i>
                           </a>
                 <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                  <i class="fa fa-angle-right"></i>
                                   </a>
                                 </div>
                    </div>

    </section>


    <section class="padding-top">
        <div class="container">
           <h3 class="text-center">The Great Civil Engineer?</h3>
 <div class="row">

               
         

                       <div class=" offset-lg-1 col-lg-5 col-sm-6 col-xs-12 ">

                        <p class="enginering-img">Sir Mokshagundam Visvesvaraya birthday, 15 September, is celebrated as Engineers' Day in India, Sri Lanka and Tanzania in his memory. He was the Chief Engineer of Krishna Raja Sagara dam in the north-west suburb of Mysuru city, and also served as one of the Chief Engineers of the flood protection system for the city of Hyderabad.</p>
                       </div>

                                <div class=" offset-lg-1 col-lg-4 col-sm-6 col-xs-12 " >
                  <img src="assets/img/img/engineers-day.jpeg" alt="engineersday">

   
                                      </div>

     
                </div>
                <br>


              <div class="row">

               
                  <div class=" offset-lg-1 col-lg-5 col-sm-6 col-xs-12 ">
                    <video controls autoplay style="height: 346px;">
                          <source src="assets/vedio1.webm" type="video/webm">
                               <source src="vedio1.ogg" type="video/ogg">
                                 Your browser does not support the video tag.
                                     </video>

   
                                      </div>

                       <div class=" offset-lg-1 col-lg-4 col-sm-6 col-xs-12 ">

                        <p class="enginering-text">Sir Mokshagundam Visvesvaraya KCIE FASc, more commonly known as Sir MV (15 September 1860 – 14 April 1962), was an Indian civil engineer and statesman and the 19th Diwan of Mysore, serving from 1912 to 1919. He received India's highest honour, the Bharat Ratna, in 1955.</p>
                       </div>

     
                </div>

        </div>

    </section>


  <!--   <section class="padding-top team-section" style="margin-top: 39px;">
	<div class="container">
        <div class="row">       
        <div class="offset-lg-1 col-lg-5 col-sm-4 col-xs-12 ">
            <div class="pt-156">
            <h3>The Dynamic team Behind Hassle Free Learning</h3>
            <p>Our Team is coming together with the passion for learning with a bonus of us being academicians and scholars. we have dream for new enhancement in engineering is thought and learnEngg is our dream come true.Take a look of our panel of illustrious creators.  </p>
        </div>

            </div>

            <div class="col-lg-6 col-sm-6 col-xs-12 pt-100">
                <div class="row">
           
                <div class="col-lg-6 col-md-6 col-xs-12">
                    
    <div class="card card-shadow mb-10">
       
        <div class="card-body text-center">

            <h6 style="font-size: 16px;font-weight: bold;"><a href="#">Co Founder & CEO</a></h6>
 <figure>
            <img src="img/img/team_md.jpg" alt="">
        </figure>
           <ul>
                <li><a href="#"><b>Mr Srikanth settipalli,</b></a></li>
             
                
            </ul>
        </div>
        
    </div>

                </div>
                 <div class="col-lg-6 col-md-6 col-xs-12">
                    
    <div class="card card-shadow mb-10">
       
        <div class="card-body text-center">

            <h6 style="font-size: 16px;font-weight: bold;"><a href="#">Co Founder & Co CEO</a></h6>
 <figure>
            <img src="img/img/team_dir_2.jpg" alt="">
        </figure>
           <ul>
                <li><a href="#"><b>Mr Siva Ramamurthy,</b></a></li>
              
                
            </ul>
        </div>
        
    </div>

                </div>
            </div>

            </div>

    </div>
</div>

 
</section> -->


    <section class="padding-top">
        <div class="continer">
        <div class="col-lg-12 text-center"><h3>See What Learnengg Users have Said About it !</h3></div>
    
  <div id="myCarousel1" class="carousel slide" data-ride="carousel" style="width: 889px;">
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel1" data-slide-to="1"></li>
        
    </ol>   
    <!-- Wrapper for carousel items -->
    <div class="carousel-inner">        
        <div class="item carousel-item active">
            <div class="row">
                  <div class="col-lg-6">
                    <h5>ACADAMIC ADMINISTRATOR</h5>
                    <div class="row">
                     <div class="col-lg-3"><img src="assets/img/img/testi1.png">
                     </div>
                     <div class="col-lg-9">
                    <p class="testimonial text-left">
                                                Having 38 years Association with ITI syllabus, I strongly feel that
                                                this project gives a new approach in the mode of teaching which will
                                                help the ITI students to understand the subject easily, apart from
                                                less strain and stress on faculty.
                                            </p>

                                            <p class="">
                                                    Prof. M. Ranga Rao - National Co-ordinator<br>Federation of All
                                                    India Pvt. ITI Associations</p>
            
            </div>
        </div>
        </div>


                   <div class="col-lg-6">
                     <h5>PROFESSORS</h5>
                   <div class="row">
                     <div class="col-lg-3"><img src="assets/img/img/Professor_R_Kumar.png">
                     </div>
                     <div class="col-lg-9">
                     <p class="testimonial text-left">
                                                The CD's came in very good. Hope it will be very useful for our
                                                students for easy understanding of principles of the subject topics.
                                            </p> 
                     <p class="">Mr R.Kumar - M Tech<br>Head Of
                                                    Department CSE <br>PB College of Engineering, Tamilnadu</p>
            
            </div>
        </div></div>
            
            
        </div>
    </div>
        <div class="item carousel-item">
            <div class="row">
                  <div class="col-lg-6">
                    <h5>ACADAMIC ADMINISTRATOR</h5>
                    <div class="row">
                     <div class="col-lg-3"><img src="assets/img/img/testi1.png">
                     </div>
                     <div class="col-lg-9">
                     <p class="testimonial text-left">
                                                Great job guys such a great app which can help students in their sem
                                                exams.</p> 
                     <p class="">
                                                    Prof. M. Ranga Rao - National Co-ordinator<br>Federation of All
                                                    India Pvt. ITI Associations</p>
            
            </div>
        </div>
        </div>


                   <div class="col-lg-6">
                     <h5>PROFESSORS</h5>
                   <div class="row">
                     <div class="col-lg-3"><img src="assets/img/img/Professor_R_Kumar.png">
                     </div>
                     <div class="col-lg-9">
                    <p class="testimonial text-left">
                                                The CD's came in very good. Hope it will be very useful for our
                                                students for easy understanding of principles of the subject topics.
                                            </p>
                                            <p class="">Mr R.Kumar - M Tech<br>Head Of
                                                    Department CSE <br>PB College of Engineering, Tamil Nadu</p>
            
            </div>
        </div></div>
            
            
        </div>
        </div>
        
    </div>
    <!-- Carousel controls -->
    <a class="carousel-control left carousel-control-prev" href="#myCarousel1" data-slide="prev">
        <i class="fa fa-angle-left"></i>
    </a>
    <a class="carousel-control right carousel-control-next" href="#myCarousel1" data-slide="next">
        <i class="fa fa-angle-right"></i>
    </a>
</div>
</div>

    </section>  
    
    <footer id="footer_section" class="footer5 footer--bw">
        <?php include 'footer.php';?>
    </footer>
</body>


</html>