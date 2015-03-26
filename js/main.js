var result;
$(function(){
    $('#btnStep1').click(function(){
        document.getElementById("step2").style.display = 'block';      
    });

    $('#btnStep2').click(function(){
        document.getElementById("step3").style.display = 'block'; 
        $.get("CreateNewBackup.php", function(data) {
            console.log( data ); // Data returned
            result=JSON.parse(data);
        });     
    });

    $('#btnStep3').click(function(){
    	document.getElementById("loadSpinner").style.display = 'block';
    	setTimeout(function(){ 
    		document.getElementById("loadSpinner").style.display = 'none'; 
    		document.getElementById("step4").style.display = 'block'; 
    	}, 10000);           
    });
});