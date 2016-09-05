//
(function($){
	var viewUl = $("div.view")
		.css("overflow", "hidden")
		.children("ul"),
		imgs = viewUl.find("img"),
		imgW = 400,
		imgsLen = imgs.length,
		totalImgsW = imgsLen * imgW,
		current = 1;

	$("div#show")
		.show()
		.find("button")
		.on("click", function(){
			//var direction = $(this).attr("id");
			var direction = $(this).data("param"),
				position = imgW;
			(direction == "next") ? ++current : --current;
			if (current == 0) {
				current = imgsLen; //set last image
				direction = "next";
				position = totalImgsW - imgW;
			} else if (current - 1 == imgsLen) {
				current = 1; //set first image
				position = 0;
			}
			doIt(viewUl, position, direction);
		});

	function doIt(container, position, direction) {
		var sign; //string "-=" or "+="
		if (direction && position != 0) {
			sign = (direction == 'next') ? "-=" : "+=";
		}
		var shift = {"margin-left": sign ? (sign+position) : position};
		var duration = {};
		if (position == 0 || position == imgW * (imgsLen - 1)) {
			duration = {duration: 0}
		}
		container.animate(shift, duration);
	}

})(jQuery);