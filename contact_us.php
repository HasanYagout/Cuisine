<?php session_start() ?>

<!DOCTYPE html>
<html>
    <head>
<link rel="stylesheet" href="../Cuisine/stylesheet.css">
    </head>


    <body>
      <?php 
       if($_SESSION['type']==0)
       {
          echo"<div class='navbar' id='dropdownclick'>
          <ul class='first_ul'>
            
             <li class='navbar_links' ><a href='user_index.php'>home</a> </li>
             <li class='navbar_links' ><a href='#'>news</a> </li>
             <li class='navbar_links' ><a  href='#'>contact</a> </li>
             
           </ul>
           <img id='navbar_logo'src='logo.png'>
           <ul class='second_ul'>
              <li class='navbar_links' ><a href='#'>about</a> </li>
              <li class='navbar_links'><a href='../Cuisine/shop.php'>shop</a></li>
              <li class='dropdownicon'><a href='javascript:void(0);' onclick='list_button()'>&#9776;</a></li>
              <li class='account_icon' ><a href='../Cuisine/login.php' ><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-person' viewBox='0 0 16 16'>
               <path d='M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z'/>
             </svg></a></li>
             <li class='cart_icon'><a href='#'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-cart' viewBox='0 0 16 16'>
              <path d='M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
            </svg></a></li>
            <li><h1 class='name'>";echo $_SESSION['firstname']; echo"</h1></li>

           </ul>
        </div>
        ";
       }
       else if($_SESSION['type']==1){
        echo"<div class='navbar' id='dropdownclick'>
          <ul class='first_ul'>
            
             <li class='navbar_links' ><a href='admin_index.php'>home</a> </li>
             <li class='navbar_links' ><a href='#'>news</a> </li>
             <li class='navbar_links' ><a  href='../Cuisine/contact_us.php'>contact</a> </li>
             
           </ul>
           <img id='navbar_logo'src='logo.png'>
           <ul class='second_ul'>
              <li class='navbar_links' ><a href='#'>about</a> </li>
              <li class='navbar_links'><a href='../Cuisine/manage.php'>manage</a></li>
              <li class='dropdownicon'><a href='javascript:void(0);' onclick='list_button()'>&#9776;</a></li>
              <li class='account_icon' ><a href='../Cuisine/login.php' ><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-person' viewBox='0 0 16 16'>
               <path d='M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z'/>
             </svg></a></li>
             <li class='cart_icon'><a href='#'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-cart' viewBox='0 0 16 16'>
              <path d='M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
            </svg></a></li>
            <li><h1 class='name'>";echo $_SESSION['firstname']; echo"</h1></li>

           </ul>
        </div>
        ";
       }
      
      ?>
        <!-- <div class="navbar" id="dropdownclick">
            <img id="navbar_logo_responsive" src="logo.png">
              <ul class="first_ul">
                 
                 <li class="navbar_links" ><a href="admin_index.html">home</a> </li>
                 <li class="navbar_links" ><a href="#">news</a> </li>
                 <li class="navbar_links" ><a  href="#">contact</a> </li>
               </ul>
               <img id="navbar_logo"src="logo.png">
               <ul class="second_ul">
                  <li class="navbar_links" ><a href="#">about</a> </li>
                  <li class="navbar_links"><a href="../Cuisine/manage.php">manage</a></li>
                  <a class="dropdownicon" href="javascript:void(0);" onclick="list_button()">&#9776;</a>
                  <li class="account_icon" ><a id="accounticon" href="../Cuisine/login.php" ><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                   <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                 </svg></a></li>
                 <li class="cart_icon"><a href="#"><script src="https://cdn.lordicon.com/pzdvqjsp.js"></script>
                  <lord-icon
                      src="https://cdn.lordicon.com/cllunfud.json"
                      trigger="hover"
                      style="width:50px;height:50px">
                  </lord-icon></a></li>
               </ul>
            </div> -->

            <div class="banner">
                <div class="e" id="e">
                    <img src="../Cuisine/logo.png">
                    <div class="location">
                        <script src="https://cdn.lordicon.com/pzdvqjsp.js"></script>
                         <lord-icon
                         src="https://cdn.lordicon.com/fihkmkwt.json"
                            trigger="hover"
                            colors="primary:#121331,secondary:#BF8100"
                              state="hover-jump"
                             style="width:100px;height:100px">
                                </lord-icon>
                             <h2>Haddah ST, Sana'a, Yemen</h2>
                    </div>
                    <div class="phone">
                        

                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                            </svg>
                         
                            <a href="tel:779000918">779000918</a>
                        
                    </div>
                    <div class="email">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                          </svg>
                          <a href="mailto:someone@example.com">someone@example.com</a>
                    </div>
                </div>
                <div class="boxes reveal">
                    <div class="col-4">
                            <div class="box">
                                <h1>Follow Us on Facebook</h1>
                                <img src="./img/facebook.png">
                            </div>
                    </div>
                    <div class="col-4">
                            <div class="box">
                                <h1>Follow Us on Instagram</h1>
                                
                                  <img src="./img/instagram.png">
                            </div>
                    </div>
                    <div class="col-4">
                            <div class="box">
                                <h1>Follow Us on youtube</h1>
                               <img src="./img/youtube.png">
                            </div>
                    </div>
                </div>
            </div>
            <footer class="footer">






                <div class="footer_container">
                  <div class="row">
                    <div class="col-4 " id="links">
                     
                      <div class="location_div">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                          <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                          <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                        <h2>Haddah ST, Sana'a, Yemen</h2>
                      </div>
                      <div id="phone_div" >
          
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                        </svg>
                     
                        <a href="tel:779000918">779000918</a>
                    </div>
                
                     <div id="email_div" > 
                       <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                          <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                        </svg>
                        <p class="para2"><a href="mailto:someone@example.com">someone@example.com</a></p>
                     
                      </div>
                    </div>
          
          
          
                    <div class="col-4">
                      <h1>OVERVIEW</h1>
                      <div class="footer_links">
                       
                        <ul>
                          
                           <li><a href="index.html">home</a> </li>
                           <li><a href="#">news</a> </li>
                              <li><a href="#">contact</a> </li>
                              <li><a href="#">about</a> </li>
                           </ul>
                      </div>
                      
                    </div>
          
                    <div class="col-4">
                      <h1>MY ACCOUNT</h1>
                      <ul>
                        <li><a>My Account</a></li>
                        <li><a>Login/Register</a></li>
                        <li><a>Cart</a></li>
                      </ul>
                    </div>
                    
                  </div>
                 
                  
                </div>  
              
              
                  
              </footer>
          
<script type="text/javascript" >

window.addEventListener('scroll',reveal);
    function reveal()
    {
    var reveals=document.querySelectorAll('.reveal');
    for(var i=0;i<reveals.length;i++)
    {
      var windowheight=window.innerHeight;
      var revealtop=reveals[i].getBoundingClientRect().top;
      var revealpoint=150;
      if(revealtop<windowheight -revealpoint)
      {
        reveals[i].classList.add('active');
    
      }
      else{
        reveals[i].classList.remove('active');
      }
    }
    }

   

    
</script>

    </body>
    

</html>
    