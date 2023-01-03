function getData_StatusCall() {
    //var var_listStatusCall = $('#listStatusCall');
    console.log("run");
    var resourceListReasonStatus = "";
    var jsonText = JSON.stringify({ BulanNya: "7",TahunNya: "2022",JenisReport: "Performance",TypeReport: "Non Call",SkillAgent: "Telesales",UserName: "Telesales" });
    $.ajax({
        type: "POST",
        url: "http://localhost/brilifecc/apps/asmx/WS_QM_Wallboard.asmx/WS_DataWB2Monthly",
        data: jsonText,
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (data) {
            var json = JSON.parse(data.d);
            var i, x, resultSourceEscalation = "";
            console.log(json);
            /*var fileBusy = "img/icon/busy.png";
            var fileDone = "img/icon/checked.png";
            var fileNo = "img/icon/noanswer.png";
            var fileUn = "img/icon/unregistered.png";
            var fileWrong = "img/icon/call.png";
			var fileAnswer = "img/icon/answerunfollow.png";
            var gambarIconCallStatus = 0;*/
            
            for (i = 0; i < json.length; i++) {
                
                //alert();
                //alert(json[i].UserCreate);
               
                
                $('#valRatas').text(json[i].ratas_qa);
                /*json[i].quiz
                json[i].outgoing
                json[i].contacted_rate
                json[i].sales_volume
                json[i].revenue
                json[i].kehadiran
                json[i].lateness
                json[i].Score*/
                
            }
            
        },
        error: function (xmlHttpRequest, textStatus, errorThrown) {
            console.log(xmlHttpRequest.responseText);
            console.log(textStatus);
            console.log(errorThrown);
        }
    })
}