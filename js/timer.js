var timer;

var test = document.getElementById('test');

var a = 10;obr();
function obr() {
	document.getElementById('out').innerHTML = a;
	a--;
	if (a<-0){
		clearTimeout(timer);
		location.href = "index.php";
	}
	else {
	timer = setTimeout(obr, 1000);
	}
}