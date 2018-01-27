<html>
<head>
	<title>Queueing System</title>
	 <link rel="stylesheet" type="text/css" href="style-form.css">
</head>

<body>
	<!--Sample Code-->
	 <div id='container'>
		<div class="header">
				<h2 align="center">Queueing System of Notre Dame of Dadiangas University</h2>
			</div>
	<form name="queue" action="index.php">
            
            <input type="text" name="id" placeholder="Enter Your ID Number.."/><br>
            <br>
            
            <input type="button" value=" 1 " onclick="queue.id.value += '1'" />
            <input type="button" value=" 2 " onclick="queue.id.value += '2'" />
            <input type="button" value=" 3 " onclick="queue.id.value += '3'" />
            <br/>
            
            <input type="button" value=" 4 " onclick="queue.id.value += '4'" />
            <input type="button" value=" 5 " onclick="queue.id.value += '5'" />
            <input type="button" value=" 6 " onclick="queue.id.value += '6'" />

            </br>
          
            <input type="button" value=" 7 " onclick="queue.id.value += '7'" />
            <input type="button" value=" 8 " onclick="queue.id.value += '8'" />
            <input type="button" value=" 9 " onclick="queue.id.value += '9'" />
            </br>
        
            <input type="button" value=" Del " onclick="queue.id.value = ''" />
            <input type="button" value=" 0 " onclick="queue.id.value += '0'" />
             <input type="submit" value="Submit"/>
            </br>
  
    
          </form>







	</body>