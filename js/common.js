$.ajaxSetup({
	cashe : false,
	timeout : 3000
});

(function(env){
	if(env == "development"){
		
	}
	else{
		window.console.log = function(){}
	}
})("development");

//命名空间
	window.KG = window.KG || {};
	KG.XQ = {};
	KG.QX = {};
	KG.XQ.username = function(){
		alert(1);
	}
	KG.QX.username = function(){
		alert(2);
	}
	KG.QX.username();
	KG.XQ.username();