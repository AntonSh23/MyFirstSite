/**
 * Created by Notan on 13.09.2015.
 */
var position = 0, test, test_status, question, choice, choices, chA, chB, chC, chD, correct = 0;
var questions = [
    ["What is a 4 + 5", "4", "22", "11", "9", "D" ],
    ["What is the first char of alphabet?","A", "V", "C", "S", "A" ],
    ["What is a 11 * 5", "222", "333", "121", "55", "D" ],
    ["What is a 4 / 2", "21", "212", "2", "4", "C" ],
];

function _(x){
    return document.getElementById(x);
};

function renderQuestion(){
    test = _("test");
    _("test_status").innerHTML = "Question " + (position+1) + " of" + question.length;
    question = question[position][0];
    chA = question[position][1];
    chB = question[position][2];
    chC = question[position][3];
    chD = question[position][4];
    test.innerHTML = "<h3>" + question + "</h3>";
    test.innerHTML += "<input type='radio' name='choises value='A'>" + chA + "<br>";
    test.innerHTML += "<input type='radio' name='choises value='B'>" + chB + "<br>";
    test.innerHTML += "<input type='radio' name='choises value='C'>" + chC + "<br>";
    test.innerHTML += "<input type='radio' name='choises value='D'>" + chD + "<br><br>";
    test.innerHTML += "<button onclick='checkAnswer()'>Submit Answwer</button>";
};

function checkAnswer(){
    alert("sdasdsadsad");
}

window.addEventListener("load", renderQuestion, false);