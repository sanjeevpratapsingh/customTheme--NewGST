<?php get_header(); ?>

<div class="section no-pad" id="index-banner">
    <div class="row">
        <div class="col s12 m6">
            <br><br>
            <h1 class="header center orange-text">Starter Template</h1>
            <div class="row center">
                <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
            </div>
            <div class="row center">
                <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light orange">Get Started</a>
            </div>
            <br><br>
        </div>
        <!-- Left Side Content -->

        <div class="col s12 m6">
        <!-- Form Begin -->
        <form class = "col s12">
            <div class = "row">
               <div class = "input-field col s6">
                  <i class = "material-icons prefix">account_circle</i>
                  <input placeholder = "Username" class = "active validate" required />
                  <label for = "name">Username</label>
               </div>
               
               <div class = "input-field col s6">      
                  <label for = "password">Password</label>
                  <input placeholder = "Password"  class = "validate" required />          
               </div>
            </div>
            
            <div class = "row">
               <div class = "input-field col s12">
                  <input placeholder = "Email" class = "validate">
                  
               </div>
            </div>
            
            <div class = "row">
               <div class = "input-field col s12">
                  <i class = "material-icons prefix">mode_edit</i>
                  <textarea id = "address" class = "materialize-textarea"></textarea>
                  <label for = "address">Address</label>
               </div>
            </div>
            
            <div class = "row">
               <div class = "input-field col s12">
                  <input placeholder = "Comments (Disabled)" id = "comments"
                     type = "text" disabled />
                  <label for = "comments">Comments</label>
               </div>
            </div>
                 
         </form>       


        <!-- Form Ends -->
        </div>
        <!-- Right Side Content -->

    </div>
</div>

<?php get_footer(); ?>