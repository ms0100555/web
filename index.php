<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
	<link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="index.css">
	<script src="bower_components/jquery/dist/jquery.js"></script>
	<script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
	
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
							<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
 								<div class="modal-dialog modal-lg">
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
                                                        <a href="#pagetwo">
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
                    <a href="#pagetwo" data-transition="fade" onclick="javascript:nowtime()">
                        
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
                        <div class="topline">
                            <h1>SixWong</h1>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="talkin">
                            <div class="col-xs-2">
                                <img src="http://cdn-obs.line-apps.com/line/r/lineq/c/685005d1-8942-486f-a309-25bbc189dee6d71a95t02134b23/200x200.rf">
                            </div>

                            <div class="col-xs-8">
                                <div class="test">
                                    <div class="content">
                                    HELLO!
                                    </div>
                                </div>
                                
                                <div class="time">
                                    <p>已讀<br>上午9:10</p>
                                </div>
                                
                            </div>

                            <div class="col-xs-2">
                                    
                            </div>

                            <div class="col-xs-2">
                                   
                            </div>

                            <div class="col-xs-10">
                                <div class="mycontent">
                                    你好!
                                </div>
                            </div>

                            

                             <div class="col-xs-2">
                                <img src="http://cdn-obs.line-apps.com/line/r/lineq/c/685005d1-8942-486f-a309-25bbc189dee6d71a95t02134b23/200x200.rf">
                            </div>
                            <div class="col-xs-8">
                                <div class="content">
                                    最近天氣好冷...
                                </div>

                                <div class="time">
                                    <p>已讀<br>上午9:10</p>
                                </div>
                            </div>

                            <div class="col-xs-2">
                            </div>

                             <div class="col-xs-2">
                                <img src="http://cdn-obs.line-apps.com/line/r/lineq/c/685005d1-8942-486f-a309-25bbc189dee6d71a95t02134b23/200x200.rf">
                            </div>

                            <div class="col-xs-8">
                                <div class="content">
                                    聽說最低會到6度................123
                                </div>

                                <div class="time">
                                    <p id="nowtime"></p>
                                </div>
                            </div>

                            <div class="col-xs-2">
      
                            </div>
                        </div>    
                    </div>

                    <div class="col-xs-12"><input type="button" id="btn1" value="點我一下"></div>
</div>
            

<script type="text/javascript">
// $(document).ready(function(){
//     nowtime ();
// });

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
        document.getElementById('nowtime').innerHTML = nowtime;
    // document.write(nowtime);
}
    
    function changetofriend(){

        document.getElementById('toptitle').innerHTML = "好友";
    }

    function changetotalk(){

        document.getElementById('toptitle').innerHTML = "聊天";
    }

    function changetodynamic(){

        document.getElementById('toptitle').innerHTML = "動態消息";
    }

    function changetoextra(){

        document.getElementById('toptitle').innerHTML = "其他";
    }


//---------------JQuery---------------- 

$(document).ready(function(){

    var OBJ = { msg :[{msg:'測試！測試！',readTime:'下午 10:23',read:true},
                      {msg:'應該有看到吧！',readTime:'下午10:25',read:true}]
            };
    // var msg = [{'msg':'測試！測試！','time':'下午 10:23'},
                      // {'msg':'應該有看到吧！','time':'下午10:25'}];

    
    function talk(){

        var a1 = "最近天氣好冷...";

        var b1 = "已讀";

        var c1 = "上午9:10";

        // $(".talkin").append("<div class='col-xs-2'>"++
        //                         "<img src='http://cdn-obs.line-apps.com/line/r/lineq/c/685005d1-8942-486f-a309-25bbc189dee6d71a95t02134b23/200x200.rf'>"++
        //                     "</div>"+""+
        //                     "<div class='col-xs-8'>"++
        //                         "<div class='content'>"++
        //                             +a1+
        //                         '</div>'++

        //                         '<div class="time">'++
        //                             '<p>'+b1+'<br>'+c1+'</p>'++
        //                         '</div>'++
        //                     '</div>'++

        //                     '<div class="col-xs-2">'++
        //                     '</div>');

        // for(var key in OBJ){

        //     a1 = OBJ[key][0];
        //     // c1 = OBJ.msg[time];
        // }
        var i=0;
        console.log(OBJ.msg);
        for(var i=0;i<OBJ.msg.length ;i++)
        {
            addMsg(OBJ.msg[i]);
        }
        
        var newMsg={msg:'QQ',readTime:'test',read:true};
        OBJ.msg.push(newMsg);
        addMsg(newMsg);

        // $.each(OBJ.msg, function(key,value) {
           
        //     $(".talkin").append("<div class='col-xs-2'><img src='http://cdn-obs.line-apps.com/line/r/lineq/c/685005d1-8942-486f-a309-25bbc189dee6d71a95t02134b23/200x200.rf'></div>"
        
        //                     +"<div class='col-xs-8'><div class='content'>"+a1+"</div>"

        //                     +"<div class='time'><p>"+b1+"<br>"+c1+"</p></div></div>"

        //                     +"<div class='col-xs-2'></div>"
        //                     );

        // });

        // $(".talkin").append("<div class='col-xs-2'><img src='http://cdn-obs.line-apps.com/line/r/lineq/c/685005d1-8942-486f-a309-25bbc189dee6d71a95t02134b23/200x200.rf'></div>"
        
        //                     +"<div class='col-xs-8'><div class='content'>"+a1+"</div>"

        //                     +"<div class='time'><p>"+b1+"<br>"+c1+"</p></div></div>"

        //                     +"<div class='col-xs-2'></div>"
        //                     );



        // document.write("出來了...");
    }

    function addMsg(newMsg){
        var readStr=newMsg.read?"已讀":"未讀";

        $(".talkin").append("<div class='col-xs-2'><img src='http://cdn-obs.line-apps.com/line/r/lineq/c/685005d1-8942-486f-a309-25bbc189dee6d71a95t02134b23/200x200.rf'></div>"
        
                            +"<div class='col-xs-8'><div class='content'>"+newMsg.msg+"</div>"

                            +"<div class='time'><p>"+readStr+"<br>"+newMsg.readTime+"</p></div></div>"

                            +"<div class='col-xs-2'></div>"
                            );
    }

    $("#btn1").click(function(){

        // document.write("出來了...");
        talk();

    });
});

</script>   
               
</div>
 
</body>
</html>



