const searchBar = document.querySelector(".users .search input"),
searchIcon = document.querySelector(".users .search button"),
usersList = document.querySelector(".users .users_list");

searchIcon.onclick =  ()=>{
    searchBar.classList.toggle("active");
    searchBar.focus();
    searchIcon.classList.toggle("active");
}

searchBar.onkeyup = ()=>{
  let searchTerm = searchBar.value;
  if(searchTerm != ""){
    searchBar.classList.add("active")
  }else{
    searchBar.classList.remove("active")
    searchBar.value ="";
  }

  let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/search.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
            let data = xhr.response;
            usersList.innerHTML = data;
          }
      }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("searchTerm=" + searchTerm);
}


setInterval(()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "php/user.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
            let data = xhr.response;
            if(!searchBar.classList.contains("active")){  //if active active not contains in search  bar then add this list 
              usersList.innerHTML = data;
            }
          }
      }
    }
    xhr.send();
}, 500); //this function will run frequently after 500ms