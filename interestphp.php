<?php
    error_reporting(0);
    $principle = $_POST['principle'];
    $rate = $_POST['rate'];
    $time = $_POST['time'];
    
    
    if ($_POST['clear'])
    {
    $principle = "";
    $rate = "";
    $time = "";
    $display_results = "";
    }
    if ($_POST['compute']) 
    {
    $interest =($principle*$rate*$time)/100;
    $display_results = round($interest,2);
    }
    ?>
    <html>
    <head>
    <title> Simple Interest </title>
     <link rel="stylesheet" type="text/css" href="cal.css">
     </head>

    <form action = "" method = "POST">
     
    <body>

    <div class="form-box">
    <h5>INTEREST CALCULATOR</h5>
      
     <form>
     <div class="input-group">

    <label> Principle Amount</label> 
    <input type = text name = "principle" value = "<?php echo $principle;?>" size="10" autofocus>
     </div>
    
    
    <div class="input-group">
    <label>Rate of Interest</label>
    <input type = text name = "rate" value = "<?php echo $rate;?>" size="5">
    </div>
    
    
    <div class="input-group">
    <label>Time Period</label>
    <input type = text name = "time" value = "<?php echo $time;?>" size="10" >
    </div>
    
    
    <td> &nbsp; </td>
    
    
    <div class="input-group">
    <label>Interest Rate </label>
    <input type = text name = "solve_interest" value = "<?php echo $display_results;?>" size="12" readonly >
    </div>
    
    <td> &nbsp; </td>
    
    
    
    <div class="input-group">
    <input type = "submit" name="compute" value = "Compute Interest" title="Click here to compute for interest rate.">
    </div>

    <div class="input-group">
    <input type = "submit" name="clear" value = "Clear" title="Click here to clear text boxes.">
    </div>
   
    </form>
    </div>
    </body>
    </form>
    </html>
