
let box = document.getElementsByClassName('contimg');
for(let i=0; i<box.length;i++){

    if(box[i].children[1].naturalWidth == 0 ){
        box[i].style.display = 'none';

    }

}
