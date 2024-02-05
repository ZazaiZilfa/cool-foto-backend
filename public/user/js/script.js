const form = document.querySelector("form"),
fileInput = form.querySelector(".file-input"),
progressArea = document.querySelector(".progress-area"),
uploadedArea = document.querySelector(".Uploaded-area");

form.addEventListener("click", ()=>{
    fileInput.click();
});

fileInput.onchange = ({target}) =>{
    let file = target.files[0];
    if(file){
        let fileName = file.name;
        if(fileName.length >= 12){
            let splitName = fileName.split(`.`);
            fileName = splitName[0].substring(0, 12) + "... ." + splitName[1];
        }
        uploadfile(fileName);
    }
}

function uploadfile(name){
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/upload.php");
    xhr.upload.addEventListener("progress", ({loaded, total}) =>{
           let fileLoaded = Math.floor((loaded / total) * 100);
           let fileTotal = Math.floor(total /1000);
           let fileSize;
           (fileTotal < 1024) ? fileSize = fileTotal + " KB" : fileSize = (loaded / (1024 * 1024)).toFixed(2) + " MB";
           let progressHTML = `<li class="row">
           <i class='bx bxs-image' ></i>
           <div class="content">
              <div class="details">
                 <span class="name">${name} Uploading</span>
                 <span class="percent">${fileLoaded}%</span>
              </div>
              <div class="progress-bar">
                 <div class="progress" style="width: ${fileLoaded}%"></div>
              </div>
           </div>
        </li>`;
        uploadedArea.classList.add("onprogress");
        progressArea.innerHTML = progressHTML;
       if(loaded == total){
        progressArea.innerHTML  = "";
           let uploadedHTML = ` <li class="row">
           <div class="content">
              <i class='bx bxs-image' ></i>
              <div class="details">
                 <span class="name">${name} Uploaded</span>
                 <span class="size">${fileTotal}</span>
              </div>
           </div>
           <i class='bx bx-check' ></i>
        </li>`;
        uploadedArea.classList.remove("onprogress");
        uploadedArea.insertAdjacentHTML("afterbegin", uploadedHTML);
        }
    });
    let formData = new FormData(form);
    xhr.send(formData);
}