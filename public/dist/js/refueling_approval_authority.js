function getemployee(){var positionid=$('#department').val();var datasring="positionid="+positionid;$.ajax({type:"POST",url:baseurl+"refueling/refueling/getemplist/"+positionid,data:datasring,success:function(data){$('#mtable').html(data);$("#demo").gs_multiselect();}});}
(function($){"use strict";var tableBootstrap4Style={initialize:function(){this.bootstrap4Styling();this.bootstrap4Modal();this.print();},bootstrap4Styling:function(){$('.bootstrap4-styling').DataTable();},bootstrap4Modal:function(){$('.bootstrap4-modal').DataTable({responsive:{details:{display:$.fn.dataTable.Responsive.display.modal({header:function(row){var data=row.data();return 'Details for '+data[0]+' '+data[1];}}),renderer:$.fn.dataTable.Responsive.renderer.tableAll({tableClass:'table'})}}});},print:function(){var rauthinfotable=$('#rauthinfo').DataTable({"processing":true,"serverSide":true,"ajax":{url:baseurl+"refueling/refueling/approvalauthoritysearch",type:"post","data":function(data){data.req_typesr=$('#req_typesr').val();data.req_phasesr=$('#req_phasesr').val();},error:function(){$("#employee_grid_processing").css("display","none");$('[data-toggle="tooltip"]').tooltip();}},lengthChange:false,});new $.fn.dataTable.Buttons(rauthinfotable,{buttons:[{extend:'copy',className:'btn-success'},{extend:'excel',className:'btn-success'},{extend:'pdf',className:'btn-success'},{extend:'print',className:'btn-success'},{extend:'colvis',className:'btn-success'}],});rauthinfotable.buttons().container().appendTo('#rauthinfo_wrapper .col-md-6:eq(0)');$('#btn-filter').click(function(){rauthinfotable.ajax.reload();});$('#btn-reset').click(function(){$('#req_typesr').val('').trigger('change');$('#req_phasesr').val('').trigger('change');rauthinfotable.ajax.reload();});}};$(document).ready(function(){"use strict";tableBootstrap4Style.initialize();});}(jQuery));$(document).ready(function(){$("#demo").gs_multiselect();$(".basic-single").select2();$('.timepicker').daterangepicker({singleDatePicker:true,timePicker:true,timePicker24Hour:false,"locale":{"format":"hh:mm A"}});$('.datetimepicker').daterangepicker({singleDatePicker:true,showDropdowns:true,minYear:1901,"drops":"up",locale:{format:'YYYY-MM-DD'},maxYear:parseInt(moment().format('YYYY'),10)},function(start,end,label){var years=moment().diff(start,'years');});$('.datetimepickerwd').daterangepicker({singleDatePicker:true,"timePicker":true,showDropdowns:true,"timePicker24Hour":true,minYear:1901,"drops":"up",locale:{format:'YYYY-MM-DD HH:mm'},maxYear:parseInt(moment().format('YYYY'),10)},function(start,end,label){var years=moment().diff(start,'years');});$('.form-check-input').bootstrapToggle();$('.skin-minimal .i-check input').iCheck({checkboxClass:'icheckbox_minimal',radioClass:'iradio_minimal',increaseArea:'20%'});$('.skin-square .i-check input').iCheck({checkboxClass:'icheckbox_square-green',radioClass:'iradio_square-green'});$('.skin-flat .i-check input').iCheck({checkboxClass:'icheckbox_flat-red',radioClass:'iradio_flat-red'});$('.skin-line .i-check input').each(function(){var self=$(this),label=self.next(),label_text=label.text();label.remove();self.iCheck({checkboxClass:'icheckbox_line-blue',radioClass:'iradio_line-blue',insert:'<div class="icheck_line-icon"></div>'+label_text});});});