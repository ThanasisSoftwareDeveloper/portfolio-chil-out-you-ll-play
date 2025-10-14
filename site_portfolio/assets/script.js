// assets/script.js
document.addEventListener('DOMContentLoaded', function(){
  const toggle = document.getElementById('menu-toggle');
  const nav = document.getElementById('nav-menu');

  // if nav not exist (older pages) try class
  const navEl = nav || document.querySelector('.main-nav');

  toggle.addEventListener('click', () => {
    if(navEl) navEl.classList.toggle('open');
    toggle.classList.toggle('open');
  });

  // Bitcoin toggle & copy
  const btcBtn = document.getElementById('show-btc');
  if(btcBtn){
    btcBtn.addEventListener('click', () => {
      const addr = document.getElementById('btc-addr');
      addr.style.display = addr.style.display === 'block' ? 'none' : 'block';
    });
  }

  const copyBtn = document.getElementById('copy-btc');
  if(copyBtn){
    copyBtn.addEventListener('click', () => {
      const addrText = document.getElementById('btc-addr-text').innerText;
      navigator.clipboard.writeText(addrText).then(() => {
        alert('Bitcoin address copied to clipboard');
      });
    });
  }
});