$(function(){
	$.widget("sroger.login", {
		options: {
			loginPopup: '#login-popup, .login-popup',
			loginForm: '.social-login.authentication',
			loginBtn: '#bnt-social-login-authentication',
			
			createPopup: '#create-popup , .create',
			createForm: '#create-form',
			createBtn: '#create-btn',

			forgotPopup: '#forgot-popup, forgot-popup',
			forgotForm: '#forgot-form',
			forgotBtn: '#forgot-btn',

			btnBack: '#back'
		},

		_create: function(){
			this.initObject();
			this.initPopup();
			this.initObserve();
			//this.showLogin();
		},
		initObject: function(){
			this.loginPopup = $(this.options.loginPopup);
			this.loginForm = $(this.options.loginForm);
			this.loginBtn = $(this.options.loginBtn);

			this.createPopup = $(this.options.createPopup);
			this.createForm = $(this.options.createForm);
			this.createBtn = $(this.options.createBtn);
			
			this.forgotPopup = $(this.options.forgotPopup);
			this.forgotForm = $(this.options.forgotForm);
			this.forgotBtn = $(this.options.forgotBtn);

			this.btnBack = $(this.options.btnBack);
		},
		initPopup: function(){
			var self = this;
			this.loginPopup.click(function(event) {
				self.showLogin();
			});
			this.createPopup.click(function(event) {
				self.showCreate();
			});
			this.forgotPopup.click(function(event) {
				self.showForgot();
			});
			this.btnBack.click(function(event) {
				self.showLogin();
			});
          
		},
		initObserve: function(){
			this.initLoginObserve();
		},
		initLoginObserve: function(){
			var self = this;
			this.loginBtn.click(function(event) {
				//alert('AAA');
				self.processLogin();
			});
			this.loginForm.find('input').keypress(function (event) {
                var code = event.keyCode || event.which;
                if (code === 13) {
                   	self.processLogin();
                }
            });
		},
		showLogin: function(){
			this.loginForm.show();
			this.createForm.hide();
			this.forgotForm.hide();
		},

		showCreate: function(){
			this.loginForm.hide();
			this.createForm.show();
			this.forgotForm.hide();
		},
		showForgot: function(){
			this.loginForm.hide();
			this.createForm.hide();
			this.forgotForm.show();
		},
		processLogin: function(){
			var username = $("#email").val();
			var password = $("#pass").val();
			var self = this;
			$.ajax({
				url: 'post.php',
				type: 'post',
				data: {username: username, password: password},
				success: function(data){
					 if(data == 'No')  
                          {  
                             $(".message").html('Invalid login or password </br></br>');
                          }  
                          else  
                          {  
                               $('.social-login.authentication').hide();  
                               location.reload();  
                          }  
				}
			})
			.done(function() {
				console.log("data");
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
			
		}

	});
	$("#sroger").login();
});
