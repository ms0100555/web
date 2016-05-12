<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
	<link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap-theme.css">
	
	<script src="bower_components/jquery/dist/jquery.js"></script>
	<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="index.css">
	<meta name="viewport" content="user-scalable=0">   <!-- 限制無法縮放 -->
	<meta name="viewport" content="user-scalable=no">  <!-- 限制無法縮放 --> 

</head>
<body>
<div data-role="page" id="pageone">
	<div class="col-xs-12">
		<div class="topline">
			<h1 id="toptitle">好友</h1>
			<div class="topbtn">
				<div class="btn1"></div>
				<div class="btn2"></div>
				<div class="btn3">
                    <div class="dropdown">
                        <a id="dLabel" data-target="#" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                            <div class="btn3">
                            
                            </div>
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                        <h2>編輯訊息</h2>
                        </ul>
                    </div>
                </div>
			</div>
		</div>
		
		<div class="topline2">
			<ul class="nav nav-tabs" role="tablist">
    			<li role="presentation" class="active" ><a href="#friend" aria-controls="home" role="tab" data-toggle="tab" onclick="javascript:changetofriend()"><img src="a1.jpg"></a></li>
    			<li role="presentation"><a href="#talk" aria-controls="profile" role="tab" data-toggle="tab" onclick="javascript:changetotalk()"><img src="b1.jpg"></a></li>
    			<li role="presentation"><a href="#dynamic" aria-controls="messages" role="tab" data-toggle="tab" onclick="javascript:changetodynamic()"><img src="c1.jpg"></a></li>
    			<li role="presentation"><a href="#extra" aria-controls="settings" role="tab" data-toggle="tab" onclick="javascript:changetoextra()"><img src="d1.jpg"></a></li>
  			</ul>
		</div>
		
		
		<div class="tab-content">
    		<div role="tabpanel" class="tab-pane active" id="friend">
    			<div class="col-xs-12">
    				<div class="friends">
    					<div class="col-xs-3">
    						<div class="photo"><img src="http://cdn-obs.line-apps.com/line/r/lineq/c/685005d1-8942-486f-a309-25bbc189dee6d71a95t02134b23/200x200.rf"></div>
    					</div>
    					<div class="col-xs-9">
    						
    						<div class="content" data-toggle="modal" data-target=".bs-example-modal-lg" >
    							<div class="name">SixWong</div>
    							<div class="description">我思故我在</div>
    						</div>
    						

    						<!-- Button trigger modal -->
							<!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  							Launch demo modal
							</button> -->

							<!-- Modal -->
							<div id="modal1" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
 								<div  class="modal-dialog modal-lg">
 									<div class="modal-content">
 										
 										<div class="modal-body">
 											<div class="col-xs-12">
 												<div class="photo">
 							       					<img src="http://cdn-obs.line-apps.com/line/r/lineq/c/685005d1-8942-486f-a309-25bbc189dee6d71a95t02134b23/200x200.rf">
 							       				</div>
 							       				<div class="content">
 							       					<div class="name">SixWong</div>
 							       					<div class="description">我思故我在</div>
 							       				</div>
 				
 											</div>					       			
 										</div>
 										<div class="modal-footer">
 											<div class="options">
 							       					<div class="col-xs-4">
                                                        <a href="#pagetwo" onclick="javascript:hidemodal()">
                                                            <img src="fr_icon1.png">
                                                        </a>	
 							       					</div>
 							       					<div class="col-xs-4">
 							       						<img src="fr_icon2.png">
 							       					</div>
 							       					<div class="col-xs-4">
 							       						<img src="fr_icon3.png">
 							       					</div>
 							       					
 							       			</div>
 											<!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
 											<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
 										</div>
 									</div>
 								</div>
							</div>
    					</div>  <!--結尾--> 
    				</div>
    			</div>
    		</div>
    		<div role="tabpanel" class="tab-pane" id="talk">
                
                <div class="col-xs-12">
                    <div class="talk">
                    <a href="#pagetwo" data-transition="fade">
                        
                        <div class="col-xs-3">
                            <div class="photo"><img src="http://cdn-obs.line-apps.com/line/r/lineq/c/685005d1-8942-486f-a309-25bbc189dee6d71a95t02134b23/200x200.rf"></div>
                        </div>
                        <div class="col-xs-9">
                            <div class="content">
                                <div class="name">SixWong</div>
                                <div class="description">HELLO!</div>
                            </div>
                        </div>
                    </a>
                    </div>
                </div>
                
    		</div>
           
    		<div role="tabpanel" class="tab-pane" id="dynamic">
    			<div class="dynamic">
    				<div class="col-xs-12">
    					<div class="board">
    						<div class="col-xs-2">
    							<div class="photo">
    								<img src="http://cdn-obs.line-apps.com/line/r/lineq/c/685005d1-8942-486f-a309-25bbc189dee6d71a95t02134b23/200x200.rf">
    							</div>
    						</div>
    						<div class="col-xs-10">
    							<div class="name">SixWong</div>
    							<div class="time">2小時前</div>
    						</div>

    						<div class="col-xs-12">
    							<div class="picture"><img src="board1.jpg"></div>
    							<div class="content">不鬧，今天要PO的工商活動是【夢想星城】
													要說到特別的地方就是，我有參加官方的「品味大挑戰」活動～
													投票選出你們覺得最需要被投的房間！！！
													我的房間擺設理念：『肥宅的全部』，所以只有電腦跟床ㄎㄎ<br><br>
													實況主私密小屋大揭秘：<br>
													http://dream.efuntw.com/event/taste/index.html<br>
													官網：<br>
													http://dream.efuntw.com/<br>
													粉絲團：<br>
													https://www.facebook.com/dream.efuntw/<br>
								</div>
								<div class="btn">
									<div class="like">讚</div>
									<div class="message">留言</div>
								</div>
    						</div> 
    					</div>
    				</div>
    			</div>
    		</div>
    		<div role="tabpanel" class="tab-pane  " id="extra">
    			<div class="extra">
    				<div class="col-xs-4">
    					<img src="ex1.jpg">
    					<img src="ex4.jpg">
    					<img src="ex7.jpg">
    					<img src="ex10.jpg">
    				</div>
    				<div class="col-xs-4">
    					<img src="ex2.jpg">
    					<img src="ex5.jpg">
    					<img src="ex8.jpg">
    					<img src="ex11.jpg">

    				</div>
    				<div class="col-xs-4">
    					<img src="ex3.jpg">
    					<img src="ex6.jpg">
    					<img src="ex9.jpg">
    					<img src="ex12.jpg">
    				</div> 

    			</div>
    		</div>
  		</div>
	</div>
