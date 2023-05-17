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

const spriteWidth=575;
const spriteHeight=523;

//for animation purpose
let gameFrame=0;
let staggerFrame=5;

const spriteAnimation=[];
const animationStates=[
    {
        name:'idle',
        frames:7,
    },
    {
        name:'jump',
        frames:7,
    },
    {
        name:'run',
        frames:7,
    },
    {
        name:'hop',
        frames:9,
    },
    {
        name:'play',
        frames:11,
    },
    {
        name:'fly',
        frames:5,
    },
    {
        name:'roll',
        frames:7,
    },
    {
        name:'hide',
        frames:7,
    },
    {
        name:'drift',
        frames:12,
    },
    {
        name:'laugh',
        frames:4,
    }
];
animationStates.forEach((state,index)=>{
    let frames={
        loc:[],
    }
    for(let i=0; i<state.frames; i++){
        let positionX=i*spriteWidth;
        let positionY=index*spriteHeight;
        frames.loc.push({x:positionX, y:positionY});
    }
    spriteAnimation[state.name] = frames;
});
console.log(spriteAnimation);

function animate(){
    //clearing canvas's old paint in each frame in animation
    ctx.clearRect(0,0,canvas_width,canvas_height);

    //drawing a rectangle
    //ctx.fillRect(50/*x*/,50,100,100);

    //x++;//making the animation moving

    let position=Math.floor(gameFrame/staggerFrame)%spriteAnimation["idle"].loc.legth;
    let frameX=spriteWidth*position;
    let frameY=spriteAnimation["idle"].loc[position].y;
    //drawing an image, to crop and place at a specific location
    ctx.drawImage(playerImage,frameX/*changing images in a row*/,frameY/*changing images in a coloumn*/,spriteWidth,spriteHeight,0,0,spriteWidth,spriteHeight);
    //basic sytax of it: ctx.drawImage(image,source_X,source_y,source_width,source_height,dest_X,dest_y,dest_width,dest_height)
    if( gameFrame % staggerFrame == 0 )/*slowing down the animation*/{
        if(frameX<6) frameX++;
        else frameX=0;
    }
    //frameY++;
    gameFrame++;
    //request animation from the function we pass to it
    requestAnimationFrame(animate);
}

animate();