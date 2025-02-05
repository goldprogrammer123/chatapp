const searchBar = document.querySelector(".users .search input"),
searchBtn = document.querySelector(".users .search button"),
usersList = document.querySelector(".users .users-list");


searchBtn.onclick = ()=>{
    searchBar.classList.toggle("active");
    searchBar.focus();
    searchBtn.classList.toggle("active");   
}

searchBar.onkeyup = ()=>{
  let searchTerm = searchBar.value;
  if(searchTerm != ""){
    searchBar .classList.add("active");
  }else{
    searchBar .classList.remove("active");
  }
  //lets start Ajax
  let xhr = new XMLHttpRequest();//Creating the xml object
  xhr.open("POST","php/search.php",true);
  xhr.onload =()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status ===200){
            let data = xhr.response;
            usersList.innerHTML = data;
        }
      }
  }
  xhr.setRequestHeader ("content-type", "application/x-www-form-urlencoded");
  xhr.send("searchTerm=" + searchTerm);
  
}





setInterval(()=>{
    //lets start Ajax
  let xhr = new XMLHttpRequest();//Creating the xml object
  xhr.open("GET","php/users.php",true);
  xhr.onload =()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status ===200){
            let data = xhr.response;
           if(!searchBar.classList.contains("active")){//if active active not contain in search bar then add this data
            usersList.innerHTML =data;
           }
        }
      }
  }
  xhr.send();
}, 500);//this function will run frequently after 500ms