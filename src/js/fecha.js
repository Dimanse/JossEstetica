document.addEventListener('DOMContentLoaded', function() {
const fecha = document.querySelector('#fecha');
const now = new Date();

const now_string =  new Intl.DateTimeFormat('es-CR', {
    dateStyle: 'full',
    timeStyle: 'short',
    timeZone: 'America/Costa_Rica',
  }).format(now);
  console.log(now_string);
  const date = document.createElement('P');
  date.classList.add('footer__copyright');
  date.textContent = now_string;
  fecha.appendChild(date);
});