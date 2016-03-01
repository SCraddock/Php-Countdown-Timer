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

								<div class="refresh">
																	<?php


									                  //	$date = strtotime("August 13, 2015 12:00:00PM"); // 3600
																		  	$date = $_GET['datestamp'];
									                  		$remaining = ($date - time()) - "3600";
									                  		$timestamp = $date  ;  /*  3600 date + 1hour for timezones  */
																				$dateentered = $date;

																				$seconds_remaining = $remaining;
																				$mins_remaining =  floor($remaining / 60);
									                  		$hours_remaining = floor($mins_remaining / 60);
																				$days_remaining = floor($hours_remaining / 24);


									                  ?>
									                <p> Unix Timestamp countdown <br></p>
																	<p> Bear in mind it is rounding up to the nearest interger on minutes so it will be 1min less due to seconds rounding up to the next minute</p>
									              <p>	<span class="green"> <?php echo gmdate("Y-m-d\ H:i:s", $dateentered)?></span> (UTC) This is the time you entered </p>
																  <p>There are <br>
									                		<span class="green"> <?php echo $days_remaining ?></span> days remaining or<br>
									                		<span class="green"> <?php echo $hours_remaining ?></span> hours remaining or<br>
									                		<span class="green"> <?php echo $mins_remaining ?></span> minutes remaining or<br>
									                		<span class="green"> <?php echo $seconds_remaining ?></span> seconds remaining or<br>
									                		<span class="green"> <?php echo gmdate("Y-m-d\ T H:i:s", $timestamp)?></span>
									              	</p>
																	<!-- <p> If the date is 1hour ahead this is due to Epoch time being on UTC not GMT</p> -->

									                <br>

									<!-- <p> My updated timestamp now  should be in-sync with the live world due to adding the lost seconds (3611)</p> -->
									                <!-- <?php echo $date; ?> -->
																	<!-- <?php echo gmdate("Y-m-d\_T_H:i:s\_Z", $timestamp) ?> -->
									                <!--  <p> The target date in unix timestamp (without lost seconds or timezones)</p> -->
									              	<!--  <?php echo "1439400600"; ?> -->




								</div>







			           </body>
</html>
