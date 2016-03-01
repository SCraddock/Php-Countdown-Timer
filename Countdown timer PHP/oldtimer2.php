<!DOCTYPE html >
<html>
				          <head>
									<title> Countdown timer</title>
									<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
									<!-- Refresh ever 1 second -->
								 <meta http-equiv="Refresh" content="1">
                  <style>
                  .green{color:green;}

                  h1{
                    font-size: 3em;
                    font-weight: bold;
                    font-family: Arial, Helvetica, sans-serif;
                  }
                  </style>
								   </head>
				          <body>
<!--------------------------------- Countdown timer ---------------------------->

<?php
$inputdate = $_GET['date'];
$inputtime = $_GET['time'];
echo "Inputted date --", $inputdate,"<br />" ;
echo "Inputted time --", $inputtime;
//================================================================================================
$longdate = date("Y-m-d" ,strtotime($inputdate));
$date = date("Y-m-d" ,  strtotime($inputdate)). "-" .date("H:i:s", strtotime($inputtime));
$unixtime = date("Y-m-d\ H:i:s", strtotime("$inputdate"."$inputtime") + "3600");
//===== These two (up and down) Both do the dame thing ===========================================

$formatted = $inputdate.' '.$inputtime;
//echo $formatted. '<br>';
//echo $unixtime. '<br>';
//=================================================================================================




//========= This works out the difference of days betweent the input date and today and displays it
$datetime1 = new DateTime($unixtime);
$datetime2 = new DateTime(date());
$interval = $datetime1->diff($datetime2);

$dateentered1 = date( "Y-m-d\ H:i:s",strtotime("$unixtime") - "3600");




 //echo $interval->format('%R%a days'); // displays the differnce in days
//===============================================================================================

//			$remaining = $result - time();

//  		$seconds_remaining = $remaining;
//			$mins_remaining =  floor($remaining / 60);
//			$hours_remaining = floor($mins_remaining / 60);
//			$days_remaining = floor($hours_remaining / 24);


	?>
<p> Unix Timestamp countdown <br></p>
<p> Bear in mind it is rounding up to the nearest interger on minutes so it will be 1min less due to seconds rounding up to the next minute</p>
<p>	<span class="green"> <?php echo $dateentered1 ?></span> (GMT) This is the time you entered </p>
<p>There are <br>
		<span class="green"> <?php echo $interval->format('%a days')?></span>  remaining and<br>
		<span class="green"> <?php echo $interval->format('%h hours ') ?></span>  remaining and<br>
		<span class="green"> <?php echo $interval->format('%i minutes')?></span> remaining and<br>
		<span class="green"> <?php echo $interval->format('%s Seconds') ?></span>  remaining until<br><br>

		<span class="green"> <?php echo $dateentered1 ?></span>
</p>


<br>





<!--

																			<?php
																			/*
																										                <br>
									                  	$date = strtotime("August 13, 2015 12:00:00PM")+"3600";
																		  	$date = $_GET['datestamp'];
									                  		$remaining = $date - time();
									                  		$timestamp = $date + "3600";  /*  date + 1hour for timezones
																				$dateentered = $date;

																				$seconds_remaining = $remaining;
																				$mins_remaining =  floor($remaining / 60);
									                  		$hours_remaining = floor($mins_remaining / 60);
																				$days_remaining = floor($hours_remaining / 24);


									                  ?>
									                <p> Unix Timestamp countdown <br></p>
																	<p> Bear in mind it is rounding up to the nearest interger on minutes so it will be 1min less due to seconds rounding up to the next minute</p>
									              <p>	<span class="green"> <?php echo gmdate("Y-m-d\_H:i:s\_Z", $dateentered)?></span> (UTC) This is the time you entered </p>
																  <p>There are <br>
									                		<span class="green"> <?php echo $days_remaining ?></span> days remaining until<br>
									                		<span class="green"> <?php echo $hours_remaining ?></span> hours remaining until<br>
									                		<span class="green"> <?php echo $mins_remaining ?></span> minutes remaining until<br>
									                		<span class="green"> <?php echo $seconds_remaining ?></span> seconds remaining until<br>
									                		<span class="green"> <?php echo gmdate("Y-m-d\_T_H:i:s\_Z", $timestamp)?></span>
									              	</p>
																	<p> If the date is 1hour ahead this is due to Epoch time being on UTC not GMT</p>

									                <br>

									<!-- <p> My updated timestamp now  should be in-sync with the live world due to adding the lost seconds (3611)</p> -->
									                <!-- <?php echo $date; ?> -->
																	<!-- <?php echo gmdate("Y-m-d\_T_H:i:s\_Z", $timestamp) ?> -->
									                <!--  <p> The target date in unix timestamp (without lost seconds or timezones)</p> -->
									              	<!--  <?php echo "1439400600"; ?> -->












			           </body>
</html>
