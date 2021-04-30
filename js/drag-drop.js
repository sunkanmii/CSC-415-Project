const CLOUDINARY_PRESET = 'njr1g5gt';
const displayMsg = document.querySelector("#p415-display-message");
let dropArea = document.getElementById('drop-area');
// Track file progress
let filesDone = 0;
let filesToDo = 0;
let progressBar = document.getElementById('progress-bar');
let uploadProgress = [];
;
['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
    dropArea.addEventListener(eventName, preventDefaults, false)
})

;
['dragenter', 'dragover'].forEach(eventName => {
    dropArea.addEventListener(eventName, highlight, false)
})

;
['dragleave', 'drop'].forEach(eventName => {
    dropArea.addEventListener(eventName, unhighlight, false)
})

function handleFiles(files) {
    ([...files]).forEach(uploadFile)
    initializeProgress(files.length)
}

function initializeProgress(numFiles) {
    progressBar.value = 0
    uploadProgress = []

    for(let i = numFiles; i > 0; i--) {
      uploadProgress.push(0)
    }
}

function updateProgress(fileNumber, percent) {
    uploadProgress[fileNumber] = percent
  let total = uploadProgress.reduce((tot, curr) => tot + curr, 0) / uploadProgress.length
  progressBar.value = total
    
}

function highlight(e) {
    dropArea.classList.add('highlight')
}

function unhighlight(e) {
    dropArea.classList.remove('highlight')
}

function preventDefaults(e) {
    e.preventDefault()
    e.stopPropagation()
}

dropArea.addEventListener('drop', handleDrop, false)


function handleDrop(e) {
    let dt = e.dataTransfer
    let files = dt.files

    handleFiles(files)
}

function uploadFile(file, i) {
    let url = '	https://api.cloudinary.com/v1_1/kanmi24/upload';

    var xhr = new XMLHttpRequest()
    var formData = new FormData()
    xhr.open('POST', url, true);
    formData.append('upload_preset', CLOUDINARY_PRESET);
    
    xhr.upload.addEventListener("progress", function(e) {
        updateProgress(i, (e.loaded * 100.0 / e.total) || 100)
    })

    xhr.addEventListener('readystatechange', function(e) {
        if (xhr.readyState == 4 && xhr.status == 200) {
            displayMsg.textContent = "Upload Successful!";
            displayMsg.style.display = "inline-block";
            displayMsg.classList.add("alert-success");
            console.log(e);
        }
        else if (xhr.readyState == 4 && xhr.status != 200) {
            displayMsg.textContent = "Failed to upload image.";
            displayMsg.style.display = "inline-block";
            displayMsg.classList.add("alert-danger");
            console.log(e)
        }
      })
    
      formData.append('file', file)
      xhr.send(formData)

}