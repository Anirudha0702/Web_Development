//getting the element by id
const canvas =document.getElementById("canvas1");
const ctx=canvas.getContext("2d");//this will create a 2d canvas

//console.log(ctx);

const canvas_width = canvas.width=600;
const canvas_height = canvas.height=600;

//creating new image
const playerImage=new Image();
playerImage.src ='shadow_dog.png';

//let x=0;

function animate(){
    //clearing canvas's old paint in each frame in animation
    ctx.clearRect(0,0,canvas_width,canvas_height);

    //drawing a rectangle
    //ctx.fillRect(50/*x*/,50,100,100);

    //x++;//making the animation moving

    //drawing an image, to crop and place at a specific location
    ctx.drawImage(playerImage,0,0,550,540,0,0,canvas_width,canvas_height);
    //basic sytax of it: ctx.drawImage(image,source_X,source_y,source_width,source_height,dest_X,dest_y,dest_width,dest_height)

    //request animation from the function we pass to it
    requestAnimationFrame(animate);
}

animate();