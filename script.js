document.getElementById('show-more-btn').addEventListener('click', function() {
    const moreInfo = document.getElementById('more-info');
    
    if (moreInfo.style.display === 'none') {
        moreInfo.style.display = 'block';
        this.textContent = 'Sembunyikan Info Lain';
    } else {
        moreInfo.style.display = 'none';
        this.textContent = 'Tampilkan Info Lain';
    }
});
