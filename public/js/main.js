$(document).ready(function(){

	$('#flash').delay(5000).slideUp();

	$('.lang-switch-wrap .lang-switch').click(function(event) {
		$('.lang-switch-wrap .lang-switch').removeClass('active');
		$(this).addClass('active');
		let lang = $(this).data('lang');
		$('.translate-item').hide();
		$('.translate-'+lang).show();
	});
});

var pathname =  window.location.pathname; 

var active_menu = (pathname) => {
	$('.treeview-menu >li >a').each(function(index, el) {
		let href = $(this).attr('href');
		let $this = $(this);
		if(href == pathname){
			return select_menu($this);
		}else if (href.includes(pathname)) {
			return select_menu($this);
		}
	});
}

var select_menu = ($this) => {
	$this.parent('li').addClass('active')
	.end().closest('.treeview').addClass('menu-open active')
	.end().closest('.treeview-menu').show();
	return false;
}

active_menu(pathname);