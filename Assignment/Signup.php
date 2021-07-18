
<?php
            
     include 'Controller/Temp.php';

?>


<html>
  <head>
	<title>Learner SignUp</title>
  </head>
  <body>
                 <form action="" method="post">
                	  <table align="center">
                             <tr>
                             	 <td  align="center">
								   <b>
								     <h2>SignUp</h2>
								   </b>
								 </td>
                             </tr>
                	  	     <tr>
                	  	     	 <td>
								   <b>Name</b>
								 </td>
                	  	     </tr>
							 <tr>
      	    	   	   <td>
                           <input type="text" placeholder="First Name" name="fname" value="<?php echo $fname; ?>" size="13" >-
                           <input type="text" placeholder="Last Name" name="lname" value="<?php echo $lname; ?>" size="16">
                       </td>
                       <td>
                            <span>
                                <?php echo $err_name;?>   
                            </span>
                        </td>
      	    	   </tr>
							 
							 </tr>
                	  	     <tr>
                	  	     	 <td>
								    <b>Email</b>
								</td>
                	  	     </tr>
							 <tr>
                	  	     	 <td>
                                    <input type="text" placeholder="Email" name="email" value="<?php echo $email; ?>" size="36">
                                 </td>
                                 <td>
                                    <span>
                                        <?php echo $err_email;?>    
                                    </span>
                                 </td> 
      	    	            </tr>
                	  	     
							  
							  
                           <tr>
                            <td><b>Address     : </b>
      	    	   	   	       <select name="Address">
      	    	   	   	   	       <option selected disabled>Address</option>
								  <?php
								  foreach($Address as $a)
								  {
								  	if($add == $a)
								  		echo "<option selected>$a</option>" ;
								  	else
								  		echo "<option>$a</option>";
								  }
								  ?>
      	    	   	   	        </select>
      	    	   	             </td>
						    
      	    	   	              <td>
                              	<span>
                              	   <?php echo $err_add;?>
                              	</span>
                            </td>  
                            </tr>
							
							<tr>
                               <td>
                                 <b>Postal Code</b>
                               </td>
                            </tr>

                            <tr>
                               <td>
                                 <input type="text" placeholder="PostalCode" size="36" name="pcode" value="<?php echo $pcode;?>">
                               </td>

                               <td>
                       	          <span>
                       	   	          <?php echo $err_pcode;?>
                       	           </span>
                               </td>
                           </tr>


                	  	     <tr>
                	  	     	 <td>
								    <b>Password</b>
								 </td>
                	  	     </tr>
							 <tr>
							 <td>
      	    	   	   	           <input type="Password" placeholder="Password" name="password" value="<?php echo $pass;?>"  size="36">
      	    	   	         </td>

      	    	   	          <td>
      	    	   	   	             <?php echo $err_pass;?>
      	    	   	          </td>
      	    	            </tr>
							 
							 <tr>
                	  	     	 <td>
								    <b>Confirm Password</b>
								 </td>
                	  	     </tr>
							 <td>
      	    	   	   	         <input type="Password" placeholder="Confirm Password" name="confirm_password" value="<?php echo $cpass;?>" size="36">
      	    	   	         </td>

      	    	   	         <td>
      	    	   	   	             <?php echo $err_cpass;?>
      	    	   	         </td>

							 
							
							 <tr>
							   <td>
							   <br><input type="checkbox" value="" <?php if(Service("")) echo "checked" ?> name="services[]"> I agree to the term of services<br><br>
							   </td>
							 
                              <td>
                              	<span>
                              	   <?php echo $err_services;?>
                              	</span>
                        </td>
							 </tr>
							 
                             <tr>
						     <td align="center"><input type="submit" value="SignUp" name="sign-up"></td><br>
					        </tr>
							 <tr>
                	  	     	<td> Do you have an account?<a href="Learner_login.php">Sign in </a></td>
                	  	     </tr>
							<?php echo $err_db;?>
                	  </table>
                </form>   	
   </body>
</html>