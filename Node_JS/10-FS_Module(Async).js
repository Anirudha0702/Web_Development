<<<<<<< HEAD
const { readFile, writeFile } =require('fs');

readFile('./content/first.txt',(err,result)=>{
=======
const { readfile, writefile } =require('fs');

readfile('./content/first.txt',(err,result)=>{
>>>>>>> origin/Web_Development
    if(err){
        console.log(err);
        return;
    }
    const first = result;
    readFile('./content/second.txt',(err,result)=>{
        if(err){
            console.log(err);
            return;
        }
        const second = result;
<<<<<<< HEAD
        writeFile('./content/result-async.txt',"Here is the result:"+first+second,(err,result)=>{
=======
        writeFile('./content/result-async.txt',"Here is the result"+first+second,(err,result)=>{
>>>>>>> origin/Web_Development
            if(err){
                console.log(err);
                return;
            }
            console.log(result);
        });

    })
})