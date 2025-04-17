var names = ["Ben", "Joel", "Judy", "Anne"];
var scores = [88, 98, 77, 88];

var $ = function (id) { return document.getElementById(id); };



window.onload = function () {
	$("display_results").onclick = displayResults;
	$("display_scores").onclick = displayScores;
	$("add").onclick = addScore;
	$("name").focus();
};

function addScore() {
	var name = $("name").value.trim();
	var score = parseInt($("score").value);
    var nameRegex = /^[a-zA-Z\s]+$/;

    if (name === "" || !nameRegex.test(name) || isNaN(score) || score < 0 || score > 100) {
        alert("You must enter a valid name (letters only) or a valid score");
        return;
    }

	names.push(name);
	scores.push(score);

	$("name").value = "";
	$("score").value = "";
	$("name").focus();
}

function displayScores() {
	var table = $("scores_table");
	table.innerHTML = `
	<h2>Scores</h2>
        <tr>
            <th>Name</th>
            <th>Score</th>
        </tr>
    `;

	for (var i = 0; i < names.length; i++) {
		table.innerHTML += `
            <tr>
                <td>${names[i]}</td>
                <td>${scores[i]}</td>
            </tr>
        `;
	}
}

function displayResults() {
	if (scores.length === 0) {
		$("results").innerHTML = "<h2>Results</h2><p>No scores available.</p>";
		return;
	}

	var total = 0;
	var highest = scores[0];
	var temp = 0;
	for (i = 0; i < scores.length; i++) {
		total += scores[i];
		if (scores[i] > highest) {
			highest = scores[i];
			temp = i;
		}
	}

	var average = total / scores.length;

	$("results").innerHTML = `
        <h2>Results</h2>
        <p>Average score = ${average.toFixed(2)}</p>
        <p>Highest score = ${names[temp]} with a score of ${highest}</p>
    `;
}


