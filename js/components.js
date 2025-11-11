// Mobile detection
const useMobile = () => {
  const isMobile = window.innerWidth < 768;
  
  window.addEventListener('resize', () => {
    return window.innerWidth < 768;
  });
  
  return { isMobile };
};

// Toast notifications
const useToast = (() => {
  const toastContainer = document.createElement('div');
  toastContainer.className = 'toast-container';
  document.body.appendChild(toastContainer);
  
  return {
    show: (message, type = 'info') => {
      const toast = document.createElement('div');
      toast.className = `toast toast-${type} slide-in-right`;
      toast.textContent = message;
      
      toastContainer.appendChild(toast);
      
      setTimeout(() => {
        toast.classList.add('fade-out');
        setTimeout(() => {
          toastContainer.removeChild(toast);
        }, 300);
      }, 3000);
    }
  };
})();

// Star Rating Component
class StarRating extends HTMLElement {
  constructor() {
    super();
    this.rating = 0;
    this.render();
  }
  
  render() {
    this.innerHTML = `
      <div class="star-rating">
        ${Array.from({ length: 5 }, (_, i) => `
          <button class="star ${i < this.rating ? 'active' : ''}" 
                  data-value="${i + 1}">★</button>
        `).join('')}
      </div>
    `;
    
    this.querySelectorAll('.star').forEach(star => {
      star.addEventListener('click', () => {
        this.rating = parseInt(star.dataset.value);
        this.render();
        this.dispatchEvent(new CustomEvent('rating-changed', { 
          detail: { rating: this.rating }
        }));
      });
    });
  }
}

customElements.define('star-rating', StarRating);

// Recipe Step Component
class RecipeStep extends HTMLElement {
  constructor() {
    super();
    this.render();
  }
  
  render() {
    const number = this.getAttribute('number');
    const instruction = this.getAttribute('instruction');
    
    this.innerHTML = `
      <div class="recipe-step slide-in-left">
        <div class="step-number">${number}</div>
        <div class="step-instruction">${instruction}</div>
      </div>
    `;
  }
}

customElements.define('recipe-step', RecipeStep);

// Comment Section Component
class CommentSection extends HTMLElement {
  constructor() {
    super();
    this.comments = [];
    this.render();
  }
  
  async connectedCallback() {
    // Simulacija učitavanja komentara
    this.comments = await this.loadComments();
    this.render();
  }
  
  async loadComments() {
    // Ovde bi išao API poziv
    return [];
  }
  
  addComment(comment) {
    this.comments.push({
      id: Date.now(),
      ...comment
    });
    this.render();
  }
  
  render() {
    this.innerHTML = `
      <div class="comments-section">
        <h3>Commentaires</h3>
        <div class="comments-list">
          ${this.comments.map(comment => `
            <div class="comment fade-in">
              <div class="comment-header">
                <strong>${comment.author}</strong>
                <span>${new Date(comment.id).toLocaleDateString()}</span>
              </div>
              <div class="comment-body">${comment.text}</div>
            </div>
          `).join('')}
        </div>
        <form class="comment-form">
          <input type="text" placeholder="Votre nom" required>
          <textarea placeholder="Votre commentaire" required></textarea>
          <button type="submit">Envoyer</button>
        </form>
      </div>
    `;
    
    this.querySelector('form').addEventListener('submit', (e) => {
      e.preventDefault();
      const form = e.target;
      this.addComment({
        author: form.querySelector('input').value,
        text: form.querySelector('textarea').value
      });
      form.reset();
      useToast.show('Commentaire ajouté!', 'success');
    });
  }
}

customElements.define('comment-section', CommentSection);