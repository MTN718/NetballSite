<?php
switch($pageName) {
  case "HOME":
    include('contents/home.php');
    break;
  case "CLUB":
    include('contents/club.php');
    break;
    case "ACCOUNT_SIGNUP":
    include('contents/account-signup.php');
    break;
    case "CLUB_REGISTRATION":
    include('contents/club-registration.php');
    break;
    case "CLUB_REGISTRATION_FORM":
    include('contents/club-registration-form.php');
    break;
    case "PLAYER_REGISTRATION":
    include('contents/player-registration.php');
    break;
    case "PROFILE":
    include('contents/profile.php');
    break;
    case "ACCOUNT_TYPE":
    include('contents/registerAccType.php');
    break;
    case "RESET_NEW_PASS":
    include('contents/reset-new-password.php');
    break;
    case "RESET_PASS":
    include('contents/reset-password.php');
    break;
    case "RESET_PASS_COMPLETE":
    include('contents/reset-password-complete.php');
    break;
    case "HELP_PASSWORD":
    include('contents/help-password.php');
    break;
    

}
