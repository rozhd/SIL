var textArray=['Design an interface for securely finding a roommate/apartment in your city.',
               'Design an interface that allows gym trainers to create a workout plan for their clients and track their progress.',
               'Design an interface for notes widget.']
function randomTask() {
    var value = textArray.shift(); //Get the first item from the array
    textArray.push(value); //Push it back for the cycle to repeat.
    document.getElementById("task_text").innerHTML=value + ' Don’t&nbsp;forget to&nbsp;upload your interface to&nbsp;your portfolio.';
    value = null();
}


var taskName='My Key Skills'
