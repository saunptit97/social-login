   
<style>
  .message{
    color: red;
  }

</style>
    <div class="social-login block-container authentication" style="display:none;">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="gridSystemModalLabel">Sign In</h4>
      </div>
      <div class="modal-body row" >

          <div class="col-md-6">
           <div class="block-title">
                <span>Sign In</span>
            </div>
            <div class="content">
                <!-- <form class="form-customer-login" id="social-form-login" method="POST" > -->
                      <span class="message"></span>
                      <label>Username:</label> <span class="required"> *</span></br>
                      <input type="text" name="username" id="email" required /> </br>
                      <label>Password</label><span class="required"> *</span></br>
                      <input type="password" name="password" required id="pass">
                      <button type="submit" id="bnt-social-login-authentication" class="action login primary">Login</button>
                      <a href="#" id="forgot-popup">Forgot your password?</a>
                      <a href="#" id="create-popup" class="create">Create new account?</a>
             <!--    </form> -->
             </div> 
          </div>
          <div class="col-md-6">
              <div class="block-title">
                  <span>Or Sign In With</span>
              </div>
              <div class="content">
                  <!--  <button type="button" onclick="window.location = '<?php echo $loginURL ?>';" class="btn btn-danger">LogIn With Google</button> -->
                  <button type="button" onclick="PopupCenter('<?php echo $loginURL ?>', '', '500', '420');" class="btn btn-danger">LogIn With Google</button>
              </div>
          </div>
</div>
<script type="text/javascript">
  
  function PopupCenter(pageURL, title,w,h) {
  var left = (screen.width/2)-(w/2);
  var top = (screen.height/2)-(h/2);
  var targetWin = window.open (pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
  return targetWin;
} 
  $('.alert').fadeOut(5000);
</script>
</div>
