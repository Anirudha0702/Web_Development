var count =0;
function increment(){
    count++;
    document.getElementById("counter").innerText=count;
}
var welcome="Hi!Welcome to this portal";
var name="Rajdeep";
document.getElementById("welcome").innerText=welcome+" "+name+"!"+"👋";
function save(){
    document.getElementById("save_data").textContent+=count+" - "
    count=0;
    document.getElementById("counter").innerText=count;
}