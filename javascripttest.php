<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	
</head>
<body>


<script type="text/javascript">

function nowtime () {
    var dt = new Date();
    var hour = dt.getHours();
    var min = dt.getMinutes();

    var datetime;

    if (hour>=12) {
        
        datetime = "下午";
    }

    else{

        datetime = "上午";
    }

    if (hour>12) {

        hour -= 12;
    };

    if (min<10) {

        min = "0"+min;
    };
    var nowtime = "已讀<br>"+datetime+" "+hour+":"+min;

    // document.getElementById('nowtime').innerHTML = nowtime;

    document.write(nowtime);
}
    

</script>

<script type="text/javascript">
	
nowtime();

</script>

</body>
</html>