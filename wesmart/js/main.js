(function ($) {
	$.fn.scrollingTo = function (opts) {
		var defaults = {
			animationTime: 1000,
			easing: '',
			callbackBeforeTransition: function () { },
			callbackAfterTransition: function () { }
		};

		var config = $.extend({}, defaults, opts);

		$(this).click(function (e) {
			var eventVal = e;
			e.preventDefault();

			var $section = $(document).find($(this).data('section'));
			if ($section.length < 1) {
				return false;
			}

			if ($('html, body').is(':animated')) {
				$('html, body').stop(true, true);
			}

			var scrollPos = $section.offset().top;

			if ($(window).scrollTop() === scrollPos) {
				return false;
			}

			config.callbackBeforeTransition(eventVal, $section);

			$('html, body').animate({
				'scrollTop': (scrollPos + 'px')
			}, config.animationTime, config.easing, function () {
				config.callbackAfterTransition(eventVal, $section);
			});
		});
	};
	/* ========================================================================= */
    /*   Contact Form Validating
    /* ========================================================================= */
	$('#contact-form').validate({
		rules: {
			name: {
				required: true, minlength: 4
			},
			email: {
				required: true, email: true
			},
			product: {
				required: true,
			},
			phone: {
				required: true,
			},
			message: {
				required: true,
			}
		},
		messages: {
			name: {
				required: "Come on, you have a name don't you?", minlength: "Your name must consist of at least 2 characters"
			},
			email: {
				required: "Please put your email address.",
			},
			product: {
				required: "Put the product name."
			},
			phone: {
				required: "Put your contact number."
			},
			message: {
				required: "Put some messages here?", minlength: "Your name must consist of at least 2 characters"
			}
		},
		submitHandler: function (form) {
			$(form).ajaxSubmit({
				type: "POST",
				data: $(form).serialize(),
				url: "sendmail.php",
				success: function () {
					$("#contact-form").trigger('reset');
					$('#contact-form #success').fadeIn();
				},
				error: function () {
					$('#contact-form #error').fadeIn();
				}
			}
			);
		}
	});
}(jQuery));
jQuery(document).ready(function () {
	"use strict";
	new WOW().init();
	(function () {
		jQuery('.smooth-scroll').scrollingTo();
	}());
});
$(document).ready(function () {
	$(window).scroll(function () {
		if ($(window).scrollTop() > 50) {
			$(".navbar-brand a").css("color", "#fff");
			$("#top-bar").removeClass("animated-header");
		} else {
			$(".navbar-brand a").css("color", "inherit");
			$("#top-bar").addClass("animated-header");
		}
	});
});
// fancybox
$(".fancybox").fancybox({
	padding: 0,
	openEffect: 'elastic',
	openSpeed: 450,
	closeEffect: 'elastic',
	closeSpeed: 350,
	closeClick: true,
	helpers: {
		title: {
			type: 'inside'
		},
		overlay: {
			css: {
				'background': 'rgba(0,0,0,0.8)'
			}
		}
	}
});

