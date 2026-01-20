
document.addEventListener("DOMContentLoaded", () => {
    const mobileToggle = document.querySelector(".mobile-menu-toggle")
    const navLinks = document.querySelector(".nav-links")
  
    if (mobileToggle) {
      mobileToggle.addEventListener("click", () => {
        navLinks.classList.toggle("active")
      })
    }
  

    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
      anchor.addEventListener("click", function (e) {
        e.preventDefault()
        const target = document.querySelector(this.getAttribute("href"))
        if (target) {
          target.scrollIntoView({
            behavior: "smooth",
            block: "start",
          })
        }
      })
    })
  
    window.addEventListener("scroll", () => {
      const header = document.querySelector(".header")
      if (window.scrollY > 100) {
        header.style.background = "rgba(255, 255, 255, 0.98)"
      } else {
        header.style.background = "rgba(255, 255, 255, 0.95)"
      }
    })
  })
  