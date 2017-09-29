<?php
switch($pageName) {
  case "ADMIN_PAGE1":
    include('contents/admin-page1.php');
    break;
    case "LOGINPAGE":
    include('contents/loginpage.php');
    break;
    case "USER":
    include('contents/user_management.php');
    break;
    case "CLUB":
    include('contents/club_management.php');
    break;
    case "EVENT":
    include('contents/event_management.php');
    break;
    case "TRANSACTION":
    include('contents/transaction.php');
    break;
    case "SETTINGS":
    include('contents/settings.php');
    break;





    case "POSITION":
    include('contents/position.php');
    break;
    case "ABOUTUS":
    include('contents/aboutus.php');
    break;
    case "CONTACTUS":
    include('contents/contactus.php');
    break;
    case "PRIVACYPOLICY":
    include('contents/privacypolicy.php');
    break;
    case "PRICINGPOLICY":
    include('contents/pricingpolicy.php');
    break;
    case "TERMCONDITION":
    include('contents/termandcondition.php');
    break;
    case "HOWITSWORK":
    include('contents/howitswork.php');
    break;
    case "FAQS":
    include('contents/faqs.php');
    break;
}
