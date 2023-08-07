// Get the search box
 const searchBar = document.querySelector(".users .search input");
// Get the search button
 const searchBtn = document.querySelector(".users .search button");

// When the search button is clicked, toggle serach bar
 searchBtn.onclick = ()=>{
    
    searchBar.classList.toggle("active");
    
    searchBar.focus();  // Focus on search bar

    searchBtn.classList.toggle("active");
 }


