 <!DOCTYPE html>
<!-- code by webdevtrick ( https://webdevtrick.com) -->
<html>
	<head>
		<title>Simple Calculator In PHP | Webdevtrick.com</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<style>
		body {
		  background-color: #92a8d1;
		}
    </style>
	<body>
		
		<div class="container" style="margin-top: 50px">
		
			<?php
			$total="";
				// If the submit button has been pressed
				if(isset($_POST['submit']))
				{
					// Check number values
					if(is_numeric($_POST['number1']) && is_numeric($_POST['number2']))
					{
						// Calculate total
						if($_POST['operation'] == 'plus')
						{
							$total = $_POST['number1'] + $_POST['number2'];	
						}
						if($_POST['operation'] == 'minus')
						{
							$total = $_POST['number1'] - $_POST['number2'];	
						}
						if($_POST['operation'] == 'multiply')
						{
							$total = $_POST['number1'] * $_POST['number2'];	
						}
						if($_POST['operation'] == 'divide')
						{
							$total = $_POST['number1'] / $_POST['number2'];	
						}
						
						// Print total to the browser
						//echo "<h1>{$_POST['number1']} {$_POST['operation']} {$_POST['number2']} equals {$total}</h1>";
					
					} else {?>
						
						
						<id="result" value="<?php echo 'Numeric values are required';?>">
						<?php
					
					}
				}
			// end PHP. Code by webdevtrick.com
			?>
		    
		    <!-- Calculator form by webdevtrick.com -->
		    <form method="post" action="calculator.php">
			<div class="container">
			    <div class="row">
				   <div class="col-sm-4">
			            <h3> Enter Your First Number</h3>
			       </div>
				   <div class="col-sm-4">
		                <input name="number1" type="text" value="<?php echo $_POST['number1'];?>" />
				   </div><br>
				</div> 
               <div class="row">
                  <div class="col-sm-4">
                    </div>
                 <div class="col-sm-4">					
					<select name="operation" value="<?php echo $_POST['operation'];?>">
						<option value="plus">Plus</option>
						<option value="minus">Minus</option>
						<option value="multiply">Multiply</option>
						<option value="divide">Devide</option>
					</select>
				 </div>
				</div><br> 
				<div class="row">
				   <div class="col-sm-4">
			            <h3> Enter Your second Number</h3>
			       </div>
				   <div class="col-sm-4">
						<input name="number2" type="text" value="<?php echo $_POST['number2'];?>"  />		
					</div><br>
				</div>  
				<div class="row">
                  <div class="col-sm-4">
                    </div>
                   <div class="col-sm-4">	
		                <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
				   </div>
				   <div class="col-sm-4">
				       <h3>Result of  <?php echo $_POST['number1']." ".$_POST['operation']." ".$_POST['number2']." is";?></h3><input id="result" type="text" style="width:191px;" value="<?php if(isset( $num )||empty($total)){
							 echo 'Numeric values are required';}
						 else{
							 
						 echo $total;}?>"/>
				   </div>
				</div>
		    </form>
	    
		</div>
	
	</body>
</html>