var room = 1;

function education_fields() {

    room++;
    var objTo = document.getElementById('education_fields')
    var divtest = document.createElement("div");
    divtest.setAttribute("class", "form-group removeclass" + room);
    var rdiv = 'removeclass' + room;
    divtest.innerHTML = '<div class="form-group"><input type="file" class="form-control" name="gambar[]" style="min-height:55px;width:95%" id="exampleInputFile" aria-describedby="fileHelp">  <button style="height:50px;width:50px" class="btn btn-danger" type="button" onclick="remove_education_fields(' + room + ');"> <i class="fa fa-minus"></i> </button></div></div></div><div class="clear"></div></row>';

    objTo.appendChild(divtest)
}

function remove_education_fields(rid) {
    $('.removeclass' + rid).remove();
}
