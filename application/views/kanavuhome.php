<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kanavu_help</title>

  <!--G4 (google analytics) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-JF0Q147F1Y"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-JF0Q147F1Y');
  </script>
  
  <link href="<?php echo base_url(); ?>assets/img/kanavulogoo.jpg"  rel="icon"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sen">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <style>
    body {
      font-family: 'Sen', sans-serif;
    }
    
    /* Validation styles */
    .is-invalid {
        border-color: #dc3545 !important;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right calc(0.375em + 0.1875rem) center;
        background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
        padding-right: calc(1.5em + 0.75rem) !important;
    }

    .is-valid {
        border-color: #198754 !important;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right calc(0.375em + 0.1875rem) center;
        background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
        padding-right: calc(1.5em + 0.75rem) !important;
    }

    /* Validation error messages */
    .text-danger.small {
        font-size: 12px;
        margin-top: 4px;
        display: block;
        min-height: 20px;
    }

    /* Form focus styles */
    .form-control:focus {
        box-shadow: 0 0 0 0.25rem rgba(237, 49, 54, 0.25) !important;
        border-color: #ed3136 !important;
    }

    /* Input group focus fix */
    .input-group:focus-within .input-group-text {
        border-color: #ed3136;
    }

    /* Required field indicator */
    .required-field::after {
        content: " *";
        color: #ed3136;
    }

    /* Form labels */
    .form-label {
        font-weight: 500;
        margin-bottom: 5px;
        color: #333;
    }

    div[data-testid="resolution-label"],
    .resolution-label,
    #resolution-display,
    .viewport-size,
    .responsive-viewer-label {
      display: none !important;
    }
    
    /* count running */
    html {
      scroll-behavior: smooth;
    }
  
    .stat-box img {
      width: 50px;
      height: 50px;
    }
    
    h2.count-up {
      font-weight: bold;
    }
    
    /* carousel img */
    .carousel-item {
      height: 100vh;
    }

    .bi-share {
      font-size: 1.3rem;
      cursor: pointer;
      color: #ed3136;
      margin-left: auto;
    }

    .carousel-item img {
      object-fit: cover;
      height: 100%;
      width: 100%;
    }
  
    /* login_button */
    .login-button {
      background-color: #ed3136;
      color: white;
      font-size: 16px;
      padding: 8px 20px;
      border-radius: 25px;
      text-decoration: none;
      transition: 0.3s background-color;
    }

    /* start a kanavu button */
    .startkanavu-button {
      border: 1px solid #ed3136;
      color: #ed3136;
      font-size: 16px;
      padding: 8px 20px;
      border-radius: 25px;
      text-decoration: none;
      transition: 0.3s background-color;
    }

    /* navigation bar menu size */
    .offcanvas-body {
      font-size: 17px;
    }
    
    .nav-link {
      color: black !important;
    }
    
    .nav-link.active {
      color: #ed3136 !important;
      font-weight: bold;
    }
    
    /* carousel text */
    .imgtext1,
    .imgtext2 {
      position: absolute;
      color: #000;
      width: 30%;
      font-size: 48px;
      font-style: normal;
      padding-bottom: 100px;
    }

    .imgtext1 {
      top: 50%;
      left: 65px;
      transform: translateY(-50%);
    }

    .imgtext2 {
      top: 50%;
      right: 65px;
      transform: translateY(-50%);
    }

    .imgtext1 strong,
    .imgtext2 strong {
      font-weight: bolder;
    }

    .imgtext11,
    .imgtext22 {
      font-size: 18px;
      margin-top: 5px;
    }

    .imgtext11 ul,
    .imgtext22 ul {
      list-style-type: none;
      padding-left: 0;
    }

    .imgtext11 ul li {
      margin-left: 0px;
    }
    
    .imgtext1 p,
    .imgtext2 p{
      font-size: 40px;
    }

    .imgtext1 span,
    .imgtext2 span {
      color: #ed3136;
      font-weight: bolder;
      font-size: 35px;
    }

    .btn-3,
    .btn-4 {
      background-color: #ed3136;
      color: white;
      border-radius: 20px;
    }

    /* cards section */
    .card {
      width: 100%;
      box-shadow: 0 3px 16px 3px rgba(0, 0, 0, 0.2); 
    }

    .carousel-item .row {
      margin-left: 150px;
      margin-right: 150px;
    }

    .carousel-item .col-12.col-md-4 {
      padding-left: 5px;
      padding-right: 5px;
      margin-bottom: 20px;
    }

    .card-title {
      font-size: 18px;
      font-weight: bold;
    }

    .card_button {
      border: 1px solid rgba(174, 168, 168, 1);
      border-radius: 25px;
    }

    .donate_btn {
      border: 1px solid #ed3136;
      color: #ed3136;
      border-radius: 25px;
    }

    /* readmore_button in card */
    .readmore_btn {
      border: 1px solid #ed3136;
      color: #ed3136;
      border-radius: 25px;
    }

    /* how its works section */
    .how-it-works-container {
      display: flex;
      justify-content: space-around;
      padding: 40px 0;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      height: 550px;
    }

    .step-container {
      flex: 1;
      margin: 0 10px;
      padding: 20px;
      color: #fff;
      text-align: center;
      border-radius: 10px 10px 150px 150px;
      position: relative;
      width: 250px;
    }

    .step-1 {
      background-color: #50C878;
    }

    .step-2 {
      background-color: #ed3136;
    }

    .step-3 {
      background-color: #FFD700;
    }
    
    .nav-link.active {
      color: #ed3136 !important;
      font-weight: bold;
    }
    
    .background-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-size: cover;
      background-position: center;
      opacity: 0.2;
      z-index: 1;
    }

    .step-1 .background-overlay {
      background-image: url('assets/img/Group4.svg');
    }

    .step-2 .background-overlay {
      background-image: url('assets/img/Group5.svg');
    }

    .step-3 .background-overlay {
      background-image: url('assets/img/Group3.svg');
    }

    .step-container h2,
    h3 {
      position: relative;
      z-index: 2;
    }

    .step_1,
    .step_2,
    .step_3 {
      border: 3px solid;
      border-radius: 50px;
      width: 50px;
      margin-top: -55px;
      margin-left: 50%;
      transform: translateX(-50%);
      background-color: white;
      box-shadow: 0 3px 16px 3px rgba(0, 0, 0, 0.4);
    }

    .step_1 {
      border-color: #50C878;
      color: #50C878;
    }

    .step_2 {
      border-color: #ed3136;
      color: #ed3136;
    }

    .step_3 {
      border-color: #FFD700;
      color: #FFD700;
    }

    /* footer */
    .footer {
      height: 250px;
      width: 100%;
      left: 0;
      right: 0;
      background-color: #ed3136;
      color: #f0f0f0;
    }

    .footer1 {
      text-align: center;
      padding: 10px;
      margin-left: 10px;
    }

    .footer-lable {
      color: white;
      text-decoration: none;
      padding-right: 20px;
      padding-left: 20px;
    }

    .lable {
      border-right: 3px solid #fff;
    }

    .footer1 a {
      margin-left: 20x;
    }

    .footimg {
      margin-left: 520px;
      padding: 20px;
    }

    .social-icons img {
      width: 20px;
      height: 20px;
      margin-left: 10px;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
      /* how its works section */
      .how-it-works-container {
        flex-direction: column;
        padding: 20px 0;
        width: 100%;
      }

      .step-container {
        width: 90%;
        margin: 10px auto;
      }

      .step_1,
      .step_2,
      .step_3 {
        margin-left: 45%;
      }

      h2 {
        font-size: 1.5rem;
      }

      h3 {
        font-size: 1rem;
      }
    }

    .step-icon {
      margin-bottom: 15px;
      font-size: 24px;
    }

    h2 {
      font-size: 2rem;
    }

    h3 {
      font-size: 1.2rem;
      color: #fff;
      margin-left: 60px;
      margin-right: 70px;
      align-content: center;
    }

    .step_1 {
      border: 3px solid #50C878;
      border-radius: 50px;
      width: 70px;
      height: 70px;
      margin-top: -65px;
      margin-left: 50%;
      background-color: white;
      color: #50C878;
      box-shadow: 0 3px 16px 3px rgba(0, 0, 0, 0.4);
    }

    .step_2 {
      border: 3px solid #ed3136;
      border-radius: 50px;
      width: 70px;
      height: 70px;
      margin-top: -65px;
      margin-left: 50%;
      background-color: white;
      color: #ed3136;
      box-shadow: 0 3px 16px 3px rgba(0, 0, 0, 0.4);
    }

    .step_3 {
      border: 3px solid #FFD700;
      border-radius: 50px;
      width: 70px;
      height: 70px;
      margin-top: -65px;
      margin-left: 50%;
      background-color: white;
      color: #FFD700;
      box-shadow: 0 3px 16px 3px rgba(0, 0, 0, 0.4);
    }

    .step-container {
      position: relative;
      padding: 20px;
      color: #fff;
      text-align: center;
      border-radius: 10px 10px 150px 150px;
      box-shadow: 0 3px 16px 3px rgba(0, 0, 0, 0.2);
    }

    .step-1 {
      background-color: #50C878;
    }

    .step-2 {
      background-color: #ed3136;
    }

    .step-3 {
      background-color: #FFD700;
    }

    .background-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-size: cover;
      background-position: center;
      opacity: 0.2;
      z-index: 1;
      border-radius: 0 0 150px 150px;
    }

    .step-1 .background-overlay {
      background-image: url('assets/img/Group4.svg');
    }

    .step-2 .background-overlay {
      background-image: url('assets/img/Group5.svg');
    }

    .step-3 .background-overlay {
      background-image: url('assets/img/Group3.svg');
    }

    .step-container h2,
    h3 {
      position: relative;
      z-index: 2;
    }

    .worktext {
      display: none;
    }

    @media (max-width: 768px) {
      /* how its works section */
      .how-it-works-container {
        flex-direction: column;
        align-items: center;
        margin-top: 50px;
      }

      .steps_img {
        display: none;
      }

      .step-container {
        width: 80%;
        margin-bottom: 20px;
      }
    }

    .worktext {
      margin-bottom: 30px;
    }

    .bg-red-modal {
      background-color: grey;
      color: white;
    }

    @media (max-width: 1400px) {
      .carousel-item .row {
        margin-left: 0;
        margin-right: 0;
      }
    } 

    @media (max-width: 767px) {
      /* carousel */
      .carousel-item {
        position: relative;
      }

      .carousel-item img {
        height: 100%;
        width: 100%;
        object-fit: cover;
      } 
      
      /* carousel text */
      .imgtext1,
      .imgtext2 {
        background-color: rgba(255, 255, 255, 0.7);
        padding: 20px;
        border-radius: 15px;
        position: absolute;
        z-index: 1;
        top: 50%;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }

      .imgtext1,
      .imgtext2 {
        font-size: 24px;
        text-align: center;
      }

      .imgtext11,
      .imgtext22 {
        font-size: 16px;
        text-align: center;
      }

      .btn-3,
      .btn-4 {
        font-size: 14px;
      }
    }

    @media (max-width: 767px) {
      #fundraiserCarousel .carousel-inner .carousel-item {
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      #fundraiserCarousel .carousel-inner .carousel-item .col-12 {
        max-width: 100%;
      }
    }

    .donate_btn.no-hover {
      background-color: white;
      color: red;
      border: 1px solid red;
    }

    .donate_btn.no-hover:hover {
      background-color: white !important;
      color: red !important;
      border: 1px solid red !important;
    }

    .fixed-card {
      width: 100%;
      max-width: 320px;
      min-height: 450px;
      display: flex;
      flex-direction: column;
      margin-bottom: 15px;
    }

    .fixed-card-img {
      height: 200px;
      width: 100%;
      object-fit: cover;
      background-size: cover;
      background-position: center;
    }

    /* Media query for single card display on mobile view */
    @media (max-width: 768px) {
      .carousel-item .col-12 {
        max-width: 100%;
        flex: 0 0 100%;
        padding: 0 10px;
        margin-bottom: 20px;
      }

      #carouselExampleSlidesOnly{
        height:100%;
      }
    }

    /* For larger screens, display three cards per slide */
    @media (min-width: 769px) {
      #carouselExampleSlidesOnly{
        margin-top:30px;
      }
      .carousel-item .col-4 {
        max-width: 33.33%;
        flex: 0 0 33.33%;
        margin-bottom: 20px;
      }
    }

    .fundraiser-carousel {
      padding: 40px 0;
      border-radius: 10px;
      margin-bottom: 30px;
    }
    
    .card_button {
      border: 1px solid gray !important;
      background: none;
      box-shadow: none;
    }

    .card_button:hover {
      border: 1px solid gray !important;
      box-shadow: none;
      background: none;
    }
    
    .img-placeholder {
      background-color: white;
      display: block;
      width: 100%;
      height: 230px;
      object-fit: cover;
    }
    
    .img-placeholder:not([src]) {
      background: url('assets/img/1.svg') center center/cover no-repeat;
    }
    
    /* Ensure the dropdown menu is fully visible on smaller screens */
    @media (max-width: 768px) {
      #userProfile .dropdown-menu {
        right: 0 !important;
        left: auto !important;
        min-width: 150px;
      }
      
      #userProfile img {
        width: 25px;
        height: 25px;
      }
      
      #userProfile .dropdown-item {
        text-align: center;
      }
    }
    
    .carousel-item {
      padding-left: 0px;
      padding-right: 0px;
    }
    
    .carousel-inner {
      width: 100%;
      overflow: hidden;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      background-color: black !important;
      border-radius: 50%;
      width: 30px;
      height: 30px;
    }

    @media (max-width: 768px) {
      .carousel-item .card-container {
        margin-bottom: 15px;
      }
      .carousel-inner {
        flex-wrap: nowrap;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
      }
    }
    
    @media (max-width: 767px) {
      .col-lg-4, .col-md-6 {
        flex: 0 0 100%;
        max-width: 100%;
      }
    }
    
    .custom-dropdown {
      position: relative;
      display: inline-block;
      width: 45%;
    }

    .custom-dropdown select {
      appearance: none;
      -webkit-appearance: none;
      -moz-appearance: none;
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 10px;
      width: 100%;
      font-size: 16px;
      cursor: pointer;
    }

    .custom-dropdown::after {
      content: '▼';
      position: absolute;
      top: 50%;
      right: 10px;
      transform: translateY(-50%);
      pointer-events: none;
      font-size: 14px;
      color: #666;
    }

    .card-container {
      transition: transform 0.2s;
    }
    
    .card-container:hover {
      transform: translateY(-5px);
    }
    
    .card {
      width: 100%;
      max-width: 300px;
      height: 480px;
      border-radius: 15px;
      box-shadow: none;
      box-shadow: 0 6px 25px rgba(0, 0, 0, 0.2), 0 10px 40px rgba(0, 0, 0, 0.15);
      overflow: hidden;
    }
    
    .card:hover {
      box-shadow: 0 6px 25px rgba(0, 0, 0, 0.2), 0 10px 40px rgba(0, 0, 0, 0.15);
    }
    
    .card-img-top {
      width: 100%;
      height: 230px;
      object-fit: cover;
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
    }
    
    .card-body {
      display: flex;
      flex-direction: column;
    }
    
    .card-title {
      font-size: 18px;
      margin-bottom: 10px;
      line-height: 1.3;
      color:rgb(22, 24, 26); 
    }
    
    .card-text {
      font-size: 16px;
      font-weight: 500;
      margin-bottom: 8px;
    }
    
    .progress {
      height: 8px;
      border-radius: 5px;
      background-color: #f8d7da;
    }
    
    .progress-bar {
      background-color: #ed3136;
    }
    
    .btn.bg-danger {
      border-radius: 25px;
      font-size: 14px;
      padding: 8px 20px;
      background-color: #ed3136;
      border: none;
    }
    
    .btn.bg-danger:hover {
      background-color: #ed3136;
    }

    /* Single Row for Supporters and Created by */
    .supporters-section, .created-by-section {
      display: flex;
      align-items: center;
    }
    
    .supporters-section {
      flex: 10;
      min-width: 0;
      overflow: hidden;
    }
    
    .created-by-section {
      flex: 8;
      justify-content: flex-end;
      min-width: 0;
    }

    .supporters-section p, .created-by-section p {
      font-size: 14px;
      color:black;
    }
    
    .supporters-section p {
      display: flex;
      align-items: center;
      white-space: normal;
    }
    
    .supporters-section .supporter-count {
      font-weight: bold;
      font-size: 16px;
      color:black;
      margin-right: 4px;
    }
    
    /* Truncate Text with Ellipsis */
    .truncate-text {
      position: relative;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      max-width: 60px;
      cursor: pointer;
    }
    
    .truncate-text1 {
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
      text-overflow: ellipsis;
      max-width: 100px;
      text-align: center;
    }
    
    .truncate-text:hover:after {
      content: attr(data-fulltext);
      position: absolute;
      top: -30px;
      left: 0;
      background-color: #333;
      color: white;
      padding: 5px 10px;
      border-radius: 5px;
      white-space: normal;
      z-index: 10;
      font-size: 14px;
      max-width: 250px;
      word-break: break-word;
    }

    /* Share Icon and Text */
    .share-section {
      display: flex;
      align-items: center;
      cursor: pointer;
    }
    
    .share-section i {
      color: #ed3136;
      font-size: 16px;
    }
    
    .share-section span {
      color: #ed3136;
      font-size: 14px;
      font-weight: 500;
      margin-left: 5px;
    }

    /* Mobile Responsiveness */
    @media (max-width: 767px) {
      .card {
        max-width: 100%;
        height: auto;
        margin: 0 auto 15px;
      }
      .card-img-top {
        height: 200px;
      }
      .card-title {
        font-size: 16px;
      }
      .card-text {
        font-size: 12px;
      }
      .supporters-section p, .created-by-section p {
        font-size: 12px;
      }
      .supporters-section i, .created-by-section i {
        font-size: 14px;
      }
      .created-by-section .rounded-circle {
        width: 25px;
        height: 25px;
      }
      .created-by-section .bi-person-fill {
        font-size: 16px;
      }
      .btn.bg-danger {
        font-size: 12px;
        padding: 6px 15px;
      }
      .share-section span {
        font-size: 12px;
      }
    }

    .carousel-indicators {
      bottom: 10px;
    }
    
    .carousel-indicators button {
      width: 30px;
      height: 4px;
      background-color: #ff9999 !important;
      border-radius: 2px;
      opacity: 0.5;
      transition: opacity 0.3s, background-color 0.3s;
    }

    .carousel-indicators .active {
      background-color: #ed3136 !important;
      opacity: 1;
    }
    
    @media (max-width: 768px) {
      .carousel-indicators {
        bottom: -10px !important;
      }
      .carousel-indicators button {
        width: 20px;
        height: 3px;
      }
    }

    /* Raising the funds css style by poovarasan */
    .step-circle {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background-color: #e6e6e6;
      color: black;
      text-align: center;
      line-height: 40px;
      font-weight: bold;
    }

    .step-item.active .step-circle {
      background-color: #ed3136;
      color: white;
    }

    .video-box {
      position: relative;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
      margin-bottom: 20px;
      width: fit-content;
    }

    #progressContainer {
      width: 100%;
      height: 8px;
      background-color: #ddd;
      border-radius: 4px;
      overflow: hidden;
      margin-top: 8px;
    }

    #progressBar {
      width: 0%;
      height: 100%;
      background-color: #ed3136;
      transition: width 0.1s linear;
    }

    .step-item i {
      visibility: hidden;
    }

    .step-item.active i {
      visibility: visible;
    }

    #playPauseBtn {
      position: absolute;
      top: 10px;
      right: 10px;
      font-size: 20px;
      color: white;
      background-color: rgba(0, 0, 0, 0.5);
      border-radius: 50%;
      width: 36px;
      height: 36px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      z-index: 2;
      opacity: 0;
      pointer-events: none;
      transition: opacity 0.3s ease;
    }

    .video-box:hover #playPauseBtn {
      opacity: 1;
      pointer-events: auto;
    }

    #playPauseBtn:hover {
      background-color: rgba(0, 0, 0, 0.7);
      transform: scale(1.1);
    }

    video {
      width: 500px;
      height: auto;
      object-fit: cover;
      display: block;
    }
    
    .raise_video {
      position: relative;
      width: 100%;
      height: auto;
      overflow: hidden;
    }

    @media (max-width: 768px) {
      .step-circle {
        margin-top: 5px;
      }

      video {
        width: 100%;
        height: auto;
      }
      #userProfile .dropdown-menu {
        right: 0 !important;
        left: auto !important;
        min-width: 150px;
      }
      
      #userProfile img {
        width: 25px;
        height: 25px;
      }
      
      #userProfile .dropdown-item {
        text-align: center;
      }
    }
    
    #currency, #amount {
      height: 48px !important;
      font-size: 15px;
      padding-left: 12px;
    }
    
    .note-box {
      background: #ffe6e6;
      border-left: 4px solid #d9534f;
      padding: 10px 15px;
      border-radius: 6px;
      color: #ed3136;
      font-size: 15px;
    }
    
    .navbar-brand img {
      transition: transform 0.3s ease-in-out;
    }

    .navbar-brand img:hover {
      transform: scale(1.08);
    }

    /* ===== Base styling ===== */
    .stat-box {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    .stat-box img {
      width: 50px;
      height: 50px;
    }

    .stat-box h2 {
      font-size: 2rem;
      margin: 10px 0;
    }

    .stat-box p {
      margin: 0;
    }

    /* ===== Tablet view (768px–991px) ===== */
    @media (min-width: 768px) and (max-width: 991px) {
      .stats-section .col-md-3 {
        flex: 0 0 25%;
        max-width: 25%;
        padding: 10px;
      }

      .stat-box img {
        width: 40px;
        height: 40px;
      }

      .stat-box h2 {
        font-size: 1.6rem;
      }

      .stat-box p {
        font-size: 0.9rem;
      }
    }

    /* ===== Mobile view (below 768px) ===== */
    @media (max-width: 767px) {
      .stats-section .row.text-center {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }

      .stats-section .col-6 {
        flex: 0 0 100% !important;
        max-width: 100% !important;
        width: 100% !important;
        margin-bottom: 25px !important;
      }

      .stat-box {
        width: 100%;
      }

      .stat-box img {
        width: 45px;
        height: 45px;
        margin-bottom: 10px;
      }

      .stat-box h2 {
        font-size: 1.8rem;
      }

      .stat-box p {
        font-size: 1rem;
      }
    }

    /* SECTION */
    .fundraiser-steps-section {
      padding: 70px 0;
      background: #fff;
    }

    /* FIXED WIDTH – ALIGNMENT LOCK */
    .fundraiser-wrapper {
      max-width: 1240px;
      margin: 0 auto;
      width: 100%;
      padding: 0 20px;
    }

    /* TITLE */
    .section-title {
      text-align: center;
      font-size: 28px;
      font-weight: 700;
      width: 100%;
      padding: 0 20px;
    }

    .section-title span {
      color: #ed3136;
    }

    /* UNDERLINE */
    .underline {
      text-align: center;
      margin: 10px auto 40px;
      width: 100%;
      padding: 0 20px;
    }

    /* GRID – KEEP TWO COLUMNS ALWAYS */
    .fundraiser-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 40px;
      align-items: stretch;
    }

    /* VIDEO COLUMN */
    .fundraiser-video {
      display: flex;
      height: 100%;
    }

    /* VIDEO FRAME – REMOVE ASPECT RATIO, STRETCH HEIGHT */
    .video-frame {
      position: relative;
      width: 100%;
      height: 100%;
      background: #523636ff;
      border-radius: 16px;
      overflow: hidden;
    }

    /* VIDEO FITS FRAME */
    .video-frame video {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    /* PROGRESS BAR */
    .progress-bar-container {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 5px;
      background: #e0e0e0;
      border-radius: 0 0 10px 10px;
      overflow: hidden;
    }

    .progress-bar {
      width: 0;
      height: 100%;
      background: #ed3136;
    }

    /* PLAY BUTTON */
    .play-pause-btn {
      position: absolute;
      bottom: 15px;
      right: 15px;
      width: 40px;
      height: 40px;
      background: rgba(0, 0, 0, 0.6);
      color: #fff;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
    }

    /* CONTENT COLUMN */
    .fundraiser-content {
      display: flex;
      height: 100%;
      align-items: stretch;
    }

    /* STEPS LIST */
    .steps-list {
      display: flex;
      flex-direction: column;
      gap: 30px;
    }

    /* STEP ITEM */
    .step-item {
      display: flex;
      align-items: flex-start;
      gap: 16px;
      cursor: pointer;
      transition: background 0.3s, color 0.3s;
      border-radius: 8px;
      padding: 14px 16px;
    }

    .step-item:hover {
      background: #f8f9fa;
    }

    /* CARET */
    .caret {
      opacity: 0;
      color: #ed3136;
      font-size: 20px;
      transition: 0.3s;
    }

    .step-item:hover .caret,
    .step-item.active .caret {
      opacity: 1;
    }

    /* STEP CIRCLE */
    .step-circle {
      width: 40px;
      height: 40px;
      border: 2px solid #ed3136;
      border-radius: 50%;
      color: #ed3136;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 600;
      flex-shrink: 0;
    }

    .step-item.active .step-circle {
      background: #ed3136;
      color: #fff;
    }

    /* TEXT */
    .step-item h5 {
      margin: 0 0 6px;
      font-weight: 600;
    }

    .step-item p {
      margin: 0;
      color: #555;
    }

    .step-item:hover h5,
    .step-item.active h5 {
      color: #ed3136;
    }

    /* ========================= */
    /* RESPONSIVE – NO STACKING */
    /* ========================= */

    /* Large screens – unchanged */
    @media (min-width: 1921px) {
      .fundraiser-wrapper {
        max-width: 1240px;
        padding: 0 20px;
      }
    }

    /* 1440px */
    @media (min-width: 1444px) and (max-width: 1920px) {
      .fundraiser-wrapper {
        max-width: 1240px;
        padding: 0 20px;
      }
    }

    /* Laptop */
    @media (min-width: 1024px) and (max-width: 1443px) {
      .fundraiser-wrapper {
        max-width: 1240px;
        padding: 0 20px;
      }

      .fundraiser-grid {
        gap: 30px;
      }
    }

    /* ========================= */
    /* MOBILE FIX – STEPS LAYOUT */
    /* ========================= */

    @media (max-width: 991px) {
      /* Stack video & content */
      .fundraiser-grid {
        grid-template-columns: 1fr;
        gap: 30px;
      }

      /* Center video */
      .video-frame { max-width: 500px; margin: 0 auto; }

      /* Content full width */
      .fundraiser-content {
        width: 100%;
      }

      /* Steps list spacing */
      .steps-list {
        gap: 20px;
      }

      /* Step item layout */
      .step-item {
        align-items: flex-start;
        padding: 14px 12px;
      }

      /* Hide caret on mobile */
      .caret {
        display: none;
      }

      /* Step circle size */
      .step-circle {
        width: 36px;
        height: 36px;
        font-size: 14px;
      }

      /* Text alignment */
      .step-item h5 {
        font-size: 16px;
        line-height: 1.3;
      }

      .step-item p {
        font-size: 14px;
        line-height: 1.5;
      }
    }

    /* SMALL MOBILE */
    @media (max-width: 576px) {
      .video-frame { max-width: 500px; margin: 0 auto; }

      .step-item {
        gap: 12px;
      }

      .step-item h5 {
        font-size: 16px;
        line-height: 1.3;
      }

      .step-item p {
        font-size: 14px;
        line-height: 1.5;
      }
    }

    @media (max-width: 767px) {
      .fundraiser-steps-section {
        padding: 40px 0;
      }
      
      .fundraiser-wrapper {
        padding: 0 15px;
      }
      
      .section-title {
        font-size: 24px;
        padding: 0 15px;
      }
      
      .underline {
        padding: 0 15px;
        margin: 10px auto 30px;
      }
    }

    /* Remove forced spacing */
    #fundraiserCards {
      display: flex;
      flex-wrap: wrap;
    }

    /* Card hover */
    .card {
      width: 100%;
      max-width: 500px;
      height: 100%;
      transition: transform 0.2s ease-in-out;
      box-shadow: 0 6px 25px rgba(0, 0, 0, 0.2), 0 10px 40px rgba(0, 0, 0, 0.15);
    }
    
    .card:hover {
      transform: translateY(-4px);
      box-shadow: 0 6px 25px rgba(0, 0, 0, 0.2), 0 10px 40px rgba(0, 0, 0, 0.15);
    }

    /* Image FIX – full cover */
    .card-img-top {
      width: 100%;
      height: 230px;
      object-fit: cover;
      object-position: center;
    }

    /* Mobile optimizations */
    @media (max-width: 576px) {
      .card-img-top {
        height: 180px;
        object-fit: cover;
        object-position: center;
      }
      .card-title {
        font-size: 1rem;
      }
    }

  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-white py-4 fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand me-auto" href="https://www.kanavu.org/">
        <img src="<?= base_url('assets/img/KSV LOGO (14).png') ?>" alt="Kanavu_help" style="height: 70px; width: auto;">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title">
            <a href="https://www.kanavu.org/">
              <img src="<?= base_url('assets/img/KSV LOGO (14).png') ?>" alt="Kanavu_help" style="height: 70px; width: auto;">
            </a>
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
            <li class="nav-item">
              <a id="kanavuhomepage" class="nav-link mx-lg-2 active" href="<?= base_url('') ?>">Home</a>
            </li>
            <li class="nav-item">
              <a id="aboutuspage" class="nav-link mx-lg-2 " href="<?= base_url('/abouts') ?>">About us</a>
            </li>
            <li class="nav-item">
              <a id="individualpage" class="nav-link mx-lg-2" href="<?= base_url('/individual') ?>">Start a Fundraiser</a>
            </li>
            <li class="nav-item">
              <a id="donatepage" class="nav-link mx-lg-2" href="<?= base_url('/donate') ?>">Donate</a>
            </li>
            <li class="nav-item">
              <a id="blogs" class="nav-link mx-lg-2" href="<?= base_url('/blogs') ?>">Blog</a>
            </li>
            <li class="nav-item">
              <a id="contactuspage" class="nav-link mx-lg-2" href="<?= base_url('/contactus') ?>">Contact Us</a>
            </li>
            <?php if ($this->session->userdata('Kanavu_userId')): ?>
              <li class="nav-item">
                <a id="signinpage" class="nav-link mx-lg-2" href="<?= base_url('/login') ?>">View Dashboard</a>
              </li>
            <?php else: ?>
              <!-- <li class="nav-item">
                <a id="signinpage" class="nav-link mx-lg-2" href="<?= base_url('/login') ?>">Sign In</a>
              </li> -->
            <?php endif; ?>
          </ul>
          <div class="d-flex align-items-center ms-auto">
            <?php if ($this->session->userdata('Kanavu_userId')): ?>
              <div class="d-flex align-items-center">
                <div class="dropdown" id="userProfile">
                  <div class="d-flex align-items-center" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="<?= base_url('/assets/img/Ellipse 12.png') ?>" alt="Profile Image" style="width: 30px; height: 30px; border-radius: 50%;">
                    <span class="ms-2"><?= $this->session->userdata('Kanavu_userName'); ?></span>
                  </div>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="<?= base_url('/logout') ?>">
                        <i class="fas fa-sign-out-alt"></i> Logout
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </nav>
  
  <br>

  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    
    <div class="carousel-inner">
      <!-- Slide 1 -->
      <div class="carousel-item active">
        <img src="<?= base_url('assets/img/old1.jpg') ?>" class="d-block w-100" alt="Image 1"> 
        <div class="imgtext1 mt-5 pt-5">
          <p>THE <strong>WORLD'S <br>PLATFORM</strong> FOR <br>
            <span style="color: #ed3136;">HELP</span>
          </p>
          <div class="imgtext11">
            <ul>
              <li style="font-weight: bold;margin-left">"Empowering Lives, Defeating diseases & disasters"</li>
              <li>
                <a href="<?= base_url('/individual') ?>">
                  <button type="button" class="btn border rounded-pill mt-3 px-4 py-2 shadow-sm" style="background-color:#ed3136 ; color: white; border: none;">
                    Start a Fundraiser
                  </button>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      
      <br>
      
      <!-- Slide 2 -->
      <div class="carousel-item">
        <img src="<?= base_url('assets/img/old2.jpg') ?>" class="d-block w-100" alt="Image 2">
        <div class="imgtext2 mt-5 pt-5">
          <p>WE ARE ON A MISSION TO <br>
            <span style="color: #ed3136;">HELP THE WORLD</span>
          </p>
          <div class="imgtext22">
            <ul>
              <li style="font-weight: bold;">"Empowering Lives, Defeating diseases & disasters"</li>
              <li>
                <a href="<?= base_url('/individual') ?>">
                  <button type="button" class="btn border rounded-pill mt-3 px-4 py-2 shadow-sm" style="background-color: #ed3136; color: white; border: none;">
                    Start a Fundraiser
                  </button>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="stats-section py-5">
    <div class="container">
      <div class="row text-center">
        <!-- Fund Raised -->
        <div class="col-6 col-sm-6 col-md-3 mb-4 mb-md-0">
          <div class="stat-box">
            <img src="<?= base_url('assets/img/money-bag1.png') ?>" alt="Icon" class="mb-3 img-fluid">
            <h2 class="count-up" data-target="<?= html_escape($total_fund) ?>">0</h2>
            <p>Fund raises</p>
          </div>
        </div>

        <!-- Successful Events -->
        <div class="col-6 col-sm-6 col-md-3 mb-4 mb-md-0">
          <div class="stat-box">
            <img src="<?= base_url('assets/img/calendar1.png') ?>" alt="Icon" class="mb-3 img-fluid">
            <h2 class="count-up" data-target="<?= $total_events ?>">0</h2>
            <p>Causes</p>
          </div>
        </div>

        <!-- Volunteers -->
        <div class="col-6 col-sm-6 col-md-3 mb-4 mb-md-0">
          <div class="stat-box">
            <img src="<?= base_url('assets/img/hand1.png') ?>" alt="Icon" class="mb-3 img-fluid">
            <h2 class="count-up" data-target="<?= $total_volunteers ?>">0</h2>
            <p>Volunteers</p>
          </div>
        </div>

        <!-- Donors -->
        <div class="col-6 col-sm-6 col-md-3 mb-4 mb-md-0">
          <div class="stat-box">
            <img src="<?= base_url('assets/img/volunter1.png') ?>" alt="Icon" class="mb-3 img-fluid">
            <h2 class="count-up" data-target="<?= $total_donors ?>">0</h2>
            <p>Donors</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="container-xxl">
    <div class="h4 text-center mb-4">BE THE REASON OF<span style="color: #ed3136"> SOMEONE SMILES</span></div>
    <div style="display: flex; justify-content: center;">
      <img class="w-25 heart" src="assets/img/underline.svg" alt="no image">
    </div>
    <div class="p text-center mt-4">We try our best to help helpless people,<br>Donate to charity causes around the world.</div>
  </div><br>

  <!-- Fundraiser Cards with Fixed Size -->
  <div class="container pt-4"> 
    <div class="row g-4" id="fundraiserCards">
      <?php if (!empty($fundraisers)): ?>
        <?php 
        // Helper to calculate progress
        function getProgressPercentage($fundraiser) {
          if ($fundraiser->amount == 0) return 0;
          return min(($fundraiser->raised_amount / $fundraiser->amount) * 100, 100);
        }

        // Sort by lowest percentage
        usort($fundraisers, function($a, $b) {
          return getProgressPercentage($a) <=> getProgressPercentage($b);
        });

        foreach ($fundraisers as $fundraiser): 
          $is_goal_reached = $fundraiser->raised_amount >= $fundraiser->amount;

          // Image path fix
          $image_path = FCPATH . 'assets/individualform_img/' . $fundraiser->cover_image;
          if (!empty($fundraiser->cover_image) && is_file($image_path)) {
            $imageSrc = base_url('assets/individualform_img/' . rawurlencode($fundraiser->cover_image));
          } else {
            $imageSrc = base_url('assets/img/funddonate.jpg');
          }

          $progress_percentage = getProgressPercentage($fundraiser);
        ?>

        <div class="col-12 col-sm-6 col-md-6 col-lg-3" style="position: relative;">
          <div class="card h-100 shadow-sm">
            <!-- Cover Image -->
            <a href="<?= base_url('helpus/' . str_replace(' ', '-', $fundraiser->name) . '-' . $fundraiser->id) ?>">
              <img src="<?= $imageSrc ?>" 
                  alt="<?= htmlspecialchars($fundraiser->cause_heading, ENT_QUOTES) ?>"
                  class="card-img-top">
            </a>

            <?php if ($fundraiser->is_runforcause == 'yes'): ?>
              <div class="position-absolute m-2" style="z-index: 5; top: 0; right: 0;">
                  <span class="badge bg-danger text-white border-0 shadow-sm" 
                        data-bs-toggle="tooltip" data-bs-placement="left" title="Your support fuels my run"
                        style="font-size: 0.7rem; padding: 4px 8px; border-radius: 4px; font-weight: 600; cursor: pointer;">
                      <i class="bi bi-star-fill me-1"></i>Impact Run
                  </span>
              </div>
            <?php endif; ?>

            <div class="card-body d-flex flex-column">
              <!-- Title -->
              <h5 class="card-title text-truncate">
                <?= htmlspecialchars($fundraiser->cause_heading, ENT_QUOTES) ?>
              </h5>

              <!-- Supporters & Creator -->
              <div class="d-flex justify-content-between mb-2 small text-muted">
                <span class="text-truncate" style="max-width: 40%;">
                  <img src="<?= base_url('assets/img/heart1.svg') ?>" width="16" class="me-1">
                  <?= intval($fundraiser->supporters_count) ?> 
                  Supporter<?= $fundraiser->supporters_count > 1 ? 's' : '' ?>
                </span>

                <span class="text-truncate" style="max-width: 55%;">
                  <img src="<?= base_url('assets/img/Frame.svg') ?>" width="16" class="me-1">
                  Created By <?= htmlspecialchars($fundraiser->created_by, ENT_QUOTES) ?>
                </span>
              </div>

              <!-- Raised + Progress -->
              <p class="mb-1 small">
                <strong>₹<?= number_format(min($fundraiser->raised_amount, $fundraiser->amount)) ?> / 
                ₹<?= number_format($fundraiser->amount) ?></strong>
              </p>

              <div class="progress" style="height: 8px;">
                <div class="progress-bar bg-danger" 
                    style="width: <?= $progress_percentage ?>%;">
                </div>
              </div>

              <!-- Donate + Share -->
              <div class="d-flex justify-content-between align-items-center mt-3">
                <?php if ($is_goal_reached): ?>
                  <span class="badge bg-success">Completed</span>
                <?php else: ?>
                  <button class="btn btn-danger btn-sm donate-btn" 
                          data-cause-id="<?= $fundraiser->id ?>" 
                          data-is-runforcause="<?= $fundraiser->is_runforcause ?>"
                          style="padding: 5px 15px; border-radius: 25px;">
                    Donate Now
                  </button>
                <?php endif; ?>

                <div class="text-danger d-flex align-items-center share-btn" style="cursor:pointer;"
                    data-url="<?= base_url('helpus/' . str_replace(' ', '-', $fundraiser->name) . '-' . $fundraiser->id) ?>"
                    data-title="<?= htmlspecialchars($fundraiser->cause_heading, ENT_QUOTES) ?>"
                    data-image="<?= $imageSrc ?>">
                  <i class="bi bi-share fs-6"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php endforeach; ?>
      <?php else: ?>
        <p class="text-center">No fundraisers available at the moment.</p>
      <?php endif; ?>
    </div>
  </div>

  <!-- See More Button -->
  <?php if (!empty($fundraisers)): ?>   
  <div class="text-center mt-3">
    <a href="<?= base_url('/donate') ?>" class="btn" style="background-color: white; border: 1px solid #ed3136; color: #ed3136; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
      See More Causes
    </a>
  </div>
  <?php endif; ?>

  </div><br><br>

  <!-- By Poovarasan for raising funds -->
  <section class="fundraiser-steps-section">
    <div class="fundraiser-wrapper">
      <h2 class="section-title">
        START A FUNDRAISER IN <span>THREE SIMPLE STEPS</span>
      </h2>

      <div class="underline">
        <img src="assets/img/underline.svg" alt="">
      </div>

      <div class="fundraiser-grid">
        <!-- VIDEO COLUMN -->
        <div class="fundraiser-video">
          <div class="video-frame">
            <video id="stepVideo" autoplay muted playsinline>
              <source src="<?= base_url('assets/video/Help Website 1.mp4'); ?>" type="video/mp4">
            </video>

            <div class="progress-bar-container">
              <div class="progress-bar" id="progressBar"></div>
            </div>

            <div class="play-pause-btn" id="playPauseBtn">
              <i class="bi bi-pause-fill"></i>
            </div>
          </div>
        </div>

        <!-- CONTENT COLUMN -->
        <div class="fundraiser-content">
          <ul class="steps-list">
            <li class="step-item active" data-step="1">
              <span class="caret"><i class="bi bi-caret-left-fill"></i></span>
              <span class="step-circle me-3">1</span>
              <div>
                <h5>Use our tools to create your fundraiser</h5>
                <p>>With our easy-to-use tools, you can set up your fundraiser in just minutes. Whether it’s for a personal cause, community project, or charitable initiative, our platform gives you everything you need to share your story, connect with supporters, and start raising funds right away.</p>
              </div>
            </li>

            <li class="step-item" data-step="2">
              <span class="caret"><i class="bi bi-caret-left-fill"></i></span>
              <span class="step-circle me-3">2</span>
              <div>
                <h5>Reach donors by sharing</h5>
                <p>Spread the word about your fundraiser with just a click. Share your campaign across social media, email, and messaging apps to reach more donors, inspire support, and grow your impact faster.</p>
              </div>
            </li>

            <li class="step-item" data-step="3">
              <span class="caret"><i class="bi bi-caret-left-fill"></i></span>
              <span class="step-circle me-3">3</span>
              <div>
                <h5>Securely receive funds</h5>
                <p>Receive donations safely and without hassle. Our secure payment system ensures that every contribution goes directly to your fundraiser, giving you and your supporters peace of mind throughout the process.</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <div id="footer"></div>

  <!-- Donation Modal -->
  <div class="modal fade" id="donationModal" tabindex="-1" aria-labelledby="donationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content border-0 shadow-lg" style="border-radius: 20px; overflow: hidden;">
        <div class="modal-header border-0 bg-danger text-white p-4">
          <div>
            <h5 class="fw-bold mb-0" id="donationModalTitle">Support Our Cause</h5>
            <small class="opacity-75">Follow 3 simple steps to complete your donation</small>
          </div>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body p-4 bg-light">
          <form id="donationForm" method="POST" action="<?= base_url('kanavuhelp/processDonation') ?>">
            <input type="hidden" name="cause_id" id="cause_id">
            <input type="hidden" name="currency_type" value="INR">
            <input type="hidden" name="user_id" id="user_id" value="<?= $this->session->userdata('Kanavu_userId') ?>">

            <!-- Step 1: Payment Info -->
            <div class="card border-0 shadow-sm mb-3" style="border-radius: 12px;">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <span class="badge bg-danger rounded-circle me-2 d-flex align-items-center justify-content-center" style="width:24px; height:24px;">1</span>
                  <h6 class="fw-bold mb-0 text-dark">Make Your Donation</h6>
                </div>
                
                <div class="row g-3 align-items-center">
                  <div class="col-7">
                    <label class="text-muted small d-block mb-1 required-field">UPI ID</label>
                    <div class="d-flex align-items-center bg-white p-2 border rounded">
                      <span class="text-truncate small fw-bold" id="upiText">vyapar.175502705184@hdfcbank</span>
                      <i class="bi bi-copy ms-auto text-primary cursor-pointer copy-icon" data-copy="upiText" title="Copy UPI"></i>
                    </div>
                  </div>
                  <div class="col-1 text-muted small fw-bold text-center">OR</div>
                  <div class="col-4 text-center">
                    <img src="<?= base_url('assets/img/hdfc_qr_scranner.jpeg') ?>" class="img-fluid rounded border shadow-sm" style="max-height: 280px;" alt="QR Code">
                    <small class="d-block text-muted mt-1" style="font-size: 10px;">Scan to Pay</small>
                  </div>
                </div>
              </div>
            </div>

            <!-- Step 2: Donation Details -->
            <div class="card border-0 shadow-sm mb-3" style="border-radius: 12px;">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <span class="badge bg-danger rounded-circle me-2 d-flex align-items-center justify-content-center" style="width:24px; height:24px;">2</span>
                  <h6 class="fw-bold mb-0 text-dark">Donation Details</h6>
                </div>
                <div class="row gx-4">
                  <div class="col-md-6">
                    <label class="form-label required-field">Donation Amount (₹)</label>
                    <div class="input-group">
                      <span class="input-group-text bg-white border-end-0">₹</span>
                      <input type="number" name="amount" class="form-control border-start-0 ps-0" id="amount" placeholder="Enter amount" required min="1" max="10000000" step="1">
                      <div id="error8" class="text-danger small mt-1"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label required-field">Transaction ID</label>
                    <input type="text" name="transactionid" class="form-control" id="transactionid" placeholder="Enter transaction ID" required maxlength="30">
                    <div id="error4" class="text-danger small mt-1"></div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Step 3: Personal Details -->
            <div class="card border-0 shadow-sm mb-4" style="border-radius: 12px;">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <span class="badge bg-danger rounded-circle me-2 d-flex align-items-center justify-content-center" style="width:24px; height:24px;">3</span>
                  <h6 class="fw-bold mb-0 text-dark">Personal Details</h6>
                </div>
                <div class="row g-2">
                  <div class="col-12">
                    <label class="form-label required-field">Full Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter your full name" required maxlength="50">
                    <div id="error6" class="text-danger small mt-1"></div>
                  </div>
                  <div class="col-6">
                    <label class="form-label required-field">Phone Number</label>
                    <input type="tel" name="phoneno" class="form-control" id="phoneno" placeholder="10-digit number" required maxlength="10">
                    <div id="error3" class="text-danger small mt-1"></div>
                  </div>
                  <div class="col-6">
                    <label class="form-label required-field">City</label>
                    <input type="text" name="city" class="form-control" id="city" placeholder="Enter city" required maxlength="30">
                    <div id="error9" class="text-danger small mt-1"></div>
                  </div>
                  <div class="col-12">
                    <label class="form-label">Email Address (Optional)</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email address" maxlength="100">
                    <div id="error7" class="text-danger small mt-1"></div>
                  </div>
                </div>
              </div>
            </div>

            <button type="submit" class="btn btn-danger btn-lg w-100 fw-bold py-3 shadow" style="border-radius: 12px; letter-spacing: 1px;" id="submitBtn">
              Submit Donation
            </button>
            
            <div class="text-center mt-3">
              <small class="text-muted">Funds go directly to <strong>The Kanavu Trust</strong></small>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <style>
  .brand-red {
    background-color: #ed3136 !important;
  }
  .text-brand-red {
    color: #ed3136 !important;
  }
