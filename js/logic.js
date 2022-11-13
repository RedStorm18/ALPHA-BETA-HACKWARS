

var counter;
var death;

window.onload = function(){
    ShuffleDeck();
    StartGame();
}


let effect = ["F1","F2","F3","F4","F5","F6","F7","R1","R2","R3","R4","R5","R6","R7","R8","R9","R10","R11","R12","R13","R14","R15"];
let char= ["C1","C2","C3","C4","E1","E2","E3","E4"];
let deck = [];
let hand = [];
let active = 0;
let bench = [];
let toggle = true;

function ShuffleDeck(){
    for(let i=0; i < effect.length; i++){
        let j = Math.floor(Math.random() * effect.length);
        let temp = effect[i];
        effect[i] = effect[j];
        effect[j] = temp;
    }
    for(let i=0; i < char.length; i++){
        let j = Math.floor(Math.random() * char.length);
        let temp = char[i];
        char[i] = char[j];
        char[j] = temp;
    }
}

function StartGame(){
    let a = effect.length;
    let b = char.length;
    let x = Math.floor(Math.random() * 2);
    let y = 0;
    if (x == 0){
       y = 1;
    }
    else{
        y = 2;
    }
    for(let i = 0; i<y; i++){
        let cardImg = document.createElement("img");
        let card = char.pop();
        hand.push(card);
        cardImg = "./images/" + card +".png";
        document.getElementById("hand").innerHTML +=
        "<img src= " + cardImg + " id = 'hand[" + i +"]'>";
        
    }
    let z = 5 - y;
    for(let i = 0; i<z; i++){
        let cardImg = document.createElement("img");
        let card = effect.pop();
        hand.push(card);
        cardImg = "./images/" + card +".png";
        document.getElementById("hand").innerHTML +=
        "<img src= " + cardImg + " id = 'hand[" + i +"]'>";
        }
        
    for(let q=0; q<a; q++) {
        deck.push(effect[q]);
    }
    for(let w=0; w<b; w++) {
        deck.push(char[w]);
    }

    for(let i=0; i < deck.length; i++){
        let j = Math.floor(Math.random() * deck.length);
        let temp = deck[i];
        deck[i] = deck[j];
        deck[j] = temp;
    }
    

    for(let i=0; i < 5; i++){
        if(hand[i].charAt(0) == "C" || hand[i].charAt(0) == "E"){
            if(active == 0){
        document.getElementById("cards").innerHTML +=
        "<button type='button' class='buts1' id=" + i +"A> BATTLE </button>";}
        document.getElementById("cards").innerHTML +=
        "<button type='button'  class='buts2'id=" + i +"B> BENCH </button>";}
        else{
            document.getElementById("cards").innerHTML +=
        "<button type='button' class='buts' id=" + i +"C> USE </button>";
        
        }
    }
    let battle = getElementById("0A");
    let bencha = document.querySelector(".buts2");

    battle.onclick() = function (){
        active = 1;
        let card = char.pop();
        img.src= "./images/" + card +".png";
        hand[0] = card;
    }
    
}


function myFunction(){
    toggle!= toggle;
    
}


function Buttons2(i){
    let a = i + "c";
    document.getElementById(a).onclick = function() {
        active.push(hand[i]);
        let x = "hand["+i+"]";
        let ids = hand[i];
        let card = char.pop();
        document.getElementById(x).innerHTML = text.replace(ids,card);
        hand[i] = card;
    };
    }

    