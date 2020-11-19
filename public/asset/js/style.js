function menu_open() {
    let menu_list = document.getElementById('menu-list');
    let tombol_navigasi = document.getElementsByClassName('tombol-navigasi')[0];
    menu_list.className = " tampilkan";
    tombol_navigasi.setAttribute('onclick', 'menu_close()');
}

function menu_close() {
    let menu_list = document.getElementById('menu-list');
    let tombol_navigasi = document.getElementsByClassName('tombol-navigasi')[0];
    menu_list.className = " hidden";
    tombol_navigasi.setAttribute('onclick', 'menu_open()');
}