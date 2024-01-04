const badge_mentoring = document.getElementById("mentoring-badge");
const badge_konseling = document.getElementById("konseling-badge");
const btn_konseling = document.getElementById("btn-konseling");
const btn_mentoring = document.getElementById("btn-mentoring");

function konseling() {
    badge_mentoring.style.display = "none";
    badge_konseling.style.display = "block";
    btn_mentoring.classList.remove("btn-secondary");
    btn_konseling.classList.remove("btn-outline-secondary");
    btn_mentoring.classList.add("btn-outline-secondary");
    btn_konseling.classList.add("btn-secondary");
}

function mentoring() {
    badge_konseling.style.display = "none";
    badge_mentoring.style.display = "block";
    btn_konseling.classList.remove("btn-secondary");
    btn_mentoring.classList.remove("btn-outline-secondary");
    btn_konseling.classList.add("btn-outline-secondary");
    btn_mentoring.classList.add("btn-secondary");
}

konseling();
