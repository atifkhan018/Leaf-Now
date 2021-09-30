<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<link rel = "stylesheet" type = "text/css" href = "roses.css">
<title>Rose Plant</title>
</head>
<body>



<head>
      <title>Product Name : Roses</title>
   </head>
   <h1>Product Name : Roses</h1>
	<h4>Product id : 09</h4>
	
   <body>
      <table border = "1">
         <tr>
            <td>Roses are delicate flowers and each of them contains a special message within. That is why we have curated this special bunch of Roses that has 2 White, 2 Yellow, 3 Pink and 3 Red Roses that spells purity, friendship, love and humility in the best way</h4>
 <h4>Product Contains:
 3 Red Roses
             2 Yellow Roses
            2 white Roses
            3 Pink Rose</td>
 
            
 <td></h4>
 
 
 
 
 
            </td>
         </tr>
         
      </table>
      
   </body>


<br>
<input type="hidden" name="mode" value="PinRequest" /> 
<label class="w3-text-green"><b>Choose price</b></label>
<select name="tot_pin_requested" onchange="calculateAmount(this.value)" required>
		<option value="" disabled selected>Choose your option</option>
		<option value="800">800</option>
		<option value="840">840</option>
		<option value="860">860</option>
</select>
<label><b>Total Amount after tax</b></label>
<input class="w3-input w3-border" name="tot_amount" id="tot_amount" type="text" readonly>
<script>
function calculateAmount(val)
{ 
	var price = val * 1;
	/*display the result*/
	var tot_price=price+(price*0.18);
	var divobj = document.getElementById('tot_amount');
	divobj.value = tot_price;
}
</script>



<H2><button onclick="document.location='orderplacing.php'">Place order</button> </H2>



</body>
</html>