<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>



 <body style="background-color:grey;">
<head>
      <title>Product Name:Royal Orchids</title>
   </head>
   <h1>Product Name:Royal Orchids</h1>
	<h4>Product id:04</h4>




 <body>
      <table border = "1">
         <tr>
            <td>   Although generally thought of as a tropical plant, orchids grow on every continent. From the Arctic Circle to the southernmost jungle (except Antarctica). They’re valued and thought of as beautiful across continents and cultures. Although generally thought of as a tropical plant, orchids grow on every continent.
    Purple orchids symbolize admiration, respect, dignity and royalty.
    </h4> 
 <h4>  10 Purple Orchids
     Brown Paper Wrapping
     Tied with Pink Raffia
    
 </td>


            </td>
         </tr>
         
      </table>
      
   </body>


<input type="hidden" name="mode" value="PinRequest" /> 
<label class="w3-text-green"><b>Choose price</b></label>
<select name="tot_pin_requested" onchange="calculateAmount(this.value)" required>
		<option value="" disabled selected>Choose your option</option>
		<option value="100">100</option>
		<option value="200">200</option>
		<option value="300">300</option>
		<option value="400">400</option>
		<option value="500">500</option>
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