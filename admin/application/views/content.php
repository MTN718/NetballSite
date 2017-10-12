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
    case "ADDPOSITION":
    include('contents/addposition.php');
    break;
    case "ADDFAQS":
    include('contents/addfaqs.php');
    break;
    case "UPDATEFAQS":
    include('contents/updatefaqs.php');
    break;
    case "PACKAGE":
    include('contents/package.php');
    break;
    case "ADDPACKAGE":
    include('contents/addpackage.php');
    break;
    case "UPDATEPACKAGE":
    include('contents/updatepackage.php');
    break;
    case "ADDSOCIALLINK":
    include('contents/addsociallink.php');
    break;
    case "CLUBOVERVIEW":
    include('contents/cluboverview.php');
    break;
    case "NOTIFICATION":
    include('contents/notification.php');
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
