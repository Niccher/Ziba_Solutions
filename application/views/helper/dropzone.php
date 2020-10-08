<script type="text/javascript" src="<?php echo base_url('assets/js/dropzone.min.js');?>"></script>

<script>
	Dropzone.options.dropzoneFrom = {
	  acceptedFiles: "image/*,.jpeg,.jpg,.doc,.pdf,.docx,.zip,.ppt,.ods,.xls,.xlsx,.csv,.ics,.vcf,.7z,.a,.apk,.ar,.bz2,.cab,.cpio,.deb,.dmg,.egg,.gz,.iso,.jar,.lha,.mar,.pea,.rar,.rpm,.s7z,.shar,.tar,.tbz2,.tgz,.tlz,.war,.whl,.xpi,.zip,.zipx,.xz,.pak,.c,.cc,.class,.clj,.cpp,.cs,.cxx,.el,.go,.h,.java,.lua,.m,.m4,.swift,.vb,.vcxproj,.xcodeproj,.xml,.diff,.patch,.doc,.docx,.ebook,.log,.md,.msg,.odt,.org,.pages,.pdf,.rtf,.rst,.tex,.txt,.wpd,.wps,.ppt,.pot,.pps,.pptx,.pptm,.potx,.potm,.ppam,.ppsx,.ppsm,.sldx,.sldm,.ACCDB,.ACCDE,.ACCDT,.ACCDR,.doc,.dot,.wbk,.docx,.docm,.dotx,.dotm,.docb,.xls,.xlt,.xlm,.xlsx,.xlsm,.xltx,.xltm,.xlsb,.xla,.xlam,.xll,.xlw"
	}

		function sendRequest(){
		    $.ajax({
		        url: '<?php echo base_url()."get_files"; ?>',
		        success: function(result){
		            $("#filed").html(result).load('<?php echo base_url()."get_files"; ?>').fadeIn();
		            setTimeout(function(){
		                sendRequest(); //this will send request again and again;
		            }, 5000);
		        }
		    });
		}

	sendRequest();
</script>