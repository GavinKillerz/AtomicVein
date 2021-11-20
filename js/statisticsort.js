

//This is to add an event listener to the table header. And the eventlistener type is 'click' so it only responds to click. 
th = document.getElementsByTagName('th');

for(let c=0; c< th.length; c++){

    th[c].addEventListener('click',item(c))

}

//This function returns the eventlistener
function item(c){

    return function(){
        console.log(c)
        sortTable(c)

    }

}


//calling the sort table function to be compared starting here. 
function sortTable(c) {
    var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount=0;
    table = document.getElementById("statstable");
    switching = true;
    /*Make a loop that will continue until
    no switching has been done:*/
    dir = "asc";
    while (switching) {
      //while loop starts here. Default is NO SWITCHING. so when you load the page it wont run the script. 
      switching = false;
      rows = table.rows;
      /*While loop will through the table. The -1 is to ignore the first row which is the headers.*/
      for (i = 1; i < (rows.length - 1); i++) {
        shouldSwitch = false;
        /*First line is to get the element that will be compared. The second line is the second row that will be compared with the first, and so on.*/
        x = rows[i].getElementsByTagName("td")[c];
        y = rows[i + 1].getElementsByTagName("td")[c];
        //if statement only applies IF the 2 rows should swap places based on the MORE or LESS notations. > . <
        if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //IF the swap applies, then the loop will break. IF NOT it will move down. (This will return a true if the first one(x) is bigger than the second one(x). THIS IS FOR ASCENDING ORDER). 
          //ONCE THE LOOP BREAKS it will go down to the lower if
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          // FROM the top IF line if it comes down here then it will check through the IF case. (This will apply is the first one (x) is smaller than the second one(x). THIS IS FOR DESCENDING ORDER).
          //ONCE THE LOOP BREAKS it will go down to the lower if
          shouldSwitch = true;
          break;
        }
      }
    }
      if (shouldSwitch) {
        /*Once the above if breaks it will come down here which will change the value of switching to true and it will start the while loop again.*/
        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
        switching = true;
        switchcount ++;
      }else {
        /* If there has been no more switch done which is = 0 and the direction is asc then it will change the direction to desc and run through the while loop again. This applies to vice versa. */
        if (switchcount == 0 && dir == "asc") {
          dir = "desc";
          switching = true;
        }
      }
    }
  }