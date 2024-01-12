// const childname = document.querySelectorAll('childname')
// const child = ['ADAM', 'SARAH', 'JACK', 'SAM']

// $(document).ready(function(){
//     $("button").click(function(event){
//       $("span").text(event.timeStamp);
//     });
//   });
function captureTime(){
    // Get current time
    var currentTime = new Date().toLocaleString();
    //Update the text of the button element to show the capture time
    document.getElementById("time-button").innerHTML = "" + currentTime;
    //disable the button
    document.getElementById("time-button").disabled = true;
  }

  function captureTimeout(){
    let currentTime = new Date().toLocaleString();

    document.getElementById("timeout-button").innerHTML = "" + currentTime;
    //disable the button
    document.getElementById("timeout-button").disabled = true;
  }

  // examples of timestamps and formats for each function***********
// toString() gives you Fri Jul 02 2021 14:03:54 GMT+0100 (British Summer Time)
// toDateString() gives you Fri Jul 02 2021
// toLocaleString() gives you 7/2/2021, 2:05:07 PM
// toLocaleDateString() gives you 7/2/2021
// toGMTString() gives you Fri, 02 Jul 2021 13:06:02 GMT
// toUTCString() gives you Fri, 02 Jul 2021 13:06:28 GMT
// toISOString() gives you 2021-07-02T13:06:53.422Z
// Reference to our elements - graph
let percentage = document.getElementById('percent');
let counter = 0;

setInterval(() =>{
  if(counter == 100){
    clearInterval;
  }else{
  counter += 1;
  percent.innerHTML = `${counter}%`
}
},25);

