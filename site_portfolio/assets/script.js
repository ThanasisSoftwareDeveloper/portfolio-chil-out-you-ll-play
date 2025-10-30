// assets/script.js
document.addEventListener('DOMContentLoaded', function(){
  const toggle = document.getElementById('menu-toggle');
  const nav = document.getElementById('nav-menu');
  const navEl = nav || document.querySelector('.main-nav');

  // Ασφάλεια αν δεν υπάρχουν τα στοιχεία (π.χ. σε άλλες σελίδες)
  if (toggle) {
    toggle.addEventListener('click', () => {
      if (navEl) navEl.classList.toggle('open'); // ανοίγει/κλείνει μόνο σε μικρά πλάτη
      toggle.classList.toggle('open');
    });
  }

  // Κλείσιμο με tap σε link (ευχάριστο για κινητά)
  if (navEl) {
    navEl.addEventListener('click', (e) => {
      const a = e.target.closest('a');
      if (!a) return;
      // σε μικρή οθόνη κλείνουμε το menu μετά το tap
      if (window.matchMedia('(max-width: 480px)').matches) {
        navEl.classList.remove('open');
        if (toggle) toggle.classList.remove('open');
      }
    });
  }

  // Bitcoin toggle & copy (donate page)
  const btcBtn = document.getElementById('show-btc');
  if(btcBtn){
    btcBtn.addEventListener('click', () => {
      const addr = document.getElementById('btc-addr');
      if (!addr) return;
      addr.style.display = (addr.style.display === 'block') ? 'none' : 'block';
    });
  }

  const copyBtn = document.getElementById('copy-btc');
  if(copyBtn){
    copyBtn.addEventListener('click', () => {
      const el = document.getElementById('btc-addr-text');
      if (!el) return;
      const addrText = el.innerText.trim();
      navigator.clipboard.writeText(addrText).then(() => {
        alert('Bitcoin address copied to clipboard');
      });
    });
  }

  // Αν αλλάξει το μέγεθος οθόνης σε μεγάλο, βεβαιώσου ότι το menu φαίνεται.
  // Κι αν επιστρέψουμε σε μικρό, το κλείνουμε προεπιλογή.
  const mq = window.matchMedia('(min-width: 481px)');
  const syncMenu = () => {
    if (!navEl) return;
    if (mq.matches) {
      navEl.classList.add('open'); // μεγάλο πλάτος: πάντα ανοιχτό/ορατό
    } else {
      navEl.classList.remove('open'); // μικρό πλάτος: κλειστό μέχρι click
    }
  };
  syncMenu();
  mq.addEventListener('change', syncMenu);
});