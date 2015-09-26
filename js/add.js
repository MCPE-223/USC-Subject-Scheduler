 function addRow(btn) {
     var parentRow = btn.parentNode.parentNode;
     var table = parentRow.parentNode;
     var rowCount = table.rows.length;
     var row = table.insertRow(rowCount);
     var cell1 = row.insertCell(0);
     var element1 = document.createElement("input");
     element1.type = "text";
     cell1.appendChild(element1);
     var cell3 = row.insertCell(1);

 }