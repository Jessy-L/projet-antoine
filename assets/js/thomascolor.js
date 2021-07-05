function generator(){
    console.log('generator');
    var color = Math.floor(Math.random()*16777215).toString(16);
    document.getElementById('features').style.backgroundColor='#' + color;
    console.log(color);
}

generator();