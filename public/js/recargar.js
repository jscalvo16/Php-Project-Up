function ajax($avance){
    const http = new XMLHttpRequest();
    const url = `observacion/${$avance}`;

    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            location.reload()
        }
    }

    http.open("GET", url);
    http.send();
}
