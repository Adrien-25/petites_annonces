console.log(window.location.href);
console.log(window.location.pathname);
if(window.location.pathname == "/petites-annonces/public/poster"){
  console.log('TEST');
  Dropzone.autoDiscover = false;
  var dropzone = new Dropzone('#upload-pic', {
    //previewTemplate: document.querySelector('preview-template').innerHTML,
    parallelUploads: 1,
    thumbnailHeight: 120,
    thumbnailWidth: 120,
    maxFilesize: 1,
    filesizeBase: 1000,
    thumbnail: function (file, dataUrl) {
      if (file.previewElement) {
        
        file.previewElement.classList.remove("dz-file-preview");
        
        document.getElementById('upload-pic').classList.add('pb-3')
        var images = file.previewElement.querySelectorAll("[data-dz-thumbnail]");
        for (var i = 0; i < images.length; i++) {
          var thumbnailElement = images[i];
          thumbnailElement.alt = file.name;
          thumbnailElement.src = dataUrl;
        }
        var DeletePic = document.getElementById('icon-delete');
        DeletePic.classList.remove('d-none');
        DeletePic.addEventListener("click", function () {
          dropzone.removeFile(file);
          DeletePic.classList.add('d-none');
        });
  
        setTimeout(function () {
          file.previewElement.classList.add("dz-image-preview");
        }, 1);
      }
    }
  
  });
  
  
  // Now fake the file upload, since GitHub does not handle file uploads
  // and returns a 404
  var minSteps = 6,
    maxSteps = 60,
    timeBetweenSteps = 100,
    bytesPerStep = 100000;
  
  dropzone.uploadFiles = function (files) {
    var self = this;
  
    for (var i = 0; i < files.length; i++) {
  
      var file = files[i];
      totalSteps = Math.round(Math.min(maxSteps, Math.max(minSteps, file.size / bytesPerStep)));
  
      for (var step = 0; step < totalSteps; step++) {
        var duration = timeBetweenSteps * (step + 1);
        setTimeout(function (file, totalSteps, step) {
          return function () {
            file.upload = {
              progress: 100 * (step + 1) / totalSteps,
              total: file.size,
              bytesSent: (step + 1) * file.size / totalSteps
            };
  
            self.emit('uploadprogress', file, file.upload.progress, file.upload.bytesSent);
            if (file.upload.progress == 100) {
              file.status = Dropzone.SUCCESS;
              self.emit("success", file, 'success', null);
              self.emit("complete", file);
              self.processQueue();
              //document.getElementsByClassName("dz-success-mark").style.opacity = "1";
            }
          };
        }(file, totalSteps, step), duration);
      }
    }
  }
}
Dropzone.options.myDropzone= {
  url: '/poster',
  autoProcessQueue: false,
  uploadMultiple: true,
  parallelUploads: 5,
  maxFiles: 5,
  maxFilesize: 1,
  acceptedFiles: 'image/*',
  addRemoveLinks: true,
  init: function() {
      dzClosure = this; // Makes sure that 'this' is understood inside the functions below.

      // for Dropzone to process the queue (instead of default form behavior):
      document.getElementById("submit-all").addEventListener("click", function(e) {
          // Make sure that the form isn't actually being sent.
          e.preventDefault();
          e.stopPropagation();
          dzClosure.processQueue();
      });

      //send all the form data along with the files:
      this.on("sendingmultiple", function(data, xhr, formData) {
          formData.append("firstname", jQuery("#firstname").val());
          formData.append("lastname", jQuery("#lastname").val());
      });
  }
}