/*function checkAnswer() {
    console.log(el);
    let answerInput = document.getElementById('answer');
    console.log(answerInput.value);
}

document.getElementById("answerbutton").addEventListener("click", checkAnswer(el));
document.getElementById("answer").addEventListener("keydown", checkAnswer(el));
*/


let buttonAnswer = document.getElementById('answerButton');
let scndclue = document.getElementById("secondClue");
let thrdclue = document.getElementById("thirdClue");
let fyraclue = document.getElementById("fourthClue");
let fiftclue = document.getElementById("fifthClue");
var counterxd = 1;
function swapPage2() {
    console.log("HejsanSvejsan");
    //location.replace('/words/game2');
    
}

buttonAnswer.addEventListener('click', () => {
    console.log("click");
    let answerInput = document.getElementById('answer');
    let rightAnswer = document.getElementById('rightAnswer');
    console.log(answerInput.value);
    if(answerInput.value == rightAnswer.textContent){
        console.log("Du gissade rätt");
        $("#youreRight").show();
        counterxd = 1;
        scndclue.style.display = "none";
        thrdclue.style.display = "none";
        fyraclue.style.display = "none";
        fiftclue.style.display = "none";
        console.log(counterxd);
        swapPage2();
        $("#youreWrong").hide();

    }else{
        console.log("Du gissade fel");
        console.log(answerInput.value);
        console.log(rightAnswer.textContent);
        $("#youreWrong").show();
        counterxd++;
        console.log(counterxd);
    }
    if(counterxd >= 2){
        scndclue.style.display = "block"
    }
    if(counterxd >= 3){
        thrdclue.style.display = "block"
    }
    if(counterxd >= 4){
        fyraclue.style.display = "block"
    }
    if(counterxd >= 5){
        fiftclue.style.display = "block"
    }
});