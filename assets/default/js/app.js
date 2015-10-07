$(document).ready(function() {
	if ( $.isFunction($.fn.summernote)) {
		$('.editor').summernote({
		height: "180px",
		});
	}
	if ( $.isFunction($.fn.selectpicker)) {
		$('.selectpicker').selectpicker();
	}

	if ( $.isFunction($.fn.tablesorter)) {
		$(".tablesorter").tablesorter();
	}

	function readImage(file) {

	    var reader = new FileReader();
	    var image  = new Image();

	    reader.readAsDataURL(file);  
	    reader.onload = function(_file) {
	        image.src    = _file.target.result;              // url.createObjectURL(file);
	        image.onload = function() {
	            var w = this.width,
	                h = this.height,
	                t = file.type,                           // ext only: // file.type.split('/')[1],
	                n = file.name,
	                s = ~~(file.size/1024) +'KB';
	            $('#avatar-image').attr('src', this.src);
	        };
	        image.onerror= function() {
	            alert('Invalid file type: '+ file.type);
	        };      
	    };

	}

	$('.upload').hide();

	$('#change-avatar').click(function() {
		$('.upload').click();
	})

	$(".upload").change(function (e) {
	    if(this.disabled) return alert('File upload not supported!');
	    var F = this.files;
	    if(F && F[0]) for(var i=0; i<F.length; i++) readImage( F[i] );
	});

});
