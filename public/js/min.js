function readmorebtn() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "แสดงภาพบรรยากาศสถานที่";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "ซ่อนเนื้อหา";
      moreText.style.display = "inline";
    }
  }