</style>

<div class="modal fade" id="donationSuccess" tabindex="-1" aria-labelledby="donationSuccessLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow-lg">
      
      <div class="modal-header border-0 pb-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body text-center px-4 py-5">

        <!-- Success Icon -->
        <div class="mb-4">
          <div class="rounded-circle d-inline-flex p-4" style="background-color: rgba(237, 49, 54, 0.1);">
            <i class="bi bi-check-circle-fill text-brand-red" style="font-size: 3rem;"></i>
          </div>
        </div>

        <!-- Title -->
        <h4 class="modal-title fw-bold text-brand-red mb-3" id="donationSuccessLabel">
          Donation Successful!
        </h4>

        <!-- Message -->
        <p class="text-muted mb-4">
          Thank you for your generous contribution. Your support helps us continue our mission and make a real difference.
        </p>

        <!-- Confirmation Details -->
        <div class="bg-light rounded p-3 mb-4">
          <p class="mb-1">
            <small class="text-muted">A confirmation email has been sent to you</small>
          </p>
          <p class="mb-0 fw-bold text-dark">
            Thank you for being part of our community!
          </p>
        </div>

      </div>

      <div class="modal-footer border-0 pt-0">
        <button type="button" class="btn brand-red text-white px-5 py-2 fw-bold"
                id="donationRedirectBtn" data-bs-dismiss="modal">
          Ok
        </button>
      </div>

    </div>
  </div>
