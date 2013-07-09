<!DOCTYPE html>
<html>
  <head>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
      
	  <link rel="stylesheet" type="text/css" href="../css/global.css">
	  <link rel="stylesheet" type="text/css" href="../css/login.css">
          <title>Register</title>
          
      <script>
      function check()
      {
    	  var x=document.regform.eid.value;
    	  var atpos=x.indexOf("@");
    	  var dotpos=x.lastIndexOf(".");
    	  if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
    	    {alert("Not a valid e-mail address");return false;}

    	  if(document.regform.fn.value=="")
    		  {alert("Enter first name");return false;}
    	  
    	  if(document.regform.ln.value=="")
    		  {alert("Enter last name");return false;}
    	  
    	  if(document.regform.eid.value=="")
    		  {alert("Enter email id");return false;}
    	  
    	  if(document.regform.pwd.value=="")
    		  {alert("Enter password");return false;}
    	  
    	  if(document.regform.pwd1.value=="")
		      {alert("Re-Enter password");return false;}
    	  
    	  if(document.regform.pwd.value!=document.regform.pwd1.value)
    		  {alert("Passwrod doesn't match.Re-enter");return false;}
    	  return true;
      }
      
      $(function() {  
          
    	  $( "#date" ).datepicker({ dateFormat: 'yy/mm/dd' });
    	              
        
        	    $("#sub").click(function() {

          					 var c=confirm("Do you really want to submit");
             						if(c==true)
       									 {
            									 alert("You pressed OK");
        								 }
           							  else
            							 {
           								      $(this).text("Thank You");
            							 }
        	});
      });
      
        
      $(document).ready(function() {
          $('#login p').click(function() {
               $('#login-form').slideToggle(300);
               $(this).toggleClass('close');
    });
 }); // end ready


      </script>    
          
         
  </head>


<body>
      <div id="page">
   
   <header>
   
       <div id="header">
       
            <div id="logo"><img src="../images/logo.png"/></div>
       
        <div id="nav-container">

					<div id="register">
						<a href="register.php">Register</a>
					</div>

					<nav id="login">
						<p>Login</p>
						<div id="login-form">
							<form action="login.php" method="post">
								<label for="name">Username:</label> <input type="text" name="fname" />

								<label for="password">Password:</label> <input type="password" name="upwd" /> 
								<input type="submit" value="Log In" />
							</form>
						</div>
					</nav>
					<!-- end of login nav -->

				</div><!-- end of nav-container div -->
       
           <div class="clear-both"></div> 
       </div><!-- end of header div -->

   </header>


   <section>
   
   <div id="section">
   
       <div id="menu">
       
                 <ul>
                    <li><a href="../index.php">Home</a></li>
       	            <li><a href="aboutus.html">About us</a></li>
                    <li><a href="news.html">News</a></li>
                    <li><a href="faqs.html">FAQs</a></li>
                    <li><a href="contacts.html">Contacts</a></li>
                </ul>
       
       </div><!-- end of menu div -->      
                   
                   
       <div id="content">
       
             <div id="form">
  <p style="font:normal 16px Verdana;color:red;">Fields marked with * are compulsory</p>
  <br>
     <form onSubmit="return check()" method="post" name="regform" action="enterdata.php">
          <table cellpadding="5" cellspacing="5" >
            <tr>
                <td>*First name</td>
                <td><input type="text" name="fn"/></td>
            </tr>
            
            <tr>
                <td>*Last name</td>
                <td><input type="text" name="ln"/></td>
            </tr>
           
            <tr>
                <td>Contact no.</td>
                <td><input type="text" name="cno"/></td>
            </tr>
            
            <tr>
                <td>DOB</td>
                <td><input type="text" id="date" name="date"/></td>
            </tr>
           
            <tr>
                <td>*Email id</td>
                <td><input type="text" name="eid"/></td>
            </tr>
          
            <tr>
               <td>*Password</td>
               <td><input type="password" name="pwd"/></td>
            </tr>
         
            <tr>
               <td>*Re-enter password</td>
               <td><input type="password" name="pwd1"/></td>
           </tr>
        
           <tr>
               <td>Country</td>
               <td><select name="country"><option value="India">India</option>
                           <option value="US">US</option>
                           <option value="UK">UK</option>
                           <option value="Austria">Austria</option>
                   </select>
               </td>
          </tr>
          
          <tr>
              <td><input type="submit" value="Submit" name="submit" id="sub"/></td>
              <td><input type="Reset" value="Reset" name="reset"/></td>
          </tr>
       
      </table>                 
         
    </form>
  </div>  <!-- end of form div -->  
  
                       
       </div><!-- end of content div -->
               
    </div><!-- end of section div -->
     
    </section>
     
    
    <footer>
      <div id="footer2">
          <div id="copy">&#169; Game changers. All rights reserved.</div>
             <div id="links">
              | <a href="../index.php">Home</a> | 
                <a href="aboutus.html">About us</a> | 
                <a href="news.html">News</a> | 
                <a href="faqs.html">FAQs</a> | 
                <a href="contacts.html">Contacts</a> |                
             </div> <!-- end of links div -->  
       </div><!-- End of footer2 div -->
    </footer>          
   
     
</div><!-- end of page div -->
    
</body>
</html>