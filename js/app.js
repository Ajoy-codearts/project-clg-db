
//hambar
function show_nav_menu(){
    var item = document.getElementById('nav_menu_inner');
     item.classList.toggle('nav_menu_inner_active');
   }
   function close_nav_menu(){
     var item = document.getElementById('nav_menu_inner');
     item.classList.remove('nav_menu_inner_active');
   }
  
  


//find a doctor 

function arrange(){
    var search_item = document.getElementById('search_box').value.toUpperCase();

    var mytable =document.getElementById('doc_list');
    var row = mytable.getElementsByTagName('tr');
    for(let i=0;i<row.length;i++){
        let col1= row[i].getElementsByTagName('td')[0];
        if(col1){
            let txtVal = col1.textContent || col1.innerHTML;
            if(txtVal.toUpperCase().indexOf(search_item) > -1 ){
                row[i].style.display = "";
            }
            else{
                row[i].style.display = "none";
            }
        }
    }
    
}

