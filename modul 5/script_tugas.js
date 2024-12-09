$(document).ready(function() {
    // Menampilkan gambar dengan efek fade-in saat halaman dimuat
    $('.gallery img').fadeIn(1000);

    // Membuka modal saat gambar diklik
    $('.gallery img').click(function() {
        var src = $(this).attr('src');
        $('#modalImage').attr('src', src);
        $('#myModal').fadeIn();
    });

    // Menutup modal saat tombol "Close" diklik
    $('.close').click(function() {
        $('#myModal').fadeOut();
    });

    // Menutup modal saat area di luar gambar diklik
    $(window).click(function(event) {
        if ($(event.target).is('#myModal')) {
            $('#myModal').fadeOut();
        }
    });
});
