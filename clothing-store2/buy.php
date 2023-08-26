<html>
<head>
<title> Prada Store </title>
	<link href="../clothing-store2/css/buy.css" type="text/css" rel="stylesheet" />

<h1> Sign Up For More Offers And Discount </h1>

<form id="form1">
    <div class="form-container">
      <div class="personal-information">
        <h1>Payment Information</h1>
      </div>
      
      <input id="input-field" type="text" name="streetaddress" required autocomplete="on" maxlength="45" placeholder="Street Address"/>
      <input id="column-left" type="text" name="city" required autocomplete="on" maxlength="20" placeholder="City"/>
      <input id="column-right" type="text" name="zipcode" required autocomplete="on" pattern="[0-9]*" maxlength="5" placeholder="ZIP code"/>
      <input id="input-field" type="email" name="email" required autocomplete="on" maxlength="40" placeholder="Email"/>
    
        <div class="card-wrapper"></div>
          <input id="column-left" type="text" name="first-name" placeholder="First Name"/>
          <input id="column-right" type="text" name="last-name" placeholder="last name"/>
          <input id="input-field" type="text" name="number" placeholder="Card Number"/>
          <input id="column-left" type="text" name="expiry" placeholder="MM / YY"/>
          
		  <input id="column-right" type="text" name="productcode" placeholder="Product Code"/>
		  <input id="column-right" type="number" name="contactnumber" placeholder="Contact Number"/>
          <input id="input-button" type="submit" value="Submit"/>
		  
  </form>
</div>
</body>
<script src="../clothing-store2/js/buy.js"> </script>

</html>