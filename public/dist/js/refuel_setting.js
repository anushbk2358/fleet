function getdrivermobile(){"use strict";var driverid=$("#driver_name").val();var datasring="did="+driverid;$.ajax({type:"POST",url:baseurl+"refueling/Refueling/getemobile",data:datasring,success:function(data){if(data!="404"){$("#driver_mobile").val(data);}else{$("#driver_mobile").val('');}}});}
$(document).ready(function(){"use strict";$(".basic-single").select2();$('.timepicker').daterangepicker({singleDatePicker:true,timePicker:true,timePicker24Hour:false,"locale":{"format":"hh:mm A"}});$('.datetimepicker').daterangepicker({singleDatePicker:true,showDropdowns:true,minYear:1901,"drops":"up",locale:{format:'YYYY-MM-DD'},maxYear:parseInt(moment().format('YYYY'),10)},function(start,end,label){var years=moment().diff(start,'years');});$('.newdatetimepicker').daterangepicker({singleDatePicker:true,showDropdowns:true,autoUpdateInput:false,minYear:1901,maxDate:'2100',"drops":"down",locale:{format:'YYYY-MM-DD'},maxYear:parseInt(moment().format('YYYY'),10)},function(start,end,label){var years=moment().diff(start,'years');});$('.newdatetimepicker').on('apply.daterangepicker',function(ev,picker){$(this).val(picker.startDate.format('YYYY-MM-DD'));});$('.newdatetimepicker').on('cancel.daterangepicker',function(ev,picker){$(this).val('');});$('.datetimepickerwd').daterangepicker({singleDatePicker:true,"timePicker":true,showDropdowns:true,"timePicker24Hour":true,minYear:1901,"drops":"up",locale:{format:'YYYY-MM-DD HH:mm'},maxYear:parseInt(moment().format('YYYY'),10)},function(start,end,label){var years=moment().diff(start,'years');});$('.form-check-input').bootstrapToggle();$('.skin-minimal .i-check input').iCheck({checkboxClass:'icheckbox_minimal',radioClass:'iradio_minimal',increaseArea:'20%'});$('.skin-square .i-check input').iCheck({checkboxClass:'icheckbox_square-green',radioClass:'iradio_square-green'});$('.skin-flat .i-check input').iCheck({checkboxClass:'icheckbox_flat-red',radioClass:'iradio_flat-red'});$('.skin-line .i-check input').each(function(){var self=$(this),label=self.next(),label_text=label.text();label.remove();self.iCheck({checkboxClass:'icheckbox_line-blue',radioClass:'iradio_line-blue',insert:'<div class="icheck_line-icon"></div>'+label_text});});});(function($){"use strict";var tableBootstrap4Style={initialize:function(){this.bootstrap4Styling();this.bootstrap4Modal();this.print();},bootstrap4Styling:function(){$('.bootstrap4-styling').DataTable();},bootstrap4Modal:function(){$('.bootstrap4-modal').DataTable({responsive:{details:{display:$.fn.dataTable.Responsive.display.modal({header:function(row){var data=row.data();return 'Details for '+data[0]+' '+data[1];}}),renderer:$.fn.dataTable.Responsive.renderer.tableAll({tableClass:'table'})}}});},print:function(){var table=$('#refule_example').DataTable({lengthChange:false,buttons:[{extend:'copy',className:'btn-success'},{extend:'excel',className:'btn-success'},{extend:'pdf',className:'btn-success'},{extend:'print',className:'btn-success'},{extend:'colvis',className:'btn-success'}]});table.buttons().container().appendTo('#refule_example_wrapper .col-md-6:eq(0)');}};$(document).ready(function(){"use strict";tableBootstrap4Style.initialize();});}(jQuery));