var d=new Date();
var time=d.getHours(); 
if (time<10) {
  document.getElementById('demo').innerHTML=("Good morning!!!");
}
else if (time>10 && time<12) { 
  document.getElementById('demo').innerHTML=("Good Day!!!");
} 
else if (time>12 && time<15) { 
  document.getElementById('demo').innerHTML=("Good Afternoon!!!");
} 
else if (time>15 && time<19) { 
  document.getElementById('demo').innerHTML=("Good Evening!!!");
} 
else if (time>19 && time<23) { 
  document.getElementById('demo').innerHTML=("Good Night!!!");
} 