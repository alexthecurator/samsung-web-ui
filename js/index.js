var upBtn = document.getElementById('upBtn');
var dwnBtn = document.getElementById('dwnBtn');
var circle = document.getElementById('wheel');

var rotate = circle.style.transform;
var rotateSum;

upBtn.onclick = function() {  
	rotateSum = rotate + "rotate(-90deg)";
	circle.style.transform = rotateSum;
	rotate = rotateSum; 
}
dwnBtn.onclick = function() {  
	rotateSum = rotate + "rotate(90deg)";
	circle.style.transform = rotateSum;
	rotate = rotateSum; 
}