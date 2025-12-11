document.addEventListener('DOMContentLoaded', ()=> {
  const slides = Array.from(document.querySelectorAll('.slide'));
  const dotsContainer = document.querySelector('.dots');
  const upBtn = document.getElementById('upBtn');
  const downBtn = document.getElementById('downBtn');
  const total = slides.length;
  let index = 0;
  let timer = null;

  slides.forEach((s, i) => {
    const b = document.createElement('button');
    b.type = 'button';
    if(i===0) b.classList.add('active');
    b.addEventListener('click', () => {
      goTo(i);
      resetAuto();
    });
    dotsContainer.appendChild(b);
  });
  const dots = Array.from(dotsContainer.querySelectorAll('button'));

  function clearState() {
    slides.forEach(s => {
      s.classList.remove('active','next','prev-out','hidden');
    });
    dots.forEach(d => d.classList.remove('active'));
  }

  function goTo(i) {

    index = ((i % total) + total) % total;
    clearState();

    const active = slides[index];
    active.classList.add('active');

    const nextIndex = (index + 1) % total;
    const next = slides[nextIndex];
    if(next) next.classList.add('next');

    slides.forEach((s, idx) => {
      if(idx !== index && idx !== nextIndex) {
        s.classList.add('hidden');
      }
    });

    dots[index].classList.add('active');
  }

  upBtn && upBtn.addEventListener('click', ()=> { goTo(index - 1); resetAuto(); });
  downBtn && downBtn.addEventListener('click', ()=> { goTo(index + 1); resetAuto(); });

  function next() { goTo(index + 1); }
  
  function resetAuto() {
    if(timer) clearInterval(timer);
    timer = setInterval(next, 5000);
  }

  goTo(0);
  resetAuto();

  const wrapper = document.querySelector('.slider-wrapper');
  wrapper.addEventListener('mouseenter', ()=> { if(timer) clearInterval(timer); });
  wrapper.addEventListener('mouseleave', ()=> { resetAuto(); });

  window.addEventListener('keydown', (e)=>{
    if(e.key === 'ArrowUp') { goTo(index - 1); resetAuto(); }
    if(e.key === 'ArrowDown') { goTo(index + 1); resetAuto(); }
  });
});


const items_right = document.querySelectorAll('.slide-right');

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        }
    });
});

items_right.forEach(item => observer.observe(item));


const items_left = document.querySelectorAll('.slide-left');

const observer_left = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        }
    });
});

items_left.forEach(item => observer_left.observe(item));
