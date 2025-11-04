document.addEventListener('DOMContentLoaded', function () {
  const toggle = document.getElementById('menu-toggle');
  const nav = document.getElementById('nav-menu');

  toggle.addEventListener('click', () => {
    nav.classList.toggle('open');
  });

  if (window.innerWidth >= 768) {
    toggle.addEventListener('mouseenter', () => {
      nav.classList.add('open');
    });
    nav.addEventListener('mouseleave', () => {
      nav.classList.remove('open');
    });
  }

  const btcBtn = document.getElementById('show-btc');
  if (btcBtn) {
    btcBtn.addEventListener('click', () => {
      const addr = document.getElementById('btc-addr');
      addr.style.display = addr.style.display === 'block' ? 'none' : 'block';
    });
  }

  const copyBtn = document.getElementById('copy-btc');
  if (copyBtn) {
    copyBtn.addEventListener('click', () => {
      const addrText = document.getElementById('btc-addr-text').innerText;
      navigator.clipboard.writeText(addrText).then(() => {
        alert('Bitcoin address copied to clipboard');
      });
    });
  }
});
