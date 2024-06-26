function toggleSidebar() {
    document.querySelector('.sidebar').classList.toggle('active');
}

document.querySelectorAll('.sidebar ul li a').forEach(anchor => {
    anchor.addEventListener('click', function() {
        document.querySelector('.sidebar').classList.remove('active');
    });
});