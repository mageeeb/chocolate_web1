(function(){
  const ingredients = [
    "4 œufs",
    "200g de sucre",
    "200g de farine",
    "50g de cacao en poudre",
    "1 sachet de levure chimique",
    "100ml d'huile",
    "100ml de lait",
    "200g de chocolat noir",
    "200ml de crème liquide",
    "200g de noix de coco râpée"
  ];

  const steps = [
    { title: "Étape 1 : Préparer la pâte", description: "Mélangez les œufs avec le sucre jusqu'à obtenir un mélange mousseux. Ajoutez l'huile et le lait, puis mélangez bien." },
    { title: "Étape 2 : Ajouter les ingrédients secs", description: "Tamisez la farine avec le cacao et la levure. Incorporez délicatement au mélange précédent jusqu'à obtenir une pâte homogène." },
    { title: "Étape 3 : Cuisson", description: "Versez la pâte dans un moule beurré et fariné. Faites cuire à 180°C pendant 25-30 minutes. Laissez refroidir complètement." },
    { title: "Étape 4 : Préparer la ganache", description: "Faites chauffer la crème liquide sans la faire bouillir. Versez-la sur le chocolat concassé et mélangez jusqu'à obtenir une ganache lisse." },
    { title: "Étape 5 : Découper et tremper", description: "Découpez le gâteau refroidi en petits cubes. Trempez chaque cube dans la ganache de chocolat en les enrobant bien." },
    { title: "Étape 6 : Enrober de noix de coco", description: "Roulez immédiatement chaque cube dans la noix de coco râpée. Placez au réfrigérateur pendant au moins 2 heures avant de servir." }
  ];

  // Populate ingredients
  const ingrEl = document.getElementById('ingredientsList');
  if(ingrEl){
    ingredients.forEach(i=>{
      const li = document.createElement('li');
      li.innerHTML = `<span class="recette-dot"></span><span>${i}</span>`;
      ingrEl.appendChild(li);
    });
  }

  // Populate steps with alternating sides and add staggered reveal delays
  const stepsContainer = document.getElementById('stepsContainer');
  if(stepsContainer){
    steps.forEach((s, idx)=>{
      const side = (idx % 2 === 0) ? 'left' : 'right';
      const wrap = document.createElement('div');
      wrap.className = `recette-step ${side}`;
      // set a small stagger delay per step (will be applied when revealed)
      wrap.style.transitionDelay = `${idx * 120}ms`;
      wrap.dataset.index = idx;
      wrap.innerHTML = `
        <div class="recette-card">
          <div style="display:flex;align-items:center;">
            ${ side === 'left' ? `<div style="flex:1"></div>`: '' }
            <div style="display:flex;align-items:center;">
              <div class="recette-bubble-num">${idx+1}</div>
              <div style="max-width:360px;margin-left:8px;margin-right:8px">
                <h3 style="margin:0 0 6px">${s.title}</h3>
                <p class="recette-muted" style="margin:0">${s.description}</p>
              </div>
            </div>
            ${ side === 'right' ? `<div style="flex:1"></div>`: '' }
          </div>
        </div>
      `;
      stepsContainer.appendChild(wrap);
    });

    // Reveal on scroll with IntersectionObserver
    const obs = new IntersectionObserver((entries)=>{
      entries.forEach(e=>{
        if(e.isIntersecting){
          // when observed, add revealed class which uses the element's transitionDelay
          e.target.classList.add('revealed');
          // unobserve to avoid repeated triggers
          obs.unobserve(e.target);
        }
      });
    }, {threshold:0.18});

    document.querySelectorAll('.recette-step').forEach(el=>obs.observe(el));
  }

  // Smooth scroll from the header down arrow to the steps section
  const downBtn = document.getElementById('downBtn');
  if(downBtn){
    downBtn.style.cursor = 'pointer';
    downBtn.addEventListener('click', function(){
      const target = document.getElementById('stepsSection');
      if(target){
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  }

  // Simple comments saved to localStorage
  const commentsKey = 'recette01Comments:v1';
  const commentForm = document.getElementById('commentForm');
  const commentsList = document.getElementById('commentsList');

  function loadComments(){
    const raw = localStorage.getItem(commentsKey);
    const arr = raw ? JSON.parse(raw) : [];
    if(commentsList){
      commentsList.innerHTML = '';
      arr.forEach(c=>{
        const d = document.createElement('div'); d.className='recette-comment';
        d.innerHTML = `<strong>${escapeHtml(c.author)}</strong> <div style="color:#777;font-size:12px">${new Date(c.ts).toLocaleString()}</div><div style="margin-top:6px">${escapeHtml(c.text)}</div>`;
        commentsList.appendChild(d);
      });
    }
  }

  function escapeHtml(s){ return String(s).replace(/[&<>"']/g, function(m){ return {'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":"&#39;"}[m]; }); }

  if(commentForm){
    commentForm.addEventListener('submit', function(ev){
      ev.preventDefault();
      const author = document.getElementById('commentAuthor').value.trim() || 'Anonyme';
      const text = document.getElementById('commentText').value.trim();
      if(!text) return;
      const raw = localStorage.getItem(commentsKey);
      const arr = raw ? JSON.parse(raw) : [];
      arr.unshift({author, text, ts: Date.now()});
      localStorage.setItem(commentsKey, JSON.stringify(arr));
      document.getElementById('commentAuthor').value = '';
      document.getElementById('commentText').value = '';
      loadComments();
    });
  }

  // initial load
  loadComments();
})();
