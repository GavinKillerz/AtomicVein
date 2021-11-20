
th = document.getElementsByTagName('th');

for(let c=0; c< th.length; c++){

    th[c].addEventListener('click',item(c))

}


function item(c){

    return function(){
        console.log(c)
        sortTable(c)

    }

}

function sortTable(c) {
    var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount=0;
    table = document.getElementById("statstable");
    switching = true;
    /*Make a loop that will continue until
    no switching has been done:*/
    dir = "asc";
    while (switching) {
      //start by saying: no switching is done:
      switching = false;
      rows = table.rows;
      /*Loop through all table rows (except the
      first, which contains table headers):*/
      for (i = 1; i < (rows.length - 1); i++) {
        //start by saying there should be no switching:
        shouldSwitch = false;
        /*Get the two elements you want to compare,
        one from current row and one from the next:*/
        x = rows[i].getElementsByTagName("td")[c];
        y = rows[i + 1].getElementsByTagName("td")[c];
        //check if the two rows should switch place:
        if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
      if (shouldSwitch) {
        /*If a switch has been marked, make the switch
        and mark that a switch has been done:*/
        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
        switching = true;
        switchcount ++;
      }else {
        /* If no switching has been done AND the direction is "asc",
        set the direction to "desc" and run the while loop again. */
        if (switchcount == 0 && dir == "asc") {
          dir = "desc";
          switching = true;
        }
      }
    }
  }