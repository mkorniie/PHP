window.onload = function() {
	console.log(game);
	var windowW = 1500;
	var windowH = 1000;
	var dims = 10;
	var ship_size = game.players[0].Ship.w;
	var playerWindow = new Array();
	var playerShip = new Array();
	for (var i = 0; i < game.numPlayers; i++) {
		var j = i + 1;
		playerWindow.push(document.getElementById('pp' + j));
		playerShip.push(document.getElementById('ship' + j));
	}

	for (var i = 0; i < game.numPlayers; i++) {
		var j = i + 1;
		playerWindow.push(document.getElementById('pp' + j));
		playerShip[i].style.top = game.players[i].Ship.pos_y * dims
			+ 'px';
		playerShip[i].style.left = (game.players[i].Ship.pos_x * dims - (75*i))
			+ 'px';
	}
	var livePlayers = new Array();
	var liveIndex = 0;
	for (var i = 0; i < game.numPlayers; i++) {
		livePlayers.push(i);
	}
	console.log(livePlayers);
	var currentPlayer = 0;
	setTimeout(function () {
		alert("Player " + (currentPlayer + 1) + " turn");
	}, 100);


function collision(){
	var pl;
	var my_x = game.players[currentPlayer].Ship.pos_x * dims + (currentPlayer * 75);
	var my_y = game.players[currentPlayer].Ship.pos_y * dims;
	var th_x;
	var th_y;

	for (var i = 0; i < livePlayers.length; i++) {
		pl = livePlayers[i];
		if (pl != currentPlayer)
		{
			th_x = game.players[pl].Ship.pos_x * dims + (currentPlayer * 75);
			th_y = game.players[pl].Ship.pos_y * dims;
			if ((th_x <= my_x + 75) && (th_x >= my_x - 75))
				if ((th_y <= my_y + 40) && (th_y >= my_y - 40))
					return true;
		}
	}
	return false;
}

// Win Lose

function gameover(player) {
	if (playerShip[player].style.display !== "none") {
    	window.alert("Player " + (player + 1) + "Loses!");
		playerShip[player].style.visibility="hidden";
		// playerShip[player].style.display="none";
		game.players[currentPlayer].points = 0;
		playerWindow[currentPlayer].innerHTML = game.players[currentPlayer].points;
		var index = livePlayers.indexOf(player);
		console.log(index);
		livePlayers.splice(index, 1);

		if (livePlayers.length == 1)
		{
			window.alert("Player " + (player + 1) + "Wins!");
			window.location="https://www.youtube.com/watch?v=agboR7ezSLs";
		}
		liveIndex = (liveIndex + 1) % livePlayers.length;
		console.log(liveIndex);
		currentPlayer = livePlayers[liveIndex];
		alert("Player " + (currentPlayer + 1) + " turn");
		console.log(livePlayers);
    }
}

//MOVEMENT

document.onkeydown = function (e) {
    if (e.key == "ArrowLeft") //left arrow
    {
    	game.players[currentPlayer].Ship.pos_x -= 1;
		playerShip[currentPlayer].style.left = 
			game.players[currentPlayer].Ship.pos_x * dims + 'px';
		if ((game.players[currentPlayer].Ship.pos_x < 0) || (collision() == true))
		{
			gameover(currentPlayer);
			return;
		}
    }
    else if (e.key == "ArrowUp") //up arrow
    {
    	game.players[currentPlayer].Ship.pos_y -= 1;
    	playerShip[currentPlayer].style.top = 
			game.players[currentPlayer].Ship.pos_y * dims + 'px';
    	if ((game.players[currentPlayer].Ship.pos_y < 0) || (collision() == true))
		{
			gameover(currentPlayer);
			return;
		}
    }
    else if (e.key == "ArrowRight") //right arrow
    {
    	game.players[currentPlayer].Ship.pos_x += 1;
		playerShip[currentPlayer].style.left = 
			game.players[currentPlayer].Ship.pos_x * dims + 'px';
		if (((game.players[currentPlayer].Ship.pos_x * dims) > (windowW - 60))  || (collision() == true))
		{
			gameover(currentPlayer);
			return;
		}
    }
	else if (e.key == "ArrowDown") //down arrow
	{
		game.players[currentPlayer].Ship.pos_y += 1;
    	playerShip[currentPlayer].style.top = 
			game.players[currentPlayer].Ship.pos_y * dims + 'px';
		if (collision() == true)
    	if (((game.players[currentPlayer].Ship.pos_y * dims) > (windowH - 30)) || (collision() == true))
		{
			gameover(currentPlayer);
			return;
		}
	}
	else 
		return ;
	game.players[currentPlayer].points -= 1;
	playerWindow[currentPlayer].innerHTML = game.players[currentPlayer].points;
	if (game.players[currentPlayer].points == 0) {
		game.players[currentPlayer].points = 20;
		playerWindow[currentPlayer].innerHTML = game.players[currentPlayer].points;
		console.log(currentPlayer);
		liveIndex = (liveIndex + 1) % livePlayers.length;
		console.log(liveIndex);
		currentPlayer = livePlayers[liveIndex];
		alert("Player " + (currentPlayer + 1) + " turn");
		console.log(livePlayers);
	}	
};

};