</div>

 <div data-role="page" id="pagetwo">
                    
                        
                    <div class="col-xs-12">
                        <div class="topline123">
                            <div class="col-xs-8">
                                <h1>SixWong</h1>
                            </div>
                            <div class="col-xs-4">
                                <input type="radio" name="userradio" id="he" value="he"><h2>對方</h2>
                                <input type="radio" name="userradio" id="me" value="me" CHECKED ><h2>自己</h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="talkin">
                            <div class="col-xs-2">
                                <img src="http://cdn-obs.line-apps.com/line/r/lineq/c/685005d1-8942-486f-a309-25bbc189dee6d71a95t02134b23/200x200.rf">
                            </div>

                            <div class="col-xs-10">
                                <div class="content">
                                    <div class="hemsg">
                                    HELLO!
                                    </div>
                                    <div class="time">
                                        <p><br>上午9:10</p>
                                    </div>
                                 </div>
                            </div>

                            <div class="col-xs-12">
                                <div class="msgall">
                                    <div class="mycontent">
                                    你好!
                                    </div>
                                </div> 
                            </div>

                             <div class="col-xs-2">
                                <img src="http://cdn-obs.line-apps.com/line/r/lineq/c/685005d1-8942-486f-a309-25bbc189dee6d71a95t02134b23/200x200.rf">
                            </div>

                            <div class="col-xs-10">
                                <div class="content">
                                    <div class="hemsg">
                                        最近天氣好冷...
                                    </div>
                                    <div class="time">
                                        <p><br>上午9:10</p>
                                    </div>
                                </div>
                            </div>

                             <div class="col-xs-2">
                                <img src="http://cdn-obs.line-apps.com/line/r/lineq/c/685005d1-8942-486f-a309-25bbc189dee6d71a95t02134b23/200x200.rf">
                            </div>

                            <div class="col-xs-10">
                                <div class="content">
                                    <div class="hemsg">
                                        聽說最低會到6度................123
                                    </div>
                                    <div class="time">
                                        <p id="nowtime"></p>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>

                    <div id="foot" ></div>
                    <div class="col-xs-12">
                        <div class="dialogbar">
                            <div class="txt">
                                <input type="text" id="Dialog" >
                            </div>

                            <div class="btntest">
                                <button id="sendbtn" class="btn btn-default">傳送</button>
                            </div>
                        </div>
                        
                        
                    </div>
</div>
            

<script type="text/javascript">
// $(document).ready(function(){
//     nowtime ();
// });
var sender = "me";

