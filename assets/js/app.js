$('[data-fancybox]').fancybox({
    youtube : {
        controls : 0,
        showinfo : 0
    }
});

$().fancybox({
    selector : '.certificatesGalery'
});
$().fancybox({
    selector : '.otherGalery'
});

function toggleMenu() {
  document.getElementById('navbar').classList.toggle('show');
  document.getElementById('toggle-icon').classList.toggle('fa-bars');
  document.getElementById('toggle-icon').classList.toggle('fa-times');
  document.getElementById('toggle-icon').classList.toggle('white');
}
