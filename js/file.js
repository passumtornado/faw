
$(document).ready(function(){
      alert('hi');
      $("#file").on("change",function(e){
          var files = $(this)[0].files;
          if(files.length >= 2){
              alert('more files');
              $("#label_span").text(files.lenth + "files ready to upload");*/
    /     }else{
              alert('one file');
          }
      });
 });