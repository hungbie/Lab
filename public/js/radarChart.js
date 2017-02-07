var canvas = document.getElementById("radarChart");
var ctx = canvas.getContext("2d");

//change these to variables
var score = [];
var maxScore = 100;
var length = maxScore; //max point

$('#detail tbody tr').each(function(){
     var currentRow = $(this);
     var currScore = (length/9) * parseFloat(currentRow.find("td:eq(1)").text());
     score.push(currScore);
});

//Radar chart outline
ctx.font = "15px Arial";
ctx.fillText("MC",150+ Math.cos(Math.PI/6)*length + 2,150-Math.sin(Math.PI/6)*length - 2);
ctx.fillText("TC",150 - 10,150-length - 2);
ctx.fillText("HW",150-Math.cos(Math.PI/6)*length -22,150-Math.sin(Math.PI/6)*length -2);
ctx.fillText("Bs",150-Math.cos(Math.PI/6)*length -22,150+Math.sin(Math.PI/6)*length +12);
ctx.fillText("KS",150 - 10, 150 + length + 15);
ctx.fillText("Ac",150+ Math.cos(Math.PI/6)*length + 2,150+Math.sin(Math.PI/6)*length + 2);
drawOutline(1);
drawOutline(0.75);
drawOutline(0.5);
drawOutline(0.25);
function drawOutline(scale){
     var length = maxScore * scale;
     drawLine(150,150,150+ Math.cos(Math.PI/6)*length,150-Math.sin(Math.PI/6)*length);
     drawLine(150,150,150,150-length);
     drawLine(150,150,150-Math.cos(Math.PI/6)*length,150-Math.sin(Math.PI/6)*length);
     drawLine(150,150,150- Math.cos(Math.PI/6)*length,150+Math.sin(Math.PI/6)*length);
     drawLine(150,150,150,150+length);
     drawLine(150,150,150+ Math.cos(Math.PI/6)*length,150+Math.sin(Math.PI/6)*length);
     drawLine(150+ Math.cos(Math.PI/6)*length,150-Math.sin(Math.PI/6)*length,150,150-length);
     drawLine(150,150-length,150-Math.cos(Math.PI/6)*length,150-Math.sin(Math.PI/6)*length);
     drawLine(150-Math.cos(Math.PI/6)*length,150-Math.sin(Math.PI/6)*length,150- Math.cos(Math.PI/6)*length,150+Math.sin(Math.PI/6)*length);
     drawLine(150- Math.cos(Math.PI/6)*length,150+Math.sin(Math.PI/6)*length,150,150+length);
     drawLine(150,150+length,150+ Math.cos(Math.PI/6)*length,150+Math.sin(Math.PI/6)*length);
     drawLine(150+ Math.cos(Math.PI/6)*length,150+Math.sin(Math.PI/6)*length,150+ Math.cos(Math.PI/6)*length,150-Math.sin(Math.PI/6)*length);
}
function drawLine(startX, startY, endX, endY) {
    ctx.moveTo(startX,startY);
    ctx.lineTo(endX,endY);
    ctx.stroke();
}

//Radar Chart info
ctx.fillStyle ='rgba(96,96,96,0.7)';
ctx.beginPath();
ctx.moveTo(150+ Math.cos(Math.PI/6)*score[0],150-Math.sin(Math.PI/6)*score[0]);
ctx.lineTo(150,150 - score[1]);
ctx.lineTo(150-Math.cos(Math.PI/6)*score[2],150-Math.sin(Math.PI/6)*score[2]);
ctx.lineTo(150- Math.cos(Math.PI/6)*score[3],150+Math.sin(Math.PI/6)*score[3]);
ctx.lineTo(150,150+score[4]);
ctx.lineTo(150+ Math.cos(Math.PI/6)*score[5],150+Math.sin(Math.PI/6)*score[5]);
ctx.closePath();
ctx.fill();
