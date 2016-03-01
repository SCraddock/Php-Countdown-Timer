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
						
						<!-- - - -   - - -  - - - - - - - - - - - - Countdown timer ---------------------------->
						<?php
						//============================== This GETs the date and time from the previous page ==
						$inputdate = $_GET['date'];
						$inputtime = $_GET['time'];
						//===========================This combies the Date and Time given by the user =========================================================
						$longdate = date("Y-m-d" ,strtotime($inputdate));
						$date = date("Y-m-d" ,  strtotime($inputdate)). "-" .date("H:i:s", strtotime($inputtime));
						$unixtime = date("Y-m-d\ H:i:s", strtotime("$inputdate"."$inputtime") + "3600");
						//===== These two (up and down) Both do the dame thing ===========================================
						// $formatted = $inputdate.' '.$inputtime;
						//=================================================================================================
						//========= This works out the difference of days betweent the input date and today and displays it
						$datetime1 = new DateTime($unixtime);
						$datetime2 = new DateTime(date());
						$interval = $datetime1->diff($datetime2);
						//=========== This removes 1 hour from the time given as the Timestamps and GMT are different
						$dateentered1 = date( "Y-m-d\ H:i:s",strtotime("$unixtime") - "3600");
						//===============================================================================================
						?>
						<p> Unix Timestamp countdown <br></p>
							<p>	<span class="green"> <?php echo $dateentered1 ?></span> (GMT) This is the time you entered </p>
								<p>There are <br>
									<span class="green"> <?php echo $interval->format('%a days')?></span>  remaining and<br> <!-- Displays difference in days -->
										<span class="green"> <?php echo $interval->format('%h hours ') ?></span>  remaining and<br> <!-- Displays difference in hours -->
											<span class="green"> <?php echo $interval->format('%i minutes')?></span> remaining and<br> <!-- Displays difference in minutes -->
												<span class="green"> <?php echo $interval->format('%s Seconds') ?></span>  remaining until your inputted time.<br><br> <!-- Displays difference in seconds -->
													<span class="green"> <?php echo $dateentered1 ?></span>
												</p>

			</body>
</html>
