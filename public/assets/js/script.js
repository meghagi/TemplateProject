document.getElementById('menu-bars').onclick = function() {
    document.getElementById('sidebar').classList.toggle('active');
    document.querySelector('.content').classList.toggle('active');
};
