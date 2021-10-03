<?php
    session_start();
	include('./php/ChooseDifficulty.php');
?>
<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale-1.0">
		<link rel="stylesheet" type="text/css" href="./styles/quiz.css" />
		<link rel="stylesheet" type="text/css" href="./styles/navbar.css" />
		<link rel="stylesheet" type="text/css" href="./styles/popup_style.css" />
		<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>   <!--Profile Icon-->
		<script type="text/javascript" src="./scripts/quiz.js"></script>
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
		<script type="text/javascript">
			$(function(){
							$("#nav-placeholder").load("navbar.php");
						});
		</script>
	</head>
	<body>
	<!--NavBar-->
	<div id="nav-placeholder">
	</div>
	<!--Main-->
		<div class="row">
			<div class="col-2 col-s-3" >
				<div class="quizButtons">
                	</br>
					<button class="btn btn-white-reload btn-animation-1-reload" onClick="document.location.reload(true)" name="Reload" id="reload">Refresh</button></br>
					<?php
						if(isset($_SESSION["log_status"])) {
					?>
						<button class="btn btn-white btn-animation-1" onclick="easyButton()" name="Easy">Easy</button></br>
						<button  class="btn btn-white btn-animation-1" onclick="mediumButton()" name="Medium">Medium</button></br>
						<button  class="btn btn-white btn-animation-1" onclick="hardButton()" name="Hard">Hard</button></br>
					<?php
						}
					?>
                </div>
				<?php
  					$api_url = "https://v2.jokeapi.dev/joke/Any";
  					$joke = json_decode(file_get_contents($api_url));
				?>
				<div class="jokeBox">
  					<div>
    					<div class="JokeTitleText">Random Jokes</div>
							<div class="">
      							<div class="tag">Type: <?php echo $joke->category;?></div>
								<div>
									.............
								</div>
      							<?php if($joke->type=='single'){?>
        						<span><?php echo $joke->joke;?></span>
      							<?php } else {?>
        						<div class="joke">
          							<div class="setup">
            						<?php echo $joke->setup;?>
          							</div>
          							<div class="delivery">
            						<?php echo $joke->delivery;?>
          							</div>
        						</div>
      						<?php } ?>
    					</div>
  					</div>
				</div>
			
			</div>
			

			<div class="col-10 col-s-9">

				<!--Easy-->
				<div class="show" id="Easy">
					<!--Quiz 1-->
							<div id="quiz1" class="quiz">
								<p class="questionsText"><?php echo $row1["question"];?></p> 
								<br>
								<div class="container">        
									<input   type="radio" name="Questions1Q1" id="Questions1Q1Ans1" value="<?php echo $row1["ans1"];?>">
									<label class="radioButtonBefore" for="Questions1Q1Ans1"><?php echo $row1["ans1"];?></label>
							
									<input   type="radio" name="Questions1Q1" id="Questions1Q1Ans2" value="<?php echo $row1["ans2"];?>">
									<label class="radioButtonBefore" for="Questions1Q1Ans2"><?php echo $row1["ans2"];?> </label>
								
									<input   type="radio" name="Questions1Q1" id="Questions1Q1Ans3" value="<?php echo $row1["ans3"];?>">
									<label class="radioButtonBefore" for="Questions1Q1Ans3"><?php echo $row1["ans3"];?></label>
						
									<input  type="radio" name="Questions1Q1" id="Questions1Q1Ans4" value="<?php echo $row1["ans4"];?>">
									<label class="radioButtonBefore" for="Questions1Q1Ans4"><?php echo $row1["ans4"];?></label>

									<input class="hidden" type="text" id="correct_answerQ1" value="<?php echo $row1["correct_answer"];?>">
								</div>
							</div>

					
							<!--Quiz 2-->
							<?php $row2 = mysqli_fetch_array($result2) ?>
								<div id="quiz2" class="quiz">
									<p class="questionsText"><?php echo $row2["question"];?> </p> 
									<br>
									<div class="container">        
										<input type="radio" name="Questions2Q1_1" id="Questions2Q1Ans1_a" value="1">
										<label class="radioButtonBefore" for="Questions2Q1Ans1_a">True</label>
							
										<input type="radio" name="Questions2Q1_1" id="Questions2Q1Ans2_a" value="0">
										<label class="radioButtonBefore" for="Questions2Q1Ans2_a">False</label>

										<input class="hidden" type="text" id="answer_aQ1" value=<?php echo $row2["answer"];?>>
									
									</div>  
								</div>


								<?php $row2 = mysqli_fetch_array($result2) ?>
								<div id="quiz2" class="quiz">
									<p class="questionsText"><?php echo $row2["question"];?> </p> 
									<br>
									<div class="container">        
										<input type="radio" name="Questions2Q1_2" id="Questions2Q1Ans1_b" value="1">
										<label class="radioButtonBefore" for="Questions2Q1Ans1_b">True</label>
							
										<input type="radio" name="Questions2Q1_2" id="Questions2Q1Ans2_b" value="0">
										<label class="radioButtonBefore" for="Questions2Q1Ans2_b">False</label>

										<input class="hidden" type="text" id="answer_bQ1" value=<?php echo $row2["answer"];?>>
									
									</div>
								</div>
								

							<!--Quiz 3-->
											
							<div  id="quiz3" class="quiz">
								<p class="questionsText"><?php echo $row3["question"];?></p> 
								<br>							
								<div id="checkboxgroup1" class="gridBox">
									<input type="checkbox" name="check1Q1" id="check1_aQ1" value=<?php echo $row3["ans1"];?>><?php echo $row3["ans1"];?>
									<input type="checkbox" name="check1Q1" id="check1_bQ1" value=<?php echo $row3["ans2"];?>><?php echo $row3["ans2"];?>
									<input type="checkbox" name="check1Q1" id="check1_cQ1" value=<?php echo $row3["ans3"];?>><?php echo $row3["ans3"];?>
									<input type="checkbox" name="check1Q1" id="check1_dQ1" value=<?php echo $row3["ans4"];?>><?php echo $row3["ans4"];?>

									<input class="hidden" type="text" id="correct_ans1Q1" value=<?php echo $row3["correct_ans1"];?>>
									<input class="hidden" type="text" id="correct_ans2Q1" value=<?php echo $row3["correct_ans2"];?>>
									<input class="hidden" type="text" id="correct_ans3Q1" value=<?php echo $row3["correct_ans3"];?>>
									<input class="hidden" type="text" id="correct_ans4Q1" value=<?php echo $row3["correct_ans4"];?>>
								</div><br>
							</div>
	
									
							<!--Quiz 4-->
							<div  id="quiz4" class="quiz">
									
									<div id="color001">
										<p><?php echo $row4["question"];?> <input type="text" class="check003" id="inputQ1" size="20"/></p>
										<input class="hidden" type="text" id="answerQ1" value=<?php echo $row4["answer"];?>>
									</div>
									<br><br>
							</div>


							<button  class="btn btn-white-reload btn-animation-1-reload submitButton" onclick="checkScore1()">Submit</button></br>	

				</div><!-- Easy-->

				<!--Medium-->
				<div class="hidden" id="Medium">
					<!--Quiz 1-->
							<div id="quiz1" class="quiz">
								<p class="questionsText"><?php echo $row5["question"];?></p> 
								<br>
								<div class="container">        
									<input   type="radio" name="Questions1Q2" id="Questions1Q2Ans1" value="<?php echo $row5["ans1"];?>">
									<label class="radioButtonBefore" for="Questions1Q2Ans1"><?php echo $row5["ans1"];?></label>
							
									<input   type="radio" name="Questions1Q2" id="Questions1Q2Ans2" value="<?php echo $row5["ans2"];?>">
									<label class="radioButtonBefore" for="Questions1Q2Ans2"><?php echo $row5["ans2"];?> </label>
								
									<input   type="radio" name="Questions1Q2" id="Questions1Q2Ans3" value="<?php echo $row5["ans3"];?>">
									<label class="radioButtonBefore" for="Questions1Q2Ans3"><?php echo $row5["ans3"];?></label>
						
									<input  type="radio" name="Questions1Q2" id="Questions1Q2Ans4" value="<?php echo $row5["ans4"];?>">
									<label class="radioButtonBefore" for="Questions1Q2Ans4"><?php echo $row5["ans4"];?></label>

									<input class="hidden" type="text" id="correct_answerQ2" value="<?php echo $row5["correct_answer"];?>">
								</div>
							</div>

					
							<!--Quiz 2-->
							<?php $row6 = mysqli_fetch_array($result6) ?>
								<div id="quiz2" class="quiz">
									<p class="questionsText"><?php echo $row6["question"];?> </p> 
									<br>
									<div class="container">        
										<input type="radio" name="Questions2Q2_1" id="Questions2Q2Ans1_a" value="1">
										<label class="radioButtonBefore" for="Questions2Q2Ans1_a">True</label>
							
										<input type="radio" name="Questions2Q2_1" id="Questions2Q2Ans2_a" value="0">
										<label class="radioButtonBefore" for="Questions2Q2Ans2_a">False</label>

										<input class="hidden" type="text" id="answer_aQ2" value=<?php echo $row6["answer"];?>>
									
									</div>  
								</div>


								<?php $row6 = mysqli_fetch_array($result6) ?>
								<div id="quiz2" class="quiz">
									<p class="questionsText"><?php echo $row6["question"];?> </p> 
									<br>
									<div class="container">        
										<input type="radio" name="Questions2Q2_2" id="Questions2Q2Ans1_b" value="1">
										<label class="radioButtonBefore" for="Questions2Q2Ans1_b">True</label>
							
										<input type="radio" name="Questions2Q2_2" id="Questions2Q2Ans2_b" value="0">
										<label class="radioButtonBefore" for="Questions2Q2Ans2_b">False</label>

										<input class="hidden" type="text" id="answer_bQ2" value=<?php echo $row6["answer"];?>>
									
									</div>
								</div>
								

							<!--Quiz 3-->
											
							<div  id="quiz3" class="quiz">
								<p class="questionsText"><?php echo $row7["question"];?></p> 
								<br>							
								<div id="checkboxgroup2" class="gridBox">
									<input type="checkbox" name="check1Q2" id="check1_aQ2" value=<?php echo $row7["ans1"];?>><?php echo $row7["ans1"];?>
									<input type="checkbox" name="check1Q2" id="check1_bQ2" value=<?php echo $row7["ans2"];?>><?php echo $row7["ans2"];?>
									<input type="checkbox" name="check1Q2" id="check1_cQ2" value=<?php echo $row7["ans3"];?>><?php echo $row7["ans3"];?>
									<input type="checkbox" name="check1Q2" id="check1_dQ2" value=<?php echo $row7["ans4"];?>><?php echo $row7["ans4"];?>

									<input class="hidden" type="text" id="correct_ans1Q2" value=<?php echo $row7["correct_ans1"];?>>
									<input class="hidden" type="text" id="correct_ans2Q2" value=<?php echo $row7["correct_ans2"];?>>
									<input class="hidden" type="text" id="correct_ans3Q2" value=<?php echo $row7["correct_ans3"];?>>
									<input class="hidden" type="text" id="correct_ans4Q2" value=<?php echo $row7["correct_ans4"];?>>
								</div><br>
							</div>
	
									
							<!--Quiz 4-->
							<div  id="quiz4" class="quiz">
									
									<div id="color001">
										<p><?php echo $row8["question"];?> <input type="text" class="check003" id="inputQ2" size="20"/></p>
										<input class="hidden" type="text" id="answerQ2" value=<?php echo $row8["answer"];?>>
									</div>
									<br><br>
							</div>

							<button  class="btn btn-white-reload btn-animation-1-reload submitButton" onclick="checkScore2()">Submit</button></br>	

				</div> <!-- Medium -->
				<!--Hard-->
				<div class="hidden" id="Hard">
					<!--Quiz 1-->
							<div id="quiz1" class="quiz">
								<p class="questionsText"><?php echo $row9["question"];?></p> 
								<br>
								<div class="container">        
									<input   type="radio" name="Questions1Q3" id="Questions1Q3Ans1" value="<?php echo $row9["ans1"];?>">
									<label class="radioButtonBefore" for="Questions1Q3Ans1"><?php echo $row9["ans1"];?></label>
							
									<input   type="radio" name="Questions1Q3" id="Questions1Q3Ans2" value="<?php echo $row9["ans2"];?>">
									<label class="radioButtonBefore" for="Questions1Q3Ans2"><?php echo $row9["ans2"];?> </label>
								
									<input   type="radio" name="Questions1Q3" id="Questions1Q3Ans3" value="<?php echo $row9["ans3"];?>">
									<label class="radioButtonBefore" for="Questions1Q3Ans3"><?php echo $row9["ans3"];?></label>
						
									<input  type="radio" name="Questions1Q3" id="Questions1Q3Ans4" value="<?php echo $row9["ans4"];?>">
									<label class="radioButtonBefore" for="Questions1Q3Ans4"><?php echo $row9["ans4"];?></label>

									<input class="hidden" type="text" id="correct_answerQ3" value="<?php echo $row9["correct_answer"];?>">
								</div>
							</div>

					
							<!--Quiz 2-->
							<?php $row10 = mysqli_fetch_array($result10) ?>
								<div id="quiz2" class="quiz">
									<p class="questionsText"><?php echo $row10["question"];?> </p> 
									<br>
									<div class="container">        
										<input type="radio" name="Questions2Q3_1" id="Questions2Q3Ans1_a" value="1">
										<label class="radioButtonBefore" for="Questions2Q3Ans1_a">True</label>
							
										<input type="radio" name="Questions2Q3_1" id="Questions2Q3Ans2_a" value="0">
										<label class="radioButtonBefore" for="Questions2Q3Ans2_a">False</label>

										<input class="hidden" type="text" id="answer_aQ3" value=<?php echo $row10["answer"];?>>
									
									</div>  
								</div>


								<?php $row10 = mysqli_fetch_array($result10) ?>
								<div id="quiz2" class="quiz">
									<p class="questionsText"><?php echo $row10["question"];?> </p> 
									<br>
									<div class="container">        
										<input type="radio" name="Questions2Q3_2" id="Questions2Q3Ans1_b" value="1">
										<label class="radioButtonBefore" for="Questions2Q3Ans1_b">True</label>
							
										<input type="radio" name="Questions2Q3_2" id="Questions2Q3Ans2_b" value="0">
										<label class="radioButtonBefore" for="Questions2Q3Ans2_b">False</label>

										<input class="hidden" type="text" id="answer_bQ3" value=<?php echo $row10["answer"];?>>
									
									</div>
								</div>
								

							<!--Quiz 3-->
											
							<div  id="quiz3" class="quiz">
								<p class="questionsText"><?php echo $row11["question"];?></p> 
								<br>							
								<div id="checkboxgroup3" class="gridBox">
									<input type="checkbox" name="check1Q3" id="check1_aQ3" value=<?php echo $row11["ans1"];?>><?php echo $row11["ans1"];?>
									<input type="checkbox" name="check1Q3" id="check1_bQ3" value=<?php echo $row11["ans2"];?>><?php echo $row11["ans2"];?>
									<input type="checkbox" name="check1Q3" id="check1_cQ3" value=<?php echo $row11["ans3"];?>><?php echo $row11["ans3"];?>
									<input type="checkbox" name="check1Q3" id="check1_dQ3" value=<?php echo $row11["ans4"];?>><?php echo $row11["ans4"];?>

									<input class="hidden" type="text" id="correct_ans1Q3" value=<?php echo $row11["correct_ans1"];?>>
									<input class="hidden" type="text" id="correct_ans2Q3" value=<?php echo $row11["correct_ans2"];?>>
									<input class="hidden" type="text" id="correct_ans3Q3" value=<?php echo $row11["correct_ans3"];?>>
									<input class="hidden" type="text" id="correct_ans4Q3" value=<?php echo $row11["correct_ans4"];?>>
								</div><br>
							</div>
	
									
							<!--Quiz 4-->
							<div  id="quiz4" class="quiz">
									
									<div id="color001">
										<p><?php echo $row12["question"];?> <input type="text" class="check003" id="inputQ3" size="20"/></p>
										<input class="hidden" type="text" id="answerQ3" value=<?php echo $row12["answer"];?>>
									</div>
									<br><br>
							</div>

							<button  class="btn btn-white-reload btn-animation-1-reload submitButton" onclick="checkScore3()">Submit</button></br>	

				</div><!--Hard -->
			
				<!--Pop-up--->
				<div class="popup" id="popup-1">
					<div class="overlay"></div>
						<div class="content">
				
							<h1 class="title">Congratulations</h1>
				
							<p class="score"><b>Total Score:</b></p></br>
				
							<div class="scoreNumber">
								<h1 id="score"></h1>
							</div>

							<form action="./php/store_question.php" method="post">
								<input class="hidden" type="text" name="scoreText" id="scoreText" >
								<input class="hidden" type="text" name="difficultyText" id="difficultyText" >
								<input class="hidden" type="text" name="dateText" id="dateText" >
								
								<?php if(isset($_SESSION["log_status"])) {  ?>
									<button class="SaveAndClose btn btn-white btn-animation-1" type="submit" onclick="closePopup()" href="./php/logout.php">Save and Close</button>  
							<?php }
								else { ?>
										<button class="SaveAndClose btn btn-white btn-animation-1" formaction="" onclick="closePopup()">Close</button>
							<?php	} ?>
							</form>
					</div>
				</div>
			</div><!--col10-->
		</div><!--row-->
		<!--Footer--->
		<footer >
			<p>Made By Yash Sharma</p> 
		</footer>
		<script type="text/javascript">
			onlyOneCheckBox1()
		</script>
	</body>
</html>