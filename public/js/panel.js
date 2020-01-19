$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    if ($('.save-setting-btn')) {
        $('.save-setting-btn').click(function() {

            var el = $(this).parent().parent().find('textarea'),
                value = el.val(),
                name = el.attr('name');
            $(this).attr('disabled', true);
            $.ajax({
                type: "POST",
                url: 'settings/' + name,
                data: {value: value},
                success: function () {
                    $(this).attr('disabled', false);
                }
            });
        });
    }

    if ($('.js-select-courses-multiple').length > 0) {
      $('.js-select-courses-multiple').select2();
    }
    if ($('.js-select-materials-multiple').length > 0) {
      $('.js-select-materials-multiple').select2();
    }

    if ($('#js-course-materials-filer').length > 0) {
      $('#js-course-materials-filer').filer({
          limit: 1,
          maxSize: null,
          extensions: null,
          changeInput: '<div class="jFiler-input-dragDrop"><div class="jFiler-input-inner"><div class="jFiler-input-icon"><i class="icon-jfi-cloud-up-o"></i></div><div class="jFiler-input-text"><h3>Drag&Drop files here</h3> <span style="display:inline-block; margin: 15px 0">or</span></div><a class="jFiler-input-choose-btn blue">Browse Files</a></div></div>',
          showThumbs: true,
          theme: "dragdropbox",
          templates: {
              box: '<ul class="jFiler-items-list jFiler-items-grid"></ul>',
              item: '<li class="jFiler-item">\
						<div class="jFiler-item-container">\
							<div class="jFiler-item-inner">\
								<div class="jFiler-item-thumb">\
									<div class="jFiler-item-status"></div>\
									<div class="jFiler-item-thumb-overlay">\
										<div class="jFiler-item-info">\
											<div style="display:table-cell;vertical-align: middle;">\
												<span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name}}</b></span>\
												<span class="jFiler-item-others">{{fi-size2}}</span>\
											</div>\
										</div>\
									</div>\
									{{fi-image}}\
								</div>\
								<div class="jFiler-item-assets jFiler-row">\
									<ul class="list-inline pull-left">\
										<li>{{fi-progressBar}}</li>\
									</ul>\
									<ul class="list-inline pull-right">\
										<li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
									</ul>\
								</div>\
							</div>\
						</div>\
					</li>',
              itemAppend: '<li class="jFiler-item">\
							<div class="jFiler-item-container">\
								<div class="jFiler-item-inner">\
									<div class="jFiler-item-thumb">\
										<div class="jFiler-item-status"></div>\
										<div class="jFiler-item-thumb-overlay">\
											<div class="jFiler-item-info">\
												<div style="display:table-cell;vertical-align: middle;">\
													<span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name}}</b></span>\
													<span class="jFiler-item-others">{{fi-size2}}</span>\
												</div>\
											</div>\
										</div>\
										{{fi-image}}\
									</div>\
									<div class="jFiler-item-assets jFiler-row">\
										<ul class="list-inline pull-left">\
											<li><span class="jFiler-item-others">{{fi-icon}}</span></li>\
										</ul>\
										<ul class="list-inline pull-right">\
											<li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
										</ul>\
									</div>\
								</div>\
							</div>\
						</li>',
              progressBar: '<div class="bar"></div>',
              itemAppendToEnd: false,
              canvasImage: true,
              removeConfirmation: true,
              _selectors: {
                  list: '.jFiler-items-list',
                  item: '.jFiler-item',
                  progressBar: '.bar',
                  remove: '.jFiler-item-trash-action'
              }
          },
          dragDrop: {
              dragEnter: null,
              dragLeave: null,
              drop: null,
              dragContainer: null,
          },
          uploadFile: {
              url: "/panel/file/upload",
              data: null,
              type: 'POST',
              enctype: 'multipart/form-data',
              synchron: true,
              beforeSend: function(obj){
                  var materialId = $('input[name=material_id]').val();
                  this.data = {material_id: materialId}
              },
              success: function(data, itemEl, listEl, boxEl, newInputEl, inputEl, id){
                  var parent = itemEl.find(".jFiler-jProgressBar").parent(),
                      new_file_name = data.filename,
                      filerKit = inputEl.prop("jFiler");

                  filerKit.files_list[id].name = new_file_name;

                  itemEl.find(".jFiler-jProgressBar").fadeOut("slow", function(){
                      $("<div class=\"jFiler-item-others text-success\"><i class=\"icon-jfi-check-circle\"></i> Success</div>").hide().appendTo(parent).fadeIn("slow");
                  });

                  var link = "new_file_name";
                  $('#material_link').val(new_file_name);
                  $('#material_link_external').prop( "checked", false );
              },
              error: function(el){
                  var parent = el.find(".jFiler-jProgressBar").parent();
                  el.find(".jFiler-jProgressBar").fadeOut("slow", function(){
                      $("<div class=\"jFiler-item-others text-error\"><i class=\"icon-jfi-minus-circle\"></i> Error</div>").hide().appendTo(parent).fadeIn("slow");
                  });
              },
              statusCode: null,
              onProgress: null,
              onComplete: null
          },
          files: null,
          addMore: false,
          allowDuplicates: true,
          clipBoardPaste: true,
          excludeName: null,
          beforeRender: null,
          afterRender: null,
          beforeShow: null,
          beforeSelect: null,
          onSelect: null,
          afterShow: null,
          onRemove: function(itemEl, file, id, listEl, boxEl, newInputEl, inputEl){
              var filerKit = inputEl.prop("jFiler"),
                  file_name = filerKit.files_list[id].name;

              $.post('/panel/file/remove', {filename: file_name});
          },
          onEmpty: null,
          options: null,
          dialogs: {
              alert: function(text) {
                  return alert(text);
              },
              confirm: function (text, callback) {
                  confirm(text) ? callback() : null;
              }
          },
          captions: {
              button: "Choose Files",
              feedback: "Choose files To Upload",
              feedback2: "files were chosen",
              drop: "Drop file here to Upload",
              removeConfirmation: "Are you sure you want to remove this file?",
              errors: {
                  filesLimit: "Only {{fi-limit}} files are allowed to be uploaded.",
                  filesType: "Only Images are allowed to be uploaded.",
                  filesSize: "{{fi-name}} is too large! Please upload file up to {{fi-maxSize}} MB.",
                  filesSizeAll: "Files you've choosed are too large! Please upload files up to {{fi-maxSize}} MB."
              }
          }
      });
    }
});

