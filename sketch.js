//variables
var xBall = Math.floor(Math.random() * 100) + 10;
var yBall = 20;
var xSpeed = (2, 7);
var ySpeed = (-7, -2);

var score = 0;

var W = screen.width - (screen.width / 23);
var H = screen.height - (screen.height / 4);

function setup() {
    // Crear el canvas
    let canvas = createCanvas(W, H);
    
    // Centrar el canvas
    canvas.style('display', 'block');
    canvas.parent('canvas-container');
    canvas.style('margin', '0 auto');
}


function draw() {
  background(84, 153, 233);
  
//score
  fill('white');
  textSize(24);
  text("score: " + score, 10, 25);
  
//paddle
  fill('#e882e8');
  rect(mouseX, H - 20, 90, 15);
  
    //Functions
  move();
  display();
  bounce();
  //resetBall();
  paddle();

  pelotaPiso();
  
//rebote en las paredes
  function bounce() {
    if (xBall < 10 ||
        xBall > W - 10){
      xSpeed *= -1;
    }
    if (yBall < 10 ||
        yBall > H - 10){
      ySpeed *= -1;
    }
  }
  
//crear la pelota
  function display(){
    fill('#674baf');
    ellipse(xBall, yBall, 20, 20);
  }
  
//movimiento de la pelota
  function move(){
    xBall += xSpeed;
    yBall += ySpeed;
  }
  
// Bounce of paddle
  function paddle(){
    if((xBall > mouseX && 
        xBall < mouseX + 90) &&
      (yBall + 10 >= H - 20)){
      xSpeed *= -1;
      ySpeed *= -1;
      score++;
    }
  }
  
//la pelota toca el piso
function pelotaPiso() {

    if(yBall + 11 >= H ){
        xSpeed *= -1;
        ySpeed *= -1;
        score = score - 1;
    }

}

}