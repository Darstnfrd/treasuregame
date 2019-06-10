<?php include('header.php'); ?>

<div class="container">
	

	<div id="board">
		<div id="ui" class="col-sm-12 col-md-12 col-lg-12">
		<h1>Treasure Game</h1>
			<label><img class="icon" src="lifeicon.png" alt="Life" height="35px" /><progress id="health" value="0" max="10"></progress></label><br/>
			<label id="score-div"><img class="icon" src="scoreicon.png" alt="Score" height="35px" /><p id="demo3">0</p></label>
			<p id="demo4"><strong>How to play:</strong></p>
			<ul id="rules">
				<li>Find as much Gold as you can by clicking on any of the blank squares before your Lifebar runs out!</li>
				<li>Look out for the clues provided after clicking on a square to find out how close you are to claiming Gold.</li>
			</ul>
			<button id="start-button" class="btn-block" onclick="initialise()">Start Game</button>
		</div>
				
		
	</div>
	
</div>

<?php include('footer.php'); ?>
