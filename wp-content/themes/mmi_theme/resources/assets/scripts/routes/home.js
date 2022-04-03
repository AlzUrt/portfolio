import fullpage from 'fullpage.js';

export default {
  init() {
    new fullpage('#fullpage', {
      navigation: true,
      anchors: ['section1', 'section2', 'section3'],
      sectionsColor:['#dc5455', '#f7f8f8', '#e1effa'],
   });

   let button = document.querySelector('.button');
   button.addEventListener('click',() => {
    var gravity = 0.5;
    var friction = 0.7;
    console.log('sheeesh');
    init(gravity,friction);
    });


   var canvas = document.querySelector('canvas');
   var c = canvas.getContext('2d');
   
   canvas.width = innerWidth;
   canvas.height = innerHeight;
   
   
   // Variables
   var mouse = {
     x: innerWidth / 2,
     y: innerHeight / 2, 
   };
   


   var colors = [
     '#2185C5',
     '#7ECEFD',
     '#FF7F66',

     '#f7f8f8',
     '#e1effa',
     '#4d4e5e',
   ];
   
   /*
   var gravity = 0.2;
   var friction = 0.7;
   */

   // Event Listeners
   addEventListener('mousemove', function(event) {
     mouse.x = event.clientX;
     mouse.y = event.clientY;
   });
   
   addEventListener('resize', function() {
     canvas.width = innerWidth;	
     canvas.height = innerHeight;
   init();
   });
   
   
   // Utility Functions
   function randomIntFromRange(min,max) {
     return Math.floor(Math.random() * (max - min + 1) + min);
   }
   
   function randomColor(colors) {
     return colors[Math.floor(Math.random() * colors.length)];
   }
   
   
   // Objects
   function Ball(x, y, dx, dy, radius, color, gravity , friction) {
     this.x = x;
     this.y = y;
     this.dx = dx;
     this.dy = dy;
     this.radius = radius;
     this.color = color;
   
     this.update = function() {
       if (this.y + this.radius + this.dy> canvas.height) {
         this.dy = -this.dy;
         this.dy = this.dy * friction;
         this.dx = this.dx * friction;
       } else {
         this.dy += gravity;
       }
   
       if (this.x + this.radius >= canvas.width || this.x - this.radius <= 0) {
         this.dx = -this.dx * friction;
       }
   
       this.x += this.dx;
       this.y += this.dy;
       this.draw();
     };
   
     this.draw = function() {
       c.beginPath();
       c.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false);	
       c.fillStyle = this.color;
       c.strokeStyle = this.color;
       c.fill();
       c.stroke();
       c.closePath();
     };
   }
   
   
   // Implementation
   var ballArray = [];
   
   function init(gravity,friction) {
     ballArray = [];
     for (let i = 0; i < 400; i++) {
       var radius = randomIntFromRange(20, 30);
       var x = randomIntFromRange(radius, canvas.width - radius);
       var y = randomIntFromRange(-canvas.height*2, -5000 - radius);
       var dx = randomIntFromRange(-3, 3)
       var dy = randomIntFromRange(-2, 2)
       ballArray.push(new Ball(x, y, dx, dy, radius, randomColor(colors), gravity , friction ));
     }
   }
   
   // Animation Loop
   function animate() {
     requestAnimationFrame(animate);
   
     c.clearRect(0, 0, canvas.width, canvas.height);
   
     for (let i = 0; i < ballArray.length; i++) {
       ballArray[i].update();
     }
   }
   
   init();
   animate();

  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