$(function () {
	"use strict";
	var serviceTitle = "";
	var amountInUSD="";
	var amountMYR = "";
	$(document).on("click", ".shop-btn", function (eve) {
		eve.preventDefault();
		var self = $(this);
		//serviceTitle = self.attr("data-serviceTitle");
		amountInUSD = self.attr("data-codeUSD");
		amountInMYR = self.attr("data-codeMYR");

		var newLocation = $(this).attr('href');
		var data = {
			serviceTitle: serviceTitle,
			amountMYR: amountInMYR,
			amountUSD: amountInUSD
		};
		
	});
	
		//var data = localStorage.getItem("data");
		
			$("#amount").val( localStorage.getItem("amount")).focus();
			$("#serviceName").val(data.serviceTitle);
		
	$(document).on("change", "#curreny", function () {
		var self = $(this);
		var selectedVal = self.val();
		var dat = localStorage.getItem("data");
		if (dat) {
			dat = JSON.parse(decodeURI(dat));
		}
		if (selectedVal === "MYR") {
			$("#amount").val(dat.amountMYR);
		}
		else {
			$("#amount").val(dat.amountUSD);
		}
	});
	$("#confirm").on("click", function () {


		var validationsPassed = true;
		var self = $(this);

		var obj = {
			fulName: $("#fulName").val().trim(),
			birthDate: $("#birthDate").val().trim(),
			amount: $("#amount").val().trim(),
			emailField: $("#emailField").val().trim(),
			phone: $("#phone").val().trim(),
			curreny: $("#curreny").val(),
			address: $("#address").val().trim(),
			serviceName: $("#serviceName").val().trim(),
			postalCode: $("#postalCode").val().trim(),
			city: $("#city").val().trim(),
			state: $("#state").val().trim(),
			country: $("#country").val().trim(),
			secret: $("#secret").val().trim(),
		};
		if (amount.value <= 1) {
			swal("Uh !", "Your Ammount must be More than 1 MYR !", "error");
			amount.focus();
			return false;
		}
		var isValid = 0;

		for (var keys in obj) {
			if (!obj[keys]) {
				var $el = $("#" + keys);
				$el.addClass("errField");
				validationsPassed = false;
			}
		}
		if (!validationsPassed) {
			return;
		}

		if (!validateEmail(obj.emailField)) {
			var $el = $("#emailField");
			$el.addClass("errField");
			validationsPassed = false;
			return;
		}

		var isAggree = $("#checkBox_isAggree").prop("checked");

		if (!isAggree) {
			var $el = $("#para_isAggree");
			$el.addClass("errField");
			validationsPassed = false;
			return;
		}

		var dataObj = $("#paymentForm").serializeArray();
		self.attr("disabled", true);

		validateSecretKey(obj.secret)
			.then(function () {
				$.ajax({
					type: "post",
					url: "saveOrder.php",
					data: dataObj,
					success: function (success) {
						success = JSON.parse(success);
						if (!success.status) {
							self.removeAttr("disabled");
							return alert(success.message || "Error received from server");
						}

						modifyFieldsForeGHL(success.data);
						$("#paymentForm").submit();
						//localStorage.clear();
					},
					error: function () {
						self.removeAttr("disabled");
						console.log(" Error in sending data ");
					}
				});
			}, function(){
				$("#confirm").removeAttr("disabled");
			});
	});


	function modifyFieldsForeGHL(orderID){
		$("#CustName").val($("#fulName").val().trim());
		$("#CustEmail").val($("#emailField").val().trim());
		$("#CustPhone").val($("#phone").val().trim());
		$("#CurrencyCode").val($("select#curreny").val().trim());
		$("#PaymentID").val(orderID);
		$("#OrderNumber").val("Wesmartify Order "+ orderID);
		var enteredPayment = Number($("#amount").val().trim());
		var selectedCurrency = $("select#curreny").val();
		if(!enteredPayment){
			alert("Action denied, please enter a valid number in payment field.");
			return $("#amount").focus();
		}
		if(!selectedCurrency){
			alert("Action denied, please select a currency.");
			return $("select#curreny").focus();
		}

		$("#eGHLAmount").val(parseInt(enteredPayment) + ".00");
		
		var str = "wsy12345" + $("#ServiceID").val()+ $("#PaymentID").val() + $("#MerchantReturnURL").val() + $("#MerchantCallbackURL").val() + $("#eGHLAmount").val() + $("#CurrencyCode").val() + $("#CustIP").val() + $("#PageTimeout").val()

		$("#HashValue").val(SHA256(str));
		$("#paymentForm").attr("action", "https://test2pay.ghl.com/IPGSG/Payment.aspx");

		$(".eGHLFormField").removeAttr("disabled");
		$(".viewOnlyFormFields").attr("disabled", true);
	}


	function validateSecretKey(sec) {
		var isValid = 0;
		return new Promise(function (resolve, reject) {
			$.ajax({
				type: "post",
				url: "check_secret_key.php",
				data: { secret: sec },
				success: function (success) {
					success = JSON.parse(success);
					if (success.status === 0) {
						swal("Uh !", "You Entered Incorrect Subscription Code !", "error");
						if (sec == "") {
							var lt = $('#secret');
							lt.addClass("errField");
						}
						reject(isValid);
					}
					else {
						isValid = 1;
						resolve(isValid);
					}
				},
				error: function () {
					canSubmit = 0;
					swal("Uh !", "Something went wrong with subscription code !", "error");
					reject(isValid);
				}
			});
		});
	}


	$(document).on("change", '#checkBox_isAggree', function () {
		var $el = $("#para_isAggree");
		$(this).removeClass("errField");
	});

	$(document).on("focus", '.errField', function () {
		$(this).removeClass("errField");
	});
	function validateEmail(email) {
		var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test(email);
	}

});

$(document).ready(function () {
	//Disable mouse right click
	$("body").on("contextmenu", function (e) {
		return false;
	});
});
