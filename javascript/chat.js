const form = document.querySelector(".typing-area"),
inputField = form.querySelector(".input-field"),
sendBtn = form.querySelector("button");

sendBtn.onclick = ()=>{
     //lets start Ajax
  let xhr = new XMLHttpRequest();//Creating the xml object
  xhr.open("POST","php/insert-chat.php",true);
  xhr.onload =()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status ===200){
           
        }
      }
  }
   //we have to send the form data through ajax to php 
   let formData = new FormData(form);//creating new formData object
  xhr.send(formData);//sending the form data to php
 
}