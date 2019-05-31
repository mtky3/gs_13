let lat  = 34.6920;
let lon = 135.4954;

function GetMap(){
    let map = new Bmap("#myMap");
    map.startMap(lat, lon, "load", 12); //The place is Bellevue.
    // map.infobox(lat, lon, "Title", "Description");
}


$("#get").on('click',function() {

//1．位置情報の取得に成功した時の処理
function mapsInit(position) {
    //lat=緯度、lon=経度 を取得
  	lat = position.coords.latitude;
		lon = position.coords.longitude;
	$("#view1").html("緯度：" + lat);
	$("#view2").html("軽度：" + lon);
	
	let map = new Bmap("#myMap");
	map.startMap(lat, lon, "load", 16);
	let pin = map.pin(lat, lon, "#ff0000");
	// map.infobox(lat, lon, "Title", "Description");
};

//2． 位置情報の取得に失敗した場合の処理
function mapsError(error) {
  let e = "";
  if (error.code == 1) { //1＝位置情報取得が許可されてない（ブラウザの設定）
    e = "位置情報が許可されてません";
  }
  if (error.code == 2) { //2＝現在地を特定できない
    e = "現在位置を特定できません";
  }
  if (error.code == 3) { //3＝位置情報を取得する前にタイムアウトになった場合
    e = "位置情報を取得する前にタイムアウトになりました";
  }
  alert("エラー：" + e);
};

//3.位置情報取得オプション
let set ={
  enableHighAccuracy: true, //より高精度な位置を求める
  maximumAge: 20000,        //最後の現在地情報取得が20秒以内であればその情報を再利用する設定
  timeout: 150000            //15秒以内に現在地情報を取得できなければ、処理を終了
};

//Main:位置情報を取得する処理 //getCurrentPosition :or: watchPosition
navigator.geolocation.getCurrentPosition(mapsInit, mapsError, set);
});

	// 現在地とお店情報をローカルストレージに保存
	$("#save").click(function(){
		var name = document.getElementById("shopName").value;
		var info = document.getElementById("shopInfo").value;
		var saveData = {
			lat : lat,
			lon : lon,
			Title : name,
			Description : info
		};
		var key = "geo:"+(new Date()).getTime();
		var ele = document.getElementById("status");
		function GetMap(){
		var map = new Bmap("#myMap");
		map.startMap(lat, lon, "load", 12);
		map.infobox(lat, lon, name, info);
		};
		try{
			window.localStorage.setItem(key, JSON.stringify(saveData));
		}catch(e){
			ele.innerHTML = "ローカルストレージに保存できませんでした";
			return;
		}
		ele.innerHTML = "お店情報と位置情報を保存しました";

	// お店一覧を更新
	generate();

},);

	// 現在地とお店情報をローカルストレージに保存
	$("#load").click(function(){
		generate();
	},);

		function generate(){
			var data = window.localStorage;
			var shopList = "";
			for(var i=0; i<data.length; i++){
				var dataKey = data.key(i);
				// キーがgeoで始まるかどうか調べる
				var pointer = dataKey.indexOf("geo:");
				// お店情報のみリストして表示する
				if(pointer == 0){
					// 日付を求める
					var dateTime = dataKey.substr("geo:".length, dataKey.length);
					var dateObj = new Date();
					dateObj.setTime(dateTime);
					var Y = dateObj.getFullYear();
					var M = dateObj.getMonth() + 1;
					var D = dateObj.getDate();
					var h = dateObj.getHours();
					var m = dateObj.getMinutes();
					var dateString = Y+"年"+M+"月"+D+"日　";
					dateString += h+"時"+m+"分";
					// リンクを生成
					var link = '<a href="#" onclick=loadShopData("'+data.key(i)+'")>'+dateString+'</a>';
					shopList += link+"<br>";
				}
			}
			document.getElementById("list").innerHTML = shopList;
			}

// リンクがクリックされた時の処理
function loadShopData(data){
	let shopData = JSON.parse(window.localStorage.getItem(data));
	document.getElementById("shopName").value = shopData.Title;
	document.getElementById("shopInfo").value = shopData.Description;
	let mlat = shopData.lat;
	let mlon = shopData.lon;
	let mname = shopData.Title;
	let minfo = shopData.Description;
	let mmap = new Bmap("#myMap");
	mmap.startMap(mlat, mlon, "load", 16);
	mmap.infobox(mlat, mlon, mname, minfo);
}

