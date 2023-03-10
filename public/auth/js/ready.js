"use strict";
var check = $('input[name="login-sess"]').val();
if(check){
	$(window).ready(function () {
		// setInterval(function() {
			$('.wait').fadeOut(1000,function(){$(this).remove();});
			$(".load").fadeIn(1000);
		// },2000);
	});
}

$(document).ready(function() {
	if(document.getElementById('realtime')){
		var rep = true;
		var count = 0;
		setInterval(function() {
			$('#realtime').removeClass('loading-trans');
			$('#realtime').html(moment().format('DD MMM YYYY') + '<i class="ml-1 mr-1"></i>' + moment().format('hh:mm:ss A'));

			// if($('input[name="login-time"]').val() == moment().format('hh:mm:ss')){
			// 	$(".wait").fadeOut();
			// 	$(".load").fadeIn(1000);
			// }else{
			// 	$(".wait").hide();
			// 	$(".load").show();
			// }
			
			// $.ajax({
			// 	url: "home/cek_session",
			// 	method: "GET",
			// 	dataType: "json",
			// 	success: function (cek) {
			// 		if(!cek && rep){
			// 			rep=false;
			// 			setInterval(function() {
			// 				count++;
			// 				swal("Sesi login selesai!", "anda akan keluar dalam "+(count > 100 ? 100 : count)+"%", {
			// 					icon: "info",
			// 					buttons: false
			// 				});
			// 				if(count==100){
			// 					window.location.reload(true);
			// 				}
			// 			}, 10);
			// 		}
			// 	},
			// });
		}, 100);
	}
});

