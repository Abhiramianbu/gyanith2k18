$(document).ready(function (){
    /*******************TAbs customization**************** */
    $('#myTab').turbotabs({
        animation : 'ScrollUp',
        mode : 'vertical'
    }); 

    /*******************team profile display**************** */
    $(".teamid-btn").click(function(){
        $("#team-cont").slideToggle();
        $("#team1-mem-cont").css("display", "none");
        $("#team2-mem-cont").css("display", "none");
        $("#team3-mem-cont").css("display", "none");
    });
    
    $("#team1").hover(function(){
        $("#team1-mem-cont").css("display", "inline-block");
        $("#team2-mem-cont").css("display", "none");
        $("#team3-mem-cont").css("display", "none");
    });	
    
    $("#team2").hover(function(){
        $("#team1-mem-cont").css("display", "none");
        $("#team2-mem-cont").css("display", "inline-block");
        $("#team3-mem-cont").css("display", "none");
    });	
    
    $("#team3").hover(function(){
        $("#team1-mem-cont").css("display", "none");
        $("#team2-mem-cont").css("display", "none");
        $("#team3-mem-cont").css("display", "inline-block");
    });	

    /*****************Events registration**************** */
    $("#event").change(function() {
		if ($(this).val() != '1' && $(this).val() != '9' && $(this).val() != '12') {
            $("#eteamdd").css("display","block");
            $("#paymenttxt").css("display","block");
        }
        else{
            $("#eteamdd").css("display","none");
            $("#paymenttxt").css("display","none");
        }
    });
    /*******************Events team**************** */
    $("#deteam1").css("display","none");$("#deteam2").css("display","none");$("#deteam3").css("display","none");$("#deteam4").css("display","none");
    $("#btnteam1").click(function(){
        if($('#deteam2').is(':visible')){
            $("#deteam2").css("display","none");
        }
        if($('#deteam3').is(':visible')){
            $("#deteam3").css("display","none");
        }
        if($('#deteam4').is(':visible')){
            $("#deteam4").css("display","none");
            //$("#plus").show();
        }
        if($('#deteam1').is(':visible')){
            $("#deteam1").css("display","none");
        }
        else{
            $("#deteam1").css("display","block");
        }
    });
    $("#btnteam2").click(function(){
        if($('#deteam1').is(':visible')){
            $("#deteam1").css("display","none");
        }
        if($('#deteam3').is(':visible')){
            $("#deteam3").css("display","none");
        }
        if($('#deteam4').is(':visible')){
            $("#deteam4").css("display","none");
            //$("#plus").show();
        }
        if($('#deteam2').is(':visible')){
            $("#deteam2").css("display","none");
        }
        else{
            $("#deteam2").css("display","block");
        }
    });
    $("#btnteam3").click(function(){
        if($('#deteam1').is(':visible')){
            $("#deteam1").css("display","none");
        }
        if($('#deteam2').is(':visible')){
            $("#deteam2").css("display","none");
        }
        if($('#deteam4').is(':visible')){
            $("#deteam4").css("display","none");
            //$("#plus").show();
        }
        if($('#deteam3').is(':visible')){
            $("#deteam3").css("display","none");
        }
        else{
            $("#deteam3").css("display","block");
        }
    });
    $("#btnteam4").click(function(){
        if($('#deteam2').is(':visible')){
            $("#deteam2").css("display","none");
        }
        if($('#deteam3').is(':visible')){
            $("#deteam3").css("display","none");
        }
        if($('#deteam1').is(':visible')){
            $("#deteam1").css("display","none");
            //$("#plus").show();
        }
        if($('#deteam4').is(':visible')){
            $("#deteam4").css("display","none");
        }
        else{
            $("#deteam4").css("display","block");
        }
    });
    /*****************Workshop registration**************** */
    $("#workshop").change(function() {
		if ($(this).val() != '1' && $(this).val() != '5') {
            $("#wteamdd").css("display","block");
            
        }
        else{
            $("#wteamdd").css("display","none");
           
        }
    });

    /*******************Workshops team**************** */
    $("#dwteam1").css("display","none");$("#dwteam2").css("display","none");$("#dwteam3").css("display","none");$("#dwteam4").css("display","none");
    $("#wbtnteam1").click(function(){
        if($('#dwteam2').is(':visible')){
            $("#dwteam2").css("display","none");
        }
        if($('#dwteam3').is(':visible')){
            $("#dwteam3").css("display","none");
        }
        if($('#dwteam4').is(':visible')){
            $("#dwteam4").css("display","none");
            //$("#plus").show();
        }
        if($('#dwteam1').is(':visible')){
            $("#dwteam1").css("display","none");
        }
        else{
            $("#dwteam1").css("display","block");
        }
    });
    $("#wbtnteam2").click(function(){
        if($('#dwteam1').is(':visible')){
            $("#dwteam1").css("display","none");
        }
        if($('#dwteam3').is(':visible')){
            $("#dwteam3").css("display","none");
        }
        if($('#dwteam4').is(':visible')){
            $("#dwteam4").css("display","none");
            //$("#plus").show();
        }
        if($('#dwteam2').is(':visible')){
            $("#dwteam2").css("display","none");
        }
        else{
            $("#dwteam2").css("display","block");
        }
    });
    $("#wbtnteam3").click(function(){
        if($('#dwteam1').is(':visible')){
            $("#dwteam1").css("display","none");
        }
        if($('#dwteam2').is(':visible')){
            $("#dwteam2").css("display","none");
        }
        if($('#dwteam4').is(':visible')){
            $("#dwteam4").css("display","none");
            //$("#plus").show();
        }
        if($('#dwteam3').is(':visible')){
            $("#dwteam3").css("display","none");
        }
        else{
            $("#dwteam3").css("display","block");
        }
    });
    $("#wbtnteam4").click(function(){
        if($('#dwteam2').is(':visible')){
            $("#dwteam2").css("display","none");
        }
        if($('#dwteam3').is(':visible')){
            $("#dwteam3").css("display","none");
        }
        if($('#dwteam1').is(':visible')){
            $("#dwteam1").css("display","none");
            //$("#plus").show();
        }
        if($('#dwteam4').is(':visible')){
            $("#dwteam4").css("display","none");
        }
        else{
            $("#dwteam4").css("display","block");
        }
    });
    /******************************************************** */
    /***************validating for event registration******** */
    /******************************************************** */
    $("#regeve").validate({
        rules:
        {
            event:{
                  required:true
             },
        },
        messages:
        {
            event:{
                required:'Please select an event to register'
            },
        },
        submitHandler: submiteve
    });
    function submiteve(){
        var data=$("#regeve").serialize();
         $.ajax({
            type:'POST',
            url:'dbevents.php',
            data: data,
            beforeSend:function(){
                $("#evealert").html('');
                $("#submiteve").val("sending.....");
            },
            success: function(data){
                $("#submiteve").val("Submit");
                $("#evealert").html('');
                if(data.startsWith("Success"))
                {
                    //$("#regdevents").append("<br>");
                    $("#regdevents").append("<br> "+data.substring(8)+"<br> ");
                    //$("<br>"+data.substring(8)).appendTo('#regdevents');
                    $("#evealert").html('<span class="sucs">Successfully registered for '+data.substring(8)+'</span>');
                }
                else 
                {
                    $("#evealert").html(data);
                }
            }
         });
    }



    /******************************************************** */
    /***************validating for teamevents1*************** */
    /******************************************************** */
    $("#eveteamform1").validate({
        rules:
        {
            etnm1:{
                  required:true
             },
             emem11:{
                 required:true
             }
               
        },
        messages:
        {
            etnm1:{
                required:'Please enter your team name'
            },
            emem11:{
                required:'Atleast one member is needed to create a team'
            }
               
        },
        submitHandler: submitteamevents1
    });
    function submitteamevents1(){
        var data=$("#eveteamform1").serialize();
         $.ajax({
            type:'POST',
            url:'dbeveteam.php',
            data: data,
            beforeSend:function(){
                 $("#submiteveteam1").val("sending.....");
                 $("#tnmshow2").html('');
                 $("#terr1").html('');$("#terr2").html('');$("#terr3").html('');$("#terr4").html('');$("#terr5").html('');$("#terr6").html('');
            },
            success: function(data){
                $("#submiteveteam1").val("Submit");
                $("#terr1").html('');$("#terr2").html('');$("#terr3").html('');$("#terr4").html('');$("#terr5").html('');$("#terr6").html('');
                if(data.startsWith("g"))
                {
                    var num=data.substring(1,2);
                    if(num==1){$("#terr1").html("<div class='rdtxt'>GY-ID not valid</div>")}
                    if(num==2){$("#terr2").html("<div class='rdtxt'>GY-ID not valid</div>")}
                    if(num==3){$("#terr3").html("<div class='rdtxt'>GY-ID not valid</div>")}
                    if(num==4){$("#terr4").html("<div class='rdtxt'>GY-ID not valid</div>")}
                    if(num==5){$("#terr5").html("<div class='rdtxt'>GY-ID not valid</div>")}
                    if(num==6){$("#terr6").html("<div class='rdtxt'>GY-ID not valid</div>")}
                }
                else if(data.startsWith("f"))
                {
                    var num=data.substring(1,2);
                    if(num==1){$("#terr1").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                    if(num==2){$("#terr2").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                    if(num==3){$("#terr3").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                    if(num==4){$("#terr4").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                    if(num==5){$("#terr5").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                    if(num==6){$("#terr6").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                }
                else if(data.startsWith('success')){
                    $("#div1").hide();
                    var vind=data.indexOf('name');
                    $("#tnmshow1").html("<div class='label'>Successfully created team:&nbsp;&nbsp;<span class='tnote'> "+ data.substring(vind+5)+"</span></div>");	
                    $("#eteamdd").append($("<option></option>").val(data.substring(8,vind)).html(data.substring(vind+5)));	
                }
                else{
                    $("#tnmshow2").html("<div class='label'><span class='tnote'> "+ data+"</span></div>");
                }
            }
         });
    }

    /******************************************************** */
    /***************validating for teamevents2*************** */
    /******************************************************** */
    $("#eveteamform2").validate({
        rules:
        {
            etnm1:{
                  required:true
             },
             emem11:{
                 required:true
             }
               
        },
        messages:
        {
            etnm1:{
                required:'Please enter your team name'
            },
            emem11:{
                required:'Atleast one member is needed to create a team'
            }
               
        },
        submitHandler: submitteamevents2
    });
    function submitteamevents2(){
        var data=$("#eveteamform2").serialize();
         $.ajax({
            type:'POST',
            url:'dbeveteam.php',
            data: data,
            beforeSend:function(){
                 $("#submiteveteam2").val("sending.....");
                 $("#tnmshow2").html('');
                 $("#terr1").html('');$("#terr2").html('');$("#terr3").html('');$("#terr4").html('');$("#terr5").html('');$("#terr6").html('');
            },
            success: function(data){
                $("#submiteveteam2").val("Submit");
                $("#terr1").html('');$("#terr2").html('');$("#terr3").html('');$("#terr4").html('');$("#terr5").html('');$("#terr6").html('');
                if(data.startsWith("g"))
                {
                    var num=data.substring(1,2);
                    if(num==1){$("#terr1").html("<div class='rdtxt'>GY-ID not valid</div>")}
                    if(num==2){$("#terr2").html("<div class='rdtxt'>GY-ID not valid</div>")}
                    if(num==3){$("#terr3").html("<div class='rdtxt'>GY-ID not valid</div>")}
                    if(num==4){$("#terr4").html("<div class='rdtxt'>GY-ID not valid</div>")}
                    if(num==5){$("#terr5").html("<div class='rdtxt'>GY-ID not valid</div>")}
                    if(num==6){$("#terr6").html("<div class='rdtxt'>GY-ID not valid</div>")}
                }
                else if(data.startsWith("f"))
                {
                    var num=data.substring(1,2);
                    if(num==1){$("#terr1").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                    if(num==2){$("#terr2").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                    if(num==3){$("#terr3").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                    if(num==4){$("#terr4").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                    if(num==5){$("#terr5").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                    if(num==6){$("#terr6").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                }
                else if(data.startsWith('success')){
                    $("#div2").hide();
                    var vind=data.indexOf('name');
                    $("#tnmshow22").html("<div class='label'>Successfully created team:&nbsp;&nbsp;<span class='tnote'> "+ data.substring(vind+5)+"</span></div>");	
                    $("#eteamdd").append($("<option></option>").val(data.substring(8,vind)).html(data.substring(vind+5)));	
                }
                else{
                    $("#tnmshow2").html("<div class='label'><span class='tnote'> "+ data+"</span></div>");
                }
            }
         });
    }

    /******************************************************** */
    /***************validating for teamevents3*************** */
    /******************************************************** */
    $("#eveteamform3").validate({
        rules:
        {
            etnm1:{
                  required:true
             },
             emem11:{
                 required:true
             }
               
        },
        messages:
        {
            etnm1:{
                required:'Please enter your team name'
            },
            emem11:{
                required:'Atleast one member is needed to create a team'
            }
               
        },
        submitHandler: submitteamevents3
    });
    function submitteamevents3(){
        var data=$("#eveteamform3").serialize();
         $.ajax({
            type:'POST',
            url:'dbeveteam.php',
            data: data,
            beforeSend:function(){
                 $("#submiteveteam3").val("sending.....");
                 $("#tnmshow2").html('');
                 $("#terr1").html('');$("#terr2").html('');$("#terr3").html('');$("#terr4").html('');$("#terr5").html('');$("#terr6").html('');
            },
            success: function(data){
                $("#submiteveteam3").val("Submit");
                $("#terr1").html('');$("#terr2").html('');$("#terr3").html('');$("#terr4").html('');$("#terr5").html('');$("#terr6").html('');
                if(data.startsWith("g"))
                {
                    var num=data.substring(1,2);
                    if(num==1){$("#terr1").html("<div class='rdtxt'>GY-ID not valid</div>")}
                    if(num==2){$("#terr2").html("<div class='rdtxt'>GY-ID not valid</div>")}
                    if(num==3){$("#terr3").html("<div class='rdtxt'>GY-ID not valid</div>")}
                    if(num==4){$("#terr4").html("<div class='rdtxt'>GY-ID not valid</div>")}
                    if(num==5){$("#terr5").html("<div class='rdtxt'>GY-ID not valid</div>")}
                    if(num==6){$("#terr6").html("<div class='rdtxt'>GY-ID not valid</div>")}
                }
                else if(data.startsWith("f"))
                {
                    var num=data.substring(1,2);
                    if(num==1){$("#terr1").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                    if(num==2){$("#terr2").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                    if(num==3){$("#terr3").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                    if(num==4){$("#terr4").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                    if(num==5){$("#terr5").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                    if(num==6){$("#terr6").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                }
                else if(data.startsWith('success')){
                    $("#div3").hide();
                    var vind=data.indexOf('name');
                    $("#tnmshow3").html("<div class='label'>Successfully created team:&nbsp;&nbsp;<span class='tnote'> "+ data.substring(vind+5)+"</span></div>");	
                    $("#eteamdd").append($("<option></option>").val(data.substring(8,vind)).html(data.substring(vind+5)));	
                }
                else{
                    $("#tnmshow2").html("<div class='label'><span class='tnote'> "+ data+"</span></div>");
                }
            }
         });
    }    

    /******************************************************** */
    /***************validating for teamevents4*************** */
    /******************************************************** */
    $("#eveteamform4").validate({
        rules:
        {
            etnm1:{
                  required:true
             },
             emem11:{
                 required:true
             }
               
        },
        messages:
        {
            etnm1:{
                required:'Please enter your team name'
            },
            emem11:{
                required:'Atleast one member is needed to create a team'
            }
               
        },
        submitHandler: submitteamevents4
    });
    function submitteamevents4(){
        var data=$("#eveteamform4").serialize();
         $.ajax({
            type:'POST',
            url:'dbeveteam.php',
            data: data,
            beforeSend:function(){
                 $("#submiteveteam4").val("sending.....");
                 $("#tnmshow2").html('');
                 $("#terr1").html('');$("#terr2").html('');$("#terr3").html('');$("#terr4").html('');$("#terr5").html('');$("#terr6").html('');
            },
            success: function(data){
                
                $("#submiteveteam4").val("Submit");
                $("#terr1").html('');$("#terr2").html('');$("#terr3").html('');$("#terr4").html('');$("#terr5").html('');$("#terr6").html('');
                if(data.startsWith("g"))
                {
                    var num=data.substring(1,2);
                    if(num==1){$("#terr1").html("<div class='rdtxt'>GY-ID not valid</div>")}
                    if(num==2){$("#terr2").html("<div class='rdtxt'>GY-ID not valid</div>")}
                    if(num==3){$("#terr3").html("<div class='rdtxt'>GY-ID not valid</div>")}
                    if(num==4){$("#terr4").html("<div class='rdtxt'>GY-ID not valid</div>")}
                    if(num==5){$("#terr5").html("<div class='rdtxt'>GY-ID not valid</div>")}
                    if(num==6){$("#terr6").html("<div class='rdtxt'>GY-ID not valid</div>")}
                }
                else if(data.startsWith("f"))
                {
                    var num=data.substring(1,2);
                    if(num==1){$("#terr1").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                    if(num==2){$("#terr2").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                    if(num==3){$("#terr3").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                    if(num==4){$("#terr4").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                    if(num==5){$("#terr5").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                    if(num==6){$("#terr6").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                }
                else if(data.startsWith('success')){
                    $("#div4").hide();
                    var vind=data.indexOf('name');
                    $("#tnmshow4").html("<div class='label'>Successfully created team:&nbsp;&nbsp;<span class='tnote'> "+ data.substring(vind+5)+"</span></div>");	
                    $("#eteamdd").append($("<option></option>").val(data.substring(8,vind)).html(data.substring(vind+5)));	
                }
                else{
                    $("#tnmshow2").html("<div class='label'><span class='tnote'> "+ data+"</span></div>");
                }
            }
         });
    }


    /******************************************************** */
    /***************validating for workshop registration******** */
    /******************************************************** */
    $("#regwrk").validate({
        rules:
        {
            workshop:{
                  required:true
             },
        },
        messages:
        {
            workshop:{
                required:'Please select a workshop to register'
            },
        },
        submitHandler: submitwk
    });
    function submitwk(){
        var data=$("#regwrk").serialize();
         $.ajax({
            type:'POST',
            url:'dbworkshop.php',
            data: data,
            beforeSend:function(){
                $("#wrkalert").html('');
                $("#submitw").val("sending.....");
            },
            success: function(data){
                $("#submitw").val("Submit");
                $("#wrkalert").html('');
                if(data.startsWith("Success"))
                {
                    $("#regdw").append("<br>");
                    $("#regdw").append("<br> "+data.substring(8)+"<br> ");
                    $("#wrkalert").html('<span class="sucs">Successfully registered for '+data.substring(8)+'</span>');
                }
                else 
                {
                    $("#wrkalert").html(data);
                }
            }
         });
    }


    /******************************************************** */
    /***************validating for teamworkshop1************* */
    /******************************************************** */
    $("#wteamform1").validate({
        rules:
        {
            etnm1:{
                  required:true
             },
             emem11:{
                 required:true
             }
               
        },
        messages:
        {
            etnm1:{
                required:'Please enter your team name'
            },
            emem11:{
                required:'Atleast one member is needed to create a team'
            }
               
        },
        submitHandler: submitteamw1
    });
    function submitteamw1(){
        var data=$("#wteamform1").serialize();
         $.ajax({
            type:'POST',
            url:'dbwteam.php',
            data: data,
            beforeSend:function(){
                $("#wtnmshow2").html('');
                 $("#submitwteam1").val("sending.....");
            },
            success: function(data){
                $("#submitwteam1").val("Submit");
                $("#wterr1").html('');$("#wterr2").html('');$("#wterr3").html('');$("#wterr4").html('');$("#wterr5").html('');$("#wterr6").html('');
                if(data.startsWith("g"))
                {
                    var num=data.substring(1,2);
                    if(num==1){$("#wterr1").html("<div class='rdtxt'>GY-ID not valid</div>")}
                    if(num==2){$("#wterr2").html("<div class='rdtxt'>GY-ID not valid</div>")}
                    if(num==3){$("#wterr3").html("<div class='rdtxt'>GY-ID not valid</div>")}
                    if(num==4){$("#wterr4").html("<div class='rdtxt'>GY-ID not valid</div>")}
                    if(num==5){$("#wterr5").html("<div class='rdtxt'>GY-ID not valid</div>")}
                    if(num==6){$("#wterr6").html("<div class='rdtxt'>GY-ID not valid</div>")}
                }
                else if(data.startsWith("f"))
                {
                    var num=data.substring(1,2);
                    if(num==1){$("#wterr1").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                    if(num==2){$("#wterr2").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                    if(num==3){$("#wterr3").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                    if(num==4){$("#wterr4").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                    if(num==5){$("#wterr5").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                    if(num==6){$("#wterr6").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                }
                else if(data.startsWith('success')){
                    $("#wdiv1").hide();
                    var vind=data.indexOf('name');
                    $("#wtnmshow1").html("<div class='label'>Successfully created team:&nbsp;&nbsp;<span class='tnote'> "+ data.substring(vind+5)+"</span></div>");	
                    $("#wteamdd").append($("<option></option>").val(data.substring(8,vind)).html(data.substring(vind+5)));	
                }
                else{
                    $("#wtnmshow2").html("<div class='label'><span class='tnote'> "+ data+"</span></div>");
                }
            }
        });
   }

   /******************************************************** */
    /***************validating for teamworksopss2*************** */
    /******************************************************** */
    $("#wteamform2").validate({
        rules:
        {
            etnm1:{
                  required:true
             },
             emem11:{
                 required:true
             }
               
        },
        messages:
        {
            etnm1:{
                required:'Please enter your team name'
            },
            emem11:{
                required:'Atleast one member is needed to create a team'
            }
               
        },
        submitHandler: submitteamw2
    });
    function submitteamw2(){
        var data=$("#wteamform2").serialize();
         $.ajax({
            type:'POST',
            url:'dbwteam.php',
            data: data,
            beforeSend:function(){
                //alert("bef");
                $("#wtnmshow2").html('');
                 $("#submitwteam2").val("sending.....");
            },
            success: function(data){
                //alert(data);
                $("#submitwteam2").val("Submit");
                $("#wterr1").html('');$("#wterr2").html('');$("#wterr3").html('');$("#wterr4").html('');$("#wterr5").html('');$("#wterr6").html('');
                if(data.startsWith("g"))
                {
                    var num=data.substring(1,2);
                    if(num==1){$("#wterr1").html("<div class='rdtxt'>GY-ID not valid</div>")}
                    if(num==2){$("#wterr2").html("<div class='rdtxt'>GY-ID not valid</div>")}
                    if(num==3){$("#wterr3").html("<div class='rdtxt'>GY-ID not valid</div>")}
                    if(num==4){$("#wterr4").html("<div class='rdtxt'>GY-ID not valid</div>")}
                    if(num==5){$("#wterr5").html("<div class='rdtxt'>GY-ID not valid</div>")}
                    if(num==6){$("#wterr6").html("<div class='rdtxt'>GY-ID not valid</div>")}
                }
                else if(data.startsWith("f"))
                {
                    var num=data.substring(1,2);
                    if(num==1){$("#wterr1").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                    if(num==2){$("#wterr2").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                    if(num==3){$("#wterr3").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                    if(num==4){$("#wterr4").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                    if(num==5){$("#wterr5").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                    if(num==6){$("#wterr6").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                }
                else if(data.startsWith('success')){
                    $("#wdiv2").hide();
                    var vind=data.indexOf('name');
                    $("#wtnmshow22").html("<div class='label'>Successfully created team:&nbsp;&nbsp;<span class='tnote'> "+ data.substring(vind+5)+"</span></div>");	
                    $("#wteamdd").append($("<option></option>").val(data.substring(8,vind)).html(data.substring(vind+5)));	
                }
                else{
                    $("#wtnmshow2").html("<div class='label'><span class='tnote'> "+ data+"</span></div>");
                }
            }
         });
    }
    /******************************************************** */
    /***************validating for teamworkshop3*************** */
    /******************************************************** */
    $("#wteamform3").validate({
        rules:
        {
            etnm1:{
                  required:true
             },
             emem11:{
                 required:true
             }
               
        },
        messages:
        {
            etnm1:{
                required:'Please enter your team name'
            },
            emem11:{
                required:'Atleast one member is needed to create a team'
            }
               
        },
        submitHandler: submitteamw3
    });
    function submitteamw3(){
        var data=$("#wteamform3").serialize();
         $.ajax({
            type:'POST',
            url:'dbwteam.php',
            data: data,
            beforeSend:function(){
                $("#wtnmshow2").html('');
                 $("#submitwteam3").val("sending.....");
            },
            success: function(data){
                $("#submitwteam3").val("Submit");
                $("#wterr1").html('');$("#wterr2").html('');$("#wterr3").html('');$("#wterr4").html('');$("#wterr5").html('');$("#wterr6").html('');
                if(data.startsWith("g"))
                {
                    var num=data.substring(1,2);
                    if(num==1){$("#wterr1").html("<div class='rdtxt'>GY-ID not valid</div>")}
                    if(num==2){$("#wterr2").html("<div class='rdtxt'>GY-ID not valid</div>")}
                    if(num==3){$("#wterr3").html("<div class='rdtxt'>GY-ID not valid</div>")}
                    if(num==4){$("#wterr4").html("<div class='rdtxt'>GY-ID not valid</div>")}
                    if(num==5){$("#wterr5").html("<div class='rdtxt'>GY-ID not valid</div>")}
                    if(num==6){$("#wterr6").html("<div class='rdtxt'>GY-ID not valid</div>")}
                }
                else if(data.startsWith("f"))
                {
                    var num=data.substring(1,2);
                    if(num==1){$("#wterr1").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                    if(num==2){$("#wterr2").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                    if(num==3){$("#wterr3").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                    if(num==4){$("#wterr4").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                    if(num==5){$("#wterr5").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                    if(num==6){$("#wterr6").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                }
                else if(data.startsWith('success')){
                    $("#wdiv3").hide();
                    var vind=data.indexOf('name');
                    $("#wtnmshow3").html("<div class='label'>Successfully created team:&nbsp;&nbsp;<span class='tnote'> "+ data.substring(vind+5)+"</span></div>");	
                    $("#wteamdd").append($("<option></option>").val(data.substring(8,vind)).html(data.substring(vind+5)));	
                }
                else{
                    $("#wtnmshow2").html("<div class='label'><span class='tnote'> "+ data+"</span></div>");
                }
            }
         });
    }

    /******************************************************** */
    /***************validating for teamworkshops4*************** */
    /******************************************************** */
    $("#wteamform4").validate({
        rules:
        {
            etnm1:{
                  required:true
             },
             emem11:{
                 required:true
             }
               
        },
        messages:
        {
            etnm1:{
                required:'Please enter your team name'
            },
            emem11:{
                required:'Atleast one member is needed to create a team'
            }
               
        },
        submitHandler: submitteamw4
    });
    function submitteamw4(){
        var data=$("#wteamform4").serialize();
         $.ajax({
            type:'POST',
            url:'dbwteam.php',
            data: data,
            beforeSend:function(){
                $("#wtnmshow2").html('');
                $("#submitwteam4").val("sending.....");
                
            },
            success: function(data){
                
                $("#submitwteam4").val("Submit");
                $("#wterr1").html('');$("#wterr2").html('');$("#wterr3").html('');$("#wterr4").html('');$("#wterr5").html('');$("#wterr6").html('');
                if(data.startsWith("g"))
                {
                    var num=data.substring(1,2);
                    if(num==1){$("#wterr1").html("<div class='rdtxt'>GY-ID not valid</div>")}
                    if(num==2){$("#wterr2").html("<div class='rdtxt'>GY-ID not valid</div>")}
                    if(num==3){$("#wterr3").html("<div class='rdtxt'>GY-ID not valid</div>")}
                    if(num==4){$("#wterr4").html("<div class='rdtxt'>GY-ID not valid</div>")}
                    if(num==5){$("#wterr5").html("<div class='rdtxt'>GY-ID not valid</div>")}
                    if(num==6){$("#wterr6").html("<div class='rdtxt'>GY-ID not valid</div>")}
                }
                else if(data.startsWith("f"))
                {
                    var num=data.substring(1,2);
                    if(num==1){$("#wterr1").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                    if(num==2){$("#wterr2").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                    if(num==3){$("#wterr3").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                    if(num==4){$("#wterr4").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                    if(num==5){$("#wterr5").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                    if(num==6){$("#wterr6").html("<div class='rdtxt'>This member exceeded number of teams limit</div>")}
                }
                else if(data.startsWith('success')){
                    $("#wdiv4").hide();
                    var vind=data.indexOf('name');
                    $("#wtnmshow4").html("<div class='label'>Successfully created team:&nbsp;&nbsp;<span class='tnote'> "+ data.substring(vind+5)+"</span></div>");	
                    $("#wteamdd").append($("<option></option>").val(data.substring(8,vind)).html(data.substring(vind+5)));	
                }
                else{
                    $("#wtnmshow2").html("<div class='label'><span class='tnote'> "+ data+"</span></div>");
                }
            }
         });
    }

    /******************************************************** */
    /***************validating for accomodation************** */
    /******************************************************** */
    $("#accom").validate({
        rules:
        {
            'check_list[]': {
                required: true,
               
            },
            payacco:
            {
                required: true,
            }
               
        },
        messages:
        {
            'check_list[]':{
                required:'Please select atleast one day'
            },
            payacco:{
                required:'Please provide payment information'
            }
               
        },
        submitHandler: submitaccom
    });
    function submitaccom(){
        var data=$("#accom").serialize();
         $.ajax({
            type:'POST',
            url:'dbaccom.php',
            data: data,
            beforeSend:function(){
                
                $("#submitaccom").val("sending.....");
            },
            success: function(data){
                $("#submitaccom").val("Submit");
                $("#accomalert").html(data);
            }
        });
    }
});

