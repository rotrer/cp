(function($, window, document, undefined){

// flag for if we are switching the WYSIWYG editor
var isUsSwitching = false;
  
$(document).ready(function(){
  
  // assert that we can use tinymce
  if(!window.tinyMCE) {
    return; 
  }
  
  // Get the WYSIWYG settings
  var initSettings = {};
  jQuery.extend(initSettings, ((window.tinyMCEPreInit && window.tinyMCEPreInit.mceInit) ? window.tinyMCEPreInit.mceInit : {}));
  
  
  
  // Get the textareas marked for WYSIWYG
  var editors = $('textarea.ept-wysiwyg');
  var editor_ids = [];
  
  // Set up each editor
  editors
    .wrap('<div class="ept-wysiwyg-wrapper"></div>')
    .each(function(){
      var id = this.id;
      var t = jQuery(this);
      var buttons = jQuery('<div class="switch-wysiwyg-buttons"></div>');
      var area = t.parent();
      var textarea = $(this);
      area.before(buttons);
      
      var mode = 'visual';
      
      // save the id
      editor_ids.push(id);
      
      // switch to HTML button
      var html = jQuery('<a>HTML</a>').click(function() {
        if(mode=='html') {
          return;
        }
        mode = 'html';
        isUsSwitching = true;
        
        var height = area.height();
        
        window.tinyMCE.execCommand('mceRemoveControl', false, id);
        // Apply the WordPress formatting
        t.val(switchEditors.pre_wpautop(switchEditors.wpautop(t.val())));
        t.css({'height': height+'px', 'width': '100%', 'display': 'block'});
        t.focus();
        
        isUsSwitching = false;
      });
      buttons.append(html);
      
      
      // switch to WYSIWYG button
      var visual = jQuery('<a class="active">Visual</a>').click(function() {
        if(mode=='visual') {
          return;
        }
        mode = 'visual';
        
        //isUsSwitching = true;
        t.val(switchEditors.wpautop(t.val()));
        
        tinyMCE.execCommand('mceAddControl', false, id);
        
        //isUsSwitching = false;
      });
      buttons.append(visual);
      
      
      // change the active state
      buttons.find('a').bind('click', function(e) {
        buttons.find('a.active').removeClass('active');
        jQuery(e.target).addClass('active');
      });
    });
  
  
  //Create the TinyMCE WYSIWYG for each
  //delete(initSettings.editor_selector);
  //delete(initSettings.remove_linebreaks);
  //delete(initSettings.tabfocus_element);
  
  $.extend(initSettings, {
    mode : "exact",
    elements: editor_ids.join(', ')
    //apply_source_formatting: true
  });
  tinyMCE.init(initSettings);
  
  
  // Tie into the event and prevent the default WordPress behavior of removing the <p> and <br/>
  /*jQuery('body').bind('afterPreWpautop', function(e, o){
    if(isUsSwitching) {
      o.data = o.unfiltered
        .replace(/caption\]\[caption/g, 'caption] [caption')
        .replace(/<object[\s\S]+?<\/object>/g, function(a) {
          return a.replace(/[\r\n]+/g, ' ');
            });
    }
  
  }).bind('afterWpautop', function(e, o){
    if(isUsSwitching) {
      o.data = o.unfiltered;
    }
  });*/
  
});


})(jQuery, window, document);