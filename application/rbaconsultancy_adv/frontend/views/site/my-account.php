        
            
            <div class="top-nav">
                <ul>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./index.php?r=site%2Fabout">About</a></li>
                    <li><a href="./index.php?r=site%2Fservices">Services</a></li>
                    <li><a href="./index.php?r=site%2Fcontact">Contact</a></li>
                  <?php
                    echo "<li class=\"active\"><a href=\"./index.php?r=site%2Fmy-account\">My Account</a></li>" ;
                    echo "<li><a href=\"http://localhost/rbaconsultancy_adv/backend/web/index.php\" target=\"_blank\">Admin's Panel</a></li>" ;
                    echo "<li><a href=\"./index.php?r=site%2Flogout\">Logout, " . (Yii::$app->user->identity->username) . "</a></li>" ;
                  ?>                   
                </ul>
              </div>
   </div>
</div>   

            <link rel="stylesheet" type="text/css" href="css/sidebar.css" />
            <script src="js/sidebar.js"></script>

      <div class="about">
      <div class="wrap">
         <div class="top-head">
            <h3>My Account</h3>
            <ul>
               <li><a href="index.php">Home / </a></li>
               <li><a href="./index.php?r=site%2Fmy-account"><span>My Account</span></a></li>
            </ul>
         </div>

         <br>

         <div class="container">
            <div id='cssmenu'>
            <ul>
               <li><a href='#'>Account Information</a></li>
               <li class='has-sub'><a href='#'>My Visa Applications</a>
                  <ul>
                     <li><a href='#'>All</a></li>
                     <li><a href='#'>Pending</a></li>
                     <li><a href='#'>On-going</a></li>
                     <li><a href='#'>Cancelled/Denied</a></li>
                     <li><a href='#'>Completed</a></li>
                  </ul>
               </li>
            </ul>
            </div>
         </div>

         <br>
      </div>
      </div>

 
