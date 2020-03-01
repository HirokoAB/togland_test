/*
* rwdImageMaps jQuery plugin v1.6
*
* Allows image maps to be used in a responsive design by recalculating the area coordinates to match the actual image size on load and window.resize
*
* Copyright (c) 2016 Matt Stow
* https://github.com/stowball/jQuery-rwdImageMaps
* http://mattstow.com
* Licensed under the MIT license
*/
;(function($) {
	$.fn.rwdImageMaps = function() {
		var $img = this;
		console.log('これが$imgの中身',$img);

		var rwdImageMap = function() {
			$img.each(function() {
				if (typeof($(this).attr('usemap')) == 'undefined')
					return;

				var that = this,
					$that = $(that);
					console.log('これがthatの中身',$that);

				
				//webkitでは読み込み完了まで高さを取らないため、oonloadでコピーします
				//高さと幅をそれぞれ変数に格納する
				//wの変数に画像の幅を取得
				//hに画像の高さを取得

				//svgではどちらも取得できていない

				$img = $('img');
				$img.originSrc = $img.src;
				$img.src = ""; 
				// これで一旦クリアできます！
　　　　　　　　　　// Since WebKit doesn't know the height until after the image has loaded, perform everything in an onload copy
				$('<img />').on('load', function() {
					var attrW = 'width',
						attrH = 'height',
						w = $that.attr(attrW),
						h = $that.attr(attrH);
						console.log('これがattrWの中身',attrW)
						console.log('これがattrHの中身',attrH)
						console.log('これがwの中身',w)
						console.log('これがhの中身',h)

				//もし上記の数式で高さと幅が取得できていなければ
				//srcの
					if (!w || !h) {
						//ner Image=新しく画像を作成する
						var temp = new Image();

						console.log('これがtempの中身', temp);

						temp.src = $that.attr('src');

						console.log('これがtemp.srcの中身', temp.src);
						if (!w)
							w = $that.width;
						console.log('これがtempの幅', w)
						if (!h)
							h = $that.height;
						console.log('これがtempの高さ', h)
					}

					var wPercent = $that.width()/100,
						hPercent = $that.height()/100,
						map = $that.attr('usemap').replace('#', ''),
						c = 'coords';
						console.log('これが$thatの中身',$that);
						console.log('これがwPercentの中身', wPercent)
						console.log('これがhPercentの中身', hPercent)
		　　　			console.log('これがmapの中身', map)
						console.log('これがcの中身', c)

					$('map[name="' + map + '"]').find('area').each(function() {
						var $this = $(this);
						console.log('これが$thisの中身', $this)
						//もし$thisのdataが'coords'でなければ
						if (!$this.data(c))
							$this.data(c, $this.attr(c));
						//引数を二つ指定することで、置き換えをすることができる
						// var test = $this.data(c, $this.attr(c));
						// console.log('これがtestの中身', test);



						var coords = $this.data(c).split(','),
							coordsPercent = new Array(coords.length);
							console.log('これがcoordsの中身', coords)
							console.log('これがcoordsPercentの中身', coordsPercent)


						for (var i = 0; i < coordsPercent.length; ++i) {
							if (i % 2 === 0)
								coordsPercent[i] = parseInt(((coords[i]/w)*100)*wPercent),
							    //配列の中身を取得して
							    console.log('これがcoordsPercent[i]の中身', coordsPercent[i])

							else
								coordsPercent[i] = parseInt(((coords[i]/h)*100)*hPercent);
						}

						//thisの要素コードをコードパーセントで取得し文字列に変換した文字と置き換える
						$this.attr(c, coordsPercent.toString());
						////////////////////////////////////////
						var test_2 = $this.attr(c, coordsPercent.toString());
						console.log('これがtest_222の中身', test_2);
					});
					console.log('これが$thatからsrcを取得した結果',$that.attr('src'));
				}).attr('src', $that.attr('src'));
			});
		};
		$(window).resize(rwdImageMap).trigger('resize');

		return this;
	};
})(jQuery);