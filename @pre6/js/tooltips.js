$(document).ready(function() {
	let tooltipColor = "#e74c3c";
	let tooltipPosition = "right";
	let tooltipName = "Ana Cortés";
	let tooltipPhone = "+502 XXX-XXX-XX";
	let phoneCode = "+502";
	let tooltipStyle = '<style>.input-group{position:relative;}.input-group input{width:100%;box-sizing:border-box;}.input-group:before{z-index:99;content:attr(data-content)"";position:absolute;top:-15px;' + tooltipPosition + ":0;background:" + tooltipColor + ";color:#fff;border-radius:5px;padding:3px 5px;font-family: Arial;font-size: 14px}.tooltip-hide.input-group:before{display: none;}</style>";
	$(document).ready(function() {
		$(document.body).append(tooltipStyle);
		$(".input-group").click(function() {
			let $input = $(this).find("input[name]");
			let currentInput = $input.attr("name");
			switch (currentInput) {
				case "name":
					$(this).attr("data-content", tooltipName);
					break;
				case "phone":
					$(this).attr("data-content", tooltipPhone);
					$input.addClass("only-phone");
					break
			}
			$(this).removeClass("tooltip-hide")
		})
	});
	let mask = {
		phoneInputs: $('input[name="phone"]'),
		init: function() {
			if (this.phoneInputs) {
				$(this.phoneInputs).attr("pattern", "^[+]?[0-9]+$");
				$(this.phoneInputs).on("focusin", function() {
					let code = phoneCode;
					this.value = !(this.value.length > code.length) ? code : this.value
				});
				$(this.phoneInputs).on("input", function() {
					let code = phoneCode;
					this.value.indexOf(code) && (this.value = code)
				})
			}
		}
	};
	mask.init()
});