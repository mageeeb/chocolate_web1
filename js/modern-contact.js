/**
 * Animations modernes pour le nouveau formulaire de contact
 * Créé spécifiquement pour le formulaire avec Prénom, Nom, Email, Message
 */

document.addEventListener('DOMContentLoaded', () => {
  // Sélection des éléments du nouveau formulaire
  const modernForm = document.getElementById('new-contact-form');
  const modernInputs = document.querySelectorAll('.modern-input, .modern-textarea');
  const modernLabels = document.querySelectorAll('.modern-label');
  const submitBtn = document.querySelector('.modern-submit-btn');
  
  if (!modernForm) return; // Protection si le formulaire n'existe pas
  
  // ============================================
  // ANIMATIONS DES CHAMPS DE SAISIE
  // ============================================
  
  const setupInputAnimations = () => {
    modernInputs.forEach(input => {
      const label = input.nextElementSibling;
      const focusBorder = input.parentElement.querySelector('.modern-focus-border');
      
      // Animation au focus
      input.addEventListener('focus', () => {
        createRippleEffect(input);
        input.parentElement.classList.add('focused');
      });
      
      // Animation au blur
      input.addEventListener('blur', () => {
        if (!input.value.trim()) {
          input.parentElement.classList.remove('focused');
        }
      });
      
      // Animation pendant la saisie
      input.addEventListener('input', () => {
        validateField(input);
        createTypingEffect(input);
      });
      
      // Vérifier les champs pré-remplis
      if (input.value.trim()) {
        input.parentElement.classList.add('focused');
      }
    });
  };
  
  // ============================================
  // EFFETS VISUELS
  // ============================================
  
  // Effet de ripple au focus
  const createRippleEffect = (element) => {
    const ripple = document.createElement('div');
    const rect = element.getBoundingClientRect();
    const size = Math.max(rect.width, rect.height);
    
    ripple.style.cssText = `
      position: absolute;
      border-radius: 50%;
      background: rgba(255, 215, 0, 0.3);
      transform: scale(0);
      animation: ripple 0.6s linear;
      width: ${size}px;
      height: ${size}px;
      left: 50%;
      top: 50%;
      margin-left: ${-size / 2}px;
      margin-top: ${-size / 2}px;
      pointer-events: none;
      z-index: 1;
    `;
    
    element.parentElement.style.position = 'relative';
    element.parentElement.appendChild(ripple);
    
    setTimeout(() => {
      if (ripple.parentElement) {
        ripple.parentElement.removeChild(ripple);
      }
    }, 600);
  };
  
  // Effet de frappe - particules lors de la saisie
  const createTypingEffect = (element) => {
    if (Math.random() > 0.8) { // Effet aléatoire pour ne pas surcharger
      const particle = document.createElement('span');
      particle.textContent = '✨';
      particle.style.cssText = `
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #ffd700;
        font-size: 12px;
        pointer-events: none;
        z-index: 10;
        animation: sparkleUp 1s ease-out forwards;
      `;
      
      element.parentElement.appendChild(particle);
      
      setTimeout(() => {
        if (particle.parentElement) {
          particle.parentElement.removeChild(particle);
        }
      }, 1000);
    }
  };
  
  // ============================================
  // VALIDATION TEMPS RÉEL
  // ============================================
  
  const validateField = (input) => {
    const value = input.value.trim();
    const type = input.type;
    const id = input.id;
    
    let isValid = true;
    let message = '';
    
    // Validation selon le type de champ
    switch (id) {
      case 'prenom':
      case 'nom':
        isValid = value.length >= 2;
        message = isValid ? '✓ Valide' : '⚠ Au moins 2 caractères';
        break;
        
      case 'email-modern':
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        isValid = emailRegex.test(value);
        message = isValid ? '✓ Email valide' : '✉ Format email requis';
        break;
        
      case 'message-modern':
        isValid = value.length >= 10;
        message = isValid ? '✓ Message valide' : '📝 Au moins 10 caractères';
        break;
    }
    
    // Appliquer les styles de validation
    if (value.length > 0) {
      if (isValid) {
        input.style.borderColor = '#4CAF50';
        input.style.boxShadow = '0 0 15px rgba(76, 175, 80, 0.3)';
      } else {
        input.style.borderColor = '#ff5722';
        input.style.boxShadow = '0 0 15px rgba(255, 87, 34, 0.3)';
      }
      
      // Afficher le message de validation
      showValidationMessage(input, message, isValid);
    } else {
      // Reset des styles si vide
      input.style.borderColor = '';
      input.style.boxShadow = '';
      hideValidationMessage(input);
    }
    
    return isValid;
  };
  
  const showValidationMessage = (input, message, isValid) => {
    let validationMsg = input.parentElement.querySelector('.validation-message');
    
    if (!validationMsg) {
      validationMsg = document.createElement('div');
      validationMsg.className = 'validation-message';
      validationMsg.style.cssText = `
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 12px;
        font-weight: bold;
        pointer-events: none;
        z-index: 10;
        transition: all 0.3s ease;
        opacity: 0;
      `;
      input.parentElement.appendChild(validationMsg);
    }
    
    validationMsg.textContent = message;
    validationMsg.style.color = isValid ? '#4CAF50' : '#ff5722';
    validationMsg.style.opacity = '1';
  };
  
  const hideValidationMessage = (input) => {
    const validationMsg = input.parentElement.querySelector('.validation-message');
    if (validationMsg) {
      validationMsg.style.opacity = '0';
    }
  };
  
  // ============================================
  // ANIMATION DU BOUTON SUBMIT
  // ============================================
  
  const setupSubmitButton = () => {
    if (!submitBtn) return;
    
    const originalText = submitBtn.querySelector('.btn-text').textContent;
    const btnText = submitBtn.querySelector('.btn-text');
    const btnIcon = submitBtn.querySelector('.btn-icon');
    
    // Animation au survol
    submitBtn.addEventListener('mouseenter', () => {
      btnIcon.style.transform = 'rotate(360deg) scale(1.2)';
      createButtonParticles(submitBtn);
    });
    
    submitBtn.addEventListener('mouseleave', () => {
      btnIcon.style.transform = 'rotate(0deg) scale(1)';
    });
    
    // Animation au clic / soumission
    submitBtn.addEventListener('click', (e) => {
      e.preventDefault();
      
      // Vérifier si tous les champs sont valides
      const allValid = Array.from(modernInputs).every(input => {
        return input.value.trim() && validateField(input);
      });
      
      if (allValid) {
        animateSubmissionSuccess();
      } else {
        animateSubmissionError();
        highlightInvalidFields();
      }
    });
  };
  
  const createButtonParticles = (button) => {
    for (let i = 0; i < 8; i++) {
      const particle = document.createElement('div');
      particle.style.cssText = `
        position: absolute;
        width: 4px;
        height: 4px;
        background: #fff;
        border-radius: 50%;
        pointer-events: none;
        z-index: 1000;
        left: ${Math.random() * 100}%;
        top: ${Math.random() * 100}%;
        animation: buttonParticle 1s ease-out forwards;
      `;
      
      button.appendChild(particle);
      
      setTimeout(() => {
        if (particle.parentElement) {
          particle.parentElement.removeChild(particle);
        }
      }, 1000);
    }
  };
  
  const animateSubmissionSuccess = () => {
    const btnText = submitBtn.querySelector('.btn-text');
    const btnIcon = submitBtn.querySelector('.btn-icon');
    
    btnText.textContent = 'Message envoyé !';
    btnIcon.textContent = '✅';
    submitBtn.style.background = 'linear-gradient(45deg, #4CAF50, #66BB6A)';
    
    // Effet de confettis
    createConfettiEffect();
    
    // Reset après 3 secondes
    setTimeout(() => {
      btnText.textContent = 'Envoyer le message';
      btnIcon.textContent = '✨';
      submitBtn.style.background = 'linear-gradient(45deg, #ffd700, #ffaa00)';
    }, 3000);
  };
  
  const animateSubmissionError = () => {
    submitBtn.style.animation = 'shake 0.5s ease-in-out';
    
    setTimeout(() => {
      submitBtn.style.animation = '';
    }, 500);
  };
  
  const highlightInvalidFields = () => {
    modernInputs.forEach(input => {
      if (!input.value.trim() || !validateField(input)) {
        input.style.animation = 'shake 0.5s ease-in-out';
        
        setTimeout(() => {
          input.style.animation = '';
        }, 500);
      }
    });
  };
  
  const createConfettiEffect = () => {
    const colors = ['#ffd700', '#ff6b6b', '#4ecdc4', '#45b7d1', '#96ceb4'];
    
    for (let i = 0; i < 50; i++) {
      const confetti = document.createElement('div');
      confetti.style.cssText = `
        position: fixed;
        width: 8px;
        height: 8px;
        background: ${colors[Math.floor(Math.random() * colors.length)]};
        left: ${Math.random() * 100}vw;
        top: -10px;
        z-index: 10000;
        pointer-events: none;
        animation: confettiFall ${2 + Math.random() * 3}s linear forwards;
      `;
      
      document.body.appendChild(confetti);
      
      setTimeout(() => {
        if (confetti.parentElement) {
          confetti.parentElement.removeChild(confetti);
        }
      }, 5000);
    }
  };
  
  // ============================================
  // INITIALISATION
  // ============================================
  
  const initModernForm = () => {
    setupInputAnimations();
    setupSubmitButton();
    
    // Ajouter les animations CSS manquantes
    const style = document.createElement('style');
    style.textContent = `
      @keyframes ripple {
        to { transform: scale(4); opacity: 0; }
      }
      
      @keyframes sparkleUp {
        0% { opacity: 1; transform: translateY(-50%) scale(1); }
        100% { opacity: 0; transform: translateY(-80%) scale(0.5); }
      }
      
      @keyframes shake {
        0%, 100% { transform: translateX(0); }
        10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
        20%, 40%, 60%, 80% { transform: translateX(5px); }
      }
      
      @keyframes buttonParticle {
        0% { opacity: 1; transform: scale(1); }
        100% { opacity: 0; transform: scale(0) translateY(-20px); }
      }
      
      @keyframes confettiFall {
        to { transform: translateY(100vh) rotate(360deg); }
      }
    `;
    document.head.appendChild(style);
  };
  
  // Lancer l'initialisation
  initModernForm();
});