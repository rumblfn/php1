const input = document.querySelector('.input-file');
const inputSend = document.querySelector('.send-file');
const label = document.querySelector('.label-select');
const label2 = document.querySelector('.label-insert');

// input.addEventListener("change", handleFiles);
// inputSend.addEventListener("click", sendFile);

// let file = "";

// function handleFiles() {
//     if (this.value) {
//         let splitted = this.value.split('\\');
//         label.innerHTML = splitted[splitted.length - 1];
//         label2.style.backgroundColor = '#9ACD32';
//         file = this.files[0];
//     } else {
//         label.innerHTML = "Выберите файл";
//     }
// }

// function sendFile() {
//     console.log(file)
//     if (file) {
//         var formData = new FormData();
//         formData.append("myfile", file);
    
//         var xhr = new XMLHttpRequest();
//         xhr.open("POST", "index.php", true);
//         xhr.send(formData);
//     }
// }