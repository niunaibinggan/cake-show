
/******************************************************************************************/
	//换banner图
	var oBan = document.getElementById("ban");
	var oBanList = document.getElementById("ban_list");
	var aBanLi = oBanList.children;
	//banner 图片
	var arrBan = ["images/banner1.jpg",
			"images/banner2.jpg",
			"images/banner3.jpg",
			"images/banner4.jpg"];
	//调用函数
	var timer = null;
	var n = 0;
	var bOn = true;		
	bannerTimer();
    function bannerTimer(){
    	change();
    	autoPlay();
    }
    //autoPlay 封装
    function autoPlay(){
    	timer = setInterval(function(){
    		if(bOn){
    			n++;
    			if(n%4 == 0){
    				n = 0;
    			}
    		}
    		change();
    	},5000);
    }

    for(var i=0;i<aBanLi.length;i++){
    	aBanLi[i].index = i;
    	aBanLi[i].onclick = function(){
    		n = this.index;
    		change();
    	}
    }
    //change 封装
    function change(){
    	for(var j=0;j<aBanLi.length;j++){
    		aBanLi[j].className = "";
    		oBan.style.backgroundImage = "";
    	}
    	aBanLi[n].className = "active";
    	oBan.style.backgroundImage = 'url('+ arrBan[n] +')';
    }
/******************************************************************************************/
	//获取ul的id
	var oConList = document.getElementById("con_list");
	//初始时调用
	var page = 0;
	var state = 'ready';
	getData();

	//滚动条距离窗口底端的目标值
	var target = 50;
	
	//获取窗口高度
	var iWinHei = window.innerHeight;

	//滚动条滚动
	window.onscroll = function(){
		//获取页面高度
		var oPage = document.body.offsetHeight || document.documentElement.offsetHeight;
		//获取滚动高度
		var oScroll = document.body.scrollTop || document.documentElement.scrollTop;

		//滚动条距离窗口底端的距离
		var cha = oPage - oScroll - iWinHei;

		//判断
		if(cha < target){
			//console.log(page);
			if(page == 10){
				return false;
			}
			getData();
		}
	}

	//ajax 导入数据 
	function getData(){
		if(state != 'ready'){ // 没准备好呢
			return;
		}
		// 改变状态
		state = 'stop';
		$.ajax({
			type : "GET",
			url : "data.php",
			data : {
				page : ++page
			},
			dataType : "json"
		}).done(function(data){
			if(data.errCode == 1){
				getDom(data.info);
				state = 'ready';
				console.log(page);
			}
			/*console.log(data);*/
		}).fail(function(err){
			console.log(err.statusText);
		});
	}

	//DOM操作
	function getDom(arr){
		var str = " ";
		for(var i=0;i<arr.length;i++){
			var tArr = [
				'<li>',
					'<a href="'+ arr[i].url_link +'">',
						'<div class="box1">',
							'<img src="'+ arr[i].img_src +'">',
						'</div>',
						'<div class="box2">',
							'<h4>'+ arr[i].title +'</h4>',
							'<p>',
								'<span>'+ arr[i].describe +'</span>',
								'<b>'+ arr[i].price +'</b>',
							'</p>',
						'</div>',
					'</a>',
				'</li>'
			];
			str += tArr.join('');
		}
		oConList.innerHTML += str;
	}