function nowtime () { //取得目前時間
    var dt = new Date(); //將 dt 宣告成Date
    var hour = dt.getHours(); //取得目前 小時
    var min = dt.getMinutes(); //取得目前 分鐘

    var datetime; 
    //↓↓↓↓↓↓↓↓↓↓↓↓↓↓判斷時間↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓
    
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
     var nowtime = datetime+" "+hour+":"+min; 
     return nowtime; //回傳字串
}
    
    function changetofriend(){

        document.getElementById('toptitle').innerHTML = "好友"; //更改 id = toptitle 的內容為 好友
    }

    function changetotalk(){

        document.getElementById('toptitle').innerHTML = "聊天"; //更改 id = toptitle 的內容為 聊天
    }

    function changetodynamic(){

        document.getElementById('toptitle').innerHTML = "動態消息"; //更改 id = toptitle 的內容為 動態消息
    }

    function changetoextra(){

        document.getElementById('toptitle').innerHTML = "其他"; //更改 id = toptitle 的內容為 其他
    }

    function hidemodal(){ //將model 隱藏
 
        $('#modal1').modal('hide'); //將id = modal1 的 model 隱藏

    }

    function tobuttom(){
        var height  = $(".talkin").outerHeight(true);  //取得 class = talkin 的視窗高度 true = 包含 top&bottom 的margin
        window.scrollTo(0,height); //將視窗移動至 X:0 Y:height(talkin的視窗高度)
        
    }
    
//---------------JQuery---------------- 

$(document).ready(function(){

    $("#me").focusin(function(){ //調整目前發送訊息的人為 "自己" NO.1

        sender = "me";
        console.log(sender);
    });

     $("#he").focusin(function(){ //調整目前發送訊息的人為 "對方" NO.1

        sender = "he";
        console.log(sender);
        
    });
    $("#sendbtn").click(function(){ //當按下 id = sendbtn 的物件時... NO.2

        var msg = document.getElementById('Dialog').value; //接收 輸入框 訊息
        sendmsg(msg); //呼叫sendmsg()方法
        document.getElementById('Dialog').value = ""; // 將輸入框改成空白

    });
    
    function sendmsg(msg){ //發送訊息 NO.3
            var ntime = nowtime();
            if (sender=="me" && msg!="") {

                var newMsg={msg:msg,readTime:ntime,alreadyread:""};
                iaddMsg(newMsg);

                $.ajax({  // ajax 連接資料庫
                    type: 'POST', // 傳送方式
                    url: 'sendmsg.php',     //傳送網址
                    data: newMsg,   //傳送資料 格式一 {msg:msg,readTime:ntime}
                    dataType: 'text', //回傳的資料格式
                    success: function (msg_result) { //成功的話回傳 msg_reslut (名稱自訂)
                        alert("傳送成功");
                        // console.log( msg_result );
                        
                    }, 
                    error: function(jqXHR, textStatus, errorThrown) {alert(errorThrown)}, //失敗的話...
                });

            }

            if(sender == "he" && msg!=""){
                var newMsg={msg:msg,readTime:ntime};
                headdMsg(newMsg);

                $.ajax({  // ajax 連接資料庫
                    type: 'POST', // 傳送方式
                    url: 'sendmsg.php',     //傳送網址
                    data: newMsg,   //傳送資料
                    dataType: 'text', // 回傳的資料格式
                    success: function (data) //成功的話回傳 (data)
                    {
                        console.log(data);
                        alert("OK");
                    }, 
                    error: function(jqXHR, textStatus, errorThrown) {alert("fail")}, //失敗的話...
                });


            }
    }

    function headdMsg(newMsg){ //對方新增訊息（增加程式碼）完成發送 NO.4 
        

        $(".talkin").append("<div class='col-xs-2'><img src='http://cdn-obs.line-apps.com/line/r/lineq/c/685005d1-8942-486f-a309-25bbc189dee6d71a95t02134b23/200x200.rf'></div>" //加入圖片
        //加入程式碼至 id =  talkin 裡面
                            +"<div class='col-xs-10'><div class='content'><div class='hemsg'>"+newMsg.msg+"</div>" //取得newMsg Object 的msg內容 

                            +"<div class='time'><p>"+newMsg.readTime+"</p></div></div></div>" //取得newMsg Object 的readTime內容 
                            
                            );
        tobuttom(); //呼叫將視窗往下移的方法
    }

    function iaddMsg(newMsg){ //自己新增訊息（增加程式碼）完成發送 NO.4
 
        $(".talkin").append("<div class='col-xs-12'><div class='msgall'><div class='mytime'>"+newMsg.readTime+"</div><div class='mycontent'>"+newMsg.msg+"</div></div></div></div>"
        
                            );
        tobuttom(); //呼叫將視窗往下移的方法
    }
    
    
});
</script>   
               
</div>
 
</body>
</html>



