var header = document.querySelector(".sidebar");
var btns = header.getElementsByClassName("sidebar-list-item");
btns.forEach((btn) => {
    btn.addEventListener('click', () => {
        var current = document.querySelector(".active");
        current.classList.remove('active');
        btn.classList.add('active');
    })
})
/*
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  
  current[0].classList.remove('active');
  btns[i].classList.add('active');
  });
}*/