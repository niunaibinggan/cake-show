<?php
	$page = intval($_GET['page']);
	
	if($page>=10){
		$page = 10;
	}
	// 数据库操作
	$str = '';
	
	switch($page){
		case 1:
			$str = '{"errCode": 1, "errMsg": "数据有效", 
			"info": [{"title": "欢乐童年", 
			"img_src": "./images/01.jpg", 
			"url_link": "http://www.baidu.com/",
			"describe" : "天津、塘沽需要提前1天预订",
			"price" : "￥165.00"
		},
			{"title": "玫瑰花园", 
			"img_src": "./images/02.jpg", 
			"url_link": "http://www.baidu.com/",
			"describe" : "ROSE GARDEN",
			"price" : "￥229.00"
		},
			{"title": "浪漫点心", 
			"img_src": "./images/03.jpg", 
			"url_link": "http://www.baidu.com/",
			"describe" : "ROMANTIC SWEETHEART",
			"price" : "￥229.00"
		}]}';
			break;
		case 2:
			$str = '{"errCode": 1, "errMsg": "数据有效", 
			"info": [{"title": "榴莲之恋", 
			"img_src": "./images/04.jpg", 
			"url_link": "http://www.baidu.com/",
			"describe" : "DURIAN LOVE",
			"price" : "￥275.00"
		},
			{"title": "玫瑰物语", 
			"img_src": "./images/05.jpg", 
			"url_link": "http://www.baidu.com/",
			"describe" : "STORY OF ROSES",
			"price" : "￥229.00"
		},
			{"title": "相思树", 
			"img_src": "./images/06.jpg", 
			"url_link": "http://www.baidu.com/",
			"describe" : "LOVES TREE",
			"price" : "￥269.00"
		}]}';
			break;
		case 3:
			$str = '{"errCode": 1, "errMsg": "数据有效", 
			"info": [{"title": "晨曦", 
			"img_src": "./images/07.jpg", 
			"url_link": "http://www.baidu.com/",
			"describe" : "MORNINC LICRIHT",
			"price" : "￥265.00"
		},
			{"title": "夜礼服", 
			"img_src": "./images/08.jpg", 
			"url_link": "http://www.baidu.com/",
			"describe" : "EVENING GOWN",
			"price" : "￥299.00"
		},
			{"title": "冰雪之翼", 
			"img_src": "./images/09.jpg", 
			"url_link": "http://www.baidu.com/",
			"describe" : "WINGS OF ICE AND SHOW",
			"price" : "￥229.00"
		}]}';
			break;
		case 4:
			$str = '{"errCode": 1, "errMsg": "数据有效", 
			"info": [{"title": "魔法木屋", 
			"img_src": "./images/010.jpg", 
			"url_link": "http://www.baidu.com/",
			"describe" : "MAGICAL WOODEEN HOUSE",
			"price" : "￥265.00"
		},
			{"title": "芒果列车", 
			"img_src": "./images/011.jpg", 
			"url_link": "http://www.baidu.com/",
			"describe" : "MANGO TRAIN",
			"price" : "￥299.00"
		},
			{"title": "樱花雨", 
			"img_src": "./images/012.jpg", 
			"url_link": "http://www.baidu.com/",
			"describe" : "RAIN OF CHERRY BLOSSMS",
			"price" : "￥229.00"
		}]}';
			break;
		case 5:
			$str = '{"errCode": 1, "errMsg": "数据有效", 
			"info": [{"title": "丛林秋语", 
			"img_src": "./images/013.jpg", 
			"url_link": "http://www.baidu.com/",
			"describe" : "FOREST OF AUTUMN WHISPERS",
			"price" : "￥265.00"
		},
			{"title": "加州阳光", 
			"img_src": "./images/014.jpg", 
			"url_link": "http://www.baidu.com/",
			"describe" : "CALLFORNIT SUBSHINE",
			"price" : "￥399.00"
		},
			{"title": "香颂", 
			"img_src": "./images/015.jpg", 
			"url_link": "http://www.baidu.com/",
			"describe" : "CHSSON",
			"price" : "￥429.00"
		}]}';
			break;
		case 6:
			$str = '{"errCode": 1, "errMsg": "数据有效", 
			"info": [{"title": "幸福恋人", 
			"img_src": "./images/016.jpg", 
			"url_link": "http://www.baidu.com/",
			"describe" : "HAPPY LOVES",
			"price" : "￥364.00"
		},
			{"title": "爱在心窝", 
			"img_src": "./images/017.jpg", 
			"url_link": "http://www.baidu.com/",
			"describe" : "LOVE FROM INSIDE",
			"price" : "￥299.00"
		},
			{"title": "爱蔓延", 
			"img_src": "./images/018.jpg", 
			"url_link": "http://www.baidu.com/",
			"describe" : "CHSSON",
			"price" : "￥429.00"
		}]}';
			break;
		case 7:
			$str = '{"errCode": 1, "errMsg": "数据有效", 
			"info": [{"title": "半熟芝士", 
			"img_src": "./images/019.jpg", 
			"url_link": "http://www.baidu.com/",
			"describe" : "HALF-RAKEN CHEESE",
			"price" : "￥364.00"
		},
			{"title": "蜂蜜蛋糕", 
			"img_src": "./images/020.jpg", 
			"url_link": "http://www.baidu.com/",
			"describe" : "HONEY CAKE",
			"price" : "￥499.00"
		},
			{"title": "北海道蛋糕", 
			"img_src": "./images/021.jpg", 
			"url_link": "http://www.baidu.com/",
			"describe" : "HOKKAIDO CAKE",
			"price" : "￥529.00"
		}]}';
			break;
		case 8:
			$str = '{"errCode": 1, "errMsg": "数据有效", 
			"info": [{"title": "焦糖核桃", 
			"img_src": "./images/022.jpg", 
			"url_link": "http://www.baidu.com/",
			"describe" : "ENGADIN",
			"price" : "￥34.00"
		},
			{"title": "魔法棒", 
			"img_src": "./images/023.jpg", 
			"url_link": "http://www.baidu.com/",
			"describe" : "MAGICAL WAND",
			"price" : "￥199.00"
		},
			{"title": "曲奇全家福", 
			"img_src": "./images/024.jpg", 
			"url_link": "http://www.baidu.com/",
			"describe" : "COOKIE FAMILY",
			"price" : "￥129.00"
		}]}';
			break;
		case 9:
			$str = '{"errCode": 1, "errMsg": "数据有效", 
			"info": [{"title": "小黄鸭", 
			"img_src": "./images/025.jpg", 
			"url_link": "http://www.baidu.com/",
			"describe" : "THE YELLOW DUCKLING",
			"price" : "￥134.00"
		},
			{"title": "小王子星", 
			"img_src": "./images/026.jpg", 
			"url_link": "http://www.baidu.com/",
			"describe" : "LITTLE PRINCE\'S STAT",
			"price" : "￥299.00"
		},
			{"title": "抹茶冰激凌", 
			"img_src": "./images/027.jpg", 
			"url_link": "http://www.baidu.com/",
			"describe" : "MATCHA GRLATO",
			"price" : "￥229.00"
		}]}';
			break;
		case 10:
			$str = '{"errCode": 1, "errMsg": "数据有效", 
			"info": [{"title": "焦糖核桃", 
			"img_src": "./images/028.jpg", 
			"url_link": "http://www.baidu.com/",
			"describe" : "ENGADIN",
			"price" : "￥354.00"
		},
			{"title": "魔法棒", 
			"img_src": "./images/029.jpg", 
			"url_link": "http://www.baidu.com/",
			"describe" : "MAGICAL WAND",
			"price" : "￥399.00"
		},
			{"title": "曲奇全家福", 
			"img_src": "./images/030.jpg", 
			"url_link": "http://www.baidu.com/",
			"describe" : "COOKIE FAMILY",
			"price" : "￥159.00"
		}]}';
			break;
	}

	echo $str;
