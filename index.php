<!DOCTYPE html>
<html lan="en">
	<head>
		<title>Javascript Events</title>
		<meta charset="utf-8"/>
	</head>

	<body>
		<h1>Javascript Events</h1>
		<h2>Examples</h2>
		<h3>On Click</h3>
		<div id="click"
			  onclick="document.getElementById('click').innerHTML = 'Thank you.';">
			Click Me
		</div>
		<h3>On Mouse Over and Mouse Out</h3>
		<div id="mouse"
			  onmouseover="document.getElementById('mouse').style.backgroundColor = 'red';"
			  onmouseout="document.getElementById('mouse').style.backgroundColor = 'blue';">
			Hover over me.
		</div>
		<h3>Bill Creator</h3>
		<figure>
			<img src="images/bill.jpg">
			<figcaption>Figure 1: Bill Murry</figcaption>
		</figure>
	</body>
</html>