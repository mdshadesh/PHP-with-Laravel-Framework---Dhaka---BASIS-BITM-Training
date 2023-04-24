var btn = document.getElementById('btn');
btn.onclick = function () {
   var firstName = document.getElementById('firstName').value;
   var lastName = document.getElementById('lastName').value;
   var fullName = firstName + ' ' + lastName;
   document.getElementById('fullName').value = fullName;
   document.getElementById('firstName').value = ' ';
   document.getElementById('lastName').value = ' ';
}

var btn1 = document.getElementById('btn1');
btn1.onclick = function () {
   var height = document.getElementById('height').value;
   var width = document.getElementById('width').value;
   var bgColor = document.getElementById('bgColor').value;

   var div = document.createElement('div');

   div.style.height =  height + 'px';
   div.style.width =  width + 'px';
   div.style.backgroundColor =  bgColor;

   document.getElementById('res').append(div);
};

// Watch Create


function myWatch() {

   var dateTime = new Date();
   var hour = dateTime.getHours();
   var minutes = dateTime.getMinutes();
   var seconds = dateTime.getSeconds();
   var result = hour + " : " + minutes + " : " + seconds;
   // console.log(result);
   document.getElementById('watch').innerText = result;
}
setInterval(myWatch, 1000);




   function test() {
      alert('Hello JavaScript');
   }
   // setInterval(test,3000);

   setTimeout(test, 3000);


