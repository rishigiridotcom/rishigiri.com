function maketabledemo_notUse() {
  intxt = document.CreateTable.whattable.value;
  for (var i = 1; i <= 10; i++) {

    document.write("<tr>")
    document.write("<td>" + i + "</td>");

    for (var j = 2; j <= intxt; j++) {
      document.write("<td>" + i * j + "</td>");
    }
    document.write("<tr>")
  }
  document.write("</table>");
}

function createscript() {
  var intxt = document.CreateTable.CreateTableRows.value;
  var intxt1 = document.CreateTable.CreateTableColomns.value;
  var intxt2 = document.CreateTable.CreateTableBorder.value;
  var intxt3 = document.CreateTable.CreateTableCellPadding.value;
  var intxt4 = document.CreateTable.CreateTableCellSpacing.value;
  var intxt5 = document.CreateTable.CreateTableWidth.value;

  document.CreateTable.resulttable.value = ("<table width='" +
    intxt5 + "%'" + " border='" +
    intxt2 + "' " + "cellspacing='" +
    intxt4 + "'" + " cellpadding='" +
    intxt3 + "'" + ">\n");

  for (var i = 1; i <= intxt1; i++) {
    document.CreateTable.resulttable.value += ("<tr>\n")
    for (var j = 1; j <= intxt; j++) {
      document.CreateTable.resulttable.value += ("<td>""</td>\n")
    }
    document.CreateTable.resulttable.value += ("</tr>\n");
  }
}

function maketabledemo() {
  var iFrame = document.getElementById('demoCode');
  var iFrameBody;
  if (iFrame.contentDocument) {
    iFrameBody = iFrame.contentDocument.getElementsByTagName('body')[0];
  } else if (iFrame.contentWindow) {
    iFrameBody = iFrame.contentWindow.document.getElementsByTagName('body')[0];
  }
  iFrameBody.innerHTML = document.getElementById('code').value;
}

function uv(val) {
  document.getElementById('uVal').value = val;
}
