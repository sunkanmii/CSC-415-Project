const CLOUDINARY_PRESET = 'njr1g5gt';
let dropArea = document.getElementById('drop-area')

;['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
    dropArea.addEventListener(eventName, preventDefaults, false)
})

;['dragenter', 'dragover'].forEach(eventName => {
    dropArea.addEventListener(eventName, highlight, false)
})

;['dragleave', 'drop'].forEach(eventName => {
    dropArea.addEventListener(eventName, unhighlight, false)
})

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

function handleFiles(files) {
    ([...files]).forEach(uploadFile)
}


dropArea.addEventListener('drop', handleDrop, false)

function handleFiles(files) {
    ([...files]).forEach(uploadFile)
}
function handleDrop(e) {
    let dt = e.dataTransfer
    let files = dt.files
    
    handleFiles(files)
}

function uploadFile(file) {
    let url = '	https://api.cloudinary.com/v1_1/kanmi24/upload'
    
    let formData = new FormData();
    formData.append('file', file);
    formData.append('upload_preset', CLOUDINARY_PRESET);

    axios({
        url: url,
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        data: formData
    }).then(function(res) {
        console.log(res);
    }).catch(function(err) {
        console.error(err);
    })
}