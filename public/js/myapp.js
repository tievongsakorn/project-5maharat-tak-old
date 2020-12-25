function readmorefunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "อ่านเพิ่มเติม";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "แสดงน้อยลง";
      moreText.style.display = "inline";
    }
  }
  function MyplaceDelFunction() {
    var txt;
    if (confirm("Press a button!")) {
      txt = "You pressed OK!";
    } else {
      txt = "You pressed Cancel!";
    }
  }