function layoutsColors() {
	$(".sidebar").is("[data-background-color]")
		? $("html").addClass("sidebar-color")
		: $("html").removeClass("sidebar-color"),
		$(".sidebar").is("[data-image]")
			? ($(".sidebar").append("<div class='sidebar-background'></div>"),
			  $(".sidebar-background").css(
					"background-image",
					'url("' + $(".sidebar").attr("data-image") + '")'
			  ))
			: ($(this).remove(".sidebar-background"),
			  $(".sidebar-background").css("background-image", ""));
}
function legendClickCallback(a) {
	for (
		var s = (a = a || window.event).target || a.srcElement;
		"LI" !== s.nodeName;

	)
		s = s.parentElement;
	var e = s.parentElement,
		n = parseInt(e.classList[0].split("-")[0], 10),
		i = Chart.instances[n],
		o = Array.prototype.slice.call(e.children).indexOf(s);
	i.legend.options.onClick.call(i, a, i.legend.legendItems[o]),
		i.isDatasetVisible(o)
			? s.classList.remove("hidden")
			: s.classList.add("hidden");
}
function readURL(a) {
	if (a.files && a.files[0]) {
		var s = new FileReader();
		(s.onload = function (s) {
			$(a)
				.parent(".input-file-image")
				.find(".img-upload-preview")
				.attr("src", s.target.result);
		}),
			s.readAsDataURL(a.files[0]);
	}
}
function showPassword(a) {
	var s = $(a).parent().find("input");
	"password" === s.attr("type")
		? s.attr("type", "text")
		: s.attr("type", "password");
}
function changeContainer() {
	1 == showSignIn
		? containerSignIn.css("display", "block")
		: containerSignIn.css("display", "none"),
		1 == showSignUp
			? containerSignUp.css("display", "block")
			: containerSignUp.css("display", "none");
}
$(".nav-search .input-group > input")
	.focus(function (a) {
		$(this).parent().addClass("focus");
	})
	.blur(function (a) {
		$(this).parent().removeClass("focus");
	}),
	$(function () {
		$('[data-toggle="tooltip"]').tooltip(),
			$('[data-toggle="popover"]').popover(),
			layoutsColors();
	}),
	$(document).ready(function () {
		$(".btn-refresh-card").on("click", function () {
			var a = $(this).parents(".card");
			a.length &&
				(a.addClass("is-loading"),
				setTimeout(function () {
					a.removeClass("is-loading");
				}, 3e3));
		});
		var a = $(".sidebar .scrollbar-inner");
		a.length > 0 && a.scrollbar();
		var s = $(".messages-scroll.scrollbar-outer");
		s.length > 0 && s.scrollbar();
		var e = $(".tasks-scroll.scrollbar-outer");
		e.length > 0 && e.scrollbar();
		var n = $(".quick-scroll");
		n.length > 0 && n.scrollbar();
		var i = $(".message-notif-scroll");
		i.length > 0 && i.scrollbar();
		var o = $(".notif-scroll");
		o.length > 0 && o.scrollbar(), $(".scroll-bar").draggable();
		var t = !1,
			l = !1,
			r = !1,
			c = !1,
			d = 0,
			g = 0,
			h = 0,
			m = 0;
		if (!t) {
			var p = $(".sidenav-toggler");
			p.on("click", function () {
				1 == d
					? ($("html").removeClass("nav_open"),
					  p.removeClass("toggled"),
					  (d = 0))
					: ($("html").addClass("nav_open"), p.addClass("toggled"), (d = 1));
			}),
				(t = !0);
		}
		if (!l) {
			var u = $(".topbar-toggler");
			u.on("click", function () {
				1 == g
					? ($("html").removeClass("topbar_open"),
					  u.removeClass("toggled"),
					  (g = 0))
					: ($("html").addClass("topbar_open"), u.addClass("toggled"), (g = 1));
			}),
				(l = !0);
		}
		if (!r) {
			var f = $(".btn-minimize");
			$("html").hasClass("sidebar_minimize") &&
				((h = 1),
				f.addClass("toggled"),
				f.html('<i class="fa fa-ellipsis-v"></i>')),
				f.on("click", function () {
					1 == h
						? ($("html").removeClass("sidebar_minimize"),
						  f.removeClass("toggled"),
						  f.html('<i class="fa fa-bars"></i>'),
						  (h = 0))
						: ($("html").addClass("sidebar_minimize"),
						  f.addClass("toggled"),
						  f.html('<i class="fa fa-ellipsis-v"></i>'),
						  (h = 1)),
						$(window).resize();
				}),
				(r = !0);
		}
		if (!c) {
			var b = $(".page-sidebar-toggler");
			b.on("click", function () {
				1 == m
					? ($("html").removeClass("pagesidebar_open"),
					  b.removeClass("toggled"),
					  (m = 0))
					: ($("html").addClass("pagesidebar_open"),
					  b.addClass("toggled"),
					  (m = 1));
			});
			$(".page-sidebar .back").on("click", function () {
				$("html").removeClass("pagesidebar_open"),
					b.removeClass("toggled"),
					(m = 0);
			}),
				(c = !0);
		}
		$(".sidebar").hover(
			function () {
				$("html").hasClass("sidebar_minimize") &&
					$("html").addClass("sidebar_minimize_hover");
			},
			function () {
				$("html").hasClass("sidebar_minimize") &&
					$("html").removeClass("sidebar_minimize_hover");
			}
		),
			$(".nav-item a").on("click", function () {
				$(this).parent().find(".collapse").hasClass("show")
					? $(this).parent().removeClass("submenu")
					: $(this).parent().addClass("submenu");
			}),
			$(".messages-contact .user a").on("click", function () {
				$(".tab-chat").addClass("show-chat");
			}),
			$(".messages-wrapper .return").on("click", function () {
				$(".tab-chat").removeClass("show-chat");
			}),
			$('[data-select="checkbox"]').change(function () {
				var a = $(this).attr("data-target");
				$(a).prop("checked", $(this).prop("checked"));
			}),
			$(".form-group-default .form-control")
				.focus(function () {
					$(this).parent().addClass("active");
				})
				.blur(function () {
					$(this).parent().removeClass("active");
				});
	}),
	$('.input-file-image input[type="file"').change(function () {
		readURL(this);
	}),
	$(".show-password").on("click", function () {
		showPassword(this);
	});
var containerSignIn = $(".container-login"),
	containerSignUp = $(".container-signup"),
	showSignIn = !0,
	showSignUp = !1;
$("#show-signup").on("click", function () {
	(showSignUp = !0), (showSignIn = !1), changeContainer();
}),
	$("#show-signin").on("click", function () {
		(showSignUp = !1), (showSignIn = !0), changeContainer();
	}),
	changeContainer(),
	$(".form-floating-label .form-control").keyup(function () {
		"" !== $(this).val()
			? $(this).addClass("filled")
			: $(this).removeClass("filled");
	});