</div>  

  <!--login alert modal-->
  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Login Required</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>You need to log in to continue with the donation.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id="loginRedirectBtn">OK</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Initialize Bootstrap tooltips – container:'body' ensures each tooltip
    // anchors to its own trigger element and never drifts to a nearby card.
    document.addEventListener('DOMContentLoaded', function () {
      var tooltipTriggerList = [].slice.call(
        document.querySelectorAll('[data-bs-toggle="tooltip"]')
      );
      tooltipTriggerList.forEach(function (el) {
        new bootstrap.Tooltip(el, {
          container: 'body',
          trigger: 'hover'
        });
      });
    });
  </script>

  <script>
    // ============================================
    // COMPREHENSIVE FORM VALIDATION
    // ============================================

    // Validation configuration
    const validationRules = {
      amount: {
        validate: (value) => {
          const num = parseFloat(value);
          return !isNaN(num) && num >= 1 && num <= 10000000;
        },
        errorId: 'error8',
        errorMessage: 'Amount must be between ₹1 and ₹1,00,00,000',
        required: true,
        format: (value) => {
          // Remove non-numeric characters except dot
          return value.replace(/[^0-9.]/g, '');
        }
      },
      
      transactionid: {
        validate: (value) => {
          const trimmed = value.trim();
          return /^[A-Za-z0-9]{8,30}$/.test(trimmed);
        },
        errorId: 'error4',
        errorMessage: 'Transaction ID must be 8-30 alphanumeric characters',
        required: true,
        format: (value) => {
          // Remove special characters, keep alphanumeric
          return value.replace(/[^A-Za-z0-9]/g, '');
        }
      },
      
      name: {
        validate: (value) => {
          const trimmed = value.trim();
          return /^[A-Za-z\s.'-]{3,50}$/.test(trimmed);
        },
        errorId: 'error6',
        errorMessage: 'Name must be 3-50 letters (only letters, spaces, dots, hyphens)',
        required: true,
        format: (value) => {
          // Capitalize first letter of each word
          return value.toLowerCase()
            .split(' ')
            .map(word => word.charAt(0).toUpperCase() + word.slice(1))
            .join(' ');
        }
      },
      
      phoneno: {
        validate: (value) => {
          const trimmed = value.trim();
          return /^[6-9]\d{9}$/.test(trimmed);
        },
        errorId: 'error3',
        errorMessage: 'Enter a valid 10-digit Indian mobile number (starting with 6-9)',
        required: true,
        format: (value) => {
          // Keep only digits, limit to 10
          return value.replace(/\D/g, '').slice(0, 10);
        }
      },
      
      city: {
        validate: (value) => {
          const trimmed = value.trim();
          return /^[A-Za-z\s-]{2,30}$/.test(trimmed);
        },
        errorId: 'error9',
        errorMessage: 'City name must be 2-30 letters',
        required: true,
        format: (value) => {
          // Capitalize first letter
          return value.charAt(0).toUpperCase() + value.slice(1).toLowerCase();
        }
      },
      
      email: {
        validate: (value) => {
          if (!value.trim()) return true; // Optional field
          return /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/i.test(value.trim());
        },
        errorId: 'error7',
        errorMessage: 'Please enter a valid email address',
        required: false
      }
    };

    // Setup real-time validation for all fields
    function setupRealTimeValidation() {
      Object.keys(validationRules).forEach(fieldId => {
        const field = document.getElementById(fieldId);
        const rule = validationRules[fieldId];
        
        if (field) {
          // Input event for formatting and validation
          field.addEventListener('input', function(e) {
            // Apply formatting if available
            if (rule.format) {
              this.value = rule.format(this.value);
            }
            
            // Validate the field
            validateField(fieldId);
          });
          
          // Blur event for final validation
          field.addEventListener('blur', function() {
            validateField(fieldId);
          });
          
          // Focus event to remove error styling
          field.addEventListener('focus', function() {
            this.classList.remove('is-invalid');
            const errorElement = document.getElementById(rule.errorId);
            if (errorElement) {
              errorElement.textContent = '';
            }
          });
        }
      });
    }

    // Validate a single field
    function validateField(fieldId) {
      const field = document.getElementById(fieldId);
      const rule = validationRules[fieldId];
      const errorElement = document.getElementById(rule.errorId);
      
      if (!field || !errorElement) return true;
      
      const value = field.value.trim();
      
      // Clear previous error
      errorElement.textContent = '';
      field.classList.remove('is-invalid', 'is-valid');
      
      // Skip validation for optional empty fields
      if (!rule.required && !value) {
        field.classList.add('is-valid');
        return true;
      }
      
      // Check if required field is empty
      if (rule.required && !value) {
        errorElement.textContent = 'This field is required';
        field.classList.add('is-invalid');
        return false;
      }
      
      // Apply validation rule
      if (!rule.validate(value)) {
        errorElement.textContent = rule.errorMessage;
        field.classList.add('is-invalid');
        return false;
      }
      
      // Field is valid
      field.classList.add('is-valid');
      return true;
    }

    // Validate all fields
    function validateAllFields() {
      let isValid = true;
      let firstInvalidField = null;
      
      Object.keys(validationRules).forEach(fieldId => {
        if (!validateField(fieldId)) {
          isValid = false;
          if (!firstInvalidField) {
            firstInvalidField = document.getElementById(fieldId);
          }
        }
      });
      
      return { isValid, firstInvalidField };
    }

    // Reset validation states
    function resetValidation() {
      Object.keys(validationRules).forEach(fieldId => {
        const field = document.getElementById(fieldId);
        const rule = validationRules[fieldId];
        const errorElement = document.getElementById(rule.errorId);
        
        if (field) {
          field.classList.remove('is-invalid', 'is-valid');
          field.value = '';
        }
        if (errorElement) {
          errorElement.textContent = '';
        }
      });
    }

    // Initialize validation when modal opens
    document.getElementById('donationModal').addEventListener('shown.bs.modal', function() {
      setupRealTimeValidation();
      // Set focus to first field
      setTimeout(() => {
        document.getElementById('amount')?.focus();
      }, 300);
    });

    // Reset validation when modal closes
    document.getElementById('donationModal').addEventListener('hidden.bs.modal', function() {
      resetValidation();
    });

    // Override form submission with validation
    document.getElementById('donationForm').addEventListener('submit', function(e) {
      e.preventDefault();
      
      const validationResult = validateAllFields();
      
      if (!validationResult.isValid) {
        // Scroll to first error
        if (validationResult.firstInvalidField) {
          validationResult.firstInvalidField.scrollIntoView({ 
            behavior: 'smooth', 
            block: 'center' 
          });
          validationResult.firstInvalidField.focus();
        }
        
        // Show alert message
        showAlert('Please correct the errors in the form before submitting.', 'danger');
        return false;
      }
      
      // All validations passed - submit the form via AJAX
      submitDonationForm(this);
    });

    // AJAX form submission
    function submitDonationForm(form) {
      const submitBtn = document.getElementById('submitBtn');
      const originalText = submitBtn.innerHTML;
      
      // Disable submit button and show loading
      submitBtn.disabled = true;
      submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Processing...';
      
      const formData = new FormData(form);
      
      fetch(form.action, {
        method: 'POST',
        body: formData
      })
      .then(response => response.json())
      .then(data => {
        if (data.status === 'success') {
          // Hide donation modal
          const donationModal = bootstrap.Modal.getInstance(document.getElementById('donationModal'));
          donationModal.hide();
          
          // Show success modal
          setTimeout(() => {
            const successModal = new bootstrap.Modal(document.getElementById('donationSuccess'));
            successModal.show();
            
            // Handle success modal close
            document.getElementById('donationRedirectBtn').onclick = function() {
              if (data.redirect) {
                window.location.href = data.redirect;
              }
              successModal.hide();
            };
          }, 300);
        } else {
          // Show error message
          showAlert(data.message || 'Donation failed. Please try again.', 'danger');
          // Highlight the specific error field if provided
          if (data.field) {
            const field = document.getElementById(data.field);
            if (field) {
              field.classList.add('is-invalid');
              const errorElement = document.getElementById('error' + data.field);
              if (errorElement) {
                errorElement.textContent = data.message;
              }
              field.scrollIntoView({ behavior: 'smooth', block: 'center' });
              field.focus();
            }
          }
        }
      })
      .catch(error => {
        console.error('Error:', error);
        showAlert('An error occurred. Please try again later.', 'danger');
      })
      .finally(() => {
        // Re-enable submit button
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalText;
      });
    }

    // Show alert message
    function showAlert(message, type) {
      // Remove existing alerts
      const existingAlert = document.querySelector('.custom-alert');
      if (existingAlert) existingAlert.remove();
      
      // Create alert element
      const alert = document.createElement('div');
      alert.className = `custom-alert alert alert-${type} alert-dismissible fade show position-fixed`;
      alert.style.cssText = 'top: 20px; right: 20px; z-index: 9999; max-width: 400px;';
      alert.innerHTML = `
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      `;
      
      document.body.appendChild(alert);
      
      // Auto remove after 5 seconds
      setTimeout(() => {
        if (alert.parentNode) {
          alert.remove();
        }
      }, 5000);
    }

    // Initialize validation on page load
    document.addEventListener('DOMContentLoaded', function() {
      setupRealTimeValidation();
    });

    // ============================================
    // OTHER FUNCTIONALITIES
    // ============================================

    // Set cause ID when donate button is clicked
    function setCauseId(causeId) {
      document.getElementById('cause_id').value = causeId;
    }

    // Share cause functionality
    function shareCause(url, title, imgurl) {
      if (navigator.share) {
        navigator.share({
          title: title,
          text: `Check out this cause: ${title}`,
          url: url
        }).then(() => {
          console.log('Successfully shared');
        }).catch((error) => {
          console.error('Error sharing:', error);
        });
      } else {
        const encodedUrl = encodeURIComponent(url);
        const encodedTitle = encodeURIComponent(`Check out this cause: ${title}`);
        const encodedImage = encodeURIComponent(imgurl);

        const whatsappUrl = `https://api.whatsapp.com/send?text=${encodedTitle}%20${encodedUrl}%20${encodedImage}`;
        const facebookUrl = `https://www.facebook.com/sharer/sharer.php?u=${encodedUrl}&quote=${encodedTitle}`;
        const pinterestUrl = `https://pinterest.com/pin/create/button/?url=${encodedUrl}&media=${encodedImage}&description=${encodedTitle}`;

        const shareOptions = `
          <div class="share-options p-3">
            <h6>Share via:</h6>
            <a href="${whatsappUrl}" target="_blank" class="btn btn-success btn-sm mb-2 w-100">
              <i class="bi bi-whatsapp"></i> WhatsApp
            </a>
            <a href="${facebookUrl}" target="_blank" class="btn btn-primary btn-sm mb-2 w-100">
              <i class="bi bi-facebook"></i> Facebook
            </a>
            <a href="${pinterestUrl}" target="_blank" class="btn btn-danger btn-sm mb-2 w-100">
              <i class="bi bi-pinterest"></i> Pinterest
            </a>
          </div>
        `;

        showAlert(shareOptions, 'info');
      }
    }

    // Open donation modal
    function openDonationModal() {
      var donationModal = new bootstrap.Modal(document.getElementById('donationModal'));
      donationModal.show();
    }

    // UPI copy functionality
    function copyUPI() {
      const upiText = document.getElementById('upiText').textContent;
      navigator.clipboard.writeText(upiText).then(() => {
        showAlert('UPI ID copied to clipboard!', 'success');
      });
    }

    // Handle donate button clicks
    document.addEventListener('click', function(e) {
      // Donate button click
      if (e.target.closest('.donate-btn')) {
        e.preventDefault();
        const button = e.target.closest('.donate-btn');
        const causeId = button.getAttribute('data-cause-id');
        const isRunForCause = button.getAttribute('data-is-runforcause');
        
        // Update modal title based on is_runforcause
        const modalTitle = document.getElementById('donationModalTitle');
        if (modalTitle) {
          modalTitle.textContent = isRunForCause === 'yes' ? 'Support for Our Run' : 'Support Our Cause';
        }

        setCauseId(causeId);
        openDonationModal();
      }
      
      // Share button click
      if (e.target.closest('.share-btn')) {
        e.preventDefault();
        const button = e.target.closest('.share-btn');
        const url = button.getAttribute('data-url');
        const title = button.getAttribute('data-title');
        const image = button.getAttribute('data-image');
        shareCause(url, title, image);
      }
      
      // Copy UPI button click
      if (e.target.closest('.copy-icon')) {
        e.preventDefault();
        copyUPI();
      }
    });

    // Login redirect
    document.getElementById('loginRedirectBtn')?.addEventListener('click', function() {
      const baseUrl = "<?= base_url('/login') ?>";
      const currentUrl = window.location.href;
      window.location.href = `${baseUrl}?returnUrl=${encodeURIComponent(currentUrl)}`;
    });

    // Counter animation
    document.addEventListener('DOMContentLoaded', () => {
      const counters = document.querySelectorAll('.count-up');

      const animateCounter = (el) => {
        if (el.dataset.done === "1") return;

        const target = parseInt(el.dataset.target || 0);
        const prefix = el.dataset.prefix || '';
        const suffix = el.dataset.suffix || '';
        const duration = 2000;
        const startTime = performance.now();

        function update(currentTime) {
          const elapsed = currentTime - startTime;
          const progress = Math.min(elapsed / duration, 1);
          const value = Math.floor(progress * target);
          el.textContent = prefix + value.toLocaleString('en-IN') + suffix;

          if (progress < 1) {
            requestAnimationFrame(update);
          }
        }

        el.dataset.done = "1";
        requestAnimationFrame(update);
      };

      // Run once when visible
      const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            animateCounter(entry.target);
          }
        });
      }, { threshold: 0.5 });

      counters.forEach(counter => observer.observe(counter));
    });

    // Video steps functionality
    const video = document.getElementById('stepVideo');
    const videoSource = video.querySelector('source');
    const stepItems = document.querySelectorAll('.step-item');
    const playPauseBtn = document.getElementById('playPauseBtn');
    const playPauseIcon = playPauseBtn.querySelector('i');
    const progressBar = document.getElementById('progressBar');

    const baseUrl = "assets/video/";
    const videoSources = {
      1: baseUrl + 'Help Website 1.mp4',
      2: baseUrl + 'Help Website 2.mp4',
      3: baseUrl + 'Help Website 3.mp4'
    };

    let currentStep = 1;
    const totalSteps = 3;

    function updateProgressBar() {
      if (!video.paused && !video.ended && video.duration) {
        const progress = (video.currentTime / video.duration) * 100;
        progressBar.style.width = `${progress}%`;
      }
      requestAnimationFrame(updateProgressBar);
    }

    function updateStep(step) {
      currentStep = step;

      stepItems.forEach(item => {
        item.classList.remove('active');
      });

      const activeItem = document.querySelector(`.step-item[data-step="${step}"]`);
      if (activeItem) {
        activeItem.classList.add('active');
      }

      video.pause();
      videoSource.src = videoSources[step];
      progressBar.style.width = '0%';
      video.load();

      video.onloadedmetadata = () => {
        video.play().catch(err => console.error("Autoplay failed:", err));
        playPauseIcon.className = 'bi bi-pause-fill';
      };
    }

    requestAnimationFrame(updateProgressBar);

    video.addEventListener('ended', () => {
      const nextStep = currentStep >= totalSteps ? 1 : currentStep + 1;
      updateStep(nextStep);
    });

    playPauseBtn.addEventListener('click', () => {
      if (video.paused) {
        video.play();
        playPauseIcon.className = 'bi bi-pause-fill';
      } else {
        video.pause();
        playPauseIcon.className = 'bi bi-play-fill';
      }
    });

    stepItems.forEach(item => {
      item.addEventListener('click', () => {
        const step = parseInt(item.dataset.step);
        updateStep(step);
      });
    });

    updateStep(currentStep);

    // Footer AJAX load
    $.ajax({
      type: "get",
      url: "kanavuhelp/getFooter",
      success: (result) => {
        document.getElementById("footer").innerHTML = result;
      },
      error: (error) => {
        document.getElementById("footer").innerHTML = "";
      }
    });

    // Active nav link highlighting
    document.addEventListener('DOMContentLoaded', function() {
      const currentUrl = window.location.href;
      const navLinks = document.querySelectorAll('.nav-link');
      
      navLinks.forEach(link => {
        if (link.href === currentUrl) {
          navLinks.forEach(l => l.classList.remove('active'));
          link.classList.add('active');
        }
      });
      
      if (currentUrl.includes('/kanavuhome#how-it-works-section')) {
        navLinks.forEach(l => l.classList.remove('active'));
        document.getElementById('kanavuhomepage')?.classList.add('active');
      }
    });

  </script>

</body>
</html>