<form id="create-form"  style="display:none;">
  <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">Sign Up</h4>
    </div>
    <div class="modal-body row" >
         
        <div class="col-md-6">
         <div class="block-title">
              <span>Sign In</span>
          </div>
          <div class="content">
              <label>First name:</label> <span class="required"> *</span></br>
              <input type="text" name="firstname"/> </br>
              <label>Last name:</label><span class="required"> *</span></br>
              <input type="text" name="lastname">
              <label>Email:</label><span class="required">*</span>
              <input type="email" name="email">
              <label>Password</label><span class="required">*</span>
              <input type="password" name="password">
              <label>Confirm password</label><span class="required">*</span>
              <input type="password" name="password">
              <button>Create</button>
              <a href="#" id="login-popup" class="login-popup">You have account?</a>
           </div> 
        </div>
         <div class="col-md-6">
            <div class="block-title">
                <span>Or Sign In With</span>
            </div>
            <div class="content">
               <button type="button" onclick="PopupCenter('<?php echo $loginURL ?>', '', '500', '420');" class="btn btn-danger">LogIn With Google</button>
            </div>
        </div>
    </div>
</form>
<script type="text/javascript">
  
  function PopupCenter(pageURL, title,w,h) {
  var left = (screen.width/2)-(w/2);
  var top = (screen.height/2)-(h/2);
  var targetWin = window.open (pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
  return targetWin;
} 
</script>