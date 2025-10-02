// Smooth alert on button click
document.getElementById("contactBtn").addEventListener("click", function () {
  alert("Thanks for visiting my portfolio! 💖 Feel free to send me an email.");
});

// Project card click event
const projects = document.querySelectorAll(".project-card");
projects.forEach(card => {
  card.addEventListener("click", () => {
    alert(`You clicked on ${card.textContent}`);
  });
});

// Dark mode toggle
const themeToggle = document.getElementById("themeToggle");
themeToggle.addEventListener("click", () => {
  document.body.classList.toggle("dark");
  themeToggle.textContent = 
    document.body.classList.contains("dark") ? "☀️ Light Mode" : "🌙 Dark Mode";
});

// Fade-in on scroll
const sections = document.querySelectorAll("section");
const revealOnScroll = () => {
  const triggerBottom = window.innerHeight * 0.85;
  sections.forEach(section => {
    const sectionTop = section.getBoundingClientRect().top;
    if (sectionTop < triggerBottom) {
      section.classList.add("show");
    }
  });
};
window.addEventListener("scroll", revealOnScroll);
revealOnScroll();
// Make tabs functional
document.addEventListener("DOMContentLoaded", () => {
  const tabs = document.querySelectorAll(".tab");
  const contents = document.querySelectorAll(".tab-content");

  tabs.forEach(tab => {
    tab.addEventListener("click", () => {
      // remove active class from all
      tabs.forEach(t => t.classList.remove("active"));
      contents.forEach(c => c.classList.remove("active"));

      // add active class to clicked tab + content
      tab.classList.add("active");
      document.getElementById(tab.dataset.tab).classList.add("active");
    });
  });
});
const lightbox = document.getElementById('lightbox');
const lightboxImg = document.getElementById('lightbox-img');
const galleryItems = document.querySelectorAll('.gallery-item img');
const closeBtn = document.querySelector('.lightbox .close');

galleryItems.forEach(item => {
  item.addEventListener('click', () => {
    lightbox.style.display = 'block';
    lightboxImg.src = item.src;
  });
});

closeBtn.addEventListener('click', () => {
  lightbox.style.display = 'none';
});

lightbox.addEventListener('click', (e) => {
  if (e.target === lightbox) {
    lightbox.style.display = 'none';
  }
});
// Fetch Midterm using fetch()
fetch("grades_proxy.php")
  .then(response => response.text())
  .then(data => {
    let parser = new DOMParser();
    let xmlDoc = parser.parseFromString(data, "application/xml");

    let students = xmlDoc.getElementsByTagName("student");
    for (let i = 0; i < students.length; i++) {
      let id = students[i].getElementsByTagName("student_id")[0].textContent;
      if (id === "2340084") {
        let midterm = students[i].getElementsByTagName("midterm_grade")[0].textContent;
        document.getElementById("midterm-grade").textContent = midterm;
      }
    }
  })
  .catch(error => {
    document.getElementById("midterm-grade").textContent = "Error loading";
    console.error(error);
  });

// Fetch Final using XMLHttpRequest
let xhr = new XMLHttpRequest();
xhr.open("GET", "grades_proxy.php", true);
xhr.onreadystatechange = function() {
  if (xhr.readyState === 4 && xhr.status === 200) {
    let xmlDoc = xhr.responseXML;
    let students = xmlDoc.getElementsByTagName("student");

    for (let i = 0; i < students.length; i++) {
      let id = students[i].getElementsByTagName("student_id")[0].textContent;
      if (id === "2340084") {
        let final = students[i].getElementsByTagName("final_grade")[0].textContent;
        document.getElementById("final-grade").textContent = final;
      }
    }
  }
};
xhr.send();
