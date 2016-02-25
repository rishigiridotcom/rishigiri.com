<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="js/bootstrap-datetimepicker.min.js"></script>
  
  <?php 
$inpt=array("f_name","l_name","email","c_no","car_select","date","time","from","to","remarks");
$err=  array();
$errs=NULL;
if(isset($_POST["Submit"]))
{
    foreach($inpt as $data)
{
        $ex=$_POST["$data"];
     if ( !preg_match( "/^[a-zA-Z0-9 @]*$/", $ex ) )
     {
     $err[]=$data;
     }
  else {
      
  }
  
}
 foreach($err as $data)
 {
     echo "'  '$data";
 }
}   
function geterr($err,$block)
{
 if(in_array($block, $err))
 {
     echo 'invalid input';
 }
}
?>
  
    </head>
    <body style="background-color:  #f7f7f7" >
        <div class="container">
            <div class="col-sm-2" id="left">
               
            </div>
            <div class="col-sm-8" id="center">
                <form class="form-group" method="post">
                  
                    
                    <span class="heading"><u><h3>Hire a Vichle </h3></u></span><br/><br/>
                       
        
                    
                        
                       <div class="col-sm-6"><label for="fname">First Name </label>
                           <input  type="name" name="f_name" class="form-control" id="fname" required="required" placeholder="First name" >
                           <div class="col-sm-6" id="error">
                                  <?php geterr($err,"f_name"); ?></div>
                       </div>
                       <div class="col-sm-6"><label for="lname">Last Name</label>
                       <input  type="name" name="l_name" class="form-control" id="lname" required="required" placeholder="Last name">
                       </div>
                    
                    <div class="col-sm-6" id="error">
                                  <?php geterr($err,"l_name"); ?>
                    </div>
                       
                       
                       <div class="col-sm-6"><label for="email">Email</label>
                           <input  type="email" name="email" class="form-control" id="email" required="required" placeholder="email">
                       </div>
                       
                       <div class="col-sm-6"><label for="contact">Contact Number</label>
                           <input  type="number" name="c_no" class="form-control" id="contact" required="required" placeholder="Contact Number">
                       </div>
                       
                        
                        
                        
                     
                    
                        <p><label for="car" class="l_car">Select your car</label>
                        
                   <span class="cars">
                        <input  type="radio"  class="c_type" name="car_select" value="Innova">Innova
                        <input  type="radio"  class="c_type" name="car_select" value="bolero">Bolero
                        <input  type="radio"  class="c_type" name="car_select" value="Ertiga">Ertiga
                        <input  type="radio"  class="c_type" name="car_select" value="Swift">Swift
                        <input  type="radio"  class="c_type" name="car_select" value="Swift dzire">Swift Dzire
                        <input  type="radio"  class="c_type" name="car_select" value="indica">Indica
                        <input  type="radio"  class="c_type" name="car_select" value="indica">Bus</span/><p>
                      
                   
                    
                    
                        
                    <div class="col-sm-6"><label for="date"> Date of journey </label>
                        <div id="datetimepicker" class="input-append date">
                            <input type="text" id="date" required="required" name="date" placeholder="DD/MM/YY" />
                            <span class="add-on" id="icon">
                                  
                               <i data-time-icon="icon-time" data-date-icon="icon-calendar" id="ic"></i>
                             
                            </span>
                        </div>
                    </div>
                        
                        
                    
                    <div class="col-sm-6"><label for="time">Time of Journey</label>
                       <div id="datetimepicker1" class="input-append time">
                          
                           <input type="time" id="time" required="required" name="time" placeholder="HH/MM/SS" >
                          <span class="add-on" id="icon" >
                               <i data-time-icon="icon-time" data-date-icon="icon-calendar" id="ic" ></i>
                           </span>
                          
                       </div>
                    </div>
                        
                        
                        
                    <div class="col-sm-6"><label for="from">pickup address</label>
                        <input  type="text" required="required" name="from" class="form-control" id="from" placeholder="From">
                    </div>
                        
                        <div class="col-sm-6" id="error">
                                  <?php geterr($err,"from"); ?>
                        </div>
                      
                        
                    <div class="col-sm-6"><label for="to">drop address</label>
                        <input required="required"  type="text" name="to" class="form-control" id="to" placeholder="To">    
                    </div>    
                    
                      
                         <div class="col-sm-6"><label for="landmark">Landmark</label>
                           <input  type="text" name="email" class="form-control" id="landmark" required="required" placeholder="landmark">
                       </div>
                        
                         <div class="col-sm-6"><label for="Distric">Distric</label>
                           <input  type="text" name="email" class="form-control" id="Distric" required="required" placeholder="distric">
                       </div>
        
                   <label for="rmks" class="rmks">Remarks</label>
                    <input type="textbox" name="remarks" class="form-control" id="rmks">
                    <div class="col-sm-4">
                   
                    </div>
                    <div class="col-sm-4">
                    <input  type="submit" name="Submit" id="S_btn" value="Submit" >
                    </div>
                    <div class="col-sm-4">
                   
                    </div>
                   
                </form>
            </div>
            <div class="col-sm-2"id="right">
            </div>
        </div>
        
        <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen"
     href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
    
     <script type="text/javascript"
     src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">
    </script> 
    <script type="text/javascript"
     src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
    </script>
    <script type="text/javascript">
      $('#datetimepicker').datetimepicker({
        pickTime: false
      });
      $('#datetimepicker1').datetimepicker({
        pickDate: false,pick12HourFormat: true
       
      });
    </script>
                        
                        
        
    </body>
</html>


